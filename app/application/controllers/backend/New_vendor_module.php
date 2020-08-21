<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Shop Controller
 */
class New_vendor_module extends BE_Controller {

    function __construct() {

		parent::__construct( MODULE_CONTROL, 'VENDORS' );
    }
    
    function index( $id = "shop0b69bc5dbd68bbd57ea13dfc5488e20a" ) {

		if ( $this->is_POST()) {
		// if the method is post

			// server side validation
			if ( $this->is_valid_input()) {

				// save user info
				$this->save( $id );
			}
		}


		$logged_in_user = $this->ps_auth->get_user_info();
		 
	 	$conds['status'] = 1;

		$this->data['shop'] = $this->Shop->get_one( $id );
		 
		$this->load_form($this->data);

	}

}