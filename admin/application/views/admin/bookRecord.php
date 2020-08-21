                <div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                            
                            	<div class="panel-body">
                            
                            		<div class="alert alert-success" role="alert">
                            	Book Sale Amount Entry
                            		</div>
                     
                                    <form class="text-center" style="color: #757575;" action="<?php echo base_url();?>apanel/bookSaleEntry"method="post" autocomplete="off">
                                        <div class="row">
                                        	<div class="col-sm-12">
                                        		<div class="col-sm-6">
                                        			<div class="form-group">
                                        				<div class="col-sm-4">
                                            				<label for="input-Default" class="control-label"> Stundent Name</label></div>
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
                                            				<label for="input-Default" class=" control-label">Book Amount</label>
                                            			</div>
                                       						<div class="col-sm-8">
                                                				<input type="no" class="form-control" id="input-Default" name="book_amount"  required="required">
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
                                            				<label for="input-Default" class="control-label"> Mobile No</label>
                                            		</div>
                                            		<div class="col-sm-8">
                                                		<input type="text" class="form-control" id="input-Default" name="mobile" required="required">
                                            		</div>
                                        			</div>
                                        		</div>
                                        	
                                        <br />
                                         <div class="col-sm-offset-2 col-sm-10">
                                            <button type="submit" class="btn btn-success">Save Info</button>
                                         </div>
                                         </div>
                                        
                                    </form>
                                 
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                    
                   
                </div><!-- Main Wrapper -->