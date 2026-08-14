<?php
/**
 * Campos ACF da landing "Direction over Noise".
 *
 * Registados por código (local field group) — assim que o plugin ACF (grátis)
 * estiver ativo, os campos aparecem no editor de qualquer página que use o
 * template "Landing". Cada campo tem como valor por defeito o texto-base
 * definido em inc/landing-defaults.php.
 *
 * Sem ACF, o template usa os defaults e a landing continua a funcionar.
 *
 * @package RB_Content_Lab
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Regista o grupo de campos da landing.
 */
function rb_landing_register_fields() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	$defaults = rb_landing_defaults();

	/*
	 * Esquema: separadores e respetivos campos.
	 * Cada campo: [ chave, etiqueta, tipo ] onde tipo ∈ text|textarea|url.
	 */
	$schema = array(
		'Cabeçalho' => array(
			array( 'header_cta_label', 'CTA do cabeçalho', 'text' ),
		),
		'Hero' => array(
			array( 'hero_eyebrow', 'Sobre-título (eyebrow)', 'text' ),
			array( 'hero_word_1', 'Palavra 1 (ex.: Menos)', 'text' ),
			array( 'hero_word_strike', 'Palavra riscada (ex.: ruído)', 'text' ),
			array( 'hero_word_2', 'Palavra 2 (ex.: Mais)', 'text' ),
			array( 'hero_word_highlight', 'Palavra destacada (ex.: direção)', 'text' ),
			array( 'hero_sub', 'Subtítulo', 'textarea' ),
			array( 'hero_cta1_label', 'CTA principal — texto', 'text' ),
			array( 'hero_cta1_url', 'CTA principal — link', 'text' ),
			array( 'hero_cta2_label', 'CTA secundário — texto', 'text' ),
			array( 'hero_cta2_url', 'CTA secundário — link', 'text' ),
			array( 'hero_trust', 'Linha de confiança', 'text' ),
		),
		'Setores' => array(
			array( 'sec_eyebrow', 'Sobre-título', 'text' ),
			array( 'sec_heading', 'Título', 'text' ),
			array( 'sec_1', 'Setor 1', 'text' ),
			array( 'sec_2', 'Setor 2', 'text' ),
			array( 'sec_3', 'Setor 3', 'text' ),
			array( 'sec_note', 'Nota', 'textarea' ),
		),
		'Manifesto' => array(
			array( 'man_eyebrow', 'Sobre-título', 'text' ),
			array( 'man_heading', 'Título', 'textarea' ),
			array( 'man_1_index', 'Bloco 1 — índice', 'text' ),
			array( 'man_1_text', 'Bloco 1 — texto', 'textarea' ),
			array( 'man_2_index', 'Bloco 2 — índice', 'text' ),
			array( 'man_2_text', 'Bloco 2 — texto', 'textarea' ),
			array( 'man_closing', 'Frase de fecho', 'text' ),
		),
		'Método' => array(
			array( 'method_eyebrow', 'Sobre-título', 'text' ),
			array( 'method_heading', 'Título', 'text' ),
			array( 'method_1_title', 'Passo 1 — título', 'text' ),
			array( 'method_1_text', 'Passo 1 — texto', 'textarea' ),
			array( 'method_2_title', 'Passo 2 — título', 'text' ),
			array( 'method_2_text', 'Passo 2 — texto', 'textarea' ),
			array( 'method_3_title', 'Passo 3 — título', 'text' ),
			array( 'method_3_text', 'Passo 3 — texto', 'textarea' ),
			array( 'method_4_title', 'Passo 4 — título', 'text' ),
			array( 'method_4_text', 'Passo 4 — texto', 'textarea' ),
		),
		'Prova' => array(
			array( 'proof_eyebrow', 'Sobre-título', 'text' ),
			array( 'proof_heading', 'Título', 'text' ),
			array( 'proof_m1_value', 'Métrica 1 — valor', 'text' ),
			array( 'proof_m1_label', 'Métrica 1 — descrição', 'text' ),
			array( 'proof_m2_value', 'Métrica 2 — valor', 'text' ),
			array( 'proof_m2_label', 'Métrica 2 — descrição', 'text' ),
			array( 'proof_m3_value', 'Métrica 3 — valor', 'text' ),
			array( 'proof_m3_label', 'Métrica 3 — descrição', 'text' ),
			array( 'promise_eyebrow', 'Promessa — sobre-título', 'text' ),
			array( 'promise_heading', 'Promessa — título', 'text' ),
			array( 'promise_text', 'Promessa — texto', 'textarea' ),
			array( 'promise_yes_1', 'Prometemos 1', 'text' ),
			array( 'promise_yes_2', 'Prometemos 2', 'text' ),
			array( 'promise_yes_3', 'Prometemos 3', 'text' ),
			array( 'promise_no_1', 'Não prometemos 1', 'text' ),
			array( 'promise_no_2', 'Não prometemos 2', 'text' ),
		),
		'Oferta + Formulário' => array(
			array( 'offer_eyebrow', 'Sobre-título', 'text' ),
			array( 'offer_heading', 'Título', 'text' ),
			array( 'offer_intro', 'Introdução', 'textarea' ),
			array( 'offer_bullet_1', 'Bullet 1', 'text' ),
			array( 'offer_bullet_2', 'Bullet 2', 'text' ),
			array( 'offer_bullet_3', 'Bullet 3', 'text' ),
			array( 'offer_next', 'O que acontece a seguir', 'textarea' ),
			array( 'offer_form_title', 'Título do formulário', 'text' ),
			array( 'offer_form_shortcode', 'Shortcode do formulário (Fluent Forms)', 'text' ),
			array( 'offer_privacy_note', 'Nota de privacidade', 'textarea' ),
		),
		'FAQ' => array(
			array( 'faq_eyebrow', 'Sobre-título', 'text' ),
			array( 'faq_heading', 'Título', 'text' ),
			array( 'faq_1_q', 'P1 — pergunta', 'text' ),
			array( 'faq_1_a', 'P1 — resposta', 'textarea' ),
			array( 'faq_2_q', 'P2 — pergunta', 'text' ),
			array( 'faq_2_a', 'P2 — resposta', 'textarea' ),
			array( 'faq_3_q', 'P3 — pergunta', 'text' ),
			array( 'faq_3_a', 'P3 — resposta', 'textarea' ),
			array( 'faq_4_q', 'P4 — pergunta', 'text' ),
			array( 'faq_4_a', 'P4 — resposta', 'textarea' ),
			array( 'faq_5_q', 'P5 — pergunta', 'text' ),
			array( 'faq_5_a', 'P5 — resposta', 'textarea' ),
		),
		'CTA final' => array(
			array( 'cta_heading', 'Título', 'text' ),
			array( 'cta_sub', 'Subtítulo', 'textarea' ),
			array( 'cta_button_label', 'Botão — texto', 'text' ),
			array( 'cta_button_url', 'Botão — link', 'text' ),
		),
		'Rodapé' => array(
			array( 'footer_tagline', 'Rodapé — linha', 'text' ),
		),
	);

	$fields = array();
	foreach ( $schema as $tab_label => $tab_fields ) {
		$fields[] = array(
			'key'   => 'field_rb_tab_' . sanitize_key( $tab_label ),
			'label' => $tab_label,
			'name'  => '',
			'type'  => 'tab',
			'placement' => 'top',
		);
		foreach ( $tab_fields as $f ) {
			list( $key, $label, $type ) = $f;
			$fields[] = array(
				'key'           => 'field_rb_' . $key,
				'label'         => $label,
				'name'          => $key,
				'type'          => $type,
				'default_value' => isset( $defaults[ $key ] ) ? $defaults[ $key ] : '',
				'wrapper'       => ( 'textarea' === $type ) ? array( 'width' => '100' ) : array( 'width' => '50' ),
				'rows'          => ( 'textarea' === $type ) ? 3 : null,
			);
		}
	}

	acf_add_local_field_group( array(
		'key'      => 'group_rb_landing',
		'title'    => 'Landing — Direction over Noise',
		'fields'   => $fields,
		'location' => array(
			array(
				array(
					'param'    => 'page_template',
					'operator' => '==',
					'value'    => 'page-templates/landing.php',
				),
			),
		),
		'menu_order'            => 0,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'active'                => true,
		'description'           => 'Textos editáveis da landing page de captação. Vazio = usa o texto-base do tema.',
	) );
}
add_action( 'acf/init', 'rb_landing_register_fields' );
