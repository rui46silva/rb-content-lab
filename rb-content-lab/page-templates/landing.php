<?php
/**
 * Template Name: Landing — Direction over Noise
 * Template Post Type: page
 *
 * Landing page de captação em PHP. Todos os textos vêm dos campos ACF da página
 * (com fallback para os textos-base em inc/landing-defaults.php).
 *
 * @package RB_Content_Lab
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Atalho local para ler um texto da landing (campo ACF ou default).
 *
 * @param string $key Chave.
 * @return string
 */
function rb_lp( $key ) {
	return rb_landing_text( $key );
}

get_header( 'landing' );
?>

<main class="rb-lp-main">

	<!-- HERO -->
	<section class="rb-lp-hero rb-bg-ink rb-on-dark">
		<div class="rb-container">
			<p class="rb-eyebrow"><?php echo esc_html( rb_lp( 'hero_eyebrow' ) ); ?></p>
			<h1 class="rb-statement rb-hero-statement">
				<?php echo esc_html( rb_lp( 'hero_word_1' ) ); ?> <s><?php echo esc_html( rb_lp( 'hero_word_strike' ) ); ?></s>.<br>
				<?php echo esc_html( rb_lp( 'hero_word_2' ) ); ?> <mark><?php echo esc_html( rb_lp( 'hero_word_highlight' ) ); ?></mark>.
			</h1>
			<p class="rb-hero-sub rb-measure"><?php echo esc_html( rb_lp( 'hero_sub' ) ); ?></p>
			<div class="rb-cta-row">
				<a class="rb-btn rb-btn--primary" href="<?php echo esc_url( rb_lp( 'hero_cta1_url' ) ); ?>"><?php echo esc_html( rb_lp( 'hero_cta1_label' ) ); ?></a>
				<a class="rb-btn rb-btn--ghost" href="<?php echo esc_url( rb_lp( 'hero_cta2_url' ) ); ?>"><?php echo esc_html( rb_lp( 'hero_cta2_label' ) ); ?></a>
			</div>
			<p class="rb-trust"><?php echo esc_html( rb_lp( 'hero_trust' ) ); ?></p>
		</div>
	</section>

	<!-- MANIFESTO -->
	<section id="manifesto" class="rb-bg-paper">
		<div class="rb-container rb-narrow">
			<p class="rb-eyebrow"><?php echo esc_html( rb_lp( 'man_eyebrow' ) ); ?></p>
			<h2 class="rb-statement-md"><?php echo esc_html( rb_lp( 'man_heading' ) ); ?></h2>
			<div class="rb-grid-2">
				<div class="rb-marker">
					<p class="rb-index"><?php echo esc_html( rb_lp( 'man_1_index' ) ); ?></p>
					<p><?php echo esc_html( rb_lp( 'man_1_text' ) ); ?></p>
				</div>
				<div class="rb-marker">
					<p class="rb-index"><?php echo esc_html( rb_lp( 'man_2_index' ) ); ?></p>
					<p><?php echo esc_html( rb_lp( 'man_2_text' ) ); ?></p>
				</div>
			</div>
			<p class="rb-manifesto-closing"><?php echo esc_html( rb_lp( 'man_closing' ) ); ?></p>
		</div>
	</section>

	<!-- PROVA -->
	<section class="rb-bg-ink rb-on-dark">
		<div class="rb-container">
			<p class="rb-eyebrow"><?php echo esc_html( rb_lp( 'proof_eyebrow' ) ); ?></p>
			<h2 class="rb-heading-lg"><?php echo esc_html( rb_lp( 'proof_heading' ) ); ?></h2>
			<div class="rb-grid-3">
				<?php for ( $i = 1; $i <= 3; $i++ ) : ?>
					<div>
						<p class="rb-metric"><?php echo esc_html( rb_lp( "proof_m{$i}_value" ) ); ?></p>
						<p><?php echo esc_html( rb_lp( "proof_m{$i}_label" ) ); ?></p>
					</div>
				<?php endfor; ?>
			</div>
			<hr class="rb-hr">
			<div class="rb-proof-guarantee">
				<div>
					<p class="rb-quote"><?php echo esc_html( rb_lp( 'proof_quote' ) ); ?></p>
					<p class="rb-quote-author"><?php echo esc_html( rb_lp( 'proof_quote_author' ) ); ?></p>
				</div>
				<div>
					<span class="rb-chip"><?php echo esc_html( rb_lp( 'proof_chip' ) ); ?></span>
					<p class="rb-muted" style="margin-top:1rem;"><?php echo esc_html( rb_lp( 'proof_guarantee' ) ); ?></p>
				</div>
			</div>
		</div>
	</section>

	<!-- OFERTA + FORMULÁRIO -->
	<section id="diagnostico" class="rb-bg-paper-2">
		<div class="rb-container">
			<div class="rb-offer-grid">
				<div>
					<p class="rb-eyebrow"><?php echo esc_html( rb_lp( 'offer_eyebrow' ) ); ?></p>
					<h2 class="rb-heading-lg"><?php echo esc_html( rb_lp( 'offer_heading' ) ); ?></h2>
					<p class="rb-muted" style="font-size:1.15rem;"><?php echo esc_html( rb_lp( 'offer_intro' ) ); ?></p>
					<ul class="rb-list-arrows">
						<li><?php echo esc_html( rb_lp( 'offer_bullet_1' ) ); ?></li>
						<li><?php echo esc_html( rb_lp( 'offer_bullet_2' ) ); ?></li>
						<li><?php echo esc_html( rb_lp( 'offer_bullet_3' ) ); ?></li>
					</ul>
					<p class="rb-muted" style="margin-top:1.5rem;"><?php echo esc_html( rb_lp( 'offer_next' ) ); ?></p>
				</div>
				<div class="rb-form-card">
					<h3><?php echo esc_html( rb_lp( 'offer_form_title' ) ); ?></h3>
					<?php
					// Formulário Fluent Forms (ligado ao FluentCRM). Renderiza se o plugin estiver ativo.
					echo do_shortcode( rb_lp( 'offer_form_shortcode' ) );
					?>
					<p class="rb-form-note">
						<?php echo esc_html( rb_lp( 'offer_privacy_note' ) ); ?>
						<a href="<?php echo esc_url( home_url( '/privacidade' ) ); ?>">Ver política de privacidade</a>.
					</p>
				</div>
			</div>
		</div>
	</section>

	<!-- FAQ -->
	<section class="rb-bg-paper">
		<div class="rb-container rb-narrow rb-faq">
			<p class="rb-eyebrow"><?php echo esc_html( rb_lp( 'faq_eyebrow' ) ); ?></p>
			<h2 class="rb-heading-lg"><?php echo esc_html( rb_lp( 'faq_heading' ) ); ?></h2>
			<?php for ( $i = 1; $i <= 5; $i++ ) : ?>
				<details<?php echo ( 1 === $i ) ? ' open' : ''; ?>>
					<summary><?php echo esc_html( rb_lp( "faq_{$i}_q" ) ); ?></summary>
					<p><?php echo esc_html( rb_lp( "faq_{$i}_a" ) ); ?></p>
				</details>
			<?php endfor; ?>
		</div>
	</section>

	<!-- CTA FINAL -->
	<section class="rb-bg-signature rb-on-dark rb-cta-final">
		<div class="rb-container rb-narrow">
			<h2 class="rb-statement-md"><?php echo esc_html( rb_lp( 'cta_heading' ) ); ?></h2>
			<p style="font-size:1.15rem;"><?php echo esc_html( rb_lp( 'cta_sub' ) ); ?></p>
			<div class="rb-cta-row">
				<a class="rb-btn rb-btn--ink" href="<?php echo esc_url( rb_lp( 'cta_button_url' ) ); ?>"><?php echo esc_html( rb_lp( 'cta_button_label' ) ); ?></a>
			</div>
		</div>
	</section>

