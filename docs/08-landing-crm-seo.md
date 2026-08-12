# 08 — Landing "Direction over Noise": CRM, SEO & Lançamento

> Landing de captação para uma agência jovem: provar valor, capturar leads qualificados
> e nutri-las com um CRM. Mote central: **Direction over noise.**

## 1. O que foi construído (no tema)

Um template e um conjunto de patterns dedicados, separados do site institucional:

| Peça | Ficheiro | Papel |
|------|----------|-------|
| Template | `templates/page-landing.html` | Landing completa, sem navegação que distraia |
| Cabeçalho minimal | `parts/header-landing.html` | Só logo + 1 CTA (reduz fugas de conversão) |
| Hero | `patterns/landing-hero.php` | Statement "Menos ~~ruído~~. Mais direção." |
| Manifesto | `patterns/landing-manifesto.php` | A tese — a própria escrita é a prova da craft |
| Prova | `patterns/landing-proof.php` | Métricas + resultado assinado + **garantia** |
| Oferta + Form | `patterns/landing-offer.php` | Diagnóstico gratuito + formulário |
| FAQ | `patterns/landing-faq.php` | Objeções + **schema FAQPage** (rich results) |
| CTA final | `patterns/landing-cta.php` | Fecho de conversão |

**Estratégia para "poucos clientes":** em vez de uma parede de logótipos que não temos,
a prova assenta em (1) **resultados com número**, (2) o **método como autoridade**,
(3) uma **garantia que inverte o risco** ("garantia de direção"), e (4) o manifesto que
_demonstra_ a qualidade em vez de a afirmar. Para uma agência de conteúdo, o texto da
própria página é o melhor portefólio.

## 2. Publicar a landing (passos)

1. **Páginas → Adicionar nova.** Título ex.: "Direction over Noise" (slug: `/direcao`).
2. Na barra lateral, **Template → Landing (captação de leads)**.
3. O template já traz todas as secções via patterns. Edite os `[placeholders]`
   (nome/empresa nos testemunhos, métricas reais) no editor.
4. **Publicar.** Aponte os anúncios/CTAs para este URL.

> Dica: mantenha a landing como página **isolada** (fora do menu). O tráfego pago e as
> campanhas entram aqui; a navegação reduzida maximiza a taxa de conversão.

## 3. CRM — FluentCRM + Fluent Forms

Recomendação: **FluentCRM** (self-hosted no WordPress) + **Fluent Forms**.

**Porquê:** sem custo por contacto, os dados ficam no vosso servidor (RGPD), integra
nativamente com o Fluent Forms já previsto no stack, e não há lock-in de plataforma
externa. Para uma agência a começar, é o melhor rácio controlo/custo.

> Alternativa se precisarem de pipeline de vendas visual (deals/kanban) e integrações
> externas: **HubSpot Free**. Migração é simples porque exportamos contactos por CSV.

### 3.1 Instalação

1. Instalar **Fluent Forms** e **FluentCRM** (ambos têm versão gratuita para começar).
2. **Fluent Forms → New Form.** Campos do formulário de diagnóstico:

   | Campo | Tipo | Obrigatório | Nota |
   |-------|------|:-----------:|------|
   | Nome | Text | Sim | — |
   | Email | Email | Sim | Chave do contacto no CRM |
   | Empresa | Text | Não | Contexto |
   | Website / LinkedIn | URL | Não | Ajuda a qualificar antes da call |
   | Em que o podemos ajudar? | Dropdown | Sim | Estratégia / Social / Copy / Branding / Outro |
   | Orçamento aproximado | Dropdown | Não | **Qualificador** — filtra curiosos |
   | Mensagem | Textarea | Não | — |
   | Consentimento RGPD | Checkbox | Sim | "Aceito ser contactado…" |

3. Copiar o **shortcode** do formulário (ex.: `[fluentform id="3"]`) e substituir o
   `id="1"` no pattern `landing-offer.php` (ou editar diretamente o bloco *Shortcode*
   na página).

### 3.2 Ligar o formulário ao CRM

Em **Fluent Forms → (o formulário) → Settings & Integrations → FluentCRM**:

- **Ação:** criar/atualizar contacto no envio.
- **Mapear campos:** Nome → First Name, Email → Email, Empresa → Company, etc.
- **Lists:** adicionar à lista `Leads – Diagnóstico`.
- **Tags:** aplicar tag `landing-direcao` + a opção escolhida em "Em que o podemos ajudar?"
  (permite segmentar depois).
