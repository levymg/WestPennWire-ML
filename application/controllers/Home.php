<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {
    
        public function __construct() {
            parent::__construct();
        }

	public function index() {
            
            if($this->session->userdata("username")) {
                $this->render_view("library/success");
            } else {
                $this->render_view("library/auth");
            }
		
	}
        
       
        
}
