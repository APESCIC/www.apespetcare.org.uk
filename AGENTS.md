# AGENTS.md

# APES CIC Website Working Instructions

These instructions apply to all APES CIC website repositories, website exports, public web pages, intranet pages, microsites, static websites, documentation sites, portal front ends, and any related website code owned or maintained by the Association of Protecting Exotic Species CIC.

Codex must follow these instructions before, during, and after making any website change.

---

## 1. Primary rule

Every website update must be planned, versioned, recorded, validated, and, where relevant, reflected in GitHub Issues.

Codex must not complete website work without checking whether the following are required:

1. A website Change Log Hub page update.
2. A root-level `CHANGELOG.md` update.
3. A canonical version update.
4. A GitHub Issue start, progress, or completion update.

A changelog entry is required when the work changes any of the following:

- Public website content
- Intranet website content
- Page structure
- Forms
- Buttons, links, menus, navigation, calls to action, or user journeys
- Styling, layout, themes, branding, or visual assets
- Accessibility behaviour or accessibility content
- SEO metadata, schema, sitemap, robots rules, redirects, or indexing behaviour
- Analytics, tracking, CRM, automation, embedded tools, or third-party integrations
- Scripts, widgets, site configuration, build configuration, deployment configuration, or generated website output
- Security, privacy, safeguarding, legal, compliance, finance, governance, HR, or animal welfare related public content
- Any user-visible bug fix
- Any change that affects how staff, volunteers, service users, donors, adopters, partners, students, or the public use the website

If there is any uncertainty, Codex must assume a changelog entry is required.

---

## 2. Planning requirement

At the start of planning, Codex must confirm the type of update being worked on.

Codex must ask or determine:

1. Is this a major, minor, or patch update?
2. Is this a beta update?
3. Is the update public-facing, internal-only, or operational?
4. Which website, page, route, component, form, or integration is affected?
5. Does the update affect compliance, safeguarding, accessibility, donations, finance, legal, governance, HR, or animal welfare content?
6. Should the Change Log Hub entry be public, internal, or both?
7. Is there a related GitHub Issue?
8. Should the GitHub Issue be updated at the start, during progress, and at completion?

If the user has not confirmed the update type, Codex must ask:

```txt
Before I make the website change, please confirm the update type: major, minor, or patch. Also confirm whether this is beta, meaning the version should end in b.
```

If the user does not answer but the task must proceed, Codex must make a conservative decision and state the assumption clearly before editing.

Default assumptions:

- Use `patch` for small corrections and fixes.
- Use `minor` for new pages, new content sections, new forms, new workflows, or new integrations.
- Use `major` only for substantial redesigns, breaking changes, migrations, URL restructuring, or high-risk structural changes.
- Use stable, not beta, unless the user says it is beta, staging, preview, trial, soft launch, or not final.

---

## 3. Version numbering standard

All APES CIC website versions must start with `v`.

Stable website versions must use this format:

```txt
vmajor.minor.patch
```

Example stable version:

```txt
v1.4.2
```

Beta website versions must add the letter `b` at the end:

```txt
vmajor.minor.patchb
```

Example beta version:

```txt
v1.4.2b
```

Stable versions must not have any suffix.

Beta versions must end in `b`.

Do not use other version formats such as:

- `1.4.2`
- `1.4.2b`
- `v1.4.2-beta`
- `v1.4.2.beta`
- `v1.4.2-b`
- `v.1.4.2`
- `version 1.4.2`

The `v` prefix is mandatory for APES CIC website versions.

---

## 4. Version source of truth

Codex must identify the project’s canonical website version before changing it.

Look for version files in this order:

1. `VERSION`
2. `version.txt`
3. `version.json`
4. `package.json`
5. `CHANGELOG.md`
6. Any documented website release metadata file

If no version file exists, Codex must create a root-level `VERSION` file.

The `VERSION` file must contain only the version number, including the mandatory `v` prefix.

Example stable `VERSION` file:

```txt
v0.1.0
```

Example beta `VERSION` file:

```txt
v0.1.0b
```

Codex must not blindly update third-party module versions, generated vendor versions, embedded widget versions, CMS app versions, CDN asset versions, or platform-controlled version strings unless the task explicitly requires it.

