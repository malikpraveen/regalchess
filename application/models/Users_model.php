<?php

    if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Users_model extends CI_Model {

        function __construct(){
            parent::__construct();
            $this->load->database();
            $this->load->helper('url');
        }

        function sendMail($uname, $uemail,$ucontact,$ucomment) {
        //  echo "uemail";exit;
        $to='gropsetechnologies@gmail.com';
        // $to='vishal.gropse@gmail.com';
        $subject='New Query from Website';
        $title='Gropse Website';
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'gropse.com';
        $config['smtp_port'] = 587;
        $config['smtp_user'] = "ashutosh@gropse.com";
        $config['smtp_pass'] = "ashutosh@123";
        $config['mailtype'] = "html";
        $config['charset'] = "iso-8859-1";
        $this->load->library('email', $config);

        $this->email->set_newline("\r\n");

        // Sender email address
            $this->email->from("ashutosh@gropse.com", $title);
            $data = array(
                'name'=> $uname,
                'email'=> $uemail,
                'contact'=> $ucontact,
                'comment'=>$ucomment
         );
        // Receiver email address
            $this->email->to($to);
        // Subject of email
            $this->email->subject($subject);
        // Message in email
          $body = $this->load->view('email/mails2.php',$data,TRUE);

        $this->email->message($body); 
        $x=$this->email->send();
        if($x){
            return true;
        }else{
            return false;
        }
    }
        
        function insertData($field,$table){
            $insert=$this->db->insert($table, $field);
            if($insert){
                return true;
            }else{
                return false;
            }
        }



function sendMailProcess($data) {
        //  echo "uemail";exit;
        $to='gropsetechnologies@gmail.com';
        //$to='vishal.gropse@gmail.com';
        $subject='New Query from Website';
        $title='Gropse Website';
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'gropse.com';
        $config['smtp_port'] = 587;
        $config['smtp_user'] = "ashutosh@gropse.com";
        $config['smtp_pass'] = "ashutosh@123";
        $config['mailtype'] = "html";
        $config['charset'] = "iso-8859-1";
        $this->load->library('email', $config);

        $this->email->set_newline("\r\n");

        // Sender email address
            $this->email->from("ashutosh@gropse.com", $title);
        // Receiver email address
            $this->email->to($to);
        // Subject of email
            $this->email->subject($subject);
        // Message in email
          $body = $this->load->view('email/mails_process.php',$data,TRUE);

        $this->email->message($body); 
        $x=$this->email->send();
        if($x){
            return true;
        }else{
            return false;
        }
    }
        
function reply_mail_to_user($user_mail) {
         // $to='gropsetechnologies@gmail.com';
        $to=$user_mail; 
        $subject='Welcome To Techgropse!';
        $title='Gropse Website';
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'gropse.com';
        $config['smtp_port'] = 587;
        $config['smtp_user'] = "ashutosh@gropse.com";
        $config['smtp_pass'] = "ashutosh@123";
        $config['mailtype'] = "html";
        $config['charset'] = "iso-8859-1";
        $this->load->library('email', $config);

        $this->email->set_newline("\r\n");

        // Sender email address
            $this->email->from("ashutosh@gropse.com", $title);

        // Receiver email address
            $this->email->to($to);
        // Subject of email
            $this->email->subject($subject);
        // Message in email
          $body = $this->load->view('email/thanku.php',$user_mail,TRUE);

        $this->email->message($body); 
        $x=$this->email->send();
        if($x){
            return true;
        }else{
            return false;
        }
    }
    
    
  public function getDataResultArray($table,$where){
              if($where){
                $this->db->where($where);   
              }             
              $query= $this->db->get($table);
              $result=$query->result_array();
              return ($result); 
    }

function sendMailforjobs($data) {
        $to='silki.gropse@gmail.com';
         // $to='niwash.gropse@gmail.com';
        $subject='Job Query From TechGropse';
        $title='Gropse Website';
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'gropse.com';
        $config['smtp_port'] = 587;
        $config['smtp_user'] = "ashutosh@gropse.com";
        $config['smtp_pass'] = "ashutosh@123";
        $config['mailtype'] = "html";
        $config['charset'] = "iso-8859-1";
        $this->load->library('email', $config);

        $this->email->set_newline("\r\n");

        // Sender email address
            $this->email->from("ashutosh@gropse.com", $title);
        // Receiver email address
            $this->email->to($to);
        // Subject of email
            $this->email->subject($subject);
        // Message in email
          $body = $this->load->view('email/sendmail_forjobs.php',$data,TRUE);

        $this->email->message($body); 
        $x=$this->email->send();
        if($x){
            return true;
        }else{
            return false;
        }
    }
        // email function from user send enquiry
function sendMail_enquiry($data) {
        //  echo "uemail";exit;
        $to='gropsetechnologies@gmail.com';
        //$to='niwash.gropse@gmail.com';
        $subject='New Query from Website';
        $title='Gropse Website';
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'gropse.com';
        $config['smtp_port'] = 587;
        $config['smtp_user'] = "ashutosh@gropse.com";
        $config['smtp_pass'] = "ashutosh@123";
        $config['mailtype'] = "html";
        $config['charset'] = "iso-8859-1";
        $this->load->library('email', $config);

        $this->email->set_newline("\r\n");

        // Sender email address
            $this->email->from("ashutosh@gropse.com", $title);
        // Receiver email address
            $this->email->to($to);
        // Subject of email
            $this->email->subject($subject);
        // Message in email
          $body = $this->load->view('email/enquiry_details.php',$data,TRUE);

        $this->email->message($body); 
        $x=$this->email->send();
        if($x){
            return true;
        }else{
            return false;
        }
    }
    
    function sendMail_investor($data) {
// echo "uemail";exit;
$to='gropsetechnologies@gmail.com';
//$to='vishal.gropse@gmail.com';
$subject='New Query from Website';
$title='Gropse Website';
$config['protocol'] = 'smtp';
$config['smtp_host'] = 'gropse.com';
$config['smtp_port'] = 587;
$config['smtp_user'] = "ashutosh@gropse.com";
$config['smtp_pass'] = "ashutosh@123";
$config['mailtype'] = "html";
$config['charset'] = "iso-8859-1";
$this->load->library('email', $config);

$this->email->set_newline("\r\n");

// Sender email address
$this->email->from("ashutosh@gropse.com", $title);
// Receiver email address
$this->email->to($to);
// Subject of email
$this->email->subject($subject);
// Message in email
$body = $this->load->view('email/investor_details.php',$data,TRUE);

$this->email->message($body); 
$x=$this->email->send();
// print_r($x); exit;
if($x){
return true;
}else{
return false;
}
}

}
?>