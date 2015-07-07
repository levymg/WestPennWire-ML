<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Categories_mdl extends MY_Model {

        public $table = "wpwm_marketing_item_categories";
        
        public $categories; 
        
	public function __construct() {
             parent::__construct();
             $db_result = new StdClass();
        }
        
        public function add_category($data) {
            
            if(!$data)
                return FALSE;
            else
            $id = $this->insert($data);
            if($id)
                return $id;
            else
                return FALSE;
            
        }
        
        public function get_items_from_category($data) {
            
            if(!$data)
                return FALSE;
            else {
                
            }
            
        }
        
        public function update_category($data) {
            
        }
        
        public function get_all_categories() {
            
            $this->db->select("*");
            $this->db->from($this->table);
            $query = $this->db->get();
            
            
            if($query->num_rows() > 0 ) {
                foreach($query->row() as $row) {
                    return TRUE;
                }
            }
            else {
                return FALSE;
            }
        }
        
}