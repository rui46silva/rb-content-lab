# Fontes auto-hospedadas

Todas as fontes são auto-hospedadas (não há chamadas a CDNs externos). Isto melhora a
performance (LCP) e a conformidade com o RGPD (o IP do visitante nunca é enviado a
terceiros).

| Ficheiro | Família | Uso | Licença |
|----------|---------|-----|---------|
| `fraunces-variable-latin.woff2` | Fraunces (variável, 400–700) | Display / headlines | SIL OFL 1.1 |
| `hanken-grotesk-variable-latin.woff2` | Hanken Grotesk (variável, 400–700) | Corpo / UI | SIL OFL 1.1 |
| `jetbrains-mono-500-latin.woff2` | JetBrains Mono (500) | Etiquetas / números | SIL OFL 1.1 |

Subset **latin** apenas, para manter o peso mínimo (~124KB no total). Se precisar de
caracteres fora do latino base, gere um subset alargado a partir das fontes originais.

As declarações `@font-face` estão em `theme.json` (`settings.typography.fontFamilies`),
com `src` a apontar para estes ficheiros via `file:./assets/fonts/…`.

## Opcional: trocar o corpo por Satoshi

A recomendação de marca original era **Satoshi** (Fontshare) como fonte de corpo. Não é
distribuída pelo Google Fonts, por isso o tema vai com **Hanken Grotesk** (equivalente
de carácter e auto-hospedável) para funcionar out-of-the-box. Para usar Satoshi:

1. Descarregue a Satoshi em https://www.fontshare.com/fonts/satoshi (licença gratuita).
2. Coloque `Satoshi-Variable.woff2` nesta pasta.
3. Em `theme.json`, no fontFamily de slug `body`, troque `fontFamily` para
   `"Satoshi", …` e o `src` para `file:./assets/fonts/Satoshi-Variable.woff2`.

Nenhuma outra alteração é necessária — os tokens propagam para todo o site.

## Licenças

As três famílias estão sob a **SIL Open Font License 1.1** (ver `OFL.txt`).
Créditos: Fraunces — Undercase Type; Hanken Grotesk — Alfredo Marco Pradil;
JetBrains Mono — JetBrains.
