<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
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

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}

$img_url = get_the_post_thumbnail_url( $product->get_id(), 'full' );
$img_url = ( !$img_url ) ? wc_placeholder_img_src() : $img_url;
$number_persons = get_post_meta( $product->get_id(), '_number_persons', true );
$processing_volume = get_post_meta( $product->get_id(), '_processing_volume', true );
$salvo_drop = get_post_meta( $product->get_id(), '_salvo_drop', true );
$turnkey_installation = get_post_meta( $product->get_id(), '_turnkey_installation', true );
$novelty = get_post_meta( $product->get_id(), '_novelty', true );
$promotion = get_post_meta( $product->get_id(), '_promotion', true );
$product_order_install_form = get_field( 'product_order_install_form_prp', 'option' );
$product_order_click_form = get_field( 'product_order_click_form_prp', 'option' );
?>

<div <?php wc_product_class( 'item object_item', $product ); ?> > 
    <div class="object_item_vn">

        <?php if ( $novelty ) : ?>
            <div class="label_new">Новинка</div>
        <?php endif; ?>

        <?php if ( $promotion ) : ?>
            <div class="label_sale">Акция</div>
        <?php endif; ?>
        
        <!-- <a href="#" class="label_compare">
            <img src="<?php // echo THEME_URI; ?>/img/label_compare.svg" alt="compare"> 
        </a> -->
        
        <!-- <a href="#" class="label_wishlist">
            <img src="<?php // echo THEME_URI; ?>/img/label_wishlist.svg" alt="wishlist">
        </a>  -->
        
        <a href="<?php echo $product->get_permalink(); ?>" class="object_item_img">
            <img src="<?php echo esc_attr($img_url); ?>" alt="<?php echo esc_attr($product->get_name()); ?>">
        </a>
        
        <div class="object_desc">

            <div class="object_item_p">Автономный септик для дачи</div>

            <div class="object_item_title">
                <a href="<?php echo $product->get_permalink(); ?>">
                    <?php echo $product->get_name(); ?>
                </a>
            </div> 

            <ul class="object_ul">

                <?php if ( $number_persons ) : ?>
                    <li class="object_li">
                        <div class="object_li_title">Количество человек</div>
                        <span><?php echo esc_html($number_persons); ?></span>
                    </li>
                <?php endif; ?>

                <?php if ( $processing_volume ) : ?>
                    <li class="object_li">
                        <div class="object_li_title">Объем переработки</div>
                        <span><?php echo esc_html($number_persons); ?> м³</span>
                    </li>
                <?php endif; ?>

                <?php if ( $salvo_drop ) : ?>
                    <li class="object_li">
                        <div class="object_li_title">Залповый сброс</div>
                        <span><?php echo esc_html($salvo_drop); ?> л</span>
                    </li>
                <?php endif; ?>

                <?php if ( $product->get_price() ) : ?>
                    <li class="object_li object_li_price">
                        <div class="object_li_title">Стоимость</div>
                        <span><?php echo wc_price($product->get_price()); ?></span>
                    </li>
                <?php endif; ?>

                <?php if ( $turnkey_installation ) : ?>
                    <li class="object_li object_li_montash_price">
                        <div class="object_li_title">Монтаж под ключ </div>
                        <span>от <?php echo wc_price($turnkey_installation); ?></span>
                    </li> 
                <?php endif; ?>

            </ul>
        
            <div class="object_desc_btn">

                <a href="#" class="btn_transparent open_popup" data-popup-id="product_order_install" onclick="return false">
                    заказать с установкой
                </a>

                <a href="#" class="btn open_popup" data-popup-id="product_order_click" onclick="return false">
                    заказать в 1 клик
                </a>

            </div> 
        </div> 

        <?php 
        get_template_part(
            'template-parts/modals/request-call', 
            null, 
            [
                'id' => 'product_order_install', 
                'form' => $product_order_install_form
            ]
        ); 
        ?>

        <?php 
        get_template_part(
            'template-parts/modals/request-call', 
            null, 
            [
                'id' => 'product_order_click', 
                'form' => $product_order_click_form
            ]
        ); 
        ?>

        <?php
        /**
         * Hook: woocommerce_before_shop_loop_item.
         *
         * @hooked woocommerce_template_loop_product_link_open - 10
         */
        // do_action( 'woocommerce_before_shop_loop_item' );

        /**
         * Hook: woocommerce_before_shop_loop_item_title.
         *
         * @hooked woocommerce_show_product_loop_sale_flash - 10
         * @hooked woocommerce_template_loop_product_thumbnail - 10
         */
        // do_action( 'woocommerce_before_shop_loop_item_title' );

        /**
         * Hook: woocommerce_shop_loop_item_title.
         *
         * @hooked woocommerce_template_loop_product_title - 10
         */
        // do_action( 'woocommerce_shop_loop_item_title' );

        /**
         * Hook: woocommerce_after_shop_loop_item_title.
         *
         * @hooked woocommerce_template_loop_rating - 5
         * @hooked woocommerce_template_loop_price - 10
         */
        // do_action( 'woocommerce_after_shop_loop_item_title' );

        /**
         * Hook: woocommerce_after_shop_loop_item.
         *
         * @hooked woocommerce_template_loop_product_link_close - 5
         * @hooked woocommerce_template_loop_add_to_cart - 10
         */
        // do_action( 'woocommerce_after_shop_loop_item' );
        ?> 
    </div> 
</div>