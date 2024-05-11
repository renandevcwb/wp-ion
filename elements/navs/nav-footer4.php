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
<div class="nav-socials flex-column">
    <h4 class="social-nav-title">siga nas Redes Sociais</h4>
    <?php 
    if( has_nav_menu( 'footer4' ) ){

        wp_nav_menu(
            array(
                'theme_location' => 'footer4',
                'container'      => false,
                'menu_id'        => 'NavSocial',
                'menu_class'     => 'nav social-navbar d-flex justify-content-center',
                'link_before'    => '<i class="fa-brands fa-',
                'link_after'     => '"></i>'
            )
        );
    }
    ?>
</div>
