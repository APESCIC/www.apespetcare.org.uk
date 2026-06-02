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
