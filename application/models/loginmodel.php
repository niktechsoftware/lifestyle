<?php class loginmodel extends CI_Model {
function insertdata($data){
	$this->db->insert("costumer",$data);
	return true;
	}
	function getdata($email,$password){
		$this->db->where("email",$email);
		$this->db->where("password",$password);
		$res=$this->db->get("costumer");
		if($res->num_rows()>0){
			$loginData = array(
        			"login_type" => "user",
        			"uname" => $res->row()->name,
        			"address" => $res->row()->address,
        			"mobile" => $res->row()->mobile,
        			"username" => $res->row()->email,
        			
        			"is_login" => true,
        			"is_lock" => true,
        			"login_date" => date("d-M-Y"),
        			"login_time" => date("H:i:s")
        	);
			
			$this->session->set_userdata($loginData);
			return true;
		}else{
			return false;
		}
		
	}
	public function billing($data){
		$this->db->insert("billing_details",$data);
		return true;
	}
}