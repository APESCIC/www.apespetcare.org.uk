# APES Pet Care Clinic Website

Public website repository for <https://www.apespetcare.org.uk/>, maintained by the Association of Protecting Exotic Species CIC.

## Current release

- Version: `v2.0.0b`
- Status: Beta
- Public Change Log Hub: `/changelog/`
- Canonical release records: root `VERSION`, root `CHANGELOG.md`, `public/VERSION`, and `public/CHANGELOG.md`

## Project purpose

This repository powers the APES Pet Care Clinic public website. The site explains available welfare-first support for pet owners, species-specific care routes, booking guidance, donation options, policies, and contact paths.

The current architecture intentionally stays simple:

- Static HTML route files under `public/`
- Shared CSS, JavaScript, images, and third-party client-side integrations only
- Apache and `.htaccess` routing with `index.html` as the preferred public entrypoint
- No frontend framework, package manager, PHP runtime, or build pipeline required for the live public site

## Repository structure

```text
.
|-- .github/
|-- public/
|   |-- .htaccess
|   |-- 403.html
|   |-- 404.html
|   |-- 500.html
|   |-- VERSION
|   |-- CHANGELOG.md
|   |-- assets/
|   |-- changelog/
|   |   `-- index.html
|   |-- services/
|   |   `-- index.html
|   |-- bookings/
|   |   `-- index.html
|   |-- policies/
|   `-- ...
|-- VERSION
|-- CHANGELOG.md
|-- README.md
`-- AGENTS.md
```

## Document root and deployment

- Document root: `public/`
- Expected hosting: Static-friendly Apache hosting, including Cloudron LAMP where PHP is no longer required for the public routes
- Primary route pattern: folder-based URLs such as `/services/` and `/contact/`
- Redirects and error documents are managed in `public/.htaccess`

## Local development

This repo does not use the `npm` workflow previously documented here.

Recommended local workflow in any static-capable environment:

```powershell
cd public
python -m http.server 8000
```

Then open:

```text
http://localhost:8000
```

If you are using Apache, Cloudron, or another static web server, point the web root at `public/`.

## HTML-first route architecture

The live website now renders from static HTML route files and shared front-end assets:

- `public/index.html` and `public/**/index.html`
  Canonical public routes served as static HTML documents.
- `public/403.html`, `public/404.html`, and `public/500.html`
  Branded public error pages wired through Apache `ErrorDocument`.
- `public/assets/css/styles.css`
  Shared visual system, layout, buttons, pre-pay cards, navigation, and Change Log Hub styling.
- `public/assets/js/site.js`
  Mobile navigation, mega-menu controls, popup windows, reveal animation, and optional Change Log Hub filtering.

Each public page now follows the same maintenance pattern:

1. Keep route content in the route’s `index.html`.
2. Preserve canonical URLs, metadata, Open Graph tags, and JSON-LD directly in the page head.
3. Keep the shared site chrome and navigation patterns consistent across routes.
4. Update release records whenever public or operational website behaviour changes.

## Integrations preserved in this repo

The current HTML-first pass preserves existing public integrations:

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
5. Confirm footer version output and the static Change Log Hub match the new release.

## SEO, routing, and compliance notes

- Keep page titles, meta descriptions, canonicals, robots, and structured data intact unless a change requires an update.
- Keep `/news/`, `/news/newsletters/`, and `/news/tag/news-letters/` redirecting to the APES News site.
- Keep footer links for Donate, Privacy Policy, Terms and Conditions, and Change Log Hub present and correct.
- Keep branded HTML error pages available for `403`, `404`, and `500` handling.
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

Current workspace limitations:

- `php` CLI is not available here, but the live site no longer depends on PHP for public route rendering.
- Browser QA and real Apache error-document testing still need to be completed elsewhere before release.

## Security and operational notes

- Do not commit secrets or production credentials.
- Do not deploy automatically from Codex work without explicit approval.
- Preserve public URLs and visible content unless a task explicitly calls for change.
- Prefer the smallest safe HTML, CSS, JavaScript, and Apache change over introducing new complexity.

## Next-step workflow

For typical maintenance work:

1. Inspect the existing route or include first.
2. Keep page content in the route template unless it becomes genuinely shared.
3. Update release records for qualifying public or operational changes.
4. Verify footer compliance, News redirects, sitemap, robots, and error-page coverage when relevant.
5. Show the diff and validation notes before any commit.
