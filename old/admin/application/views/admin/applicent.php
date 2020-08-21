                <div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                            	<div class="panel-body">
                                   <div class="table-responsive">
                                    <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Father name</th>
                                                 <th>Mobile No.</th>
                                                <th>Address</th>
                                                  <th>CV</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<?php $i = 1;?>

                                        	<?php $res = $this->db->get("online_form")->result();?>
                                        	<?php foreach($res as $row):?>
                                            <tr>
                                             <td><?php echo $i; ?></td>
                                                <td><?php echo $row->name; ?></td>
                                                <td><?php echo $row->fname ?></td>
                                                   <td><?php echo $row->address; ?></td>
                                                      <td><?php echo $row->mno; ?></td>
                                                    <td><?php
                                                    $image=$row->stuimage;
                                                  	$image = time().trim($image);
                                         	         $image=str_replace(' ', '_', $image);
                                        	      ?>
                                        	     <images  src="http://sisghazipur.org/assets/images/studentRegistration/<?php echo $image; ?>" alt="" /></td>
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