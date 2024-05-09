<?php 
/**
 * 
 * Arquivo de manipulação do de ganchos do WordPress
 * 
 * @package wp-ion
 * 
 * @since 1.0.0
 * 
 */

/**
 * Adiciona suporte à várias Features do WordPress
 */
function ion_theme_supports(){

    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link', 'status' ) );
    add_theme_support( 'woocommerce' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'script', 'style' ) );
    add_theme_support( 'customize-selective-refresh-widgets' );
    add_theme_support( 'align-wide' );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'editor-styles' );

}

add_action( 'after_setup_theme', 'ion_theme_supports' );
