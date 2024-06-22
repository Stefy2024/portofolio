<?php 
get_header();


// Chemin du dossier contenant vos images
$dossier = 'wp-content/themes/portofolio/assets/images_hero';

// Récupérer tous les noms de fichiers de votre dossier
$images = glob($dossier . '/*.{jpg,jpeg,png,gif}', GLOB_BRACE);

// Choisir une image aléatoire
$image_choisie = $images[array_rand($images)];
?>
<!-- zone hero-->
<div class='zone_hero'>

<?php
echo "<img src='$image_choisie' class='img_hero' alt='Image aléatoire' />";
?>

<h1>Portofolio</h1>
</div>


<!--zone projet-->
<div class="liste_projet">
<?php
    //paramètres pour l'affichage des projets
$paramrequette= array(
    'post_type' => 'projet', // type de contenu où sont stockées les projets
    'posts_per_page' => 4, // Récupère tous les articles  de ce type et en affiche 4
);
$projets = new WP_Query($paramrequette);

// Affiche les projets récupérés
if ($projets->have_posts()) {
    
    while ($projets->have_posts()) {
        $projets->the_post();

        if ( has_post_thumbnail() ) {
            the_post_thumbnail('large');
        }

         // Récupére les champs ACF pour chaque projet
            $titre = get_field('titre');
            $lienGit = get_field('lien_git_hub');
            $imgAccueil = get_field('image_accueil');
            $imgSecond = get_field('image_secondaire');
            $descriProjet = get_field('description_projet');

 
         // Vérifie si l'image existe et l'affiche
         if ($imgAccueil) {
             // Obtenir l'URL de la publication correspondante
             $post_url = get_permalink($post->ID);
         
             // Affiche l'image avec un lien vers la publication correspondante (photo-publi ou lightbox)
             
                     echo wp_get_attachment_image($imgAccueil, 'large');
                         echo '<div class="overlay">';
                            echo '<a href="' . esc_url($post_url) . '" class="link_publi">';
                            echo '<img class="img_publi" src="'.get_template_directory_uri().'/assets/images/lien_publi.png" alt="lien publication">';
                            echo '</a>';
                            echo '<p class="photo_reference">' . $titre . '</p>';
                         echo '</div>';
         }
    }
}

?>
</div>


<?php
get_footer();
?>