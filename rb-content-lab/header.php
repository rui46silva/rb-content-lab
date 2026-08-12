<?php
/**
 * Cabeçalho genérico (páginas/artigos futuros).
 *
 * @package RB_Content_Lab
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="site-header rb-bg-ink rb-on-dark">
	<div class="rb-container" style="display:flex;align-items:center;justify-content:space-between;padding-block:1rem;">
		<a class="rb-lp-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
			<?php
			if ( has_custom_logo() ) {
				$rb_logo = wp_get_attachment_image_url( get_theme_mod( 'custom_logo' ), 'full' );
				if ( $rb_logo ) {
					printf( '<img src="%s" alt="%s">', esc_url( $rb_logo ), esc_attr( get_bloginfo( 'name' ) ) );
				}
			}
			?>
			<span><?php bloginfo( 'name' ); ?></span>
		</a>
		<?php
		if ( has_nav_menu( 'primary' ) ) {
			wp_nav_menu( array(
				'theme_location' => 'primary',
				'container'      => 'nav',
				'menu_class'     => 'site-nav',
				'depth'          => 1,
			) );
		}
		?>
	</div>
</header>
