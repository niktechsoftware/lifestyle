                <div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                            
                            	<div class="panel-body">
                            	<?php if($this->uri->segment(3) == "edit"):?>
                            	<?php $this->db->where("id",$this->uri->segment(4));?>
                            	<?php $in= $this->db->get("admission")->row();?>
                            		<div class="alert alert-success" role="alert">
                            Edit Student Registration Form 
                            		</div>
                     
                                    <form class="text-center" style="color: #757575;" action="<?php echo base_url();?>apanel/updateadmission"method="post" autocomplete="off">
                                        <div class="row">
                                        	<div class="col-sm-12">
                                        		<div class="col-sm-6">
                                        			<div class="form-group">
                                        				<div class="col-sm-4">
                                            				<label for="input-Default" class="control-label"> Student Name</label></div>
                                          				 <div class="col-sm-8">
                                          				     	<input type="hidden" name="id" value="<?php echo $this->uri->segment(4);?>" />
                                                			<input type="text" class="form-control" id="input-Default" name="name" value="<?php echo $in->name;?>"required="required">
                                            			</div>
                                        			</div>
                                        		</div>
											 <div class="col-sm-6">
	                                         	<div class="form-group">
	                                         			<div class="col-sm-4">
	                                            			<label for="input-Default" class="control-label">Father name</label>
	                                          			</div>
	                                          <div class="col-sm-8">
	                                                <input type="text" class="form-control" id="input-Default" name="fname" value="<?php echo $in->f_name;?>"required="required">
	                                            </div>
	                                        </div>
                                        	</div>
                                        	 </div>
                                        	 </div>
											 <br />
                                         	 <div class="row">
                                        		<div class="col-sm-12">
                                        		 <div class="col-sm-6">
                                         			<div class="form-group">
                                         				<div class="col-sm-4">
                                            				<label for="input-Default" class="control-label"> Mother Name</label>
                                            		</div>
                                            		<div class="col-sm-8">
                                                		<input type="text" class="form-control" id="input-Default" name="m_name" value="<?php echo $in->m_name;?>"required="required">
                                            		</div>
                                        			</div>
                                        		</div>
                                        		<div class="col-sm-6">
                                         			<div class="form-group">
                                      					 <div class="col-sm-4">
                                            				<label for="input-Default" class=" control-label">Mobile Number</label>
                                            			</div>
                                       						<div class="col-sm-8">
                                                				<input type="text" class="form-control" id="input-Default" name="person_mobile" value="<?php echo $in->mobile_no;?>"required="required">
                                            				</div>
                                      				</div>
                                      			</div>
                                       
                                        	</div>
                                        </div>
										 <br />
										 <div class="row">
                                        		<div class="col-sm-12">
                                        		 <div class="col-sm-6">
                                         			<div class="form-group">
                                         				<div class="col-sm-4">
                                            				<label for="input-Default" class="control-label"> DOB</label>
                                            		</div>
                                            		<div class="col-sm-8">
                                                		<input type="text" class="form-control" id="input-Default" name="dob" value="<?php echo $in->d_o_b;?>" required="required" readonly>
                                            		</div>
                                        			</div>
                                        		</div>
                                        		<div class="col-sm-6">
                                         			<div class="form-group">
                                      					 <div class="col-sm-4">
                                            				<label for="input-Default" class=" control-label">Address</label>
                                            			</div>
                                       						<div class="col-sm-8">
                                                				<input type="no" class="form-control" id="input-Default" name="address"  value="<?php echo $in->address;?>" required="required">
                                            				</div>
                                      				</div>
                                      			</div>
                                       
                                        	</div>
                                        </div>
										
                                        
                                        <br />
                                         <div class="col-sm-offset-2 col-sm-10">
                                            <button type="submit" class="btn btn-success">UPDATE Info</button>
                                         </div>
                                         </div>
                                        
                                    </form>
                                    <?php else : ?>
                                    	<div class="alert alert-success" role="alert">
                            	New Student Registration Form 
                            		</div>
                     
                                    <form class="text-center" style="color: #757575;" action="<?php echo base_url();?>apanel/submitadmission"method="post" autocomplete="off">
                                        <div class="row">
                                        	<div class="col-sm-12">
                                        		<div class="col-sm-6">
                                        			<div class="form-group">
                                        				<div class="col-sm-4">
                                            				<label for="input-Default" class="control-label"> Student Name</label></div>
                                          				 <div class="col-sm-8">
                                                			<input type="text" class="form-control" id="input-Default" name="name" required="required">
                                            			</div>
                                        			</div>
                                        		</div>
											 <div class="col-sm-6">
	                                         	<div class="form-group">
	                                         			<div class="col-sm-4">
	                                            			<label for="input-Default" class="control-label">Father name</label>
	                                          			</div>
	                                          <div class="col-sm-8">
	                                                <input type="text" class="form-control" id="input-Default" name="fname" required="required">
	                                            </div>
	                                        </div>
                                        	</div>
                                        	 </div>
                                        	 </div>
											 <br />
                                         	 <div class="row">
                                        		<div class="col-sm-12">
                                        		 <div class="col-sm-6">
                                         			<div class="form-group">
                                         				<div class="col-sm-4">
                                            				<label for="input-Default" class="control-label"> Mother Name</label>
                                            		</div>
                                            		<div class="col-sm-8">
                                                		<input type="text" class="form-control" id="input-Default" name="m_name" required="required">
                                            		</div>
                                        			</div>
                                        		</div>
                                        		<div class="col-sm-6">
                                         			<div class="form-group">
                                      					 <div class="col-sm-4">
                                            				<label for="input-Default" class=" control-label">Mobile Number</label>
                                            			</div>
                                       						<div class="col-sm-8">
                                                				<input type="text" class="form-control" id="input-Default" name="person_mobile" required="required">
                                            				</div>
                                      				</div>
                                      			</div>
                                       
                                        	</div>
                                        </div>
										 <br />
										 <div class="row">
                                        		<div class="col-sm-12">
                                        		 <div class="col-sm-6">
                                         			<div class="form-group">
                                         				<div class="col-sm-4">
                                            				<label for="input-Default" class="control-label"> DOB</label>
                                            		</div>
                                            		<div class="col-sm-8">
                                                		<input type="date" class="form-control" id="input-Default" name="dob" required="required">
                                            		</div>
                                        			</div>
                                        		</div>
                                        		<div class="col-sm-6">
                                         			<div class="form-group">
                                      					 <div class="col-sm-4">
                                            				<label for="input-Default" class=" control-label">Address</label>
                                            			</div>
                                       						<div class="col-sm-8">
                                                				<input type="no" class="form-control" id="input-Default" name="address"  required="required">
                                            				</div>
                                      				</div>
                                      			</div>
                                       
                                        	</div>
                                        </div>
										 <br />
										 <div class="row">
                                        		<div class="col-sm-12">
                                        		 <div class="col-sm-6">
                                         			<div class="form-group">
                                         				<div class="col-sm-4">
                                            				<label for="input-Default" class="control-label"> Class Name</label>
                                            		</div>
                                            		<div class="col-sm-8">
                                                		<input type="text" class="form-control" id="input-Default" name="class_name" required="required">
                                            		</div>
                                        			</div>
                                        		</div>
                                        		<div class="col-sm-6">
                                         			<div class="form-group">
                                      					 <div class="col-sm-4">
                                            				<label for="input-Default" class=" control-label">Form Fees</label>
                                            			</div>
                                       						<div class="col-sm-8">
                                                				<input type="no" class="form-control" id="input-Default" name="form_fee" value="250" required="required" readonly>
                                            				</div>
                                      				</div>
                                      			</div>
                                       
                                        	</div>
                                        </div>
                                        
                                        <br />
                                         <div class="col-sm-offset-2 col-sm-10">
                                            <button type="submit" class="btn btn-success">Save Info</button>
                                         </div>
                                         </div>
                                        
                                    </form>
                                    
                                        <?php endif;?>    
                                 
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                    
                   
                </div><!-- Main Wrapper -->