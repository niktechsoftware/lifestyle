
<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('headercss');?>
<body class="bg-light">

<!-- loader start -->

<!-- loader end -->


<!--header start-->
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
                 
                   <ul class="post-social">
                       <h3>"Ethnic wear is the part of Indian culture that truly followed by the people".</h3>
                   </ul>
                   <p style="font-size:130%;" > 
 Our aim to provide quality fashion to the Indian women. Indian ethnic wear is that part of the Indian culture. Indians are wearing ethnic outfits like ghagra-choli, salwar-suit, sarees in wedding and some special occasion. This ethnic wear followed by all age of people. Our mission is to provide complete wardrobe solution to all our modern females. Our focus is to provide quality trendy outfits that are perfect in design, fit and finishing.</p>
                   <p style="font-size:130%;  ">Dress To Impress Always In Ethnic Fashion. Versatile and graceful ethnic fashion is the kind of style where chic meets comfort. Traditional wear has always had a special place in the hearts of fashion conscious Indian women and girls. The best part about donning ethnic wear is its ability to evolve into something unique that will definitely make you stand out in the spotlight. Not only does Indian ethnic wear speak the language of eternal grace, but it also takes you back to our country’s cultural and sartorial roots. This very school of thought is responsible for changing the face of ethnic fashion in India, especially when it comes to women’s clothing.  We at <b><i>THE LIFE STYLE's </i></b>are dedicated to taking India back to its roots by providing the very best of ethnic wear fashion that blends the virtues of tradition and the values of trends. Our dream is to build the biggest, trendiest ethnic fashion destination that makes shopping as comfortable and easy as possible! <b><i>THE LIFE STYLEs</i></b> ideology is based on offering various kinds of ethnic wear that makes you fall in love with, at first sight and solves all your dilemmas when it comes to ethnic fashion.</p>
                   <p style="font-size:130%; ">The world of fashion, whether it is ethnic or contemporary, is always evolving and new trends are created, discovered almost on a daily basis. As an ethnic wear fashion destination, we consider it our prime duty to put forth the latest fashion in harmony with tradition that caters to the need of our customers. So, that our patrons and customers are engaged and given fulfilling shopping experience when it comes to designer ethnic wear for women. Here are some examples of what you can expect in <b><i>THE LIFE STYLEs.</i></b>
</p>
               </div>
            </div>
        </div>
        
        <div class=" row blog-contact">
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