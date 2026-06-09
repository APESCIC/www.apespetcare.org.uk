# APES Pet Care Clinic Website

Public website repository for <https://www.apespetcare.org.uk/>, maintained by the Association of Protecting Exotic Species CIC.

## Current release

- Version: `v1.0.0b`
- Status: Beta
- Public Change Log Hub: `/changelog/`
- Canonical release records: root `VERSION`, root `CHANGELOG.md`, `public/VERSION`, and `public/CHANGELOG.md`

## Project purpose

This repository powers the APES Pet Care Clinic public website. The site explains available welfare-first support for pet owners, species-specific care routes, booking guidance, donation options, policies, and contact paths.

The current architecture intentionally stays simple:

- PHP pages with mostly static HTML markup
- Shared includes for configuration, metadata, navigation, and layout
- Apache and `.htaccess` routing under a Cloudron LAMP-style deployment
- No frontend framework, package manager, or build pipeline required for runtime

## Repository structure

```text
.
|-- .github/
|-- public/
|   |-- .htaccess
|   |-- 403.php
|   |-- 404.php
|   |-- 500.php
|   |-- VERSION
|   |-- CHANGELOG.md
|   |-- assets/
|   |-- includes/
|   |   |-- page-init.php
|   |   |-- site-config.php
|   |   |-- site-helpers.php
|   |   |-- site-metadata.php
|   |   |-- header.php
|   |   |-- footer.php
|   |   |-- clinic-sidebar.php
|   |   `-- prepay-services.php
|   |-- changelog/
|   |-- services/
|   |-- bookings/
|   |-- policies/
|   `-- ...
|-- VERSION
|-- CHANGELOG.md
|-- README.md
`-- AGENTS.md
```

## Document root and deployment

- Document root: `public/`
- Expected hosting: Cloudron LAMP, Apache, and PHP
- Primary route pattern: folder-based URLs such as `/services/` and `/contact/`
- Redirects and error documents are managed in `public/.htaccess`

## Local development

This repo does not use the `npm` workflow previously documented here.

Recommended local workflow in a PHP-capable environment:

```powershell
cd public
php -S localhost:8000
```

Then open:

```text
http://localhost:8000
```

If you are using Cloudron, Apache, or another local PHP stack, point the web root at `public/`.

## Shared include architecture

The shared include layer is split to keep page templates simple and maintainable:

- `public/includes/site-config.php`
  Central site constants, route paths, menu data, contact details, and footer link sources.
- `public/includes/site-helpers.php`
  Reusable helpers for escaping, version loading, canonical path detection, active navigation, and schema helpers.
- `public/includes/site-metadata.php`
  Page defaults, canonical URL assembly, Open Graph and Twitter values, breadcrumb data, and structured data setup.
- `public/includes/page-init.php`
  Thin composition include that loads the shared site configuration, helpers, metadata, and pre-pay catalogue helpers.
- `public/includes/hero.php`
  Shared hero partial for the standard page templates so repeated route banner markup stays in one place.
- `public/includes/header.php` and `public/includes/footer.php`
  Shared layout partials used by each route template.

Each page should follow the same pattern:

1. Set page-specific variables.
2. Require `public/includes/page-init.php`.
3. Require the shared header.
4. Require shared partials such as `public/includes/hero.php` where the layout is standard.
5. Render page-specific HTML.
6. Require the shared footer.

## Integrations preserved in this repo

The current v1 architecture pass preserves existing public integrations:

- Booking form links
- Stripe payment and plan links
- Chatwoot
- OneSignal
- Hello Bar
- External APES News redirects

These integrations remain runtime dependencies of the live website even though the site itself no longer depends on a frontend build toolchain.

## Release records and versioning

APES CIC release hygiene for this repository now uses mirrored canonical records:

- Root `VERSION`
- Root `CHANGELOG.md`
- `public/VERSION`
- `public/CHANGELOG.md`
- Public Change Log Hub route at `/changelog/`

When a public-facing or operational website change is made:

1. Choose the correct semantic version bump.
2. Update both version files.
3. Update both changelog files.
4. Update the Change Log Hub route data.
5. Confirm footer version output matches the new release.

## SEO, routing, and compliance notes

- Keep page titles, meta descriptions, canonicals, robots, and structured data intact unless a change requires an update.
- Keep `/news/`, `/news/newsletters/`, and `/news/tag/news-letters/` redirecting to the APES News site.
- Keep footer links for Donate, Privacy Policy, Terms and Conditions, and Change Log Hub present and correct.
- Keep branded error pages available for `403`, `404`, and `500` handling.
- Keep `sitemap.xml` and `robots.txt` aligned with the live public routes.

## Legacy maintenance artifacts

Some files inside `public/` exist as maintenance or historic migration artifacts rather than runtime dependencies, including crawl snapshots and helper scripts.

Reference note:

- See `docs/maintenance-artifacts.md` for the current runtime source of truth versus retained legacy artifacts.

Current default:

- Keep them unless a later task proves they are safe to remove or move.
- Treat them as non-authoritative for runtime unless the task specifically uses them.

## Validation expectations

Before release in a PHP-capable environment:

- Check main public routes on desktop and mobile widths.
- Check footer links, Change Log Hub, robots, and sitemap references.
- Check booking, Stripe, contact, and News redirect behaviour.
- Check browser console and missing assets.
- Run PHP syntax checks where `php` CLI is available.

Current workspace limitation:

- `php` CLI is not available here, so syntax and live browser validation must be completed elsewhere before release.

## Security and operational notes

- Do not commit secrets or production credentials.
- Do not deploy automatically from Codex work without explicit approval.
- Preserve public URLs and visible content unless a task explicitly calls for change.
- Prefer the smallest safe PHP and Apache change over introducing new complexity.

## Next-step workflow

For typical maintenance work:

1. Inspect the existing route or include first.
2. Keep page content in the route template unless it becomes genuinely shared.
3. Update release records for qualifying public or operational changes.
4. Verify footer compliance, News redirects, sitemap, robots, and error-page coverage when relevant.
5. Show the diff and validation notes before any commit.
