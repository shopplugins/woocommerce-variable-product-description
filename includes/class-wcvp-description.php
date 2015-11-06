<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Class WC_Variation_Description
 *
 * Class responsible for displaying variation descriptions on the product page
 *
 * @class       WC_Variation_Description
 * @version     1.0.1
 * @author      Daniel Espinoza
 */

class WCVP_Description {

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

		// add the variation description div to the product page
		add_action( 'woocommerce_single_product_summary', array( $this, 'add_variation_description' ), 25 );

		add_filter( 'woocommerce_available_variation', array( $this, 'add_variation_meta_to_page' ), 20, 3 );

		add_action( 'woocommerce_variable_add_to_cart', array( $this, 'add_variation_js' ), 40 );

	}


	/**
	 *  Add variation description to the product page
	 */
	public function add_variation_description() {

		echo '<div class="variation-description"><p></p></div>';
	}



	/**
	 *
	 */
	public function add_variation_js() {
		wp_enqueue_script( 'wc-variation-description' );

	}


	/**
	 *
	 */
	public function add_variation_meta_to_page( $meta, $object, $variation ){

		$variation_description = get_post_meta( $variation->variation_id, '_variation_description', true );
		$meta['variation_description'] = $variation_description;

		return $meta;

	}

}
