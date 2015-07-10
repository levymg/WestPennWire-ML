<?php

class Email_mdl extends MY_Model
{
    
   
    public function notify($data) {
        
            $name           =   $data["name"];
            $title          =   $data["title"];
            $company        =   $data["company"];
            $email          =   $data["email"];
            $phone          =   $data["phone"];
            $cell           =   $data["cell"];
            $address        =   $data["address"];
            $city           =   $data["city"];
            $state          =   $data["state"];
            $zip            =   $data["zip"];
            $markets        =   $data["markets"];
            $applications   =   $data["applications"];
            $availability   =   $data["availability"];
            $employees      =   $data["employees"];
            $ordering       =   $data["ordering"];
            $quality        =   $data["quality"];
            $sales          =   $data["sales"];
            $techsupport    =   $data["techsupport"];
            $cable          =   $data["cable"];
            $comments       =   $data["comments"];
            $resource       =   $data["resource"];
            $created_on     =   $data["created_on"];
            $ip_address     =   $data["ip_address"];
        
            if(array_key_exists("fiber", $data)):
                $fiber = $data["fiber"];
                $subject = "West Penn Wire Survey Response - " . date('m/d/y h:i');
                $message = "
                            <html>
                                <body>
                                <center>
                                <table style='background-color:#fff;max-width:600px;width:600px;min-width:600px;border:1px solid #ccc;' cellpadding='0' cellspacing='0'>
                                    <tr>
                                        <td>
                                            <table style='background-color:#fff;border-bottom:3px solid #8cc63f' cellpadding='0' cellspacing='0'>
                                                <tr>
                                                    <td style='background-color:#fff !important;'>
                                                            <center>
                                                                 <img src='http://www.westpennwiremarketing.com/assets/img/logo.png' alt='West Penn Wire' ' />
                                                            </center>
                                                    </td>
                                                </tr>
                                                </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table style='background-color:#fff;' cellpadding='4' cellspacing='4'>
                                                    <tr>
                                                        <td vertical-align=top;' valign='top'>
                                                            <h2 style='color:#009344;'>West Penn Wire Survey Response,</h2>
                                                                <p style='color:#000;'>
                                                                         An entry has been recorded via the West Penn Wire Survey.
                                                                </p>

                                                                <h3>Details</h3>

                                                                <table style='border:1px solid #009344'>
                                                                   <tr style='border:1px solid #009344'><td style='border:1px solid #009344'><strong>Name:</strong></td><td style='border:1px solid #009344'>" . $name . "</td></tr>
                                                                   <tr style='border:1px solid #009344'><td style='border:1px solid #009344'><strong>Title:</strong></td><td style='border:1px solid #009344'>" . $title . "</td></tr>
                                                                   <tr style='border:1px solid #009344'><td style='border:1px solid #009344'><strong>Company:</strong></td><td style='border:1px solid #009344'>" . $company . "</td></tr>
                                                                   <tr style='border:1px solid #009344'><td style='border:1px solid #009344'><strong>Email:</strong></td><td style='border:1px solid #009344'>" . $email . "</td></tr>
                                                                   <tr style='border:1px solid #009344'><td style='border:1px solid #009344'><strong>Phone:</strong></td><td style='border:1px solid #009344'>" . $phone . "</td></tr>
                                                                   <tr style='border:1px solid #009344'><td style='border:1px solid #009344'><strong>Cell Phone:</strong></td><td style='border:1px solid #009344'>" . $cell . "</td></tr>
                                                                   <tr style='border:1px solid #009344'><td style='border:1px solid #009344'><strong>Address:</strong></td><td style='border:1px solid #009344'>" . $address . " " . $city . ", " . $state . " " . $zip . "</td></tr>
                                                                 </table>
                                                                 
                                                                 <h3>Survey Response</h3>
                                                                 
                                                                 <table style='border:1px solid #009344'>
                                                                    <tr style='border:1px solid #009344'><td style='border:1px solid #009344'><strong>Markets Served:</strong></td><td style='border:1px solid #009344'>" . $markets . "</td></tr>
                                                                    <tr style='border:1px solid #009344'><td style='border:1px solid #009344'><strong>Applications Installed:</strong></td><td style='border:1px solid #009344'>" . $applications . "</td></tr>
                                                                    <tr style='border:1px solid #009344'><td colspan='2' style='border:1px solid #009344'><h3>Satisfaction Response</h3></td></tr>
                                                                    <tr style='border:1px solid #009344'><td style='border:1px solid #009344'>Availability:</td><td style='border:1px solid #009344'>" . $availability . "</td></tr>
                                                                    <tr style='border:1px solid #009344'><td style='border:1px solid #009344'>Quality:</td><td style='border:1px solid #009344'>" . $quality . "</td></tr>
                                                                    <tr style='border:1px solid #009344'><td style='border:1px solid #009344'>Ordering:</td><td style='border:1px solid #009344'>" . $ordering . "</td></tr>
                                                                    <tr style='border:1px solid #009344'><td style='border:1px solid #009344'>Sales Support:</td><td style='border:1px solid #009344'>" . $sales . "</td></tr>
                                                                    <tr style='border:1px solid #009344'><td style='border:1px solid #009344'>Technical Support:</td><td style='border:1px solid #009344'>" . $techsupport . "</td></tr>
                                                                </table>
                                                                
                                                                <h3>Company Details</h3>
                                                                
                                                                <table style='border:1px solid #009344'>
                                                                    <tr style='border:1px solid #009344'><td style='border:1px solid #009344'><strong>Amount of Employees:</td><td style='border:1px solid #009344'>" . $employees . "</td></tr>
                                                                    <tr style='border:1px solid #009344'><td style='border:1px solid #009344'><strong>Amount of Network Cable Used:</td><td style='border:1px solid #009344'>" . $cable . "</td></tr>
                                                                    <tr style='border:1px solid #009344'><td style='border:1px solid #009344'><strong>Amount of Fiber Optic Cable Used:</td><td style='border:1px solid #009344'>" . $fiber . "</td></tr>
                                                                </table>
                                                                
                                                                <h3>Customer Comments</h3>
                                                                " . $comments . "
                                                                   
                                                                <h3>This survey was submitted from:</h3>
                                                                " . $resource . "
                                                                <h3 style='color:#009344;'><a style='color:#009344;' href='http://www.westpennwire.comWest Penn Wire Login</h3>
                                                        </td>
                                                    </tr>
                                                </table>
                                        </td>
                                        </tr>
                                    <table style='background-color:#009344;'>
                                        <tr>
                                            <td style='background-color:#009344;vertical-align:middle;height:50px;'>
                                                <center> 
                                                    <span style='color:#fff!important;'>Submitted on " . date("m/d/Y h:i:s a", $created_on) . " from " . $ip_address . "</span>
                                                    <a style='color:#fff!important;' href='http://www.westpennwiremarketing.com'>www.westpennwiremarketing.com</a></h5>
                                                </center>
                                            </td>
                                        </tr>
                                    </table>
                                    </tr>
                                    </table>
                                </body>
                            </html>
            ";
            
            else:
                $subject = "West Penn Wire Survey Response - " . date('m/d/y h:i');
                $message = "
                            <html>
                                <body>
                                <center>
                                <table style='background-color:#fff;max-width:600px;width:600px;min-width:600px;border:1px solid #ccc;' cellpadding='0' cellspacing='0'>
                                    <tr>
                                        <td>
                                            <table style='background-color:#fff;border-bottom:3px solid #8cc63f' cellpadding='0' cellspacing='0'>
                                                <tr>
                                                    <td style='background-color:#fff !important;'>
                                                            <center>
                                                                 <img src='http://www.westpennwiremarketing.com/assets/img/logo.png' alt='West Penn Wire' ' />
                                                            </center>
                                                    </td>
                                                </tr>
                                                </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table style='background-color:#fff;' cellpadding='4' cellspacing='4'>
                                                    <tr>
                                                        <td vertical-align=top;' valign='top'>
                                                            <h2 style='color:#009344;'>West Penn Wire Survey Response,</h2>
                                                                <p style='color:#000;'>
                                                                         An entry has been recorded via the West Penn Wire Survey.
                                                                </p>

                                                                <h3>Details</h3>

                                                                <table style='border:1px solid #009344'>
                                                                   <tr style='border:1px solid #009344'><td style='border:1px solid #009344'><strong>Name:</strong></td><td style='border:1px solid #009344'>" . $name . "</td></tr>
                                                                   <tr style='border:1px solid #009344'><td style='border:1px solid #009344'><strong>Title:</strong></td><td style='border:1px solid #009344'>" . $title . "</td></tr>
                                                                   <tr style='border:1px solid #009344'><td style='border:1px solid #009344'><strong>Company:</strong></td><td style='border:1px solid #009344'>" . $company . "</td></tr>
                                                                   <tr style='border:1px solid #009344'><td style='border:1px solid #009344'><strong>Email:</strong></td><td style='border:1px solid #009344'>" . $email . "</td></tr>
                                                                   <tr style='border:1px solid #009344'><td style='border:1px solid #009344'><strong>Phone:</strong></td><td style='border:1px solid #009344'>" . $phone . "</td></tr>
                                                                   <tr style='border:1px solid #009344'><td style='border:1px solid #009344'><strong>Cell Phone:</strong></td><td style='border:1px solid #009344'>" . $cell . "</td></tr>
                                                                   <tr style='border:1px solid #009344'><td style='border:1px solid #009344'><strong>Address:</strong></td><td style='border:1px solid #009344'>" . $address . " " . $city . ", " . $state . " " . $zip . "</td></tr>
                                                                 </table>
                                                                 
                                                                 <h3>Survey Response</h3>
                                                                 
                                                                 <table style='border:1px solid #009344'>
                                                                    <tr style='border:1px solid #009344'><td style='border:1px solid #009344'><strong>Markets Served:</strong></td><td style='border:1px solid #009344'>" . $markets . "</td></tr>
                                                                    <tr style='border:1px solid #009344'><td style='border:1px solid #009344'><strong>Applications Installed:</strong></td><td style='border:1px solid #009344'>" . $applications . "</td></tr>
                                                                    <tr style='border:1px solid #009344'><td colspan='2' style='border:1px solid #009344'><h3>Satisfaction Response</h3></td></tr>
                                                                    <tr style='border:1px solid #009344'><td style='border:1px solid #009344'>Availability:</td><td style='border:1px solid #009344'>" . $availability . "</td></tr>
                                                                    <tr style='border:1px solid #009344'><td style='border:1px solid #009344'>Quality:</td><td style='border:1px solid #009344'>" . $quality . "</td></tr>
                                                                    <tr style='border:1px solid #009344'><td style='border:1px solid #009344'>Ordering:</td><td style='border:1px solid #009344'>" . $ordering . "</td></tr>
                                                                    <tr style='border:1px solid #009344'><td style='border:1px solid #009344'>Sales Support:</td><td style='border:1px solid #009344'>" . $sales . "</td></tr>
                                                                    <tr style='border:1px solid #009344'><td style='border:1px solid #009344'>Technical Support:</td><td style='border:1px solid #009344'>" . $techsupport . "</td></tr>
                                                                </table>
                                                                
                                                                <h3>Company Details</h3>
                                                                
                                                                <table style='border:1px solid #009344'>
                                                                    <tr style='border:1px solid #009344'><td style='border:1px solid #009344'><strong>Amount of Employees:</td><td style='border:1px solid #009344'>" . $employees . "</td></tr>
                                                                    <tr style='border:1px solid #009344'><td style='border:1px solid #009344'><strong>Amount of Cable Used:</td><td style='border:1px solid #009344'>" . $cable . "</td></tr>
                                                                </table>
                                                                
                                                                <h3>Customer Comments</h3>
                                                                " . $comments . "
                                                                    
                                                                 <h3>This survey was submitted from:</h3>
                                                                 " . $resource . "
                                                                    
                                                                <h3 style='color:#009344;'><a style='color:#009344;' href='http://www.westpennwire.comWest Penn Wire Login</h3>
                                                        </td>
                                                    </tr>
                                                </table>
                                        </td>
                                        </tr>
                                    <tr>
                                    <table style='background-color:#009344;'>
                                        <tr>
                                            <td style='background-color:#009344;vertical-align:middle;height:50px;'>
                                                <center> 
                                                    <span style='color:#fff!important;'>Submitted on " . date("m/d/Y h:i:s a", $created_on) . " from " . $ip_address . "</span>
                                                    <a style='color:#fff!important;' href='http://www.westpennwiremarketing.com'>www.westpennwiremarketing.com</a></h5>
                                                </center>
                                            </td>
                                        </tr>
                                    </table>
                                    </tr>
                                    </table>
                                </body>
                            </html>
            ";
            endif;
                $headers     =  "From:<noreply@westpennwire.com> West Penn Wire\r\n";
                $headers    .=  "Reply-To:<noreply@westpennwire.com> West Penn Wire\r\n";
                $headers    .=  "MIME-Version: 1.0\r\n";
                $headers    .=  "Content-Type: text/html; charset=ISO-8859-1\r\n";
                   
                   
                $this->load->library('email');
        
                $config['protocol']    = 'smtp';
                $config['smtp_host']    = 'ssl://smtp.gmail.com';
                $config['smtp_port']    = '465';
                $config['smtp_timeout'] = '7';
                $config['smtp_user']    = 'greg@levymgi.com';
                $config['smtp_pass']    = "Un3nd1ng!";
                $config['charset']    = 'utf-8';
                $config['newline']    = "\r\n";
                $config['mailtype'] = 'html';
                $config['validation'] = TRUE;   

                $this->email->initialize($config);

                $this->email->from("noreply@westpennwiremarketing.com", "West Penn Wire Marketing");
                $this->email->reply_to("noreply@westpennwiremarketing.com", "No Reply");
                $this->email->to("aaron.reighard@westpenn-wpw.com");
                $this->email->cc("AReighard@westpenn-wpw.com");
                $this->email->bcc("greg@levymgi.com, davelevy@levymgi.com");
                
                $this->email->subject($subject);
                $this->email->message($message);

                if($this->email->send()) {
                    return TRUE;
                }
                else {
                    echo $this->email->print_debugger();
                    die;
                }
        
    }
    
