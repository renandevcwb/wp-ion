<?php 
/**
 * 
 * Apenas o Loop padrão do WordPress
 * 
 * @package wp-ion
 * 
 * @since 1.0.0
 * 
 */

/**
 * The Loop
 */
if( have_posts() ):
    while( have_posts() ):
        the_post();
        the_content();
    endwhile;
endif;
