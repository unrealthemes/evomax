<?php 
$banners = get_field('banners_cf', 'option');

if ( $banners ) :
?>

    <div class="block_baner cat_baner">

        <?php 
        foreach ( $banners as $banner ) : 
            $img_url = wp_get_attachment_url( $banner['img_id_banners_cf'], 'full' );
            $bg_img_url = ($img_url) ? 'background-image: url(' . $img_url . ');' : '';
        ?>

            <div class="block_baner_item">
                <div class="block_baner_item_l">

                    <?php if ( $banner['title_banners_cf'] ) : ?>
                        <div class="block_baner_title">
                            <?php echo nl2br($banner['title_banners_cf']); ?>
                        </div>
                    <?php endif; ?>

                    <?php if ( $banner['desc_banners_cf'] ) : ?>
                        <p><?php echo nl2br($banner['desc_banners_cf']); ?></p>
                    <?php endif; ?>

                    <?php if ( $banner['txt_link_banners_cf'] && $banner['link_banners_cf'] ) : ?>
                        <a href="<?php echo esc_url($banner['link_banners_cf']); ?>" class="btn_white">
                            <?php echo esc_html($banner['txt_link_banners_cf']); ?>
                        </a>
                    <?php endif; ?>

                </div>
                <div class="block_baner_item_r" style="<?php echo esc_attr($bg_img_url); ?>"></div> 
            </div> 

        <?php endforeach; ?>

    </div>

<?php 
endif;
?>