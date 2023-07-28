<?php

/**
 * cities Block Template.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'cities-' . $block['id'];
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

$title = get_field('title_cities');
$cities = get_field('list_cities');
?>

<?php if ( !empty( $_POST['query']['preview'] ) ) : ?>

    <figure>
        <img src="<?php echo THEME_URI; ?>/img/gutenberg-preview/cities.png" alt="Preview" style="width:100%;">
    </figure>

<?php else : ?>

    <div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>"> 
        <div class="row">
            <div class="simple_page">
                <div class="city">

                    <?php if ( $title ) : ?>
                        <h3><?php echo nl2br($title); ?></h3> 
                    <?php endif; ?>

                    <?php if ( $cities ) : ?>
                        <div class="city_list">
                            <?php echo $cities; ?>
                        </div>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>

<?php endif; ?>