---

## 5. Version bump rules

Codex must use semantic versioning adapted for APES CIC websites.

### Major version update

Increase the major number when the change is substantial, breaking, structural, high-risk, or materially changes how the website works.

Examples:

- Full website redesign
- New website platform, CMS, hosting, or deployment structure
- Major URL restructure
- Major navigation restructure
- Major user journey restructure
- Major donation, adoption, rescue, boarding, volunteer, shop, or contact flow rebuild
- Change that may break bookmarks, automations, integrations, or staff workflows
- Change requiring substantial rollback planning
- Significant compliance, safeguarding, legal, finance, HR, or animal welfare public information restructuring

Example:

```txt
v1.8.4 -> v2.0.0
```

For beta:

```txt
v1.8.4 -> v2.0.0b
```

### Minor version update

Increase the minor number when adding or materially improving functionality or public content without a breaking restructure.

Examples:

- New page
- New section
- New service page
- New campaign page
- New donation journey
- New contact or referral form
- New volunteer, adoption, rescue, boarding, shop, event, or partner workflow
- New public policy page
- New public compliance, governance, safeguarding, or animal welfare information
- New integration that does not break existing behaviour
- Substantial content refresh across existing pages
- New reusable component or template

Example:

```txt
v1.8.4 -> v1.9.0
```

For beta:

```txt
v1.8.4 -> v1.9.0b
```

### Patch version update

Increase the patch number for fixes, corrections, small improvements, or low-risk updates.

Examples:

- Typo, grammar, or wording correction
- Minor copy update
- Broken link fix
- Small CSS fix
- Button alignment fix
- Image replacement
- Form label correction
- Metadata update
- Small SEO correction
- Small accessibility correction
- Sitemap or robots correction
- Minor bug fix
- Small content update that does not materially change the page purpose

Example:

```txt
v1.8.4 -> v1.8.5
```

For beta:

```txt
v1.8.4 -> v1.8.5b
```

---

## 6. Beta version rules

A beta version is used when the update is not yet final or is being tested before full release.

Use beta when:

- A page, feature, form, integration, or user journey is being trialled
- The change is staged for review before public release
- Stakeholder approval is pending
- Content is incomplete but intentionally visible in a test or controlled environment
- The work is deployed to a beta, staging, preview, or soft-launch environment

Beta format:

```txt
vmajor.minor.patchb
```

When a beta becomes stable, remove the trailing `b` without changing the version numbers unless further work has been added. The `v` prefix must remain.

Example:

```txt
v1.3.0b -> v1.3.0
```

If additional changes are made before stable release, bump the correct version segment and keep `b`.

Example:

```txt
v1.3.0b -> v1.3.1b
```

or:

```txt
v1.3.0b -> v1.4.0b
```

depending on the type of work.

---

## 7. Change Log Hub and changelog system requirement

All websites must have both:

1. A Change Log Hub page on the website being worked on.
2. A root-level `CHANGELOG.md` file in the repository.

These are separate requirements and both must be maintained.

### Website Change Log Hub page

The Change Log Hub page is the website-facing release record for the specific website being worked on.

Codex must look for an existing website page or route named one of the following:

1. `change-log`
2. `changelog`
3. `change-log-hub`
4. `updates`
5. `release-notes`
6. `site-updates`

The page title should preferably be:

```txt
Change Log Hub
```

If no Change Log Hub page exists on the website being worked on, Codex must create one using the structure and routing conventions of that website.

The Change Log Hub page must be linked from an appropriate website location unless the user confirms it should remain unlisted.

Preferred locations include:

- Footer
- About section
- Transparency, governance, or policies area
- Website information area
- Internal staff-only navigation, if the changelog is not intended to be public

Codex must not assume the Change Log Hub page should be hidden. If visibility is unclear, Codex must ask whether the page should be public, internal-only, or unlisted.

### Repository `CHANGELOG.md`

Codex must also create or update a `CHANGELOG.md` file at the repository root.

The root-level `CHANGELOG.md` is the repository audit record and must exist even when the website already has a Change Log Hub page.

If `CHANGELOG.md` does not exist, Codex must create it.

