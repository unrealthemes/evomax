jQuery(document).ready(function() {
    "use strict"; 

    //learn_morebtn_text_litle text
    $(document).ready(function() {
      $(".learn_morebtn_text_litle").click(function(event) {
        event.preventDefault();
        if ($(this).hasClass("close")) {
          $(this).removeClass("close").text("Читать полностью");
          $(this).closest(".learn_more_text_litle").prev(".more_text_litle").css("max-height", "270px");
        } else {
          $(this).addClass("close").text("Закрыть");
          $(this).closest(".learn_more_text_litle").prev(".more_text_litle").css("max-height", "none");
        }
      });
    });
    
     
  

    // sidebar
    jQuery(".sidebar_btn").on('click', function(){
        jQuery(this).toggleClass("close_minus")
    }); 
    
    jQuery(".sidebar_btn").on('click', function(){
        jQuery(this).next(".sidebar").toggle("fast")
    });
    
    jQuery(".header_menu2_close").on('click', function(){
        jQuery(this).parents(".sidebar:first").hide("fast")
    });     
       
    
    // popup
    jQuery(document).ready(function() {
     // При клике на кнопку открытия всплывающего окна
        jQuery(".open_popup").click(function() {
            // Получаем уникальный идентификатор всплывающего окна из атрибута data-popup-id кнопки вызова окна
            var popup_id = jQuery(this).data('popup-id');
    
            // Показываем затемнение фона и всплывающее окно с соответствующим идентификатором
            jQuery("body").append('<div class="popup_overlay"></div>');
            jQuery("#" + popup_id).animate({ opacity: 1, top: '50%' }, 100).fadeIn(100);
    
            // Обработчик клика за пределами всплывающего окна
            jQuery(".popup_overlay").click(function() {
                // Скрываем затемнение фона и всплывающее окно
                jQuery("#" + popup_id).animate({ opacity: 0, top: '45%' }, 100).fadeOut(100, function() {
                    jQuery(".popup_overlay").remove();
                });
            });
        });


        // При клике на кнопку закрытия всплывающего окна
        jQuery(".open_popup_content_close").click(function() {
            // Скрываем затемнение фона и всплывающее окно
            jQuery(".popup_overlay").remove();
            jQuery(".open_popup_content").animate({ opacity: 0, top: '45%' }, 100).fadeOut(100);
        });
    });
    
     // home tabs 
     (function($){               
         $.fn.lightTabs = function(options){
                var createTabs = function(){
                var tabs = this;
                var i = 0;
                var prevIndex = 0;
    
                var showPage = function(i){
                    $(tabs).children("div").children("div").hide();
                    $(tabs).children("div").children("div").eq(i).show();
                    $(tabs).children("ul").children("li").removeClass("tabactive");
                    $(tabs).children("ul").children("li").eq(i).addClass("tabactive");
                    $(tabs).children("ul").children("li").eq(prevIndex).removeClass("prev");
                    $(tabs).children("ul").children("li").eq(i - 1).addClass("prev");
                    prevIndex = i - 1;
                } 
                showPage(0);
                $(tabs).children("ul").children("li").eq(0).addClass("prev");
    
                $(tabs).children("ul").children("li").each(function(index, element){
                    $(element).attr("data-page", i);
                    i++;                        
                });
    
                $(tabs).children("ul").children("li").click(function(){
                    var currentIndex = parseInt($(this).attr("data-page"));
                    showPage(currentIndex);
                });                
            }; 
            return this.each(createTabs);
        };  
    })(jQuery);
    
    $(document).ready(function(){
        $(".tabs").lightTabs();
    });
     
    
    //  Back to top
    if (jQuery('#back-to-top').length) {
        var scrollTrigger = 100, // px
            backToTop = function () {
                var scrollTop = jQuery(window).scrollTop();
                if (scrollTop > scrollTrigger) {
                    jQuery('#back-to-top').addClass('show');
                } else {
                    jQuery('#back-to-top').removeClass('show');
                }
            };
        backToTop();
        jQuery(window).on('scroll', function () {
            backToTop(); 
        });
        jQuery('#back-to-top').on('click', function (e) {
            e.preventDefault();
            jQuery('html,body').animate({
                scrollTop: 0
            }, 700);
        });
    } ; 
    
    
    
 
    // Sticky Header 
    function stickyHeader(headerSelector){

        //hide right header menu when sticky header is inited
        var mainHeader = jQuery(headerSelector),
            headerHeight = mainHeader.height();

        //set scrolling variables
        var scrolling = false,
            previousTop = 0,
            currentTop = 0,
            scrollDelta = 10,
            scrollOffset = 60;

        mainHeader.addClass('autohide');

        jQuery(window).on('scroll', function(){
            if( !scrolling ) {
                scrolling = true;
                (!window.requestAnimationFrame)
                    ? setTimeout(autoHideHeader, 250)
                    : requestAnimationFrame(autoHideHeader);
            }
        });

        jQuery(window).on('resize', function(){
            headerHeight = mainHeader.height();
        });

        function autoHideHeader() {
            var currentTop = jQuery(window).scrollTop();

            checkSimpleNavigation(currentTop);
            previousTop = currentTop;
            scrolling = false;

            // add class when pass offset
            if (jQuery(window).scrollTop() > scrollOffset) {
                mainHeader.addClass('fixed');
            } else {
                mainHeader.removeClass('fixed');
            }
        }

        function checkSimpleNavigation(currentTop) {
            //there's no secondary nav or secondary nav is below primary nav
            if (previousTop - currentTop > scrollDelta) {
                //if scrolling up...
                mainHeader.removeClass('is-hidden');
            } else if( currentTop - previousTop > scrollDelta && currentTop > scrollOffset) {
                //if scrolling down...
                mainHeader.addClass('is-hidden');
            }
        }
    }
    if (jQuery(window).width() > 991) {stickyHeader('#site-header.sticky');} 


    //  Back to top
    if (jQuery('#back-to-top').length) {
        var scrollTrigger = 100, // px
            backToTop = function () {
                var scrollTop = jQuery(window).scrollTop();
                if (scrollTop > scrollTrigger) {
                    jQuery('#back-to-top').addClass('show');
                } else {
                    jQuery('#back-to-top').removeClass('show');
                }
            };
        backToTop();
        jQuery(window).on('scroll', function () {
            backToTop(); 
        });
        jQuery('#back-to-top').on('click', function (e) {
            e.preventDefault();
            jQuery('html,body').animate({
                scrollTop: 0
            }, 700);
        });
    }
    
    // block_slider_tag
    jQuery('.block_slider_tag').owlCarousel({
        loop:true, 
        autoWidth:true,
        // stagePadding: 100,                
        margin:15,
        dots:false,
        navText:["<div class='arrow arrow_left'></div>","<div class='arrow arrow_right'></div>"],  
        nav:true,
        startPosition:1,
        responsiveRefreshRate:1000,
        responsive:{
        0:{items:2, margin:15},
        600:{items:3,margin:15}, 
        800:{items:5, margin:15},
        1024:{items:6, margin:15},
        1300:{items:8, margin:15},
        1310:{items:8, margin:15}
        }
    });      
    
    
    // block_item
    jQuery('.block_item').owlCarousel({
        loop:true, 
        autoWidth:false,       
        margin:20,
        dots:true,
        navText:["<div class='arrow arrow_left'></div>","<div class='arrow arrow_right'></div>"],  
        nav:true,
        nav: false,
        startPosition:1,
        responsiveRefreshRate:1000,
        responsive:{
        0:{items:1, margin:0},
        600:{items:1, margin:0}, 
        800:{items:1},
        1024:{items:3},
        1300:{items:4},
        1310:{items:4}
        }
    });      
    
    // photo_slider
    jQuery('.photo_slider').owlCarousel({
        loop:true, 
        autoWidth:false,
        // stagePadding: 100,                
        margin:20,
        nav: false,
        dots:true,
        navText:["<div class='arrow arrow_left'></div>","<div class='arrow arrow_right'></div>"],  
        nav:true,
        startPosition:1,
        responsiveRefreshRate:1000,
        responsive:{
        0:{items:1, margin:0},
        600:{items:1, margin:0}, 
        800:{items:1},
        1024:{items:3},
        1300:{items:3},
        1310:{items:3}
        }
    });    
    
    // block_slider_reviews
    jQuery('.block_slider_reviews').owlCarousel({
        loop:true, 
        autoWidth:false,               
        margin:20,
        dots:true,
        nav: false,
        mouseDrag: false,
        navText:["<div class='arrow arrow_left'></div>","<div class='arrow arrow_right'></div>"],  
        nav:true,
        startPosition:1,
        responsiveRefreshRate:1000,
        responsive:{
        0:{items:1, margin:0},
        600:{items:1, margin:0}, 
        800:{items:1},
        1024:{items:2},
        1300:{items:2},
        1310:{items:2}
        }
    }); 
    
    
    
    jQuery('.nested-carousel').owlCarousel({
        items: 1,
        nav: false,
        dots: true
    });
    
        
     // Accordeon FAQ - что бы скрыть, добавить вконце после .stop() - .hide();
        jQuery(document).ready(function($){
           jQuery('#accordion-js').find('.heading').click(function($){
               jQuery(this).toggleClass('accord_active').next().stop().slideToggle(); 
           }).next().stop();
        });

     
    
    
    
    
// ---------------------------------------------------------------------------------------------------------    

    
    
    
     
        

jQuery(".di_menu_text").on('click', function(){
    var menu = jQuery(this).next(".ul");
    menu.toggle("fast");
    jQuery(this).toggleClass('open');
});

jQuery(document).on('click', function(e) { 
    var target = jQuery(e.target);
    var menuText = target.closest(".di_menu_text");
    
    if (!menuText.length || !target.closest(".ul").length) {
        var menus = jQuery(".di_menu_text");
        menus.not(menuText).removeClass('open');
        menus.not(menuText).next(".ul").hide();
    }
    
    e.stopPropagation();
});
     
    
 
// mobile_menu_btn  
jQuery(".mobile_menu_btn").on('click', function(){
    jQuery(this).next(".header_nav").toggle("fast")
}); 

 if (jQuery(window).width()  < 879) {
    jQuery(document).on('click', function(e) { 
      if (!jQuery(e.target).closest(".mobile_menu_btn").length) {
        jQuery('.header_nav').hide();
      } 
      e.stopPropagation();
    })
    } ; 

jQuery(".mobile_menu_btn").on('click', function(){
     jQuery(this).toggleClass('open');
}); 

jQuery(document).on('click', function(e) { 
  if (!jQuery(e.target).closest(".open").length) {
    jQuery('.open').toggleClass('open');
  } 
  e.stopPropagation();
});

    
    
    
    

 
    // text_hide
     var token = 1;
    jQuery(".di-read-more input").on("click", function() {
        var jQuerylink = jQuery(this);
        var jQuerycontent = jQuerylink.parent().prev("div.text_hide");
        jQuerycontent.toggleClass("full-text");
        if(token == 1)
        {jQuery(this).val("Скрыть");token = 0; }
        else
        {jQuery(this).val("Читать подробнее");token = 1;}
        return false;
    }); 
    
    // See All teg
    jQuery(".seeall").on('click', function(){
        jQuery(this).next(".seeall_vn").toggle("fast")
    });
    jQuery(".seeall_close").on('click', function(){
        jQuery(this).parents(".seeall_vn:first").hide("fast")
    });   



 

   // Load More jQuery   
    jQuery(".more .col_4_di").slice(0, 8).css("display", "block");
    jQuery(".more2 .cat_item").slice(0, 4).css("display", "block");
    
    jQuery("#loadMore").on('click', function (e) {
        e.preventDefault(); 
        jQuery(".more .col_4_di:hidden").slice(0, 8).slideDown();
        
        jQuery(".more2 .cat_item:hidden").slice(0, 4).slideDown();
        
        if (jQuery(".more2 .cat_item").length == 0) {
            jQuery("#load").fadeOut('slow');
        }  
        
        if (jQuery(".cat_item:hidden").length == 0) {
            jQuery("#load").fadeOut('slow');
        }  
    }); 

 
    
    // Убавляем кол-во по клику
        jQuery('.quantity_inner .bt_minus').click(function() {
        let jQueryinput = jQuery(this).parent().find('.quantity');
        let count = parseInt(jQueryinput.val()) - 1;
        count = count < 1 ? 1 : count;
        jQueryinput.val(count);
    });
    // Прибавляем кол-во по клику
    jQuery('.quantity_inner .bt_plus').click(function() {
        let jQueryinput = jQuery(this).parent().find('.quantity');
        let count = parseInt(jQueryinput.val()) + 1;
        count = count > parseInt(jQueryinput.data('max-count')) ? parseInt(jQueryinput.data('max-count')) : count;
        jQueryinput.val(parseInt(count));
    }); 
    // Убираем все лишнее и невозможное при изменении поля
    jQuery('.quantity_inner .quantity').bind("change keyup input click", function() {
        if (this.value.match(/[^0-9]/g)) {
            this.value = this.value.replace(/[^0-9]/g, '');
        }
        if (this.value == "") {
            this.value = 1;
        }
        if (this.value > parseInt(jQuery(this).data('max-count'))) {
            this.value = parseInt(jQuery(this).data('max-count'));
        }    
    });    
        
        
   
     

     var sync1 = $("#sync1");
    var sync2 = $("#sync2");
    var slidesPerPage = 5; //globaly define number of elements per page
    var syncedSecondary = true;

    sync1.owlCarousel({
        items: 1,
        slideSpeed: 2000,
        nav: false,
        autoplay: false, 
        dots: true,
        loop: true, 
        navText:["<div class='arrow arrow_left'></div>","<div class='arrow arrow_right'></div>"], 
     
    }).on('changed.owl.carousel', syncPosition);

    sync2
        .on('initialized.owl.carousel', function() {
            sync2.find(".owl-item").eq(0).addClass("current");
        })
        .owlCarousel({
            items: slidesPerPage,
            dots: false,
            nav: true,
            smartSpeed: 200,
            slideSpeed: 500,
            navText:["<div class='arrow arrow_left'></div>","<div class='arrow arrow_right'></div>"], 
            slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
            responsiveRefreshRate: 200,
            responsive:{
        0:{items:3},
        600:{items:3}, 
        800:{items:3},
        1024:{items:3},
        1300:{items:4},
        1310:{items:4}
        },
        }).on('changed.owl.carousel', syncPosition2);

    function syncPosition(el) {
        //if you set loop to false, you have to restore this next line
        //var current = el.item.index;

        //if you disable loop you have to comment this block
        var count = el.item.count - 1;
        var current = Math.round(el.item.index - (el.item.count / 2) - .5);

        if (current < 0) {
            current = count;
        }
        if (current > count) {
            current = 0;
        }

        //end block

        sync2
            .find(".owl-item")
            .removeClass("current")
            .eq(current)
            .addClass("current");
        var onscreen = sync2.find('.owl-item.active').length - 1;
        var start = sync2.find('.owl-item.active').first().index();
        var end = sync2.find('.owl-item.active').last().index();

        if (current > end) {
            sync2.data('owl.carousel').to(current, 100, true);
        }
        if (current < start) {
            sync2.data('owl.carousel').to(current - onscreen, 100, true);
        }
    }

    function syncPosition2(el) {
        if (syncedSecondary) {
            var number = el.item.index;
            sync1.data('owl.carousel').to(number, 100, true);
        }
    }

    sync2.on("click", ".owl-item", function(e) {
        e.preventDefault();
        var number = $(this).index();
        sync1.data('owl.carousel').to(number, 300, true);
    });
  
 
});