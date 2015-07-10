<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Items_mdl extends MY_Model {

        public $_table = "wpwm_marketing_items";
        public $primary_key = 'item_id';
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
     
        
        public function enabled_items() {
            $items = $this->get_many_by(array("status" => 1));
            return $items;
        }
        
        public function edit_item($data) {
            
            if(!$data)
                return FALSE;
            else {
                
            }
            
        }
        
        public function get_items() {
            
            $items = $this->get_all();
            
            return $items;
            
        }
        
        public function get_items_by_category($category_id) {
            
            if(!$category_id)
                return FALSE;
            else {
                $items = $this->get_many_by("item_category", $category_id);
                return $items;
            }
        }
        
}