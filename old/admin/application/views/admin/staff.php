<div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                            	<div class="panel-body">
                            		<div class="row">
                            			<div class="col-md-12">
                            				<form class="form-horizontal" action="<?php echo base_url()?>apanelForms/saveStaff" method="post" enctype="multipart/form-data">
		                                        <?php $raj=$this->uri->segment(3);
		                                        if($raj==23)
		                                        {
		                                        echo "Successfully Uploaded Image";
		                                        	
		                                        }?>
		                                        
		                              <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Employee Name</label>
                                            <div class="col-sm-4">
                                                <input class="form-control" type="text" name="name" placeholder="Candidate Name" required="required">
                                            </div>
                                          <label for="inputEmail3" class="col-sm-2 control-label">Contact Number</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="mobile" class="form-control" placeholder="Contact Number" required="required">
                                            </div>
                                        </div>
		                                  <div class="form-group">
                                              <label for="inputEmail3" class="col-sm-2 control-label">Gender</label>
                                           
                                            <div class="col-sm-4">
                                                <select  class="form-control" name="gender" required="required">
			                                    	<option value="">-Select Gender-</option>
			                                    	<option value="Male">Male</option>
			                                    	<option value="Female">Female</option>
			                                    </select>
			                                  </div>  
                                           <label for="inputEmail3" class="col-sm-2 control-label">job Category</label>
                                            <div class="col-sm-4">
                                                <select name="job_category" class="form-control" required="required">
													<option value="">-Select job Title-</option>
														<option value="principal">&nbsp;&nbsp;&nbsp;&nbsp;Principal</option>
													<option value="teacher">&nbsp;&nbsp;&nbsp;&nbsp;Teacher</option>
													<option value="accountant">&nbsp;&nbsp;&nbsp;&nbsp;Accountant</option>
												
												</select>
                                            </div>
                                        </div>      
                                            <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Joining Date</label>
                                            <div class="col-sm-4">
                                                <input type="date"  class="form-control " name ="joining_date" placeholder="joining date" required="required">
                                            </div>
                                            <label for="inputEmail3" class="col-sm-2 control-label">Post Describtion</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="post_desc" class="form-control" placeholder="Post Describtion" required="required">
                                            </div>
                                        </div>    
                                            <div class="form-group">
                                                 <label for="inputEmail3" class="col-sm-2 control-label">Qualification</label>
                                            <div class="col-sm-4">
                                                <input type="text"  class="form-control " name ="qualification" placeholder="Qualification" required="required">
                                            </div>
                                            <label for="inputEmail3" class="col-sm-2 control-label">Browse Employee image (120 KB Max.)</label>
                                            <div class="col-sm-4">
                                                <input type="file" name="image" class="form-control" placeholder="Browse Candidate's image" >
                                            </div>
                                            
                                        </div>
		                                       
		                              <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10">
                                            	<input type="hidden" name="submitType" value="admin">
                                                <button type="submit" class="btn btn-success">Save Employee Information</button>
                                            </div>
                                        </div>
		                                    </form>
                            			</div>
                            		</div>
                            	<br/><hr/><br/>
                                   <div class="table-responsive">
                                    <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>Name</th>
                                                <th>mobile</th>
                                                <th>Post Desc</th>
                                                 <th>photo</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                             <?php	$i=1; ?>
                                        	<?php $this->db->where("client_code",$this->session->userdata("client_code"));?>
                                        	<?php $res = $this->db->get("employee_info")->result();?>
                                        	 
                                        	<?php foreach($res as $row):?>
                                      
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $row->name; ?></td>
                                                
                                                
                                              

                                                  <td><?php echo $row->mobile; ?></td>
                                                     <td><?php echo $row->post_desc; ?></td>
                                                 
                                              <td><img width="50" height="50" src="<?php echo base_url();?>assets/images/<?php echo $row->photo; ?>"></td>
                                               
                                                <td>
                                                	<a href="<?php echo base_url();?>apanelForms/deleteStaff/<?php echo $row->id;?>">
                                                		Delete
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