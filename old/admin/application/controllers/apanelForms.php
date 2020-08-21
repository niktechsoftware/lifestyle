<?php
class ApanelForms extends CI_Controller{
	public function headline(){
		$data = array(
				"subject" => $this->input->post("title"),
				"message" => $this->input->post("content"),
				"date" => date("Y-m-d")
		);
		if($this->db->insert("heading",$data)){
			redirect("apanel/headline");
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
	}
//-------------------------------------------------------------------------------------------------------------------------	

  
	
	public function inquiry(){
		$name = $this->input->post("name");
		$data = array(
				"name" => $this->input->post("name"),
				"mobile" => $this->input->post("mobile"),
				"email" => $this->input->post("email"),
				"msg" => $this->input->post("msg"),
				"date" => date("Y-m-d")
		);
		if($this->db->insert("inquiry",$data)){
			if($this->input->post("contact") == "contact"):
				redirect("welcome/contact/true/$name");
			else:
				redirect("welcome/index/true/$name");
			endif;
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
	}
//-------------------------------------------------------------------------------------------------------------------------	
	public function editProfile(){
		$id = $this->input->post('row_id');
		$photo_name = time().trim($_FILES['stuImage']['name']);
		$new_img = array(
				"photo"=> $photo_name
		);
		$old_img = $this->input->post("old_stuImg");
		@chmod("assets/images/stuImage/" . $old_img, 0777);
		@unlink("assets/images/stuImage/" . $old_img);
		$this->db->where("id",$id);
		$up = $this->db->update("student_info",$new_img);
		if($up){
			$this->load->library('upload');
			// Set configuration array for uploaded photo.
			$image_path = realpath(APPPATH . '../assets/images/stuImage');
			$config['upload_path'] = $image_path;
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			$config['max_size'] = '1024';
			$config['file_name'] = $photo_name;
			// Upload first photo and create a thumbnail of it.
			if (!empty($_FILES['stuImage']['name'])) {
				$this->upload->initialize($config);
				if ($this->upload->do_upload('stuImage')) {
					// ---------------------------------- Redirect Success Page ----------------------
					$this->session->set_userdata("photo",$photo_name);
					$data = array(
						"student_id" => $this->input->post("student_id"),
						"name" => $this->input->post("name"),
						"fName" => $this->input->post("fname"),
						"address" => $this->input->post("address"),
						"city" => $this->input->post("city"),
						"state" => $this->input->post("state"),
						"pin" => $this->input->post("pin"),
						"mobile" => $this->input->post("mobile"),
						"dob" => date("Y-m-d", strtotime($this->input->post("dob"))),
						"heighQ" => $this->input->post("heighQ"),
						"courseApplied" => $this->input->post("courseApplied"),
						"timing" => $this->input->post("timing"),
						"gender" => $this->input->post("gender"),
						"email" => $this->input->post("email"),
						"password" => $this->input->post("password"),
						"total_fee" => $this->input->post("total_fee"),
						"fee_method" => $this->input->post("fee_method"),
						"joinDate" => $dt,
						"joinTime" => date("h:i:s"),
						"isApprove" => $isApprove
					);
					$this->db->where("id",$this->input->post("id"));
					if($this->db->update("student_info",$data)){
						redirect("apanel/studentList");
					}
					else{
						echo "Somthing going wrong. Please Contact Site administrator";
					}
				}
			}
		}
		}
//-----------------------------------------------------------------------------------------------------------------------------
	public function deleteEnquiry(){
		$this->db->where("id",$this->uri->segment(3));
		if($this->db->delete("inquiry")){
			redirect(base_url()."apanel/inquiry");
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
	}
	
	public function deleteCategory(){
	    	$this->db->where("id",$this->uri->segment(3));
		if($this->db->delete("category")){
			redirect(base_url()."apanel/category");
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
	}
//-------------------------------------------------------------------------------------------------------------------------
	public function editHeadline(){
		$data = array(
				"subject" => $this->input->post("title"),
				"message" => $this->input->post("content"),
				"date" => date("Y-m-d")
		);
		$this->db->where("id",$this->input->post("id"));
		if($this->db->update("notice",$data)){
			redirect(base_url()."apanel/noticeBoard");
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
	}
//-----------------------------------------------------------------------------------------------------------------------------	
	public function noticeBoard(){
		$data = array(
				"subject" => $this->input->post("title"),
				"message" => $this->input->post("content"),
				"date" => date("Y-m-d")
		);
		if($this->db->insert("notice",$data)){
			redirect(base_url()."apanel/noticeBoard");
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
	}
	
//-----------------------------------------------------------------------------------------------------------------------------
	public function deleteHeadline(){
		$this->db->where("id",$this->uri->segment(3));
		if($this->db->delete("notice")){
			redirect(base_url()."apanel/noticeBoard");
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
	}
	public function letestNews(){
	   $client_code= $this->session->userdata('client_code');
		$data = array(
				// "subject" => $this->input->post("title"),
				"news" => $this->input->post("title"),
				"date" => date('Y-m-d'),
				"client_code"=>$client_code
		);
		if($this->db->insert("latestnews",$data)){
			redirect(base_url()."apanel/latestNews");
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
	}

	public function editNews(){
		$data = array(
				"news" => $this->input->post("title"),
				// "message" => $this->input->post("content"),
				// "url" => $this->input->post("url")
		);
		$this->db->where("id",$this->input->post("id"));
		if($this->db->update("latest_news",$data)){
			redirect(base_url()."apanel/latestNews");
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
	}
	public function delete_news(){
		$this->db->where("id",$this->uri->segment(3));
		if($this->db->delete("latestnews")){
			redirect(base_url()."apanel/latestNews");
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
	}
	public function deleteNews(){
		$this->db->where("id",$this->uri->segment(3));
		if($this->db->delete("latest_news")){
			redirect(base_url()."apanel/latestNews");
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
	}
	function uploadbooks(){
		$photo_name = time().trim($_FILES['uploadbooks']['name']);
		$data=array(
				'bookName'=>$this->input->post("title"),
				'subject'=>$this->input->post("subject"),
				'photo'=>$photo_name
		);
		$query = $this->db->insert("upload_books",$data);
		if($query){
			$this->load->library('upload');
			$image_path = realpath(APPPATH . '../assets/images');
			$config['upload_path'] = $image_path;
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			$config['max_size'] = '1024';
			$config['file_name'] = $photo_name;
		}
		if (!empty($_FILES['uploadbooks']['name'])) {
			$this->upload->initialize($config);
			$this->upload->do_upload('uploadbooks');
			redirect(base_url()."apanel/uploadbooks/23");
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
	}
	function uploadpdf(){
		$photo_name = time().trim($_FILES['uploadbooks']['name']);
		$data=array(
				'pdfName'=>$this->input->post("title"),
				'filename'=>$photo_name
		);
		$query = $this->db->insert("upload_pdf",$data);
		if($query){
			$this->load->library('upload');
			$image_path = realpath(APPPATH . '../assets/pdffile');
			$config['upload_path'] = $image_path;
			$config['allowed_types'] = 'gif|jpg|jpeg|png|pdf';
			$config['max_size'] = '10024';
			$config['file_name'] = $photo_name;
		}
		if (!empty($_FILES['uploadbooks']['name'])) {
			$this->upload->initialize($config);
			$this->upload->do_upload('uploadbooks');
			redirect(base_url()."apanel/uploadpdf/23");
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
	}
	function saveSelectedStu(){
		$photo_name = time().trim($_FILES['selectedStu']['name']);
		$data=array(
				'studentName'=>$this->input->post("title"),
				'department'=>$this->input->post("department"),
				'photo'=>$photo_name
		);
		if($query){
			$this->load->library('upload');
			$image_path = realpath(APPPATH . '../assets/images');
			$config['upload_path'] = $image_path;
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			$config['max_size'] = '1024';
			$config['file_name'] = $photo_name;
		}
		if (!empty($_FILES['selectedStu']['name'])) {
			$this->upload->initialize($config);
			$this->upload->do_upload('selectedStu');
			$query = $this->db->insert("selected_stu",$data);
			redirect(base_url()."apanel/selectedStudent/23");
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
	}
	
	function createCategory(){
	    
	     $client_code=$this->session->userdata('client_code');
	   	$photo_name = time().trim($_FILES['selectedStu']['name']);
        $photo_name=str_replace(' ', '_', $photo_name);
	
			$this->load->library('upload');
			$image_path = realpath(APPPATH . '../assets/images/client_gallery/'.$client_code.'/');
			$config['upload_path'] = $image_path;
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			$config['max_size'] = '2048';
			$config['file_name'] = $photo_name;
	if (!empty($_FILES['selectedStu']['name'])) {
			$this->upload->initialize($config);

			if($this->upload->do_upload('selectedStu')){
			     if($this->input->post("cateid")){
	    	       $cid = $this->input->post("cateid");
	    	       	$data=array(
				'name' => $this->input->post('categoryName'),
					'image'=>$photo_name,
			
        		);
        		$this->db->where("id",$this->input->post("cateid"));
        		$this->db->update("category",$data);
        		redirect(base_url()."apanel/category/Edit/".$cid);
	    	   }else{
				$data=array(
				'name' => $this->input->post('categoryName'),
				'image'=>$photo_name,
				'client_code'=>$client_code
        		);
        	
        		 $this->db->insert("category",$data);
        	    $query =$this->db->insert_id();
        	
        		//echo $photo_name;	
		redirect(base_url()."apanel/category/".$query);
	    	   }
		//	echo $image_path;
	    	}
	    	else{
			echo "Somthing going wrong. Please Contact Site administrator";
	    	}}else{
	    	   if($this->input->post("cateid")){
	    	       $cid = $this->input->post("cateid");
	    	       	$data=array(
				'name' => $this->input->post('categoryName'),
			
        		);
        		$this->db->where("id",$this->input->post("cateid"));
        		$this->db->update("category",$data);
        		redirect(base_url()."apanel/category/Edit/".$cid);
	    	   }
	    	   else{
	    	       echo "Please Tr Again";
	    	   }
	    	}
        	
	}
	
	//add product 
	
	  public function addProduct(){
	      
	      $client_code= $this->session->userdata("client_code");
        if (!empty($_FILES['selectedStu1']['name'])) {
            	$photo_name = time().trim($_FILES['selectedStu1']['name']);
                $photo_name=str_replace(' ', '_', $photo_name);
	
    			$this->load->library('upload');
    			$image_path = realpath(APPPATH . '../assets/images/client_gallery/'.$client_code.'/product/');
    			$config['upload_path'] = $image_path;
    			$config['allowed_types'] = 'gif|jpg|jpeg|png';
    			$config['max_size'] = '2048';
    			$config['file_name'] = $photo_name;
    			
    			$this->upload->initialize($config);
    			if($this->upload->do_upload('selectedStu1')){
    			    $data['file1']=$photo_name;
    			}
        }
         if (!empty($_FILES['selectedStu2']['name'])) {
            	$photo_name = time().trim($_FILES['selectedStu2']['name']);
                $photo_name=str_replace(' ', '_', $photo_name);
	
    			$this->load->library('upload');
    			$image_path = realpath(APPPATH . '../assets/images/client_gallery/'.$client_code.'/product/');
    			$config['upload_path'] = $image_path;
    			$config['allowed_types'] = 'gif|jpg|jpeg|png';
    			$config['max_size'] = '2048';
    			$config['file_name'] = $photo_name;
    			
    			$this->upload->initialize($config);
    			if($this->upload->do_upload('selectedStu2')){
    			    $data['file2']=$photo_name;
    			}
        }
         if (!empty($_FILES['selectedStu3']['name'])) {
            	$photo_name = time().trim($_FILES['selectedStu3']['name']);
            $photo_name=str_replace(' ', '_', $photo_name);
	
			$this->load->library('upload');
			$image_path = realpath(APPPATH . '../assets/images/client_gallery/'.$client_code.'/product/');
			$config['upload_path'] = $image_path;
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			$config['max_size'] = '2048';
			$config['file_name'] = $photo_name;
			
			$this->upload->initialize($config);
			if($this->upload->do_upload('selectedStu3')){
			    $data['file3']=$photo_name;
			}
        }
        
        $data['company']        =$this->input->post('company');
        $data['p_type']         =$this->input->post('p_type');
        $data['hsn']            =$this->input->post('hsn');
        $data['name']           =$this->input->post('productName');
        $data['size']           =$this->input->post('size');
        $data['selling_price1'] =$this->input->post('sellingprice');
        $data['mrp_price1']     =$this->input->post('mrpprice');
       
        $data['sub_category']   =$this->input->post('subCategory');
        $data['status']         =1;
        $data['client_code']    =$this->session->userdata("client_code");
        $data['sec']            =$this->input->post('hsn');
        $data['create_date']    =date("Y-m-d");
        if($this->input->post("proid")){
            $pid = $this->input->post("proid");
            $this->db->where('id',$this->input->post("proid"));
            $this->db->update("stock_products",$data);
            	redirect(base_url()."apanel/productEntry/".$pid);
        }else{
                $this->db->insert("stock_products",$data);
        	    $query =$this->db->insert_id();
      	redirect(base_url()."apanel/productEntry/".$query);
        }
    }
	
		function createSubCategory(){
	    
	     $client_code=$this->session->userdata('client_code');
	   	$photo_name = time().trim($_FILES['selectedStu']['name']);
        $photo_name=str_replace(' ', '_', $photo_name);
	
			$this->load->library('upload');
			$image_path = realpath(APPPATH . '../assets/images/client_gallery/'.$client_code.'/');
			$config['upload_path'] = $image_path;
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			$config['max_size'] = '2048';
			$config['file_name'] = $photo_name;
	if (!empty($_FILES['selectedStu']['name'])) {
			$this->upload->initialize($config);
			if($this->upload->do_upload('selectedStu')){
			     if($this->input->post("cateid")){
	    	       $scid = $this->input->post("cateid");
	    	       	$data=array(
				    'name' => $this->input->post('categoryName'),
					'image'=>$photo_name,
					'cat_id'=>$this->input->post("mainCategory")
			
        		);
        		$this->db->where("id",$this->input->post("cateid"));
        		$this->db->update("sub_category",$data);
        		redirect(base_url()."apanel/subcategory/Edit/".$scid);
	    	   }else{
				$data=array(
				'name' => $this->input->post('categoryName'),
				'image'=>$photo_name,
				'cat_id'=>$this->input->post("mainCategory"),
			
        		);
        	
        		 $this->db->insert("sub_category",$data);
        	    $query =$this->db->insert_id();
        		//echo $photo_name;	
		redirect(base_url()."apanel/subcategory/".$query);
	    	   }
		//	echo $image_path;
	    	}
	    	else{
			echo "Somthing going wrong. Please Contact Site administrator";
	    	}}else{
	    	   if($this->input->post("cateid")){
	    	       $cid = $this->input->post("cateid");
	    	       	$data=array(
				    'name' => $this->input->post('categoryName'),
				    	'cat_id'=>$this->input->post("mainCategory"),
			
        		);
        		$this->db->where("id",$this->input->post("cateid"));
        		$this->db->update("sub_category",$data);
        		redirect(base_url()."apanel/subcategory/Edit/".$cid);
	    	   }
	    	   else{
	    	       echo "Please Tr Again";
	    	   }
	    	}
        	
	}
		function logo(){
	    $client_code=$this->session->userdata('client_code');
	   	$photo_name = time().trim($_FILES['selectedStu']['name']);
        $photo_name=str_replace(' ', '_', $photo_name);
	
			$this->load->library('upload');
			$image_path = realpath(APPPATH . '../assets/images/client_gallery/'.$client_code.'/');
			$config['upload_path'] = $image_path;
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			$config['max_size'] = '2048';
			$config['file_name'] = $photo_name;
	if (!empty($_FILES['selectedStu']['name'])) {
			$this->upload->initialize($config);

			if($this->upload->do_upload('selectedStu')){
				$data=array(
				'desc' => $this->input->post('desc'),
				'image'=>$photo_name,
				'date'=>date("Y-m-d"),
				'client_code'=>$client_code
        		);
        	
        		 $this->db->insert("logo_image",$data);
        	    $query =$this->db->insert_id();
        	
        		//echo $photo_name;	
		redirect(base_url()."apanel/logo/".$query);
		//	echo $image_path;
	    	}
	    	else{
			echo "Somthing going wrong. Please Contact Site administrator";
	    	}}else{
	    	    echo "file not Select";
	    	}
        	}
	
		function popup(){
	    $client_code=$this->session->userdata('client_code');
	   	$photo_name = time().trim($_FILES['selectedStu']['name']);
        $photo_name=str_replace(' ', '_', $photo_name);
	
			$this->load->library('upload');
			$image_path = realpath(APPPATH . '../assets/images/client_gallery/'.$client_code.'/');
			$config['upload_path'] = $image_path;
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			$config['max_size'] = '2048';
			$config['file_name'] = $photo_name;
	if (!empty($_FILES['selectedStu']['name'])) {
			$this->upload->initialize($config);

			if($this->upload->do_upload('selectedStu')){
				$data=array(
				'desc' => $this->input->post('desc'),
				'image'=>$photo_name,
				'date'=>date("Y-m-d"),
				'client_code'=>$client_code
        		);
        	
        		 $this->db->insert("popup_image",$data);
        	    $query =$this->db->insert_id();
        	
        		//echo $photo_name;	
		redirect(base_url()."apanel/popup/".$query);
		//	echo $image_path;
	    	}
	    	else{
			echo "Somthing going wrong. Please Contact Site administrator";
	    	}}else{
	    	    echo "file not Select";
	    	}
        	}
        		function popup1(){
	    $client_code=$this->session->userdata('client_code');
	   	$photo_name = time().trim($_FILES['selectedStu']['name']);
        $photo_name=str_replace(' ', '_', $photo_name);
	
			$this->load->library('upload');
			$image_path = realpath(APPPATH . '../assets/images/client_gallery/'.$client_code.'/');
			$config['upload_path'] = $image_path;
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			$config['max_size'] = '2048';
			$config['file_name'] = $photo_name;
	if (!empty($_FILES['selectedStu']['name'])) {
			$this->upload->initialize($config);

			if($this->upload->do_upload('selectedStu')){
				$data=array(
				'desc' => $this->input->post('desc'),
				'image'=>$photo_name,
				'date'=>date("Y-m-d"),
				'client_code'=>$client_code
        		);
        	
        		 $this->db->update("popup_image",$data);
        	   // $query =$this->db->insert_id();
        	
        		//echo $photo_name;	
		redirect(base_url()."apanel/popup/");
		//	echo $image_path;
	    	}
	    	else{
			echo "Somthing going wrong. Please Contact Site administrator";
	    	}}else{
	    	    echo "file not Select";
	    	}
        	}
	function savedGallery(){
	    $client_code=$this->session->userdata('client_code');
	   	$photo_name = time().trim($_FILES['selectedStu']['name']);
        $photo_name=str_replace(' ', '_', $photo_name);
	
			$this->load->library('upload');
			$image_path = realpath(APPPATH . '../assets/images/client_gallery/'.$client_code.'/');
			$config['upload_path'] = $image_path;
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			$config['max_size'] = '2048';
			$config['file_name'] = $photo_name;
	if (!empty($_FILES['selectedStu']['name'])) {
			$this->upload->initialize($config);
			
			if($this->upload->do_upload('selectedStu')){
				$data=array(
				
				'depart' => $this->input->post('desc'),
				'image'=>$photo_name,
				'date'=>date("Y-m-d"),
				'client_code'=>$client_code
        		);
        		 $this->db->insert("gallery_depart",$data);
        	$query =	$this->db->insert_id();
        	
        		//echo $photo_name;	
			redirect(base_url()."apanel/dgallery/".$query);
			//echo $image_path;
	    	}
	    	else{
			 echo "Somthing going wrong. Please Contact Site administrator";
	    	}}else{
	    	    echo "file not Select";
	    	}
        	}
        		function saveGallery(){
	    $client_code=$this->session->userdata('client_code');
	   	$photo_name = time().trim($_FILES['selectedStu']['name']);
        $photo_name=str_replace(' ', '_', $photo_name);
	
			$this->load->library('upload');
			$image_path = realpath(APPPATH . '../assets/images/client_gallery/'.$client_code.'/');
			$config['upload_path'] = $image_path;
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			$config['max_size'] = '2048';
			$config['file_name'] = $photo_name;
	if (!empty($_FILES['selectedStu']['name'])) {
			$this->upload->initialize($config);
				//echo $this->input->post("img_depart");
			
			if($this->upload->do_upload('selectedStu')){
				$data=array(
				  'depart_id'=>$this->input->post("img_depart"),
				  
				'name'=>$this->input->post("title"),
				'image' => $this->input->post('img_type'),
				'desc' => $this->input->post('desc'),
				'image'=>$photo_name,
				'date'=>date("Y-m-d"),
				'client_code'=>$client_code
        		);
        	
        		 $this->db->insert("gallery",$data);
        	$query =	$this->db->insert_id();
        	
        		//echo $photo_name;	
			redirect(base_url()."apanel/gallery/".$query);
			//echo $image_path;
	    	}
	    	else{
			 echo "Somthing going wrong. Please Contact Site administrator";
	    	}}else{
	    	    echo "file not Select";
	    	}
        	}
         function savegames(){
		$photo_name = time().trim($_FILES['selectedStu']['name']);
		$data=array(
				'name'=>$this->input->post("title"),
				'image'=>$photo_name,
				'date'=>date("Y-m-d")
	                	);
	        	$query = $this->db->insert("games",$data);
		        if($query){
			$this->load->library('upload');
			$image_path = realpath(APPPATH . '../assets/images');
			$config['upload_path'] = $image_path;
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			$config['max_size'] = '6048';
			$config['file_name'] = $photo_name;
		}
		if (!empty($_FILES['selectedStu']['name'])) {
			$this->upload->initialize($config);
			$this->upload->do_upload('selectedStu');
			
			redirect(base_url()."apanel/games");
			//echo $image_path;
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
	}
	function savecampus(){
		$photo_name = time().trim($_FILES['selectedStu']['name']);
		$data=array(
				'image'=>$photo_name,
				'date'=>date("Y-m-d")
		);
		$query = $this->db->insert("campus",$data);
		if($query){
			$this->load->library('upload');
			$image_path = realpath(APPPATH . '../assets/images');
			$config['upload_path'] = $image_path;
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			$config['max_size'] = '2048';
			$config['file_name'] = $photo_name;
		}
		if (!empty($_FILES['selectedStu']['name'])) {
			$this->upload->initialize($config);
			$this->upload->do_upload('selectedStu');
			
			redirect(base_url()."apanel/campus");
			//echo $image_path;
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
	}
        function saveStaff(){
    $client_code=$this->session->userdata("client_code");
		$photo_name = time().trim($_FILES['image']['name']);
		$photo_name=str_replace(' ', '_', $photo_name);
		$data=array(
		                'join_date'=>$this->input->post("joining_date"),
		            	'job_category'=>$this->input->post("job_category"),
				        'name'=>$this->input->post("name"),
					    'gender'=>$this->input->post("gender"),
					    'qualification'=>$this->input->post("qualification"),
					   	'post_desc'=>$this->input->post("post_desc"),
				    	'status'=>"Active",
					    'mobile'=>$this->input->post("mobile"),
			        	'photo'=>$photo_name,
				        'client_code'=>$client_code
		);
	//	print_r($data);
		$query = $this->db->insert("employee_info",$data);
		if($query){
			$this->load->library('upload');
			$image_path = realpath(APPPATH . '../assets/images');
			$config['upload_path'] = $image_path;
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			$config['max_size'] = '1024';
			$config['file_name'] = $photo_name;
		}
		if (!empty($_FILES['image']['name'])) {
			$this->upload->initialize($config);
			$this->upload->do_upload('image');
			redirect(base_url()."apanel/staff");
			//echo $image_path;
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
	}
public function deleteCareer(){
		$this->db->where("id",$this->uri->segment(3));
		if($this->db->delete("contactus")){
	redirect(base_url()."apanel/contact");
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
	}
	public function deletesuggestion(){
		$this->db->where("id",$this->uri->segment(3));
		if($this->db->delete("suggestion")){
		redirect(base_url()."apanel/suggestion");
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
	}
	public function deleteGallery(){
		$this->db->where("sno",$this->uri->segment(3));
		if($this->db->delete("gallery")){
			redirect(base_url()."apanel/gallery");
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
	}
		public function deletedGallery(){
		$this->db->where("depart_id",$this->uri->segment(3));
		if($this->db->delete("gallery_depart")){
			redirect(base_url()."apanel/dgallery");
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
	}
	public function deletepopup(){
		$this->db->where("sno",$this->uri->segment(3));
		if($this->db->delete("popup_image")){
			redirect(base_url()."apanel/popup");
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
	}
		public function deletelogo(){
		$this->db->where("id",$this->uri->segment(3));
		if($this->db->delete("logo_image")){
			redirect(base_url()."apanel/logo");
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
	}
	public function deletegames(){
		$this->db->where("id",$this->uri->segment(3));
		if($this->db->delete("games")){
			redirect(base_url()."apanel/games");
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
	}
	public function deleteCampus(){
		$this->db->where("id",$this->uri->segment(3));
		if($this->db->delete("campus")){
			redirect(base_url()."apanel/campus");
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
	}
	public function deleteStaff(){
		$this->db->where("id",$this->uri->segment(3));
		if($this->db->delete("employee_info")){
			redirect(base_url()."apanel/staff");
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
	}
	public function deletequick(){
		$this->db->where("id",$this->uri->segment(3));
		if($this->db->delete("inquiry")){
			redirect(base_url()."apanel/quickContact");
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
	}
	public function deleteBooks(){
		$this->db->where("SNo",$this->uri->segment(3));
		if($this->db->delete("upload_books")){
			redirect(base_url()."apanel/uploadbooks");
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
	}
	
	public function deleteStudents(){
		$this->db->where("sno",$this->uri->segment(3));
		if($this->db->delete("selected_stu")){
			redirect(base_url()."apanel/selectedStudent");
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
	}
	function getFeeDetails(){
		$type=$this->input->post("detailType");
		$sdt=$this->input->post("sdt");
		$edt=$this->input->post("edt");
		$a = mysql_query("select student_id,paid_date,$type as stufee from fee where paid_date >= '".date("Y-m-d", strtotime($sdt))."' AND paid_date <= '".date("Y-m-d", strtotime($edt))."'");
			?><table class="display table" style="width: 100%; cellspacing: 0;">
  <tr>
  <th>SNO</th>
    <th>Student Id</th>
     <th>student Name</th>
     <th><?php echo $type; ?> Fee</th>
    <th>Paid Date</th>
  </tr>
  <?php $i=1; while($row = mysql_fetch_object($a)){ ?>
  <tr>
  <?php if($row->stufee >0){?>
    <td><?php echo $i;?></td>
    <td><?php echo $row->student_id;?></td>
    <td>
    	 <?php 
    	 	$this->db->where("student_id",$row->student_id);
    		$name=$this->db->get("student_info")->row();
    	?>
    	<?php echo $name->name;?>
    </td>
    <td><?php echo $row->stufee;?></td>
     <td><?php echo $row->paid_date;?></td>
  </tr>
  <?php $i++;}}?>
</table>
<?php 

	}
}