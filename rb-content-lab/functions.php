<?php
/**
 * RB Content Lab — funções do tema (PHP clássico).
 *
 * Foco atual: landing page de captação "Direction over Noise", com template PHP
 * e textos editáveis por página (ACF). O tema mantém theme.json para os design
 * tokens e estilos globais. Artefactos do block theme ficam em /future para uso
 * posterior.
 *
 * @package RB_Content_Lab
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'RB_CONTENT_LAB_VERSION', '2.0.0' );

// Textos-base + helper de leitura da landing.
require_once get_template_directory() . '/inc/landing-defaults.php';
// Campos ACF da landing (registados por código).
require_once get_template_directory() . '/inc/landing-fields.php';
// SEO — dados estruturados (JSON-LD).
require_once get_template_directory() . '/inc/schema.php';

/**
 * Suportes do tema.
 */
function rb_content_lab_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'html5', array( 'search-form', 'gallery', 'caption', 'style', 'script', 'navigation-widgets' ) );
	add_theme_support( 'custom-logo', array(
		'height'      => 48,
		'width'       => 200,
		'flex-height' => true,
		'flex-width'  => true,
	) );

	register_nav_menus( array(
		'primary' => __( 'Menu principal', 'rb-content-lab' ),
	) );

	load_theme_textdomain( 'rb-content-lab', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'rb_content_lab_setup' );

/**
 * Estilos e ativos.
 */
function rb_content_lab_enqueue_assets() {
	$dir = get_template_directory();
	$uri = get_template_directory_uri();

	// Folha global (tokens, base, utilitários).
	$style_ver = file_exists( "$dir/style.css" ) ? (string) filemtime( "$dir/style.css" ) : RB_CONTENT_LAB_VERSION;
	wp_enqueue_style( 'rb-content-lab', $uri . '/style.css', array(), $style_ver );

	// CSS + JS da landing — só quando o template está em uso (performance).
	if ( is_page_template( 'page-templates/landing.php' ) ) {
		$landing_ver = file_exists( "$dir/assets/css/landing.css" ) ? (string) filemtime( "$dir/assets/css/landing.css" ) : RB_CONTENT_LAB_VERSION;
		wp_enqueue_style( 'rb-content-lab-landing', $uri . '/assets/css/landing.css', array( 'rb-content-lab' ), $landing_ver );

		$js_ver = file_exists( "$dir/assets/js/landing.js" ) ? (string) filemtime( "$dir/assets/js/landing.js" ) : RB_CONTENT_LAB_VERSION;
		wp_enqueue_script( 'rb-content-lab-landing', $uri . '/assets/js/landing.js', array(), $js_ver, array( 'strategy' => 'defer', 'in_footer' => true ) );
	}
}
add_action( 'wp_enqueue_scripts', 'rb_content_lab_enqueue_assets' );

/**
 * Preload da fonte de display (Fraunces) — reduz o LCP em headings
 * above-the-fold, ajudando os Core Web Vitals e o SEO técnico.
 */
function rb_content_lab_preload_fonts() {
	printf(
		'<link rel="preload" href="%s" as="font" type="font/woff2" crossorigin>' . "\n",
		esc_url( get_template_directory_uri() . '/assets/fonts/fraunces-variable-latin.woff2' )
	);
}
add_action( 'wp_head', 'rb_content_lab_preload_fonts', 1 );

/**
 * Limpeza do <head> para uma frente mais leve e segura.
 */
function rb_content_lab_clean_head() {
	remove_action( 'wp_head', 'wp_generator' );
	remove_action( 'wp_head', 'wlwmanifest_link' );
	remove_action( 'wp_head', 'rsd_link' );
}
add_action( 'init', 'rb_content_lab_clean_head' );
