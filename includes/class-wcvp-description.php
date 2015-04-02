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



		// TODO enqueue javascript for product page changer

		// data-product_variations
		// reference /plugins/woocommerce/assets/js/frontend/add-to-cart-variation.js
		/*
		 * Variations are stored on page in form variable data-product_variations
		 * Example:
		 * {&quot;attribute_pa_color&quot;:&quot;green&quot;},
&quot;image_src&quot;:&quot;http:\/\/wc23.co\/wp-content\/uploads\/2013\/06\/T_3_front-600x600.jpg&quot;,
&quot;image_link&quot;:&quot;http:\/\/wc23.co\/wp-content\/uploads\/2013\/06\/T_3_front.jpg&quot;,
&quot;image_title&quot;:&quot;T_3_front&quot;,
&quot;image_alt&quot;:&quot;&quot;,

		 */
		// TODO see if we can hook into the data-product_variations to add a description field
		// or any other definable field
		//
		// TODO hook into appropriate product page action


	}


	/**
	 *  Add variation description to the product page
	 */
	public function add_variation_description() {

		echo '<div class="variation-description"><p>YOLO!!!!</p></div>';
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
