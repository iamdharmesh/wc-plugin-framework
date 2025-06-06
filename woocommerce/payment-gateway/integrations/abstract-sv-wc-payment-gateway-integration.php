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
 * @package   SkyVerge/WooCommerce/Payment-Gateway/Classes
 * @author    SkyVerge
 * @copyright Copyright (c) 2013-2024, SkyVerge, Inc.
 * @license   http://www.gnu.org/licenses/gpl-3.0.html GNU General Public License v3.0
 */

namespace SkyVerge\WooCommerce\PluginFramework\v5_15_12;

defined( 'ABSPATH' ) or exit;

if ( ! class_exists( '\\SkyVerge\\WooCommerce\\PluginFramework\\v5_15_12\\SV_WC_Payment_Gateway_Integration' ) ) :


/**
 * Abstract Integration
 *
 * @since 4.1.0
 */
#[\AllowDynamicProperties]
abstract class SV_WC_Payment_Gateway_Integration {


	/** @var SV_WC_Payment_Gateway direct gateway instance */
	protected $gateway;


	/**
	 * Bootstraps the class.
	 *
	 * @since 4.1.0
	 *
	 * @param SV_WC_Payment_Gateway $gateway direct gateway instance
	 */
	public function __construct( SV_WC_Payment_Gateway $gateway ) {

		$this->gateway = $gateway;
	}


	/**
	 * Return the gateway for the integration
	 *
	 * @since 4.1.0
	 * @return SV_WC_Payment_Gateway
	 */
	public function get_gateway() {

		return $this->gateway;
	}


}


endif;
