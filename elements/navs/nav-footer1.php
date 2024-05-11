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
<div class="col-md py-2">
    <h3 class="nav-footer-title">Continue Navegando</h3>
    <div class="first-footer-navbar">
        <?php 
        if( has_nav_menu( 'footer1' ) ):
            wp_nav_menu(
                array(
                    'theme_location' => 'footer1',
                    'container'      => false,
                    'menu_class'     => 'nav flex-column nav-footer'
                )
            );
        endif;
        ?>
    </div>
</div>
