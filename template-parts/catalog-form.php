<?php 
$form = $args['form'];
$contact_form = WPCF7_ContactForm::get_instance( $form->ID );
?>

<div class="block_100"> 
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