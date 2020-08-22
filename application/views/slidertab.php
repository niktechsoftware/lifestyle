            <style>
  /* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons that are used to open the tab content */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}
</style>

<section class="section-pt-space" >
  <div class="tab-product-main">
    <div class="tab-prodcut-contain">
      <ul class="tabs tab-title">
           <?php
           $i=1;
           $this->db->where("client_code",$client_code);
         $cat=$this->db->get("category");
          foreach($cat->result() as $row):?>
            
       
         <li class=""><a href="#">
         <button class="tablinks" onclick="openCity(event, '<?php echo $row->id;?>')"><?php echo $row->name;?></button>   
         </a></li>
        <?php $i++; ?>
        <?php endforeach;?>
        <!--<li class=""><a href="tab-6">JOGGERS</a></li>-->
      </ul>
    </div>
  </div>
</section>
                     
<?php foreach($cat->result() as $row):?>
<div id="<?php echo $row->id;?>" class="tabcontent">
  <?php $this->db->where("cat_id",$row->id);
  $subcate=$this->db->get("sub_category");
  if($subcate->num_rows()>0){
    foreach($subcate->result() as $sub):?>
       <a href="<?php echo base_url();?>index.php/welcome/saleproduct/<?php echo $sub->id;?>" >
                               <img src="<?php echo base_url()?>admin/assets/images/client_gallery/2/<?php echo $sub->image; ?>" class="img-fluid" alt="product" style="height:300px;width:300px;">
  </a> <?php endforeach;
  }
  ?>
</div>
<?php endforeach;?>

<script>
  function openCity(evt, cityName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
