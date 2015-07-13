<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller {
    
        public function __construct() {
            
            parent::__construct();
            $this->load->model("auth_mdl");
            if(!$this->session->userdata("username")) {
                redirect("/home");
            }
        }
        
        public function bin() {
            
            $object["controller"] = $this;
            $this->render_view("library/bin", $object);
            
        }
        
        public function sidebar() {
            
          
        }
        
}