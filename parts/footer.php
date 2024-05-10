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
                    <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) );?>"><img src="<?php echo esc_url( get_bloginfo( 'template_url' ) . '/assets/images/logo-footer.svg' );?>" alt="Logotipo para rodapé do site"/></a>
                    <span class="comercial-info"></span>
                    <?php 
                    ion_get_element( 'nav', 'footer4' );
                    ?>
                </div>
            </div>
            <div class="row copy-info bg-attention py-3">
                <div class="col-md">
                </div>
                <div class="col-md text-center">
                    <span class=""><i class="fa-regular fa-copyright"></i> 2024. Todos os diretos reservados</span>
                </div>
                <div class="col-md text-end">
                    <span class="">Criado com <i class="fa-solid fa-heart" style="color: #e02048;"></i> Por <a href="https://" target="_blank" rel="noopener noreferrer"></a></span>
                </div>
            </div>
        </footer>
        <?php wp_footer();?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>
