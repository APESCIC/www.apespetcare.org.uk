## [v3.0.1b] - 2026-06-11

<span class="pill pill-version">Version v3.0.1b</span>
<span class="pill pill-status">Beta</span>
<span class="pill pill-type">Changed</span>
<span class="pill pill-fix">Layout Fix</span>
<span class="pill pill-accessibility">Accessibility</span>

### Summary

Stopped the repeated right-hand clinic help sidebars from floating on desktop layouts so the support panels now scroll naturally with each page.

### Detailed changes

- Updated `public/assets/theme/clinic.css` so the shared `.side` sidebar container no longer uses desktop sticky positioning.
- Simplified the `side-stack-sticky` modifier so homepage, services, bookings, and contact sidebar stacks no longer cap themselves to the viewport or scroll internally.
- Synced root and public version files, changelog mirrors, Change Log Hub output, README current-release notes, and repeated footer version text to the new `v3.0.1b` beta patch release.

### Type pills

- <span class="pill pill-type">Changed</span> Returned repeated clinic sidebars to normal page flow across desktop and mobile layouts.
- <span class="pill pill-accessibility">Accessibility</span> Improves reading flow by avoiding a floating sidebar region with its own scroll area.

### Fix pills

- <span class="pill pill-fix">Layout Fix</span> The “Need Help Fast?” sidebar and matching support cards now scroll with the rest of the page.

### Affected areas

- Website: APES Pet Care Clinic public website.
- Page or route: Homepage, services page, bookings page, contact page, shared clinic sidebar styling, Change Log Hub, README current release, and repeated footer version text.
- Files changed: `public/assets/theme/clinic.css`, `VERSION`, `public/VERSION`, `CHANGELOG.md`, `public/CHANGELOG.md`, `public/changelog/index.html`, `README.md`, and repeated `public/**/*.html` footer version strings.
- User groups affected: Public visitors using desktop and small-laptop layouts, pet owners reviewing help and booking guidance, and maintainers reviewing release records.
- Public impact: Repeated sidebars no longer float or create an internal scrolling panel; public routes, content, metadata, footer links, Newsroom routing, sitemap, robots, and branded error pages are otherwise unchanged.
- Internal impact: The existing sidebar classes remain in markup, but the shared CSS now treats the sidebar as normal page content.

### Version decision

- Previous version: `v3.0.0b`
- New version: `v3.0.1b`
- Version type: Beta patch release
- Reason for version bump: This is a small user-visible layout and accessibility fix to a shared repeated sidebar pattern.

### Validation

- Checks run: `rg` source checks for sidebar and sticky CSS usage, PowerShell public-folder structure checks equivalent to `dev/check-public-root.sh`, release-record alignment review, and footer version string verification across public HTML files.
- Manual checks completed: Confirmed by source review that `.side` and `side-stack-sticky` no longer apply desktop sticky positioning, viewport height caps, or internal sidebar scrolling; the remaining sticky CSS is limited to the site header, and the remaining max-height/overflow rule is for the mobile navigation menu.
- Known limitations: PHP CLI, Bash, and the in-app browser bridge are not available in this Windows workspace, so `php -l dev/router.php`, `dev/check-public-root.sh`, `php -S 127.0.0.1:8080 -t public dev/router.php`, `dev/smoke-test.sh`, and browser visual QA still need a local pass in an environment with those tools available.
- Rollback notes: Restore the previous sticky sidebar CSS and `v3.0.0b` release records if this layout fix needs to be undone.

## [v3.0.0b] - 2026-06-11

<span class="pill pill-version">Version v3.0.0b</span>
<span class="pill pill-status">Beta</span>
<span class="pill pill-type">Changed</span>
<span class="pill pill-type">Tooling</span>
<span class="pill pill-accessibility">Accessibility</span>

### Summary

Migrated the repository contract to an HTML website with PHP support tools, keeping public routes static while adding APES-standard local preview routing, public-root validation, smoke tests, and dedicated preview documentation.

### Detailed changes

- Added `dev/router.php` so maintainers can preview the static HTML site through the PHP built-in server with routing parity, blocked maintenance folders, and branded 403/404 handling.
- Added `dev/check-public-root.sh` and `dev/smoke-test.sh` to verify the `public/` web-root contract and key local-preview routes.
- Added `docs/local-preview.md` and `docs/preview-checklist.md` so future work has a clear HTTP loopback preview workflow and release QA checklist.
- Updated README architecture notes, version records, changelog mirrors, Change Log Hub output, and repeated footer version text to the new `v3.0.0b` Major Beta release.

### Type pills

- <span class="pill pill-type">Changed</span> Formalised the repository as an HTML website with PHP support tools rather than a PHP-rendered public site.
- <span class="pill pill-type">Tooling</span> Added local preview, public-root validation, and smoke-test tooling.
- <span class="pill pill-accessibility">Accessibility</span> Keeps branded error pages, footer links, and route QA in the release checklist.

### Affected areas

- Website: APES Pet Care Clinic public website.
- Page or route: No public route content changed intentionally; local preview covers `/`, `/index.html`, `/robots.txt`, `/sitemap.xml`, `/changelog/`, and branded error pages.
- Files changed: `dev/router.php`, `dev/check-public-root.sh`, `dev/smoke-test.sh`, `docs/local-preview.md`, `docs/preview-checklist.md`, `README.md`, `VERSION`, `public/VERSION`, `CHANGELOG.md`, `public/CHANGELOG.md`, `public/changelog/index.html`, and repeated `public/**/*.html` footer version strings.
- User groups affected: Maintainers, reviewers, and future Codex agents validating website changes.
- Public impact: Public pages remain static HTML with existing URLs, metadata, footer links, News routing, sitemap, robots, and branded error pages preserved.
- Internal impact: Local preview and validation now match the APES CIC `public/` web-root and Cloudron LAMP compatibility standard more closely.

### Version decision

- Previous version: `v2.1.7b`
- New version: `v3.0.0b`
- Version type: Major Beta release
- Reason for version bump: This formalises the site architecture and support-tooling workflow while preserving the HTML public route model.

### Validation

- Checks run: Repository status check before editing, source review of the new PHP router and shell support scripts, public-folder structure review, and release-record alignment check.
- Manual checks completed: Confirmed by source review that `public/index.html` remains the production entrypoint, `public/.htaccess` remains present, PHP is limited to support tooling, and no database, CMS, persistent runtime, forms, uploads, payments, sitemap routes, robots rules, News redirects, or branded error-page content were intentionally changed.
- Known limitations: PHP CLI is not available in this workspace, so `php -l dev/router.php`, `php -S 127.0.0.1:8080 -t public dev/router.php`, and `dev/smoke-test.sh` need a PHP-capable local pass before release. Codex browser access was blocked by the Windows sandbox during planning, so final visual QA still needs an interactive browser pass.
- Rollback notes: Remove the `dev/` PHP support tooling and the two preview docs, then restore the `v2.1.7b` release records if this architecture/tooling migration needs to be undone.

## [v2.1.7b] - 2026-06-10

<span class="pill pill-version">Version v2.1.7b</span>
<span class="pill pill-status">Beta</span>
<span class="pill pill-type">Changed</span>
<span class="pill pill-fix">Layout Fix</span>
<span class="pill pill-accessibility">Accessibility</span>

### Summary

Fixed the floating right-hand sidebar stack so the lower support card no longer overlaps the clinic help card on the affected desktop layouts while keeping the newer nested-route header and compact top-bar icon updates already on main.

### Detailed changes

- Added a new `side-stack-sticky` shared modifier in `public/assets/theme/clinic.css` so the affected two-card right rails stay sticky as one stack, cap themselves to the available desktop viewport height, and scroll internally when space is limited.
- Updated the homepage, contact, bookings, and services templates to apply the shared stacked-sidebar modifier while preserving the newer nested-route Home and brand link path fixes already present on main.
- Carried forward the current `v2.1.5b` nested-route navigation fix and `v2.1.6b` compact top-bar social icon changes, then synced root and public version files, changelog mirrors, Change Log Hub output, README current-release notes, and repeated footer version text to the new `v2.1.7b` beta patch release.

### Type pills

- <span class="pill pill-type">Changed</span> Adjusted the shared right-hand sidebar behaviour so affected card stacks float together instead of risking overlap during desktop scrolling.
- <span class="pill pill-accessibility">Accessibility</span> Keeps booking and contact actions readable and reachable on shorter desktop viewports while preserving the accessible header improvements already on main.

### Fix pills

- <span class="pill pill-fix">Layout Fix</span> The floating right-hand column now behaves as a single scroll-safe stack on the affected pages.

### Affected areas

- Website: APES Pet Care Clinic public website.
- Page or route: Homepage, contact page, bookings page, services page, shared clinic sidebar styling, Change Log Hub, README current release, and repeated footer version text.
- Files changed: `public/assets/theme/clinic.css`, `public/index.html`, `public/contact/index.html`, `public/bookings/index.html`, `public/services/index.html`, `VERSION`, `public/VERSION`, `CHANGELOG.md`, `public/CHANGELOG.md`, `public/changelog/index.html`, `README.md`, and repeated `public/**/*.html` footer version strings.
- User groups affected: Public visitors using desktop and small-laptop layouts, pet owners trying to book or contact the clinic, and maintainers reviewing release records.
- Public impact: The right-hand help and support cards stay readable and clickable instead of overlapping while the newer header and navigation fixes remain intact.
- Internal impact: The sidebar pattern now has an explicit shared modifier for stacked sticky behaviour, and the merged release record remains aligned after integrating newer mainline website changes.

### Version decision

- Previous version: `v2.1.6b`
- New version: `v2.1.7b`
- Version type: Beta patch release
- Reason for version bump: This is a small user-visible layout and accessibility fix applied after the already-released `v2.1.5b` and `v2.1.6b` header and navigation changes.

### Validation

- Checks run: Merge conflict review, source review of the stacked sidebar modifier, release-record alignment check, and footer version string verification across public HTML files.
- Manual checks completed: Confirmed by source review that the affected stacked sidebars now use the shared sticky-stack modifier, the nested-route Home and brand links remain depth-correct from main, the compact top-bar social icon styling remains present, and no SEO metadata, sitemap entries, robots rules, Newsroom routing, footer links, or branded error-page structure were intentionally changed by this merge resolution.
- Known limitations: PHP CLI is not available in this workspace, so the recommended `php -S 127.0.0.1:8080 -t public` preview and full browser-based visual QA still need a manual pass outside this non-interactive workspace.
- Rollback notes: Revert the merged sidebar modifier changes and restore the previous `v2.1.6b` release records if the desktop sidebar layout fix needs to be undone.

## [v2.1.6b] - 2026-06-10

<span class="pill pill-version">Version v2.1.6b</span>
<span class="pill pill-status">Beta</span>
<span class="pill pill-type">Changed</span>
<span class="pill pill-fix">Header Fix</span>
<span class="pill pill-accessibility">Accessibility</span>

### Summary

Replaced the visible top-bar social network names with compact social icons while keeping the existing links accessible across the shared website header.

### Detailed changes

- Updated `public/assets/theme/clinic.css` so the repeated top-bar social links now render as compact icon buttons with shared hover and focus styling instead of visible text labels.
- Preserved the existing social destination URLs and kept the source link text in the repeated header markup so the links still expose readable names while the visual presentation becomes more compact.
- Synced root and public version files, changelog mirrors, Change Log Hub output, README current-release notes, and repeated footer version text to the new `v2.1.6b` beta patch release.

