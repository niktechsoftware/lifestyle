<?php 
  class Auth extends CI_Model
  {
     function popup($cid)
  {
   //echo $cid;
   $this->db->where("client_code",$cid);
    $pop=$this->db->get("popup_image"); 
   // print_r($news->result());
   // return $pop;
   //print_r($pop);
  }
 function product($cid)
 {
     $this->db->where("client_code",$cid);
     $pro=$this->db->get("stock_products");
     echo $pro->name;
 }
}
?>