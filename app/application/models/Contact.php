<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Model class for category table
 */
class Contact extends PS_Model {

	/**
	 * Constructs the required data
	 */
	function __construct() 
	{

		parent::__construct( 'mk_contacts', 'id', 'con' );

	}

	/**
	 * Implement the where clause
	 *
	 * @param      array  $conds  The conds
	*/
	function custom_conds( $conds = array())
	{
		// touch_id condition
		if ( isset( $conds['id'] )) {
			$this->db->where( 'id', $conds['id'] );
		}

		if ( isset( $conds['shop_id'] )) {
			$this->db->where( 'shop_id', $conds['shop_id'] );
		}

		$this->db->order_by( 'added_date', 'desc' );	

	}

}