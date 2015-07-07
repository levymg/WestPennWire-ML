<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {
    
    public $view;
    
       public function __construct() {
            parent::__construct();
        }
        
	public function index() {
            
                $logged_in = $this->check_login();
                
                if(!$logged_in) {
                    $this->render_view("admin/login");
                }
                else {
                    $this->load->model("survey_mdl");
                    $this->view = "admin/dashboard";
                    $this->load->library("pagination");
                    $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
                    $config['total_rows'] = $this->survey_mdl->count_all();
                    $config['per_page'] = 10;
                    $config['base_url'] = base_url() . 'admin/index';
                    $this->pagination->initialize($config);
                    $data['leads'] = $this->survey_mdl->as_object()->limit(10, $page)->order_by("created_on", "DESC")->get_all();
                    $data['links'] = $this->pagination->create_links();
                    $this->render_view($this->view, $data);
                }
        }
        
        public function dologin() {
            
            $username = $this->input->post("username");
            $password = $this->input->post("password");
            
             $this->load->library('form_validation');
            
            $this->form_validation->set_rules('username', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('password', 'Password', 'required');

            if (!$this->form_validation->run() == FALSE)
            {
                $creds = array(
                        "username" => $username,
                        "password" => $password
                );

                $this->load->model('auth_mdl');

                $response = $this->auth_mdl->authenticate_user($creds);

                if($response->status == 200) {
                    $this->session->set_userdata("username", $response->username);
                    $this->session->set_userdata("user_id", $this->encryption->encrypt($response->user_id));
                    $this->session->set_userdata("token", $this->public_encrypt(time() . "+" . $response->user_id));
                    $this->session->set_userdata("last_login", $response->last_login);
                    $this->session->set_userdata("error", "");
                    
                    redirect("http://www.westpennwiremarketing.com/admin");
                }
                else {
                    $this->session->set_userdata("error", "Your username/password was incorrect");
                    redirect("http://www.westpennwiremarketing.com/admin");
                }
            }
            else {
                $this->session->set_userdata("error", $this->validation_errors());
                redirect("http://www.westpennwiremarketing.com/admin");
            }
            
        }
        
        public function logout() {
            
            $this->session->set_userdata("token", "");
            $this->session->sess_destroy();
            redirect("http://www.westpennwiremarketing.com/admin");
        }
        
        public function submission() {
            
            $resource_id = $this->input->post("resource_id");
            $args = array("resource_id" => $resource_id);
            $this->load->model("survey_mdl");
            $result = $this->survey_mdl->get_by($args);
            
            if($result->fiber !== null):
                $message = "
                            <h3>Company Information</h3>
                            <table class='table table-bordered table-striped'>
                                <tr><td><strong>Name:</strong></td><td>".$result->name."</td></tr>
                                <tr><td><strong>Job Title:</strong></td><td>".$result->title."</td></tr>
                                <tr><td><strong>Company:</strong></td><td>".$result->company."</td></tr>
                                <tr><td><strong>Phone:</strong></td><td>".$result->phone."</td></tr>
                                <tr><td><strong>Cell Phone:</strong></td><td>".$result->cell."</td></tr>
                                <tr><td><strong>Email:</strong></td><td>".$result->email."</td></tr>
                                <tr><td><strong>Address:</strong></td><td>".$result->address." ".$result->city.", ".$result->state." ".$result->country.", ".$result->zip."</td></tr>
                                <tr><td><strong>Markets Served:</strong></td><td>".$result->markets."</td></tr>
                                <tr><td><strong>Applications Installed:</strong></td><td>".$result->applications."</td></tr>
                                <tr><td><strong>Number of Employees:</strong></td><td>".$result->employees."</td></tr>
                                <tr><td><strong>Amount of Network Cable:</strong></td><td>".$result->cable."</td></tr>
                                <tr><td><strong>Amount of Fiber Optic Cable:</strong></td><td>".$result->fiber."</td></tr>
                            </table>
                            
                            <h3>Satisfication Ratings</h3>
                            <table class='table table-bordered table-striped'>
                                <tr><td><strong>Availability:</strong></td><td>".$result->availability ."</td></tr>
                                <tr><td><strong>Ordering:</strong></td><td>".$result->ordering."</td></tr>
                                <tr><td><strong>Quality:</strong></td><td>".$result->quality."</td></tr>
                                <tr><td><strong>Sales Support:</strong></td><td>".$result->sales."</td></tr>
                                <tr><td><strong>Technical Support:</strong></td><td>".$result->techsupport."</td></tr>  
                            </table>
                            
                            <h3>Customer Comments</h3>
                                " . $result->comments;
            else:
                $message = "
                                <h3>Company Information</h3>
                                <table class='table table-bordered table-striped'>
                                    <tr><td><strong>Name:</strong></td><td>".$result->name."</td></tr>
                                    <tr><td><strong>Job Title:</strong></td><td>".$result->title."</td></tr>
                                    <tr><td><strong>Company:</strong></td><td>".$result->company."</td></tr>
                                    <tr><td><strong>Phone:</strong></td><td>".$result->phone."</td></tr>
                                    <tr><td><strong>Cell Phone:</strong></td><td>".$result->cell."</td></tr>
                                    <tr><td><strong>Email:</strong></td><td>".$result->email."</td></tr>
                                    <tr><td><strong>Address:</strong></td><td>".$result->address." ".$result->city.", ".$result->state." ".$result->country.", ".$result->zip."</td></tr>
                                    <tr><td><strong>Markets Served:</strong></td><td>".$result->markets."</td></tr>
                                    <tr><td><strong>Applications Installed:</strong></td><td>".$result->applications."</td></tr>
                                    <tr><td><strong>Number of Employees:</strong></td><td>".$result->employees."</td></tr>
                                    <tr><td><strong>Amount of Network Cable:</strong></td><td>".$result->cable."</td></tr>
                                </table>

                                <h3>Satisfication Ratings</h3>
                                <table class='table table-bordered table-striped'>
                                    <tr><td><strong>Availability:</strong></td><td>".$result->availability ."</td></tr>
                                    <tr><td><strong>Ordering:</strong></td><td>".$result->ordering."</td></tr>
                                    <tr><td><strong>Quality:</strong></td><td>".$result->quality."</td></tr>
                                    <tr><td><strong>Sales Support:</strong></td><td>".$result->sales."</td></tr>
                                    <tr><td><strong>Technical Support:</strong></td><td>".$result->techsupport."</td></tr>  
                                </table>

                                <h3>Customer Comments</h3>
                                    " . $result->comments;
                                
            endif;
            
            $options = "<div class='pull-right'>
                            <button class='btn btn-danger delete' data-resource_id='" . $result->resource_id . "'>DELETE ENTRY</button><button class='btn btn-default' data-dismiss='modal'>CLOSE</button>
                        </div>
                    ";
            
            $title = "<h3>Survey Entry " . $result->resource_id . "</h3>";
            
            if($result) {
                return $this->output
                            ->set_content_type("application/json")
                            ->set_status_header(200)
                            ->set_output(json_encode(array(
                                'message' => $message,
                                'title' => $title,
                                'options' => $options
                        )));
            }
            
            else {
                return $this->output
                                    ->set_content_type("application/json")
                                    ->set_status_header(400)
                                    ->set_output(json_encode(array(
                                            'error' => "There was an error retrieving this submission.")
                    ));
            }
        }
        
        public function export() {
            
            $this->load->dbutil();
            $this->load->helper("file");
            $query = $this->db->query("SELECT name,title,company,address,city,state,zip,email,phone,cell,markets,applications,availability,ordering,quality,sales,techsupport,employees,cable,fiber,comments,resource FROM survey_submissions");
            $filename = strtotime(date('m/d/y h:i:s'));
            $data = $this->dbutil->csv_from_result($query);
            
            if (!write_file("/var/www/html/www.westpennwiremarketing.com/assets/csv/" . $filename . "-csv-generated.csv", $data)) {
                     return $this->output
                                    ->set_content_type("application/json")
                                    ->set_status_header(400)
                                    ->set_output(json_encode(array(
                                            'error' => "Error writing CSV File")
                    ));
            }
                
            else {
                 return $this->output
                            ->set_content_type("application/json")
                            ->set_status_header(200)
                            ->set_output(json_encode(array(
                                'message' => "<strong><a href='/assets/csv/" . $filename . "-csv-generated.csv'><span class='glyphicon glyphicon-download-alt'></span> Download Survey Submissions</a></strong>",
                                'title'   => "<h3><span class='glyphicon glyphicon-download'> CSV File Generated</h3>",
                                'options' => "<a class='btn btn-default' data-dismiss='modal'>CANCEL</a>"
                                )
                        ));
            }
        }
        
        public function delete() {
            
            $logged_in = $this->check_login();

            if(!$logged_in) {
                $this->render_view("admin/login");
            }
            else {

                $resource_id = $this->input->post("resource_id");
                $this->load->model("survey_mdl");

                if($this->survey_mdl->delete_many($resource_id)) {
                    return $this->output
                                ->set_content_type("application/json")
                                ->set_status_header(200)
                                ->set_output(json_encode(array(
                                        'message' => "Entry " . $resource_id . " was deleted")
                    ));
                }
                else {
                     return $this->output
                                ->set_content_type("application/json")
                                ->set_status_header(400)
                                ->set_output(json_encode(array(
                                        'message' => "Entry " . $resource_id . " was not deleted")
                    ));
                }
            }
                
        }
}
        
        