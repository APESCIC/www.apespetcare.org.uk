# AGENTS.md

# APES CIC Website Working Instructions

These instructions apply to all APES CIC website repositories, website exports, public web pages, intranet pages, microsites, static websites, documentation sites, portal front ends, and any related website code owned or maintained by the Association of Protecting Exotic Species CIC.

Codex must follow these instructions before, during, and after making any website change.

---

## 1. Primary rule

Every website update must be planned, versioned, recorded, validated, checked against APES brand standards, checked against APES Newsroom routing rules where relevant, and reflected in relevant GitHub Issues.

Codex must not complete website work without checking whether the following are required:

1. A website Change Log Hub page update.
2. A root-level `CHANGELOG.md` update.
3. A canonical version update.
4. A GitHub Issue start, progress, or completion update.
5. An APES website brand and feature standards review.
6. An APES Newsroom routing check for any news, update, announcement, newsletter, footer, navigation, or article-related change.

A changelog entry is required when the work changes public website content, intranet website content, page structure, forms, buttons, links, menus, navigation, CTAs, styling, layout, themes, branding, visual assets, accessibility, SEO, analytics, tracking, CRM, automation, embedded tools, third-party integrations, scripts, widgets, site configuration, build configuration, deployment configuration, generated website output, security, privacy, safeguarding, legal, compliance, finance, governance, HR, animal welfare content, or any user-visible bug fix.

If there is any uncertainty, Codex must assume a changelog entry is required.

---

## 2. APES website brand and feature standards

Codex must apply the APES CIC Website Branding & Feature Standards to all APES websites and future APES website work.

These standards apply to:

- `apes.org.uk`
- `apesshelter.org.uk`
- `apespetcare.org.uk`
- APES Newsroom
- CareBase and help/knowledge sites
- APES intranet pages where the same public-facing design pattern is being reused
- Future APES websites, division websites, campaign sites, service sites, portals, and microsites

Logos are intentionally excluded from this standard unless a separate task or approved brand pack provides logo instructions.

### Brand operating model

APES websites must feel like one connected ecosystem:

- `apes.org.uk` is the parent APES CIC organisation gateway.
- `apesshelter.org.uk` is the Shelter & Rescue service website.
- `apespetcare.org.uk` is the Pet Care Clinic service website.
- APES Newsroom is the central public news destination.
- Future sites must inherit the APES master brand unless a separate brand decision has been formally approved.

Each website may have a subtle service accent, but the shared APES identity must come first.

### Brand principles

Codex must preserve these principles:

- Recognisable first: every APES site should immediately feel part of the same organisation before the user reads the domain name.
- Teal-led, not colour-cluttered: teal is the repeated APES master brand colour. Secondary colours must support user understanding, not compete with teal.
- Welfare before sales: donation, sponsorship, booking, shop, and service journeys must still communicate animal welfare, trust, accountability, and operational competence.
- Plain-language confidence: headings must be direct, active, and practical. Do not leave vague placeholder copy on live pages.
- Consistent components: buttons, cards, hubs, filters, alerts, forms, footers, policy links, help routes, and CTAs must follow shared patterns.
- Accessible by default: colour contrast, keyboard navigation, readable text sizes, visible focus states, and plain language are brand requirements.

### APES colour system

Codex must use the following APES website colour tokens unless the website already has approved equivalent variables.

```css
:root {
  --apes-primary-teal: #008C8C;
  --apes-deep-teal: #005F5F;
  --apes-soft-mint: #DDF3EF;
  --apes-leaf-green: #2E7D32;
  --apes-rescue-sage: #A7C957;
  --apes-petcare-aqua: #26B6C8;
  --apes-warm-sand: #F2E9D8;
  --apes-charcoal: #263238;
  --apes-off-white: #F7FAF9;
  --apes-alert-amber: #F9A825;
  --apes-donation-coral: #E76F51;
}
```

Required colour usage:

| Colour | Hex | Required use |
|---|---:|---|
| Primary Teal | `#008C8C` | Main APES brand colour. Use for primary buttons, headings, navigation highlights, key icons, and section accents. |
| Deep Teal | `#005F5F` | Header/footer backgrounds, high-emphasis text, hover states, governance panels, and serious trust content. |
| Soft Mint | `#DDF3EF` | Panels, page callouts, form backgrounds, and gentle emphasis areas. |
| Leaf Green | `#2E7D32` | Welfare, sustainability, positive status, success states, and safe/approved messages. |
| Rescue Sage | `#A7C957` | Shelter, rescue, rehabilitation, and animal-care accents. |
| Pet Care Aqua | `#26B6C8` | Clinic, pet-care, animal health, booking, and care-service accents. |
| Warm Sand | `#F2E9D8` | Advice panels, adoption guidance, care notes, and non-urgent education. |
| Charcoal | `#263238` | Main body text. Use instead of pure black for a softer professional tone. |
| Off White | `#F7FAF9` | Primary page background or card background where white feels too stark. |
| Alert Amber | `#F9A825` | Warnings, urgent but non-critical notices, reservation fee notes, and attention prompts. |
| Donation Coral | `#E76F51` | Donation, urgent appeal, and fundraising accents only. Do not use it as a general brand colour. |

### Colour hierarchy and accessibility

- Primary actions use Primary Teal. Examples: Donate, Apply, Book, Contact, Start Adoption, Submit Request.
- High-trust structural areas use Deep Teal. Examples: header bands, footer panels, governance notices, and section dividers.
- Service accents are secondary only. Shelter content may use Rescue Sage or Leaf Green. Pet Care content may use Pet Care Aqua. Alerts may use Amber. Fundraising may use Coral.
- Backgrounds stay light. Use Off White, Soft Mint, or white for readability.
- Do not introduce new colours for each new website. New websites must inherit this palette and add no more than one approved accent if operationally necessary.
- Body text uses Charcoal on white, Off White, or Soft Mint backgrounds.
- Meaning is not communicated by colour alone.
- Status colours are paired with text labels such as Open, Reserved, Adopted, Urgent, Closed, Stable, Beta, Fixed, or Compliance.
- Primary buttons have clear hover, focus, and disabled states.
- Keyboard focus is visible using a strong Primary Teal or Deep Teal outline.
- Donation Coral is not used for ordinary error messages. Use Coral for fundraising and appeals only. Use Amber for warnings and a dedicated red only where legally or operationally necessary.

### Typography and content style

| Item | Standard |
|---|---|
| Headings | Use a modern, clear sans-serif. Headings must be short and active, for example Adopt an animal, Request rescue support, Book pet care, Sponsor an animal. |
| Body text | Use a readable sans-serif at no less than 16px equivalent on websites. Keep paragraphs short and action-focused. |
| Tone | Professional, compassionate, non-judgemental, practical, and operationally competent. |
| Capitalisation | Use sentence case for headings and buttons unless a formal service name requires title case. |
| Plain English | Avoid internal jargon where the public user needs a simple action. Explain fees, checks, policies, eligibility, timescales, and next steps plainly. |

Codex must remove or replace placeholder and generic template copy on live pages.

### Cross-site website architecture

Codex must preserve the APES family structure:

| Item | Standard |
|---|---|
| Parent hub | `apes.org.uk` remains the main organisation gateway, explaining APES CIC, mission, governance, services, news, and links to specialist divisions. |
| Division hubs | `apesshelter.org.uk` and `apespetcare.org.uk` must clearly identify their service role while preserving APES master branding. |
| Service hubs | Each major service must have a landing page with service cards, eligibility, fees, process, forms, FAQs, and related policies. |
| Knowledge hubs | CareBase, knowledge base, help centre, and policy hubs must be visually consistent and easy to return to from every public site. |
| Account and portal routes | Sign In, Sign Up, client portals, billing portals, service-user portals, and MyAPES links must sit in consistent locations and use consistent naming. |
| Status and support routes | Network status, help centres, live chat, and support routes must be surfaced in the header, footer, or support panel where relevant. |

### Required global website features

Codex must preserve or add these features where relevant:

- Top contact strip with email, telephone, and essential access links where appropriate.
- Primary navigation using consistent naming and hierarchy.
- Home, APES parent link, News, Services, Donate or Support, Contact, Sign In, and Sign Up.
- News items must route to the relevant APES Newsroom destination on `https://www.apesnews.org.uk/`, not isolated local news sections.
- Mega-menu or grouped menu for service areas, keeping Animal Welfare, Pet Care, Adoptions, Rescues, Sponsorships, Policies, and Portals logically grouped.
- Newsletter capture block with consistent heading, short value statement, first name, last name, email, and subscribe action.
- Footer with division description, telephone, email, address, policy links, CIC number, and regulatory wording.
- Live chat or help route where the service receives enquiries, adoption questions, rescue requests, sponsorship queries, or booking issues.

### Hubs, filters, cards, CTAs, and components

Codex must use consistent hub and component patterns across APES websites.

Required or reusable hubs include:

- Animal welfare hub
- Pet care hub
- Adoption hub
- Rescue and surrender hub
- Education and CareBase hub
- Support hub

Filters should be reused across websites so users understand how to find animals, services, care guidance, support, policies, and newsroom content. Use plain-language labels.

Required filter groups include:

- Animal/adoption filters: species group, adoption status, reserved status, location, size, husbandry level, DWA status, special care needs, fee range, and suitability.
- Service filters: species, routine care, first aid, consultation, lab service, care plan, booking required, low-income support, and emergency signposting.
- Knowledge filters: species, topic, care level, housing, diet, welfare, legal, DWA, enrichment, health, behaviour, and downloadable resources.
- News filters: all public news filtering should be centralised through APES Newsroom using APES CIC, Shelter & Rescue, Pet Care Clinic, Pet Shop, MyAPES, Website, Updates, Official, Appeals, Services, and Care Guidance.
- Policy filters: adoptions, rehoming, privacy, refunds, terms, bookings, welfare, safeguarding, complaints, and governance.

Cards must be used for animals, services, care guides, policies, news articles, and partner vets. Every card should include one clear action, for example Apply Now, Read the Process, Book, Learn More, Sponsor, Contact, or View Fees.

Use Primary Teal for the main action and an outlined Deep Teal button for secondary actions. Urgent appeals may use Donation Coral as an accent, but the page should remain teal-led.

Component standards:

| Component | Standard |
|---|---|
| Hero section | One clear headline, one short paragraph, one primary CTA, and one secondary CTA. Avoid multiple competing actions. |
| Service card | Title, short description, species/service tags, eligibility note, fee or from price where relevant, and CTA. |
| Alert panel | Amber for operational notices, Coral for urgent fundraising, Leaf Green for positive status, and Soft Mint for general guidance. |
| Form intro | Explain what the form is for, what happens next, expected timescale, fees, privacy note, and support route before the form starts. |
| Process steps | Use numbered stages for adoptions, rescues, surrenders, bookings, and aftercare. Keep the same visual treatment across sites. |
| Footer | Consistent structure: division description, contact, address, policy links, APES family links, CIC number, and regulatory statement. |

### Website-specific accent guidance

| Website | Standard |
|---|---|
| APES CIC main site | Use Primary Teal and Deep Teal as dominant colours. This site should feel like the governance and organisation gateway. |
| APES Shelter & Rescue | Use Primary Teal with Leaf Green or Rescue Sage accents. Emphasis should be rescue, rehabilitation, adoption, sponsorship, and animal welfare. |
| APES Pet Care Clinic | Use Primary Teal with Pet Care Aqua accents. Emphasis should be access to affordable care, practical support, routine services, and bookings. |
| Future websites | Start with the APES master palette. Add one accent only if the service needs clear differentiation. Do not create a separate brand unless formally approved. |

### Copy and naming rules

- Use APES CIC for the legal organisation and APES for the public-facing family name where appropriate.
- Use Shelter & Rescue consistently.
- Use Pet Care Clinic consistently and make clear where services are not veterinary practice services.
- Use adoption-ready animals or animals currently available consistently for adoption listings.
- Use support as the broad public help route, then specify live chat, contact centre, help centre, booking, or portal as the next step.
- Avoid placeholder or generic template copy on live pages because it weakens trust and brand recognition.

### Governance and launch checklist

Before launching a new page, Codex must check colour usage, logo exclusion/inclusion rules, CTA hierarchy, accessibility, mobile layout, policy links, contact accuracy, newsletter consistency, forms, filters, live chat/help routes, portal routes, service naming, and placeholder copy.

Review public websites quarterly for outdated copy, broken links, inconsistent wording, duplicated pages, and off-brand colours.

Maintain a central feature register showing which site has which hubs, forms, filters, portals, live chat, status links, and donation routes.

---

## 3. Central Newsroom and news routing standard

APES Newsroom must be treated as the single public destination for news, announcements, and updates from APES CIC and all operating divisions.

Individual websites may introduce news in context, but the full article, archive, subscription journey, and cross-division discovery experience should sit on `https://www.apesnews.org.uk/`.

This standard supersedes older website wording or navigation patterns that present each website as having a fully separate public news archive. Local website pages should be retained only where needed for SEO, transitional support, or legacy compatibility, and should clearly direct visitors to the central newsroom.

### Required news routing behaviour

- Main APES website: News navigation should route users to APES Newsroom, preferably to the APES or organisation-wide feed first, while still showing clear links to Shelter & Rescue, Pet Care Clinic, Pet Shop, MyAPES, and other service updates.
- Shelter & Rescue website: News navigation should route users to the relevant APES Newsroom Shelter & Rescue feed or a newsroom landing page with Shelter & Rescue preselected.
- Pet Care Clinic website: News navigation should route users to the relevant APES Newsroom Pet Care Clinic feed or a newsroom landing page with Pet Care Clinic preselected.
- Future division websites: every new division or campaign website should use the same pattern, with a News link that takes users into APES Newsroom with the relevant division context carried across.
- Footer and newsletter areas: footer news, newsletter prompts, and update CTAs should point to APES Newsroom or its subscription route, not duplicate local news archives.
- Legacy news pages: where existing `/news/` pages remain live, use them as short landing pages only. They should explain that news is centralised and provide a prominent teal button to APES Newsroom.

### Cross-service news discovery

APES Newsroom should let visitors move between all APES services without needing to return to the site they came from. Each article should show its division or service clearly, for example APES CIC, Shelter & Rescue, Pet Care Clinic, Pet Shop, MyAPES, Website, or Updates.

Visitors arriving from a division website should land in that division’s news context first, but still see links or filters for other APES services.

Articles about organisation-wide matters, such as relocation, governance, urgent appeals, platform changes, opening hours, or service disruption, should be discoverable from all relevant service categories.

### Recommended news CTA copy

Use this reusable copy block on website sections that previously hosted local news lists:

```txt
News and updates from APES CIC and our services are now published through APES Newsroom. Visit APES Newsroom to read the latest organisation updates, Shelter & Rescue news, Pet Care Clinic updates, service notices, appeals and guidance from across the APES network.
```

### Redirect and UX checklist

- News links tested from desktop and mobile navigation on every APES website.
- Visitors from each division land on an appropriate APES Newsroom category, tag, or landing page.
- APES Newsroom visibly links back to APES CIC, Shelter & Rescue, Pet Care Clinic, and other live services.
- Old local news pages do not continue to look like the primary source of updates.
- RSS, newsletter, and subscribe prompts are consistent with the central newsroom model.
- News cards and article metadata use the same naming rules as the rest of the APES website brand standard.
- Analytics should distinguish traffic source by originating website.

---

## 4. Planning requirement

At the start of planning, Codex must confirm the type of update being worked on.

Codex must ask or determine:

1. Is this a major, minor, or patch update?
2. Is this a beta update?
3. Is the update public-facing, internal-only, or operational?
4. Which website, page, route, component, form, or integration is affected?
5. Does the update affect compliance, safeguarding, accessibility, donations, finance, legal, governance, HR, or animal welfare content?
6. Should the Change Log Hub entry be public, internal, or both?
7. Does the work comply with APES website brand and feature standards?
8. Does the work affect APES Newsroom routing, news links, newsletter prompts, footer links, navigation, or article metadata?
9. Is there a related GitHub Issue?
10. Should the GitHub Issue be updated at the start, during progress, and at completion?

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

## 5. Version numbering standard

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

Stable versions must not have any suffix. Beta versions must end in `b`.

Do not use unsupported formats such as `1.4.2`, `1.4.2b`, `v1.4.2-beta`, `v1.4.2.beta`, `v1.4.2-b`, `v.1.4.2`, or `version 1.4.2`.

The `v` prefix is mandatory for APES CIC website versions.

### Version source of truth

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

### Version bump rules

Use semantic versioning adapted for APES CIC websites.

#### Major version update

Increase the major number when the change is substantial, breaking, structural, high-risk, or materially changes how the website works.

Examples include full redesigns, CMS or hosting changes, major URL restructuring, major navigation restructuring, major user journey rebuilds, changes that may break bookmarks or integrations, or significant compliance/safeguarding/legal/finance/HR/animal welfare public information restructuring.

Example:

```txt
v1.8.4 -> v2.0.0
```

For beta:

```txt
v1.8.4 -> v2.0.0b
```

#### Minor version update

Increase the minor number when adding or materially improving functionality or public content without a breaking restructure.

Examples include new pages, sections, service pages, campaign pages, donation journeys, forms, volunteer/adoption/rescue/boarding/shop/event/partner workflows, public policy pages, compliance information, integrations, substantial content refreshes, or reusable components.

Example:

```txt
v1.8.4 -> v1.9.0
```

For beta:

```txt
v1.8.4 -> v1.9.0b
```

#### Patch version update

Increase the patch number for fixes, corrections, small improvements, or low-risk updates.

Examples include typo corrections, minor copy updates, broken link fixes, small CSS fixes, image replacements, form label corrections, metadata updates, SEO corrections, accessibility corrections, sitemap corrections, minor bug fixes, or small content updates that do not materially change the page purpose.

Example:

```txt
v1.8.4 -> v1.8.5
```

For beta:

```txt
v1.8.4 -> v1.8.5b
```

### Beta rules

Use beta when a page, feature, form, integration, or user journey is being trialled, staged for review, awaiting stakeholder approval, incomplete but intentionally visible in a test or controlled environment, or deployed to a beta/staging/preview/soft-launch environment.

When a beta becomes stable, remove the trailing `b` without changing the version numbers unless further work has been added. The `v` prefix must remain.

Example:

```txt
v1.3.0b -> v1.3.0
```

---

## 6. Change Log Hub and changelog system requirement

All websites must have both:

1. A Change Log Hub page on the website being worked on.
2. A root-level `CHANGELOG.md` file in the repository.

These are separate requirements and both must be maintained.

### Website Change Log Hub page

The Change Log Hub page is the website-facing release record for the specific website being worked on.

Codex must look for an existing website page or route named `change-log`, `changelog`, `change-log-hub`, `updates`, `release-notes`, or `site-updates`.

The page title should preferably be:

```txt
Change Log Hub
```

If no Change Log Hub page exists on the website being worked on, Codex must create one using the structure and routing conventions of that website.

The Change Log Hub page must be linked from an appropriate website location unless the user confirms it should remain unlisted.

Preferred locations include the footer, About section, transparency/governance/policies area, website information area, or internal staff-only navigation if the changelog is not intended to be public.

Codex must not assume the Change Log Hub page should be hidden. If visibility is unclear, Codex must ask whether the page should be public, internal-only, or unlisted.

### Repository `CHANGELOG.md`

Codex must create or update a `CHANGELOG.md` file at the repository root.

The root-level `CHANGELOG.md` is the repository audit record and must exist even when the website already has a Change Log Hub page.

The root-level `CHANGELOG.md` must contain the same release version, date, type pills, summary, detailed changes, affected areas, validation notes, and rollback notes as the website Change Log Hub page.

### Synchronisation rule

The website Change Log Hub page and root-level `CHANGELOG.md` must stay aligned.

For every website release or update, Codex must update both records unless the user explicitly instructs otherwise and gives a reason.

Codex’s final response must confirm:

- The Change Log Hub page was created or updated.
- The root-level `CHANGELOG.md` file was created or updated.
- Both records show the same version number and release date.

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

Incorrect setup includes missing hub pages, missing root changelogs, missing version files, version numbers without the mandatory `v` prefix, beta versions not ending in `b`, unsupported beta formats, vague changelog entries, missing dates, missing type/fix pills, mismatched hub and root changelog entries, missing affected areas, missing validation, missing rollback notes, or inconsistent changelog structure across repositories.

When correcting an incorrectly set up changelog system, Codex must preserve useful historic entries where possible and normalise them into the required format rather than deleting them.

Codex must record the correction itself as a changelog entry unless the changelog system is being created for the first time.

---

## 7. Change Log Hub page design and behaviour

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

The page must use a clean green APES CIC theme and include a compact header/hero, the page title `Change Log Hub`, a short subtitle, current version label, version/status pills, searchable/filterable timeline, collapsible release entries, detailed release information, validation and rollback information, and version formatting using `vmajor.minor.patch` or `vmajor.minor.patchb`.

### Required page layout

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

### Header or hero panel

Recommended example:

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

The Change Log Hub must include a `Version Timeline` section with search, filters, expand all, collapse all, collapsible entries, and visual separation between release entries.

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
  <div class="change-log-timeline"><!-- Release entries go here --></div>
</section>
```

### Required filter system

The Change Log Hub page must include filters for at least All releases and Current release.

Where useful, also add filters for Stable, Beta, Added, Changed, Fixed, Removed, Security, Compliance, Accessibility, SEO, Forms, Integrations, Public-facing, and Internal-only.

Filter controls must only hide or show entries. They must not delete content. Filters must work alongside search where JavaScript is available. If JavaScript is unavailable, all entries must remain visible and readable.

### Required search behaviour

The search field must allow users to search by version number, release title, release date, change type, fix type, file name, page or route, website area, user group, summary text, and detailed release notes. Search must be case-insensitive.

If no entries match, show:

```txt
No matching release entries found.
```

### Collapsible version entries

Each release entry must be collapsible. Codex may use native HTML `<details>` and `<summary>` elements unless the website framework has an existing accessible accordion component. Native HTML is preferred.

The newest or current release should be open by default. Older releases should usually be collapsed by default.

Recommended structure:

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
    <ul><li>Describe each material change in plain English.</li></ul>
    <h3>Affected areas</h3>
    <ul>
      <li>Website:</li><li>Page or route:</li><li>Files changed:</li>
      <li>User groups affected:</li><li>Public impact:</li><li>Internal impact:</li>
    </ul>
    <h3>Version decision</h3>
    <ul><li>Previous version:</li><li>New version:</li><li>Version type:</li><li>Reason for version bump:</li></ul>
    <h3>Validation</h3>
    <ul><li>Checks run:</li><li>Manual checks completed:</li><li>Known limitations:</li><li>Rollback notes:</li></ul>
  </div>
</details>
```

### Expand all and collapse all

The Change Log Hub page must include controls for Expand all and Collapse all. If JavaScript is unavailable, users must still be able to manually open each native `<details>` entry.

### Current release rule

The current release must be clearly identifiable. Mark it using `data-current="true"`.

Only one release should be marked as current unless the website has separate current stable and current beta releases. If both stable and beta are present, label them clearly as Current stable and Current beta.

### Accessibility and mobile requirements