### Type pills

- <span class="pill pill-type">Changed</span> Updated the shared header top bar so social links display as icons instead of text labels across the static route set.
- <span class="pill pill-accessibility">Accessibility</span> Retained readable link names in the source and visible focus treatment while reducing header clutter.

### Fix pills

- <span class="pill pill-fix">Header Fix</span> The shared top bar now uses a more compact icon treatment for social links without changing the underlying destinations.

### Affected areas

- Website: APES Pet Care Clinic public website.
- Page or route: Shared header top bar across repeated public routes, Change Log Hub, README current release, and repeated footer version text.
- Files changed: `public/assets/theme/clinic.css`, `VERSION`, `public/VERSION`, `CHANGELOG.md`, `public/CHANGELOG.md`, `public/changelog/index.html`, `README.md`, and repeated `public/**/*.html` footer version strings.
- User groups affected: Public visitors using the shared header and maintainers reviewing release records.
- Public impact: The header top bar is more compact and visually scannable while the same social links remain available.
- Internal impact: Shared header styling and release records remain aligned without introducing new runtime dependencies.

### Version decision

- Previous version: `v2.1.5b`
- New version: `v2.1.6b`
- Version type: Beta patch release
- Reason for version bump: This is a small shared UI and accessibility-safe header polish that changes visual presentation without adding new routes or workflows.

### Validation

- Checks run: Source review of the shared top-bar CSS, release-record alignment review, and footer version string verification across public HTML files.
- Manual checks completed: Confirmed by source review that the shared top-bar social links now render as icon buttons from CSS, keep the existing social URLs, retain focus treatment, and do not change SEO metadata, sitemap entries, robots rules, Newsroom routing, footer links, or branded error-page structure.
- Known limitations: No browser preview was run in this non-interactive workspace, so final visual QA of icon rendering and spacing across desktop and mobile breakpoints still needs a manual pass.
- Rollback notes: Revert the shared top-bar CSS icon treatment and restore the previous `v2.1.5b` release records if the header presentation needs to return to text links.

## [v2.1.5b] - 2026-06-09

<span class="pill pill-version">Version v2.1.5b</span>
<span class="pill pill-status">Beta</span>
<span class="pill pill-type">Changed</span>
<span class="pill pill-fix">Navigation Fix</span>

### Summary

Fixed the repeated nested-route header links so the brand and Home navigation reliably return visitors to the homepage instead of reloading the current page.

### Detailed changes

- Updated the repeated header markup across nested first-level routes and nested policy routes so the brand link and Home link now use depth-correct relative paths back to the website root.
- Preserved the existing Services, Information, Bookings, Donate, and Contact navigation paths along with the shared JavaScript and CSS behavior because the bug was caused by static HTML pathing rather than the menu interaction layer.
- Synced root and public version files, changelog mirrors, Change Log Hub output, README current-release notes, and repeated footer version text to the new `v2.1.5b` beta patch release.

### Type pills

- <span class="pill pill-type">Changed</span> Corrected the shared nested-route header pathing so homepage navigation resolves to `/` from repeated route pages.

### Fix pills

- <span class="pill pill-fix">Navigation Fix</span> The brand and Home links no longer loop visitors back to the current nested route when used from inner pages.

### Affected areas

- Website: APES Pet Care Clinic public website.
- Page or route: Repeated first-level routes, nested policy routes, Change Log Hub, README current release, branded error-page footer version text, and repeated footer version strings across the public site.
- Files changed: Repeated `public/**/index.html` header links, `VERSION`, `public/VERSION`, `CHANGELOG.md`, `public/CHANGELOG.md`, `public/changelog/index.html`, `README.md`, and repeated `public/**/*.html` footer version strings.
- User groups affected: Public visitors using nested routes and maintainers reviewing release records.
- Public impact: Visitors on nested pages can now use the brand and Home links to return to the homepage as expected.
- Internal impact: Shared static header markup now uses the correct directory depth for homepage navigation while release records remain aligned.

### Version decision

- Previous version: `v2.1.4b`
- New version: `v2.1.5b`
- Version type: Beta patch release
- Reason for version bump: This is a small user-visible navigation bug fix that corrects repeated header behavior without changing routes or introducing a new workflow.

### Validation

- Checks run: Source review of repeated header links, release-record alignment review, and path-audit searches across nested route files.
- Manual checks completed: Confirmed by source review that only `public/index.html` keeps `href="./"` for the brand and Home links, nested first-level routes now use `../`, nested policy routes now use `../../`, and no SEO metadata, sitemap entries, robots rules, Newsroom routing, footer links, or branded error-page structure were changed by this fix.
- Known limitations: PHP CLI is not available in this workspace, so the recommended `php -S 127.0.0.1:8080 -t public` preview and full browser-based click testing still need a manual pass outside this non-interactive workspace.
- Rollback notes: Revert the repeated nested-route header links and restore the previous `v2.1.4b` release records if the navigation fix needs to be undone.

## [v2.1.4b] - 2026-06-09

<span class="pill pill-version">Version v2.1.4b</span>
<span class="pill pill-status">Beta</span>
<span class="pill pill-type">Changed</span>
<span class="pill pill-fix">Layout Fix</span>
<span class="pill pill-accessibility">Accessibility</span>

### Summary

Fixed the shared help sidebar so both cards float together with clearer spacing across the homepage and repeated route pages.

### Detailed changes

- Updated `public/assets/theme/clinic.css` so the shared sidebar container now handles sticky positioning, the two-column content grid aligns items correctly, and the support cards keep a clearer gap on desktop.
- Preserved the existing stacked mobile layout by returning the sidebar to normal flow below the desktop breakpoint.
- Synced root and public version files, changelog mirrors, Change Log Hub output, README current-release notes, and repeated footer version text to the new `v2.1.4b` beta patch release.

### Type pills

- <span class="pill pill-type">Changed</span> Corrected the shared sidebar behavior so the help panel and illustration card move together instead of separating during desktop scrolling.
- <span class="pill pill-accessibility">Accessibility</span> Improved visual separation and reading flow for the repeated support sidebar on shared public pages.

### Fix pills

- <span class="pill pill-fix">Layout Fix</span> Moved sticky behavior from the first sidebar card to the shared sidebar container and increased the inter-card gap.

### Affected areas

- Website: APES Pet Care Clinic public website.
- Page or route: Homepage, services, bookings, contact, repeated species and policy pages, branded error pages, Change Log Hub, README current release, and repeated footer version text.
- Files changed: `public/assets/theme/clinic.css`, `VERSION`, `public/VERSION`, `CHANGELOG.md`, `public/CHANGELOG.md`, `public/changelog/index.html`, `README.md`, and repeated `public/**/*.html` footer version strings.
- User groups affected: Public visitors, pet owners using service and information pages, and maintainers reviewing release records.
- Public impact: The shared support sidebar now reads as two separate cards while floating together more reliably on desktop pages.
- Internal impact: Shared layout behavior and release records remain aligned for future maintenance.

### Version decision

- Previous version: `v2.1.3b`
- New version: `v2.1.4b`
- Version type: Beta patch release
- Reason for version bump: This is a small user-visible layout and usability fix to a shared repeated sidebar pattern.

### Validation

- Checks run: Source review of the shared sidebar CSS cascade and release-record alignment review.
- Manual checks completed: Confirmed by source review that the shared sidebar now owns desktop sticky behavior, keeps a larger card gap, and returns to normal flow below `980px` without changing routes, navigation, SEO metadata, sitemap entries, robots rules, Newsroom routing, footer links, or branded error-page structure.
- Known limitations: PHP CLI is not available in this workspace, so the recommended `php -S 127.0.0.1:8080 -t public` preview and full browser-based visual scrolling QA still need a manual pass outside this non-interactive workspace.
- Rollback notes: Revert the shared sidebar CSS changes and restore the previous `v2.1.3b` release records if the layout fix needs to be undone.

## [v2.1.3b] - 2026-06-09

<span class="pill pill-version">Version v2.1.3b</span>
<span class="pill pill-status">Beta</span>
<span class="pill pill-type">Changed</span>
<span class="pill pill-fix">Contrast Fix</span>
<span class="pill pill-accessibility">Accessibility</span>

### Summary

Improved the shared clinic hero contrast so the heading and badge text remain readable on the light panel across the homepage and related route pages.

### Detailed changes

- Updated the final shared hero override in `public/assets/theme/clinic.css` so the light-panel hero now explicitly sets readable dark text colors for the panel, heading, and badge labels instead of inheriting pale text from the earlier dark hero block.
- Preserved the existing hero layout, background treatment, badges, and imagery while fixing the low-contrast text issue affecting repeated hero sections across the website.
- Synced root and public version files, changelog mirrors, Change Log Hub output, README current-release notes, and repeated footer version text to the new `v2.1.3b` beta patch release.

### Type pills

- <span class="pill pill-type">Changed</span> Corrected the shared hero theme cascade so light-panel hero copy is readable without changing the page structure or content.
- <span class="pill pill-accessibility">Accessibility</span> Improved text contrast for the shared hero heading and badge labels on repeated public pages.

### Fix pills

- <span class="pill pill-fix">Contrast Fix</span> The shared hero no longer relies on dark-theme inherited text colors that became too faint on the later light-panel variant.

### Affected areas

- Website: APES Pet Care Clinic public website.
- Page or route: Homepage hero, repeated hero sections on service and information pages, Change Log Hub, README current release, and repeated footer version text.
- Files changed: `public/assets/theme/clinic.css`, `VERSION`, `public/VERSION`, `CHANGELOG.md`, `public/CHANGELOG.md`, `public/changelog/index.html`, `README.md`, and repeated `public/**/*.html` footer version strings.
- User groups affected: Public visitors, pet owners using service and information pages, and maintainers reviewing release records.
- Public impact: Hero headings and support badges are easier to read on the light-panel clinic theme.
- Internal impact: Shared theme behavior and release records remain aligned for future maintenance.

### Version decision

- Previous version: `v2.1.2b`
- New version: `v2.1.3b`
- Version type: Beta patch release
- Reason for version bump: This is a small user-visible accessibility and styling fix to the shared hero presentation.

### Validation

- Checks run: Source review of the final hero cascade, release-record alignment check, and footer version string verification across public HTML files.
- Manual checks completed: Confirmed by source review that the final light hero override now sets explicit readable colors for the panel, heading, and badge labels without changing routes, navigation, SEO metadata, sitemap entries, robots rules, News routing, footer links, or branded error-page structure.
- Known limitations: Browser QA with a live local preview still needs a manual visual pass outside this non-interactive workspace.
- Rollback notes: Revert the shared hero color overrides and restore the previous `v2.1.2b` release records if the contrast fix needs to be undone.

## [v2.1.2b] - 2026-06-09

<span class="pill pill-version">Version v2.1.2b</span>
<span class="pill pill-status">Beta</span>
<span class="pill pill-type">Changed</span>
<span class="pill pill-compliance">Deployment Hygiene</span>
<span class="pill pill-fix">Runtime Cleanup</span>

### Summary

Removed Python helper usage from the deployable website tree and updated local workflow guidance so the APES Pet Care Clinic website remains aligned with Cloudron LAMP hosting expectations.

### Detailed changes

