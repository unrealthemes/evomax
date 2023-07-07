<?php 
$logo_id = get_field('logo_f', 'option');
$logo_url = wp_get_attachment_url( $logo_id, 'full' );
$phone = get_field('phone_f', 'option');
$shedules = get_field('shedules_f', 'option');
$address = get_field('address_f', 'option');
$txt = get_field('txt_f', 'option');
$form = get_field('form_f', 'option');
?>
    
    </main>

	<footer> 
         <div class="container">
            <div class="row_di">
                <div class="footer_top">
                    <div class="footer_top_row">

                        <div class="footer_menu">
                            <div>
                                <div class="footer_menu_title"><?php echo ut_get_title_menu_by_location('menu_footer_1'); ?></div>
                                <?php
                                    if ( has_nav_menu('menu_footer_1') ) {
                                        wp_nav_menu( [
                                            'theme_location' => 'menu_footer_1',
                                            'container'      => false,
                                            // 'walker'         => new UT_Mega_Menu(),
                                            'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                        ] );
                                    }
                                ?>

                                <div class="footer_menu_title"><?php echo ut_get_title_menu_by_location('menu_footer_5'); ?></div>
                                <?php
                                    if ( has_nav_menu('menu_footer_5') ) {
                                        wp_nav_menu( [
                                            'theme_location' => 'menu_footer_5',
                                            'container'      => false,
                                            // 'walker'         => new UT_Mega_Menu(),
                                            'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                        ] );
                                    }
                                ?>
                            </div>
                            <div>
                                <div class="footer_menu_title"><?php echo ut_get_title_menu_by_location('menu_footer_2'); ?></div>
                                <?php
                                    if ( has_nav_menu('menu_footer_2') ) {
                                        wp_nav_menu( [
                                            'theme_location' => 'menu_footer_2',
                                            'container'      => false,
                                            // 'walker'         => new UT_Mega_Menu(),
                                            'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                        ] );
                                    }
                                ?>
                            </div>
                            <div>
                                <div class="footer_menu_title"><?php echo ut_get_title_menu_by_location('menu_footer_3'); ?></div>
                                <?php
                                    if ( has_nav_menu('menu_footer_3') ) {
                                        wp_nav_menu( [
                                            'theme_location' => 'menu_footer_3',
                                            'container'      => false,
                                            // 'walker'         => new UT_Mega_Menu(),
                                            'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                        ] );
                                    }
                                ?>
                            </div>
                            <div>
                                <div class="footer_menu_title"><?php echo ut_get_title_menu_by_location('menu_footer_4'); ?></div>
                                <?php
                                    if ( has_nav_menu('menu_footer_4') ) {
                                        wp_nav_menu( [
                                            'theme_location' => 'menu_footer_4',
                                            'container'      => false,
                                            // 'walker'         => new UT_Mega_Menu(),
                                            'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                        ] );
                                    }
                                ?>
                            </div>
                        </div>
                        
                        
                        <div class="footer_right">
                            <div class="footer_right_vn">
                                <div class="footer_logo">
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
                                
                                <?php if ($shedules) : ?>
                                    <div class="footer_time">
                                        <?php echo $shedules; ?>
                                    </div>
                                <?php endif; ?>

                                <?php if ($address) : ?>
                                    <div class="footer_adress block_icon">
                                        <svg width="16" height="23" viewBox="0 0 16 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.99985 0C3.60927 0 0 3.28108 0 7.96153C0 9.63171 0.41058 10.7936 1.17316 12.0806L7.4615 22.696V22.6958C7.56989 22.8836 7.77615 23 8 23C8.22385 23 8.43011 22.8836 8.53849 22.6958L14.8268 12.0804C15.5894 10.7936 16 9.63172 16 7.96154C16 3.28113 12.3907 4.82077e-06 8.00015 4.82077e-06L7.99985 0ZM7.99985 4.1281C10.039 4.1281 11.692 5.71229 11.692 7.6665C11.692 9.62071 10.039 11.2049 7.99985 11.2049C5.96071 11.2049 4.30766 9.62071 4.30766 7.6665C4.30766 5.71229 5.96071 4.1281 7.99985 4.1281Z" fill="url(#paint0_linear_41_1742)"/>
                                            <defs>
                                                <linearGradient id="paint0_linear_41_1742" x1="-1.30426e-08" y1="23" x2="16.0864" y2="22.9891" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#74B427"/>
                                                    <stop offset="1" stop-color="#345D02"/>
                                                </linearGradient>
                                            </defs>
                                        </svg> 
                                        <span><?php echo nl2br($address); ?></span> 
                                    </div>
                                <?php endif; ?>
                                
                                <?php if ($txt) : ?>
                                    <div class="footer_text2">
                                        <?php echo nl2br($txt); ?>
                                    </div>
                                <?php endif; ?>
                                
                                <?php if ($phone) : ?>
                                    <div class="footer_tel">
                                        <a href="tel:<?php echo $phone; ?>" class="block_icon">
                                            <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M19.8332 14.5832C18.3803 14.5832 16.9746 14.3496 15.6686 13.9178C15.2657 13.7904 14.805 13.8836 14.4848 14.2039L11.9175 16.7764C8.61 15.0964 5.90887 12.3953 4.22887 9.09431L6.79612 6.51525C7.11637 6.195 7.20956 5.73431 7.08225 5.33137C6.64912 4.02544 6.41681 2.61975 6.41681 1.16681C6.41681 0.51975 5.89706 0 5.25 0H1.16681C0.525 0 0 0.51975 0 1.16681C0 12.1223 8.87775 21 19.8332 21C20.4803 21 21 20.4803 21 19.8332V15.75C21 15.1029 20.4803 14.5832 19.8332 14.5832Z" fill="url(#paint0_linear_41_1751)"/>
                                                <defs>
                                                    <linearGradient id="paint0_linear_41_1751" x1="-1.71185e-08" y1="21" x2="21.1134" y2="20.9795" gradientUnits="userSpaceOnUse">
                                                        <stop stop-color="#74B427"/>
                                                        <stop offset="1" stop-color="#345D02"/>
                                                    </linearGradient>
                                                </defs>
                                            </svg> 
                                            <span><?php echo $phone; ?></span>
                                        </a>
                                    </div> 
                                <?php endif; ?>

                                <div class="footer_btn">
                                    <a href="#" class="btn">Заказать звонок</a>
                                </div>
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
                

            </div>
         </div>
         
        <div class="footer_niz">
            <div class="container">
                <?php
                    if ( has_nav_menu('menu_copyright') ) {
                        wp_nav_menu( [
                            'theme_location' => 'menu_copyright',
                            'container'      => false,
                            // 'walker'         => new UT_Mega_Menu(),
                            'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        ] );
                    }
                ?>
            </div>
        </div>
         
	</footer>
	<!-- Footer end -->

    <?php get_template_part('template-parts/back-to-top'); ?>

    <?php get_template_part('template-parts/modals/search'); ?>

    <?php get_template_part('template-parts/modals/form'); ?>
		
	<?php wp_footer(); ?>

    </body>
</html>   