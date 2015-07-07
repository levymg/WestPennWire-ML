<?php

class Survey_mdl extends MY_Model
{
    
   public $_table = "survey_submissions";
  
   public $primary_key = 'resource_id';
   
    public function unit_test() {
        
        return TRUE;
        
    }
    
    
}