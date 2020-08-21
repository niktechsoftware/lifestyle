<?php $this->load->view('headercss');?>
<?php $this->load->view('header');?>
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
          <div>
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
                  <div class="hotdeal-right-slick border-0 img-zoom-container">
                      <?php $i=1;
                     ?>
                       <?php foreach($uriv->result() as $row):?>
                     <div><img id="myimage" src="<?php echo base_url()?>admin/assets/images/client_gallery/2/product/<?php echo $row->file1; ?>" alt="hot-deal" class="img-fluid " style="height:300px;"></div> 
                     <div><img id="myimage" src="<?php echo base_url()?>admin/assets/images/client_gallery/2/product/<?php echo $row->file2; ?>" alt="hot-deal" class="img-fluid " style="height:300px;"></div> 
                       <div><img id="myimage" src="<?php echo base_url()?>admin/assets/images/client_gallery/2/product/<?php echo $row->file3; ?>" alt="hot-deal" class="img-fluid "style="height:300px;"></div> 
                     <?php $i++; ?>
            <?php endforeach;?>
                 </div>
                </div>
                <div class="col-lg-6 col-md-6 img-zoom-result " id="myresult">
                
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
imageZoom("myimage", "myresult");
</script>

<?php $this->load->view('footer');?>
<?php $this->load->view('footerJs');?>
