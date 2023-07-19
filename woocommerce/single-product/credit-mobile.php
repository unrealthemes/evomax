<?php 
global $product;

$credits = get_field( 'credits_prstt', $product->get_id() );

if ( ! $credits ) :
    return false;
endif;
?>

<div class="object_ul visible_xs"> 
    <ul class="object_ul">

        <?php foreach ( $credits as $credit ) : ?>
            <li class="object_li">
                <div class="object_li_title"><strong>%</strong> <?php echo esc_html($credit['txt_credits_prstt']); ?></div>
                <span><?php echo esc_html($credit['val_credits_prstt']); ?></span>
            </li>
        <?php endforeach; ?>

    </ul>
</div>