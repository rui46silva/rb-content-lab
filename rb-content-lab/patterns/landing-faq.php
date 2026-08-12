<?php
/**
 * Title: Landing · FAQ (+ schema FAQPage)
 * Slug: rb-content-lab/landing-faq
 * Categories: rb-content-lab
 * Description: Perguntas frequentes em accordion nativo (SEO + objeções). Inclui JSON-LD FAQPage para rich results.
 */
?>
<!-- wp:group {"tagName":"section","className":"rb-section","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xxl","bottom":"var:preset|spacing|xxl"}}},"layout":{"type":"constrained","contentSize":"820px"}} -->
<section class="wp-block-group rb-section alignfull" style="padding-top:var(--wp--preset--spacing--xxl);padding-bottom:var(--wp--preset--spacing--xxl)">
	<!-- wp:paragraph {"className":"rb-eyebrow"} --><p class="rb-eyebrow">Perguntas frequentes</p><!-- /wp:paragraph -->
	<!-- wp:heading {"level":2,"style":{"spacing":{"margin":{"top":"1rem","bottom":"2rem"}}}} -->
	<h2 class="wp-block-heading" style="margin-top:1rem;margin-bottom:2rem">O que costumam perguntar antes de avançar.</h2>
	<!-- /wp:heading -->

	<!-- wp:group {"className":"rb-faq","layout":{"type":"default"}} -->
	<div class="wp-block-group rb-faq">
		<!-- wp:html -->
		<details>
			<summary>Quanto tempo até ver resultados?</summary>
			<p>Clareza de mensagem nota-se logo no primeiro ciclo (4–6 semanas). Resultados de alcance e pipeline consolidam-se tipicamente entre o 3.º e o 6.º mês — porque construímos autoridade, não picos.</p>
		</details>
		<details>
			<summary>Trabalham com o meu setor?</summary>
			<p>Trabalhamos com marcas de alto valor que vivem da perceção — B2B, SaaS, consultores, marcas premium. O método adapta-se ao setor; o princípio (direção acima do ruído) é universal.</p>
		</details>
		<details>
			<summary>Preciso de ter conteúdo ou estratégia prontos?</summary>
			<p>Não. Começamos pelo diagnóstico e pela estratégia. Se já tem materiais, aproveitamo-los; se não, construímos do zero com método.</p>
		</details>
		<details>
			<summary>São uma agência jovem — porque devo confiar?</summary>
			<p>Por isso mesmo damos garantia de direção: se após o primeiro ciclo não tiver uma estratégia mais clara, devolvemos a diferença. Preferimos poucos clientes bem servidos a muitos mal servidos.</p>
		</details>
		<details>
			<summary>Quanto custa?</summary>
			<p>Trabalhamos por projeto e por avença, a partir de escopos desenhados no diagnóstico. Não somos a opção mais barata — somos a que se paga em perceção e pipeline. O diagnóstico é gratuito e sem compromisso.</p>
		</details>
		<!-- /wp:html -->
	</div>
	<!-- /wp:group -->

	<!-- Schema FAQPage para rich results (manter sincronizado com as perguntas acima). -->
	<!-- wp:html -->
	<script type="application/ld+json">
	{
	  "@context": "https://schema.org",
	  "@type": "FAQPage",
	  "mainEntity": [
	    { "@type": "Question", "name": "Quanto tempo até ver resultados?", "acceptedAnswer": { "@type": "Answer", "text": "Clareza de mensagem nota-se logo no primeiro ciclo (4 a 6 semanas). Resultados de alcance e pipeline consolidam-se tipicamente entre o 3.º e o 6.º mês, porque construímos autoridade, não picos." } },
	    { "@type": "Question", "name": "Trabalham com o meu setor?", "acceptedAnswer": { "@type": "Answer", "text": "Trabalhamos com marcas de alto valor que vivem da perceção: B2B, SaaS, consultores e marcas premium. O método adapta-se ao setor; o princípio de direção acima do ruído é universal." } },
	    { "@type": "Question", "name": "Preciso de ter conteúdo ou estratégia prontos?", "acceptedAnswer": { "@type": "Answer", "text": "Não. Começamos pelo diagnóstico e pela estratégia. Se já tem materiais, aproveitamo-los; se não, construímos do zero com método." } },
	    { "@type": "Question", "name": "São uma agência jovem, porque devo confiar?", "acceptedAnswer": { "@type": "Answer", "text": "Damos garantia de direção: se após o primeiro ciclo não tiver uma estratégia mais clara, devolvemos a diferença. Preferimos poucos clientes bem servidos a muitos mal servidos." } },
	    { "@type": "Question", "name": "Quanto custa?", "acceptedAnswer": { "@type": "Answer", "text": "Trabalhamos por projeto e por avença, a partir de escopos desenhados no diagnóstico. O diagnóstico é gratuito e sem compromisso." } }
	  ]
	}
	</script>
	<!-- /wp:html -->
</section>
<!-- /wp:group -->
