<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage_content extends MY_Controller {
    
    public $view;
    protected $client;
    
        public function __construct() {
            parent::__construct();
            if(!$this->session->userdata("token")) {
                redirect("admin/logout");
            }
             $this->client = new GuzzleHttp\Client(['base_uri' => 'http://www.westpennwiremarketing.com/index.php/api/']);
        }

	public function categories() {
                $data['editor'] = "Editing Categories";
                $connection = $this->client->get('categories/categories');
                $data['categories'] = json_decode($connection->getBody()->getContents());
               
                $this->view = "admin/editor/edit_categories";
		$this->render_view($this->view, $data);
	}
        
        public function items() {
                $data['editor'] = "Editing Items";
                $this->render_view("admin/editor/edit_items", $data);
        }
        
        public function users() {
                $data['editor'] = "Editing Users";
                $this->render_view("admin/editor/edit_users", $data);
        }
        
        public function add_category() {
            
            $token = $this->public_decrypt($this->input->post("token"));
            if($token) {
                $view = $this->load->view("admin/creator/create_category", null, true);
                $title = '<span class="glyphicon glyphicon-folder-close"></span><sup><span class="glyphicon glyphicon-plus-sign"></span></sup> Add Category';
                $footer = "<div class='clearfix'><div class='btn-group pull-right' role='group'>
                                <button type='button' class='submit btn btn-primary' data-form-id='create_category'>
                                    Save Category
                                </button> 
                                <button type='button' class='btn btn-danger' data-dismiss='modal'>
                                    Cancel
                                </button>
                            </div></div>";
            
                $this->ajax_render($view, $title, $footer);
            }
            else {
                $this->bounce();
            }
        }
        
}