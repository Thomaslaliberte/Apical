<!DOCTYPE html>
<html>
    <head>
        <?php wp_head();?>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <title><?php wp_title( '|', true, 'right' ); ?></title>
        <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" />
    </head>
    <?php get_header(); ?>

    <body>
        
        
        <div id="content">
            j
            <div id="contenuPrincipal"></div>
        </div>
        
        
    </body>    
    <?php get_footer(); ?>

</html>
