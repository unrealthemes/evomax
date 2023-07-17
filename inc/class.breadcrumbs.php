<?php

class UT_Breadcrumbs {

    private static $_instance = null; 

    static public function get_instance() {

        if ( is_null( self::$_instance ) ) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    public function __construct() {

        add_filter( 'kama_breadcrumbs_args', [$this, 'breadcrumbs_args'] );

    }

    public function breadcrumbs_args( $args ) {

        $my_args = [
            'markup' => [
                'wrappatt'  => '<div id="page-breadcrumbs" class="breadcrumbs"><ul>%s</ul></div>',
                'linkpatt'  => '<li><a href="%s">%s</a></li>',
                'titlepatt' => '<li>%s</li>',
                'seppatt'   => '',
            ],
            'priority_tax' => [ 'product_cat' ],
        ];
    
        return $my_args + $args;
    }
} 