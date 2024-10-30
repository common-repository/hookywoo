<?php
$fields = array(
   array(
    'uid' => 'above_cart',
    'label' => 'Above Cart',
    'helper' => '',
    'supplemental' => '',
    'section' => 'cart_page_section',
    'type' => 'textarea',
  ),
  array(
    'uid' => 'before_cart_table_items',
    'label' => 'Before Cart Table Items',
    'helper' => '',
    'supplemental' => 'This will span all 6 columns in the cart table.',
    'section' => 'cart_page_section',
    'type' => 'textarea',
  ),
  array(
    'uid' => 'after_cart_table_items',
    'label' => 'After Cart Table Items',
    'helper' => '',
    'supplemental' => 'This will span all 6 columns in the cart table.',
    'section' => 'cart_page_section',
    'type' => 'textarea',
  ),
  array(
    'uid' => 'after_cart_coupon_button',
    'label' => 'After Cart Coupon Button',
    'helper' => '',
    'supplemental' => '',
    'section' => 'cart_page_section',
    'type' => 'textarea',
  ),
  array(
    'uid' => 'after_cart_contents',
    'label' => 'After Cart Contents',
    'helper' => '',
    'supplemental' => 'This will span all 6 columns in the cart table.',
    'section' => 'cart_page_section',
    'type' => 'textarea',
  ),
  array(
    'uid' => 'below_cart_table',
    'label' => 'Below Cart Table',
    'helper' => '',
    'supplemental' => '',
    'section' => 'cart_page_section',
    'type' => 'textarea',
  ),
  array(
    'uid' => 'above_cart_totals',
    'label' => 'Above Cart Totals',
    'helper' => '',
    'supplemental' => '',
    'section' => 'cart_page_section',
    'type' => 'textarea',
  ),
  array(
    'uid' => 'before_cart_total',
    'label' => 'Before Cart Total',
    'helper' => '',
    'supplemental' => '',
    'section' => 'cart_page_section',
    'type' => 'textarea',
  ),
  array(
    'uid' => 'before_shipping_totals',
    'label' => 'Before Shipping Totals',
    'helper' => '',
    'supplemental' => '',
    'section' => 'cart_page_section',
    'type' => 'textarea',
  ),
  array(
    'uid' => 'after_shipping_options',
    'label' => 'After Shipping Options',
    'helper' => '',
    'supplemental' => '',
    'section' => 'cart_page_section',
    'type' => 'textarea',
  ),
  array(
    'uid' => 'after_shipping_calculator',
    'label' => 'After Shipping Calculator',
    'helper' => '',
    'supplemental' => '',
    'section' => 'cart_page_section',
    'type' => 'textarea',
  ),
  array(
    'uid' => 'before_checkout_button',
    'label' => 'Before Checkout Button',
    'helper' => '',
    'supplemental' => '',
    'section' => 'cart_page_section',
    'type' => 'textarea',
  ),
  array(
    'uid' => 'after_checkout_button',
    'label' => 'After Checkout Button',
    'helper' => '',
    'supplemental' => '',
    'section' => 'cart_page_section',
    'type' => 'textarea',
  ),
  array(
    'uid' => 'bottom_of_cart_area',
    'label' => 'Bottom of Cart Area',
    'helper' => '',
    'supplemental' => '',
    'section' => 'cart_page_section',
    'type' => 'textarea',
  ),
);
foreach( $fields as $field ){
    add_settings_field( $field['uid'], $field['label'], array( $this, 'field_callback' ), 'cart_page_section', $field['section'], $field );
    register_setting( 'cart_page_section', $field['uid'] );
}