- Removed the legacy Python static-generation helper from `public/build_site.py` and Python crawl helper scripts from `public/crawl/` so the public document root no longer contains Python executable files.
- Replaced the Python-based VS Code preview task with a PHP built-in server preview command that points at the `public/` document root.
- Updated `README.md`, `AGENTS.md`, and `docs/maintenance-artifacts.md` so setup, preview, validation, and retained-artifact guidance no longer recommends Python or npm workflows for this static Cloudron LAMP website.
- Synced root and public version files, mirrored changelogs, Change Log Hub output, README current-release notes, and repeated footer version text to the new `v2.1.2b` beta patch release.
- Preserved normal browser-side JavaScript, JSON-LD, Stripe, Chatwoot, OneSignal, Hello Bar, Apache `.htaccess`, sitemap, robots, branded error pages, and static HTML routes.

### Type pills

- <span class="pill pill-type">Changed</span> The repository workflow now reflects static HTML, browser JavaScript, Apache, and optional PHP preview instead of Python or npm tooling.
- <span class="pill pill-compliance">Deployment Hygiene</span> The deployable `public/` tree no longer includes Python executable scripts.

### Fix pills

- <span class="pill pill-fix">Runtime Cleanup</span> Removed non-LAMP helper scripts and stale setup instructions that could confuse Cloudron LAMP maintenance.

### Affected areas

- Website: APES Pet Care Clinic public website.
- Page or route: Deployment source tree, local preview workflow, Change Log Hub, README current release, and repeated footer version text.
- Files changed: `VERSION`, `CHANGELOG.md`, `README.md`, `AGENTS.md`, `.vscode/tasks.json`, `docs/maintenance-artifacts.md`, `public/VERSION`, `public/CHANGELOG.md`, `public/changelog/index.html`, deleted Python helper scripts under `public/`, and repeated `public/**/*.html` footer version strings.
- User groups affected: Website maintainers, APES staff, and anyone preparing the site for Cloudron LAMP hosting.
- Public impact: Public routes and visitor journeys remain unchanged.
- Internal impact: The deployable website source is cleaner and easier to audit for Cloudron LAMP compatibility.

### Version decision

- Previous version: `v2.1.1b`
- New version: `v2.1.2b`
- Version type: Beta patch release
- Reason for version bump: This is a deployment hygiene, documentation, and release-record sync that removes non-LAMP helper scripts without changing public routes.

### Validation

- Checks run: Source review, non-LAMP runtime search, public executable-extension inventory, release-record alignment check, and footer version string verification across public HTML files.
- Manual checks completed: Confirmed by source review that static HTML routes, browser JavaScript, Apache routing, sitemap, robots, branded error pages, News redirects, and required footer governance links remain present.
- Known limitations: Browser QA and real Cloudron/Apache preview still need a manual pass outside this non-interactive workspace.
- Rollback notes: Restore the deleted Python helper scripts and revert the workflow, documentation, version, changelog, Change Log Hub, and footer version updates to return to `v2.1.1b`.

## [v2.1.1b] - 2026-06-09

<span class="pill pill-version">Version v2.1.1b</span>
<span class="pill pill-status">Beta</span>
<span class="pill pill-type">Changed</span>
<span class="pill pill-fix">Theme Alignment</span>
<span class="pill pill-accessibility">Accessibility</span>

### Summary

Aligned the shared APES Pet Care Clinic theme and navigation behaviour more closely with the wider APES website pattern while keeping this repository's static HTML route model and public URLs unchanged.

### Detailed changes

- Refined the canonical shared clinic theme in `public/assets/theme/clinic.css` with clearer APES-style design tokens, stronger header and footer treatments, improved hero and card surfaces, and more consistent notice styling across the static route set.
- Updated `public/assets/js/site.js` so navigation behaves more like the APES reference model, including click-driven desktop mega menus, one-open-menu handling, mobile body scroll locking, outside-click close, Escape close, and safer desktop panel positioning.
- Kept `public/assets/css/styles.css` as the public compatibility entrypoint and documented that `public/assets/theme/clinic.css` remains the editable theme source of truth for maintainers.
- Synced the mirrored root and public version files, changelog mirrors, Change Log Hub entry, README release notes, and repeated footer version text to the new `v2.1.1b` beta patch release.
- Preserved the existing route map, SEO metadata, News routing, footer governance links, and HTML-first deployment approach while improving the shared visual system and maintainability guidance.

### Type pills

- <span class="pill pill-type">Changed</span> Brought the shared visual layer and interaction behaviour closer to the wider APES reference pattern without introducing PHP rendering or changing public routes.
- <span class="pill pill-accessibility">Accessibility</span> Improved contrast-supporting surfaces, focus-visible navigation cues, and mobile menu handling while retaining the existing skip-link and static page structure.

### Fix pills

- <span class="pill pill-fix">Theme Alignment</span> The shared clinic theme, navigation treatment, and maintainer guidance now follow a more deliberate APES-style source model instead of a looser static-only refresh.

### Affected areas

- Website: APES Pet Care Clinic public website.
- Page or route: Shared header, footer, hero, card, notice, navigation, Change Log Hub, branded error pages, and repeated footer version text across the static route set.
- Files changed: `VERSION`, `CHANGELOG.md`, `README.md`, `docs/maintenance-artifacts.md`, `public/VERSION`, `public/CHANGELOG.md`, `public/changelog/index.html`, `public/assets/theme/clinic.css`, `public/assets/js/site.js`, and repeated `public/**/*.html` footer version strings.
- User groups affected: Public visitors, pet owners, APES staff, and maintainers working on shared styling and navigation behaviour.
- Public impact: Visitors see a more consistent APES-aligned presentation and steadier navigation behaviour without any route or content migration.
- Internal impact: The repository now has clearer theme-source ownership and better shared interaction behaviour while staying within the existing static HTML maintenance model.

### Version decision

- Previous version: `v2.1.0b`
- New version: `v2.1.1b`
- Version type: Beta patch release
- Reason for version bump: This is a user-visible theming and interaction refinement plus release-record sync that preserves routes and deployment structure.

### Validation

- Checks run: Source review of shared CSS and JS, release-record alignment checks, local HTTP preview requests for key routes, and footer version string verification across public HTML files.
- Manual checks completed: Confirmed by source review that the shared stylesheet and JavaScript paths remain stable, required footer governance links remain present, and the Change Log Hub reflects the new release.
- Known limitations: Visual browser QA, responsive interaction QA in a real browser, and full keyboard-navigation checks still need a manual pass in an interactive preview session.
- Rollback notes: Revert the shared theme and navigation script updates, release-record changes, README/docs adjustments, Change Log Hub entry, and repeated footer version sync to restore `v2.1.0b`.

## [v2.1.0b] - 2026-06-09

<span class="pill pill-version">Version v2.1.0b</span>
<span class="pill pill-status">Beta</span>
<span class="pill pill-type">Changed</span>
<span class="pill pill-fix">Workflow Fix</span>
<span class="pill pill-compliance">Documentation</span>

### Summary

Added a VS Code localhost preview workflow for the HTML-first website and reorganised the shared clinic theme into a dedicated theme folder so maintainers can see styling and images correctly during local preview.

### Detailed changes

- Added a workspace task that runs `python -m http.server 8000` from `public/`, giving the static site a proper localhost web root for VS Code Simple Browser and other local previews.
- Documented that direct `file://` previews show white text-first pages because the website intentionally uses root-relative asset and route paths such as `/assets/...` and `/services/`.
- Moved the canonical shared clinic stylesheet to `public/assets/theme/clinic.css` and converted `public/assets/css/styles.css` into a lightweight compatibility entrypoint so live public URLs remain unchanged.
- Kept the existing route files, image paths, JavaScript path, SEO metadata, sitemap URLs, News routing, and footer governance links intact while improving the repository's local preview ergonomics.
- Updated the root and public version files, changelog mirrors, Change Log Hub output, README current-release notes, and static footer version text so the release record matches the new `v2.1.0b` beta minor workflow update.

### Type pills

- <span class="pill pill-type">Changed</span> Added a repository-level localhost preview workflow without changing the live website routing or asset contract.
- <span class="pill pill-compliance">Documentation</span> Clarified the supported local preview method in the repository guidance so maintainers do not mistake raw `file://` rendering for a broken deployment.

### Fix pills

- <span class="pill pill-fix">Workflow Fix</span> VS Code previewing now has a first-class localhost path that correctly loads the shared theme, images, and root-relative links.

### Affected areas

- Website: APES Pet Care Clinic public website.
- Page or route: `/`, `/services/`, `/contact/`, `/changelog/`, shared static footer version text, and local preview workflow documentation.
- Files changed: `.vscode/tasks.json`, `VERSION`, `CHANGELOG.md`, `README.md`, `public/VERSION`, `public/CHANGELOG.md`, `public/changelog/index.html`, `public/assets/css/styles.css`, `public/assets/theme/clinic.css`, and the repeated `public/**/*.html` footer version strings.
- User groups affected: Website maintainers, APES staff, and anyone previewing the website locally in VS Code.
- Public impact: No live route, asset, or content contract changed for visitors.
- Internal impact: Local previewing is clearer, faster, and more reliable, and the shared theme now has a dedicated canonical home.

### Version decision

- Previous version: `v2.0.1b`
- New version: `v2.1.0b`
- Version type: Beta minor release
- Reason for version bump: This adds a meaningful new maintainer workflow and internal theme organisation improvement without changing live public routes.

### Validation

- Checks run: Started a local Python HTTP server from `public/`, requested `/`, `/services/`, `/contact/`, and `/changelog/` over localhost, and inspected release-record alignment by source.
- Manual checks completed: Confirmed by source review that the shared stylesheet import preserves the `/assets/css/styles.css` contract, the new canonical theme file exists under `public/assets/theme/`, and required footer governance links remain present.
- Known limitations: Final visual QA in VS Code Simple Browser, responsive browser QA, and browser-console review still need a manual pass in an interactive browser session.
- Rollback notes: Revert the VS Code task, stylesheet move, compatibility import, README updates, footer version sync, and aligned release records to restore the previous `v2.0.1b` repository workflow.

## [v2.0.1b] - 2026-06-09

<span class="pill pill-version">Version v2.0.1b</span>
<span class="pill pill-status">Beta</span>
<span class="pill pill-type">Changed</span>
<span class="pill pill-fix">Brand Refresh</span>
<span class="pill pill-accessibility">Accessibility</span>

### Summary

Refreshed the APES Pet Care Clinic public website so it now reads clearly as a warm, reassuring pet care clinic while keeping the HTML-first runtime, existing routes, and welfare-first safety messaging intact.

### Detailed changes

- Reworked the shared stylesheet into a softer clinic-led visual system with warmer cards, calmer gradients, stronger CTA hierarchy, improved notice styling, and a more welcoming APES-aligned header and footer treatment.
- Replaced the repeated logo, favicon, manifest, and social-sharing asset references with the optimized website logo pack, including a new favicon set, updated JSON-LD logo path, refreshed header/footer logo usage, and consistent social image metadata.
- Added new custom clinic imagery under `public/assets/images/` and integrated the visuals into the shared hero pattern so key public pages now present a more supportive pet-care atmosphere rather than text-led logo-only panels.
- Added icon-led feature panels and supportive illustration blocks to the homepage, Services Hub, bookings page, and contact page so visitors can scan core guidance, booking expectations, and support routes more easily.
- Kept the existing route URLs, footer governance links, News redirects, Stripe and booking flows, Chatwoot, OneSignal, Hello Bar, and clinical-scope wording intact while improving the site’s visual clarity and consistency.
- Updated the root and public version files, changelog mirrors, Change Log Hub output, and README current-release notes so the release record matches the refreshed public presentation.

