<?php
/**
 * SEO — Schema.org JSON-LD (dados estruturados).
 *
 * Injeta Organization + WebSite + ProfessionalService no <head>. Estes dados
 * ajudam o Google a perceber a marca e a mostrar rich results.
 *
 * Guarda: se um plugin de SEO (Rank Math ou Yoast) já estiver ativo, ele trata
 * do schema da Organization — para evitar duplicação, este output é ignorado.
 * Pode forçar via filtro: add_filter( 'rb_content_lab_force_schema', '__return_true' ).
 *
 * @package RB_Content_Lab
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Deve o tema imprimir o próprio schema?
 *
 * @return bool
 */
function rb_content_lab_should_output_schema() {
	if ( apply_filters( 'rb_content_lab_force_schema', false ) ) {
		return true;
	}
	// Se houver plugin de SEO a gerir schema, não duplicar.
	if ( defined( 'RANK_MATH_VERSION' ) || defined( 'WPSEO_VERSION' ) ) {
		return false;
	}
	return true;
}

/**
 * Imprime o JSON-LD no <head>.
 */
function rb_content_lab_output_schema() {
	if ( ! rb_content_lab_should_output_schema() ) {
		return;
	}

	$site_name = get_bloginfo( 'name' );
	$site_url  = home_url( '/' );
	$logo_id   = function_exists( 'get_theme_mod' ) ? get_theme_mod( 'custom_logo' ) : 0;
	$logo_url  = $logo_id ? wp_get_attachment_image_url( $logo_id, 'full' ) : '';

	$graph = array(
		array(
			'@type'       => array( 'Organization', 'ProfessionalService' ),
			'@id'         => $site_url . '#organization',
			'name'        => $site_name,
			'url'         => $site_url,
			'description' => get_bloginfo( 'description' ),
			'slogan'      => 'Direction over noise',
			'areaServed'  => 'PT',
			'knowsAbout'  => array(
				'Estratégia de conteúdo',
				'Comunicação de marca',
				'Copywriting',
				'Direção de arte',
				'Gestão de redes sociais',
			),
		),
		array(
			'@type'     => 'WebSite',
			'@id'       => $site_url . '#website',
			'url'       => $site_url,
			'name'      => $site_name,
			'publisher' => array( '@id' => $site_url . '#organization' ),
			'inLanguage' => get_bloginfo( 'language' ),
		),
	);

	if ( $logo_url ) {
		$graph[0]['logo']  = $logo_url;
		$graph[0]['image'] = $logo_url;
	}

	$schema = array(
		'@context' => 'https://schema.org',
		'@graph'   => $graph,
	);

	echo "\n<script type=\"application/ld+json\">\n";
	echo wp_json_encode( $schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT );
	echo "\n</script>\n";
}
add_action( 'wp_head', 'rb_content_lab_output_schema', 20 );
