# RB Content Lab — WordPress Block Theme

Tema de blocos (Full Site Editing) da **RB Content Lab**, agência de comunicação e
conteúdo premium. Direção de arte editorial, tipografia auto-hospedada e patterns de
conversão prontos a usar. Construído para performance (Lighthouse 90+), SEO e fácil
manutenção — sem page builders externos, sem lock-in.

![Pré-visualização da homepage](screenshot.png)

## Porquê um block theme (e não um child theme + builder)

- **Zero lock-in:** vive no editor de blocos nativo do WordPress. Se largar qualquer
  plugin, o conteúdo continua a existir.
- **Performance:** HTML limpo, CSS mínimo, fontes auto-hospedadas (~124KB).
- **Manutenção:** os design tokens estão num único ficheiro (`theme.json`). Mudar a cor
  de assinatura é editar uma linha — propaga para todo o site.

## Instalação

1. Comprima a pasta `rb-content-lab/` num `.zip` (a pasta tem de ser a raiz do zip).
2. No WordPress: **Aparência → Temas → Adicionar novo → Carregar tema** → escolha o zip.
3. Ative **RB Content Lab**.
4. **Definições → Leitura:** defina uma página estática como página inicial para usar o
   template `front-page` (a homepage de conversão). Em alternativa, o template já é
   aplicado automaticamente à *front page*.
5. **Aparência → Editor** para ajustar cabeçalho, rodapé, menus e conteúdo.

> Alternativa via WP-CLI: coloque a pasta em `wp-content/themes/` e corra
> `wp theme activate rb-content-lab`.

## Estrutura

```
rb-content-lab/
├── style.css              Cabeçalho do tema + utilitários editoriais e foco acessível
├── theme.json             Design tokens: cor, tipografia, espaçamento, estilos (v2)
├── functions.php          Supports, enqueue, block styles, categorias de patterns
├── screenshot.png         Pré-visualização (1200×900)
├── assets/fonts/          Fraunces + Hanken Grotesk + JetBrains Mono (woff2, OFL)
├── parts/
│   ├── header.html        Cabeçalho sticky com navegação + CTA
│   └── footer.html        Rodapé de 4 colunas com newsletter e legais
├── templates/
│   ├── front-page.html    Homepage — compõe os patterns de conversão
│   ├── index.html         Fallback / listagem
│   ├── page.html          Página com título
│   ├── page-no-title.html Página sem título (landing pages)
│   ├── single.html        Artigo do blog "Perspetivas" + CTA + comentários
│   ├── archive.html       Arquivo de categoria/tag
│   ├── search.html        Resultados de pesquisa
│   └── 404.html           Erro 404 útil (com CTA e pesquisa)
└── patterns/              Secções da homepage (categoria "RB Content Lab")
    ├── hero.php
    ├── logos.php
    ├── problem-pas.php
    ├── services.php
    ├── featured-case.php
    ├── method.php
    ├── testimonials.php
    ├── about-short.php
    └── cta-final.php
```

## Design tokens (resumo)

| Token | Valor | Uso |
|-------|-------|-----|
| `ink` | `#1A1A40` | Cor principal — navy profundo (fundos escuros, texto, headings) |
| `ink-soft` / `ink-deep` | `#2C2C5C` / `#111130` | Cartões sobre navy / profundidade extra (rodapé) |
| `paper` / `paper-2` | `#EFEEEC` / `#E5E3DE` | Cor secundária — off-white quente e a sua variante alternada |
| `muted` | `#565676` | Texto secundário sobre fundo claro |
| `muted-2` | `#B7B7CC` | Texto secundário sobre fundo navy (contraste AA) |
| `signature` | `#D85436` | CTAs, destaques, foco (coral) |
| `accent` | `#C9A55C` | Detalhe editorial premium (dourado) |

- **Display:** Fraunces (serifa editorial variável)
- **Corpo:** Hanken Grotesk (grotesca variável)
- **Detalhe:** JetBrains Mono (etiquetas, números)

Todos os tokens estão em `theme.json` e disponíveis no editor (paleta, tamanhos de fonte,
espaçamentos). Editar aí é editar o site inteiro.

## Patterns de conversão

Inseríveis em qualquer página (**+ → Patterns → RB Content Lab**). A `front-page` já os
compõe pela ordem do funil AIDA/PAS: hero → prova → problema → serviços → caso → método →
testemunhos → sobre → CTA final.

## Classes utilitárias (em `style.css`)

- `.rb-eyebrow` — etiqueta em mono, maiúsculas, cor de assinatura.
- `.rb-metric` — número gigante como elemento gráfico.
- `.rb-measure` — largura de leitura editorial (~65ch).
- `.rb-link-arrow` — link com sublinhado animado.
- `.rb-logos` — logótipos monocromáticos que ganham cor no hover.
- Estilo de bloco **Contorno** para botões secundários; **Editorial (sombra)** para imagens.

## Personalização rápida

- **Cor de marca:** `theme.json` → `settings.color.palette` → `signature`.
- **Tipografia:** `settings.typography.fontFamilies` (ver `assets/fonts/README.md` para
  trocar o corpo por Satoshi).
- **Cabeçalho/rodapé:** Aparência → Editor → Padrões → Partes de template.

## Notas de performance & SEO

- Fontes auto-hospedadas com `font-display: swap` e `preload` recomendado para a display.
- Sem JS de tema; interatividade fica a cargo dos blocos do core.
- Emparelhar com um plugin de cache (WP Rocket) e SEO (Rank Math) — ver `docs/` do repo.
- `wp_generator` e metadados obsoletos removidos do `<head>` (ver `functions.php`).

## Licença

Código do tema: GPL-2.0-or-later. Fontes: SIL OFL 1.1 (ver `assets/fonts/OFL.txt`).
