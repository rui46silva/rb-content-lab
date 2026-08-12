# 06 — SEO & Performance (Lighthouse 90+)

> Meta explícita: **90+ em Performance, SEO, Best Practices e Accessibility** no
> Lighthouse (mobile e desktop). Performance é argumento comercial num site premium.

## 1. Core Web Vitals — alvos

| Métrica | Alvo | O que a piora |
|---------|------|---------------|
| **LCP** (Largest Contentful Paint) | < 2.5s | Imagem hero pesada, fontes bloqueantes, hosting lento |
| **INP** (Interaction to Next Paint) | < 200ms | JS excessivo, scripts de terceiros |
| **CLS** (Cumulative Layout Shift) | < 0.1 | Imagens sem dimensões, fontes sem fallback, anúncios |

## 2. Performance — checklist técnica

**Imagens (maior ganho, quase sempre):**
- [ ] Servir em **WebP/AVIF** (ShortPixel/Imagify).
- [ ] `width` e `height` explícitos (evita CLS).
- [ ] `loading="lazy"` abaixo da dobra; imagem do hero com `fetchpriority="high"`.
- [ ] `srcset` responsivo — nunca servir 2000px a um telemóvel.
- [ ] Comprimir agressivamente (qualidade ~80 é indistinguível).

**Fontes:**
- [ ] **Self-hosted** (não Google Fonts via CDN — privacidade GDPR + performance).
- [ ] `font-display: swap`.
- [ ] Preload da fonte crítica do hero.
- [ ] Subsetting (só os caracteres/pesos usados).

**JavaScript & CSS:**
- [ ] Minificar e combinar (WP Rocket).
- [ ] **Delay JS** de terceiros até interação (analytics, chat, etc.).
- [ ] Remover CSS não usado / evitar bibliotecas pesadas.
- [ ] Adiar scripts não-críticos (`defer`/`async`).

**Cache & entrega:**
- [ ] Cache de página (WP Rocket + cache do host).
- [ ] CDN (Cloudflare).
- [ ] HTTP/2 ou HTTP/3.
- [ ] GZIP/Brotli ativo.

**Base:**
- [ ] PHP 8.2+.
- [ ] Base de dados limpa (revisões, transients, spam).
- [ ] Mínimo de plugins (ver doc 05).

## 3. SEO técnico — checklist

- [ ] **Sitemap XML** submetido no Google Search Console (Rank Math gera).
- [ ] **robots.txt** correto (não bloquear recursos).
- [ ] **URLs limpos** e semânticos (`/servicos/estrategia-conteudo`, não `?p=123`).
- [ ] **Schema markup:** Organization, LocalBusiness, Article (blog), BreadcrumbList,
      FAQPage (nas FAQ dos serviços). Rank Math trata da maioria.
- [ ] **Canónicos** corretos (evitar conteúdo duplicado).
- [ ] **Open Graph + Twitter Cards** (partilha social apresentável).
- [ ] **Hreflang** se houver versões multi-idioma.
- [ ] HTTPS forçado, sem mixed content.
- [ ] Redirects 301 de URLs antigos (se for redesign de site existente).
- [ ] Página 404 útil (com navegação/CTA, não beco sem saída).

## 4. SEO on-page — por página

- [ ] **Um `<h1>`** por página, com a keyword principal.
- [ ] Hierarquia de headings lógica (H1 → H2 → H3).
- [ ] **Title tag** único e atrativo (~55–60 caracteres, com keyword + benefício).
- [ ] **Meta description** persuasiva (~150–160 caracteres) — influencia CTR.
- [ ] Keyword principal + variações semânticas no corpo, natural.
- [ ] **Interligação interna** (blog → serviço → caso → contacto).
- [ ] Alt text descritivo nas imagens.
- [ ] Conteúdo com profundidade real (o "thin content" não ranqueia nem converte).

## 5. Estratégia de conteúdo SEO (blog "Perspetivas")

O blog serve dois propósitos: **atrair tráfego qualificado** e **provar expertise**.

- Mapear keywords por intenção:
  - **Topo de funil** (educacional): "como criar estratégia de conteúdo B2B".
  - **Meio** (comparação): "agência de conteúdo vs. freelancer".
  - **Fundo** (comercial): "serviços de gestão de LinkedIn para empresas".
- **Pillar pages + clusters:** um artigo-pilar por serviço, ligado a artigos satélite.
- Cada artigo termina com **CTA** para o serviço relevante (blog não é beco sem saída).
- Qualidade editorial > volume. 1 artigo excelente > 5 medianos.

## 6. Analytics & Medição

- [ ] **Google Analytics 4** (via GTM, com delay para não pesar no LCP).
- [ ] **Google Search Console** (indexação, keywords, erros).
- [ ] **Conversões** definidas: submissão de formulário, clique em CTA, subscrição.
- [ ] Considerar analytics respeitador de privacidade (Plausible/Fathom) — leve e GDPR.
- [ ] Banner de cookies compatível com GDPR (consentimento antes de tracking).

## 7. Como validar (antes e depois do go-live)

1. **Lighthouse** (Chrome DevTools) — mobile *e* desktop, em página real de staging.
2. **PageSpeed Insights** — dados de campo (CrUX) + laboratório.
3. **GTmetrix** — waterfall para identificar recursos lentos.
4. **WebPageTest** — análise avançada (TTFB, render).
5. **Search Console** — Core Web Vitals reais ao longo do tempo.

> Testar em página **real com conteúdo e imagens**, não numa página vazia. O número que
> conta é o da experiência real do visitante em mobile.
