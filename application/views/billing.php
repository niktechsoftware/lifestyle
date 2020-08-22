<?php $this->load->view('headercss');?>
<?php $this->load->view('header');?>
<div class="breadcrumb-main ">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="breadcrumb-contain">
                    <div>
                        <h2>checkout</h2>
                        <ul>
                            <li><a href="#">home</a></li>
                            <li><i class="fa fa-angle-double-right"></i></li>
                            <li><a href="#">checkout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb End -->

<!-- section start -->
<section class="section-big-py-space bg-light">
    <div class="custom-container">
        <div class="checkout-page contact-page">
            <div class="checkout-form">
                <form action="<?php echo base_url();?>index.php/login/billing" method="post">
                    <div class="row">
                        <div class="col-lg-6 col-sm-12 col-xs-12">
                            <div class="checkout-title">
                                <h3>Billing Details</h3>
								<?php if($this->session->userdata("uname")){
								echo $this->session->userdata("uname"); 
							//echo $this->session->userdata("mobile"); 
							 
							}else{ ?>
							 <div class="text-right"><a href="<?php echo base_url();?>index.php/welcome/login" class="btn-normal btn">Login</a></div>
							<?php }?>
								</div>
								  
                            <div class="theme-form">
                                <div class="row check-out ">

                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <label>Name</label>
                                        <input type="text" name="name" value="" placeholder="">
                                    </div>
                                   
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <label class="field-label">Phone</label>
                                        <input type="text" name="mobile" value="" placeholder="">
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <label class="field-label">Email Address</label>
                                        <input type="text" name="email" value="" placeholder="">
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <label class="field-label">Password</label>
                                        <input type="text" name="password" value="" placeholder="">
                                    </div>
									
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <label class="field-label">Address</label>
                                        <input type="text" name="address" value="" placeholder="Street address">
                                    </div>
									 <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <label class="field-label">Alternate Mobile</label>
                                        <input type="text" name="number" value="" placeholder="">
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <label class="field-label">Town/City</label>
                                        <input type="text" name="city" value="" placeholder="">
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <label class="field-label">State</label>
                                        <input type="text" name="state" value="" placeholder="">
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <label class="field-label">Pin Code</label>
                                        <input type="text" name="pincode" value="" placeholder="">
                                    </div>
                                   <!-- <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <input type="checkbox" name="shipping-option" id="account-option"> &ensp;
                                        <label for="account-option">Create An Account?</label>
                                    </div>-->
									<div class="text-right"><button class="btn-normal btn">Submit</button></div>
                                </div>
                            </div>
                        </div>
						
                        
                        <div class="col-lg-6 col-sm-12 col-xs-12">
						       
                            <div class="checkout-details theme-form  section-big-mt-space">
							
                                <div class="order-box">
                                    <div class="title-box">
                                        <div>Product <span>Total</span></div>
                                    </div>
                                    <ul class="qty">
                                        <li>Pink Slim Shirt × 1 <span>$25.10</span></li>
                                        <li>SLim Fit Jeans × 1 <span>$555.00</span></li>
                                    </ul>
                                    <ul class="sub-total">
                                        <li>Subtotal <span class="count">$380.10</span></li>
                                        <li>Shipping
                                            <div class="shipping">
                                                <div class="shopping-option">
                                                    <input type="checkbox" name="free-shipping" id="free-shipping">
                                                    <label for="free-shipping">Free Shipping</label>
                                                </div>
                                                <div class="shopping-option">
                                                    <input type="checkbox" name="local-pickup" id="local-pickup">
                                                    <label for="local-pickup">Local Pickup</label>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <ul class="total">
                                        <li>Total <span class="count">$620.00</span></li>
                                    </ul>
                                </div>
                                <div class="payment-box">
                                    <div class="upper-box">
                                        <div class="payment-options">
										<script>
										function radio_input(url){										
										window.location.href =  ''  + url 
										}
											</script>

                                            <ul>
                                           
                                                <li>
                                                    <div class="radio-option">
                                                        <input type="radio" name="cod" id="cod" value="off"  onClick="JavaScript:radio_input('cod')">
                                                        <label for="cod">Cash On Delivery<span class="small-text">Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</span></label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="radio-option paypal">
                                                        <input type="radio" name="onlinepay" id="op" value="off"  onClick="JavaScript:radio_input('https://securegw.paytm.in/theia/processTransaction')">
                                                        <label for="op">Online pay<span class="small-text"></span></label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                   <!-- <div class="text-right"><button class="btn-normal btn">Place Order</button></div>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?php $this->load->view('footer');?>