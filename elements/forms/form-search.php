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
    <form role="search" class="form-group w-100 search-form d-flex"  method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
        <input aria-label="" class="form-control search-input" id="" type="search" placeholder="O que você está procurando?" autocomplete="on" name="s">
        <button class="btn button-search" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
    </form>
</div>
<!-- Fim do Formulário de Pesquisa Interna -->
