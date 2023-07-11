<?php

/**
 * form Block Template.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'form-' . $block['id'];
$className = 'block_100';

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

$form = get_field('form_cf');
$contact_form = WPCF7_ContactForm::get_instance( $form->ID );
?>

<?php if ( !empty( $_POST['query']['preview'] ) ) : ?>

    <figure>
        <img src="<?php echo THEME_URI; ?>/img/gutenberg-preview/form.png" alt="Preview" style="width:100%;">
    </figure>

<?php else : ?>

    <div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>"> 
        <div class="container">   
            <div class="form white">
                <div class="form_l">
                    <?php echo do_shortcode( $contact_form->shortcode() ); ?>
                </div>
                <div class="form_r">
                    <div class="form_r_title">Что будет после отправки заявки?</div>
                    <div class="form_ul">
                        <ul>
                            <li>Позвоним</li>
                            <li>Зададим уточняющие вопросы</li>
                            <li>Рассчитаем стоимость и сроки</li>
                            <li>Составим договор</li>
                            <li class="active">Выполним работы</li>
                        </ul>
                    </div>     
                </div>
            </div>     
        </div>
    </div>

<?php endif; ?>