    public function order_catalog($data) {
        
            $order_id       =   $data["order_id"];
            $name           =   $data["name"];
            $title          =   $data["job_title"];
            $company        =   $data["company"];
            $email          =   $data["email"];
            $phone          =   $data["phone"];
            $cell           =   $data["cell"];
            $address        =   $data["address"];
            $city           =   $data["city"];
            $state          =   $data["state"];
            $zip            =   $data["zip"];
            $quantity       =   $data["quantity"];
            $created_on     =   $data["created_on"];
            $ip_address     =   $data["ip_address"];

            $subject = "West Penn Wire Catalog Order ID #" . $order_id . " - " . date('m/d/y h:i');
            $message = "
                            <html>
                                <body>
                                <center>
                                <table style='background-color:#fff;max-width:600px;width:600px;min-width:600px;border:1px solid #ccc;' cellpadding='0' cellspacing='0'>
                                    <tr>
                                        <td>
                                            <table style='background-color:#fff;border-bottom:3px solid #8cc63f' cellpadding='0' cellspacing='0'>
                                                <tr>
                                                    <td style='background-color:#fff !important;'>
                                                            <center>
                                                                 <img src='http://www.westpennwiremarketing.com/assets/img/logo.png' alt='West Penn Wire' ' />
                                                            </center>
                                                    </td>
                                                </tr>
                                                </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table style='background-color:#fff;' cellpadding='4' cellspacing='4'>
                                                    <tr>
                                                        <td vertical-align=top;' valign='top'>
                                                            <h2 style='color:#009344;'>West Penn Wire Catalog Order Submission,</h2>
                                                                <p style='color:#000;'>
                                                                         An order has been placed for the 2015 West Penn Wire Catalog.
                                                                </p>

                                                                <h3>Details</h3>

                                                                <table style='border:1px solid #009344'>
                                                                   <tr style='border:1px solid #009344'><td style='border:1px solid #009344'><strong>Name:</strong></td><td style='border:1px solid #009344'>" . $name . "</td></tr>
                                                                   <tr style='border:1px solid #009344'><td style='border:1px solid #009344'><strong>Title:</strong></td><td style='border:1px solid #009344'>" . $title . "</td></tr>
                                                                   <tr style='border:1px solid #009344'><td style='border:1px solid #009344'><strong>Company:</strong></td><td style='border:1px solid #009344'>" . $company . "</td></tr>
                                                                   <tr style='border:1px solid #009344'><td style='border:1px solid #009344'><strong>Email:</strong></td><td style='border:1px solid #009344'>" . $email . "</td></tr>
                                                                   <tr style='border:1px solid #009344'><td style='border:1px solid #009344'><strong>Phone:</strong></td><td style='border:1px solid #009344'>" . $phone . "</td></tr>
                                                                   <tr style='border:1px solid #009344'><td style='border:1px solid #009344'><strong>Cell Phone:</strong></td><td style='border:1px solid #009344'>" . $cell . "</td></tr>
                                                                 </table>
                                                                 
                                                                 <h3>Shipping Address</h3>
                                                                 
                                                                 <table style='border:1px solid #009344'>
                                                                   <tr style='border:1px solid #009344'><td style='border:1px solid #009344'><strong>Address:</strong></td><td style='border:1px solid #009344'>" . $address . "<br />" . $city . ", " . $state . " " . $zip . "</td></tr>
                                                                </table>
                                                                
                                                                <h3>Quantity</h3>
                                                                
                                                                <h4>" . $quantity . "</h4>
                                                                
                                                                    
                                                                <h3 style='color:#009344;'><a style='color:#009344;' href='http://www.westpennwire.comWest Penn Wire Login</h3>
                                                        </td>
                                                    </tr>
                                                </table>
                                        </td>
                                        </tr>
                                    <tr>
                                    <table style='background-color:#009344;'>
                                        <tr>
                                            <td style='background-color:#009344;vertical-align:middle;height:50px;'>
                                                <center> 
                                                    <span style='color:#fff!important;'>Submitted on " . date("m/d/Y h:i:s a", $created_on) . " from " . $ip_address . "</span>
                                                    <a style='color:#fff!important;' href='http://www.westpennwiremarketing.com'>www.westpennwiremarketing.com</a></h5>
                                                </center>
                                            </td>
                                        </tr>
                                    </table>
                                    </tr>
                                    </table>
                                </body>
                            </html>
            ";
            
             $headers     =  "From:<noreply@westpennwire.com> West Penn Wire\r\n";
            $headers    .=  "Reply-To:<noreply@westpennwire.com> West Penn Wire\r\n";
            $headers    .=  "MIME-Version: 1.0\r\n";
            $headers    .=  "Content-Type: text/html; charset=ISO-8859-1\r\n";


            $this->load->library('email');

            $config['protocol']    = 'smtp';
            $config['smtp_host']    = 'ssl://smtp.gmail.com';
            $config['smtp_port']    = '465';
            $config['smtp_timeout'] = '7';
            $config['smtp_user']    = 'greg@levymgi.com';
            $config['smtp_pass']    = "Un3nd1ng!";
            $config['charset']    = 'utf-8';
            $config['newline']    = "\r\n";
            $config['mailtype'] = 'html';
            $config['validation'] = TRUE;   

            $this->email->initialize($config);

            $this->email->from("noreply@westpennwiremarketing.com", "West Penn Wire Marketing");
            $this->email->reply_to("noreply@westpennwiremarketing.com", "No Reply");
            $this->email->to("aaron.reighard@westpenn-wpw.com");
            $this->email->cc("AReighard@westpenn-wpw.com");
            $this->email->bcc("greg@levymgi.com, davelevy@levymgi.com");

            $this->email->subject($subject);
            $this->email->message($message);

            if($this->email->send()) {
                return TRUE;
            }
            else {
                echo $this->email->print_debugger();
                die;
            }

    }
    
}
 