<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
$fields = array(
  array(
    'uid' => 'before_shop_page_content',
    'label' => 'Before Shop Page Main Content',
    'helper' => '',
    'supplemental' => '*This text WILL appear outside of the page content',
    'section' => 'shop_archive_page_section',
    'type' => 'textarea',
  ),
  array(
    'uid' => 'shop_page_description',
    'label' => 'Shop Page Description',
    'helper' => '',
    'supplemental' => '',
    'section' => 'shop_archive_page_section',
    'type' => 'textarea',
  ),
  array(
    'uid' => 'before_loop_product_image',
    'label' => 'Before Loop Product Image',
    'helper' => '',
    'supplemental' => '*This text WILL interfere with the Sale Flash icon',
    'section' => 'shop_archive_page_section',
    'type' => 'textarea',
  ),
  array(
    'uid' => 'after_loop_product_image',
    'label' => 'After Loop Product Image',
    'helper' => '',
    'supplemental' => '*This text will be included in the product link',
    'section' => 'shop_archive_page_section',
    'type' => 'textarea',
  ),
  array(
    'uid' => 'after_loop_product_title',
    'label' => 'After Loop Product Title',
    'helper' => '',
    'supplemental' => '*This text will be included in the product link',
    'section' => 'shop_archive_page_section',
    'type' => 'textarea',
  ),
  array(
    'uid' => 'before_loop_product_cart_button',
    'label' => 'Before Loop Product Cart Button',
    'helper' => '',
    'supplemental' => '',
    'section' => 'shop_archive_page_section',
    'type' => 'textarea',
  ),
  array(
    'uid' => 'after_main_shop_content',
    'label' => 'After Main Shop Content',
    'helper' => '',
    'supplemental' => '',
    'section' => 'shop_archive_page_section',
    'type' => 'textarea',
  ),
);
foreach( $fields as $field ){
    add_settings_field( $field['uid'], $field['label'], array( $this, 'field_callback' ), 'shop_archive_page_section', $field['section'], $field );
    register_setting( 'shop_archive_page_section', $field['uid'] );
}