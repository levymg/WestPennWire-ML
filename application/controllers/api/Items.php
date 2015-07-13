<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

class Items extends REST_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("items_mdl");
        $this->load->model('categories_mdl');
        $this->load->library("form_validation");
    }

    function item_get() {
        
        if (!$this->get('item_id')) {
            $this->response(NULL, 400);
        }
        else {
            $item_id = $this->get("item_id");
            $item = $this->items_mdl->get($item_id);
            $this->response($item, 200);
        }
        
    }

    function item_post() {
        
        if(!$this->input->post("token")) {
            $this->response("Request not allowed.", 403);
        }
        else {
            $this->form_validation->set_rules('item_name', 'Item Name', 'required');
            $this->form_validation->set_rules('item_desc', 'Item Description', 'required');
            $this->form_validation->set_rules('category_id', 'Item Category', 'required');
            
            if ($this->form_validation->run() == FALSE) {
                $message = array('message' => validation_errors());
                $this->response(
                        $message,
                        400
                );
            }
            else {
                
                    $data = array(
                                "item_category" => $this->input->post("category_id"),
                                "item_name" => $this->input->post("item_name"),
                                "item_description" => $this->input->post("item_desc"),
                                "status" => 1,
                                "created_on" => time()
                            );
                    $path = $this->categories_mdl->get_by(array("category_id" => $data['item_category']));
                    $item_id = $this->items_mdl->insert($data);
                    if($item_id) {
                        $real_path = preg_replace('#[ -]+#', '-', $path->category_name);
                        $this->response(
                                array(
                                        "message" => "upload",
                                        "path" => strtolower($real_path),
                                        "item_id" => $item_id,
                                        "title" => "<span class='glyphicon glyphicon-cloud-upload'></span> Upload File",
                                        "body" => '<div class="col-lg-12">
                                                        <form action="'.base_url().'"manage_content/file-upload?path='.strtolower($real_path).'" class="dropzone" id="dropzone" enctype="multipart/form-data">

                                                        </form>
                                                    </div>
                                                  ',
                                        "footer" => "<button type='button' class='btn btn-danger' data-dismiss='modal'>Close</button>"
                                ), 
                                200
                        );
                    }
            }
        }
        
    }

    function items_get() {
        
        if(!$this->get("category_id")) {
            $items = $this->items_mdl->get_all();
        }
        elseif($this->get("category_id")) {
            $category_id = $this->get("category_id");
            $items = $this->items_mdl->get_many_by("item_category", $category_id);
        }
        if ($items) {
            foreach($items as $item):
                //$category = $this->categories_mdl->get_many_by("category_id", $item->item_category);
                //$item->category = $category->category_name;
                $item->last_update = date('m/d/y', $item->updated_on);
            endforeach;
            $this->response($items, 200);
        }
        else {
            $this->response(NULL, 200);
        }
    }
   
}
