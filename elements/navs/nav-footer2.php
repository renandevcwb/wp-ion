<?php 
/**
 * 
 * Barra de navegação Footer 2
 * 
 * @package wp-ion
 * 
 * @since 1.0.0
 * 
 */?>
<div class="col-md">
    <h3 class=""></h3>
    <div class="">
        <?php 
        if( has_nav_menu( 'footer2' ) ):
            wp_nav_menu(
                array(
                    'theme_location' => 'footer2',
                    'container'      => false,
                    'menu_class'     => ''
                )
            );
        endif;
        ?>
    </div>
</div>
