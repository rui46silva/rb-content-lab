<?php
/**
 * Title: Landing · Oferta + Formulário (diagnóstico)
 * Slug: rb-content-lab/landing-offer
 * Categories: rb-content-lab
 * Description: Secção de conversão com o lead magnet (diagnóstico gratuito) e o formulário Fluent Forms ligado ao FluentCRM.
 */
?>
<!-- wp:group {"tagName":"section","className":"rb-section","align":"full","anchor":"diagnostico","style":{"spacing":{"padding":{"top":"var:preset|spacing|xxl","bottom":"var:preset|spacing|xxl"}}},"backgroundColor":"paper-2","layout":{"type":"constrained"}} -->
<section id="diagnostico" class="wp-block-group rb-section alignfull has-paper-2-background-color has-background" style="padding-top:var(--wp--preset--spacing--xxl);padding-bottom:var(--wp--preset--spacing--xxl)">
	<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"4rem","top":"2.5rem"}}}} -->
	<div class="wp-block-columns">
		<!-- wp:column {"width":"48%"} -->
		<div class="wp-block-column" style="flex-basis:48%">
			<!-- wp:paragraph {"className":"rb-eyebrow"} --><p class="rb-eyebrow">Diagnóstico gratuito</p><!-- /wp:paragraph -->
			<!-- wp:heading {"level":2,"style":{"spacing":{"margin":{"top":"1rem","bottom":"1.25rem"}}}} -->
			<h2 class="wp-block-heading" style="margin-top:1rem;margin-bottom:1.25rem">30 minutos que mudam como a sua marca comunica.</h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"fontSize":"large","textColor":"muted"} -->
			<p class="has-muted-color has-text-color has-large-font-size">Analisamos a sua comunicação atual e saímos com um plano concreto — mesmo que decida não trabalhar connosco.</p>
			<!-- /wp:paragraph -->
			<!-- wp:list {"className":"is-style-none","style":{"typography":{"lineHeight":"2.1"},"spacing":{"margin":{"top":"1.5rem"}}}} -->
			<ul class="wp-block-list is-style-none" style="margin-top:1.5rem;line-height:2.1">
				<!-- wp:list-item --><li>→ Onde a sua mensagem se está a perder no ruído</li><!-- /wp:list-item -->
				<!-- wp:list-item --><li>→ As 3 alavancas de maior impacto para a sua marca</li><!-- /wp:list-item -->
				<!-- wp:list-item --><li>→ Um próximo passo claro, priorizado por retorno</li><!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->
			<!-- wp:paragraph {"fontSize":"small","textColor":"muted","style":{"spacing":{"margin":{"top":"1.5rem"}}}} -->
			<p class="has-muted-color has-text-color has-small-font-size" style="margin-top:1.5rem"><strong>O que acontece a seguir:</strong> resposta em 24h úteis → agendamos a call → recebe o plano. Sem discurso de vendas.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"52%","style":{"spacing":{"padding":"var:preset|spacing|md"},"color":{"background":"#ffffff"},"border":{"radius":"6px"}}} -->
		<div class="wp-block-column has-background" style="border-radius:6px;background-color:#ffffff;flex-basis:52%;padding:var(--wp--preset--spacing--md)">
			<!-- wp:heading {"level":3,"fontSize":"large","style":{"spacing":{"margin":{"bottom":"1.25rem"}}}} -->
			<h3 class="wp-block-heading has-large-font-size" style="margin-bottom:1.25rem">Peça o seu diagnóstico</h3>
			<!-- /wp:heading -->

			<!-- Formulário: Fluent Forms (ligado ao FluentCRM). Substituir id="1" pelo ID real do formulário. -->
			<!-- wp:shortcode -->
			[fluentform id="1"]
			<!-- /wp:shortcode -->

			<!-- wp:paragraph {"fontSize":"small","textColor":"muted","style":{"spacing":{"margin":{"top":"1rem"}}}} -->
			<p class="has-muted-color has-text-color has-small-font-size" style="margin-top:1rem">Ao enviar, aceita ser contactado sobre o seu pedido. Zero spam — só direção. Ver <a href="/privacidade">política de privacidade</a>.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</section>
<!-- /wp:group -->
