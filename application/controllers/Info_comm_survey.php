<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Info_comm_survey extends MY_Controller {
    
        public function __construct() {
            parent::__construct();
        }

	public function index() {
		$this->render_view("survey/customer_survey");
	}
        
        
        public function submit_survey() {
            
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('company', 'Company', 'required');
            $this->form_validation->set_rules('title', 'Job Title', 'required');
            $this->form_validation->set_rules('availability' , 'Availability Rating', 'required');
            $this->form_validation->set_rules('ordering' , 'Ordering Rating', 'required');
            $this->form_validation->set_rules('quality' , 'Quality Rating', 'required');
            $this->form_validation->set_rules('sales' , 'Sales Rating', 'required');
            $this->form_validation->set_rules('techsupport' , 'Tech Support Rating', 'required');
            
             if ($this->form_validation->run() == FALSE) {
                
                   return $this->output
                            ->set_content_type('application/json')
                            ->set_status_header(400)
                            ->set_output(json_encode(array(
                                    'message' => validation_errors(),
                    )));
                   
            }
            
            else {
                
                if(!$this->input->post("markets")) {
                    
                     return $this->output
                            ->set_content_type('application/json')
                            ->set_status_header(400)
                            ->set_output(json_encode(array(
                                    'message' => "Please select at least one market.",
                    )));
                     
                }
                
                if(!$this->input->post("applications")) {
                    
                      return $this->output
                            ->set_content_type('application/json')
                            ->set_status_header(400)
                            ->set_output(json_encode(array(
                                    'message' => "Please select at least one application.",
                    )));
                      
                }
                
                if(!$this->input->post("employees")) {
                    
                       return $this->output
                            ->set_content_type('application/json')
                            ->set_status_header(400)
                            ->set_output(json_encode(array(
                                    'message' => "Please select the number of employees your company has.",
                    )));
                    
                }
                
                  if(!$this->input->post("cable")) {
                    
                       return $this->output
                            ->set_content_type('application/json')
                            ->set_status_header(400)
                            ->set_output(json_encode(array(
                                    'message' => "Please select the amount of calbe your company uses.",
                    )));
                    
                }
                
                else {
                    
                    if($this->input->post("resource") == "customer") {
                        $resource = "A response to the Customer E-Blast";
                    } elseif($this->input->post("resource") == "infocomm") {
                        $resource = "A response to the Info Comm E-Blast";
                    } else {
                        $resource = "An organic response";
                    }
            
                    $data = array(

                                "name"              =>  $this->input->post("name"),
                                "title"             =>  $this->input->post("title"),
                                "company"           =>  $this->input->post("company"),
                                "email"             =>  $this->input->post("email"),
                                "phone"             =>  $this->input->post("phone"),
                                "cell"              =>  $this->input->post("cell"),
                                "address"           =>  $this->input->post("address"),
                                "city"              =>  $this->input->post("city"),
                                "state"             =>  $this->input->post("state"),
                                "zip"               =>  $this->input->post("zip"),
                                "markets"           =>  $this->input->post("markets"),
                                "applications"      =>  $this->input->post("applications"),
                                "availability"      =>  $this->input->post("availability"),
                                "employees"         =>  $this->input->post("employees"),
                                "ordering"          =>  $this->input->post("ordering"),
                                "quality"           =>  $this->input->post("quality"),
                                "sales"             =>  $this->input->post("sales"),
                                "techsupport"       =>  $this->input->post("techsupport"),
                                "cable"             =>  $this->input->post("cable"),
                                "fiber"             =>  $this->input->post("fiber"),
                                "resource"          =>  $resource,
                                "comments"          =>  $this->input->post("comments"),
                                "created_on"        =>  time(),
                                "ip_address"        =>  $this->input->ip_address()
                        
                     );
                    
                    $this->load->model("survey_mdl");
                    
                    $this->survey_mdl->insert($data);
                    
                    $this->load->model("email_mdl");
                    
                    $result = $this->email_mdl->notify($data);
                    
                    if($result) {
                    
                        return $this->output
                             ->set_content_type('application/json')
                             ->set_status_header(200)
                             ->set_output(json_encode(array(
                                     'message' => "Thank you.  Your response has been recorded. <p><a class='btn btn-success' href='http://www.westpennwiremarketing.com'>Reload Survey</a></p>",
                        )));
                    
                    }
                    else {
                          return $this->output
                             ->set_content_type('application/json')
                             ->set_status_header(400)
                             ->set_output(json_encode(array(
                                     'message' => $result,
                        )));
                    }
            }           
        }
    }
}
