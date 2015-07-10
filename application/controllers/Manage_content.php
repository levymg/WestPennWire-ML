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
                $this->load->model("categories_mdl");
                $data['categories'] =  $this->categories_mdl->get_all();
                $data['editor'] = "Editing Items";
                $connection = $this->client->get('items/items');
                $data['items'] = json_decode($connection->getBody()->getContents());
               
                $this->view = "admin/editor/edit_items";
                $this->render_view($this->view, $data);
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
        
        public function add_item() {
            $this->load->model("categories_mdl");
            $token = $this->public_decrypt($this->input->post("token"));
            if($token) { 
                $data['categories'] =  $this->categories_mdl->get_all();
                $view = $this->load->view("admin/creator/create_item", $data, true);
                $title = '<span class="glyphicon glyphicon-file"></span><sup><span class="glyphicon glyphicon-plus-sign"></span></sup> Add File';
                $footer = "<div class='clearfix'><div class='btn-group pull-right' role='group'>
                                <button type='button' class='submit btn btn-primary' data-form-id='create_file'>
                                    <span class='glyphicon glyphicon-cloud-upload'></span> Proceed To Upload
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
        
        public function update_thumbnail() {
            $this->load->model("items_mdl");
            $token = $this->public_decrypt($this->input->post("token"));
            if($token) { 
                $data['file_id'] = $this->input->post("resource");
                $data['item'] = $this->items_mdl->get($data["file_id"]);
                $view = $this->load->view("admin/editor/upload_thumbnail", $data, true);
                $title = '<span class="glyphicon glyphicon-picture"></span><sup><span class="glyphicon glyphicon-edit"></span></sup> Change Thumbnail';
                $footer = "<div class='clearfix'><div class='btn-group pull-right' role='group'>
                                <button type='button' class='btn btn-danger' data-dismiss='modal'>
                                    Cancel
                                </button>
                            </div></div>";
            
                $this->ajax_render($view, $title, $footer);
            }
        }
        
        public function edit() {
            $token = $this->public_decrypt($this->input->post("token"));
            if($token) {
                $this->load->model("categories_mdl");
                if($this->input->post("type") == "category") {
                    $category_id = $this->input->post("resource");
                    $data['category'] = $this->categories_mdl->get($category_id);
                    $view = $this->load->view("admin/modify/category", $data, true);
                    $title = '<span class="glyphicon glyphicon-folder-close"></span><sup><span class="glyphicon glyphicon-edit"></span></sup> Edit Category';
                    $footer = "<div class='clearfix'><div class='btn-group pull-right' role='group'>
                                    <button type='button' class='submit btn btn-primary'  data-form-id='edit_category'>Save Changes</button>
                                    <button type='button' class='btn btn-danger' data-dismiss='modal'>
                                        Cancel
                                    </button>
                                </div></div>";
                }
                else {
                    $this->load->model("items_mdl");
                    $file_id = $this->input->post("resource");
                    $data['item'] = $this->items_mdl->get($file_id);
                    $view = $this->load->view("admin/modify/item", $data, true);
                    $title = '<span class="glyphicon glyphicon-file"></span><sup><span class="glyphicon glyphicon-edit"></span></sup> Edit Item';
                    $footer = "<div class='clearfix'><div class='btn-group pull-right' role='group'>
                                    <button type='button' class='btn btn-danger' data-dismiss='modal'>
                                        Cancel
                                    </button>
                                </div></div>";
                }
            
                $this->ajax_render($view, $title, $footer);
            }
        }
        
        public function upload_file() {
            
            $path = $this->input->post("path");
            $file_id = $this->input->post("file_id");
            
            if (!empty($_FILES)) {
                
                $tempFile = $_FILES['file']['tmp_name'];
                $fileName = $_FILES['file']['name'];
                $targetPath = getcwd() . '/library-assets/'.$path.'/';
                $targetFile = $targetPath . $fileName ;
                move_uploaded_file($tempFile, $targetFile);
                $this->load->model("items_mdl");
                $data = array(
                            "item_location" => '/library-assets/'.$path,
                            "item_filename" => $fileName,
                            "status" => 1,
                            "updated_on" => time(),
                            "item_thumbnail" => "default.jpg"
                        );
                $this->items_mdl->update($file_id, $data);
            }
            
        }
        
        public function change_thumbnail() {
            
            $file_id = $this->input->post("file_id");
            
            if (!empty($_FILES)) {
                
                $tempFile = $_FILES['file']['tmp_name'];
                $fileName = $_FILES['file']['name'];
                $targetPath = getcwd() . '/library-assets/thumbs/';
                $targetFile = $targetPath . $fileName ;
                move_uploaded_file($tempFile, $targetFile);
                $this->load->model("items_mdl");
                $data = array(
                            "item_thumbnail" => $fileName
                        );
                $this->items_mdl->update($file_id, $data);
            }
        }
}