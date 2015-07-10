<?php

class Catalog_mdl extends MY_Model
{
    
   public $_table = "wpwm_catalog_orders";
  
   public $primary_key = 'order_id';
   
    public function unit_test() {
        
        return TRUE;
        
    }
    
    
}