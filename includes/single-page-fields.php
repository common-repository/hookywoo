<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
$fields = array(
    array(
        'uid' => 'before_product_title',
        'label' => 'Before Product Title',
        'helper' => '',
        'supplemental' => '',
        'section' => 'single_product_page_section',
        'type' => 'textarea',
    ),
    array(
        'uid' => 'after_short_description',
        'label' => 'After Short Description',
        'helper' => '',
        'supplemental' => '',
        'section' => 'single_product_page_section',
        'type' => 'textarea',
    ),
    array(
        'uid' => 'before_variations_content',
        'label' => 'Before Varitions Section',
        'helper' => '',
        'supplemental' => '',
        'section' => 'single_product_page_section',
        'type' => 'textarea',
    ),
    array(
        'uid' => 'after_add_to_cart_button',
        'label' => 'After Add to Cart button',
        'helper' => '',
        'supplemental' => '',
        'section' => 'single_product_page_section',
        'type' => 'textarea',
    ),
    array(
        'uid' => 'after_variations_content',
        'label' => 'After Variations',
        'helper' => '',
        'supplemental' => '',
        'section' => 'single_product_page_section',
        'type' => 'textarea',
    ),
    array(
        'uid' => 'before_product_meta',
        'label' => 'Before Product Meta',
        'helper' => '',
        'supplemental' => '',
        'section' => 'single_product_page_section',
        'type' => 'textarea',
    ),
    array(
        'uid' => 'after_product_meta',
        'label' => 'After Product Meta',
        'helper' => '',
        'supplemental' => '',
        'section' => 'single_product_page_section',
        'type' => 'textarea',
    ),
    array(
        'uid' => 'before_tabs_section',
        'label' => 'Before Tabs Section',
        'helper' => '',
        'supplemental' => '',
        'section' => 'single_product_page_section',
        'type' => 'textarea',
    ),
    array(
        'uid' => 'after_product_content',
        'label' => 'After Product Content',
        'helper' => '',
        'supplemental' => '',
        'section' => 'single_product_page_section',
        'type' => 'textarea',
    ),
);
foreach( $fields as $field ){
    add_settings_field( $field['uid'], $field['label'], array( $this, 'field_callback' ), 'single_product_page_section', $field['section'], $field );
    register_setting( 'single_product_page_section', $field['uid'] );
}