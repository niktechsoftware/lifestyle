<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Users crontroller for BE_USERS table
 */
class Vendor_request extends BE_Controller {

	/**
	 * Constructs required variables
	 */
	function __construct() {
		parent::__construct( MODULE_CONTROL, 'VENDORS' );
    }

	function index() {

		//registered users filter
		$conds = array();

		// get rows count
		$this->data['rows_count'] = $this->Vendor->count_all();

		// get users
		$this->data['users'] = $this->Vendor->get_all($this->pag['per_page'], $this->uri->segment( 4 ) );

		// load index logic
		parent::index();
	}

	function delete( $user_id ) {

		// start the transaction
		$this->db->trans_start();

		// check access
		$this->check_access( DEL );
		
		// delete categories and images
		if ( !$this->ps_delete->delete_vendor_req( $user_id )) {

			// set error message
			$this->set_flash_msg( 'error', get_msg( 'err_model' ));

			// rollback
			$this->trans_rollback();

			// redirect to list view
			redirect( $this->module_site_url());
		}
			
		/**
		 * Check Transcation Status
		 */
		if ( !$this->check_trans()) {

			$this->set_flash_msg( 'error', get_msg( 'err_model' ));	
		} else {
        	
			$this->set_flash_msg( 'success', get_msg( 'success_user_delete' ));
		}
		
		redirect( $this->module_site_url());
	}
    

    // function search() {

	// 	// breadcrumb urls
	// 	$data['action_title'] = get_msg( 'user_search' );

	// 	// handle search term
	// 	$search_term = $this->searchterm_handler( $this->input->post( 'searchterm' ));
		
	// 	// condition
	// 	$conds = array( 'searchterm' => $search_term , 'register_role_id' => 4);

	// 	$this->data['rows_count'] = $this->User->count_all_by( $conds );

	// 	$this->data['users'] = $this->User->get_all_by( $conds, $this->pag['per_page'], $this->uri->segment( 4 ));
		
	// 	parent::search();
	// }
    
}