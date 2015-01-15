<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Class WC_Variation_Description
 *
 * Class responsible for displaying variation descriptions on the product page
 *
 * @class       WC_Variation_Description
 * @version     1.0.0
 * @author      Daniel Espinoza
 */

class WC_Variation_Description {

	/*
	 *
	 */
	function __construct() {

		$this->wc_variation_description_hooks();

	}

	/**
	 * All the hooks
	 *
	 */
	public function wc_variation_description_hooks() {

		// TODO enqueue javascript for product page changer
		// TODO hook into appropriate product page action


	}


}

return new WC_Variation_Description();