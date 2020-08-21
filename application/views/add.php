<?php $this->load->view('headercss');?>
<?php $this->load->view('header');?>
<style>
* {
  box-sizing: border-box;
}

.zoom {
  padding: 80px;
 
  transition: transform .5s;
  width: 700px;
  height: 600px;
  margin: 0 auto;
}

.zoom:hover {
  -ms-transform: scale(1.5); /* IE 9 */
  -webkit-transform: scale(1.5); /* Safari 3-8 */
  transform: scale(1.5); 
}
</style>
<section class="section-big-py-space ratio_asos bg-light">
    <div class="custom-container">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <div class="row"> <?php	$i=1;?>
     
                               <?php foreach($uriv->result() as $row):?>
          <div class="col-lg-4 col-xs-12">
            <div class="quick-view-img"><img  <img src="<?php echo base_url()?>admin/assets/images/client_gallery/2/product/<?php echo $row->file1; ?>"  alt="" class="img-fluid zoom"  height="400"></div>
          </div>
          <div class="col-lg-6 rtl-text">
            <div class="product-right">
              
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
                 <div class="col-lg-6 rtl-text">
                    <form action="<?php echo base_url();?>index.php/welcome/custinfo/<?php echo $row->id;?>" method="post">
                  <div class="border-product">
                     <input type="text" name="mno" placeholder="Enter Mobile No"/ style="width:300;"> 
                      </div>
                      <div class="border-product">
                             <input type="email" name="email" placeholder="Enter Email"/ style="width:300;" > 
                      </div>
                       <div class="border-product">
                             <input type="text" name="address" placeholder="Enter Address"/ style="width:300;"> 
                      </div>
                      <div class="col-sm-4">
                         <div class="product-buttons">  <input type="submit"></div>
                          </div>
                      </form>
                </div>
              </div>
            
            </div>
          </div>
        
        <?php $i++; ?>
            
            </div>                                  <?php endforeach;?>
      </div>
    </div>
 </section>




<!--footer start-->
<?php $this->load->view('footer');?>