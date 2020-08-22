<?php $this->load->view('headercss');?>
<?php $this->load->view('header');?>

<section class="login-page section-big-py-space bg-light">
    <div class="custom-container">
        <div class="row">
            <div class="col-xl-4 col-lg-6 col-md-8 offset-xl-4 offset-lg-3 offset-md-2">
                <div class="theme-card">
                    <h3 class="text-center">Login</h3>
                    <form class="theme-form" action="<?php echo base_url();?>index.php/login/matchdata" method="post">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Email" required="">
                        </div>
                        <div class="form-group">
                            <label for="review">Password</label>
                            <input type="password" class="form-control" id="review" name="password" placeholder="Enter your password" required="">
                        </div>
                        <button class="btn btn-normal">Login</button>
                        <a class="float-right txt-default mt-2" href="<?php echo base_url();?>index.php/welcome/forgetpassword" id="fgpwd">Forgot your password?</a>
                    </form>
                    <p class="mt-3">Sign up for a free account at our store. Registration is quick and easy. It allows you to be able to order from our shop. To start shopping click register.</p>
                    <a href="<?php echo base_url();?>index.php/welcome/registration" class="txt-default pt-3 d-block">Create an Account</a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $this->load->view('footer');?>