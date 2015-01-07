<?PHP
/*
 * Plugin Name: WooCommerce Variation Description
 * Plugin URI: https://github.com/growdev/woocommerce-availability-chart/
 * Description: Adds per-variation description field to WooCommerce Variable products
 * Version: 0.1.0
 * Author: Daniel Espinoza
 * Author URI: http://growdevelopment.com
 * Text Domain: woocommerce-variation-description
 *
 * License: GNU General Public License v3.0
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 *
 * Copyright Grow Development (support@growdevelopment.com)
 *
 *     This file is part of WooCommerce Variation Description,
 *     a plugin for WordPress.
 *
 *     WooCommerce Availability Chart is free software:
 *     You can redistribute it and/or modify it under the terms of the
 *     GNU General Public License as published by the Free Software
 *     Foundation, either version 3 of the License, or (at your option)
 *     any later version.
 *
 *     WooCommerce Variation Description is distributed in the hope that
 *     it will be useful, but WITHOUT ANY WARRANTY; without even the
 *     implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR
 *     PURPOSE. See the GNU General Public License for more details.
 *
 *     You should have received a copy of the GNU General Public License
 *     along with WordPress. If not, see <http://www.gnu.org/licenses/>.
 *
 * @package    WC-Variation-Description
 * @author     Grow Development
 * @category   Enhancement
 * @copyright  Copyright (c) 2013-2014, Grow Development
 * @license    http://www.gnu.org/licenses/gpl-3.0.html GNU General Public License v3.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 *	Class WooCommerce_Variation_Description
 *
 *	@class       WooCommerce_Variation_Description
 *	@version     1.0.0
 *	@author      Daniel Espinoza
 */
class WooCommerce_Variation_Description {

}

if ( is_admin() ) :

	/**
	 * Admin class.
	 */
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wc-variation-description-admin.php';

endif;
