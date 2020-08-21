<script>
function runAfterJQ() {

	$(document).ready(function(){

$('.btn-delete').click(function(){
		
        // get id and links
        var id = $(this).attr('id');
        var btnYes = $('.btn-yes').attr('href');
        var btnNo = $('.btn-no').attr('href');

        // modify link with id
        $('.btn-yes').attr( 'href', btnYes + id );
        $('.btn-no').attr( 'href', btnNo + id );
    });

});
}
</script>
<?php
	// Delete Confirm Message Modal
	$data = array(
		'title' => "Delete Vendor Request",
		'message' =>  "Are you sure to delete this Vendor Request",
	);
	
	$this->load->view( $template_path .'/components/delete_confirm_modal', $data );
?>