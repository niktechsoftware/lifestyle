<?php
class login extends CI_Controller {


public function registration(){
	echo "1";
	exit();
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
public function billing(){
	$name=$this->input->post("name");
	//echo $name;
	$mobile=$this->input->post("mobile");
	//echo $mobile;
	$email=$this->input->post("email");
	//echo $email;
	$password=$this->input->post("password");
	//echo $password;
	$address=$this->input->post("address");
	//echo $name;
	$number=$this->input->post("number");
	//echo $mobile2;
	$city=$this->input->post("city");
	//echo $city;
	$state=$this->input->post("state");
	//echo $state;
	$pincode=$this->input->post("pincode");
	//echo $pincode;
	$data=array(
	"name"=>$name,
	"mobile"=>$mobile,
	"email"=>$email,
	"password"=>$password,
	"address"=>$address,
	"number"=>$number,
	"city"=>$city,
	"state"=>$state,
	"pincode"=>$pincode
	);
	$this->load->model('loginmodel');
	$this->loginmodel->billing($data);
	redirect("welcome/billing");
}

}