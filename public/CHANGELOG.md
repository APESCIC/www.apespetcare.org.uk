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
