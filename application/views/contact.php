
<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('headercss');?>
<?php $this->load->view('header');?>
<?php $this->load->view('conheader');?>
<body>
<div class="container-contact100">
<div class="wrap-contact100">
<form class="contact100-form validate-form">
<span class="contact100-form-title">
Send Us A Message
</span>
<div class="wrap-input100 validate-input" data-validate="Please enter your name">
<input class="input100" type="text" name="name" placeholder="Full Name">
<span class="focus-input100"></span>
</div>
<div class="wrap-input100 validate-input" data-validate="Please enter your email: e@a.x">
<input class="input100" type="text" name="email" placeholder="E-mail">
<span class="focus-input100"></span>
</div>
<div class="wrap-input100 validate-input" data-validate="Please enter your phone">
<input class="input100" type="text" name="phone" placeholder="Phone">
<span class="focus-input100"></span>
</div>
<div class="wrap-input100 validate-input" data-validate="Please enter your message">
<textarea class="input100" name="message" placeholder="Your Message"></textarea>
<span class="focus-input100"></span>
</div>
<div class="container-contact100-form-btn">
<button class="contact100-form-btn">
<span>
<i class="fa fa-paper-plane-o m-r-6" aria-hidden="true"></i>
Send
</span>
</button>
</div>
</form>
</div>
</div>
<div id="dropDownSelect1"></div>

<script src="<?php echo base_url();?>assets/vendor/jquery/jquery-3.2.1.min.js" type="00ca61ab28cd2c7018c583ff-text/javascript"></script>

<script src="<?php echo base_url();?>assets/vendor/animsition/js/animsition.min.js" type="00ca61ab28cd2c7018c583ff-text/javascript"></script>

<script src="<?php echo base_url();?>assets/vendor/bootstrap/js/popper.js" type="00ca61ab28cd2c7018c583ff-text/javascript"></script>
<script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.min.js" type="00ca61ab28cd2c7018c583ff-text/javascript"></script>

<script src="<?php echo base_url();?>assets/vendor/select2/select2.min.js" type="00ca61ab28cd2c7018c583ff-text/javascript"></script>

<script src="<?php echo base_url();?>assets/vendor/daterangepicker/moment.min.js" type="00ca61ab28cd2c7018c583ff-text/javascript"></script>
<script src="<?php echo base_url();?>assets/vendor/daterangepicker/daterangepicker.js" type="00ca61ab28cd2c7018c583ff-text/javascript"></script>

<script src="<?php echo base_url();?>assets/vendor/countdowntime/countdowntime.js" type="00ca61ab28cd2c7018c583ff-text/javascript"></script>

<script src="<?php echo base_url();?>assets/js/main.js" type="00ca61ab28cd2c7018c583ff-text/javascript"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="00ca61ab28cd2c7018c583ff-text/javascript"></script>
<script type="00ca61ab28cd2c7018c583ff-text/javascript">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="00ca61ab28cd2c7018c583ff-|49" defer=""></script></body>
</html>
<?php $this->load->view('footer');?>