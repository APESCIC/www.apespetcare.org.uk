# Preview Checklist

Use this checklist before releasing public or operational website changes.

## Routes

- `/`
- `/index.html`
- `/robots.txt`
- `/sitemap.xml`
- `/changelog/`
- `/403.html`
- `/404.html`
- `/500.html`

## Website Quality

- Header and navigation work at desktop and mobile widths.
- Footer includes Donate, Privacy Policy, Terms and Conditions, and Change Log Hub links.
- Website version text matches `VERSION`, `public/VERSION`, both changelogs, and the Change Log Hub.
- APES News routes still redirect to `https://www.apesnews.org.uk`.
- Shared CSS, JavaScript, favicon, logo, and social image assets load without missing-file errors.

## Hosting And Compliance

- `public/` remains the browser-served web root.
- `public/index.html` remains the production entrypoint.
- `.htaccess` remains Apache-compatible.
- No route depends on Node, Python, WebSockets, workers, daemons, a database, or a persistent non-PHP runtime.
- PHP remains limited to preview, routing parity, smoke tests, and support tooling.
- No secrets, private data, uploads, or development-only debug pages are exposed under `public/`.
