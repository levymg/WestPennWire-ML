<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loader extends MY_Controller {
    
        public function __construct() {
            parent::__construct();
            $this->load->model('categories_mdl');
            $this->load->model('items_mdl');
        }

	public function index() {
            
            $data['category'] = $this->categories_mdl->get($this->input->post("category_id"));
            $data['data'] = $this->input->post("data");
            $view = $this->load->view("library/library", $data, true);
            return $this->output
                        ->set_content_type("application/json")
                        ->set_status_header(200)
                        ->set_output(json_encode(array(
                                'html' => $view
                        )));
		
	}
        
        public function sidebar() {
            
            $data['category'] = $this->categories_mdl->get($this->input->post("category_id"));
            $data['data'] = $this->input->post("data");
            $view = $this->load->view("library/library", $data, true);
            return $this->output
                        ->set_content_type("application/json")
                        ->set_status_header(200)
                        ->set_output(json_encode(array(
                                'html' => $view
                        )));
            
        }
        
        
}
