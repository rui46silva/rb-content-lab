# 04 — Direção de Arte & Design System

> A meta estética: **parecer uma revista premium, não um template.**
> Regra anti "AI-slop": se o layout pudesse ser de qualquer agência genérica, está errado.

## 1. O que evitar (checklist anti AI-slop)

- ❌ **Inter, Arial, Roboto ou Open Sans isoladas** como identidade tipográfica.
- ❌ Gradientes roxo/azul genéricos de "startup".
- ❌ Ilustrações 3D de bonecos flutuantes / stock corporativo sorridente.
- ❌ Grelha simétrica de 3 cartões idênticos e nada mais.
- ❌ Hero centrado com "Lorem ipsum" de headline vaga tipo "Soluções para o seu negócio".
- ❌ Ícones genéricos de biblioteca sem tratamento.
- ❌ Sombras suaves iguais em tudo, cantos arredondados por defeito em cada caixa.

## 2. Direção de arte (a assinatura visual)

**Conceito:** *Editorial confiante.* Pense capa de revista de design cruzada com
relatório de consultoria premium. Muito espaço em branco, tipografia como protagonista,
cor usada com intenção cirúrgica.

**Princípios:**
1. **Tipografia é o herói.** Headlines grandes, com personalidade, criam a diferenciação.
2. **Espaço negativo generoso.** Luxo comunica-se com espaço, não com preenchimento.
3. **Assimetria intencional.** Grelhas quebradas, texto desalinhado com propósito,
   imagens que sangram para fora da coluna.
4. **Contraste dramático.** Secções escuras a alternar com claras para ritmo visual.
5. **Movimento subtil.** Micro-animações no scroll (fade/slide curtos), nunca gratuitas.

## 3. Tipografia

**Sistema recomendado (pares com carácter):**

| Papel | Opção A (editorial) | Opção B (moderno) |
|-------|---------------------|-------------------|
| Display / Headlines | **Fraunces** ou **PP Editorial New** | **Clash Display** |
| Corpo | **Söhne** ou **Libre Franklin** | **Satoshi** |
| Detalhe/mono (opcional) | **JetBrains Mono** para labels/números | idem |

- Serifa expressiva nas headlines = imediatamente "não-genérico".
- Sans limpa e legível no corpo (mas **não** Inter/Arial soltas).
- **Escala tipográfica** (type scale ~1.25 major third):
  `12 · 14 · 16(base) · 20 · 25 · 31 · 39 · 49 · 61 px`
- Fontes auto-hospedadas (self-hosted) para performance e privacidade — ver doc 06.

## 4. Cor

Fugir do azul-startup. Propor uma paleta com **uma cor de assinatura ousada** +
neutros ricos.

**Direção proposta (exemplo — validar com marca):**

```
Base escura   #14110F  (quase-preto quente, "ink")
Base clara    #F7F4EF  (off-white quente, "paper")
Neutro médio  #6B6560  (texto secundário)
Assinatura    #E8583A  (laranja-terracota — energia, distinção)
Acento frio   #2E4A45  (verde-petróleo profundo — sofisticação)
```

- **Regra 60/30/10:** 60% neutro base, 30% secundário, 10% cor de assinatura (CTAs,
  destaques). A cor de assinatura nunca se dilui — é o que se memoriza.
- Garantir **contraste AA/AAA** (ver doc 06 — acessibilidade conta para Lighthouse).
- Definir tokens (ver secção 7) — nunca hex soltos espalhados pelo CSS.

## 5. Grelha & Layout

- **Grelha de 12 colunas**, com gutter generoso.
- **Largura máxima de conteúdo** ~1200–1280px; texto corrido em coluna estreita
  (~65 caracteres por linha) para legibilidade editorial.
- **Ritmo vertical** consistente (espaçamento em múltiplos de 8px).
- Blocos "full-bleed" alternados com blocos contidos para dinâmica.
- Mobile-first: a assimetria simplifica-se em coluna única, mas mantém hierarquia.

## 6. Imagética & Elementos

- **Fotografia:** real, com direção de arte própria (não stock óbvio). Se stock,
  tratamento de cor uniforme para parecer coeso.
- **Números como elemento gráfico:** métricas grandes viram design ("3x", "+40%").
- **Detalhes de marca:** um traço, um marcador, um padrão recorrente que assine as peças.
- **Ícones:** conjunto único e coerente (ex.: Phosphor com peso consistente), tratados.

## 7. Design Tokens (base para o build)

Definir como CSS custom properties / variáveis do tema para consistência e manutenção:

```css
:root {
  /* Cor */
  --color-ink:        #14110F;
  --color-paper:      #F7F4EF;
  --color-muted:      #6B6560;
  --color-signature:  #E8583A;
  --color-accent:     #2E4A45;

  /* Tipografia */
  --font-display: "Fraunces", Georgia, serif;
  --font-body:    "Satoshi", system-ui, sans-serif;

  /* Escala (rem, base 16px) */
  --step--1: 0.875rem;  --step-0: 1rem;    --step-1: 1.25rem;
  --step-2: 1.563rem;   --step-3: 1.953rem; --step-4: 2.441rem;
  --step-5: 3.052rem;   --step-6: 3.815rem;

  /* Espaçamento (8pt) */
  --space-xs: 0.5rem; --space-sm: 1rem;  --space-md: 2rem;
  --space-lg: 4rem;   --space-xl: 8rem;

  /* Raio & sombra — usados com parcimónia */
  --radius: 4px;
  --shadow: 0 10px 40px -12px rgba(20,17,15,.25);
}
```

> Estes tokens mapeiam diretamente para as **Global Settings** do Elementor ou para o
> `theme.json` do GenerateBlocks/tema de blocos (ver doc 05). Definir uma vez, usar em
> todo o lado.

## 8. Acessibilidade como parte do design (não afterthought)

- Contraste mínimo AA (4.5:1 texto normal, 3:1 texto grande).
- Foco visível em elementos interativos.
- Hierarquia de headings correta (um `<h1>` por página).
- Alt text em todas as imagens com significado.
- Alvos de toque ≥ 44px em mobile.

## 9. Entregáveis desta fase (antes do build)

- [ ] Moodboard aprovado (2–3 direções → 1 escolhida).
- [ ] Style tile (tipografia + cor + botões + 1 componente).
- [ ] Design da Home em alta fidelidade (desktop + mobile).
- [ ] Design de 1 página de serviço + 1 caso de estudo (templates).
- [ ] Biblioteca de componentes documentada.
