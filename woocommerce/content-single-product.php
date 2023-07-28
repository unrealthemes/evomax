<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

$novelty = get_post_meta( $product->get_id(), '_novelty', true );
$promotion = get_post_meta( $product->get_id(), '_promotion', true );
$blocks = get_field( 'blocks_prp', 'option' );
$product_blocks_page = get_field( 'product_blocks_prp', 'option' );
$found_cheaper_form = get_field( 'found_cheaper_form_prp', 'option' );
$product_order_form = get_field( 'product_order_form_prp', 'option' );

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
// do_action( 'woocommerce_before_single_product' );

// if ( post_password_required() ) {
// 	echo get_the_password_form(); // WPCS: XSS ok.
// 	return;
// }
?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>

    <div class="container di_content">
        <div class="row">
            
            <?php do_action( 'echo_kama_breadcrumbs' ); ?>

            <div class="prd_top">

                <h1><?php echo $product->get_name(); ?></h1>

                <div class="prd_toplink visible_ps">

                    <!-- <a href="#" class="icon">
                        <svg width="22" height="16" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20.1671 1.7388H17.4171C16.4065 1.7388 15.5829 2.51884 15.5829 3.47759V14.2612H14.2079V6.95648C14.2079 5.99773 13.387 5.21769 12.375 5.21769H9.625C8.61438 5.21769 7.79212 5.99773 7.79212 6.95648V14.2612H6.41713V1.7388C6.41713 0.780048 5.59487 0 4.58287 0H1.83288C0.82225 0 0 0.780048 0 1.7388V15.1313C0 15.6113 0.411125 16 0.917125 16H21.0829C21.5889 16 22 15.6113 22 15.1313V3.47759C22 2.51884 21.1777 1.7388 20.1671 1.7388ZM1.83288 14.2612V1.7388H4.58287V14.2612H1.83288ZM9.625 14.2612V6.95648H12.375V14.2612H9.625ZM17.4171 14.2612V3.47759H20.1671V14.2612H17.4171Z" fill="#74B427"/>
                        </svg> 
                        в Сравнение
                    </a> -->

                    <!-- <a href="#" class="icon">
                        <svg width="21" height="19" viewBox="0 0 21 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18.394 1.6661C16.2173 -0.554091 12.6795 -0.554091 10.5053 1.6661L9.99992 2.18219L9.49453 1.6661C7.32032 -0.555368 3.7813 -0.555368 1.60709 1.6661C-0.523332 3.84159 -0.537093 7.29068 1.57456 9.68845C3.50108 11.8729 9.18303 16.5969 9.42447 16.7961C9.5871 16.9328 9.78475 16.9993 9.97991 16.9993H9.99992C10.2026 17.0082 10.4065 16.9367 10.5754 16.7961C10.8156 16.5969 16.4988 11.8742 18.4253 9.68718C20.5369 7.29068 20.5232 3.84159 18.394 1.6661ZM17.113 8.48127C15.6118 10.1854 11.4823 13.6996 9.99992 14.9464C8.51751 13.6996 4.38927 10.1854 2.88684 8.48255C1.41444 6.80908 1.40068 4.42793 2.85557 2.94099C3.59865 2.18219 4.57442 1.80407 5.55018 1.80407C6.52595 1.80407 7.50171 2.18219 8.24605 2.94099L9.35692 4.07536C9.48827 4.21077 9.65465 4.29125 9.82979 4.31807C10.1138 4.38194 10.4215 4.30019 10.6429 4.07536L11.7538 2.94099C13.24 1.42339 15.6581 1.42467 17.1443 2.94099C18.5992 4.42793 18.5854 6.80908 17.113 8.48127Z" fill="#74B427"/>
                        </svg> 
                        в Избранное
                    </a> -->
                    
                    <a href="#" class="icon open_popup" data-popup-id="product_share" onclick="return false">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 9V15.4C2 15.8243 2.21071 16.2313 2.58579 16.5314C2.96086 16.8314 3.46957 17 4 17H16C16.5304 17 17.0391 16.8314 17.4142 16.5314C17.7893 16.2313 18 15.8243 18 15.4V9" stroke="#74B427" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M13.3332 4.99999L9.99984 1.66666L6.6665 4.99999" stroke="#74B427" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M10 1.66666V12.5" stroke="#74B427" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg> 
                        поделиться
                    </a>

                </div>

            </div>
            
            <div class="row prod_row ">
                <div class="prod_l">
                    <div class="row prd_top_row">
                    
                        <div class="prod_slider">
                            <div class="item_galery"> 

                                <?php if ( $novelty ) : ?>
                                    <div class="label_new">Новинка</div>
                                <?php endif; ?>

                                <?php if ( $promotion ) : ?>
                                    <div class="label_sale">Акция</div>
                                <?php endif; ?>
                                
                                <div class="img_icon visible_xs">
                                    <!-- <a href="#" class="img_icon_compare">
                                        <img src="<?php echo THEME_URI; ?>/img/label_compare.svg" alt=""> 
                                    </a> -->
                                    <!-- <a href="#" class="limg_icon_wishlist">
                                        <img src="<?php echo THEME_URI; ?>/img/label_wishlist.svg" alt="">
                                    </a>  -->
                                    <a href="#" class="img_icon_share open_popup" data-popup-id="product_share" onclick="return false">
                                        <img src="<?php echo THEME_URI; ?>/img/share.svg" alt="Share">
                                    </a>
                                </div>
                                
                                <?php
                                /**
                                 * Hook: woocommerce_before_single_product_summary.
                                 *
                                 * @hooked woocommerce_show_product_sale_flash - 10
                                 * @hooked woocommerce_show_product_images - 20
                                 */
                                do_action( 'woocommerce_before_single_product_summary' );
                                ?>

                            </div>
                        </div>
                        
                        <?php 
                        get_template_part(
                            'woocommerce/single-product/characteristics', 
                            '', 
                            [
                                'characteristics' => get_field( 'characteristics_prstt', $product->get_id() ),
                            ]
                        ); 
                        ?>

                    </div>
                    
                    <div class="more_text_litle">
                        <?php echo wpautop($product->get_description()); ?>
                    </div> 

                    <?php if ( strlen($product->get_description()) > 585 ) : ?>
                        <div class="learn_more_text_litle">
                            <a class="learn_morebtn_text_litle btn_white" href="#">Читать полностью </a>
                        </div>
                    <?php endif; ?>
                    
                    <?php get_template_part('woocommerce/single-product/credit', 'mobile'); ?>
                      
                    <?php get_template_part('woocommerce/single-product/blocks', '', ['blocks' => $blocks]); ?>
                    
                </div>
                
                
                <div class="prod_r visible_ps">

                    <?php get_template_part('woocommerce/single-product/price', 'desctop'); ?>
                    
                    <?php 
                    get_template_part(
                        'woocommerce/single-product/info', 
                        'block', 
                        [
                            'info' => get_field( 'info_prp', 'option' ),
                            'txt_btn' => get_field( 'txt_btn_prp', 'option' ),
                            'form' => get_field( 'form_prp', 'option' )
                        ]
                    ); 
                    ?>
                    
                </div> 
            </div>
        </div>
    </div> 

    <?php 
    get_template_part(
        'template-parts/modals/share', 
    ); 
    ?>
    
    <?php 
    get_template_part(
        'template-parts/modals/request-call', 
        null, 
        [
            'id' => 'product_order', 
            'form' => $product_order_form
        ]
    ); 
    ?>
    
    <?php 
    get_template_part(
        'template-parts/modals/request-call', 
        null, 
        [
            'id' => 'found_cheaper', 
            'form' => $found_cheaper_form
        ]
    ); 
    ?>
    
    <!--noindex-->
    <?php 
    $args = array(
        'p' => $product_blocks_page->ID,
        'post_type' => 'page',
        'post_status' => 'bublish',
        'posts_per_page' => 1,
    );
    $query = new WP_Query( $args );
     
    if ( $query->have_posts() ) :
        while( $query->have_posts() ) : 
            $query->the_post();
            the_content();
        endwhile;
    endif;
    wp_reset_postdata();
    ?>
    <!--/noindex-->

	<!-- <div class="summary entry-summary"> -->
		<?php
		/**
		 * Hook: woocommerce_single_product_summary.
		 *
		 * @hooked woocommerce_template_single_title - 5
		 * @hooked woocommerce_template_single_rating - 10
		 * @hooked woocommerce_template_single_price - 10
		 * @hooked woocommerce_template_single_excerpt - 20
		 * @hooked woocommerce_template_single_add_to_cart - 30
		 * @hooked woocommerce_template_single_meta - 40
		 * @hooked woocommerce_template_single_sharing - 50
		 * @hooked WC_Structured_Data::generate_product_data() - 60
		 */
		// do_action( 'woocommerce_single_product_summary' );
		?>
	<!-- </div> -->

	<?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
	// do_action( 'woocommerce_after_single_product_summary' );
	?>
</div>

<?php // do_action( 'woocommerce_after_single_product' ); ?>
