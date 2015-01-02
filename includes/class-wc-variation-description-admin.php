<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Class WC_Variation_Description_Admin.
 *
 * Admin settings class.
 *
 * @class       WC_Variation_Description_Admin
 * @version     1.0.0
 * @author      Daniel Espinoza
 */

class WC_Variation_Description_Admin {

	/*
	 *
	 */
	function __construct() {

		$this->wc_variation_description_hooks();

	}

	/*
	 *
	 *
	 */
	public function wc_variation_description_hooks() {

		// hook into the variations panel
		add_action('woocommerce_product_after_variable_attributes', array( $this , 'output_variation_description'));

		// handle saving the variation

	}

	/*
	 *
	 * @param $loop
	 * @param $variation_data
	 * @param $variation
	 */
	public function output_variation_description( $loop, $variation_data, $variation ){

		// get variation

		// output the variation

		$_variable_description = "test description";

	    //echo "hi hi hi===";
		//error_log(" here here ---------");
		echo "<tr class=\"variation_description\"><td colspan=\"2\"><label>";
		echo __( 'Description:', 'woocommerce' );
		echo "</label>";
		echo "<textarea name=\"variable_description[" . $loop . "]\" cols=\"5\" rows=\"5\" placeholder=\"\">" . $_variable_description . "</textarea>";
		echo "</td><td>";
		echo "</tr>";
	}

}

return new WC_Variation_Description_Admin();