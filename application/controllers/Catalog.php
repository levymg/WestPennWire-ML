<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Catalog extends MY_Controller {
    
        public function __construct() {
            parent::__construct();
        }

	public function index() {
                $data["order"] = true;
		$this->render_view("catalog/order", $data);
	}
        
        public function submit_order() {
            $this->load->model("catalog_mdl");
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('company', 'Company', 'required');
            $this->form_validation->set_rules('title', 'Job Title', 'required');
            $this->form_validation->set_rules('address' , 'Address', 'required');
            $this->form_validation->set_rules('city' , 'City', 'required');
            $this->form_validation->set_rules('state' , 'State', 'required');
            $this->form_validation->set_rules('zip' , 'Zip', 'required');
            $this->form_validation->set_rules('quantity' , 'Quantity', 'required');
            
             if ($this->form_validation->run() == FALSE) {
                
                   return $this->output
                            ->set_content_type('application/json')
                            ->set_status_header(400)
                            ->set_output(json_encode(array(
                                    'message' => validation_errors(),
                    )));
                   
            } else {
                
                $data = array(

                                "name"              =>  $this->input->post("name"),
                                "job_title"         =>  $this->input->post("title"),
                                "company"           =>  $this->input->post("company"),
                                "email"             =>  $this->input->post("email"),
                                "phone"             =>  $this->input->post("phone"),
                                "cell"              =>  $this->input->post("cell"),
                                "address"           =>  $this->input->post("address"),
                                "country"           =>  $this->input->post("country"),
                                "city"              =>  $this->input->post("city"),
                                "state"             =>  $this->input->post("state"),
                                "zip"               =>  $this->input->post("zip"),
                                "quantity"          =>  $this->input->post("quantity"),
                                "created_on"        =>  time(),
                                "ip_address"        =>  $this->input->ip_address()
                        
                     );
                
                $order_id = $this->catalog_mdl->insert($data);
                
                if($order_id) {
                    $data['order_id'] = $order_id;
                    $this->load->model("email_mdl");
                    $this->email_mdl->order_catalog($data);
                }
                
                return $this->output
                             ->set_content_type('application/json')
                             ->set_status_header(200)
                             ->set_output(json_encode(array(
                                     'message' => "Thank you.  Your order is being processed.",
                )));
                
            }
        }
}
