<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index(){
		$data['body'] = "home";
		$this->load->view('include/template',$data);
	}
	
	public function about(){
		$data['body'] = "about";
		$this->load->view('include/template',$data);
	}
	
	
	public function career(){
		$data['body'] = "career";
		$this->load->view('include/template',$data);
	}
	
	public function contact(){
		$data['body'] = "contact";
		$this->load->model("auth");
		$data['res']=$this->auth->showdata();
		$this->load->view('include/template',$data);
	}
	
	public function register(){
		$data['body'] = "register";
		$this->load->view('include/template',$data);
	}
	
	public function save_form()
	{
	    echo "is";
	}
	
	public function printRegister(){
		$data['body'] = "printRegister";
		$this->load->view('include/template',$data);
	}
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */