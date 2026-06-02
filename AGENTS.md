# AGENTS.md

# APES CIC Website Change Log and Versioning Instructions

These instructions apply to all website repositories, website exports, public web pages, microsites, static websites, documentation sites, portal front ends, and any related website code owned or maintained by the Association of Protecting Exotic Species CIC.

Codex must follow these instructions before, during, and after making any website change.

---

## 1. Primary rule

Every website update must be recorded in the Change Log Hub.

Codex must not complete website work without checking whether a changelog entry and version update are required.

A changelog entry is required when the work changes any of the following:

- Public website content
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
- Any change that affects how staff, volunteers, service users, donors, adopters, partners, or the public use the website

If there is any uncertainty, Codex must assume a changelog entry is required.

---

## 2. Change Log Hub requirement

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

## 3. Change Log Hub format

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

## 4. Pill display guidance

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

## 5. Version numbering standard

All website versions must use this format:

```txt
vmajor.minor.patch
```

Example stable version:

```txt
v1.4.2
```

Beta versions must add the letter `b` at the end:

```txt
vvmajor.minor.patchb
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

## 6. Version source of truth

Codex must identify the project’s canonical website version before changing it.

Look for version files in this order:

1. `VERSION`
2. `version.txt`
3. `version.json`
4. `package.json`
5. `CHANGELOG.md` or the Change Log Hub
6. Any documented website release metadata file

If no version file exists, Codex must create a root-level `VERSION` file.

The `VERSION` file must contain only the version number, including the mandatory `v` prefix, for example:

```txt
v0.1.0
```

or, for beta:

```txt
v0.1.0b
```

Codex must not blindly update third-party module versions, generated vendor versions, embedded widget versions, CMS app versions, CDN asset versions, or platform-controlled version strings unless the task explicitly requires it.

---

## 7. Version bump rules

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

## 8. Beta version rules

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

## 9. Planning requirement

At the start of planning, Codex must confirm the type of update being worked on.

Codex must ask or determine:

1. Is this a major, minor, or patch update?
2. Is this a beta update?
3. Is the update public-facing, internal-only, or operational?
4. Which website, page, route, component, form, or integration is affected?
5. Does the update affect compliance, safeguarding, accessibility, donations, finance, legal, governance, HR, or animal welfare content?
6. Should the Change Log Hub entry be public, internal, or both?

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

## 10. Required Codex workflow

For every website task, Codex must follow this workflow.

### Step 1: Understand the change

Codex must identify:

- Website affected
- Files likely to change
- User-visible impact
- Technical impact
- Risk level
- Version bump type
- Beta status
- Change Log Hub location

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

### Step 4: Update version

Codex must update the canonical version file.

If no canonical version file exists, create `VERSION`.

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

### Step 7: Final response

Codex’s final response must include:

- Change completed
- New version number
- Whether the version is beta or stable
- Website Change Log Hub page created or updated
- Root-level `CHANGELOG.md` created or updated
- Summary of changelog entry
- Checks run
- Any unresolved risks or manual follow-up required

---

## 11. Generated website export rule

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
- Record generated-output changes clearly in the Change Log Hub

---

## 12. Change type guidance

Use these type pills consistently.

### Added

Use for:

- New page
- New route
- New section
- New form
- New component
- New image or asset
- New integration
- New campaign
- New policy or guidance page

Pill:

```html
<span class="pill pill-type">Added</span>
```

### Changed

Use for:

- Existing content update
- Existing page restructure
- Existing user journey change
- Existing styling update
- Existing SEO or metadata update
- Existing form behaviour update

Pill:

```html
<span class="pill pill-type">Changed</span>
```

### Fixed

Use for:

- Broken links
- Broken forms
- Incorrect copy
- Styling defects
- Display defects
- Accessibility defects
- Incorrect metadata
- Script errors
- Incorrect routing

Pill:

```html
<span class="pill pill-type">Fixed</span>
```

### Removed

Use for:

- Deleted page
- Removed outdated content
- Removed form
- Removed integration
- Retired service page
- Removed asset

Pill:

```html
<span class="pill pill-type">Removed</span>
```

### Security

Use for:

- Security hardening
- Access control correction
- Privacy improvement
- Abuse-prevention change
- Data exposure fix
- Dependency security fix

Pill:

```html
<span class="pill pill-security">Security</span>
```

### Compliance

Use for:

- CIC governance updates
- Legal compliance updates
- Safeguarding content
- Animal welfare compliance
- HR compliance
- Finance compliance
- Data protection
- Public policy accuracy
- Risk management content

Pill:

```html
<span class="pill pill-compliance">Compliance</span>
```

---

## 13. Changelog entry detail standard

Changelog entries must be detailed enough for a director, staff member, volunteer, auditor, developer, or future maintainer to understand:

- What changed
- Why it changed
- Where it changed
- Who or what it affects
- Whether the change is public-facing
- Whether the change affects operations, compliance, safeguarding, animal welfare, finance, donations, HR, governance, or legal matters
- How the version number was selected
- How the change was checked
- How to roll it back if needed

Avoid vague entries such as:

- "Updated website"
- "Fixed bugs"
- "Changed content"
- "Minor updates"
- "General improvements"

Use precise entries such as:

- "Updated the donation page copy to clarify how veterinary fund donations are allocated and added a compliance note for restricted-purpose donations."
- "Fixed the volunteer enquiry form submit button alignment on mobile and confirmed the form remains keyboard accessible."
- "Added a new reptile boarding information page with eligibility criteria, enquiry routing, and safeguarding escalation wording."

---

## 14. Multi-website rule

If a change affects more than one website, Codex must record the update in either:

1. The central website Change Log Hub page, if one exists; and
2. Each affected website’s Change Log Hub page where each website keeps its own release record; and
3. The root-level `CHANGELOG.md` in each affected repository.

The changelog entry must list every affected website.

Use this format:

```md
### Affected websites

- Main APES CIC website:
- Client portal:
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

Website changelog entries must be professional, plain-English, and audit-friendly.

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

Codex must never treat changelog and version updates as optional for website work.

If website files change, the website Change Log Hub page, root-level `CHANGELOG.md`, and version must be checked.

If the change is user-visible, operationally relevant, compliance-relevant, or release-relevant, the website Change Log Hub page, root-level `CHANGELOG.md`, and version must be updated.

If the website does not have a Change Log Hub page, root-level `CHANGELOG.md`, version file, or coherent changelog system, Codex must add them.

If the changelog system exists but is incorrectly set up, Codex must fix and correct it before finishing the website task.
