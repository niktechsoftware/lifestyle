<?php $this->load->view('headercss');?>
<?php $this->load->view('header');?>
<div class="breadcrumb-main ">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="breadcrumb-contain">
                    <div>
                        <h2>register</h2>
                        <ul>
                            <li><a href="#">home</a></li>
                            <li><i class="fa fa-angle-double-right"></i></li>
                            <li><a href="#">register</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb End -->

<!--section start-->
<section class="login-page section-big-py-space bg-light">
    <div class="custom-container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4">
                <div class="theme-card">
                    <h3 class="text-center">Create account</h3>
                    <form class="theme-form" action="<?php echo base_url();?>index.php/login/registration" method="post">
                        <div class="form-row">
                            <div class="col-md-12 form-group">
                                <label for="email">Name</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Name" required="">
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="review">Phone Number</label>
                                <input type="text" class="form-control" id="number" name="mobile" placeholder="Phone Number" required="">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 form-group">
                                <label for="email">email</label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="Email" required="">
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="review">Password</label>
                                <input type="password" class="form-control" id="review" name="password" placeholder="Enter your password" required="">
                            </div>
                            <div class="col-md-12 form-group"><button class="btn btn-normal">create Account</button></div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 ">
                                <p >Have you already account? <a href="<?php echo base_url();?>index.php/welcome/login" class="txt-default">click</a> here to &nbsp;<a href="<?php echo base_url();?>index.php/welcome/login" class="txt-default">Login</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $this->load->view('footer');?>