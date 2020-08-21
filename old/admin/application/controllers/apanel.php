<?php class Apanel extends CI_Controller{
function __construct()
	{
		parent::__construct();
		$this->isLogin();
	}
	
	function isLogin(){
		$is_login = $this->session->userdata('is_login');
		$is_lock = $this->session->userdata('is_lock');
		if(!$is_login){
			//echo $is_login;
			redirect(base_url()."login/index");
		}
		elseif(!$is_lock){
			redirect(base_url()."login/lockPage");
		}
	}
	public function category(){
	    $data['title'] = "Add New Category";
		$data['smallTitle'] = "Product Category";
		$data['bigTitle'] = "Product Category";
		$data['body'] = "admin/category";
		$data['headerCss'] = "admin/headerCss/studentRegisterCss";
		$data['footerJs'] = "admin/footerJs/studentRegisterJs";
		$this->load->view("include/admin/mainContent",$data);
	}
	
		public function subcategory(){
	    $data['title'] = " Sub Category";
		$data['smallTitle'] = "Product Sub Category";
		$data['bigTitle'] = "Product Sub Category";
		$data['body'] = "admin/subcategory";
		$data['headerCss'] = "admin/headerCss/studentRegisterCss";
		$data['footerJs'] = "admin/footerJs/studentRegisterJs";
		$this->load->view("include/admin/mainContent",$data);
	}
	public function deleteinvoice(){
	    $this->uri->segment(3);
	    $this->db->where("invoice_no",$this->uri->segment(3));
	    $this->db->delete("admission");
	    redirect(base_url()."apanel/reglist/dels");
	}
	
	public function productEntry(){
	     $data['client_code'] =$this->session->userdata("client_code");
	      $data['title'] = "Product Entry";
		$data['smallTitle'] = "Product Entry";
		$data['bigTitle'] = "Product Enry";
		$data['body'] = "admin/productEntry";
		$data['headerCss'] = "admin/headerCss/studentRegisterCss";
		$data['footerJs'] = "admin/footerJs/studentRegisterJs";
		$this->load->view("include/admin/mainContent",$data);
	}
	
	public function addformDetail()
	{


		$id = $this->uri->segment(3);
		$this->db->where("id",$id);
		
		$data['abc'] = $this->db->get("regenquiry")->row();
		$this->load->view('showform',$data);

	}
	public function deleteformDetail()
	{

		$id = $this->uri->segment(3);
		$this->db->where("id",$id);
		$a= $this->db->delete("regenquiry");
		 if($a)
		 {
		 	redirect ("apanel/printRegister");
		 }



	}


	
	public function studentRegister()
	{
		$data['title'] = "New Student Registration";
		$data['smallTitle'] = "Student Registration";
		$data['bigTitle'] = "Student Registration";
		$data['body'] = "admin/studentRegister";
		$data['headerCss'] = "admin/headerCss/studentRegisterCss";
		$data['footerJs'] = "admin/footerJs/studentRegisterJs";
		$this->load->view("include/admin/mainContent",$data);
	}
	public function editProfile()
	{
		$data['title'] = "Edit Student Profile";
		$data['smallTitle'] = "Student Profile";
		$data['bigTitle'] = "Student Profile";
		$data['body'] = "admin/editProfile";
		$data['headerCss'] = "admin/headerCss/studentRegisterCss";
		$data['footerJs'] = "admin/footerJs/studentRegisterJs";
		$this->load->view("include/admin/mainContent",$data);
	}
	

	public function printRegister()
	{
		$data['title'] = "Student Profile";
		$data['smallTitle'] = "Student Profile/Admission Invoice";
		$data['bigTitle'] = "Student Profile/Admission Invoice";
		$data['body'] = "admin/registrationform";
		$data['headerCss'] = "admin/headerCss/dashboardCss";
		$data['footerJs'] = "admin/footerJs/dashboardJs";
		$this->load->view("include/admin/mainContent",$data);
	}



	
	public function studentList()
	{
		$data['title'] = "Student List";
		$data['smallTitle'] = "Student List";
		$data['bigTitle'] = "Student List";
		$data['body'] = "admin/studentList";
		$data['headerCss'] = "admin/headerCss/studentListCss";
		$data['footerJs'] = "admin/footerJs/studentListJs";
		$this->load->view("include/admin/mainContent",$data);
	}

	
	
	public function contact(){
		$data['title'] = "Contact";
		$data['smallTitle'] = "Website/Contact List";
		$data['bigTitle'] = "Contact List";
		$data['body'] = "admin/contact";
		$data['headerCss'] = "admin/headerCss/studentListCss";
		$data['footerJs'] = "admin/footerJs/studentListJs";
		$this->load->view("include/admin/mainContent",$data);
	}
	
		public function suggestion(){
		    $data['title'] = "Website Suggestion";
		$data['smallTitle'] = "Website/Suggestion";
		$data['bigTitle'] = "Suggestion";
		$data['body'] = "admin/Suggestion";
		$data['headerCss'] = "admin/headerCss/homeCss";
		$data['footerJs'] = "admin/footerJs/homeJs";
		$this->load->view("include/admin/mainContent",$data);
		}
	
	public function index(){
	    $this->load->model('dashboardmodel');
	   
		$data['title'] = "Website home";
		$data['smallTitle'] = "Website/Dashboard";
		$data['bigTitle'] = "Dashboard";
		$data['body'] = "admin/dashboard";
	//	$data['body'] = "admin/home";
		$data['headerCss'] = "admin/headerCss/studentRegisterCss";
		$data['footerJs'] = "admin/footerJs/studentRegisterJs";
		$this->load->view("include/admin/mainContent",$data);
		
	}
	public function noticeBoard(){
		$data['title'] = "Website Notice Board";
		$data['smallTitle'] = "Website/Notice Board";
		$data['bigTitle'] = "Notice Board";
		$data['body'] = "admin/noticeBoard";
		$data['headerCss'] = "admin/headerCss/homeCss";
		$data['footerJs'] = "admin/footerJs/homeJs";
		$this->load->view("include/admin/mainContent",$data);
	}
		public function latestnews(){
		$data['title'] = "Website Notice Board";
		$data['smallTitle'] = "Website/Notice Board";
		$data['bigTitle'] = "Notice Board";
		$data['body'] = "admin/latestnews";
		$data['headerCss'] = "admin/headerCss/homeCss";
		$data['footerJs'] = "admin/footerJs/homeJs";
		$this->load->view("include/admin/mainContent",$data);
	}
		public function popup(){
		$data['title'] = "Website Logo";
		$data['smallTitle'] = "Website/Logo";
		$data['bigTitle'] = "Logo";
		$data['body'] = "admin/popup";
		$data['headerCss'] = "admin/headerCss/homeCss";
		$data['footerJs'] = "admin/footerJs/homeJs";
		$this->load->view("include/admin/mainContent",$data);
	}
	public function logo()
	{
	   	$data['title'] = "Website Popup";
		$data['smallTitle'] = "Website/Popup";
		$data['bigTitle'] = "Popup";
		$data['body'] = "admin/logo";
		$data['headerCss'] = "admin/headerCss/homeCss";
		$data['footerJs'] = "admin/footerJs/homeJs";
		$this->load->view("include/admin/mainContent",$data); 
	}
		public function popup1(){
		$data['title'] = "Website logo";
		$data['smallTitle'] = "Website/Logo";
		$data['bigTitle'] = "logo";
		$data['body'] = "admin/popup1";
		$data['headerCss'] = "admin/headerCss/homeCss";
		$data['footerJs'] = "admin/footerJs/homeJs";
		$this->load->view("include/admin/mainContent",$data);
	}
	public function logo1()
	{
	    	$data['title'] = "Website Popup";
		$data['smallTitle'] = "Website/Popup";
		$data['bigTitle'] = "Popup";
		$data['body'] = "admin/logo1";
		$data['headerCss'] = "admin/headerCss/homeCss";
		$data['footerJs'] = "admin/footerJs/homeJs";
		$this->load->view("include/admin/mainContent",$data);
	}
	
	public function selectedStudent(){
		$data['title'] = "Selected Student";
		$data['smallTitle'] = "Website/Selected Student";
		$data['bigTitle'] = "Selected Student";
		$data['body'] = "admin/selectedStudent";
		$data['headerCss'] = "admin/headerCss/studentRegisterCss";
		$data['footerJs'] = "admin/footerJs/studentRegisterJs";
		$this->load->view("include/admin/mainContent",$data);
	}
	
	public function applicent()
	{
	   	$data['title'] = "Applicent Detail";
		$data['smallTitle'] = "Website/applicent";
		$data['bigTitle'] = "Applicent";
		$data['body'] = "admin/applicent";
		$data['headerCss'] = "admin/headerCss/studentListCss";
		$data['footerJs'] = "admin/footerJs/studentListJs";
	//	$data['mainContent']="applicent";
		$this->load->view("include/admin/mainContent",$data); 
	}
	public function admission()
		{
	    $this->load->library("form_validation");
		$data['title'] = "Registration Form";
		$data['smallTitle'] = "Registration Form";
		$data['bigTitle'] = "Registration Form";
		$data['body'] = "admin/admission";
		$data['headerCss'] = "admin/headerCss/studentListCss";
		$data['footerJs'] = "admin/footerJs/studentListJs";
		$this->load->view("include/admin/mainContent",$data);
	}
		public function bookRecord()
		{
	    $this->load->library("form_validation");
		$data['title'] = "Book Registration Form";
		$data['smallTitle'] = "Book Registration Form";
		$data['bigTitle'] = "Book Registration Form";
		$data['body'] = "admin/bookRecord";
		$data['headerCss'] = "admin/headerCss/studentListCss";
		$data['footerJs'] = "admin/footerJs/studentListJs";
		$this->load->view("include/admin/mainContent",$data);
	}

	public function dgallery(){
		$data['title'] = "Gallery";
		$data['smallTitle'] = "Website/Gallery";
		$data['bigTitle'] = "Gallery Department";
		$data['body'] = "admin/dgallery";
		$data['headerCss'] = "admin/headerCss/studentListCss";
		$data['footerJs'] = "admin/footerJs/studentListJs";
		$this->load->view("include/admin/mainContent",$data);
	}
		public function gallery(){
		$data['title'] = "Gallery";
		$data['smallTitle'] = "Website/Gallery";
		$data['bigTitle'] = "Gallery";
		$data['body'] = "admin/gallery";
		$data['headerCss'] = "admin/headerCss/studentListCss";
		$data['footerJs'] = "admin/footerJs/studentListJs";
		$this->load->view("include/admin/mainContent",$data);
	}
	public function campus(){
		$data['title'] = "Campus";
		$data['smallTitle'] = "Website/campus";
		$data['bigTitle'] = "Campus";
		$data['body'] = "admin/campus";
		$data['headerCss'] = "admin/headerCss/studentListCss";
		$data['footerJs'] = "admin/footerJs/studentListJs";
		$this->load->view("include/admin/mainContent",$data);
	}
	public function games(){
		$data['title'] = "Games";
		$data['smallTitle'] = "Website/games";
		$data['bigTitle'] = "Games&Sports";
		$data['body'] = "admin/games";
		$data['headerCss'] = "admin/headerCss/studentListCss";
		$data['footerJs'] = "admin/footerJs/studentListJs";
		$this->load->view("include/admin/mainContent",$data);
	}
	public function staff(){
		$data['title'] = "Staff";
		$data['smallTitle'] = "Website/Staff";
		$data['bigTitle'] = "Staff";
		$data['body'] = "admin/staff";
		$data['headerCss'] = "admin/headerCss/studentListCss";
		$data['footerJs'] = "admin/footerJs/studentListJs";
		$this->load->view("include/admin/mainContent",$data);
	}
	
	public function uploadResult(){
		$data['title'] = "UPLOAD RESULT";
		$data['smallTitle'] = "Website/UPLOAD RESULT";
		$data['bigTitle'] = "UPLOAD RESULT";
		$data['body'] = "admin/uploadResult";
		$data['headerCss'] = "admin/headerCss/studentRegisterCss";
		$data['footerJs'] = "admin/footerJs/createTestJs";
		$this->load->view("include/admin/mainContent",$data);
	}
	public function singleSms(){
		$data['title'] = "Test";
		$data['smallTitle'] = "Test/Go for test";
		$data['bigTitle'] = "Select Test";
		$data['body'] = "admin/singleSms";
		$data['headerCss'] = "admin/headerCss/questionListCss";
		$data['footerJs'] = "admin/footerJs/questionListJs";
		$this->load->view("include/admin/mainContent",$data);
	}
	
	public function allStudent(){
		$data['title'] = "Test";
		$data['smallTitle'] = "Test/Go for test";
		$data['bigTitle'] = "Select Test";
		$data['body'] = "admin/allStudent";
		$data['headerCss'] = "admin/headerCss/questionListCss";
		$data['footerJs'] = "admin/footerJs/questionListJs";
		$this->load->view("include/admin/mainContent",$data);
	
	}
	public function takeFee(){
		$data['title'] = "Test";
		$data['smallTitle'] = "Test/Go for test";
		$data['bigTitle'] = "Select Test";
		$data['body'] = "admin/takeFee";
		$data['headerCss'] = "admin/headerCss/questionListCss";
		$data['footerJs'] = "admin/footerJs/questionListJs";
		$this->load->view("include/admin/mainContent",$data);
	}
	
	public function feeSlipList(){
		$data['title'] = "Test";
		$data['smallTitle'] = "Test/Go for test";
		$data['bigTitle'] = "Select Test";
		$data['body'] = "admin/feeSlipList";
		$data['headerCss'] = "admin/headerCss/questionListCss";
		$data['footerJs'] = "admin/footerJs/questionListJs";
		$this->load->view("include/admin/mainContent",$data);
	}
	public function viewfeeD(){
		$id = $this->uri->segment(3);
		$this->db->where("id",$id);
		$datastu = $this->db->get("student_info")->row();
		$data['row']=$datastu;
	
		$this->db->where("student_id",$data['row']->student_id);
		$row = $this->db->get("fee");
		if($row->num_rows() > 0){
			$val = $this->db->query("SELECT remaing_fee FROM fee WHERE student_id = '$datastu->student_id' ORDER BY sno DESC LIMIT 1")->row();
			$data['balance'] = $val->remaing_fee;
		}else{
			$data['balance'] = $data['row']->total_fee;
		}
		$data['title'] = "Collect Fee";
		$data['smallTitle'] = "Fee/Collect Fee";
		$data['bigTitle'] = "Collect Fee";
		$data['body'] = "admin/viewfeeD";
		$data['headerCss'] = "admin/headerCss/feeCss";
		$data['footerJs'] = "admin/footerJs/feeJs";
		$this->load->view("include/admin/mainContent",$data);
	}
	public function dailyExpense(){
		$data['title'] = "Daily Expense";
		$data['smallTitle'] = "Accounting / Daily Expense";
		$data['bigTitle'] = "Daily Expense";
		$data['body'] = "admin/dailyExpense";
		$data['headerCss'] = "admin/headerCss/dailyExpenseCss";
		$data['footerJs'] = "admin/footerJs/dailyExpenseJs";
		$this->load->view("include/admin/mainContent",$data);
	}
	public function save_fee(){
		$id=$this->input->post("student_id");
		$n = 1000 + $this->db->query("SELECT id FROM invoice_serial ORDER BY id DESC LIMIT 1")->row()->id;
		$invoice_no = "LAF".$n;
		$in = array(
				"invoice_no" => $invoice_no,
				"reason" => "fee Submit",
				"invoice_date" => date("Y-m-d")
		);
		$this->db->insert("invoice_serial",$in);
		$op1 = $this->db->query("select closing_balance from opening_closing_balance where opening_date='".date('Y-m-d')."'")->row();
		$balance = $op1->closing_balance;
		$clbalance = $balance + $this->input->post("feePay");
		$bal = array(
				"closing_balance" => $clbalance
		);
		$this->db->where("opening_date",date('Y-m-d'));
		$this->db->update("opening_closing_balance",$bal);
		$data=array(
				"student_id"=>$this->input->post("student_id"),
				"remaing_fee"=>$this->input->post("balance"),
				"paid"=>$this->input->post("feePay"),
				"paid_date"=>$this->input->post("issueDate"),
				"regifee"=>$this->input->post("regfee"),
				"onlinest"=>$this->input->post("onlinest"),
				"offlinest"=>$this->input->post("offlinest"),
				"otherfee"=>$this->input->post("otherfee"),
				"paid_month"=>$this->input->post("monthName"),
				"recieved_by"=>$this->input->post("recieved"),
				"till_date"=>$this->input->post("tillDate"),
				"invoice_no"=>$invoice_no
		);
		$this->db->insert("fee",$data);
		$am=0;
		$msg="Receive";
		if($this->input->post("feePay")>0)
		{$am=$this->input->post("feePay");
		$msg="Receive ( ".$this->input->post("feePay")." regularfee";
		}
		if($this->input->post("regfee")>0)
		{$am=$am+$this->input->post("regfee");
		$msg=$msg.$am+$this->input->post("regfee")."Registration fee";
		}
		if($this->input->post("onlinest")>0)
		{$am=$am+$this->input->post("onlinest");
		$msg=$msg.$am+$this->input->post("onlinest")."Online Test fee";
		}
		if($this->input->post("offlinest")>0)
		{$am=$am+$this->input->post("offlinest");
		$msg=$msg.$am+$this->input->post("offlinest")."Off line Test fee";
		}
		if($this->input->post("otherfee")>0)
		{$am=$am+$this->input->post("otherfee");
		$msg=$msg.$am+$this->input->post("otherfee")."Other charges";
		}
		
		$dayBook = array(
				"paid_to" => $this->session->userdata("name"),
				"paid_by" => $this->input->post("student_id"),
				"reason" => "Student Fee",
				"detail" => $msg,
				"dabit_cradit" => "credit",
				"amount" => $am,
				"closing_balance" => $clbalance,
				"pay_date" => date("Y-m-d"),
				"pay_mode" => "Cash",
				"invoice_no" => $invoice_no
		);
		$this->db->insert("day_book",$dayBook);
		$this->db->where("student_id",$id);
				$rowc = $this->db->get("student_info")->row();
				$sno=$rowc->id;
		
		redirect("apanel/feeInvoice/$sno/$invoice_no");
	}
	public function feeInvoice(){
		$data['stu_id']=$this->uri->segment(3);
		$data['invoice_no']=$this->uri->segment(4);
		$data['title'] = "Test";
		$data['smallTitle'] = "Fee / Fee Invoice";
		$data['bigTitle'] = "Fee Invoice";
		$data['body'] = "admin/feeInvoice";
		$data['headerCss'] = "admin/headerCss/feeCss";
		$data['footerJs'] = "admin/footerJs/feeJs";
		$this->load->view("include/admin/mainContent",$data);
	}
	public function dayBook(){
		$data['title'] = "Day Book";
		$data['smallTitle'] = "Accounting / Day Book";
		$data['bigTitle'] = "Day Book";
		$data['body'] = "admin/dayBook";
		$data['headerCss'] = "admin/headerCss/dailyExpenseCss";
		$data['footerJs'] = "admin/footerJs/dailyExpenseJs";
		$this->load->view("include/admin/mainContent",$data);
	}
	public function feeReports(){
		$data['title'] = "Day Book";
		$data['smallTitle'] = "Accounting / Day Book";
		$data['bigTitle'] = "Fee Reports";
		$data['body'] = "admin/feeReports";
		$data['headerCss'] = "admin/headerCss/feeReportCss";
		$data['footerJs'] = "admin/footerJs/feeReportJs";
		$this->load->view("include/admin/mainContent",$data);
	}
		public function invoice()
		{
		$this->load->library("form_validation");
		$data['title'] = "invoice";
		$data['smallTitle'] = "Website/invoice";
		$data['bigTitle'] = "invoice";
		$data['body'] = "admin/invoice";
		$data['headerCss'] = "admin/headerCss/studentListCss";
		$data['footerJs'] = "admin/footerJs/studentListJs";
		$this->load->view("include/admin/mainContent",$data);
	}
	
	public function submitadmission()
	{

	/*	$this->load->library("form_validation");
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
		$this->form_validation->set_rules('name','name','required');
		$this->form_validation->set_rules('f_name','Father-Name','required');
		$this->form_validation->set_rules('m_name','Mather-Name','required');
		$this->form_validation->set_rules('dob','Date of Brith','required');
		$this->form_validation->set_rules('mobile','Form-Number','required');
		$this->form_validation->set_rules('f_fees','Form-Fees','required');
		$this->form_validation->set_rules('g_by','Given_By','required');
		if($this->form_validation->run()){
	    $this->load->library("form_validation");
	    $name=$this->input->post('name');
	     $f_name=$this->input->post('f_name');
	      $m_name=$this->input->post('m_name');
	       $d_o_b=$this->input->post('dob');
	        $f_number=$this->input->post('');
	         $f_fees=$this->input->post('f_fees');
	          $g_by=$this->input->post('g_by');
	          
	          
	           $invoice_no=$this->input->post('invoice_no');
	           $data=array( 
						 "name"=>$name,
						 "f_name"=>$f_name,
						 "m_name"=>$m_name,
						 "d_o_b"=>$d_o_b,
						 "f_number"=>$f_number,
						 "f_fees"=>$f_fees,
						 "g_by"=>$g_by,
						 "invoice_no"=>$invoice_no
					 );
					 $this->load->model("loginmodel");
		$lid = $this->loginmodel->insert($data);
		redirect(base_url()."index.php/apanel/invoicefrem/".$lid); */
		
		$data['name' ]=$this->input->post("name");
		$data['f_name' ]=$this->input->post("fname");
		$data['m_name' ]=$this->input->post("m_name");
		$data['mobile_no' ]=$this->input->post("person_mobile");
		$data['d_o_b' ]=$this->input->post("dob");
		$data['address' ]=$this->input->post("address");
		$data['class' ]=$this->input->post("class_name");
		$data['f_fees' ]=$this->input->post("form_fee");
		$data['date' ]=date('Y-m-d h:s:i');
		$data['client_code' ]=$this->session->userdata("client_code");
		$this->db->select_max('id');
		$query = $this->db->get('admission');
		if($query->num_rows()>0){
			$max=$query->row()->id+1;
		}else{
			$max = 1;
		}
		$invno = "SIS10".$max;
		$data['invoice_no']=$invno;
		
		$this->db->insert("admission",$data);
		redirect(base_url()."index.php/apanel/invoicefrem/".$invno);
	}
	
	public function updateadmission()
	{

        $data['name' ]=$this->input->post("name");
		$data['f_name' ]=$this->input->post("fname");
		$data['m_name' ]=$this->input->post("m_name");
		$data['mobile_no' ]=$this->input->post("person_mobile");
		$data['address' ]=$this->input->post("address");
		$this->db->where("id",$this->input->post("id"));
		$this->db->update("admission",$data);
		redirect(base_url()."index.php/apanel/reglist");
	}
	
		public function updateadmissiontable()
	{
     		$inc=$this->db->get("updateadmission");
            if($inc->num_rows()>0){	
                                        	   
            foreach($inc->result() as $in): 
        $data['name' ]= $in->name;
		$data['f_name' ]= $in->f_name;
		$data['m_name' ]= $in->m_name;
		$data['mobile_no' ]= $in->address;
		$this->db->where("id",$in->id);
		$this->db->update("admission",$data);
                
            endforeach;
            }
	}
	public function bookSaleEntry()
	{
		$data['name' ]=$this->input->post("name");
		$data['f_name' ]=$this->input->post("fname");
		$data['class' ]=$this->input->post("class_name");
		$data['book_amount' ]=$this->input->post("book_amount");
		$data['date' ]=date('Y-m-d h:s:i');
		$data['client_code' ]=$this->session->userdata("client_code");
		$this->db->select_max('id');
		$query = $this->db->get('bookEntry');
		if($query->num_rows()>0){
			$max=$query->row()->id+1;
		}else{
			$max = 1;
		}
		$invno = "SISBOOK10".$max;
		$data['invoice_no']=$invno;
		
		$this->db->insert("bookEntry",$data);
		redirect(base_url()."index.php/apanel/bookinvoice/".$invno);
	}
	
	function invoicefrem(){
	    $this->load->view("admin/invoice/invoicefrem");
	}
	function invoicefinal(){
	   $id = $this->uri->segment(3);
	   
	   $this->load->view("admin/invoice/invoice");
	}
	
	public function reglist(){
		$data['title'] = "Registration Form List";
		$data['smallTitle'] = "Registration List";
		$data['bigTitle'] = "Registration Form List";
		$data['body'] = "admin/reglist";
		$data['headerCss'] = "admin/headerCss/questionListCss";
		$data['footerJs'] = "admin/footerJs/questionListJs";
		$this->load->view("include/admin/mainContent",$data);
	}


}