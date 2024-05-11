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
<nav class="navbar navbar-expand-md bg-nav-top sticky-top" role="navigation">
    <div class="container-fluid">
        <div class="row w-100 m-0 p-0">
            <div class="col-md d-flex py-1 px-0 w-100 justify-content-between align-items-center">
                <button class="navbar-toggler ns-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa-solid fa-bars"></i>
                </button>
                <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) );?>">
                    <img src="<?php echo esc_url( get_bloginfo( 'template_url' ) . '/assets/images/logo-top.svg' );?>" alt="Logotipo para barra superior do site"/>
                </a>
                <div class="d-flex justify-content-end">
                <button class="navbar-toggler ns-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#searchSupportedContent" aria-controls="searchSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
                </div>
            </div>
            <div class="col-md d-flex align-items-center justify-content-center">
                <?php ion_get_element( 'form', 'search' );?>
            </div>
            <div class="col-md p-0 align-items-center d-flex">
                <div class="collapse navbar-collapse d-md-flex justify-content-md-end justify-content-sm-center" id="navbarSupportedContent">
                <?php 
                if( has_nav_menu( 'top' ) ){
                    wp_nav_menu(
                        array(
                            'theme_location' => 'top',
                            'container'      => false,
                            'menu_class'     => 'navbar-nav navbar-top-list'
                        )
                    );
                }
                ?>
                </div>
            </div>
        </div>
    </div>
</nav>
<!-- Fim da Bara de Navegação Superior -->
