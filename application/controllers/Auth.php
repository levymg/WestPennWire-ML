<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MY_Controller {
    
        public function __construct() {
            
            parent::__construct();
            $this->load->model("auth_mdl");
            
        }
        
        public function dologin() {
            
            $username = $this->input->post("username");
            
            $creds = array("email" => $username);
            
            $response = $this->auth_mdl->marketing_login($creds);
            
            if($response->status == 200) {
                
                $this->session->set_userdata("login_status", "OK");
                $this->session->set_userdata("last_login", $response->last_login);
                $this->session->set_userdata("username", $response->username);
                
                redirect("home");
            } else {
                $this->session->set_flashdata('error', 'The username was not found or your account is inactive');
                redirect("home");
            }
            
        }
        
        public function logout() {
            
            $this->session->set_userdata("username", "");
            $this->session->sess_destroy();
            redirect("home");
            
        }
}