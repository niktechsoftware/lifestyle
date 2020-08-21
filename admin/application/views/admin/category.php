                <div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                            	<div class="panel-body">
                            	    	<div class="row">
                            			<div class="col-md-12">
                            				<form class="form-horizontal" action="<?php echo base_url()?>apanelForms/createCategory" method="post" enctype="multipart/form-data">
		                                        <?php $raj=$this->uri->segment(3);
		                                        if($raj)
		                                        {
		                                        echo "Successfully Created";
		                                         }
		                                         
		                                         if($this->uri->segment(3)=="Edit"){
		                                         $cid =$this->uri->segment(4); 
		                                         $this->db->where("id",$cid);
		                                         $categoryDetails = $this->db->get("category")->row();?>
		                                           <div class="form-group">
		                                               <input type ="hidden" name="cateid" value = "<?php echo  $cid;?>"/>
		                                            <label for="input-Default" class="col-sm-3 control-label">Enter Category Name</label>
		                                            <div class="col-sm-9">
		                                                <input type="text" class="form-control" value ="<?php echo $categoryDetails->name;?>" id="input-Default" required name="categoryName">
		                                            </div>
		                                        </div>
		                                        <div class="form-group">
		                                            <label class="col-sm-3 control-label">Category Image</label>
		                                            <div class="col-sm-9">
		                                               <img src="<?php echo base_url();?>assets/images/client_gallery/<?php echo $this->session->userdata("client_code");?>/<?php echo $categoryDetails->image; ?>" alt="Girl in a jacket" width="200" height="300">
		                                            	<input type="file"  name="selectedStu" />
		                                            </div>
		                                        </div>
		                                         <div class="col-sm-offset-3 col-sm-9">
		                                            <button type="submit" class="btn btn-success">Update Category</button>
		                                         </div>
		                                        <?php }else{ ?>
		                                        <div class="form-group">
		                                             <input type ="hidden" name="cateid" value = "0"/>
		                                            <label for="input-Default" class="col-sm-3 control-label">Enter Category Name</label>
		                                            <div class="col-sm-9">
		                                                <input type="text" class="form-control" id="input-Default" required name="categoryName">
		                                            </div>
		                                        </div>
		                                        <div class="form-group">
		                                            <label class="col-sm-3 control-label">Category Image</label>
		                                            <div class="col-sm-9">
		                                            	<input type="file" required name="selectedStu" />
		                                            </div>
		                                        </div>
		                                         <div class="col-sm-offset-3 col-sm-9">
		                                            <button type="submit" class="btn btn-success">Create Category</button>
		                                         </div>
		                                         <?php }?>
		                                    </form>
                            			</div>
                            		</div>
                                   <div class="table-responsive">
                                    <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                        <thead>
                                            <tr>
                                             
                                                 <th>#</th>
                                                <th>Name</th>
                                                 <th>Image</th>
                                                
                                                  <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<?php $i = 1;?>
                                        	<?php $this->db->where("client_code",$this->session->userdata("client_code"));?>
                                        	<?php $res = $this->db->get("category")->result();?>
                                        	<?php foreach($res as $row):?>
                                            <tr>
                                              
                                             <td><?php echo $i; ?></td>
                                                <td><?php echo $row->name; ?></td>
                                               <td> <img src="<?php echo base_url();?>assets/images/client_gallery/<?php echo $this->session->userdata("client_code");?>/<?php echo $row->image; ?>" alt="Girl in a jacket" width="100" height="120"></td>
                                              
                                                <td>
                                                	<a href="<?php echo base_url();?>apanelForms/deleteCategory/<?php echo $row->id; ?>" class ="btn btn-danger">
                                                		Delete
                                                	</a>
                                                	<a href="<?php echo base_url();?>apanel/Category/Edit/<?php echo $row->id; ?>" class ="btn btn-warning">
                                                		Edit
                                                	</a>
                                                </td>
                                            </tr>
                                            <?php $i++; ?>
                                            <?php endforeach;?>
                                        </tbody>
                                       </table>  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->