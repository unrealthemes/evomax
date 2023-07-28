<?php

/**
 * breadcrumbs Block Template.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'breadcrumbs-' . $block['id'];
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
?>

<?php if ( !empty( $_POST['query']['preview'] ) ) : ?>

    <figure>
        <img src="<?php echo THEME_URI; ?>/img/gutenberg-preview/breadcrumbs.png" alt="Preview" style="width:100%;">
    </figure>

<?php else : ?>

    <div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>"> 
        <div class="row">
            <?php do_action( 'echo_kama_breadcrumbs' ); ?>
        </div>
    </div>

<?php endif; ?>