# Aryvon Intelligence — website (Laravel)

Marketing site for Aryvon Intelligence / VedVault, rebuilt from the static HTML
version as a Laravel 10 application.

## Requirements

* **PHP 8.1+** (the project is pinned to `"php": "^8.1"` — Laravel 10, which is the
  last Laravel line that supports PHP 8.1)
* Composer 2
* SQLite (default) or any other Laravel-supported database

## Getting started

```bash
composer install
cp .env.example .env          # already present after create-project
php artisan key:generate
touch database/database.sqlite
php artisan migrate
php artisan serve
```

Then open http://127.0.0.1:8000.

## Structure

| Path | Purpose |
|------|---------|
| `routes/web.php` | All page routes (named), the two form POST routes, and 301 redirects from the old `*.html` URLs |
| `app/Http/Controllers/PageController.php` | Renders every static page from a single `PAGES` map (view + `<title>` + meta description + canonical) |
| `app/Http/Controllers/ContactController.php` | Handles the contact + briefing forms |
| `app/Http/Requests/{Contact,Briefing}Request.php` | Server-side validation + honeypot (`company_website` must stay empty) |
| `app/Models/ContactSubmission.php` | Stored submissions (`contact_submissions` table) |
| `config/site.php` | Single source of truth for nav, footer, company details, email addresses |
| `resources/views/layouts/app.blade.php` | HTML shell: head/meta/OG, fonts, skip link, `<main>`, header + footer includes |
| `resources/views/partials/` | `header`, `footer`, `cta` |
| `resources/views/pages/` | One Blade file per page (`home`, `platform`, …, `legal/*`) |
| `resources/views/errors/404.blade.php` | Themed not-found page |
| `public/css/site.css` | Original stylesheet + `v5` (a11y / nav / forms) + `v6` (type scale, colour, logo) enhancement layers |
| `public/js/site.js` | Original interactions + `v5` accessible mobile nav & scrolled-header |
| `public/assets/` | Images / favicons |

## Security posture (read this)

This project is pinned to **PHP 8.1 → Laravel 10**, which reached end-of-life in
Feb 2025. Three advisories now affect the whole Laravel 10 line with **no fix on
that branch** (all resolved only in Laravel 12.61+):

* `CVE-2026-48019` / `GHSA-5vg9-5847-vvmq` — CRLF injection in the default `email`
  validation rule *(high)*
* `GHSA-crmm-hgp2-wgrp` — temporary signed-URL path confusion *(medium)*
* `GHSA-5vg9-5847-vvmq` (PKSA duplicate) — CRLF in email rule *(high)*

Because we deliberately stay on this stack, `composer.json` sets
`config.audit.block-insecure = false` and lists these IDs under
`config.audit.ignore` so the host's Composer will install. Compensating controls
applied in app code:

* `ContactRequest` / `BriefingRequest` use `email:strict` (no RFC warnings) and a
  `not_regex:/[\r\n\t]/` guard on every free-text field that could reach a mail
  header — this neutralises the CRLF-injection vector directly.
* No SMTP backend is wired up, so no user input reaches a mail transport yet.

**Recommended:** move the host to PHP 8.2+/8.3 and upgrade to Laravel 12 when you
can — then remove the `audit` block from `composer.json`.

## Forms

The contact and briefing forms POST to Laravel, are validated server-side, keep a
honeypot field, store each submission in `contact_submissions`, and log it via the
`stack` log channel. **No SMTP backend is wired up** — configure `MAIL_*` in `.env`
and add a Mailable/notification in `ContactController::store()` when a mailbox is
ready. Until then submissions are safe in the database + log.

## UI / UX changes from the static site

* Real skip-to-content link + `<main>` landmark + visible `:focus-visible` rings
* Mobile drawer: `aria-expanded`/`aria-controls`, Esc to close, click-outside to
  close, auto-close above the breakpoint, focus moves into the menu on open
* Header gains a shadow once the page is scrolled
* Larger, higher-contrast body type throughout (base 17px, richer copy sizes)
* Warmer paper tone, deeper ink, AA-contrast gold on light backgrounds, subtle
  depth on bands and primary buttons
* Logo is now a **vector** (`assets/logo.svg` for light, `assets/logo-cream.svg`
  for dark surfaces) — pixel-perfect at any size / DPI. The old low-res PNGs are
  kept only as social-share fallbacks.
* Clean URLs (`/platform` instead of `/platform.html`) with 301s from the old ones
* Per-page `<title>`, meta description, canonical and Open Graph tags

### `v7` — 2026 refresh layer

* Fluid type scale (`clamp()` tokens) — headings and copy resize smoothly with the
  viewport; `text-wrap: balance` on headings, `pretty` on paragraphs
* Layered elevation tokens (`--shadow-sm/md/lg`) and a snappier shared easing curve
* Glass header (`backdrop-filter` blur + saturate) that solidifies on scroll
* Tactile buttons: light sheen sweep on hover, firmer shadow, lift
* Cursor-spotlight cards (a soft gold glow tracks the pointer — fine-pointer only)
* Ambient depth: fixed film-grain overlay, aurora blobs behind the hero, a faint
  blueprint grid on dark bands
* Gradient numerals on the stat counters; a slow gold sheen on the hero keyword
* Reveal animations gain a blur-settle; scroll-progress bar is now a glowing gradient
* Floating "Request a Briefing" bar on mobile — appears past the hero, hides at the
  footer, and never shows on the contact page
* Every effect is gated behind `@media (prefers-reduced-motion: reduce)` and
  `(hover:hover) and (pointer:fine)` where appropriate

### `v8` — motion pass

* Vector logo with a soft entrance + hover drop-shadow
* Living hero backdrop — the aurora blobs slowly drift and breathe
* Animated gold hairline that sweeps around the workspace mock-up and the
  explainer player
* Section headings wipe in (with the kicker bar drawing itself) as they scroll up
* Primary buttons shift their gold gradient directionally on hover
* Ambient micro-motion: floating roman numerals in the credo, a slowly drifting
  blueprint grid on dark bands, link arrows that track their card on hover,
  eased FAQ open
* All of the above collapse to static under `prefers-reduced-motion`
