# 05 — Stack Técnico WordPress

> Decisões técnicas ao serviço de: **performance (Lighthouse 90+)**, SEO, segurança e
> manutenção sustentável. Menos plugins, mais controlo.

## 1. Decisão de builder — recomendação

Duas vias válidas. Recomendação depende de quem mantém o site.

| Critério | **Gutenberg + GenerateBlocks Pro** ✅ recomendado | **Elementor Pro** |
|----------|--------------------------------------------------|-------------------|
| Performance | Excelente (HTML limpo, pouco overhead) | Boa, mas mais "peso" e DOM extra |
| Curva de aprendizagem | Média | Baixa (visual, drag-and-drop) |
| Liberdade de design | Alta com CSS/theme.json | Muito alta no visual |
| Futuro-proof | Alinhado com o core do WordPress (FSE) | Dependente do plugin |
| Custo | GenerateBlocks Pro + GeneratePress Premium | Elementor Pro (anual) |

**Recomendação:** **GeneratePress + GenerateBlocks Pro** (ou tema de blocos próprio com
`theme.json`) para o padrão de performance que o objetivo exige. Se a equipa do cliente
for editar sozinha e valorizar o editor visual, **Elementor Pro** é aceitável — mas
disciplinar o uso para não degradar o Lighthouse.

> A direção de arte do doc 04 é construível em qualquer das vias. A diferença está no
> custo de performance e na dependência de plugin.

## 2. Tema

- **Base:** GeneratePress (Premium) — leve, hooks poderosos, `theme.json`.
- **Child theme obrigatório** para CSS e funções personalizadas (nunca editar o parent).
- Registar os **design tokens** (doc 04) nas Global Styles / `theme.json`:

```jsonc
// theme.json (excerto)
{
  "settings": {
    "color": {
      "palette": [
        { "slug": "ink",       "color": "#1A1A40", "name": "Ink (Navy)" },
        { "slug": "paper",     "color": "#EFEEEC", "name": "Paper" },
        { "slug": "signature", "color": "#C8A24A", "name": "Signature (Gold)" },
        { "slug": "accent",    "color": "#C8A24A", "name": "Accent (Gold)" }
      ]
    },
    "typography": {
      "fontFamilies": [
        { "fontFamily": "Fraunces, Georgia, serif", "slug": "display" },
        { "fontFamily": "Satoshi, system-ui, sans-serif", "slug": "body" }
      ]
    }
  }
}
```

## 3. Plugins (mínimo viável — cada plugin é um custo de performance/segurança)

| Função | Plugin recomendado | Notas |
|--------|--------------------|-------|
| SEO | **Rank Math** (ou Yoast) | Schema, sitemaps, controlo on-page |
| Cache/Performance | **WP Rocket** | Cache, lazy-load, minificação, delay JS |
| Otimização de imagem | **ShortPixel** ou **Imagify** | WebP/AVIF, compressão |
| Formulários | **Fluent Forms** (leve) | Alternativa: WPForms |
| Segurança | **Wordfence** ou **Solid Security** | Firewall, 2FA, hardening |
| Backups | **UpdraftPlus** | Backups agendados off-site |
| Migração/Staging | **WP Migrate** ou ferramenta do host | — |
| Blocos (se via GB) | **GenerateBlocks Pro** | Componentes e design system |

**Regra:** cada plugin novo tem de justificar o seu peso. Evitar plugins que fazem
"tudo". Preferir código no `functions.php` do child theme para coisas simples.

## 4. Estrutura de conteúdo (CPTs & taxonomias)

- **Custom Post Type: `caso_estudo`** — casos de estudo (com campos: cliente, setor,
  métricas, testemunho).
- **Custom Post Type: `servico`** (opcional) — se os serviços forem geridos como conteúdo.
- **Custom Fields:** ACF (Advanced Custom Fields) para campos estruturados (métricas,
  logótipos de cliente, dados de testemunho).
- **Taxonomia:** categorias/setores para filtrar casos e artigos.

> Estruturar conteúdo em CPTs + ACF (em vez de tudo em páginas soltas) facilita
> consistência, reutilização e escalabilidade editorial.

## 5. Hosting

- **Managed WordPress** de qualidade: Kinsta, WP Engine, SiteGround (topo), ou Cloudways.
- Requisitos: **PHP 8.2+**, HTTP/2 ou 3, servidor de cache a nível de host,
  CDN incluído ou integrável (Cloudflare).
- **CDN:** Cloudflare à frente para assets estáticos e proteção.
- **SSL** obrigatório (Let's Encrypt/host). Forçar HTTPS.

## 6. Segurança (hardening — checklist)

- [ ] 2FA em todas as contas de admin.
- [ ] Utilizador admin com nome não-óbvio (nunca "admin").
- [ ] Passwords fortes + gestor de passwords.
- [ ] Limitar tentativas de login / firewall (Wordfence).
- [ ] Esconder versão do WP, desativar edição de ficheiros no admin (`DISALLOW_FILE_EDIT`).
- [ ] Atualizações automáticas de segurança do core.
- [ ] Backups automáticos diários off-site (UpdraftPlus).
- [ ] Permissões de ficheiros corretas (644/755).
- [ ] `wp-config.php` com chaves de segurança únicas.
- [ ] Desativar XML-RPC se não usado.
- [ ] Ambiente de **staging** separado de produção.

```php
// wp-config.php — hardening base
define('DISALLOW_FILE_EDIT', true);
define('WP_AUTO_UPDATE_CORE', 'minor');
define('FORCE_SSL_ADMIN', true);
```

## 7. Ambientes & Workflow

```
Local (dev) → Staging (cliente aprova) → Produção (live)
```

- Desenvolver em local/staging, nunca em produção.
- Aprovações do cliente sempre em staging.
- Deploy controlado + backup antes de cada mudança grande.