- **Status:** `Subscribed` (ou `Pending` se usar double opt-in — ver 3.4).

### 3.3 Automação de nutrição (FluentCRM → Automations)

Fluxo mínimo recomendado, gatilho = *contacto adicionado à lista "Leads – Diagnóstico"*:

```
1. Email imediato  → "Recebemos o seu pedido" (confirma + gere expectativa: resposta 24h)
2. Notificação interna → alerta à equipa comercial (novo lead + respostas do form)
3. Espera 2 dias   → se ainda não agendou: email "3 sinais de que a sua marca comunica com ruído"
4. Espera 3 dias   → email com 1 mini-caso ("Direction over noise" na prática) + CTA agendar
5. Tag "lead-morno" → entra na newsletter quinzenal "Perspetivas"
```

> Objetivo: nenhum lead esfria por falta de seguimento. O CRM faz o trabalho que uma
> agência pequena não tem mãos para fazer manualmente.

### 3.4 RGPD & entregabilidade

- **Double opt-in** ativo no FluentCRM (confirma o email → protege reputação de envio e
  cumpre RGPD).
- Checkbox de consentimento explícito no form (não pré-marcada).
- Link para a **política de privacidade** já presente no pattern da oferta.
- Configurar **SMTP** (ex.: FluentSMTP + provedor) para os emails não caírem em spam.

## 4. SEO da landing (prioridade alta)

### 4.1 Já tratado no tema
- **Schema JSON-LD:** `Organization` + `WebSite` + `ProfessionalService` no `<head>`
  (`inc/schema.php`), com guarda anti-duplicação se o Rank Math/Yoast estiver ativo.
- **FAQPage schema** no pattern de FAQ → elegível para rich results no Google.
- **Preload da fonte de display** → melhora o LCP (Core Web Vitals).
- Headings semânticos (um `<h1>`), HTML limpo, fontes self-hosted.

### 4.2 A configurar na publicação (via Rank Math)
- **Keyword-alvo:** escolher por intenção. Sugestões:
  - Comercial: *"agência de conteúdo"*, *"agência de comunicação premium"*,
    *"estratégia de conteúdo para empresas"*.
  - De marca/ângulo: *"direction over noise"*, *"comunicação com direção"*.
- **Title tag** (~55–60 car.): ex. *"Agência de conteúdo com direção — RB Content Lab"*.
- **Meta description** (~150–160 car.): incluir keyword + benefício + CTA implícito.
- **Slug** curto e semântico: `/direcao` ou `/agencia-de-conteudo`.
- **Open Graph / Twitter Card:** imagem 1200×630 com o statement da marca (partilha
  apresentável em social e WhatsApp).
- **Interligação interna:** ligar a landing a partir do blog "Perspetivas" e vice-versa.

### 4.3 Performance (meta Lighthouse 90+)
- Otimizar a imagem OG e quaisquer imagens em WebP/AVIF.
- Cache (WP Rocket) + delay do JS do Fluent Forms até interação, se necessário.
- Confirmar CLS ~0 (o form tem altura estável; reservar espaço se carregar assíncrono).
- Testar em **PageSpeed Insights (mobile)** com a página real publicada.

### 4.4 Indexação
- Garantir que a página **não** fica `noindex` (erro clássico vindo de staging).
- Submeter no **Google Search Console** e pedir indexação.
- Acompanhar impressões/CTR e iterar o title/meta.

## 5. Medição & iteração

- **Conversão principal:** submissão do formulário (evento no GA4).
- **Micro-conversões:** cliques nos CTAs, scroll até ao manifesto, abertura de FAQ.
- **Taxa alvo inicial:** 2–5% de visitantes→lead numa landing fria bem segmentada.
- **A/B a testar** (uma variável de cada vez): headline do hero, texto do CTA
  ("diagnóstico" vs "auditoria" vs "sessão de direção"), presença/ausência da garantia.

## 6. Checklist de go-live da landing

- [ ] Formulário criado no Fluent Forms e shortcode colado no pattern da oferta.
- [ ] Integração FluentCRM ativa (lista + tags + double opt-in).
- [ ] Automação de nutrição publicada e testada (envio real de teste).
- [ ] SMTP configurado (emails não vão para spam).
- [ ] Métricas e testemunhos `[placeholder]` substituídos por dados reais.
- [ ] Rank Math: title, meta, OG image, keyword.
- [ ] Página **indexável**; sitemap submetido no Search Console.
- [ ] Lighthouse 90+ em mobile na página publicada.
- [ ] GA4 a registar a submissão como conversão.
