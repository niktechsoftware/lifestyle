<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Model class for country table
 */
class Vendor extends PS_Model {

	/**
	 * Constructs the required data
	 */
	function __construct() 
	{
		parent::__construct( 'vendor_request', 'VENDOR_ID' );
	}

	/**
	 * Implement the where clause
	 *
	 * @param      array  $conds  The conds
	 */
	function custom_conds( $conds = array())
	{
		 // default where clause
		// if ( !isset( $conds['no_publish_filter'] )) {
		// 	$this->db->where( 'status', 1 );
		// }

		// country name condition
		if ( isset( $conds['VENDOR_ID'] )) {
			$this->db->where( 'VENDOR_ID', $conds['VENDOR_ID'] );
		}
		
		// searchterm
		if ( isset( $conds['searchterm'] )) {
			$this->db->group_start();
			$this->db->like( 'VENDOR_NAME', $conds['searchterm'] );
			$this->db->or_like( 'VENDOR_PHONE', $conds['searchterm'] );
			$this->db->group_end();
		}

		$this->db->order_by( 'VENDOR_DATETIME', 'desc' );
	}
}