<?php class dashboardmodel extends CI_Model{
 
 function getdata($table,$ccode){
     $this->db->where("client_code",$ccode);
     return $this->db->get($table);
 }
 
 }
 