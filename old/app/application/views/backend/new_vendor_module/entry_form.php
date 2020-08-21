<?php
$attributes = array('id' => 'vendor-form','enctype' => 'multipart/form-data');
echo form_open( '', $attributes);
?>

<section class="content animated fadeInRight">
	<div class="card card-info">
	    <div class="card-header">
	        <h3 class="card-title"><?php echo get_msg('shop_info')?></h3>
	    </div>


        <ul class="nav nav-tabs" id="myTab">

<?php
    $active_tab_shopinfo="";
    if($current_tab == "shopinfo") {
        $active_tab_shopinfo = "active";
    }
    
    if($current_tab == "payment") {
        $active_tab_payment = "active";
    }

    if($current_tab == "currency") {
        $active_tab_currency = "active";
    }

    if($current_tab == "sender") {
        $active_tab_sender = "active";
    }

    if($current_tab == "tax") {
        $active_tab_tax = "active";
    }

    if($current_tab == "policy") {
        $active_tab_policy = "active";
    }

    if($current_tab == "shipping") {
        $active_tab_shipping = "active";
    }

    if($active_tab_shopinfo == "" && $active_tab_payment == "" &&  $active_tab_currency == "" && $active_tab_sender == "" && $active_tab_tax == "" && $active_tab_policy == "" && $active_tab_shipping == "") {

        $active_tab_shopinfo = "active";
    } 

?>

<li class="nav-item"><a class="nav-link <?php echo $active_tab_shopinfo;?>" href="#shopinfo" value="shopinfo" data-toggle="tab">Shop Information</a></li>
<li class="nav-item"><a class="nav-link <?php echo $active_tab_payment;?>" href="#payment"  value="payment" data-toggle="tab">Payment Setting</a></li>
<li class="nav-item"><a class="nav-link <?php echo $active_tab_currency;?>" href="#currency" value="currency" data-toggle="tab">Currency Setting</a></li>
<li class="nav-item"><a class="nav-link <?php echo $active_tab_sender;?>" href="#sender" value="sender" data-toggle="tab">Sending Email Setting(For SMTP)</a></li>
<li class="nav-item"><a class="nav-link <?php echo $active_tab_tax;?>" href="#tax" value="tax" data-toggle="tab">Tax</a></li>
<li class="nav-item"><a class="nav-link <?php echo $active_tab_policy;?>" href="#policy" value="policy" data-toggle="tab">Policy & Terms</a></li>
<li class="nav-item"><a class="nav-link <?php echo $active_tab_shipping;?>" href="#shipping" value="shipping" data-toggle="tab">Shipping Method</a></li>
</ul>

        </section>

<?php echo form_close(); ?>