<?php
/**
 * Plugin Name: AES Plugin
 * Description: Changes the Downloadable products setting File download method to Redirect only (Insecure) in WooCommerce.
 * Version: 1.0
 * Author: Atick Eashrak Shuvo
 */

// Ensure WooCommerce is active
if (in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')))) {

    // Function to change downloadable file method
    function change_downloadable_file_method() {
        // Get download method settings
        $downloadable_file_method = get_option('woocommerce_file_download_method');
        
        // If the method is not set to "redirect" already
        if ($downloadable_file_method !== 'redirect') {
            // Update the method to "redirect"
            update_option('woocommerce_file_download_method', 'redirect');
        }
    }

    // Hook the function to run on admin_init
    add_action('admin_init', 'change_downloadable_file_method');
}
