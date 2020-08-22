<?php $this->load->view('headercss');?>
<?php $this->load->view('header');?>
<div class="breadcrumb-main ">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="breadcrumb-contain">
                    <div>
                      
                        <ul>
                            <li><a href="#">home</a></li>
                            <li><i class="fa fa-angle-double-right"></i></li>
                            <li><a href="#">Cash On Delivery</a></li>
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
    <div class="container" style="margin-left:28%;">
        <div class="checkout-page contact-page">
            <div class="checkout-form">
                <form action="<?php echo base_url();?>index.php/login/billing" method="post">
                    <div class="row">
                        <div class="col-lg-6 col-sm-12 col-xs-12">
                             <?php $i=1;foreach($uriv->result() as $row):?>
                            <div class="checkout-title">
                                <h3>Cash On Delivery</h3>
								
								</div>
								  
                            <div class="theme-form">
                                <div class="row check-out ">

                                    <div class="form-group col-md-8 col-sm-8 col-xs-12">
                                        <h3>Price(1 Item)</h3>
                                        
                                    </div>
                                   
                                    <div class="form-group col-md-4 col-sm-4 col-xs-12">
                                      <h3><?php echo $row->selling_price1;?></h3>
                                       
                                    </div>
									 <div class="form-group col-md-8 col-sm-8 col-xs-12">
                                        <h3>Delivery Charges</h3>
                                   
                                    </div>
                                   
                                    <div class="form-group col-md-4 col-sm-4 col-xs-12">
                                      <h3>50.00</h3>
                                    </div>
                                   <div class="form-group col-md-8 col-sm-8 col-xs-12">
                                      <h3 style="color:red;">AMOUNT PAYABLE </h3>
                                    </div>
                                     <div class="form-group col-md-4 col-sm-4 col-xs-12">
                                      <h3><?php echo $row->selling_price1+50;?> </h3>
                                    </div>
                                   <!-- <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <input type="checkbox" name="shipping-option" id="account-option"> &ensp;
                                        <label for="account-option">Create An Account?</label>
                                    </div>-->
									<div class="text-right"><button class="btn-normal btn">Submit</button></div>
                                </div>
                            </div>

                         <?php $i++; ?>
            <?php endforeach;?>
                        </div>
						
                        
                       
        </div>
    </div>
</section>
<?php $this->load->view('footer');?>