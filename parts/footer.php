<?php 
/**
 * 
 * Arquivo de rodapé
 * 
 * @package wp-ion
 * 
 * @since 1.0.0
 * 
 */?>
        <footer class="container-fluid">
            <div class="row">
                <?php 
                if( has_nav_menu( 'footer1' ) ):
                    ion_get_element( 'nav', 'footer1' );
                elseif( has_nav_menu( 'footer2' ) ):
                    ion_get_element( 'nav', 'footer2' );
                elseif( has_nav_menu( 'footer3' ) ):
                    ion_get_element( 'nav', 'footer3' );
                endif;
                ?>
                <div class="col-md">
                    <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) );?>"><img src="<?php echo esc_url( get_template_directory_uri() . 'images/logo-footer.svg' );?>" alt="Logotipo para rodapé do site"/></a>
                    <p class="comercial-info"></p>
                    <?php 
                    if( '' ):
                        ion_get_element( 'nav', 'footer4' );
                    endif;
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md">
                </div>
                <div class="col-md">
                    <p class=""></p>
                </div>
                <div class="col-md">
                    <a href="https://" target="_blank" rel="noopener noreferrer"><p class="">Criado com <i class="fa-solid fa-heart"></i> Por </p></a>
                </div>
            </div>
        </footer>
        <?php wp_footer();?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>
