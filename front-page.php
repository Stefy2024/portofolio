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


<!--zone projet-->$_COOKIE

<?php
get_footer();
?>