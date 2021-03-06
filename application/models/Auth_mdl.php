<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth_mdl extends MY_Model {

    public $_table = "wpwm_marketing_users";
    public $primary_key = "user_id";
    
	public function __construct()
        {
            
             parent::__construct();
             
        }
        
        public function authenticate_user($creds)
        {
            
            $response = new StdClass();
            
            $this->db->select("user_id, username, active, last_login");
            
            $this->db->from("wpwm_users");
            
            $this->db->where($creds);
            
            $query = $this->db->get();
            
            if($query->row("active") == 1)
            {
                
                $last_login = array(
                                    "last_login" => time()
                             );
                
                $this->db->where("username", $creds['email']);
                $this->db->update("wpwm_users", $last_login);
               
                $response->status = 200;
                $response->user_id = $query->row('user_id');
                $response->username = $query->row('username');
                $response->last_login = $query->row("last_login");
                
            }
            else
            {
                
                $response->status = 400;
                $response->error = "User Not Found";
                
            }
            
            return $response;
            
        }
        
        public function marketing_login($creds) {
            
            $response = new StdClass();
            
            $this->db->select("user_id, email, first_name, last_name, active, last_login");
            
            $this->db->from("wpwm_marketing_users");
            
            $this->db->where($creds);
            
            $query = $this->db->get();
            
             if($query->row("active") == 1)
            {
                
                $last_login = array(
                                    "last_login" => time()
                             );
                
                $this->db->where("email", $creds['email']);
                $this->db->update("wpwm_marketing_users", $last_login);
               
                $response->status = 200;
                $response->user_id = $query->row('user_id');
                $response->username = $query->row('email');
                $response->first_name = $query->row("first_name");
                $response->last_name = $query->row("last_name");
                $response->last_login = $query->row("last_login");
                
            }
            else
            {
                
                $response->status = 400;
                $response->error = "User Not Found";
                
            }
            
            return $response;
        }
        
}