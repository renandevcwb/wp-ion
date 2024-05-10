<?php 
/**
 * 
 * Barra de navegação Footer 4
 * 
 * @package wp-ion
 * 
 * @since 1.0.0
 * 
 */?>
<div class="nav-socials">
    <h4 class="">siga nas Redes Sociais</h4>
    <?php 
    if( has_nav_menu( 'footer4' ) ){

        wp_nav_menu(
            array(
                'theme_location' => 'footer4',
                'container'      => false,
                'menu_id'        => 'NavSocial',
                'menu_class'     => 'nav flex-column',
                'link_before'    => '<i class="fa-brands fa-',
                'link_after'     => '"></i>'
            )
        );
    }
    ?>
</div>
