<?php
 
/**
 * Plugin Name: Weirdspace Fulfillment Notification
 * Based on URI: http://code.tutsplus.com/tutorials/create-a-custom-shipping-method-for-woocommerce--cms-26098
 * Description: Plugin for WooCommerce that allows a third-party fulfillment service to notify the eCommerce site that the order has been shipped
 * Version: 1.0.0
 * Author: John Anderson
 * Author URI: http://www.soaringpenguin.com
 * License: GPL-3.0+
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 * Domain Path: /lang
 * Text Domain: weirdspace-fulfillment-notification
 */
 
if ( ! defined( 'WPINC' ) ) {
 
    die;
 
}

/*
 * Check if WooCommerce is active
 */
if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {



    /**
     * Init your settings
     *
     * @access public
     * @return void
     */
    function init() {
        // Load the settings API
        // $this->init_form_fields(); 
        // $this->init_settings(); 

        // Save settings in admin if you have any defined
        add_action( 'woocommerce_update_options_shipping_' . $this->id, array( $this, 'process_admin_options' ) );
    }



}


