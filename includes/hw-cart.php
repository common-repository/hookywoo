<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
$strings = array(
  array(
    'wooHook' => 'woocommerce_before_cart',
    'priority' => '',
    'elem_start' => '<div',
    'elem_end' => '</div>',
    'elem_class' => 'hw-above-cart',
    'hooky_content' => get_option('above_cart'),
  ),
  array(
    'wooHook' => 'woocommerce_before_cart_contents',
    'priority' => '',
    'elem_start' => '<tr><td colspan="6" ',
    'elem_end' => '</td></tr>',
    'elem_class' => 'hw-before-cart-table-items',
    'hooky_content' => get_option('before_cart_table_items'),
  ),
  array(
    'wooHook' => 'woocommerce_cart_contents',
    'priority' => '',
    'elem_start' => '<tr><td colspan="6" ',
    'elem_end' => '</td></tr>',
    'elem_class' => 'hw-after-cart-table-items',
    'hooky_content' => get_option('after_cart_table_items'),
  ),
  array(
    'wooHook' => 'woocommerce_cart_coupon',
    'priority' => '',
    'elem_start' => '<div',
    'elem_end' => '</div>',
    'elem_class' => 'hw-after-cart-coupon-button',
    'hooky_content' => get_option('after_cart_coupon_button'),
  ),
  array(
    'wooHook' => 'woocommerce_after_cart_contents',
    'priority' => '',
    'elem_start' => '<tr><td colspan="6" ',
    'elem_end' => '</td></tr>',
    'elem_class' => 'hw-after-cart-contents',
    'hooky_content' => get_option('after_cart_contents'),
  ),
  array(
    'wooHook' => 'woocommerce_after_cart_table',
    'priority' => '',
    'elem_start' => '<div',
    'elem_end' => '</div>',
    'elem_class' => 'hw-below-cart-table',
    'hooky_content' => get_option('below_cart_table'),
  ),
  array(
    'wooHook' => 'woocommerce_before_cart_totals',
    'priority' => '',
    'elem_start' => '<div',
    'elem_end' => '</div>',
    'elem_class' => 'hw-above-cart-totals',
    'hooky_content' => get_option('above_cart_totals'),
  ),
  array(
    'wooHook' => 'woocommerce_cart_totals_before_shipping',
    'priority' => '',
    'elem_start' => '<div',
    'elem_end' => '</div>',
    'elem_class' => 'hw-before-shipping-totals',
    'hooky_content' => get_option('before_shipping_totals'),
  ),
  array(
    'wooHook' => 'woocommerce_before_shipping_calculator',
    'priority' => '',
    'elem_start' => '<div',
    'elem_end' => '</div>',
    'elem_class' => 'hw-after-shipping-options',
    'hooky_content' => get_option('after_shipping_options'),
  ),
  array(
    'wooHook' => 'woocommerce_after_shipping_calculator',
    'priority' => '',
    'elem_start' => '<div',
    'elem_end' => '</div>',
    'elem_class' => 'hw-after-shipping-calculator',
    'hooky_content' => get_option('after_shipping_calculator'),
  ),
  array(
    'wooHook' => 'woocommerce_cart_totals_before_order_total',
    'priority' => '',
    'elem_start' => '<div',
    'elem_end' => '</div>',
    'elem_class' => 'hw-before-cart-total',
    'hooky_content' => get_option('before_cart_total'),
  ),
  array(
    'wooHook' => 'woocommerce_proceed_to_checkout',
    'priority' => '',
    'elem_start' => '<div',
    'elem_end' => '</div>',
    'elem_class' => 'hw-before-checkout-button',
    'hooky_content' => get_option('before_checkout_button'),
  ),
  array(
    'wooHook' => 'woocommerce_after_cart_totals',
    'priority' => '',
    'elem_start' => '<div',
    'elem_end' => '</div>',
    'elem_class' => 'hw-after-checkout-button',
    'hooky_content' => get_option('after_checkout_button'),
  ),
  array(
    'wooHook' => 'woocommerce_after_cart',
    'priority' => '',
    'elem_start' => '<div',
    'elem_end' => '</div>',
    'elem_class' => 'hw-after-cart',
    'hooky_content' => get_option('bottom_of_cart_area'),
  ),

);
require_once( 'loop-classes.php' );
$cart_loop = new Hooky_Loop_Class( $strings );