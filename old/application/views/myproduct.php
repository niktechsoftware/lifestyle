<?php $this->load->view('headercss');?>
<?php $this->load->view('header');?>
<div class="breadcrumb-main">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="breadcrumb-contain">
                    <div>
                      
                        <ul>
                            <li><a href="<?php echo base_url();?>index.php/welcome">Home &nbsp;/ </a></li>
                            <li><a href="<?php echo base_url();?>index.php/welcome/myproduct">My Product &nbsp;/ </a></li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb End -->
<!--no slider start-->
<section class="section-big-py-space ratio_asos bg-light">
    <div class="custom-container">
        <div class="row">
            <div class="col">
                <div class="no-slider row product">
                      <?php	$i=1; ?>
                                        	
                                <?php foreach($product->result() as $row):?>
                        <div class="product-box">
                   <div class="product-box">
                        <div class="product-imgbox" style="width:300;">
                            <div class="product-front">
                               <img src="<?php echo base_url()?>admin/assets/images/client_gallery/2/product/<?php echo $row->file1; ?>" class="img-fluid" alt="product" style="height:250;width:300;">
                            </div>
                            <div class="product-back">
                               <img src="<?php echo base_url()?>admin/assets/images/client_gallery/2/product/<?php echo $row->file2; ?>" class="img-fluid" alt="product" style="height:250;width:300;">
                            </div>
                         <div class="product-icon icon-inline">
                     <a href="<?php echo base_url();?>index.php/welcome/addcart/<?php echo $row->id;?>">
                          <i class="ti-bag" >Add To cart</i>
                       </a>
                        <a href="javascript:void(0)" title="Add to Wishlist">
                          <i class="ti-heart" aria-hidden="true">Like</i>
                        </a>
                         <a href="<?php echo base_url();?>index.php/welcome/saleproduct/<?php echo $row->id;?>" >
                          <i class="ti-search" aria-hidden="true">View</i>
                        </a>
                       
                      </div>
                        </div>
                        <div class="product-detail">
                            <div class="detail-title">
                                <div class="detail-left">
                                    <div class="rating-star">
                                        
                                    </div>
                                    <a href="#">
                                        <h6 class="price-title">
                                        
                                        </h6>
                                    </a>
                                </div>
                                <div class="detail-right">
                                    <div class="check-price">
                                     <?php echo $row->mrp_price1;?>
                                    </div>
                                    <div class="price">
                                        <div class="price">
                                      <?php echo $row->selling_price1;?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
          
            <?php $i++; ?>
            
            </div>                                  <?php endforeach;?>
        </div>
    </div>
    </div>
</section>



<!--footer start-->
<?php $this->load->view('footer');?>