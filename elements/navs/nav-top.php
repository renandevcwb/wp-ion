<?php 
/**
 * 
 * Barra de navegação superior
 * 
 * @package wp-ion
 * 
 * @since 1.0.0
 * 
 */?>
<!-- Barra de Navegação Superior -->
<nav class="navbar navbar-expand-md bg-ion" role="navigation">
    <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) );?>"><img src="<?php echo esc_url( get_template_directory_uri() . 'images/logo-top.svg' );?>" alt="Logotipo para barra superior do site"/></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <?php 
        if( has_nav_menu( 'top' ) ){
            wp_nav_menu(
                array(
                    'theme_location' => 'top',
                    'container'      => false,
                    'menu_class'     => 'navbar-nav me-auto mb-2 mb-lg-0'
                )
            );
        }
        ?>
    </div>
</nav>
<!-- Fim da Bara de Navegação Superior -->
