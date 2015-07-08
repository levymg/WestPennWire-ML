<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

class Items extends REST_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("items_mdl");
        $this->load->library("form_validation");
    }

    function item_get() {
        
        if (!$this->get('id')) {
            $this->response(NULL, 400);
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
                $this->response(
                        "Item created", 
                        200
                );
            }
        }
        
    }

    function items_get() {
       
        
        $items = $this->items_mdl->get_all();
        
        if ($items) {
            $this->response($categories, 200);
        }
        else {
            $this->response(NULL, 200);
        }
    }
    
    function items_get_by_category($category_id) {
        
            if(!$this->input->post("token")) {
              $this->response("Request not allowed.", 403);
            }
            else {
                $this->form_validation->set_rules('category_name', 'Category Name', 'required');
                if ($this->form_validation->run() == FALSE) {
                    $message = array('message' => validation_errors());
                    $this->response(
                            $message,
                            400
                    );
                }
                 else {
                    $this->response(
                            "Item created", 
                            200
                                );
                        }
                    }
                }
}
