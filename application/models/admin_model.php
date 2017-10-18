<?php  
 class Admin_model extends CI_Model  
 {  
function __construct() {
parent::__construct();
}
      function can_login($username, $password)  
      {  
           $this->db->where('username', $username);  
           $this->db->where('password', $password);  
           $query = $this->db->get('admin');  
           if($query->num_rows() > 0)  
           {  
                return true;  
           }  
           else  
           {  
                return false;       
           }  
      }   
      function get_data()  
      {  
        $this->db->select("id,name,email,mobile,address");
         return $this->db->get("users")->result();  
      } 
      function getsep_data($id)  
      {  
        $this->db->where("id",$id);
        $this->db->select("id,name,email,mobile,address");
         return $this->db->get("users")->result();  
      }   
      function del_data($id)  
      {  
        $this->db->where("id",$id);
        $this->db->delete("users");  
      }  
      function update_data($data,$id)  
      {  
        $this->db->where("id",$id);
        $this->db->update("users",$data);  
      } 
  }
  ?>