# Maintenance Artifacts

This repository now treats the PHP website under `public/` as the runtime source of truth.

Some older files remain because they may still be useful for audit history, manual content reference, or later cleanup work. They are not required for the live Cloudron LAMP runtime unless a future task proves otherwise.

## Runtime source of truth

Use these files and directories as the active website architecture:

- `public/*.php` route entrypoints
- `public/includes/`
- `public/assets/`
- `public/.htaccess`
- `public/robots.txt`
- `public/sitemap.xml`
- `VERSION`
- `CHANGELOG.md`
- `public/VERSION`
- `public/CHANGELOG.md`

## Legacy or maintenance-only artifacts

These files should be treated as non-runtime unless a task explicitly depends on them:

- `public/build_site.py`
  Historic helper script from earlier content reconstruction and static generation work.
- `public/crawl/`
  Crawl extracts, text snapshots, and intermediate audit content retained for reference.
- `public/crawl_urls.txt`
  Historic route list used by older crawl or extraction workflows.
- `public/sitemap.html`
  Human-readable sitemap artifact retained for reference alongside the canonical XML sitemap.
- `public/PAYMENT_LINK_AUDIT.md`
  Governance and audit record for Stripe link inventory rather than a runtime dependency.

## Default handling

- Keep these artifacts unless a later task proves they are safe to remove or relocate.
- Do not treat them as the deployment contract for the live site.
- Prefer updating the active PHP routes and shared includes over reviving older generation workflows.
