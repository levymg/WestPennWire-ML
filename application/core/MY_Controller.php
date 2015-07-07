<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    
        public function __construct() {
            parent::__construct();
        }
        
        public function render_view($view, $data = NULL) {
            
            $this->load->view("template/header", $data);
            $this->load->view($view, $data);
            $this->load->view("template/footer");
            
        }
        
        public function ajax_render($view, $title, $footer) {
            
              return $this->output
                            ->set_content_type("application/json")
                            ->set_status_header(200)
                            ->set_output(json_encode(array(
                                'view'      => $view,
                                'title'     => $title,
                                'footer'    => $footer
            )));
              
        }
        
        public function check_login() {
            
            if($this->session->userdata("token")) {
                return TRUE;
            }
            else {
                return FALSE;
            }
            
        }
        
        public function public_encrypt($time, $user_id) {
            
                return $this->encryption->encrypt($time . " + " . $user_id);
            
        
        }
        
        public function public_decrypt($token) {
            
                $decrypted_token = $this->encryption->decrypt($token);
                $pieces = explode("+", $decrypted_token);
                $decrypted_user_id = $pieces[1];
                $session_user_id = $this->encryption->decrypt($this->session->userdata("user_id"));
                
                if((int)$decrypted_user_id == (int)$session_user_id) {
                    return TRUE;
                }
                else {
                    return FALSE;
                }
               
        }
        
        public function bounce() {
            redirect("admin/logout");
        }
        
}