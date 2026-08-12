# 07 — Roadmap de Implementação

> Do blueprint ao go-live, em sprints. Cada fase tem entregável claro e um gate de
> aprovação antes de avançar.

## Visão geral (timeline indicativa: ~6–8 semanas)

```
Semana 1     ██ Descoberta & Estratégia
Semana 2     ██ Conteúdo & Copy
Semana 3-4   ████ Design (UI/UX)
Semana 4-6   ████ Desenvolvimento WordPress
Semana 6-7   ██ Conteúdo real + QA
Semana 7     ██ Otimização (performance/SEO)
Semana 8     ██ Lançamento + pós-lançamento
```

---

## Fase 0 — Descoberta & Estratégia (Semana 1)

**Objetivo:** alinhar negócio, público e mensagem antes de produzir.

- [ ] Workshop de descoberta com o cliente (negócio, objetivos, concorrência).
- [ ] Definir ICP e pilares de mensagem (doc 01).
- [ ] **Recolher munição de prova social** (casos, testemunhos, logos, métricas) — doc 01.
- [ ] Definir arquitetura de informação e sitemap (doc 02).

**Gate:** posicionamento e sitemap aprovados. ⛔ Não avançar sem casos com números
identificados (ou plano para os obter).

---

## Fase 1 — Conteúdo & Copy (Semana 2)

**Objetivo:** o texto vem antes do design (design serve a mensagem, não o contrário).

- [ ] Escrever copy final de cada página (base: doc 03).
- [ ] Redigir 3–6 casos de estudo em arco narrativo.
- [ ] Recolher/produzir fotografia e assets visuais reais.
- [ ] Definir keywords por página (doc 06).

**Gate:** copy aprovada pelo cliente.

---

## Fase 2 — Design UI/UX (Semanas 3–4)

**Objetivo:** direção de arte com assinatura (doc 04).

- [ ] Moodboard (2–3 direções → escolha de 1).
- [ ] Style tile (tipografia, cor, botões, 1 componente).
- [ ] Design alta fidelidade: Home (desktop + mobile).
- [ ] Templates: página de serviço, caso de estudo, blog, contacto.
- [ ] Biblioteca de componentes documentada.

**Gate:** designs aprovados. Teste dos "5 segundos" na Home passa.

---

## Fase 3 — Desenvolvimento WordPress (Semanas 4–6)

**Objetivo:** construir com performance e manutenção em mente (doc 05).

- [ ] Setup: hosting, staging, tema base + child theme, tokens no `theme.json`.
- [ ] Instalar stack de plugins mínima (doc 05).
- [ ] Criar CPTs (`caso_estudo`) + campos ACF.
- [ ] Construir componentes e templates (GenerateBlocks/Elementor).
- [ ] Maquetar todas as páginas.
- [ ] Formulários com validação + notificações + anti-spam.
- [ ] Responsividade em todos os breakpoints.

**Gate:** todas as páginas construídas em staging.

---

## Fase 4 — Conteúdo Real + QA (Semanas 6–7)

**Objetivo:** substituir placeholders e caçar bugs.

- [ ] Inserir todo o conteúdo real (texto, imagens, casos).
- [ ] **QA cross-browser** (Chrome, Safari, Firefox, Edge).
- [ ] **QA cross-device** (desktop, tablet, mobile real — iOS e Android).
- [ ] Testar todos os formulários e CTAs (chegam emails? redirecionam bem?).
- [ ] Verificar todos os links (sem 404s).
- [ ] Rever ortografia e consistência de tom.
- [ ] Testar em ligação lenta (3G simulado).

**Gate:** checklist de QA 100% verde.

---

## Fase 5 — Otimização Performance & SEO (Semana 7)

**Objetivo:** atingir Lighthouse 90+ (doc 06).

- [ ] Otimizar todas as imagens (WebP/AVIF, dimensões, lazy).
- [ ] Configurar cache (WP Rocket) + CDN.
- [ ] Self-host + preload de fontes.
- [ ] Delay de JS de terceiros.
- [ ] Configurar Rank Math (titles, metas, schema, sitemap).
- [ ] Correr Lighthouse/PageSpeed até 90+ em mobile.
- [ ] Ligar GA4 + Search Console + eventos de conversão.

**Gate:** Lighthouse 90+ em Performance, SEO, Best Practices, Accessibility (mobile).

---

## Fase 6 — Lançamento (Semana 8)

**Checklist de go-live:**

- [ ] Backup completo pré-lançamento.
- [ ] Apontar domínio / DNS.
- [ ] Forçar HTTPS, verificar SSL.
- [ ] Redirects 301 (se substitui site antigo).
- [ ] Submeter sitemap no Search Console.
- [ ] Verificar `robots.txt` (não bloquear indexação!).
- [ ] Remover `noindex` de staging (erro clássico — **verificar duas vezes**).
- [ ] Testar formulários **em produção**.
- [ ] Confirmar analytics a receber dados.
- [ ] Configurar backups automáticos + monitorização de uptime.
- [ ] Hardening de segurança final (doc 05).

**Gate:** site live, indexável, a converter e a medir.

---

## Fase 7 — Pós-lançamento (contínuo)

- [ ] Monitorizar Core Web Vitals reais (Search Console) 2–4 semanas.
- [ ] Acompanhar conversões e primeiros leads.
- [ ] **Plano de teste A/B** nas headlines/CTAs principais (variantes no doc 03).
- [ ] Calendário editorial do blog (SEO contínuo).
- [ ] Manutenção mensal: updates, backups, segurança, revisão de performance.
- [ ] Revisão trimestral de conversão (o site é um ativo vivo, não um projeto fechado).

---

## Responsabilidades (RACI simplificado)

| Atividade | Estratégia/Design | Cliente | Dev |
|-----------|:-----------------:|:-------:|:---:|
| Posicionamento & conteúdo | R | A | C |
| Prova social (casos/testemunhos) | C | R | — |
| Design UI/UX | R | A | C |
| Build WordPress | C | I | R |
| QA | R | A | R |
| Go-live | C | A | R |

`R=Responsável · A=Aprova · C=Consultado · I=Informado`
