# 09 — Textos da Landing "Direction over Noise"

> Fonte única de verdade do copy da landing. Cada entrada corresponde a um **campo
> editável** na página (via ACF). Editar aqui = alinhar a estratégia; editar na página
> = publicar. Os mesmos textos estão embutidos no tema como *defaults*
> (`inc/landing-defaults.php`), por isso a página funciona mesmo antes de configurar nada.

## Como editar no WordPress

1. **Páginas → (a sua landing) → Editar.**
2. No painel **"Landing — Direction over Noise"** (campos ACF), navegue pelos separadores
   e altere o texto que quiser.
3. Campo vazio = usa o texto-base abaixo. **Publicar/Atualizar.**

> Requer o plugin **ACF** (grátis) ativo para editar no admin. Sem ACF, a página mostra
> estes textos-base na mesma.

---

## Cabeçalho
| Campo | Texto |
|-------|-------|
| `header_cta_label` | Diagnóstico gratuito |

## Hero
| Campo | Texto |
|-------|-------|
| `hero_eyebrow` | Estúdio editorial · Direction over noise |
| `hero_word_1` | Menos |
| `hero_word_strike` | ruído *(aparece riscado)* |
| `hero_word_2` | Mais |
| `hero_word_highlight` | direção *(aparece a coral)* |
| `hero_sub` | A internet está cheia de marcas a gritar. As que vencem não gritam mais alto — comunicam com direção. Ajudamos marcas de alto valor a serem lembradas, não apenas vistas. |
| `hero_cta1_label` | Quero o meu diagnóstico gratuito |
| `hero_cta1_url` | #diagnostico |
| `hero_cta2_label` | Ver como pensamos → |
| `hero_cta2_url` | #manifesto |
| `hero_trust` | 30 minutos · Sem compromisso · Saída com um plano, trabalhe connosco ou não |

> **Nota de arte:** o hero mantém o mote como dispositivo visual — a palavra em
> `hero_word_strike` fica **riscada** e a de `hero_word_highlight` **a coral**. Mude as
> palavras à vontade; o efeito mantém-se.

## Manifesto
| Campo | Texto |
|-------|-------|
| `man_eyebrow` | O manifesto |
| `man_heading` | Toda a gente publica. Quase ninguém comunica. |
| `man_1_index` | 01 / RUÍDO |
| `man_1_text` | Mais posts, mais canais, mais tendências. O calendário enche-se, a marca esvazia-se. Volume não é presença — é ansiedade documentada em público. |
| `man_2_index` | 02 / DIREÇÃO |
| `man_2_text` | Uma ideia clara, repetida com intenção, vale mais do que cem publicações dispersas. Direção é decidir o que não dizer — e dizer o resto como ninguém. |
| `man_closing` | Não fazemos mais conteúdo. Fazemos o conteúdo que faltava. |

## Prova
| Campo | Texto |
|-------|-------|
| `proof_eyebrow` | A prova |
| `proof_heading` | Poucos clientes. Resultados que falam alto. |
| `proof_m1_value` | +312% |
| `proof_m1_label` | de leads qualificados para um cliente B2B em 6 meses |
| `proof_m2_value` | 3x |
| `proof_m2_label` | alcance orgânico com metade do volume de publicações |
| `proof_m3_value` | 1 |
| `proof_m3_label` | mensagem central clara — a diferença entre ser visto e ser lembrado |
| `proof_quote` | "Deixámos de andar à procura do que publicar. Em três meses tínhamos um pipeline previsível — e uma marca de que nos orgulhamos." |
| `proof_quote_author` | [Nome] · CEO @ [Empresa] |
| `proof_chip` | Garantia de direção |
| `proof_guarantee` | Se após o primeiro ciclo não tiver uma estratégia mais clara do que tinha, devolvemos a diferença. O risco é nosso. |

