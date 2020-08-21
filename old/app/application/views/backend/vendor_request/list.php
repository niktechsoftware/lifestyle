<table class="table table-striped table-bordered">

	<tr>
		<th><?php echo get_msg('no')?></th>
		<th><?php echo get_msg('vendor_name')?></th>
		<th><?php echo get_msg('vendor_email')?></th>
        <th><?php echo get_msg('vendor_phone')?></th>
        <th><?php echo get_msg('shop_name')?></th>
        <th><?php echo get_msg('shop_address')?></th>
        <th><?php echo get_msg('shop_gstno')?></th>
        <th><?php echo get_msg('shop_logo')?></th>

	

		<?php if ( $this->ps_auth->has_access( DEL )): ?>
				
		<th><span class="th-title"><?php echo get_msg('btn_delete')?></span></th>
	
		<?php endif; ?>

	</tr>

	<?php $count = $this->uri->segment(4) or $count = 0; ?>

	<?php if ( !empty( $users ) && count( $users->result()) > 0 ): ?>
			
		<?php foreach($users->result() as $user): ?>
			
			<tr>
				<td><?php echo ++$count;?></td>
				<td><?php echo $user->VENDOR_NAME;?></td>
				<td><?php echo $user->VENDOR_EMAIL;?></td>
                <td><?php echo $user->VENDOR_PHONE;?></td>
                <td><?php echo $user->VENDOR_SHOP;?></td>
                <td><?php echo $user->VENDOR_SHOP_ADDRESS;?></td>
                <td><?php echo $user->VENDOR_GST;?></td>
				<th><span class="th-title"><a href="<?php echo $user->VENDOR_LOGO;?>" target="_blank">VIEW</a></span></th>
            
                

			

				<?php if ( $this->ps_auth->has_access( DEL )): ?>
					
					<td>
						<a herf='#' class='btn-delete' data-toggle="modal" data-target="#myModal" id="<?php echo "$user->VENDOR_ID";?>">
							<i class='fa fa-trash-o'></i>
						</a>
					</td>
				
				<?php endif; ?>

			</tr>
		
		<?php endforeach; ?>

	<?php else: ?>
			
		<?php $this->load->view( $template_path .'/partials/no_data' ); ?>

	<?php endif; ?>

</table>