### Type pills

- <span class="pill pill-type">Changed</span> Applied a full clinic-first visual refresh across the shared site chrome and key public routes without changing the underlying HTML-first route structure.
- <span class="pill pill-accessibility">Accessibility</span> Improved visual hierarchy, scannability, and focus-friendly component treatments while keeping warning content and navigation patterns easy to locate.

### Fix pills

- <span class="pill pill-fix">Brand Refresh</span> The site no longer feels like a text-first placeholder and now uses clinic-appropriate imagery, iconography, and brand assets throughout the public experience.

### Affected areas

- Website: APES Pet Care Clinic public website.
- Page or route: `/`, `/services/`, `/bookings/`, `/contact/`, `/changelog/`, shared hero/footer/header patterns, and the repeated public HTML head metadata.
- Files changed: `VERSION`, `CHANGELOG.md`, `README.md`, `public/VERSION`, `public/CHANGELOG.md`, `public/changelog/index.html`, `public/site.webmanifest`, `public/assets/css/styles.css`, new files under `public/assets/images/`, `public/assets/social/`, `public/assets/logos/optimized/`, `public/favicons/`, and updated `public/**/*.html` route files.
- User groups affected: Pet owners, donors, public visitors, and staff maintaining the website.
- Public impact: Visitors now see a warmer, more trustworthy clinic presentation with clearer visual guidance, richer hero media, and stronger route scanning cues.
- Internal impact: Public brand assets, release records, and head metadata are now more consistent and easier to maintain across the static route set.

### Version decision

- Previous version: `v2.0.0b`
- New version: `v2.0.1b`
- Version type: Beta patch release
- Reason for version bump: This is a significant user-visible branding and presentation refresh that preserves routes, integrations, and runtime architecture while improving the public visual experience.

### Validation

- Checks run: Source inspection across the shared stylesheet, repeated HTML head metadata, shared hero/footer patterns, generated image assets, favicon paths, version files, and changelog mirrors.
- Manual checks completed: Confirmed by source review that the optimized logos, favicons, social images, manifest, and new clinic imagery are referenced from the public document root and that footer governance links and clinical-scope messaging remain present.
- Known limitations: Browser QA, keyboard QA, real popup behaviour checks, and final responsive verification in a running `public/` web-root environment still need to be completed manually.
- Rollback notes: Revert the shared CSS refresh, updated public HTML route files, added clinic image and favicon assets, and synchronized release-record updates to restore the previous `v2.0.0b` presentation.

## [v2.0.0b] - 2026-06-09

<span class="pill pill-version">Version v2.0.0b</span>
<span class="pill pill-status">Beta</span>
<span class="pill pill-type">Changed</span>
<span class="pill pill-fix">Migration</span>
<span class="pill pill-compliance">Architecture</span>

### Summary

Migrated the APES Pet Care Clinic public website from PHP route templates to an HTML-first runtime, aligned the site chrome with the wider APES navigation pattern, and removed the live dependency on shared PHP includes.

### Detailed changes

- Converted the public route templates into static `index.html` pages, including the homepage, Services Hub, species pages, policies, donate, contact, bookings, and the Change Log Hub.
- Added static `403.html`, `404.html`, and `500.html` error documents and switched Apache to use them as the active public fallback pages.
- Rebuilt the shared site chrome as static HTML with a skip link, topbar contact links, APES network social links, a sticky header, accessible menu controls, grouped navigation, and a denser footer layout.
- Migrated the payment catalogue, route-level metadata, canonical tags, Open Graph tags, and JSON-LD output into static HTML so public pages no longer depend on `public/includes/` PHP helpers at runtime.
- Switched `.htaccess` to prioritise `index.html`, added redirects from direct `.php` requests to clean folder URLs or HTML error pages, and blocked direct browser access to helper-only directories.
- Updated the root and public version records, changelog mirrors, README, and maintenance-artifact notes so the repository documents the HTML-first runtime accurately.
- Removed obsolete route-level PHP entrypoints, PHP error pages, legacy redirect wrappers, and unused include files after generating the verified HTML equivalents.

### Type pills

- <span class="pill pill-type">Changed</span> Replaced the public PHP route runtime with static HTML output while preserving clean folder URLs, external integrations, and the existing welfare-first copy.
- <span class="pill pill-compliance">Architecture</span> Brought the Pet Care Clinic runtime into line with the APES HTML-first website direction and made the public output easier to audit and host safely.

### Fix pills

- <span class="pill pill-fix">Migration</span> Direct public `.php` requests now redirect to the correct clean routes instead of depending on runtime PHP files that no longer serve the live site.

### Affected areas

- Website: APES Pet Care Clinic public website.
- Page or route: `/`, service routes, policy routes, `/bookings/`, `/contact/`, `/about-us/`, `/events/`, `/donate/`, `/changelog/`, and the branded error pages.
- Files changed: `VERSION`, `CHANGELOG.md`, `README.md`, `docs/maintenance-artifacts.md`, `public/VERSION`, `public/CHANGELOG.md`, `public/.htaccess`, `public/assets/css/styles.css`, `public/assets/js/site.js`, generated `public/**/*.html` route files, and removal of obsolete `public/**/*.php` route and include files.
- User groups affected: Public visitors, staff maintaining the website, donors, and pet owners using the booking, support, payment, and policy routes.
- Public impact: Visitors now reach an HTML-first website with the same clean public URLs, updated navigation chrome, preserved integrations, and static error pages.
- Internal impact: The live site no longer depends on PHP includes for headers, footers, metadata, or payment-card output, reducing runtime complexity and making release artefacts easier to inspect.

### Version decision

- Previous version: `v1.0.0b`
- New version: `v2.0.0b`
- Version type: Beta major release
- Reason for version bump: This replaces the public runtime architecture, routing preference, and error-page contract while preserving the existing user journeys and route inventory.

### Validation

- Checks run: Generated the static route set from the current PHP templates, reviewed the produced HTML output, checked for remaining public template markers, and inspected the HTML-first routing rules and release-record alignment by source.
- Manual checks completed: Confirmed by source inspection that public routes now have `index.html` equivalents, the footer exposes the required governance links and version text, and Apache now prefers HTML with redirects for direct `.php` requests.
- Known limitations: `php` CLI is unavailable in this workspace, and no live browser or Apache preview was available here, so final visual QA, keyboard QA, external-link behaviour, and real `403`/`404`/`500` server handling still need a manual pass in a running environment.
- Rollback notes: Revert the generated HTML routes, `.htaccess`, CSS and JS changes, release-record updates, and the removal of runtime PHP files to restore the previous `v1.0.0b` PHP-driven site.

## [v1.0.0b] - 2026-06-09

<span class="pill pill-version">Version v1.0.0b</span>
<span class="pill pill-status">Beta</span>
<span class="pill pill-type">Changed</span>
<span class="pill pill-fix">Maintenance</span>
<span class="pill pill-compliance">Architecture</span>

### Summary

Simplified the shared PHP architecture for the APES Pet Care Clinic website, added canonical root release records, introduced branded error pages, and aligned the repository documentation with the real Cloudron LAMP deployment pattern.

### Detailed changes

- Split the shared website bootstrap into focused include layers for site configuration, reusable helpers, and metadata assembly while keeping all public routes and visible page content intact.
- Extracted the repeated standard-page hero banner into one shared include so the main route templates now carry less duplicated markup.
- Preserved the existing PHP page pattern and third-party integrations without introducing any frontend build tooling, framework, or dependency pipeline.
- Added branded `403`, `404`, and `500` PHP error pages and connected them in `.htaccess` so Cloudron LAMP deployments have safer fallback behaviour.
- Added missing universal footer governance links for the donation page, Privacy Policy, Terms and Conditions, and Change Log Hub.
- Added root-level `VERSION` and `CHANGELOG.md` records so the repository now carries canonical release metadata alongside the public mirror files.
- Rewrote the root `README.md` to document the actual PHP and Apache maintenance workflow, `public/` document root, shared include structure, and retained legacy maintenance artifacts.
- Added a dedicated maintenance-artifact note so older crawl and helper files are clearly documented as non-runtime unless a later task proves otherwise.

### Type pills

- <span class="pill pill-type">Changed</span> Refactored the shared include architecture and repository release record structure without changing public routes or page content.
- <span class="pill pill-compliance">Architecture</span> Aligned the repository and deployment guidance with the simplified Cloudron LAMP maintenance model used for the live site.

### Fix pills

- <span class="pill pill-fix">Maintenance</span> Release records, footer governance links, and error-page coverage are now easier to maintain and audit.

### Affected areas

- Website: APES Pet Care Clinic public website.
- Page or route: Shared templates, footer links, branded error pages, release records, and repository documentation.
- Files changed: `VERSION`, `CHANGELOG.md`, `README.md`, `docs/maintenance-artifacts.md`, `public/VERSION`, `public/CHANGELOG.md`, `public/.htaccess`, `public/403.php`, `public/404.php`, `public/500.php`, `public/changelog/index.php`, `public/index.php`, standard route templates, `public/includes/hero.php`, `public/includes/page-init.php`, `public/includes/site-config.php`, `public/includes/site-helpers.php`, `public/includes/site-metadata.php`, and `public/includes/footer.php`.
- User groups affected: Public visitors, staff maintaining the website, and anyone relying on footer governance links or release records.
- Public impact: The visible site contract remains the same while footer compliance and error-page coverage improve.
- Internal impact: The site is easier to maintain in a simple Cloudron LAMP workflow with clearer shared include boundaries, less duplicated page-banner markup, and synchronized release records.

### Version decision

- Previous version: `v0.5.1b`
- New version: `v1.0.0b`
- Version type: Beta major release
- Reason for version bump: This is a major internal architecture simplification and repository-governance reset that preserves public journeys while materially changing how the site is maintained and released.

### Validation

- Checks run: Reviewed shared include dependencies, route templates, release records, footer links, robots and sitemap references, and Apache error-document wiring by source inspection.
- Manual checks completed: Confirmed the site still uses folder-based public URLs, the footer now exposes donation, privacy, terms, and Change Log Hub links, and release metadata now exists in both root and public records.
- Known limitations: `php` CLI is not available in this workspace, so automated `php -l`, browser QA, popup behaviour QA, and Cloudron runtime verification still need to be completed in a PHP-capable environment.
- Rollback notes: Revert the shared include split, footer link additions, new error pages, version files, changelog entries, and README rewrite to restore the previous `v0.5.1b` maintenance structure.

## [v0.5.1b] - 2026-06-02

<span class="pill pill-version">Version v0.5.1b</span>
<span class="pill pill-status">Beta</span>
<span class="pill pill-type">Changed</span>
<span class="pill pill-type">Fixed</span>
<span class="pill pill-fix">Integration Fix</span>
<span class="pill pill-fix">Layout Fix</span>

### Summary

Removed the broken embedded booking form from the public bookings page, switched booking and pre-pay links to shared popup-window behaviour with a safe fallback, and fixed card and CTA spacing issues affecting the homepage and Services Hub.

### Detailed changes

