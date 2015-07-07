<?php

class Mail_test extends MY_Controller {
    
    
    public function __construct()
    {
        
        parent::__construct();
        
    }

    public function index() {
        
            $this->load->library('email');

            $config['protocol']    = 'smtp';
            $config['smtp_host']    = 'ssl://smtp.gmail.com';
            $config['smtp_port']    = '465';
            $config['smtp_timeout'] = '7';
            $config['smtp_user']    = 'greg@levymgi.com';
            $config['smtp_pass']    = "Un3nd1ng!";
            $config['charset']    = 'utf-8';
            $config['newline']    = "\r\n";
            $config['mailtype'] = 'text'; // or html
            $config['validation'] = TRUE; // bool whether to validate email or not      

            $this->email->initialize($config);

            $this->email->from('noreply@westpennwire.com', 'No Reply');
            $this->email->to('greg@levymgi.com'); 

            $this->email->subject('Email Test');
            $this->email->message('Testing the email class.');  


            if(!$this->email->send()) {
                
                echo $this->email->print_debugger();
            
            }
            else {
                
                echo "HI";
                
            }
            
    }
    
}