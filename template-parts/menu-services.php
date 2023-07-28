<?php 
$menu_items = wp_get_nav_menu_items('Услуги header');
$hierarhy_items = ut_menu_hierarhy_items($menu_items);

if ( ! $hierarhy_items ) {
    return false;
}
?>

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
                    <?php foreach ( $hierarhy_items as $hierarhy_item ) : ?>
                        <li>
                            <a href="<?php echo esc_url($hierarhy_item['url']); ?>">
                                <?php echo esc_html($hierarhy_item['label']); ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>  
            </div> 
            
        </div>
    </div>
</div>