> ⚠️ **Substituir por dados reais.** As métricas e o testemunho são exemplos. A prova só
> converte com números verdadeiros e nome/empresa reais (com autorização).

## Oferta + Formulário
| Campo | Texto |
|-------|-------|
| `offer_eyebrow` | Diagnóstico gratuito |
| `offer_heading` | 30 minutos que mudam como a sua marca comunica. |
| `offer_intro` | Analisamos a sua comunicação atual e saímos com um plano concreto — mesmo que decida não trabalhar connosco. |
| `offer_bullet_1` | Onde a sua mensagem se está a perder no ruído |
| `offer_bullet_2` | As 3 alavancas de maior impacto para a sua marca |
| `offer_bullet_3` | Um próximo passo claro, priorizado por retorno |
| `offer_next` | O que acontece a seguir: resposta em 24h úteis → agendamos a call → recebe o plano. Sem discurso de vendas. |
| `offer_form_title` | Peça o seu diagnóstico |
| `offer_form_shortcode` | `[fluentform id="1"]` *(trocar pelo ID real do formulário)* |
| `offer_privacy_note` | Ao enviar, aceita ser contactado sobre o seu pedido. Zero spam — só direção. |

## FAQ
| Campo | Texto |
|-------|-------|
| `faq_eyebrow` | Perguntas frequentes |
| `faq_heading` | O que costumam perguntar antes de avançar. |
| `faq_1_q` | Quanto tempo até ver resultados? |
| `faq_1_a` | Clareza de mensagem nota-se logo no primeiro ciclo (4–6 semanas). Resultados de alcance e pipeline consolidam-se tipicamente entre o 3.º e o 6.º mês — porque construímos autoridade, não picos. |
| `faq_2_q` | Trabalham com o meu setor? |
| `faq_2_a` | Trabalhamos com marcas de alto valor que vivem da perceção — B2B, SaaS, consultores, marcas premium. O método adapta-se ao setor; o princípio (direção acima do ruído) é universal. |
| `faq_3_q` | Preciso de ter conteúdo ou estratégia prontos? |
| `faq_3_a` | Não. Começamos pelo diagnóstico e pela estratégia. Se já tem materiais, aproveitamo-los; se não, construímos do zero com método. |
| `faq_4_q` | São uma agência jovem — porque devo confiar? |
| `faq_4_a` | Por isso mesmo damos garantia de direção: se após o primeiro ciclo não tiver uma estratégia mais clara, devolvemos a diferença. Preferimos poucos clientes bem servidos a muitos mal servidos. |
| `faq_5_q` | Quanto custa? |
| `faq_5_a` | Trabalhamos por projeto e por avença, a partir de escopos desenhados no diagnóstico. Não somos a opção mais barata — somos a que se paga em perceção e pipeline. O diagnóstico é gratuito e sem compromisso. |

> As perguntas alimentam também o **schema FAQPage** (rich results no Google), gerado
> automaticamente a partir destes campos — mantém-se sempre em sincronia.

## CTA final
| Campo | Texto |
|-------|-------|
| `cta_heading` | A sua marca merece direção. |
| `cta_sub` | Peça o diagnóstico gratuito. Trinta minutos para saber exatamente o que muda — e um plano para levar consigo. |
| `cta_button_label` | Quero o meu diagnóstico gratuito |
| `cta_button_url` | #diagnostico |

## Rodapé
| Campo | Texto |
|-------|-------|
| `footer_tagline` | © [ano] RB Content Lab · Feito com intenção. |

---

## Checklist de conteúdo antes de publicar
- [ ] Substituir métricas e testemunho por **dados reais** (com autorização).
- [ ] Confirmar a **garantia de direção** — é um compromisso comercial real.
- [ ] Criar o formulário no Fluent Forms e colar o ID em `offer_form_shortcode`.
- [ ] Rever tom e ortografia final.
- [ ] Definir title/meta/OG no Rank Math (ver [doc 08](08-landing-crm-seo.md)).
