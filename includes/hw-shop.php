<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
$strings = array(
  array(
    'wooHook' => 'woocommerce_before_main_content',
    'priority' => '',
    'elem_start' => '<div',
    'elem_end' => '</div>',
    'elem_class' => 'hw-before-shop-page-content',
    'hooky_content' => get_option('before_shop_page_content'),
  ),
  array(
    'wooHook' => 'woocommerce_archive_description',
    'priority' => '',
    'elem_start' => '<div',
    'elem_end' => '</div>',
    'elem_class' => 'hw-below-shop-title',
    'hooky_content' => get_option('shop_page_description'),
  ),
  array(
    'wooHook' => 'woocommerce_before_shop_loop_item',
    'priority' => '',
    'elem_start' => '<div',
    'elem_end' => '</div>',
    'elem_class' => 'hw-above-loop-image',
    'hooky_content' => get_option('before_loop_product_image'),
  ),
  array(
    'wooHook' => 'woocommerce_shop_loop_item_title',
    'priority' => '',
    'elem_start' => '<div',
    'elem_end' => '</div>',
    'elem_class' => 'hw-after-loop-image',
    'hooky_content' => get_option('after_loop_product_image'),
  ),
  array(
    'wooHook' => 'woocommerce_after_shop_loop_item_title',
    'priority' => '',
    'elem_start' => '<div',
    'elem_end' => '</div>',
    'elem_class' => 'hw-after-loop-title',
    'hooky_content' => get_option('after_loop_product_title'),
  ),
  array(
    'wooHook' => 'woocommerce_after_shop_loop_item',
    'priority' => '',
    'elem_start' => '<div',
    'elem_end' => '</div>',
    'elem_class' => 'hw-before-loop-item-cart-button',
    'hooky_content' => get_option('before_loop_product_cart_button'),
  ),
  array(
    'wooHook' => 'woocommerce_after_main_content',
    'priority' => '',
    'elem_start' => '<div',
    'elem_end' => '</div>',
    'elem_class' => 'hw-after-shop-loop',
    'hooky_content' => get_option('after_main_shop_content'),
  ),
);

require_once( 'loop-classes.php' );
$shop_loop = new Hooky_Loop_Class( $strings );