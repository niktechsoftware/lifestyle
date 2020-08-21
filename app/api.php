<?php include('db.php');


$key = "6808";

extract($_REQUEST);

date_default_timezone_set('Asia/Kolkata');

//01. SING UP
if(isset($access_key) && isset($signup) && $signup==1) {
    
    
    $response = array();
    
    if($key != $access_key){
		$response['error'] = "true";
		$response['message'] = "Invalid Access Key";
		print_r(json_encode($response));
		return false;
	}
	
 $upload_path = "/home/dcskme8d/public_html/mylifestyle/assets/fileupload/vendor/";

$server_ip=gethostbyname(gethostname());
$upload_url ="http://dcskmau.com/mylifestyle/assets/fileupload/vendor/";




$date=date('Y-m-d H:i:s');


	if(isset($_FILES['image']['name'])){
	    
	    $fileinfo =pathinfo($_FILES['image']['name']);
	    $extension=$fileinfo['extension'];
	    
	    $file_url =$upload_url.'IMG_'.$date.'.'.$extension;
	     $file_path =$upload_path.'IMG_'.$date.'.'.$extension;
	    
	    
	    try{
	        
	        move_uploaded_file($_FILES['image']['tmp_name'],$file_path);
	    }
	    catch(Exception $e){
	        
	    }
	    
		
	
    
	$register_user = "INSERT INTO vendor_request (VENDOR_NAME,VENDOR_SHOP,VENDOR_SHOP_ADDRESS,VENDOR_GST,VENDOR_LOGO,VENDOR_PHONE,VENDOR_EMAIL,VENDOR_DATETIME) VALUES ('$owner','$shop','$address','$gst','$file_url','$phone', '$email','$date')";
	$send_server= mysqli_query($link,$register_user);


	    $response['error'] = "1";
		$response['message'] = "User Registered successfully";
// 		$response['id'] = mysqli_insert_id($link);
		
     
	
	}else{
	    $response['error'] = "2";
	    $response['message'] = "Please fill all the data and submit!";
	}
	
	print_r(json_encode($response));
}


if(isset($access_key) && isset($regDetails) && $regDetails==1){
    
      
    $response = array();
    if($key != $access_key){
		$response['error'] = "true";
		$response['message'] = "Invalid Access Key";
		print_r(json_encode($response));
		return false;
	}
	
	$sql = mysqli_query($link,"SELECT * FROM `vendor_request` where `VENDOR_PHONE`='".$phone."' ORDER BY `VENDOR_DATETIME` DESC");
		$rows = array();
		$data=array();
        while($r = mysqli_fetch_assoc($sql)) {
       
	   // $rows['owner'] = $r['VENDOR_NAME'];
	   // $rows['shop'] = $r['VENDOR_SHOP'];
	   // $rows['logo'] = $r['VENDOR_LOGO'];
	   // $rows['email'] = $r['VENDOR_EMAIL'];
	   // $rows['phone'] = $r['VENDOR_PHONE'];
          $data[] = $r;
        }
		
		if (!empty($data)) {
// 			$response['error'] = "false";
// 			$response['message'] = "success";
			$response['response'] = $data;
		}else{
// 			$response[] = "true";
			$response[] = $rows;
		}
		
	print_r(json_encode($data));
	

}