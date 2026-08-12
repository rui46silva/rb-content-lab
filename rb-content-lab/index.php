<?php
/**
 * Fallback genérico (loop simples).
 *
 * Foco atual do tema é a landing (page-templates/landing.php). Este ficheiro
 * garante um tema clássico válido e serve de base para páginas/artigos futuros.
 *
 * @package RB_Content_Lab
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>
<main class="rb-container rb-section">
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<article <?php post_class(); ?> style="margin-bottom:3rem;">
				<h2 style="font-size:1.5rem;"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<div class="rb-muted"><?php the_excerpt(); ?></div>
			</article>
		<?php endwhile; ?>
	<?php else : ?>
		<p>Ainda não há conteúdo publicado.</p>
	<?php endif; ?>
</main>
<?php
get_footer();
