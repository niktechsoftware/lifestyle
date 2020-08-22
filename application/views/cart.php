<?php $this->load->view('headercss');?>
<?php $this->load->view('header');?>

<div class="breadcrumb-main ">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="breadcrumb-contain">
                    <div>
                        <h2>cart</h2>
                        <ul>
                            <li><a href="#">home</a></li>
                            <li><i class="fa fa-angle-double-right"></i></li>
                            <li><a href="#">cart</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb End -->


<!--section start-->
<section class="cart-section section-big-py-space bg-light">
    <div class="custom-container">
        <div class="row">
            <div class="col-sm-12">
                <table class="table cart-table table-responsive-xs">
                <?php  $check=$this->session->userdata('uname');

$this->db->where("name",$check);
$cust_info=$this->db->get("costumer")->row();
$cust=$cust_info->id;
$this->db->where("cust_id",$cust);
$product=$this->db->get("like_product")->row();
$pid=$product->product_id;
$this->db->where("id",$pid);
$pinfo=$this->db->get("stock_products");
      ?>
                    <thead>
                    <tr class="table-head">
                        <th scope="col">image</th>
                        <th scope="col">product name</th>
                     
                        <th scope="col">quantity</th>
                       
                        <th scope="col">Price</th>
                    </tr>
                    </thead>
                    <?php $i=1;
                    foreach($pinfo->result() as $row):?> 
                    <tbody>
                    <tr>
                        <td>
                            <a href="#"><img src="<?php echo base_url()?>admin/assets/images/client_gallery/2/product/<?php echo $row->file1; ?>" alt="cart" class=" "></a>
                        </td>
                        <td><a href="#"><?php echo $row->name;?></a>
                            <div class="mobile-cart-content row">
                                <div class="col-xs-3">
                                    <div class="qty-box">
                                        <div class="input-group">
                                            <input type="number" name="quantity" class="form-control input-number" value="1">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-3">
                                    <h2 class="td-color"><?php echo $row->selling_price1;?></h2></div>
                                <div class="col-xs-3">
                                    <h2 class="td-color"><a href="#" class="icon"><i class="ti-close"></i></a></h2></div>
                            </div>
                        </td>
                      
                        <td>
                            <div class="qty-box">
                                <div class="input-group">
                                    <input type="number" name="quantity" class="form-control input-number" value="1">
                                </div>
                            </div>
                        </td>
                      
                        <td>
                            <h2 class="td-color"><?php echo $row->selling_price1;?></h2></td>
                    </tr>
                    </tbody>

                         <?php $i++; ?>
            <?php endforeach;?>
         
                </table>
                <table class="table cart-table table-responsive-md">
                    <tfoot>
                    <tr>
                       
                       
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        <div class="row cart-buttons">
            <div class="col-12"><a href="<?php echo base_url();?>index.php/welcome/myproduct" class="btn btn-normal">continue shopping</a> <a href="<?php echo base_url();?>index.php/welcome/billing" class="btn btn-normal ml-3">check out</a></div>
        </div>
    </div>
</section>
<?php $this->load->view('footer');?>