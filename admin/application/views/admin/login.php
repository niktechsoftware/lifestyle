<!DOCTYPE html>
<html>
    
<head>
        
        <!-- Title -->
        <title><?php echo $title;?></title>
        <link rel="shortcut icon" href="https://www.niktechsoftware.com" />
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta charset="UTF-8">
       <meta name="description" content="Best ERP Best Education Software,NIktech Software solution" />
        <meta name="keywords" content="Best ERP Niktech Software Solutions,niktech software Solution, Best software Company NIktechsoftware Solutions" />
        <meta name="author" content="Best ERP Niktech Software Solutions,niktech software Solution, Best software Company NIktechsoftware Solutions" />
        
        
        <!-- Styles -->
        <link href='https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
        <link href="<?php echo base_url();?>assets/admin/assets/plugins/pace-master/themes/blue/pace-theme-flash.css" rel="stylesheet"/>
        <link href="<?php echo base_url();?>assets/admin/assets/plugins/uniform/css/uniform.default.min.css" rel="stylesheet"/>
        <link href="<?php echo base_url();?>assets/admin/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url();?>assets/admin/assets/plugins/fontawesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url();?>assets/admin/assets/plugins/line-icons/simple-line-icons.css" rel="stylesheet" type="text/css"/>	
        <link href="<?php echo base_url();?>assets/admin/assets/plugins/waves/waves.min.css" rel="stylesheet" type="text/css"/>	
        <link href="<?php echo base_url();?>assets/admin/assets/plugins/switchery/switchery.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url();?>assets/admin/assets/plugins/3d-bold-navigation/css/style.css" rel="stylesheet" type="text/css"/>	
        
        <!-- Theme Styles -->
        <link href="<?php echo base_url();?>assets/admin/assets/css/modern.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url();?>assets/admin/assets/css/custom.css" rel="stylesheet" type="text/css"/>
        
        <script src="<?php echo base_url();?>assets/admin/assets/plugins/3d-bold-navigation/js/modernizr.js"></script>
        
    </head>
    <body class="page-login">
        <main class="page-content">
            <div class="page-inner">
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-3 center">
                            <div class="login-box">
                                <a href="<?php echo base_url()?>apanel/index" class="logo-name text-lg text-center"><?php echo $title;?></a>
                                <p class="text-center m-t-md">Please login into your account.</p>
                                <form class="m-t-md" action="<?php echo base_url()?>login/login_check" method="post">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="uname" placeholder="User Name" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                                    </div>
                                    <button type="submit" class="btn btn-success btn-block">Login</button>
                                    <a href="<?php echo base_url();?>apanel/forgotPass" class="display-block text-center m-t-md text-sm">Forgot Password?</a>
                                </form>
                                <p class="text-center m-t-xs text-sm">2019 &copy;<a href="http://niktechsoftware.com/">Niktech Software Solutions</a></p>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
            </div><!-- Page Inner -->
        </main><!-- Page Content -->
	

        <!-- Javascripts -->
        <script src="<?php echo base_url();?>assets/admin/assets/plugins/jquery/jquery-2.1.3.min.js"></script>
        <script src="<?php echo base_url();?>assets/admin/assets/plugins/jquery-ui/jquery-ui.min.js"></script>
        <script src="<?php echo base_url();?>assets/admin/assets/plugins/pace-master/pace.min.js"></script>
        <script src="<?php echo base_url();?>assets/admin/assets/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="<?php echo base_url();?>assets/admin/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>assets/admin/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="<?php echo base_url();?>assets/admin/assets/plugins/switchery/switchery.min.js"></script>
        <script src="<?php echo base_url();?>assets/admin/assets/plugins/uniform/jquery.uniform.min.js"></script>
        <script src="<?php echo base_url();?>assets/admin/assets/plugins/classie/classie.js"></script>
        <script src="<?php echo base_url();?>assets/admin/assets/plugins/waves/waves.min.js"></script>
        <script src="<?php echo base_url();?>assets/admin/assets/js/modern.min.js"></script>
        
    </body>
</html>