The root-level `CHANGELOG.md` must contain the same release version, date, type pills, summary, detailed changes, affected areas, validation notes, and rollback notes as the website Change Log Hub page.

### Synchronisation rule

The website Change Log Hub page and root-level `CHANGELOG.md` must stay aligned.

For every website release or update, Codex must update both records unless the user explicitly instructs otherwise and gives a reason.

Codex’s final response must confirm:

- The Change Log Hub page was created or updated.
- The root-level `CHANGELOG.md` file was created or updated.
- Both records show the same version number and release date.

When creating or updating either changelog record, Codex must use clear, detailed, audit-friendly entries.

### Missing or incorrect changelog system

If no Change Log Hub page and no changelog system is present on the website being worked on, Codex must add the complete changelog system before finishing the website task.

The complete changelog system must include:

- A website Change Log Hub page.
- A root-level `CHANGELOG.md` file.
- A canonical version file, preferably `VERSION`, if one does not already exist.
- Consistent version numbering using `vmajor.minor.patch` for stable releases and `vmajor.minor.patchb` for beta releases.
- Pill-style change type labels.
- Pill-style fix labels where relevant.
- A clear release entry template.
- A link to the Change Log Hub page from an appropriate website location unless the user confirms it should remain unlisted.
- Synchronisation between the website Change Log Hub page and root-level `CHANGELOG.md`.

If an existing Change Log Hub page, changelog file, version file, or changelog system is incorrectly set up, Codex must fix and correct it.

Incorrect setup includes, but is not limited to:

- Missing website Change Log Hub page.
- Missing root-level `CHANGELOG.md`.
- Missing canonical version file.
- Version numbers without the mandatory `v` prefix.
- Beta versions not ending in `b`.
- Use of unsupported beta formats such as `v1.2.3-beta`.
- Changelog entries that are too vague for audit or governance purposes.
- Missing release dates.
- Missing version numbers.
- Missing change type pills.
- Missing fix pills where a fix has been made.
- Website Change Log Hub page and root-level `CHANGELOG.md` showing different versions, dates, or release details.
- Changelog page present but not linked from an appropriate website location where it is intended to be public or visible.
- Changelog content that does not identify affected website areas, public/internal impact, validation, or rollback notes.
- Changelog structure that is inconsistent across website repositories.

When correcting an incorrectly set up changelog system, Codex must preserve useful historic entries where possible and normalise them into the required format rather than deleting them.

Codex must record the correction itself as a changelog entry unless the changelog system is being created for the first time.

---

## 8. Change Log Hub page design and behaviour

Codex must build and maintain Change Log Hub pages using the APES CIC website pattern shown in the intranet Change Log Hub reference design.

The Change Log Hub page must be a proper website page, not only a Markdown file. It must visually and functionally use the APES reference pattern:

- Green hero/header panel
- Current version display
- Version and status pills
- Timeline panel
- Search
- Filters
- Expand all and collapse all controls
- Collapsible version cards

The page must use a clean green APES CIC theme and must include:

- A compact page header or hero panel.
- The page title: `Change Log Hub`.
- A short subtitle explaining that users can track major releases, fixes, compliance changes, and website improvements.
- A visible current version label.
- Version/status pills.
- A searchable and filterable version timeline.
- Collapsible release/version entries.
- Detailed release information inside each expanded entry.
- Clear validation and rollback information.
- Consistent version formatting using `vmajor.minor.patch` or `vmajor.minor.patchb`.

### Required page layout

The Change Log Hub page must use this general structure:

```txt
Change Log Hub
Track every major release for this website, including updates, fixes, compliance changes, and user-facing improvements.

Current version: v0.0.0
[Version v0.0.0] [Stable or Beta]

Version Timeline

[Search versions, files, release notes]
[All releases] [Current release] [Stable] [Beta] [Fixes] [Compliance]
[Expand all] [Collapse all]

> v0.0.0 - Release title
  [Version v0.0.0] [Stable/Beta] [Changed] [Fixed] [Compliance]
  Collapsible release detail panel
```

The exact text may be adapted to the website, but the structure must remain consistent.

### Header or hero panel

The top panel must include:

- `Change Log Hub` as the visible page heading.
- A short plain-English explanation of what the hub records.
- `Current version: vX.Y.Z` or `Current version: vX.Y.Zb`.
- Pills showing current version and release status.

Recommended header example:

```html
<section class="change-log-hero">
  <h1>Change Log Hub</h1>
  <p>Track every major release for this website, including updates, fixes, compliance changes, and user-facing improvements.</p>
  <p class="current-version">Current version: <strong>v0.0.0</strong></p>
  <span class="pill pill-version">Version v0.0.0</span>
  <span class="pill pill-status">Stable</span>
</section>
```

For beta versions, use:

```html
<span class="pill pill-status">Beta</span>
```

### Version Timeline area

The Change Log Hub must include a `Version Timeline` section.

This section must provide:

- Search input.
- Filter controls.
- Expand all control.
- Collapse all control.
- Collapsible entries for each release.
- A clear visual separation between release entries.

Recommended structure:

```html
<section class="change-log-panel">
  <h2>Version Timeline</h2>

  <div class="change-log-controls">
    <label class="sr-only" for="changeLogSearch">Search version history</label>
    <input id="changeLogSearch" type="search" placeholder="Search versions, files, release notes">

    <button type="button" data-filter="all">All releases</button>
    <button type="button" data-filter="current">Current release</button>
    <button type="button" data-action="expand-all">Expand all</button>
    <button type="button" data-action="collapse-all">Collapse all</button>
  </div>

  <p data-change-log-empty hidden>No matching release entries found.</p>

  <div class="change-log-timeline">
    <!-- Release entries go here -->
  </div>
</section>
```

### Required filter system

The Change Log Hub page must include a filter system.

At minimum, Codex must provide filters for:

- All releases
- Current release

Where useful, Codex should also add filters for:

- Stable
- Beta
- Added
- Changed
- Fixed
- Removed
- Security
- Compliance
- Accessibility
- SEO
- Forms
- Integrations
- Public-facing
- Internal-only

Filter controls must only hide or show entries. They must not delete content.

Filters must work alongside search where JavaScript is available.

If JavaScript is not available, all entries must remain visible and readable.

### Required search behaviour

The search field must allow users to search by:

- Version number
- Release title
- Release date
- Change type
- Fix type
- File name
- Page or route
- Website area
- User group
- Summary text
- Detailed release notes

Search must be case-insensitive.

If no entries match the search, the page should show:

```txt
No matching release entries found.
```

### Collapsible version entries

Each release entry must be collapsible.

Codex may use native HTML `<details>` and `<summary>` elements unless the website framework has an existing accessible accordion component.

Native HTML is preferred because it is accessible, lightweight, and works without extra JavaScript.

The newest or current release should be open by default. Older releases should usually be collapsed by default.

Recommended collapsible structure:

```html
<details class="release-card" data-version="v0.0.0" data-current="true" data-status="stable" data-types="changed fixed compliance" open>
  <summary>
    <span class="release-version">v0.0.0</span>
    <span class="release-title">Release title</span>
    <span class="release-date">YYYY-MM-DD</span>
  </summary>

  <div class="release-body">
    <div class="release-pills">
      <span class="pill pill-version">Version v0.0.0</span>
      <span class="pill pill-status">Stable</span>
      <span class="pill pill-type">Changed</span>
      <span class="pill pill-fix">Fixed</span>
      <span class="pill pill-compliance">Compliance</span>
    </div>

    <h3>Summary</h3>
    <p>Briefly explain what changed and why.</p>

    <h3>Detailed changes</h3>
    <ul>
      <li>Describe each material change in plain English.</li>
    </ul>

    <h3>Affected areas</h3>
    <ul>
      <li>Website:</li>
      <li>Page or route:</li>
      <li>Files changed:</li>
      <li>User groups affected:</li>
      <li>Public impact:</li>
      <li>Internal impact:</li>
    </ul>

    <h3>Version decision</h3>
    <ul>
      <li>Previous version:</li>
      <li>New version:</li>
      <li>Version type:</li>
      <li>Reason for version bump:</li>
    </ul>

    <h3>Validation</h3>
    <ul>
      <li>Checks run:</li>
      <li>Manual checks completed:</li>
      <li>Known limitations:</li>
      <li>Rollback notes:</li>
    </ul>
  </div>
</details>
```