- Replaced the broken `/bookings/` iframe section with booking guidance, a primary popup booking CTA, and fallback messaging explaining that popup blockers will fall back to a normal new tab.
- Generalised the shared external-link popup script so booking, contact, and Stripe pre-pay links now use one reusable popup-window pattern rather than separate hard-coded behaviours.
- Updated the shared clinic sidebar booking CTA and all shared `Pre-pay and book` buttons so they open external workflows in a popup window by default.
- Tightened the Services Hub pre-pay grid and card styling so long pill text, copy, and headings stay inside their cards at common desktop widths.
- Added explicit spacing below the homepage `Before you pay` warning box so the `Open the Services Hub` CTA no longer overlaps the panel.
- Updated the canonical `VERSION` file plus both changelog records so the release is synchronised under the new `v0.5.1b` beta patch entry.
- Confirmed this release does not change APES Newsroom routing, footer-news behaviour, newsletter prompts, or article metadata.

### Type pills

- <span class="pill pill-type">Changed</span> Reworked the public bookings page into a non-embedded booking guidance page and moved shared external workflow links onto one popup-window pattern.
- <span class="pill pill-type">Fixed</span> Corrected the broken booking embed, the overflowing Services Hub payment-card content, and the homepage `Before you pay` CTA overlap.

### Fix pills

- <span class="pill pill-fix">Integration Fix</span> Booking and Stripe pre-pay journeys now share consistent popup-window handling with safe new-tab fallback when popups are blocked.
- <span class="pill pill-fix">Layout Fix</span> Pre-pay cards now keep long text inside card bounds and the homepage CTA spacing no longer collides with the warning panel.

### Affected areas

- Website: APES Pet Care Clinic public website.
- Page or route: `/`, `/services/`, `/bookings/`, `/contact/`, and `/changelog/`.
- Files changed: `assets/css/styles.css`, `assets/js/site.js`, `bookings/index.php`, `contact/index.php`, `includes/clinic-sidebar.php`, `includes/prepay-services.php`, `index.php`, `services/index.php`, `VERSION`, `CHANGELOG.md`, and `changelog/index.php`.
- User groups affected: Public visitors using the booking journey, owners using Stripe pre-pay links, and staff handling enquiries triggered from those routes.
- Public impact: Visitors now see a working booking route, consistent popup behaviour for external booking and payment journeys, and cleaner card layouts on the Services Hub and homepage.
- Internal impact: Shared popup handling and pre-pay card styling are now easier to maintain across routes without page-specific fixes.

### Version decision

- Previous version: `v0.5.0b`
- New version: `v0.5.1b`
- Version type: Beta patch release
- Reason for version bump: This is a low-risk public-facing fix to an existing booking journey, CTA behaviour, and layout presentation without adding a new route or expanding website scope.

### Validation

- Checks run: Reviewed the updated booking template, shared popup script, shared pre-pay renderer, and shared stylesheet changes by code inspection. A local `php` CLI was not available in this workspace, so automated `php -l` syntax checks could not be run.
- Manual checks completed: Confirmed by source inspection that the public bookings page no longer contains the broken iframe and that booking plus pre-pay links now share popup-window attributes and fallback-safe targets.
- Known limitations: Browser-based visual QA and live popup behaviour still need a manual pass in a running site environment because this workspace does not guarantee a local PHP server or deployed preview.
- Rollback notes: Revert the bookings template rewrite, shared popup-link updates, shared pre-pay button rendering, stylesheet changes, `VERSION`, and both changelog entries to restore the previous `v0.5.0b` booking and layout state.

## [v0.5.0b] - 2026-06-02

<span class="pill pill-version">Version v0.5.0b</span>
<span class="pill pill-status">Beta</span>
<span class="pill pill-type">Added</span>
<span class="pill pill-type">Changed</span>
<span class="pill pill-type">Fixed</span>
<span class="pill pill-fix">Integration Fix</span>
<span class="pill pill-fix">Content Fix</span>

### Summary

Added the supplied Stripe Care Plan Pricing Table to the public Care Plans page and restructured the page into a clearer card-led journey so visitors can compare options, review suitability guidance, and contact the clinic before paying where needed.

### Detailed changes

- Reworked the `/care-plans/` page order so visitors now see a plan overview first, the live pricing table second, supporting plan information in a responsive card grid, and a final safety/contact card at the end of the main content.
- Embedded the supplied Stripe pricing table directly on `/care-plans/` and kept the script local to that page template rather than moving Stripe into the shared website header.
- Added pricing-table support copy explaining that the plan chooser is hosted securely by Stripe and that visitors should contact the clinic if the table does not load or if they are unsure whether a plan is suitable.
- Grouped the `Eligibility and exclusions`, `Flexible options`, and `Multiple pets` content into responsive cards while keeping the existing clinic sidebar layout intact.
- Updated the Care Plans route metadata and hero lead so the page communicates pricing comparison and next-step guidance more clearly.
- Updated the canonical `VERSION` file plus both changelog records so the release is synchronised under the new `v0.5.0b` beta minor entry.

### Type pills

- <span class="pill pill-type">Added</span> Introduced the live Care Plan Stripe pricing table and supporting fallback guidance on `/care-plans/`.
- <span class="pill pill-type">Changed</span> Reordered the page into a clearer pricing-first card journey and refined the Care Plans route copy and metadata.
- <span class="pill pill-type">Fixed</span> Reduced ambiguity in the plan-join journey by placing pricing, suitability guidance, and contact fallback in a clearer sequence.

### Fix pills

- <span class="pill pill-fix">Integration Fix</span> The supplied Stripe pricing table is now embedded directly on the Care Plans page without adding Stripe scripts to shared site templates.
- <span class="pill pill-fix">Content Fix</span> Visitors now see plan comparison, exclusions, and next-step guidance in one route instead of needing to infer pricing from generic page copy alone.

### Affected areas

- Website: APES Pet Care Clinic public website.
- Page or route: `/care-plans/` and `/changelog/`.
- Files changed: `care-plans/index.php`, `assets/css/styles.css`, `VERSION`, `CHANGELOG.md`, and `changelog/index.php`.
- User groups affected: Public visitors, low-income pet owners, staff handling care-plan enquiries, and anyone choosing a routine welfare support plan.
- Public impact: Visitors can now compare live care-plan options on the page, read plan suitability guidance in a clearer order, and use a direct contact fallback if they need help before paying.
- Internal impact: The Care Plans route now carries a scoped Stripe embed and cleaner content structure without changing shared header behaviour.

### Version decision

- Previous version: `v0.4.0b`
- New version: `v0.5.0b`
- Version type: Beta minor release
- Reason for version bump: This adds a public-facing payment and plan-comparison component while materially restructuring the Care Plans route into a clearer user journey without changing the wider website platform.

### Validation

- Checks run: Reviewed the updated Care Plans template, confirmed the supplied Stripe pricing table ID and publishable key are present only on the `/care-plans/` template, reviewed the new card-layout styles, and synchronised the version and changelog records by code inspection. No local `php` CLI binary was available in this environment for automated `php -l` checks.
- Manual checks completed: Confirmed by source inspection that the page order now follows overview, pricing table, supporting info cards, and final safety/contact guidance, and that both changelog records plus `VERSION` now reference `v0.5.0b`.
- Known limitations: Live browser verification, responsive visual QA, and live Stripe pricing-table rendering could not be tested in this environment, so the final embedded-table display still needs a manual browser pass on staging or production.
- Rollback notes: Revert the Care Plans template restructure, scoped Care Plans stylesheet additions, `VERSION`, and both changelog entries to restore the previous `v0.4.0b` Care Plans release state.

## [v0.4.0b] - 2026-06-02

<span class="pill pill-version">Version v0.4.0b</span>
<span class="pill pill-status">Beta</span>
<span class="pill pill-type">Added</span>
<span class="pill pill-type">Changed</span>
<span class="pill pill-type">Fixed</span>
<span class="pill pill-compliance">Compliance</span>
<span class="pill pill-fix">Accessibility Fix</span>
<span class="pill pill-fix">SEO Fix</span>

### Summary

Completed a beta audit-hardening release that reframes clinically sensitive public wording, moves pre-payment into a safer Services Hub journey, replaces encoded-space routes with clean canonical routes, and adds the metadata, sitemap, robots, and payment-audit records needed for a more maintainable public website.

### Detailed changes

- Refactored the shared pre-pay service registry so every payment route now carries safer welfare-first naming, suitability wording, Stripe and external-link notes, scope warnings, risk flags, and updated accessible labels.
- Added a reusable `Before you pay` warning block and stronger clinical-scope notices across the homepage, Services Hub, general services, species pages, booking route, and policy pages.
- Created the new `/services/` hub, removed the duplicated payment section from `/general-services/`, and moved the homepage away from the full payment catalogue toward a safer route-selection journey.
- Created clean canonical routes for `/care-plans/` and `/lab-services/`, added redirects from the old encoded-space URLs, and updated internal navigation, crawl inputs, source route lists, and sitemap artifacts to use the canonical paths.
- Reworked rabbit, guinea pig, reptile, invertebrate, ferret, dog, and cat wording to avoid implying diagnosis, treatment, surgery, or guaranteed intervention, while preserving clear referral guidance when veterinary care is needed.
- Fixed the `pet€™s` mojibake issue by replacing the old encoded care-plans route template with the new canonical page and sweeping remaining route/source files for the known encoding artefacts.
- Extended the shared page head with canonical URLs, Open Graph metadata, Twitter card metadata, and structured data for `Organization`, `WebSite`, `BreadcrumbList`, and safe `Service` pages.
- Added `robots.txt`, `sitemap.xml`, an updated public `sitemap.html`, and a root-level `PAYMENT_LINK_AUDIT.md` file so SEO and payment-link governance are tracked alongside the beta release.
- Updated the canonical `VERSION` file plus both changelog records so the release is synchronised under the new `v0.4.0b` beta minor entry.

### Type pills

- <span class="pill pill-type">Added</span> Introduced the new `/services/` hub, canonical `/care-plans/` and `/lab-services/` routes, `robots.txt`, `sitemap.xml`, and the `PAYMENT_LINK_AUDIT.md` governance record.
- <span class="pill pill-type">Changed</span> Reworked shared payment wording, public clinic-scope copy, navigation behaviour, metadata, sitemap records, and route references across the site.
- <span class="pill pill-type">Fixed</span> Removed the duplicated general-services payment block, fixed encoded-route references, corrected the care-plans mojibake, and standardised UK spelling and sentence case in the audited templates.
- <span class="pill pill-compliance">Compliance</span> Hardened clinically sensitive public wording and pre-payment messaging so APES is framed as first aid, welfare support, and referral triage only.

### Fix pills

- <span class="pill pill-fix">Accessibility Fix</span> Payment links now keep unique accessible labels, decorative hero logos use empty alt text, menu triggers have clearer focus treatment, and the Change Log Hub accessibility baseline remains intact.
- <span class="pill pill-fix">SEO Fix</span> Canonical metadata, Open Graph/Twitter metadata, robots, sitemap, and clean canonical routes are now aligned around the live public pages.

### Affected areas

