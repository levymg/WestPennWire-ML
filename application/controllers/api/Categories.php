<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

class Categories extends REST_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("categories_mdl");
        $this->load->library("form_validation");
    }

    function category_get() {
        
        if (!$this->get('id')) {
            $this->response(NULL, 400);
        }
        
    }

    function category_post() {
        
        if(!$this->input->post("token")) {
            $this->response("Request not allowed.", 403);
        }
        else {
            $this->form_validation->set_rules('category_name', 'Category Name', 'required');
            $this->form_validation->set_rules('category_desc', 'Category Description', 'required');
            $this->form_validation->set_rules('category_limit', 'Order Limit', 'required');
            if ($this->form_validation->run() == FALSE) {
                $message = array('message' => validation_errors());
                $this->response(
                        $message,
                        400
                );
            }
            else {
                $data = array(
                        "category_name" => $this->input->post('category_name'),
                        "category_desc" => $this->input->post('category_desc'),
                        "category_limit" => $this->input->post('category_limit'),
                        "created_on" => time()
                );
                $this->categories_mdl->insert("lmgi_wpwm.wpwm_marketing_item_categories", $data);
                $this->response(
                        array("message" => "Category created"), 
                        200
                );
            }
        }
        
    }

    function categories_delete() {
       
    }

    function categories_get() {
       
        $categories = $this->categories_mdl->get_all_categories();

        if ($categories) {
            $this->response($categories, 200);
        }
        else {
            $this->response(NULL, 200);
        }
        
        
    }
    
}