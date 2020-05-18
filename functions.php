<?php /* DiviWooShop functions.php */


function your_theme_enqueue_styles() {

    $parent_style = 'parent-style';

    wp_enqueue_style( $parent_style,
      get_template_directory_uri() . '/style.css');

    wp_enqueue_style( 'DiviWooShop-style',
      get_stylesheet_directory_uri() . '/style.css',
      array($parent_style),
      wp_get_theme()->get('Version')
    );
}

add_action('wp_enqueue_scripts', 'your_theme_enqueue_styles');



/**
 * Woo cart & button adjustments
 */


// To change add to cart text on single product page
add_filter( 'woocommerce_product_single_add_to_cart_text', 'woocommerce_custom_single_add_to_cart_text' );
function woocommerce_custom_single_add_to_cart_text() {
    return __( 'Add to bag', 'woocommerce' );
}
// To change add to cart text on product archives(Collection) page
add_filter( 'woocommerce_product_add_to_cart_text', 'woocommerce_custom_product_add_to_cart_text' );
function woocommerce_custom_product_add_to_cart_text() {
    return __( 'Add to bag', 'woocommerce' );
}
