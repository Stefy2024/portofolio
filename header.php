<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>portofolio</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

    <?php wp_head(); ?>
</head>

<body>
    
<div class="nav_bar">
        <div class="logo-container">
            <a href="http://portofolio2.test/"> <img class="logo_img" src="<?php echo get_template_directory_uri(); ?>\assets\images\logo.jpg" alt="logo portofolio" /></a>
            <div class="logo-nom">S. Doussot</div>
        </div>
        <nav id="navigation">
            <?php wp_nav_menu(
                array(
                    'theme_location' => 'main')); ?>
        </nav>

        <!-- Bouton du menu burger -->
        <button class="burger_menu" aria-label="Menu principal">
            <span></span>
            <span></span>
            <span></span>
        </button>

         <!-- Icône de la croix pour fermer le menu -->
        <div class="close_icon" aria-label="Fermer le menu">
            &times;
        </div>
    </div>