### Expand all and collapse all

The Change Log Hub page must include controls for:

- Expand all
- Collapse all

These controls should open and close every release card.

If JavaScript is not available, the page must still work because users can manually open each native `<details>` entry.

### Current release rule

The current release must be clearly identifiable.

Codex must mark the current release using:

```html
data-current="true"
```

Example:

```html
<details class="release-card" data-version="v0.2.1" data-current="true" data-status="stable" data-types="changed fixed" open>
```

Only one release should be marked as current unless the website has separate current stable and current beta releases.

If both stable and beta are present, Codex must label them clearly:

- Current stable
- Current beta

### Accessibility requirements

The Change Log Hub must be accessible.

Codex must ensure:

- The page has one clear `h1`.
- Release entries use accessible collapsible controls.
- Search input has a label, even if visually hidden.
- Buttons have clear text.
- Keyboard users can tab through filters, search, and release entries.
- Colour is not the only way to understand change type.
- Pills use text labels, not colour alone.
- Hidden entries are hidden using the `hidden` attribute or equivalent.
- The page remains readable if JavaScript fails.

### Mobile behaviour

On small screens:

- The search field should remain full width or near-full width.
- Filter buttons should wrap onto multiple lines.
- Release summary rows should wrap cleanly.
- Dates should not overflow.
- Long file paths should wrap.
- Pills should wrap and remain readable.

---

## 9. Pill display guidance

If the Change Log Hub is Markdown-only, Codex must still include pill-style HTML spans.

If the website renders changelog entries as HTML, Codex may add CSS for pill styling where appropriate.

Preferred pill CSS:

```css
.pill {
  display: inline-block;
  padding: 0.2rem 0.55rem;
  margin: 0.1rem 0.15rem 0.1rem 0;
  border-radius: 999px;
  font-size: 0.85rem;
  font-weight: 700;
  line-height: 1.2;
  white-space: nowrap;
}

.pill-version {
  background: #e6f4ea;
  color: #14532d;
}

.pill-status {
  background: #eef6ef;
  color: #166534;
}

.pill-type {
  background: #ecfdf5;
  color: #047857;
}

.pill-fix {
  background: #fef9c3;
  color: #854d0e;
}

.pill-security {
  background: #fee2e2;
  color: #991b1b;
}

.pill-compliance {
  background: #e0f2fe;
  color: #075985;
}
```

Do not introduce CSS unless the relevant website or changelog page needs it.

---

## 10. Change Log Hub entry format

Codex must use this structure for each release entry:

```md
## [v0.0.0] - YYYY-MM-DD

<span class="pill pill-version">Version v0.0.0</span>
<span class="pill pill-status">Stable</span>
<span class="pill pill-type">Changed</span>
<span class="pill pill-fix">Fix</span>

### Summary

Briefly explain what changed and why.

### Detailed changes

- Describe each material change in plain English.
- Include affected page names, website areas, components, forms, or user journeys.
- Include whether the change is public-facing, internal-only, or operational.
- Include any compliance, safeguarding, accessibility, governance, donation, finance, or animal welfare relevance.

### Type pills

- `<span class="pill pill-type">Added</span>` for new content, pages, sections, components, forms, workflows, or integrations.
- `<span class="pill pill-type">Changed</span>` for updates to existing content, layout, structure, behaviour, styling, SEO, or configuration.
- `<span class="pill pill-type">Fixed</span>` for bug fixes, broken links, display issues, incorrect copy, form issues, accessibility defects, metadata errors, or user journey defects.
- `<span class="pill pill-type">Removed</span>` for deleted pages, retired content, removed features, or withdrawn integrations.
- `<span class="pill pill-type">Security</span>` for security, permissions, privacy, abuse-prevention, or hardening changes.
- `<span class="pill pill-type">Compliance</span>` for legal, governance, safeguarding, HR, charity/CIC, animal welfare, financial, data protection, or policy-aligned changes.

### Fix pills

Use fix pills where a change repairs a problem:

- `<span class="pill pill-fix">Bug Fix</span>`
- `<span class="pill pill-fix">Content Fix</span>`
- `<span class="pill pill-fix">Accessibility Fix</span>`
- `<span class="pill pill-fix">SEO Fix</span>`
- `<span class="pill pill-fix">Form Fix</span>`
- `<span class="pill pill-fix">Navigation Fix</span>`
- `<span class="pill pill-fix">Integration Fix</span>`
- `<span class="pill pill-fix">Compliance Fix</span>`
- `<span class="pill pill-fix">Security Fix</span>`

### Affected areas

- Website:
- Page or route:
- Files changed:
- User groups affected:
- Public impact:
- Internal impact:

### Version decision

- Previous version:
- New version:
- Version type:
- Reason for version bump:

### Validation

- Checks run:
- Manual checks completed:
- Known limitations:
- Rollback notes:
```

