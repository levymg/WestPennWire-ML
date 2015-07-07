<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users_mdl extends MY_Model {

        public $table = "wpwm_marketing_users";
        
	public function __construct() {
             parent::__construct();
        }
        
        public function add_user($data) {
            
            if(!$data)
                return FALSE;
            else
                $id = $this->insert($data);
            if($id)
                return $id;
            else
                return FALSE;
            
        }
        
        public function login_user($data) {
            
            if(!$data)
                return FALSE;
            else {
                
            }
            
        }
        
        public function logout_user($data) {
            
            if(!$data)
                return FALSE;
            else {
                
            }
        }
        
        public function suspend_user_by_id($data) {
            
        }
}