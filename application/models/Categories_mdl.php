<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Categories_mdl extends MY_Model {

        public $_table = "wpwm_marketing_item_categories";
        public $primary_key = "category_id";
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
            
            $this->categories = new StdClass();
            
            $this->db->select("*");
            $this->db->from($this->_table);
            $query = $this->db->get();
            
            if($query->num_rows() > 0 ) {
                $i = 0;
                foreach ($query->result() as $row => $key)
                {
                    $this->categories->$row = (object) array(
                                                        "category_id" => $key->category_id, 
                                                        "category_name" => $key->category_name, 
                                                        "category_desc" => $key->category_desc, 
                                                        "category_limit" => $key->category_limit
                                                      );
                }
                return $this->categories;
            }
            else {
                return FALSE;
            }
        }
        
}