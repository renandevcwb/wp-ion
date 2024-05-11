<?php 
/**
 * 
 * Arquivo de cabeçalho
 * 
 * @package wp-ion
 * 
 * @since 1.0.0
 * 
 */?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"/>
        <script src="https://kit.fontawesome.com/595eb97298.js" crossorigin="anonymous"></script>
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo esc_url( get_bloginfo( 'template_url' ) );?>/assets/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo esc_url( get_bloginfo( 'template_url' ) );?>/assets/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo esc_url( get_bloginfo( 'template_url' ) );?>/assets/favicon/favicon-16x16.png">
        <link rel="manifest" href="<?php echo esc_url( get_bloginfo( 'template_url' ) );?>/assets/favicon/site.webmanifest">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
        <?php wp_head();?>
    </head>
    <body>
        <?php ion_get_element( 'nav', 'top' );?>
