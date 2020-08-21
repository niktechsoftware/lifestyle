                <div id="main-wrapper" class="container">
                    <?php if($this->uri->segment(3)=="dels"){?>
                    <div class ="alert alert-info">
                        Delete Successfully|||||
                    </div>
                    <?php } ?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                            	<div class="panel-body">
                                   <div class="table-responsive">
                                    <table id="emplist" class="display table" style="width: 100%; cellspacing: 0;">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Student Name</th>
                                                <th>Father Name</th>
                                                <th>Mother Name</th>
                                                 <th>Class</th>
                                                <th>Mobile</th>
                                                <th>Reg. Date</th>
                                                <th>Amount</th>
                                                <th>Paid Invoice</th>
                                                <th>Action</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<?php $this->db->where("client_code",$this->session->userdata("client_code"));
                                                	$inc=$this->db->get("admission");
                                                	 $i=1;
                                        	if($inc->num_rows()>0){	
                                        	    $totpamount =0;
                                        	foreach($inc->result() as $in):    
                                        	?>
                                        	   
                                        
                                            <tr 	<tr  style="background-color:#FEF6FD">
                                                <td><?php echo $i;?></td>
                                             <td><?php echo $in->name;?></td>
                                               
                                                 <td>
                                                <?php echo $in->f_name;?>
                                                	
                                                </td>
                                                 <td>
                                                <?php echo $in->m_name;?>
                                                	
                                                </td>
                                                 <td>
                                                <?php echo $in->class;?>
                                                </td>
                                                 <td><?php echo $in->mobile_no;?></td>
                                                <td><?php $date=$in->date;
                                                     $newDate = date("d-m-Y", strtotime($date));
                                                     echo $newDate ?></td>
                                                      <td>
                                                		<?php 
                                                		$totpamount=	$totpamount+$in->f_fees;
                                                		echo $in->f_fees; ?>
                                                </td>
                                               <td>
                                                    	<a class="btn btn-success" href="<?php echo base_url();?>apanel/invoicefrem/<?php echo $in->invoice_no;?>"> <?php echo $in->invoice_no; ?>
                                                	</a>
                                                   </td>
                                                  <td>	<a class="btn btn-success" href="<?php echo base_url();?>apanel/admission/edit/<?php echo $in->id;?>">Edit</a>
                                                 <a class="btn btn-danger" href="<?php echo base_url();?>apanel/deleteinvoice/<?php echo $in->invoice_no;?>"> Delete</td>
                                            </tr>
                                            <?php $i++;   endforeach;
                                        	}?>
                                    
                                        	<tr  style="background-color:#FCE6FA">
                                        	    <td></td>
                                        	    <td><strong>Total Amount</strong></td>
                                                    <td><?php echo $totpamount; ?></td>
                                            
                                        	    <td></td>
                                        	    <td></td>
                                        	    <td></td>
                                        	    <td></td>
                                        	      <td></td>
                                        	        <td></td>
                                        	         <td></td>
                                        	</tr>
                                        </tbody>
                                       </table>  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->