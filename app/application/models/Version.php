<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Model class for about table
 */
class Version extends PS_Model {

	/**
	 * Constructs the required data
	 */
	function __construct() 
	{
		parent::__construct( 'mk_version', 'id', 'ver' );
	}

	/**
	 * Implement the where clause
	 *
	 * @param      array  $conds  The conds
	 */
	function custom_conds( $conds = array())
	{
		// about_id condition
		if ( isset( $conds['id'] )) {
			$this->db->where( 'id', $conds['id'] );
		}

		if ( isset( $conds['shop_id'] )) {
			$this->db->where( 'shop_id', $conds['shop_id'] );
		}

		if ( isset( $conds['package_name'] )) {
			$this->db->where( 'package_name', $conds['package_name'] );
		}
	}


	function save_version( &$user_data, $user_id = false )
	{
		// start the transaction
		$this->db->trans_start();

	
			// generate new user id
			// $user_id = $this->generate_key( 'SHOP' );
			// $user_data['id'] = $user_id;

			if ( ! $this->db->insert( $this->table_name, $user_data )) {
			// if error in inserting new, rollback

				$this->db->trans_rollback();
        		return false;
			}

		 
		
	
		return $this->db->trans_commit();
	}
}