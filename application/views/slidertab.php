<section class="section-big-py-space ratio_asos bg-light">
    <div class="custom-container">
        <div class="row">
            <div class="col">
                <div class="no-slider row product">
                    
                      <?php	$i=1; 
                      $this->db->where("cat_id",$cat);
                                  $product=$this->db->get("sub_category"); ?>
                                <?php foreach($product->result() as $row):?>
                               
                        <div class="product-box">
                   <div class="product-box">
                        <div class="product-imgbox" style="width:400px;">
                            <div class="product-front">
                                <a href="<?php echo base_url();?>index.php/welcome/subcatagory/<?php echo $row->id;?>">
                               <img src="<?php echo base_url()?>admin/assets/images/client_gallery/2/<?php echo $row->image; ?>" class="img-fluid" alt="product" style="height:300px;width:300px;">
                           </a> </div>
                            <div class="product-back" style="height:400;">  <a href="<?php echo base_url();?>index.php/welcome/subcatagory/<?php echo $row->id;?>">
                               <img src="<?php echo base_url()?>admin/assets/images/client_gallery/2/<?php echo $row->image; ?>" class="img-fluid" alt="product" style="height:300px;width:300px;">
                         </a>   </div>
                         <div class="product-icon icon-inline">
                     <button onclick="#">
                          <i class="ti-bag" ></i>
                        </button>
                        <a href="javascript:void(0)" title="Add to Wishlist">
                          <i class="ti-heart" aria-hidden="true"></i>
                        </a>
                         <a href="#" data-toggle="modal" data-target="#quick-viewmp9" title="Quick View">
                          <i class="ti-search" aria-hidden="true"></i>
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
                                  
                                    </div>
                                    <div class="price">
                                        <div class="price">
                                     
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
