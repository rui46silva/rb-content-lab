<?php
/**
 * RB Content Lab — funções do tema.
 *
 * Tema de blocos (FSE). Mantém-se propositadamente enxuto: a maioria da
 * configuração vive em theme.json. Aqui ficam só supports, enfileiramento de
 * estilos, estilos de bloco e categorias de patterns.
 *
 * @package RB_Content_Lab
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Sem acesso direto.
}

// SEO — dados estruturados (JSON-LD).
require_once get_template_directory() . '/inc/schema.php';

if ( ! function_exists( 'rb_content_lab_setup' ) ) {
	/**
	 * Suportes do tema.
	 */
	function rb_content_lab_setup() {
		add_theme_support( 'wp-block-styles' );
		add_theme_support( 'responsive-embeds' );
		add_theme_support( 'editor-styles' );
		add_theme_support( 'html5', array( 'search-form', 'gallery', 'caption', 'style', 'script', 'navigation-widgets' ) );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'custom-logo', array(
			'height'      => 48,
			'width'       => 200,
			'flex-height' => true,
			'flex-width'  => true,
		) );

		// Estilos do editor (aplica o style.css no editor de blocos).
		add_editor_style( 'style.css' );

		load_theme_textdomain( 'rb-content-lab', get_template_directory() . '/languages' );
	}
}
add_action( 'after_setup_theme', 'rb_content_lab_setup' );

/**
 * Enfileira a folha de estilo principal, com versão baseada no ficheiro para
 * cache-busting automático a cada deploy.
 */
function rb_content_lab_enqueue_assets() {
	$style_path = get_template_directory() . '/style.css';
	$version    = file_exists( $style_path ) ? (string) filemtime( $style_path ) : '1.0.0';

	wp_enqueue_style(
		'rb-content-lab-style',
		get_template_directory_uri() . '/style.css',
		array(),
		$version
	);
}
add_action( 'wp_enqueue_scripts', 'rb_content_lab_enqueue_assets' );

/**
 * Preload da fonte de display (Fraunces) — reduz o LCP em headings above-the-fold,
 * o que ajuda diretamente os Core Web Vitals e o SEO técnico.
 */
function rb_content_lab_preload_fonts() {
	$font = get_template_directory_uri() . '/assets/fonts/fraunces-variable-latin.woff2';
	printf(
		'<link rel="preload" href="%s" as="font" type="font/woff2" crossorigin>' . "\n",
		esc_url( $font )
	);
}
add_action( 'wp_head', 'rb_content_lab_preload_fonts', 1 );

/**
 * Estilos de bloco personalizados (aparecem no seletor de estilos do editor).
 */
function rb_content_lab_register_block_styles() {
	register_block_style( 'core/button', array(
		'name'  => 'outline',
		'label' => __( 'Contorno', 'rb-content-lab' ),
	) );

	register_block_style( 'core/group', array(
		'name'  => 'section',
		'label' => __( 'Secção (ritmo vertical)', 'rb-content-lab' ),
	) );

	register_block_style( 'core/image', array(
		'name'  => 'bleed',
		'label' => __( 'Editorial (sombra)', 'rb-content-lab' ),
	) );
}
add_action( 'init', 'rb_content_lab_register_block_styles' );

/**
 * Categoria própria para os patterns da RB Content Lab, para os agrupar no
 * inseridor de blocos.
 */
function rb_content_lab_register_pattern_category() {
	if ( function_exists( 'register_block_pattern_category' ) ) {
		register_block_pattern_category( 'rb-content-lab', array(
			'label'       => __( 'RB Content Lab', 'rb-content-lab' ),
			'description' => __( 'Secções de conversão da RB Content Lab.', 'rb-content-lab' ),
		) );
	}
}
add_action( 'init', 'rb_content_lab_register_pattern_category' );

/**
 * Remove itens desnecessários do <head> para uma frente mais leve e limpa
 * (boa prática de performance/segurança). Ajustar conforme necessidade.
 */
function rb_content_lab_clean_head() {
	remove_action( 'wp_head', 'wp_generator' );          // Esconde a versão do WP.
	remove_action( 'wp_head', 'wlwmanifest_link' );      // Windows Live Writer (obsoleto).
	remove_action( 'wp_head', 'rsd_link' );              // Really Simple Discovery.
}
add_action( 'init', 'rb_content_lab_clean_head' );
