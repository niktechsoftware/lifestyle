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

      <div class="col-lg-9">
        <div class="slide-1 no-arrow" >
          <div>
            <div class="hot-deal-contain deal-abjust">
              <div class="row hot-deal-subcontain">
                <div class="col-lg-4 col-md-4 ">
                  <div class="hotdeal-right-slick border-0 img-zoom-container">
                      <?php $this->db->where("client_code",2);?>
                      <?php $i=1;
                      $cate=$this->db->get("category");?>
                       <?php foreach($cate->result() as $row):?>
                     
                    <div><img id="myimage" src="<?php echo base_url()?>admin/assets/images/client_gallery/2/<?php echo $row->image; ?>" alt="hot-deal" class="img-fluid  "></div> 
                   

                  <?php $i++; ?>
            <?php endforeach;?>
                
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 img-zoom-result" id="myresult">
                  <div class="hot-deal-center">
                    <div>
                      <div>
                        <h5>Indian ethnic wear is that part of the Indian culture.</h5>
                      </div>
                    
                      <div>
                        <p>
                         Dress To Impress Always In Ethnic Fashion. Versatile and graceful ethnic fashion is the kind of style where chic meets comfort.  </p>
                        <div class="price">
                        
                        </div>
                      </div>
                      <div class="timer">
                        <p id="demo">
                             <span>
                               25
                               <span>days</span>
                             </span>
                          <span>
                              46
                              <span>hrs</span>
                            </span>
                          <span>
                              12
                              <span>min</span>
                            </span>
                          <span>
                              03
                              <span>sec</span>
                            </span>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-2 ">
                  <div class="hotdeal-right-nav">
                      <?php foreach($cate->result() as $row):?>
                     <div><img id="myimage" src="<?php echo base_url()?>admin/assets/images/client_gallery/2/<?php echo $row->image; ?>" alt="hot-deal" class="img-fluid  "></div> 
                  <?php $i++; ?>
            <?php endforeach;?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div>
            <div class="hot-deal-contain deal-abjust">
              <div class="row hot-deal-subcontain">
                <div class="col-lg-4 col-md-4 img-zoom-container">
                  <div class="hotdeal-right-slick border-0">
                      <?php foreach($cate->result() as $row):?>
                    <div><img id="myimage" src="<?php echo base_url()?>admin/assets/images/client_gallery/2/<?php echo $row->image; ?>" alt="hot-deal" class="img-fluid  "></div> 
                  <?php $i++; ?>
            <?php endforeach;?>
                 </div>
                </div>
                <div class="col-lg-6 col-md-6 img-zoom-result"  id="myresult">
                  <div class="hot-deal-center">
                    <div>
                      <div>
                        <h5>Indian ethnic wear is that part of the Indian culture. </h5>
                      </div>
                     
                      <div>
                        <p>
                          Dress To Impress Always In Ethnic Fashion. Versatile and graceful ethnic fashion is the kind of style where chic meets comfort. 
                        </p>
                        <div class="price">
                        
                        </div>
                      </div>
                      <div class="timer">
                        <p id="demo1">
                           <span>
                             25
                             <span>days</span>
                           </span>
                          <span>
                            46
                            <span>hrs</span>
                          </span>
                          <span>
                            12
                            <span>min</span>
                          </span>
                          <span>
                            03
                            <span>sec</span>
                          </span>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-2 img-zoom-container ">
                  <div class="hotdeal-right-nav">
                  <?php foreach($cate->result() as $row):?>
                       <div class="img-zoom-container">
                    <div><img id="myimage" src="<?php echo base_url()?>admin/assets/images/client_gallery/2/<?php echo $row->file1; ?>" alt="hot-deal" class="img-fluid  "></div> 
                    <div id="myresult" class="img-zoom-result"></div>
  <?php $i++; ?>
            <?php endforeach;?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="slide-1-section no-arrow">
          <div>
            <div class="media-banner border-0">
              <div class="media-banner-box">
                <div class="media-heading">
                  <h5>New Products</h5>
                </div>
              </div>
              <div class="media-banner-box">
                <div class="media">
                  <img src="<?php echo  base_url();?>assets/images/layout-2/product/1 (1).jpg" class="img-fluid  " alt="banner">
                  <div class="media-body">
                    <div class="media-contant">
                      <div>
                        <div class="rating">
                         <h5>Dress</h5>
                        </div>
                       
                     
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="media-banner-box">
                <div class="media">
                  <img src="<?php echo  base_url();?>assets/images/layout-2/product/2 (1).jpg" class="img-fluid  " alt="banner">
                  <div class="media-body">
                    <div class="media-contant">
                      <div>
                        <div class="rating">
                           <h5>Dress</h5>
                        </div>
                       
                      
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="media-banner-box">
                <div class="media">
                  <img src="<?php echo  base_url();?>assets/images/layout-2/product/3 (1).jpg" class="img-fluid  " alt="banner">
                  <div class="media-body">
                    <div class="media-contant">
                      <div>
                        <div class="rating">
                          <h5>Dress</h5>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="media-banner-box">
                <div class="media-view">
                  <h5>View More</h5>
                </div>
              </div>
            </div>
          </div>
          <div>
            <div class="media-banner  border-0">
              <div class="media-banner-box">
                <div class="media-heading">
                  <h5>Hot deal</h5>
                </div>
              </div>
              <div class="media-banner-box">
                <div class="media">
                  <img src="<?php echo  base_url();?>assets/images/layout-2/product/4 (1).jpg" class="img-fluid  " alt="banner">
                  <div class="media-body">
                    <div class="media-contant">
                      <div>
                        <div class="rating">
                          <h5>Dress</h5>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="media-banner-box">
                <div class="media">
                  <img src="<?php echo  base_url();?>assets/images/layout-2/product/1 (1).jpg" class="img-fluid  " alt="banner">
                  <div class="media-body">
                    <div class="media-contant">
                      <div>
                        <div class="rating">
                           <h5>Dress</h5>                        </div>
                       
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="media-banner-box">
                <div class="media">
                  <img src="<?php echo  base_url();?>assets/images/layout-2/product/2 (1).jpg" class="img-fluid  " alt="banner">
                  <div class="media-body">
                    <div class="media-contant">
                      <div>
                        <div class="rating">
                          <h5>Dress</h5>
                        </div>
                       
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="media-banner-box">
                <div class="media-view">
                  <h5>View More</h5>
                </div>
              </div>
            </div>
          </div>
          <div >
            <div class="media-banner  border-0">
              <div class="media-banner-box">
                <div class="media-heading">
                  <h5>Best Sellers</h5>
                </div>
              </div>
              <div class="media-banner-box">
                <div class="media">
                  <img src="<?php echo  base_url();?>assets/images/layout-2/product/3 (1).jpg" class="img-fluid  " alt="banner">
                  <div class="media-body">
                    <div class="media-contant">
                      <div>
                        <div class="rating">
                          <h5>Dress</h5>
                        </div>
                       
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="media-banner-box">
                <div class="media">
                  <img src="<?php echo base_url();?>assets/images/layout-2/product/4 (1).jpg" class="img-fluid  " alt="banner">
                  <div class="media-body">
                    <div class="media-contant">
                      <div>
                        <div class="rating">
                         <h5>Dress</h5>
                        </div>
                       
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="media-banner-box">
                <div class="media">
                  
                  <img src="<?php echo base_url();?>assets/images/layout-2/product/1 (1).jpg" class="img-fluid  " alt="banner">
              
                  <div class="media-body">
                    <div class="media-contant">
                      <div>
                        <div class="rating">
                          <h5>Dress</h5>
                        </div>
                       </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="media-banner-box">
                <div class="media-view">
                  <h5>View More</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script>
// Initiate zoom effect:
imageZoom("myimage", "myresult");
</script>
