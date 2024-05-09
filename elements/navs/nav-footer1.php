<?php 
/**
 * 
 * Barra de navegação Footer 1
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
        if( has_nav_menu( 'footer1' ) ):
            wp_nav_menu(
                array(
                    'theme_location' => 'footer1',
                    'container'      => false,
                    'menu_class'     => ''
                )
            );
        endif;
        ?>
    </div>
</div>
