
 <div class="content">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"> Welcome, <?php echo $this->ps_auth->get_user_info()->user_name;?>!</h1>
            <?php flash_msg(); ?>

          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

</div>
<!-- /.content -->

<div class="container-fluid">
  <div class="card-body">
  <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-3">
        <!-- small box -->
        <?php 
           $shop_id = $this->ps_auth->get_user_info()->shop_id;
          $pending = $this->Transactionheader->get_transaction_status_count(array('trans_status_id'=> 1,'shop_id'=>$shop_id))->result();
          $result = $pending[0]->s_count;
          // print_r($pending);die;
          $data = array(
            'label' => get_msg( 'pending_count'),
            'total_count' => $result,
            'status_id' => '1',
            'icon' => "fa fa-shopping-bag",
            'color' => "bg-danger"
          );
          $this->load->view( $template_path .'/components/ps_badge_count', $data ); 
        ?>
      </div>
      <!-- ./col -->
      <div class="col-lg-3">
        <!-- small box -->
        <?php 
       
        $pending = $this->Transactionheader->get_transaction_status_count(array('trans_status_id'=> 2,'shop_id'=>$shop_id))->result();
        $result = $pending[0]->s_count;
        $data = array(
            'label' => get_msg( 'delivery_count'),
            'total_count' => $result,
            'status_id' => '2',
            'icon' => "fa fa-shopping-bag",
            'color' => "bg-info"
          );
          $this->load->view( $template_path .'/components/ps_badge_count', $data );  
        ?>
      </div>
      <!-- ./col -->
      <div class="col-lg-3">
        <!-- small box -->
        <?php 
       
        $pending = $this->Transactionheader->get_transaction_status_count(array('trans_status_id'=> 3,'shop_id'=>$shop_id))->result();
        $result = $pending[0]->s_count;
        $data = array(
            'label' => get_msg( 'completed_count'),
            'total_count' => $result,
            'status_id' => '3',
            'icon' => "fa fa-shopping-bag",
            'color' => "bg-success"
          );
         $this->load->view( $template_path .'/components/ps_badge_count', $data ); 
        ?>
      </div>
      <!-- ./col -->
      <div class="col-lg-3">
        <!-- small box -->
        <?php 
       
       $conds['shop_id']=$shop_id;
        $data = array(
            'label' => get_msg( 'order_count'),
            'total_count' => $this->Transactionheader->count_all_by($conds),
            'status_id' => '0',
            'icon' => "fa fa-shopping-bag",
            'color' => "bg-primary"
          );
         $this->load->view( $template_path .'/components/ps_badge_count', $data ); 
        ?>
      </div>
      <!-- ./col -->
      <div class="col-md-6">
        <div class="card">
          <?php 
            $data = array(
              'panel_title' => get_msg('purchased_prd_info'),
              'module_name' => 'purchasedproduct' ,
              'total_count' => $this->Purchasedproduct->count_all_by($conds),
              'data' => $this->Purchasedproduct->get_purchased_count($conds)->result()
            );

            $this->load->view( $template_path .'/components/d2_most_purchased_product_panel', $data ); 
          ?>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card">
          <?php 
            $data = array(
              'panel_title' => get_msg('total_revenue'),
              'module_name' => 'purchasedproduct' ,
              'total_count' => $this->Transactioncount->get_transaction_count($conds),
            );

            $this->load->view( $template_path .'/components/d2_total_revenue_panel', $data ); 
          ?>
        </div>
      </div>

      <div class="col-12">
        <div class="card">
          <?php
            $data = array(
              'panel_title' => get_msg('transaction_table'),
              'module_name' => 'transactionheaders' ,
              'total_count' => $this->Transactionheader->count_all_by($conds),
              'data' => $this->Transactionheader->get_rec_transaction($conds)->result()
            );

            $this->load->view( $template_path .'/components/d2_transaction_panel', $data ); 
          ?>
        </div>
      </div>

      <div class="col-md-6 col-xlg-3">
        <div class="card earning-widget">
          <?php 

            $data = array(
              'panel_title' => get_msg('performance_label'),
             
            );

            $this->load->view( $template_path .'/components/d2_performance_panel', $data ); 
          ?>
        </div>
      </div>

  
      <div class="col-md-6 col-xlg-3">
        <div class="card card-widget widget-user-2">
          <?php 
            $data = array(
              'panel_title' => get_msg('rec_prd_info'),
              'total_count' => $this->Product->count_all_by($conds),
              'data' => $this->Product->get_rec_product($conds)->result()
            );

            $this->load->view( $template_path .'/components/d2_rec_product_panel', $data ); 
          ?>
        </div>
      </div>

     

    </div>
  <!-- /.row -->
  </div>
  <div class="card-footer">
    <?php show_ads(); ?>
  </div>
</div>
<!-- contain fluid -->






 


