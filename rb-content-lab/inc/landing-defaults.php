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
		'hero_eyebrow'       => 'Agência de comunicação estratégica · +5 anos',
		'hero_word_1'        => 'Menos',
		'hero_word_strike'   => 'ruído',
		'hero_word_2'        => 'Mais',
		'hero_word_highlight' => 'direção',
		'hero_sub'           => 'Há mais de 5 anos ajudamos marcas a comunicar com clareza e método. Menos publicações ao acaso, mais estratégia — e resultados que se medem. Somos a agência que troca o ruído por direção.',
		'hero_cta1_label'    => 'Quero o meu diagnóstico gratuito',
		'hero_cta1_url'      => '#diagnostico',
		'hero_cta2_label'    => 'Ver como pensamos →',
		'hero_cta2_url'      => '#manifesto',
		'hero_trust'         => '30 minutos · Sem compromisso · Saída com um plano, trabalhe connosco ou não',

		// Setores / credibilidade.
		'sec_eyebrow'        => 'Experiência real',
		'sec_heading'        => 'Já demos direção a marcas em setores exigentes.',
		'sec_1'              => 'Automóvel',
		'sec_2'              => 'Restauração',
		'sec_3'              => 'Estética, Saúde & Nutrição',
		'sec_note'           => 'Mais de 5 anos a transformar ruído em estratégia — em mercados onde a atenção se disputa ao segundo.',

		// Método.
		'method_eyebrow'     => 'O método',
		'method_heading'     => 'Estratégia antes de ruído. Sempre.',
		'method_1_title'     => 'Diagnóstico',
		'method_1_text'      => 'Entendemos o negócio, o mercado e os objetivos antes de propor uma única palavra.',
		'method_2_title'     => 'Estratégia',
		'method_2_text'      => 'Mensagem, pilares e plano editorial. Cada peça passa a ter uma razão para existir.',
		'method_3_title'     => 'Execução',
		'method_3_text'      => 'Conteúdo com padrão e consistência — a direção aplicada, semana após semana.',
		'method_4_title'     => 'Otimização',
		'method_4_text'      => 'Medimos, aprendemos e afinamos. Direção é um processo com rigor, não um palpite.',

		// Manifesto.
		'man_eyebrow'        => 'O manifesto',
		'man_heading'        => 'Toda a gente publica. Quase ninguém comunica.',
		'man_1_index'        => '01 / RUÍDO',
		'man_1_text'         => 'Mais posts, mais canais, mais tendências. O calendário enche-se, a marca esvazia-se. Volume não é presença — é ansiedade documentada em público.',
		'man_2_index'        => '02 / DIREÇÃO',
		'man_2_text'         => 'Uma ideia clara, repetida com intenção, vale mais do que cem publicações dispersas. Direção é decidir o que não dizer — e dizer o resto como ninguém.',
		'man_closing'        => 'Não fazemos mais conteúdo. Fazemos o conteúdo que faltava.',

		// Prova.
		'proof_eyebrow'      => 'Porque confiar na RB',
		'proof_heading'      => 'Poucos clientes, por opção. Rigor, em cada projeto.',
		'proof_m1_value'     => '+5',
		'proof_m1_label'     => 'anos a dar direção a marcas',
		'proof_m2_value'     => '3',
		'proof_m2_label'     => 'setores exigentes — automóvel, restauração, estética/saúde',
		'proof_m3_value'     => '4',
		'proof_m3_label'     => 'passos de método — do diagnóstico à otimização',
		'promise_eyebrow'    => 'A nossa promessa',
		'promise_heading'    => 'Não prometemos virais. Prometemos direção.',
		'promise_text'       => 'As redes mudam todos os dias e ninguém controla o algoritmo — quem promete o contrário está a vender ruído. Nós comprometemo-nos com o que gera resultado sustentável: estratégia clara, método e consistência.',
		'promise_yes_1'      => 'Estratégia antes de execução',
		'promise_yes_2'      => 'Método e consistência, semana após semana',
		'promise_yes_3'      => 'Transparência total — vê o que fazemos e porquê',
		'promise_no_1'       => 'Promessas de viral ou resultados milagrosos',
		'promise_no_2'       => 'Contratos que prendem sem entregar valor',

		// Oferta + formulário.
		'offer_eyebrow'      => 'Diagnóstico gratuito',
		'offer_heading'      => '30 minutos que mudam como a sua marca comunica.',
		'offer_intro'        => 'Analisamos a sua comunicação atual e saímos com um plano concreto — mesmo que decida não trabalhar connosco.',
		'offer_bullet_1'     => 'Onde a sua mensagem se está a perder no ruído',
		'offer_bullet_2'     => 'As 3 alavancas de maior impacto para a sua marca',
		'offer_bullet_3'     => 'Um próximo passo claro, priorizado por retorno',
		'offer_next'         => 'O que acontece a seguir: resposta em 24h úteis → agendamos a call → recebe o plano. Aceitamos poucos diagnósticos por mês, para manter o rigor.',
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
		'faq_4_q'            => 'Ainda têm poucos clientes — porque devo confiar?',
		'faq_4_a'            => 'Por opção. Trabalhamos com poucos clientes de cada vez para dar a cada um direção a sério. São mais de 5 anos de experiência em setores exigentes — do automóvel à restauração, estética, saúde e nutrição. E o primeiro passo não tem risco: o diagnóstico é gratuito e sem compromisso.',
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
