<?PHP
/*
 * Plugin Name: WooCommerce Variable Product Description
 * Plugin URI: https://github.com/shopplugins/woocommerce-variable-product-description
 * Description: Adds description field to each variation for WooCommerce variable products
 * Version: 1.0.0
 * Author: Shop Plugins
 * Author URI: http://shopplugins.com
 * Text Domain: wcvp-description
 *
 * License: GNU General Public License v3.0
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 *
 * Copyright Shop Plugins (support@shopplugins.com)
 *
 *     This file is part of WooCommerce Variable Product Description,
 *     a plugin for WordPress.
 *
 *     WooCommerce Variable Product Description is free software:
 *     You can redistribute it and/or modify it under the terms of the
 *     GNU General Public License as published by the Free Software
 *     Foundation, either version 3 of the License, or (at your option)
 *     any later version.
 *
 *     WooCommerce Variable Product Description is distributed in the hope that
 *     it will be useful, but WITHOUT ANY WARRANTY; without even the
 *     implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR
 *     PURPOSE. See the GNU General Public License for more details.
 *
 *     You should have received a copy of the GNU General Public License
 *     along with WordPress. If not, see <http://www.gnu.org/licenses/>.
 *
 * @package    WCVP-Description
 * @author     Shop Plugins
 * @category   Enhancement
 * @copyright  Copyright (c) 2013-2015, Shop Plugins
 * @license    http://www.gnu.org/licenses/gpl-3.0.html GNU General Public License v3.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

// TODO add a is_woocommerce_active()


class WC_Variation_Description {

	var $admin;
	var $frontend;

	/**
	 * Constructor
	 */
	public function __construct() {

		$this->init();
	}


	/**
	 * Init the plugin
	 */
	public function init() {

		if ( is_admin() ) :

			/**
			 * Admin class.
			 */
			require_once 'includes/class-wcvp-description-admin.php';
			$this->admin = new WCVP_Description_Admin();

		endif;

		require_once 'includes/class-wcvp-description.php';
		$this->frontend = new WCVP_Description();

		add_action( 'wp_enqueue_scripts', array( $this, 'load_scripts' ) );


	}

	/**
	 *
	 */
	public function load_scripts() {
		$path =   plugins_url( '/assets/js/variation-description.js', __FILE__ );
		wp_register_script( 'wc-variation-description', $path, '', WC()->version, true );
	}

}

$GLOBALS[] = new WC_Variation_Description();