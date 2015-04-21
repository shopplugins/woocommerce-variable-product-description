<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Class WC_Variation_Description_Admin.
 *
 * Admin settings class.
 *
 * @class       WCVP_Description_Admin
 * @version     1.0.0
 * @author      Daniel Espinoza
 */

class WCVP_Description_Admin {

	/**
	 * Constructor.
	 *
	 * @since 1.0.0
	 */
	function __construct() {

		$this->hooks();

	}

	/**
	 * All the hooks
	 *
	 * @since 1.0.0
	 */
	public function hooks() {

		// hook into the variations panel
		add_action('woocommerce_product_after_variable_attributes', array( $this , 'output_variation_description'), 30, 3 );

		// handle saving the variation
		add_action('woocommerce_process_product_meta_variable', array( $this , 'save_variation_description'), 30);


	}

	/**
	 * Output this variation's description to the Product Data tab.
	 *
	 * @since 1.0.0
	 * @param int $loop
	 * @param $variation_data
	 * @param $variation
	 */
	public function output_variation_description( $loop, $variation_data, $variation ){

		// get variation data
		$_variable_description = get_post_meta( $variation->ID , '_variation_description', true );

		// output the variation
		?><div>
		<p class="form-row">
				<label><?php _e( 'Description:', 'woocommerce' ); ?></label>
				<textarea style="width: 100%;" class="postform" name="variation_description[<?php echo $loop; ?>]" cols="5" rows="5" placeholder=""><?php echo $_variable_description; ?></textarea>
		</p>
		</div>
		<?php

	}

	/**
	 * Save the variations to the post meta
	 *
	 * @since 1.0.0
	 * @param int $post_id
	 */
	public function save_variation_description( $post_id ){

		if ( isset( $_POST['variable_sku'] ) ) {

			$variable_post_id = $_POST['variable_post_id'];
			$_variation_description = array();

			if ( ! empty( $_POST['variation_description'] ) ) {
				$_variation_description = $_POST['variation_description'];
			}

			$max_loop = max( array_keys( $_POST['variable_post_id'] ) );

			for ( $i = 0; $i <= $max_loop; $i ++ ) {

				if ( ! isset( $variable_post_id[ $i ] ) ) {
					continue;
				}
				$variation_id = absint( $variable_post_id[ $i ] );

				update_post_meta( $variation_id, '_variation_description', wc_clean( $_variation_description[ $i ] ) );

			}
		}

	}

}