- The page has one clear `h1`.
- Release entries use accessible collapsible controls.
- Search input has a label, even if visually hidden.
- Buttons have clear text.
- Keyboard users can tab through filters, search, and release entries.
- Colour is not the only way to understand change type.
- Pills use text labels, not colour alone.
- Hidden entries are hidden using the `hidden` attribute or equivalent.
- The page remains readable if JavaScript fails.
- On small screens, search should remain full width or near-full width, filter buttons should wrap, release summaries should wrap, dates and long file paths should not overflow, and pills should remain readable.

---

## 8. Pill display guidance

If the Change Log Hub is Markdown-only, Codex must still include pill-style HTML spans. If the website renders changelog entries as HTML, Codex may add CSS for pill styling where appropriate.

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
.pill-version { background: #e6f4ea; color: #14532d; }
.pill-status { background: #eef6ef; color: #166534; }
.pill-type { background: #ecfdf5; color: #047857; }
.pill-fix { background: #fef9c3; color: #854d0e; }
.pill-security { background: #fee2e2; color: #991b1b; }
.pill-compliance { background: #e0f2fe; color: #075985; }
```

Do not introduce CSS unless the relevant website or changelog page needs it.

---

## 9. Change Log Hub entry format

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

Use type pills for Added, Changed, Fixed, Removed, Security, and Compliance. Use fix pills where a change repairs a problem: Bug Fix, Content Fix, Accessibility Fix, SEO Fix, Form Fix, Navigation Fix, Integration Fix, Compliance Fix, or Security Fix.

---

## 10. GitHub Issues progress update requirement

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

Meaningful progress includes planning completed, update type confirmed or inferred, version number selected, Change Log Hub page created or updated, root-level `CHANGELOG.md` created or updated, `VERSION` file created or updated, website implementation completed, validation started or failed, blockers, scope changes, manual review requirements, risks, limitations, or paused work.

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

The final GitHub Issue update must include what changed, new version number, stable/beta status, Change Log Hub status, root `CHANGELOG.md` status, `VERSION` status, files or main areas affected, validation checks, manual checks, known limitations, rollback notes, PR reference if available, and whether the issue can be closed or needs further action.

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

### Issue status, labels, and linking

Where Codex has permission and the workflow supports it, Codex should update issue labels or project status using labels such as `in-progress`, `needs-review`, `blocked`, `ready-for-release`, `released`, `changelog-updated`, `version-updated`, `beta`, or `stable`.

Codex must not close an issue unless explicitly instructed or the repository workflow clearly permits closing completed issues.

When creating or updating a pull request, Codex must link the relevant GitHub Issue using `Related issue: #000`. Only use automatic closing keywords such as `Closes #000`, `Fixes #000`, or `Resolves #000` when the work fully completes the issue and closure is intended.

If Codex cannot update GitHub Issues because the tool, permission, or issue reference is unavailable, Codex must state this in its final response and include the exact issue update text that should be posted manually.

---

## 11. Required Codex workflow

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
- APES brand and feature standards impact
- APES Newsroom routing impact
- Related GitHub Issue, if one exists

If a related GitHub Issue exists, Codex must post a start-of-work update before implementation begins.

### Step 2: Confirm update type and brand/news routing impact

Before implementation, Codex must confirm or infer whether the update is Major, Minor, or Patch and Stable or Beta.

Codex must also confirm whether the change affects APES brand standards, APES feature standards, navigation, footer structure, CTAs, filters, cards, hubs, news links, newsroom routing, or newsletter prompts.

### Step 3: Make the website change

Codex must make only the changes required. Avoid bulk rewrites, formatting-only changes, generated-file churn, or unrelated changes.

If meaningful progress occurs, Codex must update the related GitHub Issue.

### Step 4: Update version

Codex must update the canonical version file. If no canonical version file exists, create `VERSION`.

If a related GitHub Issue exists, Codex must update it when the version has been selected or changed.

### Step 5: Update Change Log Hub page and root CHANGELOG.md

Codex must add a detailed entry to both the website Change Log Hub page and the root-level `CHANGELOG.md` file with version number, date, pill tags, summary, detailed changes, affected areas, version decision, validation, and rollback notes.

If a related GitHub Issue exists, Codex must update it when the changelog system has been created or updated.

### Step 6: Validate

Codex must run available checks where appropriate, including build, tests, linting, link check, type check, accessibility check, manual page review, form validation, and sitemap or robots review.

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
- APES brand and feature standards compliance status
- APES Newsroom routing status, if relevant
- GitHub Issue start/progress/end update status
- Any unresolved risks or manual follow-up required

---

## 12. Generated website export rule

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

Codex must keep diffs narrow, explain if a generated file was edited, prefer source files over generated output where the source exists, and record generated-output changes clearly in the Change Log Hub and `CHANGELOG.md`.

---

## 13. Multi-website rule

If a change affects more than one website, Codex must record the update in:

1. The central website Change Log Hub page, if one exists.
2. Each affected website’s Change Log Hub page where each website keeps its own release record.
3. The root-level `CHANGELOG.md` in each affected repository.

The changelog entry must list every affected website:

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

## 14. Commit and pull request guidance

When preparing a commit or pull request, Codex must include the version number in the PR summary.

Recommended PR checklist:

```md
## Website release checklist

- [ ] Confirmed update type: major, minor, or patch
- [ ] Confirmed beta status
- [ ] Updated related GitHub Issue at start of work
- [ ] Updated related GitHub Issue during meaningful progress, if applicable
- [ ] Posted final related GitHub Issue update
- [ ] Checked APES website brand and feature standards
- [ ] Checked APES Newsroom routing where news, updates, newsletter, footer, or navigation is affected
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

## 15. Final self-check before completion

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
14. Did I check APES website brand and feature standards?
15. If the work affects news, updates, newsletter prompts, footer links, navigation, article metadata, or public announcements, did I route users through APES Newsroom correctly?
16. If a related GitHub Issue exists, did I post a start-of-work update?
17. If meaningful progress occurred, did I post a progress update?
18. If work ended, did I post an end-of-work update or provide manual update text?

If any answer is no, Codex must fix the omission before finalising the work.

---

## 16. Default answer when update type is unclear

When a user asks Codex to make a website change but does not state the update type, Codex must respond with:

```txt
Before I make the website change, please confirm the update type: major, minor, or patch. Also confirm whether this is beta, meaning the version should end in b.
```

If the user asks Codex to proceed without confirmation, Codex must infer the update type using the rules in this file and clearly state the assumption.

---

## 17. APES CIC tone and governance standard

Website content, changelog entries, Change Log Hub pages, GitHub Issue updates, news routing, CTAs, forms, and support journeys must be professional, plain-English, brand-consistent, and audit-friendly.

Use UK English.

Do not use casual or vague release notes.

Where relevant, note whether the change relates to animal welfare, safeguarding, rescue operations, veterinary care, donations and fundraising, finance, governance, legal compliance, HR, volunteer management, public safety, accessibility, data protection, or public communications.

---

## 18. Non-negotiable instruction

Codex must never treat changelog, version updates, APES brand compliance, APES Newsroom routing, or related GitHub Issue updates as optional for website work.

If website files change, the website Change Log Hub page, root-level `CHANGELOG.md`, canonical version, APES brand and feature standards, APES Newsroom routing where relevant, and related GitHub Issue must be checked.

If the change is user-visible, operationally relevant, compliance-relevant, brand-relevant, news-routing-relevant, or release-relevant, the website Change Log Hub page, root-level `CHANGELOG.md`, version, APES brand and feature standards, APES Newsroom routing where relevant, and related GitHub Issue must be updated or confirmed compliant.

If the website does not have a Change Log Hub page, root-level `CHANGELOG.md`, version file, or coherent changelog system, Codex must add them.

If the changelog system exists but is incorrectly set up, Codex must fix and correct it before finishing the website task.

If a related GitHub Issue exists, Codex must update it:

1. At the start of work.
2. During meaningful progress.
3. At the end of work.

If Codex cannot update the GitHub Issue directly, it must provide the exact update text for manual posting.