- Website: APES Pet Care Clinic public website.
- Page or route: `/`, `/services/`, `/general-services/`, `/dog-care/`, `/cat-care/`, `/reptile-care/`, `/invert-care/`, `/rabbit-care/`, `/guinea-care/`, `/ferret-care/`, `/care-plans/`, `/lab-services/`, `/bookings/`, `/contact/`, `/about-us/`, `/events/`, `/policies/booking-policy/`, `/policies/refund-policy/`, `/policies/privacy-policy/`, `/policies/terms-and-conditions/`, `/changelog/`, `/robots.txt`, `/sitemap.xml`, and `/sitemap.html`.
- Files changed: `.htaccess`, `assets/css/styles.css`, `assets/js/site.js`, `includes/page-init.php`, `includes/header.php`, `includes/prepay-services.php`, `includes/clinic-sidebar.php`, `index.php`, `services/index.php`, `general-services/index.php`, `dog-care/index.php`, `cat-care/index.php`, `reptile-care/index.php`, `invert-care/index.php`, `rabbit-care/index.php`, `guinea-care/index.php`, `ferret-care/index.php`, `care-plans/index.php`, `lab-services/index.php`, `bookings/index.php`, `contact/index.php`, `about-us/index.php`, `events/index.php`, policy templates, old-route wrappers, `build_site.py`, `crawl_urls.txt`, `PAYMENT_LINK_AUDIT.md`, `robots.txt`, `sitemap.xml`, `sitemap.html`, `VERSION`, `CHANGELOG.md`, and `changelog/index.php`.
- User groups affected: Public visitors, low-income pet owners, donors, volunteers, staff handling enquiries, and anyone using the payment or booking journeys.
- Public impact: Visitors now see safer service wording, a clearer Services Hub entry point, stronger pre-payment warnings, cleaner care-plan and lab-service URLs, and improved metadata and sitemap records.
- Internal impact: Payment governance, route inventories, and shared content rules are now more maintainable and better aligned with APES audit requirements.

### Version decision

- Previous version: v0.3.2
- New version: v0.4.0b
- Version type: Beta minor release
- Reason for version bump: This release adds a new Services Hub and canonical routes while materially reworking public payment journeys, compliance wording, metadata, and accessibility/SEO support across existing pages without changing the site platform.

### Validation

- Checks run: Searched the repo for encoded-space route references, mojibake artefacts, and outdated clinically sensitive labels; updated canonical route inventories and metadata sources; and reviewed the shared payment registry, redirects, sitemap files, and changelog synchronization by code inspection. No local `php` CLI binary was available in this environment for automated `php -l` checks.
- Manual checks completed: Confirmed the homepage now routes visitors into the Services Hub, the shared payment catalogue renders through the new warning helpers, the old care-plans and lab-services routes now wrap to canonical equivalents, and the new `v0.4.0b` version appears in the repo version source of truth and changelog records.
- Known limitations: Live browser verification, live Stripe destination verification, Lighthouse, axe, and external link status checks were not available in this environment, so responsive behaviour, keyboard interaction, and external payment destination validation still need a manual browser pass on staging or production.
- Rollback notes: Revert the shared payment and metadata helpers, route redirects, new canonical route pages, policy/template rewrites, sitemap/robots/payment-audit files, VERSION file, and both changelog entries to restore the previous `v0.3.2` public release state.

## [v0.3.2] - 2026-06-02

<span class="pill pill-version">Version v0.3.2</span>
<span class="pill pill-status">Stable</span>
<span class="pill pill-type">Changed</span>
<span class="pill pill-type">Fixed</span>
<span class="pill pill-fix">Navigation Fix</span>
<span class="pill pill-fix">Content Fix</span>

### Summary

Replaced the Donorbox-branded donate anchor on the public donate page with an APES-owned heart button that opens the donation form in a popup window while keeping the website page in place.

### Detailed changes

- Removed the Donorbox-branded donate anchor styling, external Donorbox logo image, and old query-string destination from the donate funds card on `/donate/`.
- Added a new APES-styled green donate button with an inline white heart icon and `Donate Now` label so the funds card now uses the website's own visual language.
- Kept the popup-window behaviour for the external donation journey and updated the button to point at the base URL `https://donorbox.org/apes-pet-care-clinic-donations`.
- Updated the donation helper note so visitors are told that the secure donation page opens in a separate popup window.
- Updated the canonical VERSION file plus both changelog records so the release is synchronised under the new v0.3.2 stable patch entry.

### Type pills

- <span class="pill pill-type">Changed</span> Reworked the donate-page funds CTA to use APES-native button styling and the base donation URL.
- <span class="pill pill-type">Fixed</span> Removed third-party branded button code so the public donation route now matches the site design and still preserves the popup behaviour.

### Fix pills

- <span class="pill pill-fix">Navigation Fix</span> The donation journey still opens in a popup window without navigating visitors away from the donate page.
- <span class="pill pill-fix">Content Fix</span> The funds CTA now uses APES-owned button copy and visuals instead of embedded Donorbox branding.

### Affected areas

- Website: APES Pet Care Clinic public website.
- Page or route: `/donate/` and `/changelog/`.
- Files changed: `donate/index.php`, `assets/css/styles.css`, `VERSION`, `CHANGELOG.md`, and `changelog/index.php`.
- User groups affected: Public visitors, donors, volunteers, and staff sharing the donation route.
- Public impact: Visitors now see an APES-branded heart donate button that opens the secure donation page in a separate popup window.
- Internal impact: The public donation CTA now matches the site design system while preserving the existing external donation workflow.

### Version decision

- Previous version: v0.3.1
- New version: v0.3.2
- Version type: Stable patch release
- Reason for version bump: This is a low-risk public-facing CTA refresh and interaction-preserving update on an existing donate route without adding a new workflow or page.

### Validation

- Checks run: Reviewed the updated donate template, confirmed the base Donorbox URL, checked that the old `dbox-donation-page-button` class no longer appears in live source files, and synchronised `v0.3.2` release records by code inspection. No local `php` CLI binary was available in this environment for automated `php -l` checks.
- Manual checks completed: Confirmed the new donate CTA uses an inline heart SVG, APES green styling, the requested `Donate Now` label, and the existing popup-window settings in the template source.
- Known limitations: Live browser verification was not available in this environment, so the final popup behaviour, button spacing, and popup-blocker behaviour still need a manual browser pass on staging or production.
- Rollback notes: Revert the donate template CTA swap, donate-button stylesheet updates, VERSION file, and both changelog entries to restore the previous v0.3.1 Donorbox-branded button state.

## [v0.3.1] - 2026-06-02

<span class="pill pill-version">Version v0.3.1</span>
<span class="pill pill-status">Stable</span>
<span class="pill pill-type">Changed</span>
<span class="pill pill-type">Fixed</span>
<span class="pill pill-fix">Navigation Fix</span>

### Summary

Updated the donate-page Donorbox button so it now opens the donation form in a dedicated popup window instead of replacing the current website page.

### Detailed changes

- Updated the Donorbox donate button on `/donate/` to call `window.open(...)` and launch the donation flow in a popup window.
- Kept the existing destination URL, amount, designation, and button styling unchanged while adjusting only the click behaviour.
- Updated the canonical VERSION file plus both changelog records so the release is synchronised under the new v0.3.1 stable patch entry.

### Type pills

- <span class="pill pill-type">Changed</span> Adjusted the donate button interaction on the existing donate page.
- <span class="pill pill-type">Fixed</span> Prevented the donation journey from navigating visitors away from the APES donate page when opening the external Donorbox form.

### Fix pills

- <span class="pill pill-fix">Navigation Fix</span> The external donation form now opens in its own popup window rather than taking over the current page.

### Affected areas

- Website: APES Pet Care Clinic public website.
- Page or route: `/donate/` and `/changelog/`.
- Files changed: `donate/index.php`, `VERSION`, `CHANGELOG.md`, and `changelog/index.php`.
- User groups affected: Public visitors and donors using the website donation route.
- Public impact: Visitors can keep the donate page open while the Donorbox donation form opens separately in a popup window.
- Internal impact: Donation handling remains unchanged, but the requested external-donation behaviour is now reflected in the audited release record.

### Version decision

- Previous version: v0.3.0
- New version: v0.3.1
- Version type: Stable patch release
- Reason for version bump: This is a low-risk user-visible interaction fix on an existing donate-page call to action and does not add a new page, route, or workflow.

### Validation

- Checks run: Reviewed the updated donate button markup and synchronised `v0.3.1` release records by code inspection. No local `php` CLI binary was available in this environment for automated `php -l` checks.
- Manual checks completed: Confirmed the donate button now uses inline popup-window behaviour while retaining the existing Donorbox link destination and button content in the template source.
- Known limitations: Live browser verification was not available in this environment, so the final popup behaviour still needs a manual browser pass to confirm popup blockers and window sizing behave as expected on the live site.
- Rollback notes: Revert the donate button click handler, VERSION file, and both changelog entries to restore the previous v0.3.0 donate-button behaviour.

## [v0.3.0] - 2026-06-02

<span class="pill pill-version">Version v0.3.0</span>
<span class="pill pill-status">Stable</span>
<span class="pill pill-type">Added</span>
<span class="pill pill-type">Changed</span>

### Summary

Expanded the public donate page so supporters can now see how to donate practical supplies such as blankets, paper towels, and tea towels, while also getting a clearer funds donation route through a new Donorbox card.

### Detailed changes

- Rebuilt the `/donate/` page content into a clearer support journey with separate sections for donating useful supplies and donating funds.
- Added public guidance explaining that supporters can donate clean blankets, paper towels, tea towels, and other practical items that help with hygiene, comfort, feeding, and day-to-day welfare support.
- Added a new funds donation card using the supplied Donorbox button so visitors can donate directly to support the area of greatest need.
- Added lightweight illustrated donation panels and supporting visual styling to make the donate page feel more engaging without relying on extra external image assets.
- Added clearer drop-off and contact guidance so supporters know to check what is most useful before bringing larger or specialist items to the clinic.
- Updated the canonical VERSION file plus both changelog records so the release is synchronised under the new v0.3.0 stable minor entry.

### Type pills

- <span class="pill pill-type">Added</span> Introduced a new public supply-donation section, a new funds support card, and new illustrated content blocks on the donate page.
- <span class="pill pill-type">Changed</span> Reworked the donate page layout and copy so the donation journey is clearer for supporters and easier to act on.

### Fix pills

- None. This release adds and expands public donation content rather than correcting an existing defect.

### Affected areas

- Website: APES Pet Care Clinic public website.
- Page or route: `/donate/` and `/changelog/`.
- Files changed: `donate/index.php`, `assets/css/styles.css`, `VERSION`, `CHANGELOG.md`, and `changelog/index.php`.
- User groups affected: Public visitors, donors, volunteers, low-income pet owners, and staff coordinating incoming donations.
- Public impact: Visitors can now understand how to donate useful supplies as well as how to donate funds to help support clinic work.
- Internal impact: Donation guidance is now clearer and easier for staff to reference when supporters ask what items are helpful.

### Version decision

- Previous version: v0.2.0
- New version: v0.3.0
- Version type: Stable minor release
- Reason for version bump: This release adds new public-facing donation content, a new direct funds support route, and a materially expanded donate-page journey without changing the website structure.

### Validation

- Checks run: Reviewed the updated donate template, new CSS selectors, supplied Donorbox link markup, and synchronised `v0.3.0` release records by code inspection. No local PHP CLI binary was available in this environment for automated `php -l` checks.
- Manual checks completed: Confirmed the donate page now includes supply-donation guidance, the supplied Donorbox button, contact and drop-off instructions, and new illustrated content blocks in the source templates.
- Known limitations: Live browser verification was not available in this environment, so the final rendered spacing, SVG illustration appearance, and external Donorbox button behaviour should still receive a manual browser pass on staging or production.
- Rollback notes: Revert the donate page template, donate-page stylesheet changes, VERSION file, and both changelog entries to restore the previous v0.2.0 donate-page presentation.

## [v0.2.0] - 2026-06-02

<span class="pill pill-version">Version v0.2.0</span>
<span class="pill pill-status">Stable</span>
<span class="pill pill-type">Added</span>
<span class="pill pill-type">Changed</span>

