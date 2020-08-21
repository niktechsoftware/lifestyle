<?php $this->load->view('headercss');?>
<?php $this->load->view('header');?>
<!--header end-->

<!-- breadcrumb start -->
<div class="breadcrumb-main ">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="breadcrumb-contain">
                    <div>
                        <h2>About Us</h2>
                        <ul>
                            <li><a href="<?php echo base_url();?>index.php/welcome">Home</a></li>
                            <li><i class="fa fa-angle-double-right"></i></li>
                            <li><a href="<?php echo base_url();?>index.php/welcome/about">About Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb End -->

<!--section start-->
<section class="blog-detail-page section-big-py-space ratio2_3">
    <div class="container">
        <div class="row section-big-pb-space">
            <div class="col-sm-12 blog-detail">
               <div class="creative-card">
                   <img src="<?php echo base_url();?>assets/images/layout-2/product/main.jpg" class="img-fluid w-100 " alt="blog">
                   <h3>Also the leap into electronic typesetting, remaining essentially unchanged.</h3>
                   <ul class="post-social">
                       <li>25 July 2020</li>
                       <li>Posted By : Admin</li>
                      </ul>
                   <p style="font-size:150%;  font-family: Times New Roman ;">Spread the Magic with Classic”
Born in early 2020 RAJASTHAN, INDIA. Our aim to provide quality fashion to the Indian women. "Ethnic wear is the part of Indian culture that truly followed by the people. Indian ethnic wear is that part of the Indian culture. Indians are wearing ethnic outfits like ghagra-choli, salwar-suit, sarees in wedding and some special occasion. This ethnic wear followed by all age of people. Our mission is to provide complete wardrobe solution to all our modern females. Our focus is to provide quality trendy outfits that are perfect in design, fit and finishing.</p>
                   <p style="font-size:150%;  font-family: Times New Roman ;">Cras quis neque urna. Pellentesque mollis, dui nec elementum elementum, ipsum quam suscipit ligula, sit amet lobortis dolor sem sed neque. Vivamus consequat est non sodales efficitur. Aliquam sodales eleifend sodales. Aliquam auctor ipsum quis nisl facilisis, at convallis mauris iaculis. Duis eleifend, magna ac convallis blandit, dui dui auctor leo, sed tincidunt nisi mauris ut nulla. Praesent porttitor dui ac turpis commodo porttitor. Integer ligula nisi, bibendum non sem at, porta condimentum dui.</p>
                   <p style="font-size:150%;  font-family: Times New Roman ;">Proin id eleifend diam, euismod dictum nibh. Ut ullamcorper in purus at tempor. Nullam mattis risus nec velit semper lobortis. Donec accumsan ligula fermentum, ultricies massa eget, cursus leo. Suspendisse placerat elit et lacus aliquam, ut elementum leo aliquet. Integer ornare, ipsum eu lacinia viverra, lectus ipsum scelerisque nisl, nec iaculis leo elit id arcu. Aliquam id ante elit. Donec commodo purus eget lacus pharetra, et egestas metus blandit. Quisque pellentesque porta urna.</p>
               </div>
            </div>
        </div>
      
        <div class="row blog-contact">
            <div class="col-sm-12  ">
                <div class="creative-card">
                    <h2>Leave Your Comment</h2>
                    <form class="theme-form">
                        <div class="form-row">
                            <div class="col-md-12">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter Your name" required="">
                            </div>
                            <div class="col-md-12">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" placeholder="Email" required="">
                            </div>
                            <div class="col-md-12">
                                <label for="exampleFormControlTextarea1">Comment</label>
                                <textarea class="form-control" placeholder="Write Your Comment" id="exampleFormControlTextarea1" rows="6"></textarea>
                            </div>
                            <div class="col-md-12">
                                <button class="btn btn-normal" type="submit">Post Comment</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Section ends-->

<!--footer start-->
<?php $this->load->view('footer');?>