</main>

<footer class="rb-lp-footer">
	<div class="rb-container">
		<p><?php echo esc_html( rb_lp( 'footer_tagline' ) ); ?></p>
		<p><a href="<?php echo esc_url( home_url( '/privacidade' ) ); ?>">Privacidade</a> · <a href="<?php echo esc_url( home_url( '/termos' ) ); ?>">Termos</a></p>
	</div>
</footer>

<?php
/*
 * Schema FAQPage (JSON-LD) gerado a partir dos textos — mantém-se sempre em
 * sincronia com o conteúdo editado na página.
 */
$rb_faq_entities = array();
for ( $i = 1; $i <= 5; $i++ ) {
	$q = rb_landing_text( "faq_{$i}_q" );
	$a = rb_landing_text( "faq_{$i}_a" );
	if ( $q && $a ) {
		$rb_faq_entities[] = array(
			'@type'          => 'Question',
			'name'           => wp_strip_all_tags( $q ),
			'acceptedAnswer' => array(
				'@type' => 'Answer',
				'text'  => wp_strip_all_tags( $a ),
			),
		);
	}
}
if ( $rb_faq_entities ) {
	$rb_faq_schema = array(
		'@context'   => 'https://schema.org',
		'@type'      => 'FAQPage',
		'mainEntity' => $rb_faq_entities,
	);
	echo '<script type="application/ld+json">' . wp_json_encode( $rb_faq_schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE ) . '</script>' . "\n";
}

get_footer();
