<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {
    
        public function __construct() {
            parent::__construct();
            $this->load->model("items_mdl");
            $this->load->model("auth_mdl");
        }

	public function index() {
            
            if($this->session->userdata("username")) {
                $object["controller"] = $this;
                $object["userdata"] = $this->auth_mdl->get($this->session->userdata("user_id"));
                $this->render_view("library/success", $object);
            } else {
                $this->render_view("library/auth");
            }
		
	}
        
        public function sidebar() {
            
            $items = $this->items_mdl->get_latest("items");
            return $items;
            
        }
        
}
