<?php

class UT_Guneberg_Blocks {

    private static $_instance = null; 

    static public function get_instance() {

        if ( is_null( self::$_instance ) ) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    public function __construct() {

        add_filter( 'block_categories_all', [$this, 'filter_block_categories_when_post_provided'], 10, 2 );
        add_action( 'acf/init', [$this, 'acf_init_block_types'] );
    }

    public function filter_block_categories_when_post_provided( $block_categories, $editor_context ) {

        if ( ! empty( $editor_context->post ) ) {
            array_push(
                $block_categories,
                array(
                    'slug'  => 'evomax',
                    'title' => 'Эвомакс',
                    'icon'  => 'evomax_icon',
                )
            );
        }
        return $block_categories;
    }

    public function acf_init_block_types() {

        if ( function_exists('acf_register_block_type') ) {
    
            acf_register_block_type([
                'name'              => 'breadcrumbs',
                'title'             => 'Breadcrumbs',
                // 'description'       => __('A custom description.'),
                'render_template'   => 'template-parts/gutenberg-blocks/breadcrumbs.php',
                'category'          => 'evomax',
                'icon'              => 'evomax_icon',
                'keywords'          => [ 'Breadcrumbs' ],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'is_preview' => true
                        ]
                    ]
                ]
            ]);
            
