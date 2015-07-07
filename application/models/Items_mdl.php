<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Items_mdl extends MY_Model {

        public $table = "wpwm_marketing_items";
        
         public $items; 
        
	public function __construct() {
             parent::__construct();
        }
        
        public function add_item($data) {
            
            if(!$data)
                return FALSE;
            else
            $id = $this->insert($data);
            if($id)
                return $id;
            else
                return FALSE;
            
        }
        
        public function edit_item($data) {
            
            if(!$data)
                return FALSE;
            else {
                
            }
            
        }
        
}