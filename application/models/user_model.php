<?php  
 class User_model extends CI_Model  
 {  
function __construct() {
parent::__construct();
}

function insert_data($data)  
      {  
           $this->db->insert("users", $data);  
      } 
      function can_login($email, $password)  
      {  
           $this->db->where('email', $email);  
           $this->db->where('password', $password);  
           $query = $this->db->get('users');  
           if($query->num_rows() > 0)  
           {  
                return true;  
           }  
           else  
           {  
                return false;       
           }  
      }  
      function get_data($email)  
      {  
        $this->db->where("email", $email);
        $this->db->select("name,email,mobile,address");
         return $this->db->get("users")->result();  
      }  
  }
  ?>