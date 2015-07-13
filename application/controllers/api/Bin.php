<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

class Bin extends REST_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("categories_mdl");
        $this->load->model("items_mdl");
        $this->load->model("bin_mdl");
        $this->load->library("form_validation");
    }

    function bin_get() {
        
        if (!$this->get('user_id')) {
            $this->response(NULL, 400);
        }
        else {
            $user_id = $this->get('user_id');
        }
        
    }
    
    function add_post() {
        
        $item_id = $this->input->post("item_id");
        $quantity = $this->input->post("quantity");
        
        $item_category = $this->items_mdl->get($item_id);
        $category = $this->categories_mdl->get($item_category->item_category);
        $category_limit = $category->category_limit;
        
        if($quantity > $category_limit) {
            $this->response(array("error" => "You have exceeded the quantity allowed."), 400);
        }
        else {
            $
            $this->response(array("message" => $item_category->item_name. " (" . $quantity . ") has been added to your bin."), 200);
        }
        
        
    }
    
}