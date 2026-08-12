<?php
/**
 * Textos-base (defaults) da landing "Direction over Noise".
 *
 * Fonte única de verdade do copy. É usada em dois sítios:
 *  1. Como valor por defeito de cada campo ACF (ver inc/landing-fields.php).
 *  2. Como fallback do template quando o ACF não está ativo ou o campo está vazio.
 *
 * Para editar os textos no dia-a-dia, use o editor da página (campos ACF).
 * Estes defaults servem de rede de segurança e de ponto de partida.
 *
 * @package RB_Content_Lab
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Devolve o array de textos-base da landing.
 *
 * @return array<string,string>
 */
function rb_landing_defaults() {
	return array(
		// Cabeçalho.
		'header_cta_label'   => 'Diagnóstico gratuito',

		// Hero.
		'hero_eyebrow'       => 'Estúdio editorial · Direction over noise',
		'hero_word_1'        => 'Menos',
		'hero_word_strike'   => 'ruído',
		'hero_word_2'        => 'Mais',
		'hero_word_highlight' => 'direção',
		'hero_sub'           => 'A internet está cheia de marcas a gritar. As que vencem não gritam mais alto — comunicam com direção. Ajudamos marcas de alto valor a serem lembradas, não apenas vistas.',
		'hero_cta1_label'    => 'Quero o meu diagnóstico gratuito',
		'hero_cta1_url'      => '#diagnostico',
		'hero_cta2_label'    => 'Ver como pensamos →',
		'hero_cta2_url'      => '#manifesto',
		'hero_trust'         => '30 minutos · Sem compromisso · Saída com um plano, trabalhe connosco ou não',

		// Manifesto.
		'man_eyebrow'        => 'O manifesto',
		'man_heading'        => 'Toda a gente publica. Quase ninguém comunica.',
		'man_1_index'        => '01 / RUÍDO',
		'man_1_text'         => 'Mais posts, mais canais, mais tendências. O calendário enche-se, a marca esvazia-se. Volume não é presença — é ansiedade documentada em público.',
		'man_2_index'        => '02 / DIREÇÃO',
		'man_2_text'         => 'Uma ideia clara, repetida com intenção, vale mais do que cem publicações dispersas. Direção é decidir o que não dizer — e dizer o resto como ninguém.',
		'man_closing'        => 'Não fazemos mais conteúdo. Fazemos o conteúdo que faltava.',

		// Prova.
		'proof_eyebrow'      => 'A prova',
		'proof_heading'      => 'Poucos clientes. Resultados que falam alto.',
		'proof_m1_value'     => '+312%',
		'proof_m1_label'     => 'de leads qualificados para um cliente B2B em 6 meses',
		'proof_m2_value'     => '3x',
		'proof_m2_label'     => 'alcance orgânico com metade do volume de publicações',
		'proof_m3_value'     => '1',
		'proof_m3_label'     => 'mensagem central clara — a diferença entre ser visto e ser lembrado',
		'proof_quote'        => '"Deixámos de andar à procura do que publicar. Em três meses tínhamos um pipeline previsível — e uma marca de que nos orgulhamos."',
		'proof_quote_author' => '[Nome] · CEO @ [Empresa]',
		'proof_chip'         => 'Garantia de direção',
		'proof_guarantee'    => 'Se após o primeiro ciclo não tiver uma estratégia mais clara do que tinha, devolvemos a diferença. O risco é nosso.',

		// Oferta + formulário.
		'offer_eyebrow'      => 'Diagnóstico gratuito',
		'offer_heading'      => '30 minutos que mudam como a sua marca comunica.',
		'offer_intro'        => 'Analisamos a sua comunicação atual e saímos com um plano concreto — mesmo que decida não trabalhar connosco.',
		'offer_bullet_1'     => 'Onde a sua mensagem se está a perder no ruído',
		'offer_bullet_2'     => 'As 3 alavancas de maior impacto para a sua marca',
		'offer_bullet_3'     => 'Um próximo passo claro, priorizado por retorno',
		'offer_next'         => 'O que acontece a seguir: resposta em 24h úteis → agendamos a call → recebe o plano. Sem discurso de vendas.',
		'offer_form_title'   => 'Peça o seu diagnóstico',
		'offer_form_shortcode' => '[fluentform id="1"]',
		'offer_privacy_note' => 'Ao enviar, aceita ser contactado sobre o seu pedido. Zero spam — só direção.',

		// FAQ.
		'faq_eyebrow'        => 'Perguntas frequentes',
		'faq_heading'        => 'O que costumam perguntar antes de avançar.',
		'faq_1_q'            => 'Quanto tempo até ver resultados?',
		'faq_1_a'            => 'Clareza de mensagem nota-se logo no primeiro ciclo (4–6 semanas). Resultados de alcance e pipeline consolidam-se tipicamente entre o 3.º e o 6.º mês — porque construímos autoridade, não picos.',
		'faq_2_q'            => 'Trabalham com o meu setor?',
		'faq_2_a'            => 'Trabalhamos com marcas de alto valor que vivem da perceção — B2B, SaaS, consultores, marcas premium. O método adapta-se ao setor; o princípio (direção acima do ruído) é universal.',
		'faq_3_q'            => 'Preciso de ter conteúdo ou estratégia prontos?',
		'faq_3_a'            => 'Não. Começamos pelo diagnóstico e pela estratégia. Se já tem materiais, aproveitamo-los; se não, construímos do zero com método.',
		'faq_4_q'            => 'São uma agência jovem — porque devo confiar?',
		'faq_4_a'            => 'Por isso mesmo damos garantia de direção: se após o primeiro ciclo não tiver uma estratégia mais clara, devolvemos a diferença. Preferimos poucos clientes bem servidos a muitos mal servidos.',
		'faq_5_q'            => 'Quanto custa?',
		'faq_5_a'            => 'Trabalhamos por projeto e por avença, a partir de escopos desenhados no diagnóstico. Não somos a opção mais barata — somos a que se paga em perceção e pipeline. O diagnóstico é gratuito e sem compromisso.',

		// CTA final.
		'cta_heading'        => 'A sua marca merece direção.',
		'cta_sub'            => 'Peça o diagnóstico gratuito. Trinta minutos para saber exatamente o que muda — e um plano para levar consigo.',
		'cta_button_label'   => 'Quero o meu diagnóstico gratuito',
		'cta_button_url'     => '#diagnostico',

		// Rodapé.
		'footer_tagline'     => '© ' . gmdate( 'Y' ) . ' RB Content Lab · Feito com intenção.',
	);
}

/**
 * Helper de leitura de um texto da landing.
 *
 * Devolve o valor do campo ACF (se existir e não estiver vazio) ou o default.
 *
 * @param string $key     Chave do campo/texto.
 * @param int    $post_id ID do post (opcional).
 * @return string
 */
function rb_landing_text( $key, $post_id = 0 ) {
	$defaults = rb_landing_defaults();
	$default  = isset( $defaults[ $key ] ) ? $defaults[ $key ] : '';

	if ( function_exists( 'get_field' ) ) {
		$value = get_field( $key, $post_id ? $post_id : null );
		if ( null !== $value && '' !== $value ) {
			return $value;
		}
	}
	return $default;
}
