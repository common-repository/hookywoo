<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
/**
 * Plugin Name: Hook Customizer for WooCommerce
 * Plugin URI: https://wordpress.org/plugins/hookywoo/
 * Description: WYSIWYG Editor for WooCommerce Hooks
 * Author: Jason Robie
 * Author URI: https://madcowweb.com/
 * Version: 2.0.3
 * Requires at least: 5.2
 * Requires PHP:      7.2
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 */

/**
 * Check if WooCommerce is active
 **/
if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {

    class HookyWoo_Plugin {

    public function __construct() {
        // Hook into the admin menu
        add_action( 'admin_menu', array( $this, 'create_plugin_settings_page' ) );

        // Add Settings and Fields
        add_action( 'admin_init', array( $this, 'setup_sections' ) );
        add_action( 'admin_init', array( $this, 'setup_single_page_fields' ) );
        add_action( 'admin_init', array( $this, 'setup_shop_page_fields' ) );
        add_action( 'admin_init', array( $this, 'setup_cart_page_fields' ) );
        add_action( 'admin_init', array( $this, 'setup_checkout_page_fields' ) );
        add_action( 'admin_enqueue_scripts', 'hookywoo_styles' );
        add_action( 'wp_enqueue_scripts', 'hookywoo_styles' );
        function hookywoo_styles() {
            wp_register_style( 'hookywoo_styles',  plugin_dir_url( __FILE__ ) . 'css/style.css' );
            wp_enqueue_style( 'hookywoo_styles' );
        }

        include_once( plugin_dir_path( __FILE__ ) . 'includes/hw-shop.php' );
        include_once( plugin_dir_path( __FILE__ ) . 'includes/hw-single-product.php' );
        include_once( plugin_dir_path( __FILE__ ) . 'includes/hw-cart.php' );
        include_once( plugin_dir_path( __FILE__ ) . 'includes/hw-checkout.php' );
    }

    public function create_plugin_settings_page() {
        // Add the menu item and page
        $page_title = 'HookyWoo Settings Page';
        $menu_title = 'HookyWoo Settings';
        $capability = 'manage_options';
        $slug = 'hookywoo_settings_page';
        $callback = array( $this, 'hookywoo_plugin_settings_page_content' );

        add_submenu_page( 'woocommerce', $page_title, $menu_title, $capability, $slug, $callback );
    }

    public function hookywoo_plugin_settings_page_content( $active_tab = '' ) {?>
        <div class="wrap">
        <h2>HookyWoo WooCommerce Hooks Customization</h2><?php
            if( isset( $_GET['settings-updated'] ) && $_GET['settings-updated'] ){
            $this->admin_notice();
            } ?>
        <?php if( isset( $_GET[ 'tab' ] ) ) {
            $active_tab = $_GET[ 'tab' ];
        } else if( $active_tab == 'shop_page_options' ) {
            $active_tab = 'shop_page_options';
        } else if( $active_tab == 'cart_page_options' ) {
            $active_tab = 'cart_page_options';
        } else if( $active_tab == 'checkout_page_options' ) {
            $active_tab = 'checkout_page_options';
        } else {
            $active_tab = 'single_page_options';
        } ?>

        <h2 class="nav-tab-wrapper">
            <a href="?page=hookywoo_settings_page&tab=single_page_options" class="nav-tab <?php echo $active_tab == 'single_page_options' ? 'nav-tab-active' : ''; ?>"><?php _e( 'Single Product Page Options', 'hookywoo' ); ?></a>
            <a href="?page=hookywoo_settings_page&tab=shop_page_options" class="nav-tab <?php echo $active_tab == 'shop_page_options' ? 'nav-tab-active' : ''; ?>"><?php _e( 'Shop/Archive Page Options', 'hookywoo' ); ?></a>
            <a href="?page=hookywoo_settings_page&tab=cart_page_options" class="nav-tab <?php echo $active_tab == 'cart_page_options' ? 'nav-tab-active' : ''; ?>"><?php _e( 'Cart Page Options', 'hookywoo' ); ?></a>
            <a href="?page=hookywoo_settings_page&tab=checkout_page_options" class="nav-tab <?php echo $active_tab == 'checkout_page_options' ? 'nav-tab-active' : ''; ?>"><?php _e( 'Checkout Page Options', 'hookywoo' ); ?></a>
        </h2>

        <form method="post" action="options.php">
            <?php
            if( $active_tab == 'single_page_options' ) {
                settings_fields( 'single_product_page_section' );
                do_settings_sections( 'single_product_page_section' );
            } elseif( $active_tab == 'shop_page_options' ) {
                settings_fields( 'shop_archive_page_section' );
                do_settings_sections( 'shop_archive_page_section' );
            } elseif( $active_tab == 'cart_page_options' ) {
                settings_fields( 'cart_page_section' );
                do_settings_sections( 'cart_page_section' );
            } else {
                settings_fields( 'checkout_page_section' );
                do_settings_sections( 'checkout_page_section' );
            }
            submit_button();
            ?>
        </form>
        </div> <?php }

    public function admin_notice() { ?>
        <div class="notice notice-success is-dismissible">
            <p>Hooray! Your settings have been updated!</p>
        </div><?php
    }

    public function setup_sections() {
        add_settings_section( 'single_product_page_section', '', array( $this, 'single_product_section_callback' ) , 'single_product_page_section' );
        add_settings_section( 'shop_archive_page_section', '', array( $this, 'shop_section_callback' ), 'shop_archive_page_section' );
        add_settings_section( 'cart_page_section', '', array( $this, 'cart_page_section_callback' ) , 'cart_page_section' );
        add_settings_section( 'checkout_page_section', '', array( $this, 'checkout_page_section_callback' ), 'checkout_page_section' );
    }
    public function single_product_section_callback() { ?>
            <h1>Single Product Customization Section</h1>
            <h2 class="hookywoo">Custom Hook locations are highlighted in bold, green, italic font</h2>
            <h3 class="hookywoo">Use the WYSIWYG editor titles to know where you want your content to appear</h3>
            <?php echo '<img src="' . plugins_url( 'images/single-product.png', __FILE__ ) . '" > ';
        }
    public function shop_section_callback() { ?>
            <h1>Shop/Archive Page Customization Section</h1>
            <h2 class="hookywoo">Custom Hook locations are highlighted in bold, green, italic font</h2>
            <h3 class="hookywoo">Use the WYSIWYG editor titles to know where you want your content to appear</h3>
            <?php echo '<img src="' . plugins_url( 'images/shop.png', __FILE__ ) . '" > ';
        }
    public function cart_page_section_callback() { ?>
            <h1>Cart Page Customization Section</h1>
            <h2 class="hookywoo">Custom Hook locations are highlighted in bold, green, italic font</h2>
            <h3 class="hookywoo">Use the WYSIWYG editor titles to know where you want your content to appear</h3>
            <?php echo '<img src="' . plugins_url( 'images/cart.png', __FILE__ ) . '" > ';
        }
    public function checkout_page_section_callback() { ?>
            <h1>Checkout Page Customization Section</h1>
            <h2 class="hookywoo">Custom Hook locations are highlighted in bold, green, italic font</h2>
            <h3 class="hookywoo">Use the WYSIWYG editor titles to know where you want your content to appear</h3>
            <?php echo '<img src="' . plugins_url( 'images/checkout1.png', __FILE__ ) . '" ><img src="' . plugins_url( 'images/checkout2.png', __FILE__ ) . '" > ';
        }

    public function setup_single_page_fields() {
        include ( plugin_dir_path( __FILE__ ) . 'includes/single-page-fields.php' );
    }
    public function setup_shop_page_fields() {
        include ( plugin_dir_path( __FILE__ ) . 'includes/shop-page-fields.php' );
    }
    public function setup_cart_page_fields() {
        include ( plugin_dir_path( __FILE__ ) . 'includes/cart-page-fields.php' );
    }
    public function setup_checkout_page_fields() {
        include ( plugin_dir_path( __FILE__ ) . 'includes/checkout-page-fields.php' );
    }

    public function field_callback( $arguments ) {
        // $value = get_option( $arguments['uid'] );
        // if( ! $value ) {
        //     $value = $arguments['default'];
        // }
        $value = get_option( $arguments['uid'] );
        switch( $arguments['type'] ){
            case 'text':
            case 'textarea':
                printf( '<textarea name="%1$s" id="%1$s" rows="3" cols="50">%2$s</textarea>', $arguments['uid'], $value );
                break;
        }
        if( $helper = $arguments['helper'] ) {
            printf( '<span class="helper"> %s</span>', $helper );
        }
        if( $supplemental = $arguments['supplemental'] ){
            printf( '<p class="description">%s</p>', $supplemental );
        }
    }
    }
    new HookyWoo_Plugin();
}