---

## 11. GitHub Issues progress update requirement

Codex must keep relevant GitHub Issues updated as website work progresses.

This applies when:

- The work was requested from a GitHub Issue.
- A GitHub Issue is linked in the task, branch, pull request, commit message, project board, or planning notes.
- The work clearly relates to an existing GitHub Issue.
- Codex creates or is asked to create a GitHub Issue for the work.
- A website update affects release planning, changelog work, versioning, deployment, validation, or follow-up actions.

### Start-of-work issue update

At the start of changes and updates, before making implementation changes, Codex must add a GitHub Issue comment or status update confirming:

- Work has started.
- The intended scope.
- The affected website, page, route, component, form, integration, or repository area.
- The planned update type: major, minor, or patch.
- Whether the work is stable or beta.
- The expected version number where it can be determined.
- Whether a Change Log Hub page update is required.
- Whether root-level `CHANGELOG.md` and `VERSION` updates are required.
- Any assumptions, risks, or items needing confirmation.

Recommended start update format:

```md
## Work started

Codex has started work on this issue.

### Planned scope

- Website:
- Area affected:
- Planned update type: major / minor / patch
- Release status: stable / beta
- Expected version:
- Change Log Hub update required: yes / no
- Root `CHANGELOG.md` update required: yes / no
- `VERSION` update required: yes / no

### Notes

- Assumptions:
- Risks:
- Confirmation needed:
```

If the update type is unclear, Codex must ask for confirmation before implementation where practical.

### Progress issue updates

Codex must update the related GitHub Issue as work progresses when there is a meaningful change in status.

Meaningful progress includes:

- Planning completed.
- Update type confirmed or inferred.
- Version number selected.
- Change Log Hub page created or updated.
- Root-level `CHANGELOG.md` created or updated.
- `VERSION` file created or updated.
- Website implementation completed.
- Validation checks started.
- Validation checks failed.
- A blocker is found.
- Scope changes.
- Manual review is required.
- A risk or limitation is identified.
- Work is paused.

Progress updates must be concise but specific.

Recommended progress update format:

```md
## Progress update

### Completed

- 

### In progress

- 

### Blockers or risks

- 

### Version and changelog status

- Version:
- Change Log Hub page:
- Root `CHANGELOG.md`:
- `VERSION` file:
```

Codex must not spam GitHub Issues with trivial updates. Update only when there is useful progress, a decision, a blocker, or a handover point.

### End-of-work issue update

When work ends, Codex must update the related GitHub Issue with a final summary.

The final GitHub Issue update must include:

- What was changed.
- New version number.
- Stable or beta status.
- Change Log Hub page created or updated.
- Root-level `CHANGELOG.md` created or updated.
- `VERSION` file created or updated.
- Files changed or main areas affected.
- Validation checks run.
- Manual checks completed.
- Known limitations.
- Rollback notes.
- Pull request reference if available.
- Whether the issue can be closed or needs further action.

Recommended end update format:

```md
## Work completed

### Summary

- 

### Release details

- Version:
- Release status:
- Update type:

### Changelog and version records

- Change Log Hub page:
- Root `CHANGELOG.md`:
- `VERSION` file:

### Validation

- Automated checks:
- Manual checks:
- Result:

### Files or areas changed

- 

### Rollback notes

- 

### Follow-up

- Issue status recommendation: close / keep open / needs review
- Remaining actions:
```

### Issue status and labels