### Summary

Added the Hello Bar script globally in the shared header and reviewed the website's shared notification integrations so the current OneSignal setup remains aligned with the requested global implementation.

### Detailed changes

- Added the supplied Hello Bar integration script to the shared header so it loads asynchronously across the public website before the closing `</head>` tag.
- Reviewed the existing OneSignal Web SDK initialisation in the shared header and confirmed it still uses the requested app ID `1526fa8e-132a-46ff-90b2-94386a285bde`.
- Reviewed the shared footer and confirmed the existing `<div class='onesignal-customlink-container'></div>` remains present once globally for the OneSignal custom link container.
- Searched the repository to confirm there is only one Hello Bar loader, one OneSignal SDK and init block, and one OneSignal custom link container in the live shared templates.
- Updated the canonical VERSION file plus both changelog records so the release is synchronised under the new v0.2.0 stable minor entry.

### Type pills

- <span class="pill pill-type">Added</span> Introduced a new shared Hello Bar integration across public website routes.
- <span class="pill pill-type">Changed</span> Reviewed and documented the shared notification integration baseline so Hello Bar and OneSignal are tracked together in the current release record.

### Fix pills

- None. OneSignal already satisfied the requested global header and footer implementation, so no corrective code change was required during this release.

### Affected areas

- Website: APES Pet Care Clinic public website.
- Page or route: Shared global header and footer integrations across all public routes, plus `/changelog/`.
- Files changed: `includes/header.php`, `VERSION`, `CHANGELOG.md`, and `changelog/index.php`.
- User groups affected: Public visitors, service users, donors, volunteers, and staff monitoring notification-driven engagement on the website.
- Public impact: Visitors can now receive the Hello Bar experience globally while the existing OneSignal custom link implementation remains in place.
- Internal impact: Shared notification integrations are now release-tracked together under one audited version entry.

### Version decision

- Previous version: v0.1.1
- New version: v0.2.0
- Version type: Stable minor release
- Reason for version bump: This release adds a new public-facing global integration across the website without restructuring existing routes or replacing the current OneSignal setup.

### Validation

- Checks run: Searched the codebase for Hello Bar and OneSignal references to confirm one global Hello Bar script include, one OneSignal SDK and init block, one OneSignal custom link container, and synchronised `v0.2.0` release records. No local PHP CLI binary was available in this environment for automated `php -l` checks.
- Manual checks completed: Reviewed the shared header and footer templates by code inspection to confirm the Hello Bar script remains asynchronous, the OneSignal app ID matches the issue requirement, and the OneSignal custom link container remains globally present.
- Known limitations: Live browser verification was not available in this environment, so Hello Bar rendering, OneSignal prompt behaviour, and any console output still need a manual pass on staging or production.
- Rollback notes: Remove the Hello Bar script from the shared header and revert the VERSION file plus both changelog entries to restore the previous v0.1.1 release state.

## [v0.1.1] - 2026-06-02

<span class="pill pill-version">Version v0.1.1</span>
<span class="pill pill-status">Stable</span>
<span class="pill pill-type">Changed</span>
<span class="pill pill-type">Fixed</span>
<span class="pill pill-fix">Integration Fix</span>
<span class="pill pill-fix">Content Fix</span>

### Summary

Updated the global Chatwoot live chat integration to use the supplied website token and launcher configuration so the website shows the new right-hand expanded support bubble consistently.

### Detailed changes

- Replaced the existing global Chatwoot launcher settings in the shared header so the launcher now uses the requested right-hand placement, expanded bubble type, and `Speak with an advisor` title across the website.
- Updated the Chatwoot website token in the shared SDK bootstrap while keeping the existing APES workspace base URL and asynchronous SDK loading pattern.
- Confirmed the website still injects only one shared Chatwoot bootstrap script from the common header, avoiding duplicate launcher creation from legacy configuration.
- Updated the canonical VERSION file plus both changelog records so the release is synchronised under the new v0.1.1 stable patch entry.

### Type pills

- <span class="pill pill-type">Changed</span> Updated the shared live chat configuration used across public website pages.
- <span class="pill pill-type">Fixed</span> Corrected the launcher behaviour and account connection details so the website points at the supplied Chatwoot workspace and presents the requested copy.

### Fix pills

- <span class="pill pill-fix">Integration Fix</span> The shared Chatwoot SDK bootstrap now uses the supplied website token and launcher settings without duplicating the script.
- <span class="pill pill-fix">Content Fix</span> The live chat launcher title now reads `Speak with an advisor` instead of the previous incorrect wording.

### Affected areas

- Website: APES Pet Care Clinic public website.
- Page or route: Shared global header integration across all public routes, plus `/changelog/`.
- Files changed: `includes/header.php`, `VERSION`, `CHANGELOG.md`, and `changelog/index.php`.
- User groups affected: Public visitors, service users, donors, volunteers, and staff responding to incoming live chat enquiries.
- Public impact: Visitors should now see the requested Chatwoot launcher title and expanded bubble on the right-hand side of the website.
- Internal impact: Live chat messages should route through the supplied Chatwoot website token without relying on the retired launcher configuration.

### Version decision

- Previous version: v0.1.0
- New version: v0.1.1
- Version type: Stable patch release
- Reason for version bump: This is a low-risk public-facing integration correction to an existing global script and does not add a new website section or workflow.

### Validation

- Checks run: Searched the codebase for Chatwoot references to confirm the shared header is the single launcher source and reviewed the updated token, base URL, async SDK load, and launcher settings by code inspection. No local PHP CLI binary was available in this environment for automated `php -l` checks.
- Manual checks completed: Confirmed the shared runtime script now matches the supplied `position`, `type`, `launcherTitle`, `baseUrl`, and `websiteToken` values and that the live PHP source no longer references the retired Chatwoot token.
- Known limitations: Live browser verification on the rendered site was not available in this environment, so the final launcher appearance and console state still need a manual browser check on live or staging. Historical `crawl/` snapshot artifacts still contain the previous token string and were left untouched because they are generated records rather than the live source template.
- Rollback notes: Revert the shared header Chatwoot snippet, VERSION file, and both changelog entries to restore the previous v0.1.0 live chat configuration.

## [v0.1.0] - 2026-06-02

<span class="pill pill-version">Version v0.1.0</span>
<span class="pill pill-status">Stable</span>
<span class="pill pill-type">Added</span>
<span class="pill pill-type">Changed</span>
<span class="pill pill-type">Fixed</span>
<span class="pill pill-fix">Content Fix</span>
<span class="pill pill-fix">Integration Fix</span>

### Summary

Added a shared Stripe pre-pay service catalogue and surfaced the new pre-pay and book flow across the clinic services landing page plus the relevant species and general service detail pages.

### Detailed changes

- Added a shared structured pre-pay service catalogue for all 16 hosted Stripe payment-link services so pricing, descriptions, categories, routes, and accessible CTA labels are maintained in one reusable source.
- Added a new `Pre-pay and book your Pet Care Clinic appointment` section to the main clinic services landing page so visitors can browse every eligible pre-pay service in grouped categories before leaving for Stripe.
- Updated the general services, reptile care, invert care, dog care, cat care, rabbit care, guinea pig care, and ferret care pages with contextual pre-pay CTAs that match the services already described on those routes.
- Updated relevant service copy on detail pages where needed so the displayed pre-pay options align with the exact hosted Stripe service names and prices, including combined admittance packages and the rabbit and guinea pig spot-on treatment.
- Added reusable styling for the new service cards, compact CTA rows, focus states, and green-theme payment blocks while keeping payment handling fully external to Stripe hosted links.
- Updated the canonical VERSION file plus both changelog records so the release is synchronised under the new v0.1.0 stable minor entry.

### Type pills

- <span class="pill pill-type">Added</span> Introduced a shared pre-pay service catalogue and a new full landing-page payment section for clinic services.
- <span class="pill pill-type">Changed</span> Updated multiple clinic service detail pages to surface contextual Stripe pre-pay CTAs and aligned pricing copy.
- <span class="pill pill-type">Fixed</span> Corrected the public booking journey so customers can pay for supported services before following the booking instructions shown after payment.

### Fix pills

- <span class="pill pill-fix">Content Fix</span> Service pages now show exact pre-pay service names, prices, and booking guidance for supported Stripe-linked offers.
- <span class="pill pill-fix">Integration Fix</span> Hosted Stripe payment links are now surfaced directly from the relevant clinic service routes without introducing custom payment logic.

### Affected areas

- Website: APES Pet Care Clinic public website.
- Page or route: `/`, `/general-services/`, `/dog-care/`, `/cat-care/`, `/reptile-care/`, `/invert-care/`, `/rabbit-care/`, `/guinea-care/`, `/ferret-care/`, and `/changelog/`.
- Files changed: `includes/prepay-services.php`, `includes/page-init.php`, `assets/css/styles.css`, `index.php`, `general-services/index.php`, `dog-care/index.php`, `cat-care/index.php`, `reptile-care/index.php`, `invert-care/index.php`, `rabbit-care/index.php`, `guinea-care/index.php`, `ferret-care/index.php`, `VERSION`, `CHANGELOG.md`, and `changelog/index.php`.
- User groups affected: Public visitors, service users, low-income pet owners, volunteers helping with bookings, and staff supporting appointment triage.
- Public impact: Visitors can now review supported clinic services, pre-pay securely through Stripe, and then complete booking using the instructions provided after payment.
- Internal impact: Stripe-linked clinic services now use one reusable data source, making future route, price, and accessibility updates easier to maintain.

### Version decision

- Previous version: v0.0.3
- New version: v0.1.0
- Version type: Stable minor release
- Reason for version bump: This adds a new public-facing payment-first booking workflow and reusable structured service content across multiple clinic routes without changing the hosted Stripe-only payment model.

### Validation

- Checks run: Reviewed the shared service catalogue, route mappings, Stripe link targets, external-link attributes, and synchronised release records by code inspection. No local PHP CLI binary was available in this environment for automated `php -l` checks.
- Manual checks completed: Verified that all 16 services appear in the landing-page pre-pay section, relevant detail pages now show contextual CTAs, accessible labels follow the required `Pre-pay and book: [service name]` format, and the payment-first booking note is present.
- Known limitations: Live browser and responsive rendering checks were not available in this environment, so a manual browser pass is still recommended for final spacing review on mobile and tablet layouts.
- Rollback notes: Revert the shared pre-pay catalogue include, updated page templates, stylesheet changes, VERSION file, and both changelog entries to restore the previous v0.0.3 booking presentation.

## [v0.0.3] - 2026-06-02

<span class="pill pill-version">Version v0.0.3</span>
<span class="pill pill-status">Stable</span>
<span class="pill pill-type">Changed</span>
<span class="pill pill-type">Fixed</span>
<span class="pill pill-fix">Navigation Fix</span>
<span class="pill pill-fix">Content Fix</span>

### Summary

Reordered the main website navigation to prioritise Services and Information, moved About Us into the Information mega menu, and added descriptive supporting copy to every mega-menu item.

### Detailed changes

- Reordered the shared top-level header navigation to Home, Services, Information, Bookings, Donate, and Contact so the primary public journey matches the requested sequence.
- Removed About Us as a standalone top-level link and added it to the Information mega menu without changing the /about-us/ route.
- Added short descriptive summaries to every item inside the Services and Information mega menus so visitors can understand destination purpose before clicking.
- Updated shared menu rendering so each mega-menu card now presents a title and description while preserving external-link handling for the News destination.
- Expanded Information menu active-state handling so the group stays highlighted on About Us, Events, policy pages, and the Change Log Hub.
- Updated the canonical VERSION file plus both changelog records so the release remains synchronised under the new v0.0.3 stable patch entry.

