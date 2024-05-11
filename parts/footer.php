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
        <div class="container-fluid newsletter-footer bg-blue py-4">
            <div class="container">
                <div class="row text-white text-center">
                    <h6 class="">Newsletter</h6>
                    <p class="text-white">Fique por dentro do que acontece no mundo da pagramação!</p>
                </div>
                <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                <form class="form-group d-flex">
                    <input class="form-control border-0 rounded-0" type="email" name="news-email" placeholder="Digite seu email"/>
                    <button type="submit" class="btn btn-primary border-0 rounded-0">Assinar</button>
                </form>
                </div>
                <div class="col-md-3"></div>
                </div>
            </div>
        </div>
        <footer class="container-fluid ion-bg-gray">
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
            <div class="row copyrights pt-2 pb-1 text-center">
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
