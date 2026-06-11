# Local Preview

This repository is an HTML website with PHP support tools. Public pages remain static HTML under `public/`; PHP is used for local preview routing and validation parity only.

The runtime routes preview the generated HTML files under `public/`. Source fragments under `public/includes/` are blocked from public serving and should be synced into the runtime pages before preview if they are edited.

## Preferred Preview

Use the PHP built-in server from the repository root:

```powershell
php -S 127.0.0.1:8080 -t public dev/router.php
```

Open:

```text
http://127.0.0.1:8080/
```

The router serves `public/index.html` and `public/**/index.html` routes, blocks maintenance-only folders such as `public/crawl/`, preserves static asset serving, and returns the branded HTML error pages for local checks.

## Fallback Preview

If PHP CLI is unavailable, a static server can be used only for quick visual inspection. Record that limitation in validation notes because Apache-style redirects, blocked folders, and branded error handling are not fully exercised.

## Validation

Run these where the local environment supports them:

```powershell
php -l dev/router.php
php -l dev/sync-site-chrome.php
php dev/sync-site-chrome.php
php dev/sync-site-chrome.php --check
sh dev/check-public-root.sh
php -S 127.0.0.1:8080 -t public dev/router.php
sh dev/smoke-test.sh
```

Keep `public/` as the web root. Do not add `public/index.php` unless a future approved task changes the architecture.
