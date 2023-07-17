<?php

class UT_Product {

    private static $_instance = null;

    static public function get_instance() {

        if ( is_null( self::$_instance ) ) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    public function __construct() {

        add_action( 'woocommerce_product_options_general_product_data', [$this, 'tab_price_add_custom_fields'] );
        add_action( 'woocommerce_process_product_meta', [ $this, 'product_custom_fields_save' ], 10 );

    }

    public function tab_price_add_custom_fields() {

        global $product, $post;

        echo '<div class="options_group">';

            woocommerce_wp_text_input( [
                'id'                => '_number_persons',
                'label'             => 'Количество человек (чел)',
                'type'              => 'number',
                'custom_attributes' => [
                    'step' => '1',
                    'min'  => '0',
                ],
            ] );
            
            woocommerce_wp_text_input( [
                'id'                => '_processing_volume',
                'label'             => 'Объем переработки (м3)',
                'type'              => 'number',
                'custom_attributes' => [
                    'step' => '1',
                    'min'  => '0',
                ],
            ] );
            
            woocommerce_wp_text_input( [
                'id'                => '_salvo_drop',
                'label'             => 'Залповый сброс (л)',
                'type'              => 'number',
                'custom_attributes' => [
                    'step' => '1',
                    'min'  => '0',
                ],
            ] );
            
            woocommerce_wp_text_input( [
                'id'                => '_turnkey_installation',
                'label'             => 'Монтаж под ключ (₽)',
                'type'              => 'number',
                'custom_attributes' => [
                    'step' => '1',
                    'min'  => '0',
                ],
            ] );

            woocommerce_wp_checkbox( array(
                'id'            => '_novelty',
                'wrapper_class' => 'show_if_simple',
                'label'         => 'Новинка',
             ) );
            
             woocommerce_wp_checkbox( array(
                'id'            => '_promotion',
                'wrapper_class' => 'show_if_simple',
                'label'         => 'Акция',
             ) );

        echo '</div>';
    }

    public function product_custom_fields_save( $post_id ) {

        if ( isset( $_POST['_novelty'] ) ) {
            update_post_meta( $post_id, '_novelty', $_POST['_novelty'] );
        }

        if ( isset( $_POST['_promotion'] ) ) {
            update_post_meta( $post_id, '_promotion', $_POST['_promotion'] );
        }

        update_post_meta( $post_id, '_number_persons', $_POST['_number_persons'] );
        update_post_meta( $post_id, '_processing_volume', $_POST['_processing_volume'] );
        update_post_meta( $post_id, '_salvo_drop', $_POST['_salvo_drop'] );
        update_post_meta( $post_id, '_turnkey_installation', $_POST['_turnkey_installation'] );
    }

} 