            acf_register_block_type([
                'name'              => 'title',
                'title'             => 'Заглавие',
                // 'description'       => __('A custom description.'),
                'render_template'   => 'template-parts/gutenberg-blocks/title.php',
                'category'          => 'evomax',
                'icon'              => 'evomax_icon',
                'keywords'          => [ 'Заглавие' ],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'is_preview' => true
                        ]
                    ]
                ]
            ]);
            
            acf_register_block_type([
                'name'              => 'text',
                'title'             => 'Текст',
                // 'description'       => __('A custom description.'),
                'render_template'   => 'template-parts/gutenberg-blocks/text.php',
                'category'          => 'evomax',
                'icon'              => 'evomax_icon',
                'keywords'          => [ 'Текст' ],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'is_preview' => true
                        ]
                    ]
                ]
            ]);
            
            acf_register_block_type([
                'name'              => 'team',
                'title'             => 'Команда',
                // 'description'       => __('A custom description.'),
                'render_template'   => 'template-parts/gutenberg-blocks/team.php',
                'category'          => 'evomax',
                'icon'              => 'evomax_icon',
                'keywords'          => [ 'Команда' ],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'is_preview' => true
                        ]
                    ]
                ]
            ]);
            
            acf_register_block_type([
                'name'              => 'certificates',
                'title'             => 'Сертификаты',
                // 'description'       => __('A custom description.'),
                'render_template'   => 'template-parts/gutenberg-blocks/certificates.php',
                'category'          => 'evomax',
                'icon'              => 'evomax_icon',
                'keywords'          => [ 'Сертификаты' ],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'is_preview' => true
                        ]
                    ]
                ]
            ]);
            
            acf_register_block_type([
                'name'              => 'col2',
                'title'             => '2 колонки',
                // 'description'       => __('A custom description.'),
                'render_template'   => 'template-parts/gutenberg-blocks/col2.php',
                'category'          => 'evomax',
                'icon'              => 'evomax_icon',
                'keywords'          => [ '2 колонки' ],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'is_preview' => true
                        ]
                    ]
                ]
            ]);
            
            acf_register_block_type([
                'name'              => 'cities',
                'title'             => 'Города',
                // 'description'       => __('A custom description.'),
                'render_template'   => 'template-parts/gutenberg-blocks/cities.php',
                'category'          => 'evomax',
                'icon'              => 'evomax_icon',
                'keywords'          => [ 'Города' ],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'is_preview' => true
                        ]
                    ]
                ]
            ]);
            
            acf_register_block_type([
                'name'              => 'banner',
                'title'             => 'Банер',
                // 'description'       => __('A custom description.'),
                'render_template'   => 'template-parts/gutenberg-blocks/banner.php',
                'category'          => 'evomax',
                'icon'              => 'evomax_icon',
                'keywords'          => [ 'Банер' ],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'is_preview' => true
                        ]
                    ]
                ]
            ]);
            
            acf_register_block_type([
                'name'              => 'banner-2',
                'title'             => 'Банер 2',
                // 'description'       => __('A custom description.'),
                'render_template'   => 'template-parts/gutenberg-blocks/banner-2.php',
                'category'          => 'evomax',
                'icon'              => 'evomax_icon',
                'keywords'          => [ 'Банер' ],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'is_preview' => true
                        ]
                    ]
                ]
            ]);
            
            acf_register_block_type([
                'name'              => 'banner-3',
                'title'             => 'Банер 3',
                // 'description'       => __('A custom description.'),
                'render_template'   => 'template-parts/gutenberg-blocks/banner-3.php',
                'category'          => 'evomax',
                'icon'              => 'evomax_icon',
                'keywords'          => [ 'Банер' ],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'is_preview' => true
                        ]
                    ]
                ]
            ]);
            
            acf_register_block_type([
                'name'              => 'banner-4',
                'title'             => 'Банер 4',
                // 'description'       => __('A custom description.'),
                'render_template'   => 'template-parts/gutenberg-blocks/banner-4.php',
                'category'          => 'evomax',
                'icon'              => 'evomax_icon',
                'keywords'          => [ 'Банер' ],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'is_preview' => true
                        ]
                    ]
                ]
            ]);
            
            acf_register_block_type([
                'name'              => 'banner-5',
                'title'             => 'Банер 5',
                // 'description'       => __('A custom description.'),
                'render_template'   => 'template-parts/gutenberg-blocks/banner-5.php',
                'category'          => 'evomax',
                'icon'              => 'evomax_icon',
                'keywords'          => [ 'Банер' ],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'is_preview' => true
                        ]
                    ]
                ]
            ]);
            
            acf_register_block_type([
                'name'              => 'steps',
                'title'             => 'Шаги',
                // 'description'       => __('A custom description.'),
                'render_template'   => 'template-parts/gutenberg-blocks/steps.php',
                'category'          => 'evomax',
                'icon'              => 'evomax_icon',
                'keywords'          => [ 'Шаги' ],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'is_preview' => true
                        ]
                    ]
                ]
            ]);
            
            acf_register_block_type([
                'name'              => 'work',
                'title'             => 'Табы',
                // 'description'       => __('A custom description.'),
                'render_template'   => 'template-parts/gutenberg-blocks/work.php',
                'category'          => 'evomax',
                'icon'              => 'evomax_icon',
                'keywords'          => [ 'Табы' ],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'is_preview' => true
                        ]
                    ]
                ]
            ]);
            
            acf_register_block_type([
                'name'              => 'blocks-1',
                'title'             => 'Блоки 1',
                // 'description'       => __('A custom description.'),
                'render_template'   => 'template-parts/gutenberg-blocks/blocks-1.php',
                'category'          => 'evomax',
                'icon'              => 'evomax_icon',
                'keywords'          => [ 'Блоки' ],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'is_preview' => true
                        ]
                    ]
                ]
            ]);
            
            acf_register_block_type([
                'name'              => 'blocks-2',
                'title'             => 'Блоки 2',
                // 'description'       => __('A custom description.'),
                'render_template'   => 'template-parts/gutenberg-blocks/blocks-2.php',
                'category'          => 'evomax',
                'icon'              => 'evomax_icon',
                'keywords'          => [ 'Блоки' ],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'is_preview' => true
                        ]
                    ]
                ]
            ]);
            
            acf_register_block_type([
                'name'              => 'blocks-3',
                'title'             => 'Блоки 3',
                // 'description'       => __('A custom description.'),
                'render_template'   => 'template-parts/gutenberg-blocks/blocks-3.php',
                'category'          => 'evomax',
                'icon'              => 'evomax_icon',
                'keywords'          => [ 'Блоки' ],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'is_preview' => true
                        ]
                    ]
                ]
            ]);
            
            acf_register_block_type([
                'name'              => 'blocks-4',
                'title'             => 'Блоки 4',
                // 'description'       => __('A custom description.'),
                'render_template'   => 'template-parts/gutenberg-blocks/blocks-4.php',
                'category'          => 'evomax',
                'icon'              => 'evomax_icon',
                'keywords'          => [ 'Блоки' ],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'is_preview' => true
                        ]
                    ]
                ]
            ]);
            
            acf_register_block_type([
                'name'              => 'blocks-5',
                'title'             => 'Блоки 5',
                // 'description'       => __('A custom description.'),
                'render_template'   => 'template-parts/gutenberg-blocks/blocks-5.php',
                'category'          => 'evomax',
                'icon'              => 'evomax_icon',
                'keywords'          => [ 'Блоки' ],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'is_preview' => true
                        ]
                    ]
                ]
            ]);
            
            acf_register_block_type([
                'name'              => 'blocks-6',
                'title'             => 'Блоки 6',
                // 'description'       => __('A custom description.'),
                'render_template'   => 'template-parts/gutenberg-blocks/blocks-6.php',
                'category'          => 'evomax',
                'icon'              => 'evomax_icon',
                'keywords'          => [ 'Блоки' ],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'is_preview' => true
                        ]
                    ]
                ]
            ]);
            
            acf_register_block_type([
                'name'              => 'blocks-7',
                'title'             => 'Блоки 7',
                // 'description'       => __('A custom description.'),
                'render_template'   => 'template-parts/gutenberg-blocks/blocks-7.php',
                'category'          => 'evomax',
                'icon'              => 'evomax_icon',
                'keywords'          => [ 'Блоки' ],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'is_preview' => true
                        ]
                    ]
                ]
            ]);
            
            acf_register_block_type([
                'name'              => 'blocks-8',
                'title'             => 'Блоки 8',
                // 'description'       => __('A custom description.'),
                'render_template'   => 'template-parts/gutenberg-blocks/blocks-8.php',
                'category'          => 'evomax',
                'icon'              => 'evomax_icon',
                'keywords'          => [ 'Блоки' ],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'is_preview' => true
                        ]
                    ]
                ]
            ]);
            
            acf_register_block_type([
                'name'              => 'blocks-9',
                'title'             => 'Блоки 9',
                // 'description'       => __('A custom description.'),
                'render_template'   => 'template-parts/gutenberg-blocks/blocks-9.php',
                'category'          => 'evomax',
                'icon'              => 'evomax_icon',
                'keywords'          => [ 'Блоки' ],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'is_preview' => true
                        ]
                    ]
                ]
            ]);
            
            acf_register_block_type([
                'name'              => 'table',
                'title'             => 'Таблица',
                // 'description'       => __('A custom description.'),
                'render_template'   => 'template-parts/gutenberg-blocks/table.php',
                'category'          => 'evomax',
                'icon'              => 'evomax_icon',
                'keywords'          => [ 'Таблица' ],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'is_preview' => true
                        ]
                    ]
                ]
            ]);
            
            acf_register_block_type([
                'name'              => 'info',
                'title'             => 'Информационный блок',
                // 'description'       => __('A custom description.'),
                'render_template'   => 'template-parts/gutenberg-blocks/info.php',
                'category'          => 'evomax',
                'icon'              => 'evomax_icon',
                'keywords'          => [ 'Информационный', 'блок' ],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'is_preview' => true
                        ]
                    ]
                ]
            ]);
            
            acf_register_block_type([
                'name'              => 'contacts',
                'title'             => 'Контакты',
                // 'description'       => __('A custom description.'),
                'render_template'   => 'template-parts/gutenberg-blocks/contacts.php',
                'category'          => 'evomax',
                'icon'              => 'evomax_icon',
                'keywords'          => [ 'Контакты' ],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'is_preview' => true
                        ]
                    ]
                ]
            ]);
            
            acf_register_block_type([
                'name'              => 'photo-slider',
                'title'             => 'Фото слайдер',
                // 'description'       => __('A custom description.'),
                'render_template'   => 'template-parts/gutenberg-blocks/photo-slider.php',
                'category'          => 'evomax',
                'icon'              => 'evomax_icon',
                'keywords'          => [ 'Фото слайдер' ],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'is_preview' => true
                        ]
                    ]
                ]
            ]);
            
            acf_register_block_type([
                'name'              => 'about',
                'title'             => 'О нас',
                // 'description'       => __('A custom description.'),
                'render_template'   => 'template-parts/gutenberg-blocks/about.php',
                'category'          => 'evomax',
                'icon'              => 'evomax_icon',
                'keywords'          => [ 'О нас' ],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'is_preview' => true
                        ]
                    ]
                ]
            ]);
            
            acf_register_block_type([
                'name'              => 'faq',
                'title'             => 'FaQ',
                // 'description'       => __('A custom description.'),
                'render_template'   => 'template-parts/gutenberg-blocks/faq.php',
                'category'          => 'evomax',
                'icon'              => 'evomax_icon',
                'keywords'          => [ 'FaQ' ],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'is_preview' => true
                        ]
                    ]
                ]
            ]);
            
            acf_register_block_type([
                'name'              => 'reviews',
                'title'             => 'Reviews',
                // 'description'       => __('A custom description.'),
                'render_template'   => 'template-parts/gutenberg-blocks/reviews.php',
                'category'          => 'evomax',
                'icon'              => 'evomax_icon',
                'keywords'          => [ 'Reviews' ],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'is_preview' => true
                        ]
                    ]
                ]
            ]);
            
            acf_register_block_type([
                'name'              => 'form',
                'title'             => 'Контактная форма',
                // 'description'       => __('A custom description.'),
                'render_template'   => 'template-parts/gutenberg-blocks/form.php',
                'category'          => 'evomax',
                'icon'              => 'evomax_icon',
                'keywords'          => [ 'Форма' ],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'is_preview' => true
                        ]
                    ]
                ]
            ]);
            
            acf_register_block_type([
                'name'              => 'product-category',
                'title'             => 'Товары (категории)',
                // 'description'       => __('A custom description.'),
                'render_template'   => 'template-parts/gutenberg-blocks/product-category.php',
                'category'          => 'evomax',
                'icon'              => 'evomax_icon',
                'keywords'          => [ 'Товары', 'Категоии' ],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'is_preview' => true
                        ]
                    ]
                ]
            ]);
            
            acf_register_block_type([
                'name'              => 'popular-product',
                'title'             => 'Популярные товары',
                // 'description'       => __('A custom description.'),
                'render_template'   => 'template-parts/gutenberg-blocks/popular-product.php',
                'category'          => 'evomax',
                'icon'              => 'evomax_icon',
                'keywords'          => [ 'Товары', 'Популярные' ],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'is_preview' => true
                        ]
                    ]
                ]
            ]);
            
            acf_register_block_type([
                'name'              => 'related-products',
                'title'             => 'Похожие товары',
                // 'description'       => __('A custom description.'),
                'render_template'   => 'template-parts/gutenberg-blocks/related-products.php',
                'category'          => 'evomax',
                'icon'              => 'evomax_icon',
                'keywords'          => [ 'Товары', 'Похожие' ],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'is_preview' => true
                        ]
                    ]
                ]
            ]);

        }
    }

} 