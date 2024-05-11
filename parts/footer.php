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
        <div class="container-fluid bg-primary pt-1">
        </div>
        <footer class="container-fluid mt-3">
            <div class="row py-4">
                <?php 
                if( has_nav_menu( 'footer1' ) ):
                    ion_get_element( 'nav', 'footer1' );
                elseif( has_nav_menu( 'footer2' ) ):
                    ion_get_element( 'nav', 'footer2' );
                elseif( has_nav_menu( 'footer3' ) ):
                    ion_get_element( 'nav', 'footer3' );
                endif;
                ?>
                <div class="col-md py-2 d-flex flex-column align-items-center justify-content-center">
                    <div class="row pb-3">
                        <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) );?>"><img src="<?php echo esc_url( get_bloginfo( 'template_url' ) . '/assets/images/logo-footer.svg' );?>" alt="Logotipo para rodapé do site"/></a>
                    </div>
                    <div class="row text-center">
                        <p class="comercial-info">
                            <i class="fa-solid fa-phone-volume"></i><span> (41) 99631-6848</span><br>
                            <i class="fa-solid fa-envelope"></i><span> contato@renandev.com.br</span>
                        </p>
                        <?php 
                        ion_get_element( 'nav', 'footer4' );
                        ?>
                    </div>
                </div>
            </div>
            <div class="row copy-info bg-copyrights pt-2 pb-1 text-center">
                <div class="col-md">
                </div>
                <div class="col-md text-center py-1">
                    <span class=""><i class="fa-regular fa-copyright"></i> 2024. Todos os diretos reservados</span>
                </div>
                <div class="col-md text-md-end py-1">
                    <span>Criado com <i class="fa-solid fa-heart" style="color: #e02048;"></i> Por <a class="create-message" href="https://renandev.com.br" target="_blank" rel="noopener noreferrer">RenanDev</a></span>
                </div>
            </div>
        </footer>
        <?php wp_footer();?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>
