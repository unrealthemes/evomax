<?php 
$logo_id = get_field('logo_h', 'option');
$logo_url = wp_get_attachment_url( $logo_id, 'full' );
$txt_logo = get_field('txt_logo_h', 'option');
$phone = get_field('phone_h', 'option');
$shedules = get_field('shedules_h', 'option');
$form = get_field('form_h', 'option'); // TO DO
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#00AEF0">
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo THEME_URI; ?>/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo THEME_URI; ?>/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo THEME_URI; ?>/img/favicon-16x16.png">
    <link rel="manifest" href="<?php echo THEME_URI; ?>/img/site.webmanifest">
    <link rel="mask-icon" href="<?php echo THEME_URI; ?>/img/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#74B427">
    <meta name="theme-color" content="#74B427"> 
	<?php wp_head(); ?>
</head> 
<body <?php body_class(); ?>>

	<?php wp_body_open(); ?>

    <!-- HEADER start -->
    <header> 
        <!-- sticky HEADER -->
        <div id="site-header" class="sticky">  
           
            <div class="header_top">
                <div class="container">
                    <div class="header_top_center">
                        <div class="deader_soc">
                            <a href="#" target="_blank"><img src="<?php echo THEME_URI; ?>/img/insta.svg" alt="" /></a>
                            <a href="#" target="_blank"><img src="<?php echo THEME_URI; ?>/img/vk.svg" alt="" /></a>
                            <a href="#" target="_blank"><img src="<?php echo THEME_URI; ?>/img/viber.svg" alt="" /></a>
                        </div>
                        
                        <div class="header_right">
                            <div class="main_search"> 
                                <div class="visible_ps">
                                    <form method="get" id="main_searchform" action="#">
                                        <input class="main_search_input" type="search" placeholder="Поиск по сайту" required="">
                                        <input type="submit" id="searchsubmit" class="main_submit" value="Найти">
                                    </form>
                                </div> 
                                   
                                <div class="visible_xs popup_btn">
                                    <a href="#" class="open_popup" data-popup-id="search" onclick="return false">
                                         <img src="<?php echo THEME_URI; ?>/img/search.svg" alt="" />
                                    </a>
                                </div> 
                   
                            </div>  
                            
                            
                            <div class="deader_link">
                                <a href="#">
                                    <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M20.1671 3.7388H17.4171C16.4065 3.7388 15.5829 4.51884 15.5829 5.47759V16.2612H14.2079V8.95648C14.2079 7.99773 13.387 7.21769 12.375 7.21769H9.625C8.61438 7.21769 7.79212 7.99773 7.79212 8.95648V16.2612H6.41713V3.7388C6.41713 2.78005 5.59487 2 4.58287 2H1.83288C0.82225 2 0 2.78005 0 3.7388V17.1313C0 17.6113 0.411125 18 0.917125 18H21.0829C21.5889 18 22 17.6113 22 17.1313V5.47759C22 4.51884 21.1777 3.7388 20.1671 3.7388ZM1.83288 16.2612V3.7388H4.58287V16.2612H1.83288ZM9.625 16.2612V8.95648H12.375V16.2612H9.625ZM17.4171 16.2612V5.47759H20.1671V16.2612H17.4171Z" fill="#74B427"/>
                                    </svg> 
                                    <span>Сравнить</span>
                                </a>
                                <a href="#">
                                    <svg width="21" height="19" viewBox="0 0 21 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M18.394 1.6661C16.2173 -0.554091 12.6795 -0.554091 10.5053 1.6661L9.99992 2.18219L9.49453 1.6661C7.32032 -0.555368 3.7813 -0.555368 1.60709 1.6661C-0.523332 3.84159 -0.537093 7.29068 1.57456 9.68845C3.50108 11.8729 9.18303 16.5969 9.42447 16.7961C9.5871 16.9328 9.78475 16.9993 9.97991 16.9993H9.99992C10.2026 17.0082 10.4065 16.9367 10.5754 16.7961C10.8156 16.5969 16.4988 11.8742 18.4253 9.68718C20.5369 7.29068 20.5232 3.84159 18.394 1.6661ZM17.113 8.48127C15.6118 10.1854 11.4823 13.6996 9.99992 14.9464C8.51751 13.6996 4.38927 10.1854 2.88684 8.48255C1.41444 6.80908 1.40068 4.42793 2.85557 2.94099C3.59865 2.18219 4.57442 1.80407 5.55018 1.80407C6.52595 1.80407 7.50171 2.18219 8.24605 2.94099L9.35692 4.07536C9.48827 4.21077 9.65465 4.29125 9.82979 4.31807C10.1138 4.38194 10.4215 4.30019 10.6429 4.07536L11.7538 2.94099C13.24 1.42339 15.6581 1.42467 17.1443 2.94099C18.5992 4.42793 18.5854 6.80908 17.113 8.48127Z" fill="#74B427"/>
                                    </svg> 
                                    <span>Избранное</span>
                                </a>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
           
            <div class="row header_center">
                 <div class="container">
                    <div class="header_top_vn">
                        <div class="header_block_l w33">

                            <div class="logo">
                                <a href="<?php echo esc_url( home_url('/') ); ?>"> 
                                    <?php 
                                    if ( get_post_mime_type($logo_id) == 'image/svg+xml' ) :
                                        echo file_get_contents( $logo_url );
                                    else :
                                        echo '<img src="' . $logo_url . '" alt="logo">';
                                    endif;
									?>
                                </a>
                            </div>  
                            
                            <?php if ($txt_logo) : ?>
                                <div class="logo_text">
                                    <?php echo nl2br($txt_logo); ?>
                                </div> 
                            <?php endif; ?>

                        </div>
                        
                        <div class="header_top_vn_c w33">
                        
                            <div class="header_top_vn_c_block">

                                <?php if ($phone) : ?>
                                    <div class="header_phone">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_11_1610)">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M15.111 11.111C14.004 11.111 12.933 10.933 11.938 10.604C11.631 10.507 11.28 10.578 11.036 10.822L9.08 12.782C6.56 11.502 4.502 9.444 3.222 6.929L5.178 4.964C5.422 4.72 5.493 4.369 5.396 4.062C5.066 3.067 4.889 1.996 4.889 0.889C4.889 0.396 4.493 0 4 0H0.889C0.4 0 0 0.396 0 0.889C0 9.236 6.764 16 15.111 16C15.604 16 16 15.604 16 15.111V12C16 11.507 15.604 11.111 15.111 11.111Z" fill="url(#paint0_linear_11_1610)"/>
                                            </g>
                                            <defs>
                                                <linearGradient id="paint0_linear_11_1610" x1="-1.30426e-08" y1="16" x2="16.0864" y2="15.9843" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#74B427"/>
                                                    <stop offset="1" stop-color="#345D02"/>
                                                </linearGradient>
                                                <clipPath id="clip0_11_1610">
                                                    <rect width="16" height="16" fill="white"/>
                                                </clipPath>
                                            </defs>
                                        </svg> 
                                        <a href="tel:<?php echo $phone; ?>">
                                            <?php echo $phone; ?>
                                        </a>
                                    </div> 
                                <?php endif; ?>
                                
                                <?php if ($shedules) : ?>
                                    <div class="header_block header_time"> 
                                        <?php echo $shedules; ?>
                                    </div> 
                                <?php endif; ?>

                            </div>

                            
                            <!-- popup_btn --> 
                            <div class="popup_btn">
                                <a href="#" class="open_popup btn_transparent" data-popup-id="popup1" onclick="return false">
                                    <svg width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_204_3187)">
                                        	<path fill-rule="evenodd" clip-rule="evenodd" d="M4 0.499957C4.493 0.499957 4.889 0.89596 4.889 1.38896C4.889 2.49596 5.067 3.56696 5.396 4.56196C5.493 4.86896 5.422 5.21996 5.178 5.46396L3.222 7.42996C4.502 9.94497 6.56 12.003 9.08 13.283L11.036 11.323C11.28 11.079 11.631 11.008 11.938 11.105C12.933 11.435 14.004 11.612 15.111 11.612C15.604 11.612 16 12.008 16 12.501V15.612C16 16.105 15.604 16.501 15.111 16.501C6.764 16.5 0 9.73597 0 1.38896C0 0.89596 0.4 0.499957 0.889 0.499957H4ZM12.493 0.0929565L16.089 3.56596L8.734 7.58396L12.493 0.0929565Z" fill="url(#paint0_linear_204_3187)"/>
                                        </g>
                                        <defs>
											<linearGradient id="paint0_linear_204_3187" x1="-1.31152e-08" y1="16.501" x2="16.1759" y2="16.4855" gradientUnits="userSpaceOnUse">
												<stop stop-color="#74B427"/>
												<stop offset="1" stop-color="#345D02"/>
											</linearGradient>
											<clipPath id="clip0_204_3187">
												<rect width="17" height="17" fill="white" transform="translate(0 0.5)"/>
											</clipPath>
                                        </defs>
                                    </svg> 
                                    <span>Заказать звонок</span>
                                </a>
                            </div>
                        </div>
                          
                        <div class="header_r_r w33">
                           <div class="header_r_r_text">Нужна быстрая оценка стоимости?</div>
                           <div class="header_r_r_btn">
                                <a href="#" class="btn_transparent popup_btn">
                                    <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
										<g clip-path="url(#clip0_24_956)">
											<path d="M13 0H1C0.449 0 0 0.449 0 1V15C0 15.552 0.449 16 1 16H13C13.552 16 14 15.552 14 15V1C14 0.449 13.552 0 13 0ZM4 14H2V12H4V14ZM4 10H2V8H4V10ZM8 14H6V12H8V14ZM8 10H6V8H8V10ZM12 14H10V8H12V14ZM12 5.5C12 5.77601 11.776 6 11.5 6H2.5C2.22399 6 2 5.77601 2 5.5V2.5C2 2.22399 2.22399 2 2.5 2H11.5C11.776 2 12 2.22399 12 2.5V5.5Z" fill="url(#paint0_linear_24_956)"/>
										</g>
										<defs>
											<linearGradient id="paint0_linear_24_956" x1="-1.14123e-08" y1="16" x2="14.0756" y2="15.988" gradientUnits="userSpaceOnUse">
												<stop stop-color="#74B427"/>
												<stop offset="1" stop-color="#345D02"/>
											</linearGradient>
											<clipPath id="clip0_24_956">
												<rect width="14" height="16" fill="white"/>
											</clipPath>
										</defs>
                                    </svg>
                                    <span>Рассчитать стоимость онлайн</span>
                                </a>
                           </div>
                        </div> 

                    </div> 
                </div>
            </div> 
            
            
            
            <div class="header_niz">
                <div class="container">
                    <div class="header_niz_vn">
                        <!-- header menu 1 -->
                        <div class="di_menu">
                            <div class="di_menu_text">
                                <span>Каталог</span>
                                <svg width="13" height="8" viewBox="0 0 13 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 1.5L6.5 6.5L1 1.5" stroke="white" stroke-width="2"/>
                                </svg> 
                                <div class="ul"> 
                                    <div class="ul_grid">
                                        <div class="nav_block">
                                            <div class="nav_block_title">Производители</div>
                                            <ul>
                                                <li><a href="#">ALTA</a></li>
                                                <li><a href="#">Biodevice</a></li>
                                                <li><a href="#">Biodevice ECO</a></li>
                                                <li><a href="#">ERGOBOX</a></li>
                                                <li><a href="#">GENESIS</a></li>
                                                <li><a href="#">NOVO EKO</a></li>
                                                <li><a href="#">UNI-SEP</a></li>
                                                <li><a href="#">UPONOR</a></li>
                                                <li><a href="#">ZORDE</a></li>
                                                <li><a href="#">Аквалос</a></li>
                                                <li><a href="#">Система очистки</a></li>
                                                <li><a href="#">Система очистки</a></li>
                                                <li><a href="#">Система очистки</a></li>
                                            </ul>  
                                        </div>
                                        
                                        <div class="nav_block">
                                            <div class="nav_block_title">Производители</div>
                                            <ul>
                                                <li><a href="#">ALTA</a></li>
                                                <li><a href="#">Biodevice</a></li>
                                                <li><a href="#">Biodevice ECO</a></li>
                                                <li><a href="#">ERGOBOX</a></li>
                                                <li><a href="#">GENESIS</a></li>
                                                <li><a href="#">NOVO EKO</a></li>
                                                <li><a href="#">UNI-SEP</a></li>
                                                <li><a href="#">UPONOR</a></li>
                                                <li><a href="#">ZORDE</a></li>
                                                <li><a href="#">Аквалос</a></li>
                                                <li><a href="#">Система очистки</a></li>
                                                <li><a href="#">Система очистки</a></li>
                                                <li><a href="#">Система очистки</a></li>
                                            </ul>  
                                        </div>
                                        
                                        <div class="nav_block">
                                            <div class="nav_block_title">Производители</div>
                                            <ul>
                                                <li><a href="#">ALTA</a></li>
                                                <li><a href="#">Biodevice</a></li>
                                                <li><a href="#">Biodevice ECO</a></li>
                                                <li><a href="#">ERGOBOX</a></li>
                                                <li><a href="#">GENESIS</a></li>
                                                <li><a href="#">NOVO EKO</a></li>
                                                <li><a href="#">UNI-SEP</a></li>
                                                <li><a href="#">UPONOR</a></li>
                                                <li><a href="#">ZORDE</a></li>
                                                <li><a href="#">Аквалос</a></li>
                                                <li><a href="#">Система очистки</a></li>
                                                <li><a href="#">Система очистки</a></li>
                                                <li><a href="#">Система очистки</a></li>
                                            </ul>  
                                        </div>
                                        
                                        <div class="nav_block">
                                            <div class="nav_block_title">Производители</div>
                                            <ul>
                                                <li><a href="#">ALTA</a></li>
                                                <li><a href="#">Biodevice</a></li>
                                                <li><a href="#">Biodevice ECO</a></li>
                                                <li><a href="#">ERGOBOX</a></li>
                                                <li><a href="#">GENESIS</a></li>
                                                <li><a href="#">NOVO EKO</a></li>
                                                <li><a href="#">UNI-SEP</a></li>
                                                <li><a href="#">UPONOR</a></li>
                                                <li><a href="#">ZORDE</a></li>
                                                <li><a href="#">Аквалос</a></li>
                                                <li><a href="#">Система очистки</a></li>
                                                <li><a href="#">Система очистки</a></li>
                                                <li><a href="#">Система очистки</a></li>
                                            </ul>  
                                        </div>
                                        
                                        <div class="nav_block">
                                            <div class="nav_block_title">Производители</div>
                                            <ul>
                                                <li><a href="#">ALTA</a></li>
                                                <li><a href="#">Biodevice</a></li>
                                                <li><a href="#">Biodevice ECO</a></li>
                                                <li><a href="#">ERGOBOX</a></li>
                                                <li><a href="#">GENESIS</a></li>
                                                <li><a href="#">NOVO EKO</a></li>
                                                <li><a href="#">UNI-SEP</a></li>
                                                <li><a href="#">UPONOR</a></li>
                                                <li><a href="#">ZORDE</a></li>
                                                <li><a href="#">Аквалос</a></li>
                                                <li><a href="#">Система очистки</a></li>
                                                <li><a href="#">Система очистки</a></li>
                                                <li><a href="#">Система очистки</a></li>
                                            </ul>  
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="di_menu_text">
                                <span>Услуги</span>
                                <svg width="13" height="8" viewBox="0 0 13 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 1.5L6.5 6.5L1 1.5" stroke="white" stroke-width="2"/>
                                </svg> 
                                <div class="ul"> 
                                    <div class="ul_grid">
                                        <div class="nav_block">
                                            <div class="nav_block_title">Услуги</div>
                                            <ul>
                                                <li><a href="#">ALTA</a></li>
                                                <li><a href="#">Biodevice</a></li>
                                                <li><a href="#">Biodevice ECO</a></li>
                                                <li><a href="#">ERGOBOX</a></li>
                                                <li><a href="#">GENESIS</a></li>
                                                <li><a href="#">NOVO EKO</a></li>
                                                <li><a href="#">UNI-SEP</a></li>
                                                <li><a href="#">UPONOR</a></li>
                                                <li><a href="#">ZORDE</a></li>
                                                <li><a href="#">Аквалос</a></li>
                                                <li><a href="#">Система очистки</a></li>
                                                <li><a href="#">Система очистки</a></li>
                                                <li><a href="#">Система очистки</a></li>
                                            </ul>  
                                        </div> 
                                        
                                        <div class="nav_block">
                                            <div class="nav_block_title">Услуги</div>
                                            <ul>
                                                <li><a href="#">ALTA</a></li>
                                                <li><a href="#">Biodevice</a></li>
                                                <li><a href="#">Biodevice ECO</a></li>
                                                <li><a href="#">ERGOBOX</a></li>
                                                <li><a href="#">GENESIS</a></li>
                                                <li><a href="#">NOVO EKO</a></li>
                                                <li><a href="#">UNI-SEP</a></li>
                                                <li><a href="#">UPONOR</a></li>
                                                <li><a href="#">ZORDE</a></li>
                                                <li><a href="#">Аквалос</a></li>
                                                <li><a href="#">Система очистки</a></li>
                                                <li><a href="#">Система очистки</a></li>
                                                <li><a href="#">Система очистки</a></li>
                                            </ul>  
                                        </div>
                                        
                                        <div class="nav_block">
                                            <div class="nav_block_title">Услуги</div>
                                            <ul>
                                                <li><a href="#">ALTA</a></li>
                                                <li><a href="#">Biodevice</a></li>
                                                <li><a href="#">Biodevice ECO</a></li>
                                                <li><a href="#">ERGOBOX</a></li>
                                                <li><a href="#">GENESIS</a></li>
                                                <li><a href="#">NOVO EKO</a></li>
                                                <li><a href="#">UNI-SEP</a></li>
                                                <li><a href="#">UPONOR</a></li>
                                                <li><a href="#">ZORDE</a></li>
                                                <li><a href="#">Аквалос</a></li>
                                                <li><a href="#">Система очистки</a></li>
                                                <li><a href="#">Система очистки</a></li>
                                                <li><a href="#">Система очистки</a></li>
                                            </ul>  
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    
                        <!-- header menu 2 --> 
                        <div class="header_menu">
                            <div class="mobile_menu_btn">
                                
                                <a class="header_menu_btn" id="nav-icon4" href="#" onclick="return false">
                                    <span>меню</span>
                                    <svg width="13" height="8" viewBox="0 0 13 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 1.5L6.5 6.5L1 1.5" stroke="white" stroke-width="2"/>
                                    </svg> 
                                </a>
                            </div> 
                            <nav class="row header_nav">  
                                <?php
                                    if ( has_nav_menu('menu_header') ) {
                                        wp_nav_menu( [
                                            'theme_location' => 'menu_header',
                                            'container'      => false,
                                            // 'walker'         => new UT_Mega_Menu(),
                                            'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                        ] );
                                    }
                                ?>
                                
                                <div class="visible_xs mobile_menu_btn_vn ">
                                    <a href="#" class="open_popup btn transparent_white block_icon" data-popup-id="popup1" onclick="return false">
                                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4 0.499957C4.493 0.499957 4.889 0.89596 4.889 1.38896C4.889 2.49596 5.067 3.56696 5.396 4.56196C5.493 4.86896 5.422 5.21996 5.178 5.46396L3.222 7.42996C4.502 9.94497 6.56 12.003 9.08 13.283L11.036 11.323C11.28 11.079 11.631 11.008 11.938 11.105C12.933 11.435 14.004 11.612 15.111 11.612C15.604 11.612 16 12.008 16 12.501V15.612C16 16.105 15.604 16.501 15.111 16.501C6.764 16.5 0 9.73597 0 1.38896C0 0.89596 0.4 0.499957 0.889 0.499957H4ZM12.493 0.0929565L16.089 3.56596L8.734 7.58396L12.493 0.0929565Z" fill="white"/>
                                        </svg> 
                                        <span>Заказать звонок</span>
                                    </a>
                                    
                                    <a href="#" class="btn_white popup_btn block_icon">
                                        <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_198_11272)">
                                        <path d="M13.5 0H1.5C0.949 0 0.5 0.449 0.5 1V15C0.5 15.552 0.949 16 1.5 16H13.5C14.052 16 14.5 15.552 14.5 15V1C14.5 0.449 14.052 0 13.5 0ZM4.5 14H2.5V12H4.5V14ZM4.5 10H2.5V8H4.5V10ZM8.5 14H6.5V12H8.5V14ZM8.5 10H6.5V8H8.5V10ZM12.5 14H10.5V8H12.5V14ZM12.5 5.5C12.5 5.77601 12.276 6 12 6H3C2.72399 6 2.5 5.77601 2.5 5.5V2.5C2.5 2.22399 2.72399 2 3 2H12C12.276 2 12.5 2.22399 12.5 2.5V5.5Z" fill="url(#paint0_linear_198_11272)"/>
                                        </g>
                                        <defs>
                                        <linearGradient id="paint0_linear_198_11272" x1="0.5" y1="16" x2="14.5756" y2="15.988" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#74B427"/>
                                        <stop offset="1" stop-color="#345D02"/>
                                        </linearGradient>
                                        <clipPath id="clip0_198_11272">
                                        <rect width="14" height="16" fill="white" transform="translate(0.5)"/>
                                        </clipPath>
                                        </defs>
                                        </svg>

                                        <span>Рассчитать стоимость онлайн</span>
                                    </a> 
                                    
                                </div>
                                
                                
                            </nav>
                        </div>
                    </div>
                </div>
            </div>  
        </div> 
  
    </header>

    <main> 