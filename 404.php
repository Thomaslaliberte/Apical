<?php
/**
 * The template for displaying 404 pages (Not Found)
 */
?>
<!DOCTYPE html>
<html>
    <head>
        <?php wp_head();?>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <title><?php wp_title( '|', true, 'right' ); ?></title>
        <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Homemade+Apple" rel="stylesheet">

    </head>
    <?php get_header(); ?>

    <body>
        
        
        <div id="content">
            <div id="contenuPrincipal">
                <hr class="hr_404">
                <p>La page demander n'existe pas</p>
                <hr class="hr_404">
            </div>
        </div>
        
        <hr style="color='white'"> 
    </body>   
    
    <?php get_footer(); ?>

</html>
