<?php 
$blocks = $args['blocks'];

if ( $blocks ) : 
?>
    <div class="block_icon_prod"> 
    
        <?php 
        foreach ( $blocks as $block ) : 
            $icon_url = wp_get_attachment_url( $block['icon_blocks_prp'], 'full' ); 
        ?>
            <div class="block_icon_prod_item">
                <div class="svg">

                    <?php if ( $icon_url ) : ?>
                        <img src="<?php echo esc_attr($icon_url); ?>" alt="Icon">
                    <?php endif; ?>

                </div>
                
                <div class="block_icon_prod_content">
                    <?php echo nl2br($block['txt_blocks_prp']); ?>
                </div>
            </div>   
        <?php endforeach; ?>
            
    </div>
<?php endif; ?>