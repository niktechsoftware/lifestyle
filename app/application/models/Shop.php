<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Model class for shop table
 */
class Shop extends PS_Model {

	/**
	 * Constructs the required data
	 */
	function __construct() 
	{
		parent::__construct( 'mk_shops', 'id', 'shop' );
	}

	/**
	 * Implement the where clause
	 *
	 * @param      array  $conds  The conds
	 */
	function custom_conds( $conds = array())
	{
		// about_id condition
		if ( isset( $conds['no_publish_filter'] )) {
			$this->db->where( 'status', $conds['no_publish_filter'] );
		}
	
		// about_id condition
		if ( isset( $conds['id'] )) {
			$this->db->where( 'id', $conds['id'] );
		}
		
		if ( isset( $conds['package_name'] )) {
			$this->db->where( 'package_name', $conds['package_name'] );
		}

		// standard_shipping_enable condition
		if ( isset( $conds['standard_shipping_enable'] )) {
			$this->db->where( 'standard_shipping_enable', $conds['standard_shipping_enable'] );
		}

		// zone_shipping_enable condition
		if ( isset( $conds['zone_shipping_enable'] )) {
			$this->db->where( 'zone_shipping_enable', $conds['zone_shipping_enable'] );
		}

		// no_shipping_enable condition
		if ( isset( $conds['no_shipping_enable'] )) {
			$this->db->where( 'no_shipping_enable', $conds['no_shipping_enable'] );
		}

		// searchterm
		if ( isset( $conds['searchterm'] )) {
			$this->db->group_start();
			$this->db->like( 'name', $conds['searchterm'] );
			$this->db->or_like( 'name', $conds['searchterm'] );
			$this->db->group_end();
		}
	}

	function save_shop( &$user_data, $user_id = false )
	{
		// start the transaction
		$this->db->trans_start();

	
			// generate new user id
			$user_id = $this->generate_key( 'SHOP' );
			$user_data['id'] = $user_id;

			if ( ! $this->db->insert( $this->table_name, $user_data )) {
			// if error in inserting new, rollback

				$this->db->trans_rollback();
        		return false;
			}

		 
			$this->db->trans_commit();
	
		return $user_id;
	}
	
}
?>