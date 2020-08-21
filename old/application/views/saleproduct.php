<?php $this->load->view('headercss');?>
<?php $this->load->view('header');?>

<section class="section-big-py-space ratio_asos bg-light">
    <div class="custom-container">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <div class="row"> <?php	$i=1; ?>
                               <?php foreach($uriv->result() as $row):?>
          <div class="col-lg-4 col-xs-12">
            <div class="quick-view-img"><img  <img src="<?php echo base_url()?>admin/assets/images/client_gallery/2/product/<?php echo $row->file1; ?>"  alt="" class="img-fluid "  height="400"></div>
          </div>
          <div class="col-lg-6 rtl-text">
            <div class="product-right">
              <h2>Women <?php echo $row->name;?></h2>
              <h3><?php echo $row->mrp_price1;?></h3>
              <ul class="color-variant">
                <li class="bg-light0"></li>
                <li class="bg-light1"></li>
                <li class="bg-light2"></li>
              </ul>
              <div class="border-product">
                <h6 class="product-title"><?php echo $row->company;?></h6>
                <p></p>
              </div>
              <div class="product-description border-product">
                <div class="size-box">
                  <ul>
                    <li class="active"><a href="#"><?php echo $row->size;?></a></li>
                    <li><a href="#">m</a></li>
                    <li><a href="#">l</a></li>
                    <li><a href="#">xl</a></li>
                  </ul>
                </div>
                <h6 class="product-title"><?php echo $row->quantity;?></h6>
                <div class="qty-box">
                  <div class="input-group"><span class="input-group-prepend"><button type="button" class="btn quantity-left-minus" data-type="minus" data-field=""><i class="ti-angle-left"></i></button> </span>
                    <input type="text" name="quantity" class="form-control input-number" value="1"> <span class="input-group-prepend"><button type="button" class="btn quantity-right-plus" data-type="plus" data-field=""><i class="ti-angle-right"></i></button></span></div>
                </div>
              </div>
              <div class="product-buttons"><a href="#" class="btn btn-normal">add to cart</a> <a href="<?php echo base_url();?>index.php/welcome/orderpro/<?php echo $row->id;?>" class="btn btn-normal">Order Now</a></div>
            </div>
          </div>
        
        <?php $i++; ?>
            
            </div>                                  <?php endforeach;?>
      </div>
    </div>
 </section>




<!--footer start-->
<?php $this->load->view('footer');?>