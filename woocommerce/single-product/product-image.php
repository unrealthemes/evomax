<?php
/**
 * Single Product Image
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-image.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.8.0
 */

defined( 'ABSPATH' ) || exit;

// Note: `wc_get_gallery_image_html` was added in WC 3.3.2 and did not exist prior. This check protects against theme overrides being used on older versions of WC.
if ( ! function_exists( 'wc_get_gallery_image_html' ) ) {
	return;
}

global $product;

$columns           = apply_filters( 'woocommerce_product_thumbnails_columns', 4 );
$post_thumbnail_id = $product->get_image_id();
$wrapper_classes   = apply_filters(
	'woocommerce_single_product_image_gallery_classes',
	array(
		'woocommerce-product-gallery',
		'woocommerce-product-gallery--' . ( $post_thumbnail_id ? 'with-images' : 'without-images' ),
		'woocommerce-product-gallery--columns-' . absint( $columns ),
		'images',
	)
);
?>

<div id="sync1" class="owl-carousel owl-theme"> 
    
    <?php
    if ( $post_thumbnail_id ) {
    	$html  = '<div class="item">';
    	$html .= sprintf( '<img src="%s" alt="%s">', esc_url( get_the_post_thumbnail_url( $product->get_id() )), esc_html__( 'Awaiting product image', 'woocommerce' ) );
    	$html .= '</div>';
    } else {
    	$html  = '<div class="item">';
    	$html .= sprintf( '<img src="%s" alt="%s">', esc_url( wc_placeholder_img_src( 'woocommerce_single' ) ), esc_html__( 'Awaiting product image', 'woocommerce' ) );
    	$html .= '</div>';
    }

    echo apply_filters( 'woocommerce_single_product_image_thumbnail_html', $html, $post_thumbnail_id ); // phpcs:disable WordPress.XSS.EscapeOutput.OutputNotEscaped

    do_action( 'woocommerce_product_thumbnails' );
    ?>

</div> 

<?php get_template_part('woocommerce/single-product/price', 'mobile'); ?>

<div id="sync2" class="owl-carousel owl-theme"> 

    <?php
    if ( $post_thumbnail_id ) {
        $html  = '<div class="item">';
    	$html .= sprintf( '<img src="%s" alt="%s">', esc_url( get_the_post_thumbnail_url( $product->get_id() )), esc_html__( 'Awaiting product image', 'woocommerce' ) );
    	$html .= '</div>';
    } else {
    	$html  = '<div class="item">';
    	$html .= sprintf( '<img src="%s" alt="%s">', esc_url( wc_placeholder_img_src( 'woocommerce_single' ) ), esc_html__( 'Awaiting product image', 'woocommerce' ) );
    	$html .= '</div>';
    }

    echo apply_filters( 'woocommerce_single_product_image_thumbnail_html', $html, $post_thumbnail_id ); // phpcs:disable WordPress.XSS.EscapeOutput.OutputNotEscaped

    do_action( 'woocommerce_product_thumbnails' );
    ?>

</div> 