Where Codex has permission and the workflow supports it, Codex should update issue labels or project status to reflect progress.

Recommended labels or statuses include:

- `in-progress`
- `needs-review`
- `blocked`
- `ready-for-release`
- `released`
- `changelog-updated`
- `version-updated`
- `beta`
- `stable`

Codex must not close an issue unless explicitly instructed or the repository workflow clearly permits closing completed issues.

If Codex cannot update GitHub Issues because the tool, permission, or issue reference is unavailable, Codex must state this in its final response and include the exact issue update text that should be posted manually.

### Pull request and issue linking

When creating or updating a pull request, Codex must link the relevant GitHub Issue.

Preferred wording:

```md
Related issue: #000
```

Only use automatic closing keywords such as `Closes #000`, `Fixes #000`, or `Resolves #000` when the work fully completes the issue and closure is intended.

### Final response requirement

Codex’s final response to the user must confirm:

- Whether the GitHub Issue was updated at the start of work.
- Whether progress updates were posted, if applicable.
- Whether the final GitHub Issue update was posted.
- If updates could not be posted, what manual update text should be used.

---

## 12. Required Codex workflow

For every website task, Codex must follow this workflow.

### Step 1: Understand the change and update GitHub Issue

Codex must identify:

- Website affected
- Files likely to change
- User-visible impact
- Technical impact
- Risk level
- Version bump type
- Beta status
- Change Log Hub location
- Related GitHub Issue, if one exists

If a related GitHub Issue exists, Codex must post a start-of-work update before implementation begins.

### Step 2: Confirm update type

Before implementation, Codex must confirm or infer whether the update is:

- Major
- Minor
- Patch

Codex must also confirm or infer whether the release is:

- Stable
- Beta

### Step 3: Make the website change

Codex must make only the changes required.

Avoid bulk rewrites, formatting-only changes, generated-file churn, or unrelated changes.

If meaningful progress occurs, Codex must update the related GitHub Issue.

### Step 4: Update version

Codex must update the canonical version file.

If no canonical version file exists, create `VERSION`.

If a related GitHub Issue exists, Codex must update it when the version has been selected or changed.

### Step 5: Update Change Log Hub page and root CHANGELOG.md

Codex must add a detailed entry to both the website Change Log Hub page and the root-level `CHANGELOG.md` file with:

- Version number
- Date
- Pill tags
- Summary
- Detailed changes
- Affected areas
- Version decision
- Validation
- Rollback notes

If a related GitHub Issue exists, Codex must update it when the changelog system has been created or updated.

### Step 6: Validate

Codex must run available checks where appropriate.

Examples:

- Build
- Tests
- Linting
- Link check
- Type check
- Accessibility check
- Manual page review
- Form validation
- Sitemap or robots review

If no checks are available, Codex must state that no automated checks were found.

If validation fails or manual review is needed, Codex must update the related GitHub Issue.

### Step 7: Final GitHub Issue update and final response

If a related GitHub Issue exists, Codex must post an end-of-work update before finalising the task.

Codex’s final response must include:

- Change completed
- New version number
- Whether the version is beta or stable
- Website Change Log Hub page created or updated
- Root-level `CHANGELOG.md` created or updated
- Summary of changelog entry
- Checks run
- GitHub Issue start/progress/end update status
- Any unresolved risks or manual follow-up required

---

## 13. Generated website export rule

Some APES CIC websites may include generated exports from CMS or website builders.

Codex must treat generated files carefully.

Codex must not:

- Reformat entire generated HTML, CSS, JS, XML, or JSON files
- Rewrite unrelated generated sections
- Update platform-generated module versions
- Update third-party widget versions
- Update CDN asset versions
- Change embedded CRM or form scripts unless the task requires it
- Change generated sitemaps unless the task concerns sitemap, SEO, indexing, or URL changes

Codex must:

- Keep diffs narrow
- Explain if a generated file was edited
- Prefer source files over generated output where the source exists
- Record generated-output changes clearly in the Change Log Hub and `CHANGELOG.md`

---

## 14. Multi-website rule

If a change affects more than one website, Codex must record the update in:

1. The central website Change Log Hub page, if one exists.
2. Each affected website’s Change Log Hub page where each website keeps its own release record.
3. The root-level `CHANGELOG.md` in each affected repository.

