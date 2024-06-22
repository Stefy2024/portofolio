
<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage NathalieMota
 */
get_header();

    // Récupére les champs ACF pour chaque projet
$titre = get_field('titre');
$lienGit = get_field('lien_git_hub');
$imgAccueil = get_field('image_accueil');
$imgSecond = get_field('image_secondaire');
$descriProjet = get_field('description_projet');

?>
	<!-- partie 1 : projet avec ses détails-->
	<article class="projet_container">
		<div class="projet_container_flex">
			<h1><?php the_title(); ?></h1>
				<ul class="list_info">
					<li class="projet_git">Lien Git Hub:
						<?php
							if($lienGit) {
								echo $lienGit;
								} else {
								echo ('Pas de correspondance');
								}
						?>
					</li>
					<li class="projet_description">Description:
					<?php
							if($descriProjet) {
								echo $descriProjet;
								} else {
								echo ('Pas de correspondance');
								}
						?>
					</li>
				</ul>
		</div>

		<div>
			<?php if ($imgAccueil) {
				$post_url = get_permalink($post->ID);
								echo '<div class="projet_photo"> '; 
									echo '<a href="' . esc_url($post_url) . '"><img src="' . wp_get_attachment_image_url( $imgAccueil, 'large' ) . '" alt="photo projet"></a>';
										echo '<div class="overlay">';
											echo '<img class="img_lightbox" src="' . get_template_directory_uri() . '/assets/images/lien_lightbox.png" alt="lien lightbox">';
									echo '</a>';
									
								echo '</div>';
							
							}else {
					echo ('Pas de correspondance');
				} ?> 		
		</div>
	</article>
		<!-- partie 2: -->
	
					<!-- pour afficher les posts précédents ou suivants -->
		<div class="photo_next_prev">
				<?php
					$previous_post = get_previous_post();
					$next_post = get_next_post();
						//pour post précédent
					if ($previous_post) {
						$previous_title = strip_tags($previous_post->post_title);
						$previous_url = get_permalink($previous_post);
						$previous_thumbnail_id = get_field('image_accueil', $previous_post->ID); // Récupère l'ID de l'image
						$previous_thumbnail_url = wp_get_attachment_image_url($previous_thumbnail_id, 'thumbnail'); // Obtient l'URL de la miniature
						
						echo '<a class="nav-thumbnail" href="' . $previous_url . '" title="' . $previous_title . '">';
						
						if ($previous_thumbnail_url) {
							echo '<img src="' . $previous_thumbnail_url . '" alt="' . $previous_title . '" />';
						}
						echo '<span>←</span>';
						echo '</a>';
					}else{
						echo '<a class="nav-thumbnail" href="" title="">';
							echo '<img src="" alt="" />';
						echo '</a>';
					}
						//pour post suivant
					if ($next_post) {
						$next_title = strip_tags($next_post->post_title);
						$next_url = get_permalink($next_post);
						$next_thumbnail_id = get_field('image_accueil', $next_post->ID);
						$next_thumbnail_url = wp_get_attachment_image_url($next_thumbnail_id, 'thumbnail');
						
						echo '<a class="nav-thumbnail" href="' . $next_url . '" title="' . $next_title . '">';
						if ($next_thumbnail_url) {
							echo '<img src="' . $next_thumbnail_url . '" alt="' . $next_title . '" />';
						}
						echo '<span>→</span>';
						echo '</a>';
					}else{
						echo '<a class="nav-thumbnail" href="" title="">';
							echo '<img src="" alt="" />';
						echo '</a>';
					}
				?>
		</div>
	

<hr>
    </div>


			
</div>

<?php get_footer(); ?>