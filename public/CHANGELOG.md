## [v0.0.1] - 2026-06-02

<span class="pill pill-version">Version v0.0.1</span>
<span class="pill pill-status">Stable</span>
<span class="pill pill-type">Changed</span>
<span class="pill pill-fix">Navigation Fix</span>

### Summary

Reorganised the public website navigation by moving informational links into a new Information mega menu, while also bringing the changelog and version records into alignment with APES CIC website governance requirements.

### Detailed changes

- Replaced separate top-level Events, News, Changelog, and Policies navigation items with a shared Information mega menu in the global header. This is a public-facing navigation change affecting the main user journey across the website.
- Added Events, external News, all policy routes, and the Change Log Hub to the new Information mega menu so informational and governance content is grouped consistently.
- Kept Bookings, Donate, About Us, and Contact as top-level items so service and action-led journeys remain easy to reach.
- Updated shared navigation state handling so Events, policy pages, and the Change Log Hub correctly highlight the Information menu when visited. This improves navigation clarity and accessibility orientation.
- Created a root-level VERSION file and updated the root-level CHANGELOG.md plus website Change Log Hub so all release records now use the same version number, release date, and audit details.
- Normalised the historic release notes to preserve useful website rebuild history while removing unsupported legacy version suffix usage.

### Type pills

- `<span class="pill pill-type">Added</span>` for new content, pages, sections, components, forms, workflows, or integrations.
- `<span class="pill pill-type">Changed</span>` for updates to existing content, layout, structure, behaviour, styling, SEO, or configuration.
- `<span class="pill pill-type">Fixed</span>` for bug fixes, broken links, display issues, incorrect copy, form issues, accessibility defects, metadata errors, or user journey defects.
- `<span class="pill pill-type">Removed</span>` for deleted pages, retired content, removed features, or withdrawn integrations.
- `<span class="pill pill-security">Security</span>` for security, permissions, privacy, abuse-prevention, or hardening changes.
- `<span class="pill pill-compliance">Compliance</span>` for legal, governance, safeguarding, HR, charity/CIC, animal welfare, financial, data protection, or policy-aligned changes.

### Fix pills

- `<span class="pill pill-fix">Navigation Fix</span>` Information links are now grouped under one menu for clearer discovery.
- `<span class="pill pill-fix">Content Fix</span>` Changelog records now follow the required APES CIC versioning and audit format.

### Affected areas

- Website: APES Pet Care Clinic public website.
- Page or route: Global header navigation, `/events/`, `/policies/*`, `/changelog/`, and external News link access.
- Files changed: `includes/page-init.php`, `includes/header.php`, `assets/css/styles.css`, `changelog/index.php`, `VERSION`, `CHANGELOG.md`.
- User groups affected: Public visitors, donors, service users, volunteers, and staff sharing policy or update links.
- Public impact: Informational pages are grouped into a single mega menu for easier browsing.
- Internal impact: Release records are now synchronised for future website maintenance and governance review.

### Version decision

- Previous version: `v0.0.0b`
- New version: `v0.0.1`
- Version type: Stable patch release
- Reason for version bump: The change updates an existing navigation pattern and release record structure without changing routes or introducing a new workflow.

### Validation

- Checks run: PHP lint on updated PHP files.
- Manual checks completed: Reviewed the Information mega menu structure for desktop and mobile behaviour, active menu highlighting, and footer version source alignment.
- Known limitations: External News behaviour still depends on the availability of the separate APES News website.
- Rollback notes: Revert the shared header and menu arrays to restore separate top-level Events, News, Changelog, and Policies links, and reset `VERSION` plus changelog records to the previous release entry.

## [v0.0.0b] - 2026-05-31

<span class="pill pill-version">Version v0.0.0b</span>
<span class="pill pill-status">Beta</span>
<span class="pill pill-type">Added</span>
<span class="pill pill-type">Changed</span>

### Summary

Recorded the beta rebuild baseline for the restored APES Pet Care Clinic website and preserved the initial shared layout, route, and integration work as the historic starting point for subsequent stable releases.

### Detailed changes

- Rebuilt live routes to shared PHP layouts using reusable header and footer includes. This was a public-facing structural website change.
- Added the initial Services mega menu and reorganised the main navigation around shared templates.
- Updated the bookings experience with an embedded booking form and site-wide external booking calls to action.
- Added the first website changelog page and global footer version display during the beta rebuild stage.
- Integrated Chatwoot live chat, OneSignal push messaging, and legacy News redirect handling as operational website integrations.
- Normalised this historic entry from earlier legacy notes that used an unsupported suffix, preserving the baseline history in the approved beta version format.

### Type pills

- `<span class="pill pill-type">Added</span>` Shared layouts, changelog page, and major route scaffolding.
- `<span class="pill pill-type">Changed</span>` Navigation, copy, service wording, and booking journey content.

### Fix pills

- `<span class="pill pill-fix">Content Fix</span>` Corrected species wording and clarified clinic scope messaging.
- `<span class="pill pill-fix">Integration Fix</span>` Updated News links and added redirect handling for legacy News routes.

### Affected areas

- Website: APES Pet Care Clinic public website.
- Page or route: Shared layouts, core service pages, bookings, contact actions, news handling, and changelog route.
- Files changed: Historic rebuild baseline across shared templates, service routes, booking route, and integration scripts.
- User groups affected: Public visitors, booking users, donors, and staff maintaining the restored website.
- Public impact: Restored and standardised the public-facing website structure after content reconstruction.
- Internal impact: Established the template and integration baseline used by later releases.

### Version decision

- Previous version: No canonical version file was recorded.
- New version: `v0.0.0b`
- Version type: Beta baseline release
- Reason for version bump: The restored website was not final and acted as the beta foundation for later public refinements.

### Validation

- Checks run: Historic validation not fully recorded in the legacy notes.
- Manual checks completed: Legacy navigation, route, and service content review performed during the rebuild stage.
- Known limitations: Historic detail has been preserved from available release notes and may not reflect every rebuild-era file touched.
- Rollback notes: Restore the pre-rebuild exported site snapshot if the rebuilt shared-template version needs to be withdrawn.