### Type pills

- <span class="pill pill-type">Changed</span> Reordered the shared header navigation and enriched mega-menu card content with supporting descriptions.
- <span class="pill pill-type">Fixed</span> Corrected the information architecture so About Us now sits inside the Information menu and menu intent is clearer to visitors.

### Fix pills

- <span class="pill pill-fix">Navigation Fix</span> The main navigation now follows the requested six-item order and keeps related informational routes grouped together.
- <span class="pill pill-fix">Content Fix</span> Mega-menu items now explain their destination purpose with concise descriptive copy.

### Affected areas

- Website: APES Pet Care Clinic public website.
- Page or route: Shared header navigation, /about-us/, /events/, /policies/*, /changelog/, /bookings/, /donate/, and /contact/.
- Files changed: includes/page-init.php, includes/header.php, assets/css/styles.css, changelog/index.php, VERSION, CHANGELOG.md.
- User groups affected: Public visitors, donors, service users, volunteers, and staff sharing key website routes.
- Public impact: Visitors see the requested navigation order and clearer mega-menu destination descriptions across desktop and mobile navigation.
- Internal impact: Shared menu data now carries reusable descriptions for future navigation maintenance and release auditing.

### Version decision

- Previous version: v0.0.2
- New version: v0.0.3
- Version type: Stable patch release
- Reason for version bump: This is a low-risk public navigation and content clarification update that improves an existing user journey without changing routes or introducing a new workflow.

### Validation

- Checks run: Reviewed shared menu data, header rendering, and synchronized release records by diff inspection. No local PHP CLI binary was available for automated linting in this environment.
- Manual checks completed: Verified the intended top-level menu order, About Us placement within Information, active-state grouping, external News link handling, and the presence of descriptions for every Services and Information mega-menu item.
- Known limitations: Visual behaviour was reviewed statically in code only, so a live browser pass may still be helpful for final spacing confirmation on small screens.
- Rollback notes: Revert the shared navigation arrays, header markup, mega-menu card styling, VERSION, and both changelog entries to restore the previous top-level About Us link and earlier menu presentation.

## [v0.0.2] - 2026-06-02

<span class="pill pill-version">Version v0.0.2</span>
<span class="pill pill-status">Stable</span>
<span class="pill pill-type">Changed</span>
<span class="pill pill-type">Fixed</span>
<span class="pill pill-compliance">Compliance</span>
<span class="pill pill-fix">Navigation Fix</span>
<span class="pill pill-fix">Content Fix</span>

### Summary

Standardised every public reference to the Change Log Hub and rebuilt the /changelog/ page so it follows the APES CIC searchable release-record pattern.

### Detailed changes

- Updated shared Information navigation and footer references so the website consistently labels the release record as Change Log Hub.
- Kept the existing /changelog/ route as the canonical public URL while rebuilding its page content into a dedicated Change Log Hub with current-version status pills.
- Added searchable, filterable timeline controls plus expand-all and collapse-all actions for release entries, while keeping all entries readable when JavaScript is unavailable.
- Converted release entries into accessible collapsible cards with clearer audit sections for summary, detailed changes, affected areas, version decisions, validation, and rollback notes.
- Revised existing release copy so the website Change Log Hub page, root CHANGELOG.md, and VERSION file all remain aligned under the same APES CIC naming and governance standard.

### Type pills

- <span class="pill pill-type">Changed</span> Updated shared navigation labels, footer links, page metadata, and release record presentation.
- <span class="pill pill-type">Fixed</span> Corrected inconsistent public naming so the website now uses Change Log Hub throughout visible release references.
- <span class="pill pill-compliance">Compliance</span> Brought the website release record into line with the APES CIC Change Log Hub structure, visibility, and audit-detail requirements.

### Fix pills

- <span class="pill pill-fix">Navigation Fix</span> The Information menu and footer now point to the release record using the required Change Log Hub label.
- <span class="pill pill-fix">Content Fix</span> Release record wording, metadata, and historical entries now use consistent Change Log Hub naming.

### Affected areas

- Website: APES Pet Care Clinic public website.
- Page or route: Shared header and footer, plus /changelog/.
- Files changed: includes/page-init.php, includes/header.php, includes/footer.php, assets/css/styles.css, assets/js/site.js, changelog/index.php, VERSION, CHANGELOG.md.
- User groups affected: Public visitors, donors, service users, volunteers, staff, directors, and future website maintainers.
- Public impact: Visitors can now find and understand the Change Log Hub more easily from shared navigation and footer routes.
- Internal impact: Website release records are now easier to audit, search, filter, and maintain against APES CIC governance requirements.

### Version decision

- Previous version: v0.0.1
- New version: v0.0.2
- Version type: Stable patch release
- Reason for version bump: This update improves existing release-record naming, visibility, and structure without changing the route set or adding a new user workflow.

### Validation

- Checks run: Ran a reference sweep for visible Change Log Hub labels plus a Git diff review of shared templates, styles, scripts, and release-record files. PHP lint could not be run because no local PHP CLI binary is available in this environment.
- Manual checks completed: Reviewed Information menu wording, footer Change Log Hub link, current-version display, filter controls, and details-card behaviour with and without JavaScript support.
- Known limitations: Search, filters, and expand or collapse controls rely on JavaScript, but all release content remains visible and individually expandable without it.
- Rollback notes: Revert the shared navigation labels, footer Change Log Hub link, Change Log Hub page structure, VERSION, and synchronized changelog entry to restore the previous release-record presentation.

## [v0.0.1] - 2026-06-02

<span class="pill pill-version">Version v0.0.1</span>
<span class="pill pill-status">Stable</span>
<span class="pill pill-type">Changed</span>
<span class="pill pill-type">Fixed</span>
<span class="pill pill-compliance">Compliance</span>
<span class="pill pill-fix">Navigation Fix</span>
<span class="pill pill-fix">Content Fix</span>

### Summary

Reorganised the public website navigation by moving informational links into a new Information mega menu, while also bringing the Change Log Hub and version records into alignment with APES CIC website governance requirements.

### Detailed changes

- Replaced separate top-level Events, News, Change Log Hub, and Policies navigation items with a shared Information mega menu in the global header. This was a public-facing navigation change affecting the main user journey across the website.
- Added Events, external News, all policy routes, and the Change Log Hub to the new Information mega menu so informational and governance content is grouped consistently.
- Kept Bookings, Donate, About Us, and Contact as top-level items so service and action-led journeys remain easy to reach.
- Updated shared navigation state handling so Events, policy pages, and the Change Log Hub correctly highlight the Information menu when visited. This improved navigation clarity and accessibility orientation.
- Created a root-level VERSION file and updated both the root-level CHANGELOG.md and website Change Log Hub page so all release records used the same version number, release date, and audit details.
- Normalised the historic release notes to preserve useful website rebuild history while removing unsupported legacy version suffix usage.

### Type pills

- <span class="pill pill-type">Changed</span> Reworked the shared header navigation and grouped informational pages under the Information menu.
- <span class="pill pill-type">Fixed</span> Aligned website and repository release records under one versioning and audit structure.
- <span class="pill pill-compliance">Compliance</span> Established the initial APES CIC governance-aligned Change Log Hub and repository release audit pairing.

### Fix pills

- <span class="pill pill-fix">Navigation Fix</span> Information links were grouped under one menu for clearer discovery.
- <span class="pill pill-fix">Content Fix</span> Change Log Hub records began following the required APES CIC versioning and audit format.

### Affected areas

- Website: APES Pet Care Clinic public website.
- Page or route: Global header navigation, /events/, /policies/*, /changelog/, and external News link access.
- Files changed: includes/page-init.php, includes/header.php, assets/css/styles.css, changelog/index.php, VERSION, CHANGELOG.md.
- User groups affected: Public visitors, donors, service users, volunteers, and staff sharing policy or update links.
- Public impact: Informational pages were grouped into a single mega menu for easier browsing.
- Internal impact: Release records were synchronised for future website maintenance and governance review.

### Version decision

- Previous version: v0.0.0b
- New version: v0.0.1
- Version type: Stable patch release
- Reason for version bump: The change updated an existing navigation pattern and release record structure without changing routes or introducing a new workflow.

### Validation

- Checks run: PHP lint on updated PHP files.
- Manual checks completed: Reviewed the Information mega menu structure for desktop and mobile behaviour, active menu highlighting, and footer version source alignment.
- Known limitations: External News behaviour still depends on the availability of the separate APES News website.
- Rollback notes: Revert the shared header and menu arrays to restore separate top-level Events, News, Change Log Hub, and Policies links, and reset VERSION plus changelog records to the previous release entry.

## [v0.0.0b] - 2026-05-31

<span class="pill pill-version">Version v0.0.0b</span>
<span class="pill pill-status">Beta</span>
<span class="pill pill-type">Added</span>
<span class="pill pill-type">Changed</span>
<span class="pill pill-fix">Content Fix</span>
<span class="pill pill-fix">Integration Fix</span>

### Summary

Recorded the beta rebuild baseline for the restored APES Pet Care Clinic website and preserved the initial shared layout, route, and integration work as the historic starting point for subsequent stable releases.

### Detailed changes

- Rebuilt live routes to shared PHP layouts using reusable header and footer includes. This was a public-facing structural website change.
- Added the initial Services mega menu and reorganised the main navigation around shared templates.
- Updated the bookings experience with an embedded booking form and site-wide external booking calls to action.
- Added the first website Change Log Hub page and global footer version display during the beta rebuild stage.
- Integrated Chatwoot live chat, OneSignal push messaging, and legacy News redirect handling as operational website integrations.
- Normalised this historic entry from earlier legacy notes that used an unsupported suffix, preserving the baseline history in the approved beta version format.

### Type pills

- <span class="pill pill-type">Added</span> Introduced shared layouts, the first Change Log Hub route, and major route scaffolding.
- <span class="pill pill-type">Changed</span> Updated navigation, copy, service wording, and booking journey content during the rebuild baseline.

### Fix pills

- <span class="pill pill-fix">Content Fix</span> Corrected species wording and clarified clinic scope messaging.
- <span class="pill pill-fix">Integration Fix</span> Updated News links and added redirect handling for legacy News routes.

### Affected areas

- Website: APES Pet Care Clinic public website.
- Page or route: Shared layouts, core service pages, bookings, contact actions, news handling, and the Change Log Hub route.
- Files changed: Historic rebuild baseline across shared templates, service routes, booking route, and integration scripts.
- User groups affected: Public visitors, booking users, donors, and staff maintaining the restored website.
- Public impact: Restored and standardised the public-facing website structure after content reconstruction.
- Internal impact: Established the template and integration baseline used by later releases.

### Version decision

- Previous version: No canonical version file was recorded.
- New version: v0.0.0b
- Version type: Beta baseline release
- Reason for version bump: The restored website was not final and acted as the beta foundation for later public refinements.

### Validation

- Checks run: Historic validation was not fully recorded in the legacy notes.
- Manual checks completed: Legacy navigation, route, and service content review was performed during the rebuild stage.
- Known limitations: Historic detail has been preserved from available release notes and may not reflect every rebuild-era file touched.
- Rollback notes: Restore the pre-rebuild exported site snapshot if the rebuilt shared-template version needs to be withdrawn.

