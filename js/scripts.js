'use strict';

let ENTITY = {

    init: function init() {

        // ENTITY.save_form();

        $('.prdctfltr_wc .prdctfltr_filter').each(function() {
            $(this).find('.prdctfltr_add_scroll').addClass('prdctfltr_down').show();
            $(this).find('.prdctfltr-down').removeClass('prdctfltr-down').addClass('prdctfltr-up');
        });


        $(document).on('click', '.dropcontainer_demo2 ul li a', function(event){
            event.preventDefault();

            if ( 'По рейтингу' == $(this).text() ) {

                $('select[name="orderby"]').val('rating').change();

            } else if ( 'По популярности' == $(this).text() ) {

                $('select[name="orderby"]').val('popularity').change();

            } else if ( 'По новизне' == $(this).text() ) {

                $('select[name="orderby"]').val('date').change();

            } else if ( 'От дешовых' == $(this).text() ) {

                $('select[name="orderby"]').val('price').change();

            } else if ( 'От дорогих' == $(this).text() ) {

                $('select[name="orderby"]').val('price-desc').change();
            }

        });


    },

    // save_form: function save_form() {

    //     $('#form').submit( function( e ) {

    //         e.preventDefault();
    //         let data = {
    //             action     : 'ut_save_form',
    //             ajax_nonce : ut_params.ajax_nonce,
    //             form       : $('#form').serialize(),
    //         };

    //         $.ajax({
    //             url  : ut_params.ajaxurl,
    //             data : data,
    //             type : 'POST',
    //             beforeSend: function() {
    //                 let overlay = $('<div id="overlay_form"><img src="' + ut_params.get_template_directory_uri + '/images/preloader.gif"></div>');
    //                     overlay.appendTo('#form');
    //                 $('button[name="form"]').attr( "disabled", true ); 
    //             },
    //             success: function( response ) {

    //                 if ( response.success ) {
    //                     $('#overlay_form').remove();
    //                     $('button[name="form"]').removeAttr("disabled");
    //                 }
    //             }
    //         });
    //     });
    // },

};

$(document).ready( ENTITY.init() );