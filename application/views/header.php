<header>
  <div class="mobile-fix-option"></div>
  <div class="top-header">
    <div class="custom-container">
      <div class="row">
        <div class="col-xl-5 col-md-7 col-sm-6">
          <div class="top-header-left">
           <div class="shpping-order">
              <h6>free shipping on order over 599/- </h6>
            </div>
            <div class="app-link">
              <h6>
                Download App
              </h6>
              <ul>
                <li><a><i class="fa fa-apple" ></i></a></li>
                <li><a><i class="fa fa-android" ></i></a></li>
                <li><a><i class="fa fa-windows" ></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-xl-7 col-md-5 col-sm-6">
          <div class="top-header-right">
           <div class="app-link">
              <h6>
              New Customer? Sign Up
              </h6>
            </div>
            <div class="language-block">
             <div class="language-dropdown">
                  <span  class="language-dropdown-click">
                   Login <i class="" aria-hidden="true"></i>
                  </span>
                <ul class="language-dropdown-open">
                  <li><a href="#">Orders</a></li>
                  <li><a href="#">Wish List</a></li>
                  <li><a href="#">Records</a></li>
                  <li><a href="#">Logout</a></li>
                </ul>
              </div>
             
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="layout-header2">
    <div class="container">
      <div class="col-md-12">
        <div class="main-menu-block">
          <div class="sm-nav-block">
            <span class="sm-nav-btn"><i class="fa fa-bars"></i></span>
            <!--<ul class="nav-slide">
              <li>
                <div class="nav-sm-back">
                  back <i class="fa fa-angle-right pl-2"></i>
                </div>
              </li>
              <li><a href="#">western ware</a></li>
              <li><a href="#">TV, Appliances</a></li>
              <li><a href="#">Pets Products</a></li>
              <li><a href="#">Car, Motorbike</a></li>
              <li><a href="#">Industrial Products</a></li>
              <li><a href="#">Beauty, Health Products</a></li>
              <li><a href="#">Grocery Products </a></li>
              <li><a href="#">Sports</a></li>
              <li><a href="#">Bags, Luggage</a></li>
              <li><a href="#">Movies, Music </a></li>
              <li><a href="#">Video Games</a></li>
              <li><a href="#">Toys, Baby Products</a></li>
              <li class="mor-slide-open">
                <ul>
                  <li><a href="#">Bags, Luggage</a></li>
                  <li><a href="#">Movies, Music </a></li>
                  <li><a href="#">Video Games</a></li>
                  <li><a href="#">Toys, Baby Products</a></li>
                </ul>
              </li>
              <li>
                <a class="mor-slide-click">
                  mor category
                  <i class="fa fa-angle-down pro-down" ></i>
                  <i class="fa fa-angle-up pro-up" ></i>
                </a>
              </li>
            </ul>-->
          </div>
          <div class="logo-block"><?php
          $popupimage =  $this->db->get("popup_image")->row();
	   $data['logo']=$popupimage->image; ?>
	   
            <a href="index.html"><img src="<?php echo base_url()?>admin/assets/images/client_gallery/2/<?php echo $popupimage->image; ?>"  style="height:100px; width:120px;" class="img-fluid  " alt="logo"></a>
          </div>
          <div class="input-block">
            <div class="input-box">
              <form class="big-deal-form" action="<?php echo base_url();?>index.php/welcome/catagory" method="post">
                <div class="input-group ">
                  <div class="input-group-prepend">
                    <span class="search"><i class="fa fa-search"></i></span>
                  </div>
                  <input type="text" class="form-control" placeholder="Search a Product" >
                  <div class="input-group-prepend">
                   
         <?php  $this->db->where("client_code",2);
         $cat=$this->db->get("category");
	    ?>
                    <select required="required" name ="mainCategory" >
                 <option value="">Select Category</option>
		                                                  <?php foreach($cat->result() as $cd):?>
		                                                    <option value = "<?php echo $cd->id;?>"?><?php echo $cd->name;?></option>
		                                                  <?php endforeach;?>    
               
                    </select>
                  </div>
                </div>
              </form>
            </div>
          </div>
          
          <div class="menu-nav">
              <span class="toggle-nav">
                <i class="fa fa-bars "></i>
              </span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="category-header-2">
    <div class="custom-container">
      <div class="row">
        <div class="col">
          <div class="navbar-menu">
            <div class="category-left">
              <div class="nav-block">
               <div class="nav-left" >
                  <nav class="navbar" data-toggle="collapse" data-target="#navbarToggleExternalContent">
                   <h5 class="mb-0  text-white title-font"><a href="<?php echo base_url();?>index.php/welcome"  style="color:white;">HOME</a></h5>
                  </nav>
                  <div class="collapse  nav-desk" id="navbarToggleExternalContent">
                   
                    </ul>
                  </div>
                </div>
              </div>
              <div class="menu-block">
                <nav id="main-nav">
                  <div class="toggle-nav"><i class="fa fa-bars sidebar-bar"></i></div>
                  <ul id="main-menu" class="sm pixelstrap sm-horizontal">
                    <li>
                      <div class="mobile-back text-right">Back<i class="fa fa-angle-right pl-2" aria-hidden="true"></i></div>
                    </li>
                    <!--HOME-->
                    <!-- <li>
                      <a href="<?php echo base_url();?>index.php/welcome" class="dark-menu-item">Home</a>
                      <ul>
                        <li><a target="_blank" href="index.html">layout 1</a></li>
                        <li><a target="_blank" href="layout-2.html">layout 2</a></li>
                        <li><a target="_blank" href="layout-3.html">layout 3</a></li>
                        <li><a target="_blank" href="layout-4.html">layout 4</a></li>
                        <li><a target="_blank" href="layout-5.html">layout 5</a></li>
                        <li><a target="_blank" href="layout-6.html">layout 6</a></li>
                      </ul> 
                    </li>-->
                    <!--HOME-END-->

                    <!--SHOP-->
                    <li>
                      <a href="<?php echo base_url();?>index.php/welcome/aboutus" class="dark-menu-item">About Us</a>
                     <!--   <ul>
                        <li><a href="category-page(left-sidebar).html">left sidebar</a></li>
                        <li><a href="category-page(right-sidebar).html">right sidebar</a></li>
                        <li><a href="category-page(no-sidebar).html">no sidebar</a></li>
                        <li><a href="category-page(sidebar-popup).html">sidebar popup</a></li>
                        <li><a href="category-page(metro).html">metro </a></li>
                        <li><a href="category-page(full-width).html">full width </a></li>
                        <li><a href="category-page(infinite-scroll).html">infinite scroll</a></li>
                        <li><a href=category-page(3-grid).html>3 grid</a></li>
                        <li><a href="category-page(6-grid).html">6 grid</a></li>
                        <li><a href="category-page(list-view).html">list view</a></li>
                      </ul>-->
                    </li>
                    <!--SHOP-END-->


                    <!--product-meu start-->
                    <li class="mega"><a href="<?php echo base_url();?>index.php/welcome/myproduct"class="dark-menu-item">Our product</a>
                   <!-- <ul>
                        <li><a target="_blank" href="#">Demo 1</a></li>
                        <li><a target="_blank" href="#">Demo 2</a></li>
                        <li><a target="_blank" href="#">Demo 3</a></li>
                        </ul>-->
                   
                    </li>
                    <!--product-meu end-->

                    <!--mega-meu start-->
                    <li class="mega" >
                      <a href="<?php echo base_url();?>index.php/welcome/contact" class="dark-menu-item">Contact Us</a>
                     </li>
                    <!--mega-meu end-->

                    <!--pages-meu start-->
                   
                    <!--product-end end-->

                    <!--blog-meu start-->
                    
                    <!--blog-meu end-->
                      <li class="mobile-user onhover-dropdown mega" onclick="openAccount()">
                      <a href="http://thelifestylesapp.com/admin/index.php/login/index/2" class="dark-menu-item">ADMIN LOGIN</a>
                     </li>
                
                </nav>
              </div>
             
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
