<?php $this->load->view('headercss');?>
<?php $this->load->view('header');?>
<style>
.hide {
  display: none;
}
    
.myDIV:hover + .hide {
  display: block;
  color: red;
}
</style>
<section class="hot-deal b-g-white section-big-pb-space space-abjust">
  <div class="custom-container">
    <div class="row hot-2">
      <div class="col-12">
        <!--title start-->
        <div class="title3 b-g-white text-left">
          <h4>today's hot deal</h4>
        </div>
        <!--titel end-->
      </div>

      <div class="col-lg-12">
        <div class="slide-1 no-arrow" >
          <div >
            <div class="hot-deal-contain deal-abjust">
              <div class="row hot-deal-subcontain">
                    <div class="col-md-2 ">
                  <div class="hotdeal-right-nav">
                      <?php $i=1; foreach($uriv->result() as $row):?>
                     <div><img  src="<?php echo base_url()?>admin/assets/images/client_gallery/2/product/<?php echo $row->file1; ?>" alt="hot-deal" class="img-fluid  " ></div> 
                      <div><img  src="<?php echo base_url()?>admin/assets/images/client_gallery/2/product/<?php echo $row->file2; ?>" alt="hot-deal" class="img-fluid  "></div> 
                       <div><img  src="<?php echo base_url()?>admin/assets/images/client_gallery/2/product/<?php echo $row->file3; ?>" alt="hot-deal" class="img-fluid  "></div> 
                  <?php $i++; ?>
            <?php endforeach;?>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 ">
                  <div class="hotdeal-right-slick border-0 img-zoom-container myDIV">
                      <?php $i=1;
                     ?>
                       <?php foreach($uriv->result() as $row):?>
                     <div><img id="myimage" src="<?php echo base_url()?>admin/assets/images/client_gallery/2/product/<?php echo $row->file1; ?>" alt="hot-deal" class="img-fluid " style="height:600px;"></div> 
                     <div><img id="myimage1" src="<?php echo base_url()?>admin/assets/images/client_gallery/2/product/<?php echo $row->file2; ?>" alt="hot-deal" class="img-fluid " style="height:600px;"></div> 
                       <div><img id="myimage2" src="<?php echo base_url()?>admin/assets/images/client_gallery/2/product/<?php echo $row->file3; ?>" alt="hot-deal" class="img-fluid "style="height:600px;"></div> 
 <h6>company</h6>
                     <?php $i++; ?>
            <?php endforeach;?>
                 </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 img-zoom-result hide" id="myresult">
                
                </div>
                 <div class="col-lg-6 rtl-text" id="test">
            <div class="product-right">
                    <div class="price">   
                   <?php $i=1;
                     ?>
                       <?php foreach($uriv->result() as $row):?>
                    
              <h2>Women <?php echo $row->name;?></h2>
             <h3> <del><?php echo $row->mrp_price1;?><del></h3>
                <h3><?php echo $row->selling_price1;?></h3>
               <h3>
               <?php echo $row->selling_price1-$row->mrp_price1;?>%OFF</h3>
              <ul class="color-variant">
                <li class="bg-light0"></li>
                <li class="bg-light1"></li>
                <li class="bg-light2"></li>
              </ul>
              <div class="border-product">
                <h6 class="product-title"><?php echo $row->company;?></h6>
                <p></p>
              </div>
              <div class="product-description border-product" >
                <div class="size-box">
                  <ul>
                    <li class="active"><a href="#"><?php echo $row->size;?></a></li>
                    <li><a href="#">m</a></li>
                    <li><a href="#">l</a></li>
                    <li><a href="#">xl</a></li>
                  </ul>
                </div>
                <h6 class="product-title"><?php echo $row->quantity;?></h6>
               
             <div class="product-buttons"><a href="#" class="btn btn-normal">add to cart</a> <a href="<?php echo base_url();?>index.php/welcome/orderpro/<?php echo $row->id;?>" class="btn btn-normal">Order Now</a></div>
            </div>
          </div>
        
                         <?php $i++; ?>
            <?php endforeach;?>
         </div>
               
              </div>
            </div>
          </div>
          <div>
        </div>  
    </div>
  </div>
</section>
<script>
// Initiate zoom effect:
$('#myresult').hide();
 $('#myimage').mouseover(function() {
  //alert("raj");
  $('#myresult').show();
imageZoom("myimage", "myresult");
//$('#myresult').hide();
});
  $('#test').mouseover(function() {
 
  $('#myresult').hide();
//imageZoom("myimage", "myresult");
//$('#myresult').hide();
});

 


</script>

<?php $this->load->view('footer');?>
<?php $this->load->view('footerJs');?>
