<?php
/**
 * WooCommerce Payment Gateway Framework
 *
 * This source file is subject to the GNU General Public License v3.0
 * that is bundled with this package in the file license.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.gnu.org/licenses/gpl-3.0.html
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@skyverge.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade the plugin to newer
 * versions in the future. If you wish to customize the plugin for your
 * needs please refer to http://www.skyverge.com
 *
 * @package   SkyVerge/WooCommerce/Payment-Gateway/API
 * @author    SkyVerge
 * @copyright Copyright (c) 2013-2024, SkyVerge, Inc.
 * @license   http://www.gnu.org/licenses/gpl-3.0.html GNU General Public License v3.0
 */

namespace SkyVerge\WooCommerce\PluginFramework\v5_15_12;

defined( 'ABSPATH' ) or exit;

if ( ! interface_exists( '\\SkyVerge\\WooCommerce\\PluginFramework\\v5_15_12\\SV_WC_Payment_Gateway_API_Payment_Notification_Credit_Card_Response' ) ) :


/**
 * WooCommerce Payment Gateway API Payment Credit Card Notification Response
 *
 * Represents an IPN or redirect-back credit card request response
 *
 * @since 2.2.0
 */
interface SV_WC_Payment_Gateway_API_Payment_Notification_Credit_Card_Response extends SV_WC_Payment_Gateway_API_Payment_Notification_Response, SV_WC_Payment_Gateway_API_Authorization_Response {


	/**
	 * Returns the card type, if available, i.e., 'visa', 'mastercard', etc.
	 *
	 * @see SV_WC_Payment_Gateway_Helper::payment_type_to_name()
	 *
	 * @since 2.2.0
	 *
	 * @return string|null card type or null if not available
	 */
	public function get_card_type();


	/**
	 * Returns the card expiration month with leading zero, if available.
	 *
	 * @since 2.2.0
	 *
	 * @return string|null card expiration month or null if not available
	 */
	public function get_exp_month();


	/**
	 * Returns the card expiration year with four digits, if available.
	 *
	 * @since 2.2.0
	 *
	 * @return string|null card expiration year or null if not available
	 */
	public function get_exp_year();


}


endif;
