<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/*
 *
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

	    echo "hi hi hi===";
	}

}

return new WC_Variation_Description_Admin();