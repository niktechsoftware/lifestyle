<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Likes Controller
 */

class Versions extends BE_Controller {
		/**
	 * Construt required variables
	 */
	function __construct() {

		parent::__construct( MODULE_CONTROL, 'VERSIONS' );
	}

	/**
	 * Load About Entry Form
	 */

	function index( ) {

		$logged_in_user = $this->ps_auth->get_user_info();
		
		$conds['shop_id'] = $logged_in_user->shop_id;

		if ( $this->is_POST()) {
		// if the method is post

			// server side validation
			if ( $this->is_valid_input()) {
				$vid = $this->Version->get_one_by( $conds );
				// save user info
				$this->save( $vid->id );
			}
		}

	
		$this->data['action_title'] = "Version";
		
		//Get About Object
		$this->data['version'] = $this->Version->get_one_by( $conds );

		$this->load_form($this->data);

	}

	/**
	 * Update the existing one
	 */
	function edit( $id = "1") {


		// load user
		$logged_in_user = $this->ps_auth->get_user_info();
		
		$conds['shop_id'] = $logged_in_user->shop_id;
		$this->data['version'] = $this->Version->get_one_by( $conds );

		// echo $this->data['version']->id;

		// call the parent edit logic
		parent::edit( $this->data['version']->id );
	}

	/**
	 * Saving Logic
	 * 1) save about data
	 * 2) check transaction status
	 *
	 * @param      boolean  $id  The about identifier
	 */
	function save( $id = false ) {

		// start the transaction
		$this->db->trans_start();
		$logged_in_user = $this->ps_auth->get_user_info();
		
		/** 
		 * Insert Tag Records 
		 */
		$data = array();

		// prepare version no
		if ( $this->has_data( 'version_no' )) {
			$data['version_no'] = $this->get_data( 'version_no' );
		}

		// prepare version title
		if ( $this->has_data( 'version_title' )) {
			$data['version_title'] = $this->get_data( 'version_title' );
		}

		// prepare version message
		if ( $this->has_data( 'version_message' )) {
			$data['version_message'] = $this->get_data( 'version_message' );
		}
		
		// if 'version_force_update' is checked,
	    if ( $this->has_data( 'version_force_update' )) {
	      $data['version_force_update'] = 1;
	    } else {
	      $data['version_force_update'] = 0;
	    }

	    // if 'version_need_clear_data' is checked,
	    if ( $this->has_data( 'version_need_clear_data' )) {
	      $data['version_need_clear_data'] = 1;
	    } else {
	      $data['version_need_clear_data'] = 0;
	    }
	
	
		//save Tag
		if ( ! $this->Version->save( $data, $id )) {
		// if there is an error in inserting user data,	

			// rollback the transaction
			$this->db->trans_rollback();

			// set error message
			$this->data['error'] = get_msg( 'err_model' );
			
			return;
		}


		// commit the transaction
		if ( ! $this->check_trans()) {
        	
			// set flash error message
			$this->set_flash_msg( 'error', get_msg( 'err_model' ));
		} else {

			if ( $id ) {
			// if user id is not false, show success_add message
				
				$this->set_flash_msg( 'success', get_msg( 'success_version_edit' ));
			} else {
			// if user id is false, show success_edit message

				$this->set_flash_msg( 'success', get_msg( 'success_version_add' ));
			}
		}

		
			redirect( site_url('/admin/versions') );
	

	}

    /**
	 * Determines if valid input.
	 *
	 * @return     boolean  True if valid input, False otherwise.
	 */
	function is_valid_input( $id = 0 ) {

		$this->form_validation->set_rules( 'version_no', get_msg( 'version_no_required' ), 'required');

		$this->form_validation->set_rules( 'version_title', get_msg( 'version_title_required' ), 'required');

		$this->form_validation->set_rules( 'version_message', get_msg( 'version_message_required' ), 'required');

		

		if ( $this->form_validation->run() == FALSE ) {
		// if there is an error in validating,
			//echo "error"; die;
			return false;
		}
	
		return true;
	}
}