The changelog entry must list every affected website.

Use this format:

```md
### Affected websites

- Main APES CIC website:
- Client portal:
- Intranet:
- Shop:
- Campaign site:
- Documentation site:
- Other:
```

If only one website is affected, Codex must still name it.

---

## 15. Commit and pull request guidance

When preparing a commit or pull request, Codex must include the version number in the PR summary.

Recommended PR checklist:

```md
## Website release checklist

- [ ] Confirmed update type: major, minor, or patch
- [ ] Confirmed beta status
- [ ] Updated related GitHub Issue at start of work
- [ ] Updated related GitHub Issue during meaningful progress, if applicable
- [ ] Posted final related GitHub Issue update
- [ ] Updated canonical version file
- [ ] Created or updated website Change Log Hub page
- [ ] Created or updated root-level `CHANGELOG.md`
- [ ] Added pill tags for change type and fixes
- [ ] Listed affected website areas
- [ ] Listed validation checks
- [ ] Included rollback notes
- [ ] Avoided unrelated generated-file rewrites
- [ ] Confirmed no third-party/platform versions were changed accidentally
```

Recommended commit message format:

```txt
website: update change log hub for v0.0.0
```

For specific changes:

```txt
website: add volunteer page and bump to v0.2.0
```

For fixes:

```txt
website: fix donation link and bump to v0.1.3
```

For beta:

```txt
website: add beta boarding form and bump to v0.3.0b
```

---

## 16. Final self-check before completion

Before Codex finishes any website task, it must answer these questions internally:

1. Did I identify the update type?
2. Did I confirm or infer beta status?
3. Did I update the canonical version?
4. Did I update the website Change Log Hub page?
5. Did I update the root-level `CHANGELOG.md`?
6. Did I add detailed change notes?
7. Did I add version, status, type, and fix pills where relevant?
8. Did I avoid unrelated generated-file changes?
9. Did I avoid changing third-party/platform version strings accidentally?
10. Did I run or state validation checks?
11. Did I include rollback notes?
12. If the changelog system was missing, did I create the full system?
13. If the changelog system was incorrectly set up, did I fix and correct it?
14. If a related GitHub Issue exists, did I post a start-of-work update?
15. If meaningful progress occurred, did I post a progress update?
16. If work ended, did I post an end-of-work update or provide manual update text?

If any answer is no, Codex must fix the omission before finalising the work.

---

## 17. Default answer when update type is unclear

When a user asks Codex to make a website change but does not state the update type, Codex must respond with:

```txt
Before I make the website change, please confirm the update type: major, minor, or patch. Also confirm whether this is beta, meaning the version should end in b.
```

If the user asks Codex to proceed without confirmation, Codex must infer the update type using the rules in this file and clearly state the assumption.

---

## 18. APES CIC tone and governance standard

Website changelog entries and GitHub Issue updates must be professional, plain-English, and audit-friendly.

Use UK English.

Do not use casual or vague release notes.

Where relevant, note whether the change relates to:

- Animal welfare
- Safeguarding
- Rescue operations
- Veterinary care
- Donations and fundraising
- Finance
- Governance
- Legal compliance
- HR
- Volunteer management
- Public safety
- Accessibility
- Data protection
- Public communications

---

## 19. Non-negotiable instruction

Codex must never treat changelog, version updates, or related GitHub Issue updates as optional for website work.

If website files change, the website Change Log Hub page, root-level `CHANGELOG.md`, canonical version, and related GitHub Issue must be checked.

If the change is user-visible, operationally relevant, compliance-relevant, or release-relevant, the website Change Log Hub page, root-level `CHANGELOG.md`, version, and related GitHub Issue must be updated.

If the website does not have a Change Log Hub page, root-level `CHANGELOG.md`, version file, or coherent changelog system, Codex must add them.

If the changelog system exists but is incorrectly set up, Codex must fix and correct it before finishing the website task.

If a related GitHub Issue exists, Codex must update it:

1. At the start of work.
2. During meaningful progress.
3. At the end of work.

If Codex cannot update the GitHub Issue directly, it must provide the exact update text for manual posting.
