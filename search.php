<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package unreal-themes
 */

get_header();

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
				<h1>
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'unreal-themes' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>
			</div>
		</div>
		<div class="row"> 
			<div class="col_1_di catalog_content">
				
				<?php
				if ( have_posts() ) :

					while ( have_posts() ) :
						the_post();
							echo '<div class="item_list products">';
							/**
							 * Hook: woocommerce_shop_loop.
							*/
							do_action( 'woocommerce_shop_loop' );

							wc_get_template_part( 'content', 'product' );

							echo '</div>';
					endwhile;

				else :
					/**
					 * Hook: woocommerce_no_products_found.
					*
					* @hooked wc_no_products_found - 10
					*/
					do_action( 'woocommerce_no_products_found' );
				endif;
				?>    

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