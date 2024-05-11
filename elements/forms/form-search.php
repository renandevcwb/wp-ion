<?php 
/**
 * 
 * Formulário de pesquisa
 * 
 * @package wp-ion
 * 
 * @since 1.0.0
 * 
 */?>
<!-- Formulário de Pesquisa Interna -->
<div class="collapse navbar-collapse" id="searchSupportedContent">
    <form role="search" class="form-group d-flex"  method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
        <input aria-label="" class="form-control" id="" type="search" placeholder="Digite sua pesquisa" autocomplete="on" name="s">
        <button class="btn btn-primary" id="" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
    </form>
</div>
<!-- Fim do Formulário de Pesquisa Interna -->
