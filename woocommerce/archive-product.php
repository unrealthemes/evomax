<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header();

$category_obj = get_queried_object();
$form = get_field('form_cf', 'option');
/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
// do_action( 'woocommerce_before_main_content' );

?>

<div class="container di_content">
    <div class="row">

        <?php do_action( 'echo_kama_breadcrumbs' ); ?>

        <div class="cat_title">

            <div class="cat_title_l">
                <h1><?php woocommerce_page_title(); ?></h1>

                <?php if ( $total = XforWC_Product_Filters_Frontend::$settings['instance']['total'] ) : ?>
                    <span>(<?php echo $total; ?> шт.)</span>
                <?php endif; ?>

            </div>

            <div class="cat_title_r pk_vizible">

                <?php do_action('woo_catalog_ordering'); ?>

                <div class="produkt_short">   
                    <select class="turnintodropdown_demo2">
                        <option value="popularity">По популярности</option>
                        <option value="rating">По рейтингу</option>
                        <option value="date">По новизне</option>
                    </select> 
                </div>

                <div class="produkt_short produkt_short_silver">   
                    <select class="turnintodropdown_demo2">
                        <option>По цене</option>
                        <option value="price">От дешовых</option>
                        <option value="price-desc">От дорогих</option>
                    </select> 
                </div>

            </div>
        </div>

        <div class="row"> 
            <div class="mobile_short xs_vizible">
                <a href="#" class="block_button" onclick="return false">
                    <span>по популярности</span> 
                    <svg width="16" height="10" viewBox="0 0 16 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15 1L8 8L1 0.999999" stroke="url(#paint0_linear_63_3727)" stroke-width="2"/>
                        <defs>
                            <linearGradient id="paint0_linear_63_3727" x1="1.00001" y1="0.999999" x2="1.00343" y2="8.03779" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#74B427"/>
                                <stop offset="1" stop-color="#345D02"/>
                            </linearGradient>
                        </defs>
                    </svg> 
                </a>   
            </div> 

            <a class="sidebar_btn btn" href="#" onclick="return false"> 
                <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M17 2.25H2L8 9.345V14.25L11 15.75V9.345L17 2.25Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg> 
                <span>фильтры</span> 
            </a>  

            <div class="col_2_di sidebar">
                <div class="di_accordeon">
                    <div id="accordion-js" class="accordion"> 
                        
                        <a class="header_menu2_close btn">
                            <span>Закрыть</span>
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15 1L8 8M8 8L15 15M8 8L1 1M8 8L1 15" stroke="white" stroke-width="2"/>
                            </svg> 
                        </a> 

                        <?php do_action( 'ut_main_filter_options' ); ?>

                        <div class="di_obertka filter_itog">
                            <a href="" class="btn_transparent prdctfltr_reset filter_info_refreh">Сбросить фильтры</a>
                            <!-- <a href="#" class="btn">Подобрать септик</a> -->
                        </div>
                    </div>                        
                </div> 

                <?php get_template_part('woocommerce/filter/banners'); ?>

            </div>

            <div class="col_1_di catalog_content">

                <?php
                if ( woocommerce_product_loop() ) {

                    /**
                     * Hook: woocommerce_before_shop_loop.
                     *
                     * @hooked woocommerce_output_all_notices - 10
                     * @hooked woocommerce_result_count - 20
                     * @hooked woocommerce_catalog_ordering - 30
                     */
                    do_action( 'woocommerce_before_shop_loop' );

                    woocommerce_product_loop_start();

                    if ( wc_get_loop_prop( 'total' ) ) {
                        while ( have_posts() ) {
                            the_post();

                            /**
                             * Hook: woocommerce_shop_loop.
                             */
                            do_action( 'woocommerce_shop_loop' );

                            wc_get_template_part( 'content', 'product' );
                        }
                    }

                    woocommerce_product_loop_end();

                    /**
                     * Hook: woocommerce_after_shop_loop.
                     *
                     * @hooked woocommerce_pagination - 10
                     */
                    do_action( 'woocommerce_after_shop_loop' );
                } else {
                    /**
                     * Hook: woocommerce_no_products_found.
                     *
                     * @hooked wc_no_products_found - 10
                     */
                    do_action( 'woocommerce_no_products_found' );
                }

                /**
                 * Hook: woocommerce_after_main_content.
                 *
                 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
                 */
                // do_action( 'woocommerce_after_main_content' );

                /**
                 * Hook: woocommerce_sidebar.
                 *
                 * @hooked woocommerce_get_sidebar - 10
                 */
                // do_action( 'woocommerce_sidebar' );
                ?>    

                <article class="cat_text"> 
                    <?php
					/**
					 * Hook: woocommerce_archive_description.
					 *
					 * @hooked woocommerce_taxonomy_archive_description - 10
					 * @hooked woocommerce_product_archive_description - 10
					 */
					do_action( 'woocommerce_archive_description' );
					?>
                </article> 

            </div>
        </div>
    </div>
</div>

<?php 
if ($form) :
    get_template_part('template-parts/catalog', 'form', ['form' => $form]); 
endif;
?>

<?php
get_footer();