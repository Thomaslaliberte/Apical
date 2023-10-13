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
        <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/script.js" type="text/javascript"></script>
    </head>
    <?php get_header(); ?>

    <body>
        
        <?php
        global $wp;

         if(home_url( $_SERVER['REQUEST_URI'] ) === esc_url( home_url( '/' ) )): ?>
        <div class="content">
            <div id="nom">
                <hr class="hrnom">
                <div id="divnom">Formation PUB020 : WordPress, 2023</div>
                <hr class="hrnom" id="hrnombas">
            </div>
            <div id="boutondeveloppement">
                <div class="btn">
                    Tout développer
                </div>
            </div>
            
            <div id="contenuPrincipal">
            <?php get_template_part('content')?>
            </div>
        </div>
        <?php
        else : ?>
            <div id="divpage" class="content">
            <h3><?php the_title(); ?></h3>

            <?php the_content(); ?>
            <?php wp_link_pages(); ?>
            <?php edit_post_link(); ?>
            </div>
        <?php endif;?>
    </body>   
    
    <?php get_footer(); ?>

</html>
