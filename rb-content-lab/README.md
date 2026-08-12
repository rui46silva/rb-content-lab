# RB Content Lab — WordPress Theme (PHP)

Tema WordPress da **RB Content Lab**. **Foco atual: a landing page de captação
"Direction over Noise"** — construída em **PHP clássico**, com um template de página e
**textos editáveis por página** (via ACF). Direção de arte editorial, tipografia
auto-hospedada, design tokens e SEO integrado.

![Pré-visualização da landing](screenshot.png)

> **Nota de arquitetura:** o tema arrancou como block theme (FSE). A pedido, a landing foi
> reconstruída em **PHP** para permitir editar os textos dentro da página. Os artefactos
> do block theme (homepage, patterns) foram preservados em [`future/`](future/) para
> retomar mais tarde. O `theme.json` mantém-se para os design tokens.

## Instalação

1. Comprima a pasta `rb-content-lab/` num `.zip` (a pasta é a raiz do zip).
2. **Aparência → Temas → Adicionar novo → Carregar tema** → escolha o zip → **Ativar**.
3. Instale o plugin **ACF (Advanced Custom Fields)** — grátis — para editar os textos.
   *(Sem ACF a landing funciona na mesma, com os textos-base do tema.)*

## Publicar a landing

1. **Páginas → Adicionar nova.** Título ex.: "Direction over Noise" (slug `/direcao`).
2. Na barra lateral: **Atributos da página → Modelo → "Landing — Direction over Noise"**.
3. **Publicar.**
4. Para editar os textos: abra a página e use o painel **"Landing — Direction over
   Noise"** (campos ACF), organizado por separadores (Hero, Manifesto, Prova, Oferta,
   FAQ, CTA). Ver todos os textos em [`docs/09-landing-textos.md`](../docs/09-landing-textos.md).

## Como funciona a editabilidade

```
inc/landing-defaults.php   → textos-base (defaults) + helper rb_landing_text()
inc/landing-fields.php     → regista os campos ACF (por código) ligados ao template
page-templates/landing.php → o template PHP: rb_landing_text('chave') por cada texto
```

`rb_landing_text('chave')` devolve o valor do campo ACF da página; se estiver vazio ou o
ACF não estiver ativo, devolve o texto-base. **Uma só chave, uma só verdade.**

## Estrutura

```
rb-content-lab/
├── style.css               Cabeçalho do tema, @font-face, tokens (--rb-*) e base
├── theme.json              Design tokens para o editor de blocos e estilos globais
├── functions.php           Supports, enqueue, preload de fonte, includes
├── index.php               Fallback clássico (páginas/artigos futuros)
├── header.php              Cabeçalho genérico
├── header-landing.php      Cabeçalho minimal da landing (logo + 1 CTA)
├── footer.php              Rodapé genérico (fecha o documento)
├── page-templates/
│   └── landing.php         ★ Template PHP da landing (Template Name)
├── inc/
│   ├── landing-defaults.php Textos-base + helper de leitura
│   ├── landing-fields.php   Campos ACF (registados por código)
│   └── schema.php           SEO — JSON-LD (Organization + WebSite + ProfessionalService)
├── assets/
│   ├── css/landing.css      Estilos da landing (carregados só no template)
│   └── fonts/               Fraunces + Hanken Grotesk + JetBrains Mono (OFL)
├── screenshot.png
└── future/                  Block theme preservado (homepage, patterns, parts) — futuro
```

## Design tokens

Definidos em `style.css` como variáveis `--rb-*` (autossuficientes) e espelhados no
`theme.json`:

| Token | Valor | Uso |
|-------|-------|-----|
| `--rb-ink` | `#1A1A40` | Navy (fundos escuros, texto) |
| `--rb-paper` / `--rb-paper-2` | `#EFEEEC` / `#E5E3DE` | Off-white e variante |
| `--rb-muted` / `--rb-muted-2` | `#565676` / `#B7B7CC` | Texto secundário (claro / escuro) |
| `--rb-signature` | `#C8A24A` | Dourado — CTAs, destaques, detalhe |
| `--rb-signature-light` | `#E4C77E` | Dourado claro — gradientes, glow, hover |

Tipografia: **Fraunces** (display), **Hanken Grotesk** (corpo), **JetBrains Mono** (detalhe).

Animações (só na landing, `assets/js/landing.js`): reveal no scroll com stagger,
contadores das métricas, risco do hero a desenhar-se e marquee cinético — tudo com
guarda `prefers-reduced-motion`.

## SEO integrado

- **JSON-LD** (`inc/schema.php`): Organization + WebSite + ProfessionalService no `<head>`,
  com guarda anti-duplicação se Rank Math/Yoast estiver ativo.
- **FAQPage schema** gerado dinamicamente no template, a partir dos textos da FAQ.
- **Preload** da fonte de display → melhora o LCP (Core Web Vitals).
- Fontes self-hosted, HTML limpo, CSS da landing só carregado no template.

Setup de CRM (FluentCRM), formulário e SEO em
[`docs/08-landing-crm-seo.md`](../docs/08-landing-crm-seo.md).

## Licença

Código do tema: GPL-2.0-or-later. Fontes: SIL OFL 1.1 (ver `assets/fonts/OFL.txt`).
