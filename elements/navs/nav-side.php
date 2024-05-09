<?php 
/**
 * 
 * Barra de navegação lateral
 * 
 * @package wp-ion
 * 
 * @since 1.0.0
 * 
 */?>
<!-- Barra de navegação Lateral -->
<aside class="col-md-3">
    <?php ion_get_element( 'form', 'search' );?>
    <h3 class="">Navegue pelas opções</h3>
    <div class="">
        <?php 
        wp_nav_menu(
            array(
                'theme_location' => 'side',
                'container'      => false,
                'menu_class'     => ''
            )
        );
        ?>
    </div>
</aside>
<!-- Fim da Barra de Navegação Lateral -->
