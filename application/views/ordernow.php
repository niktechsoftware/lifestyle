<?php $this->load->view('headercss');?>
<?php $this->load->view('header');?>
<section class="section-big-py-space bg-light">
    <div class="custom-container">
        <div class="checkout-page contact-page">
            <div class="checkout-form">
                <form>
                    <div class="row">
                        <div class="col-lg-8 col-sm-12 col-xs-12">
                            <div class="checkout-title">
							<?php if($this->session->userdata("uname")){?>
                             
							<?php echo $this->session->userdata("uname"); 
							//echo $this->session->userdata("mobile"); 
							 
							}else{
								?>  <div class="theme-form">
                                <div class="row check-out ">

                                    <div class="form-group col-md-5 col-sm-5 col-xs-12">
                                        <label>Email/Phone Number</label>
                                        <input type="text" name="name" value="" placeholder="Email/Phone Number">
                                    </div>
									 <div class="form-group col-md-8 col-sm-8 col-xs-12">
                                         <h5> By Continueing , you agree to  <a href="https://niktechsoftware.com/welcome/term_conditions" style="color:blue" > THE LIFE STYLES's</a>&nbspTerms & Conditions.
        </h5>
                                    </div>
                                   <div class="text-right"><a href="#" class="btn-normal btn">Submit</a></div>
                                </div>
                            </div>
                        </div><?php 
							} ?>
                           
						</br>
						</br>
						 <div class="col-lg-8 col-sm-12 col-xs-12">
                            <div class="checkout-title">
							</br>
							</br>
                                <h3>2.&nbsp&nbspDelivery Address </h3>
								</div>
								  
                            <div class="theme-form">
                                 <div class="row check-out ">

                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <label>Name</label>
                                        <input type="text" name="field-name" value="" placeholder="">
                                    </div>
									<div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <label class="field-label">Phone</label>
                                        <input type="text" name="field-name" value="" placeholder="">
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <label>Pincode</label>
                                        <input type="text" name="field-name" value="" placeholder="">
                                    </div>
                                    
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <label class="field-label">Locality</label>
                                        <input type="text" name="field-name" value="" placeholder="">
                                    </div>
									 <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <label class="field-label">Address</label>
                                        <input type="text" name="field-name" value="" placeholder="Street address">
                                    </div>
									<div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <label class="field-label">Town/City</label>
                                        <input type="text" name="field-name" value="" placeholder="">
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <label class="field-label">State</label>
                                        <select>
                                            <option>Uttar Pradesh</option>
                                            
                                        </select>
                                    </div>
                                   <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <label class="field-label">Landmark</label>
                                        <input type="text" name="field-name" value="" placeholder="">
                                    </div>
                                 
                                   <!-- <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <input type="checkbox" name="shipping-option" id="account-option"> &ensp;
                                        <label for="account-option">Create An Account?</label>
                                    </div>-->
									 <div class="form-group col-md-6 col-sm-6 col-xs-12">
									<div class="text-right"><a href="<?php echo base_url();?>index.php/welcome/ordernow" class="btn-normal btn">Save And Deliver Here</a></div>
									</div>
									 <div class="form-group col-md-6 col-sm-6 col-xs-12">
									<div class="text-right"><a href="<?php echo base_url();?>index.php/welcome/ordernow" class="btn-normal btn">Cancel</a></div>
									</div>
                                </div>
                            </div>
                        </div>
						</br>
						</br>
						  <div class="col-lg-8 col-sm-12 col-xs-12">
                            <div class="checkout-title">
							</br>
							</br>
                                <h3>3.&nbsp&nbspOrder Summery</h3>
								</div>
								  
                            <div class="theme-form">
                                <div class="row check-out ">
 <div class="col-sm-12">
                <table class="table cart-table table-responsive-xs">
                    <thead>
                    <tr class="table-head">
                        <th scope="col">image</th>
                        <th scope="col">product name</th>
                        <th scope="col">price</th>
                        <th scope="col">quantity</th>
                       
                       
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <a href="#"><img src="../assets/images/layout-3/product/1.jpg" alt="cart"  class=" "></a>
                        </td>
                        <td><a href="#">cotton shirt</a>
                            <div class="mobile-cart-content row">
                                <div class="col-xs-3">
                                    <div class="qty-box">
                                        <div class="input-group">
                                            <input type="text" name="quantity" class="form-control input-number" value="1">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-xs-3">
                                    <h2 class="td-color"><a href="#" class="icon"><i class="ti-close"></i></a></h2></div>
                            </div>
                        </td>
                        <td>
                            <h2>$63.00</h2></td>
                        <td>
                            <div class="qty-box">
                                <div class="input-group">
                                    <input type="number" name="quantity" class="form-control input-number" value="1">
                                </div>
                            </div>
                        </td>
                        <td><a href="#" class="icon"><i class="ti-close"></i></a></td>
                       
                    </tr>
                    </tbody>
                    <tbody>
                    <tr>
                        <td>
                            <a href="#"><img src="../assets/images/layout-3/product/4.jpg" alt="cart" class=" "></a>
                        </td>
                        <td><a href="#">cotton shirt</a>
                            <div class="mobile-cart-content row">
                                <div class="col-xs-3">
                                    <div class="qty-box">
                                        <div class="input-group">
                                            <input type="number" name="quantity" class="form-control input-number" value="1">
                                        </div>
                                    </div>
                                </div>
                              
                                <div class="col-xs-3">
                                    <h2 class="td-color"><a href="#" class="icon"><i class="ti-close"></i></a></h2></div>
                            </div>
                        </td>
                        <td>
                            <h2>$63.00</h2></td>
                        <td>
                            <div class="qty-box">
                                <div class="input-group">
                                    <input type="number" name="quantity" class="form-control input-number" value="1">
                                </div>
                            </div>
                        </td>
                        <td><a href="#" class="icon"><i class="ti-close"></i></a></td>
                        
                    </tr>
                    </tbody>
                    <tbody>
                    <tr>
                        <td>
                            <a href="#"><img src="../assets/images/layout-3/product/3.jpg" alt="cart" class=" "></a>
                        </td>
                        <td><a href="#">cotton shirt</a>
                            <div class="mobile-cart-content row">
                                <div class="col-xs-3">
                                    <div class="qty-box">
                                        <div class="input-group">
                                            <input type="number" name="quantity" class="form-control input-number" value="1">
                                        </div>
                                    </div>
                                </div>
                               
                                <div class="col-xs-3">
                                    <h2 class="td-color"><a href="#" class="icon"><i class="ti-close"></i></a></h2></div>
                            </div>
                        </td>
                        <td>
                            <h2>$63.00</h2></td>
                        <td>
                            <div class="qty-box">
                                <div class="input-group">
                                    <input type="number" name="quantity" class="form-control input-number" value="1">
                                </div>
                            </div>
                        </td>
                        <td><a href="#" class="icon"><i class="ti-close"></i></a></td>
                       </tr>
                    </tbody>
                </table>
				
				<div class="form-group col-md-6 col-sm-6 col-xs-12">
                <div class="text-right"><a href="<?php echo base_url();?>index.php/welcome/ordernow" class="btn-normal btn">Continue</a></div>
				</div>
            </div>
                                    </div>
                            </div>
                        </div>
                         <div class="col-lg-8 col-sm-12 col-xs-12">
                            <div class="checkout-title">
							</br>
							</br>
                                <h3>4.&nbsp&nbspPayment Methods </h3>
								</div>
								  
                            <div class="theme-form">
                                <div class="row check-out ">

                                   <div class="upper-box">
                                        <div class="payment-options">
                                            <ul>
                                                <li>
                                                    <div class="radio-option">
                                                        <input type="radio" name="payment-group" id="payment-1" checked="checked">
                                                        <label for="payment-1">Check Payments</label>
                                                    </div>
                                                </li>
												</br>
                                                <li>
                                                    <div class="radio-option">
                                                        <input type="radio" name="payment-group" id="payment-2">
                                                        <label for="payment-2">Cash On Delivery</label>
                                                    </div>
                                                </li>
												</br>
                                                <li>
                                                    <div class="radio-option paypal">
                                                        <input type="radio" name="payment-group" id="payment-3">
                                                        <label for="payment-3">Online pay<span class="image"><img src="assets/images/paypal.html" alt=""></span></label>
                                                    </div>
                                                </li>
												</br>
												 <li>
                                                    <div class="radio-option paypal">
                                                       <div class="text-right"><a href="#" class="btn-normal btn">Submit</a></div></div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
									</br>
                                   
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