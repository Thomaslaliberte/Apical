<header>    
    <div id="header_content">
        <div id="div_vide"></div>
        <div id="image_header">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img id="image_apical" src="https://apical.xyz/medias/fr/LogoApical-blanc.svg" alt="Apical" ></a>  
        </div>
        <div id="icone_section">
            <div id="sous_section_icone">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="https://apical.xyz/medias/commun/Accueil-MenuSecondaire.svg" alt="Acceuil" class="icone_header"></a>
                <img id="boutonrecherche"src="https://apical.xyz/medias/commun/Rechercher-MenuSecondaire.svg" alt="Recherche" class="icone_header">
                <img id="boutonlogin"src="https://apical.xyz/medias/commun/Login-MenuSecondaire.svg" alt="Login" class="icone_header">
            </div>
        </div>
    </div>
    <div id="bas_header">
        <?php
    $pages = get_pages();
    foreach($pages as $page) {
        $link = 1;
        echo('<a class="navpage" href="' . get_page_link( $page->ID ) . '">' . $page->post_title .'</a>');
        }?>
    </div>
    <div id="fenetrerecherche" style="display:none;">
        <div class="boutonfermer" id="boutonfermerrecherche">x</div>
    <?php get_search_form(); ?>
    </div>
    <div id="fenetrelogin" style="display:none;">
        <div class="boutonfermer" id="boutonfermerlogin">x</div>
        <?php 
        $args = array(
            'redirect'        => 'http://localhost:8888/wp-admin/',
            'label_username'    =>'*Usager:  ',
            'label_password'    =>'*Mot de passe:',
            'label_remember'    =>'rester connecté',
            'label_log_in' =>'Soumettre'
        );
        wp_login_form($args);?>
         
    </div>
</header>