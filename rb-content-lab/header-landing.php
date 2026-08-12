<?php
/**
 * Cabeçalho da landing — minimal (logo + 1 CTA) para reduzir fugas de conversão.
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
<body <?php body_class( 'rb-lp' ); ?>>
<?php wp_body_open(); ?>
<header class="rb-lp-header rb-on-dark rb-bg-ink">
	<div class="rb-container">
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
		<a class="rb-btn rb-btn--primary" href="#diagnostico"><?php echo esc_html( rb_landing_text( 'header_cta_label' ) ); ?></a>
	</div>
</header>
