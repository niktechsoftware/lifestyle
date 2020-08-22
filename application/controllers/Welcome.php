<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
	   $popupimage =  $this->db->get("popup_image")->row();
	   $data['logo']=$popupimage->image;

		$this->load->view('welcome_message',$data);
	}
	public function contact()
	{
		$this->load->view('contact');
	}
	public function login()
	{
		$this->load->view('login');
	}
	public function wishlist()
	{
		$this->load->view('wishlist');
	}
	public function registration()
	{
		$this->load->view('registration');
	}
	public function cart()
	{
		$this->load->view('cart');
	}
	public function orderlist()
	{
		$this->load->view('orderlist');
		}
		public function profile()
	{
		$this->load->view('profile');
		}
		public function forgetpassword()
	{
		$this->load->view('forgetpassword');
		}
	public function billing()
	{
		$this->load->view('billing');
	}
		public function about()
	{
		$this->load->view('about');
	}
	public function ordernow()
	{
		$this->load->view('ordernow');
	}
		public function myproduct()
	{
	    $this->db->where("client_code",2);
     $pro=$this->db->get("stock_products");
    $prodata['product']=$pro;
		$this->load->view('myproduct',$prodata);
	}
	public function subcatagory()
	{
	    $uric=$this->uri->segment("3");
	    //echo $uric;
	    $this->db->where("sub_category",$uric);
	   $cat=$this->db->get("stock_products");
         	$data['uriv']=$cat;
         	//print_r($data);
    $this->load->view('subcatagory',$data);
	}
	public function aboutus()
	{
		$this->load->view('aboutus');
	}
	public function slidertab()
	{
   // $this->db->where("client_code",2);
    $product=$this->db->get("sub_category");
     $prodata['product']=$product;
	$this->load->view('slidertab',$prodata);
	}
	public function saleproduct()
	{
	    $uric=$this->uri->segment("3");
	    //echo $uric;
	    $this->db->where("id",$uric);
	   $cat=$this->db->get("stock_products");
         	$data['uriv']=$cat;
         	//print_r($data);
    $this->load->view('saleproduct',$data);
	    
	}
	public function catagory()
	{
	    $cat_id=$this->input->post("mainCategory");
	    
	    $this->db->where("id",$cat_id);
	   $cat=$this->db->get('category');
         	$data['uriv']=$cat;
         	//print_r($data);
    $this->load->view('catagory',$data);
	}
	public function addcart()
	{
		//$ip = $this->input->ip_address();
		//print_r($ip);
		//exit();
	     $uric=$this->uri->segment("3");
	    //echo $uric;
	    $this->db->where("id",$uric);
	   $cat=$this->db->get("stock_products");
         	$data['uriv']=$cat;
	      $this->load->view('addcart',$data);
	}
	public function savecart()
	{

	      $uric=$this->uri->segment("3");
	      $mno=$this->input->post("mno");
	   $this->db->where("mobile",$mno);
	 $result=$this->db->get("costumer")->row();
	 	$data = array(
				"product_id" => $uric,
				"mobile" => $mno,
				"client_code"=>2,
				"status"=>1,
				"date" => date("Y-m-d")
		);
	  $this->db->where("id",$uric);
	   $cat=$this->db->get("stock_products");
         	$data2['uriv']=$cat;
	 if($result==NULL)
	   {
	        $this->db->where("id",$uric);
	   $cat=$this->db->get("stock_products");
         	$data['uriv']=$cat;
	     $this->load->view("add",$data);
	   }
	   else {
	    
	     $product_id=$uric;
	   
	     	$data1 = array(
		  "cust_id"=>$result->id,
		   "product_id"=> $uric,
		   "status"=>1,
		   "date"=>date("y-m-d")
		    );
		    
		   $this->db->insert("like_product",$data1);
	     //echo "your cart sucessfully added";
	     redirect(base_url()."welcome/addcart");    
	  }    
	      
	}
public function custinfo()
{
     $uric=$this->uri->segment("3");
     $data=array(
       "product_id"=>$uric,
       "mobile"=>$this->input->post("mno"),
       "status"=>1,
       "date"=>date("y-m-d"),
       "client_code"=>2,
       "address"=>$this->input->post("address"),
       "email"=>$this->input->post("email")
       
         );
         $this->db->insert("costumer",$data);
          redirect(base_url()."welcome/addcart");  
}
public function orderpro(){
    $uric=$this->uri->segment("3");
      $this->db->where("id",$uric);
	   $cat=$this->db->get("stock_products");
         	$data['uriv']=$cat;
         	//print_r($data);
    $this->load->view('orderpro',$data);
}
public function buyproduct()
{
    $name=$this->input->post("name");
     $mno=$this->input->post("mno");
      $pin=$this->input->post("pin");
       $local=$this->input->post("local");
        $add=$this->input->post("add");
         $city=$this->input->post("city");
          $land=$this->input->post("land");
           $mno2=$this->input->post("mno2");
            $delivery=$this->input->post("delivery");
}
    public function checkout(){
        $this->load->view('checkout');
    }
}  	


