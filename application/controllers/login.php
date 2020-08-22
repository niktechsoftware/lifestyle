<?php
class login extends CI_Controller {
public function registration(){
	
	$name=$this->input->post("name");
	//echo $name;
	$mobile=$this->input->post("mobile");
	$email=$this->input->post("email");
	$password=$this->input->post("password");
	$data=array(
	"name"=>$name,
	"mobile"=>$mobile,
	"email"=>$email,
	"password"=>$password
	);
	//echo "datainserted";
	$this->load->model('loginmodel');
	$this->loginmodel->insertdata($data);
	//echo "datainserted";
	redirect("welcome/registration"); 
}
public function matchdata(){
$email=$this->input->post("email");

		//echo $email;
		$password=$this->input->post("password");
		//echo $password;
		
		$this->load->model("loginmodel");
		$result=$this->loginmodel->getdata($email,$password);
		if($result){?>
			<script>
			  window.history.back();
			</script><?php
		}
		else{
			?>
			<script>
			  window.history.back();
			</script><?php
		}
}

}