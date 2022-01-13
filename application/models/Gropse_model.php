<?php
class Gropse_model extends CI_Model{
      function __construct() {
        parent::__construct();
        $this->load->database();
            $this->load->helper('url');
      }
  public function check_admin_login($data){
    
              $username=$data['username'];
              $password=$data['password'];
              $this->db->select('*');
              $this->db->from('admin');
              $this->db->where('username',$username);
              $this->db->where('password',$password);
              $this->db->limit(1);
              $query = $this->db->get();
              if ($query->num_rows() == 1) 
              {
                return true;
              }else{
                return false;
              }  
            }

  public function admin_info($username){
              $this->db->select('*');
              $this->db->from('admin');
              $this->db->where('username',$username);
              $query = $this->db->get();
              $result = $query->result();
              return ($result);
  }

  public function insertData($table,$data){      
              $this->db->insert($table,$data);
              return true;
    }
           

public function getDataByorder($table,$order_by,$where=''){

              if($order_by){
              $this->db->order_by($order_by,'DESC');
              }
              if($where){
                $this->db->where($where);
              }              
              $query= $this->db->get($table);
              $result=$query->result();
              return ($result); 
    }

    
  public function getDataResultArray($table,$where){
              if($where){
                $this->db->where($where);   
              }               
               $this->db->order_by('id','DESC'); 
              $query= $this->db->get($table);
              $result=$query->result_array();
              return ($result); 
    }

  public function getDataResultArrayorderby($table,$where,$order_by){
            if ($where) {
              $this->db->where($where);   
            } 
            $this->db->order_by($order_by,'DESC'); 
            $this->db->limit(10);           
            $query=$this->db->get($table);
            $result=$query->result_array();
            return ($result); 
    }

  public function getDataResultRow($table,$where){
              if($where){
                $this->db->where($where);   
              }
              $query= $this->db->get($table);
              $result=$query->row_array();
              return ($result); 
    }


  public function getDataByIDRow($table,$fname,$id){
            $this->db->select('*');
            $this->db->from($table);
            $this->db->where($fname,$id);
            $query=$this->db->get();
            $result=$query->row();
            return ($result); 
    }
  public function updatedata($table,$fname,$id,$data){
            $this->db->where($fname,$id);
            $this->db->update($table,$data);
            return true;
      }
  public function deleteData($table,$fname,$id){
            $this->db->where($fname, $id);
            $this->db->delete($table);
            return true;
    }



public function apply_jobs_join(){

            $this->db->select('*');
            $this->db->from('apply_jobs a');
            $this->db->join('opening_jobs b','b.job_id = a.job_id');
            // $this->db->where();
            $query=$this->db->get();
            $result=$query->result_array();        
            return($result);
}

public function data_check1($data)
{

$email_id=$data->email;
$mobile_no=$data->mobile;
$student_id=$data->student_id;
$this->db->select('*');
$this->db->from('internship_form_tbl');
$this->db->where('student_id',$student_id);
$query = $this->db->get();
if ($query->num_rows() > 0) 
{
return "student_id"; 
}else{
$this->db->select('*');
$this->db->from('internship_form_tbl');
$this->db->where('email',$email_id);
$query=$this->db->get();
if($query->num_rows() > 0){
return "email"; 
}else{
$this->db->select('*');
$this->db->from('internship_form_tbl');
$this->db->where('mobile',$mobile_no);
$query=$this->db->get();
if($query->num_rows() > 0){
return "mobile"; 
}else{
return false;
}
}
} 



}
              
}