<?php

/**
 * contacts Block Template.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'contacts-' . $block['id'];
$className = 'container di_content';

if ( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
if ( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}

if ( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

$title = get_field('title_contacts');
$logo_id = get_field('logo_contacts');
$logo_url = wp_get_attachment_url( $logo_id, 'full' );
$shedules = get_field('shedules_contacts');
$address = get_field('address_contacts');
$text_phone = get_field('text_phone_contacts');
$phone = get_field('phone_contacts');
$txt_btn = get_field('txt_btn_contacts');
$form = get_field('form_contacts');
$mail = get_field('mail_contacts');
$s_networks = get_field('sn_contacts');
$map = get_field('map_contacts');
$desc = get_field('desc_contacts');
?>

<?php if ( !empty( $_POST['query']['preview'] ) ) : ?>

    <figure>
        <img src="<?php echo THEME_URI; ?>/img/gutenberg-preview/contacts.png" alt="Preview" style="width:100%;">
    </figure>

<?php else : ?>

    <div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>"> 
        <div class="row">
            <div class="simple_page">

                <?php if ($title) : ?>
                    <div class="page_header">   
                        
                        <?php do_action( 'echo_kama_breadcrumbs' ); ?>

                        <div class="page_title">
                            <h1><?php echo esc_html($title); ?></h1>
                        </div>
                    </div>
                <?php endif; ?>

                <div class="simple_page_content">  
                    <div class="contact_block"> 
                        <div class="contact_info">
                            <div class="footer_right_vn">

                                <?php if ($logo_url) : ?>
                                    <div class="footer_logo">
                                        <a href="<?php echo esc_url( home_url('/') ); ?>">
                                            <img src="<?php echo esc_attr($logo_url); ?>" alt="Logo">
                                        </a>
                                    </div>
                                <?php endif; ?>

                                <?php if ($shedules) : ?>
                                    <div class="footer_time">
                                        <?php echo nl2br($shedules); ?>
                                    </div>
                                <?php endif; ?>

                                <?php if ($address) : ?>
                                    <div class="footer_adress block_icon">
                                        <svg width="16" height="23" viewBox="0 0 16 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.99985 0C3.60927 0 0 3.28108 0 7.96153C0 9.63171 0.41058 10.7936 1.17316 12.0806L7.4615 22.696V22.6958C7.56989 22.8836 7.77615 23 8 23C8.22385 23 8.43011 22.8836 8.53849 22.6958L14.8268 12.0804C15.5894 10.7936 16 9.63172 16 7.96154C16 3.28113 12.3907 4.82077e-06 8.00015 4.82077e-06L7.99985 0ZM7.99985 4.1281C10.039 4.1281 11.692 5.71229 11.692 7.6665C11.692 9.62071 10.039 11.2049 7.99985 11.2049C5.96071 11.2049 4.30766 9.62071 4.30766 7.6665C4.30766 5.71229 5.96071 4.1281 7.99985 4.1281Z" fill="url(#paint0_linear_41_1742)"></path>
                                            <defs>
                                                <linearGradient id="paint0_linear_41_1742" x1="-1.30426e-08" y1="23" x2="16.0864" y2="22.9891" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#74B427"></stop>
                                                    <stop offset="1" stop-color="#345D02"></stop>
                                                </linearGradient>
                                            </defs>
                                        </svg> 
                                        <span><?php echo nl2br($address); ?></span> 
                                    </div>
                                <?php endif; ?>

                                <?php if ($text_phone) : ?>
                                    <div class="footer_text2">
                                        <?php echo nl2br($text_phone); ?>
                                    </div>
                                <?php endif; ?>

                                <?php if ($phone) : ?>
                                    <div class="footer_tel">
                                        <a href="tel:<?php echo esc_attr($phone); ?>" class="block_icon">
                                            <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M19.8332 14.5832C18.3803 14.5832 16.9746 14.3496 15.6686 13.9178C15.2657 13.7904 14.805 13.8836 14.4848 14.2039L11.9175 16.7764C8.61 15.0964 5.90887 12.3953 4.22887 9.09431L6.79612 6.51525C7.11637 6.195 7.20956 5.73431 7.08225 5.33137C6.64912 4.02544 6.41681 2.61975 6.41681 1.16681C6.41681 0.51975 5.89706 0 5.25 0H1.16681C0.525 0 0 0.51975 0 1.16681C0 12.1223 8.87775 21 19.8332 21C20.4803 21 21 20.4803 21 19.8332V15.75C21 15.1029 20.4803 14.5832 19.8332 14.5832Z" fill="url(#paint0_linear_41_1751)"></path>
                                                <defs>
                                                    <linearGradient id="paint0_linear_41_1751" x1="-1.71185e-08" y1="21" x2="21.1134" y2="20.9795" gradientUnits="userSpaceOnUse">
                                                        <stop stop-color="#74B427"></stop>
                                                        <stop offset="1" stop-color="#345D02"></stop>
                                                    </linearGradient>
                                                </defs>
                                            </svg> 
                                            <span><?php echo esc_html($phone); ?></span>
                                        </a>
                                    </div> 
                                <?php endif; ?>

                                <?php if ($txt_btn && $form) : ?>
                                    <div class="footer_btn">
                                        <button type="button" class="btn open_popup" data-popup-id="<?php echo $id; ?>" onclick="return false">
                                            <?php echo esc_html($txt_btn); ?>
                                        </button>
                                    </div>
                                    <?php get_template_part('template-parts/modals/request', 'call', ['id' => $id, 'form' => $form]); ?>
                                <?php endif; ?>

                                <?php if ($mail) : ?>
                                    <div class="mail block_icon">
                                        <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.603539 0H19.3965L10.0104 8.14145L0.603539 0ZM0 1.50493L9.56296 9.81908C9.80575 10.058 10.1943 10.058 10.437 9.81908L20 1.50493V15H0V1.50493Z" fill="url(#paint0_linear_87_3654)"/>
                                            <defs>
                                                <linearGradient id="paint0_linear_87_3654" x1="-1.63033e-08" y1="15" x2="20.108" y2="14.9739" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#74B427"/>
                                                    <stop offset="1" stop-color="#345D02"/>
                                                </linearGradient>
                                            </defs>
                                        </svg> 
                                        <a href="mailto:<?php echo esc_attr($mail); ?>">
                                            <?php echo esc_html($mail); ?>
                                        </a>
                                    </div>
                                <?php endif; ?>

                                <?php if ($s_networks) : ?>
                                    <div class="contact_soc">

                                        <?php 
                                        foreach ($s_networks as $s_network) : 
                                            $icon_url = wp_get_attachment_url( $s_network['icon_sn_contacts'], 'full' );
                                        ?>
                                            <a href="<?php echo esc_url($s_network['url_contacts']); ?>" target="_blank">
                                                <img src="<?php echo esc_attr($icon_url); ?>" alt="Soc network">
                                            </a>
                                        <?php endforeach; ?>

                                    </div>
                                <?php endif; ?>

                            </div>
                        </div>

                        <?php if ($map) : ?>
                            <div class="contact_map" id="map">
                                <?php echo $map; ?>
                            </div> 
                        <?php endif; ?>

                    </div> 

                    <?php if ($desc) : ?>
                        <div class="requisites">
                            <?php echo $desc; ?>
                        </div>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>

<?php endif; ?>