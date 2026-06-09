# APES CIC GitHub Repository Agent Instructions

Use these instructions as the default GitHub repository working profile for APES CIC repositories maintained by the Association of Protecting Exotic Species CIC.

These instructions apply to GitHub-hosted repository work, especially APES CIC website repositories, documentation, release records, pull requests, GitHub Issues, repository maintenance guidance, and direct GitHub updates.

Use this file as repository-level guidance for keeping GitHub work planned, traceable, documented, validated, and aligned with APES CIC website standards. If a repository contains its own `AGENTS.md`, `README.md`, contribution guide, or task-specific instruction, follow that local guidance as well. If local guidance conflicts with this profile, ask the user before weakening any APES CIC compliance, changelog, Change Log Hub, versioning, SEO, sitemap, footer, error-page, or documentation requirement.

---

## Project

This is a website project. Make changes on a new branch unless told otherwise.

## Setup

Run:

```bash
npm install
```

## Local development

Run:

```bash
npm run dev
```

## Checks before completion

Run:

```bash
npm run lint
npm run typecheck
npm run test:e2e
```

## Safety

Do not edit production secrets.
Do not deploy automatically.
Do not commit unless explicitly asked.
Show the diff and test results first.

---

## 1. Operating Principles

Before changing a repository, understand the repository structure, the user's request, and the likely public, operational, compliance, or maintenance impact of the work.

Make the smallest safe change that satisfies the request while preserving APES CIC standards, accessibility, release records, documentation quality, and website reliability.

Do not invent repository facts, deployment processes, issue numbers, version numbers, routes, branch names, technical requirements, or third-party services. If required context is missing, inspect the repository first. If the repository does not contain enough evidence, explain the assumption and choose the safest general approach.

Do not remove or weaken mandatory APES CIC requirements unless the user explicitly asks for that specific removal.

---

## 2. Primary Repository Rule

Every repository update must be planned, versioned where applicable, recorded, validated, documented, and reflected in the relevant GitHub Issues where issue tracking is being used.

Before completing repository work, always check whether the following are required:

1. A website Change Log Hub page update.
2. A root-level `CHANGELOG.md` update.
3. A `/public/CHANGELOG.md` update where the repository has a `/public/` folder, so public website release records match the root changelog.
4. A canonical version update where the repository uses versioning.
5. A GitHub Issue start, progress, or completion update, including a changed-file list and a plain-language note for each file changed, whenever an issue is being worked on.
6. A root-level `README.md` update describing the change, release impact, setup impact, and operational notes.
7. Any repository-specific documentation updates needed to keep setup, workflow, governance, deployment, and maintenance guidance accurate.
8. For website repositories, an APES website brand and feature standards review.
9. For website repositories, an APES Newsroom routing check for any news, update, announcement, newsletter, footer, navigation, or article-related change.
10. For website repositories, an APES universal footer compliance check.
11. For website repositories, a footer link check for the website donation page, Privacy Policy page, Terms of Service page, and Change Log Hub.
12. For website repositories, SEO metadata, sitemap, robots or noindex, and error-page checks whenever routes, navigation, deployment behavior, public pages, or website structure change.
13. Generated-output, release metadata, static snapshot, or footer version display updates where the repository produces public build output.

### README.md Template And Maintenance

Use `APESCIC/Website-Repo-Template` `README.md` as the default source template for APES CIC website repository README files.

When a website repository has no root `README.md`, create one from the template and adapt it to the actual repository before completion. Do not leave template placeholders such as `{{PROJECT_NAME}}`, `{{PUBLIC_WEBSITE_URL}}`, `{{VERSION}}`, `{{INSTALL_COMMAND}}`, or `{{STATUS}}` unresolved unless the value is genuinely unknown and the final summary or issue update names the missing information.

Every root `README.md` for an APES CIC website repository must include a centered badge row near the top, directly under the project title or description and before the first horizontal rule, matching the `APESCIC/Website-Repo-Template` pattern. Create or update badges so they are relevant to the actual repository, not copied blindly from another project.

At minimum, include and verify these badges where the repository evidence supports them:

- Website badge: use the public website badge label or hostname and link it to the live public website URL; use `live` only when the site is actually live.
- Status badge: show the current project or release status, such as beta, stable, active, maintenance, or another status grounded in repository evidence.
- Theme badge: show the actual APES design theme in use, such as `APES Habitat`, when the repository uses that theme.
- Accessibility badge: show the actual accessibility target or checked status, such as `WCAG AA target`, only when that target is valid for the repository.

Add any other README badges that are relevant to the repository, such as version, licence, build or CI, deployment host, tests, coverage, framework, package, security, maintenance, documentation, or review status. Do not add badges for services, checks, frameworks, licences, or deployment platforms the repository does not actually use. Do not leave placeholder badge labels such as `{{WEBSITE_BADGE_LABEL}}`, `{{PROJECT_STATUS}}`, or similar unresolved unless the value is genuinely unknown and the final summary or issue update names the missing information.

When a website repository already has a root `README.md`, maintain it against the same template structure instead of replacing useful repository-specific content. Preserve accurate local details, then add or refresh missing template-aligned sections where relevant, including:

- Current release.
- Project purpose.
- About APES CIC.
- Website areas.
- Connected APES services.
- APES Habitat design direction.
- Recommended or actual repository structure.
- Getting started.
- Environment variables.
- Development workflow.
- Definition of done.
- Testing expectations.
- Priority issue types.
- Component standards.
- Documentation standards.
- Security and responsible disclosure.
- Contributors and access.
- Roadmap themes.
- Success measures.
- Organisation details.
- Licence and reuse.
- Disclaimer.

Update or create the root `README.md` whenever a change affects setup commands, development workflow, environment variables, repository structure, website areas, connected services, design direction, components, testing expectations, issue workflow, documentation standards, security, compliance, roadmap, success measures, release impact, current version, Change Log Hub status, changelog status, deployment notes, or operational maintenance guidance.

Before completing README work, verify that badges, links, logo references, public website URLs, commands, environment-variable examples, owner or review-status fields, organisation details, licence text, release date, version, and operational notes are accurate and grounded in the repository or user-provided context.

Keep README current-release notes aligned with `VERSION`, `/public/VERSION`, root `CHANGELOG.md`, `/public/CHANGELOG.md`, the website Change Log Hub, footer version text, release metadata, and generated public output wherever those files or records exist.

A README update must be mentioned in GitHub Issue updates, pull request descriptions, release notes, and final summaries whenever it is created, materially changed, or intentionally deferred.

A changelog entry is required when work changes public website content, intranet website content, page structure, forms, buttons, links, menus, navigation, CTAs, styling, layout, themes, branding, visual assets, accessibility, SEO, analytics, tracking, CRM, automation, embedded tools, third-party integrations, scripts, widgets, site configuration, build configuration, deployment configuration, generated website output, security, privacy, safeguarding, legal, compliance, finance, governance, HR, animal welfare content, or any user-visible bug fix.

If there is any uncertainty, assume documentation, changelog, version, release-record, and issue-tracking checks are required.

---

## 3. Start-of-Planning Release Verification

At the start of planning any APES CIC website or repository change, verify the current release state before deciding scope or implementation order.

For GitHub-only work, inspect the repository files and record the verified release state in the issue, pull request, review comment, or final summary. For Codex-led work, this verification must happen in Codex planning before edits begin.

Check, where present:

- root `VERSION`
- `/public/VERSION`
- root `CHANGELOG.md`
- `/public/CHANGELOG.md`
- the website Change Log Hub page or its source data
- README current-release notes
- release metadata files or site data that render footer version text, Change Log Hub entries, public release cards, or generated static snapshots

The planning note should identify:

- current version
- beta or stable status
- expected version bump type: major, minor, or patch
- required Change Log Hub, changelog, README, version, generated-output, and issue updates
- whether GitHub Issues need start, progress, or completion updates
- any mismatched version or release records that must be fixed before completion
- any uncertainty that must be resolved before completing the change

Do not complete the task while `VERSION`, `/public/VERSION`, Change Log Hub records, root changelog, public changelog, README current-release notes, footer version text, or generated output disagree, unless the user has explicitly asked to defer that sync.

---

## 4. GitHub Task Order And Audit Trail

GitHub work must follow a clear lifecycle so every change is traceable from request to issue, branch, validation, publication, review, merge, and closure.

Use this order for GitHub repository tasks unless the user gives a different workflow:

1. Understand the request and inspect the repository before deciding the implementation path.
2. Check whether there is an existing GitHub Issue. Ask for the issue number or link if one exists.
3. If no issue is provided, give the user clear options: create a new issue before implementation, proceed without an issue for a trivial correction, or prepare issue text for the user to open themselves.
4. Create or update the issue when approved. Capture the problem summary, expected outcome, affected repository areas, priority, labels, assignees, milestone, acceptance criteria, known blockers, and related pull requests or previous issues.
5. Triage the issue before implementation. Confirm scope, priority, release impact, compliance impact, affected files or routes, branch strategy, pull request expectations, and whether documentation, changelog, version, SEO, sitemap, footer, error-page, generated-output, or README updates are required.
6. Verify the release state and repository rules before editing. Check versions, changelogs, Change Log Hub records, README current-release notes, generated output, and repository-specific instructions where present.
7. Choose the branch path. Use an existing branch only after confirming it with the user, or create a short task-specific branch when the user approves branch creation.
8. Start or update the issue before implementation begins. Record the chosen scope, branch, planned validation, and any release-record work expected.
9. Implement the smallest safe change that satisfies the request while preserving APES CIC requirements and local repository conventions.
10. Keep the issue current while work commences. Add brief progress notes when work starts, a meaningful milestone is reached, a file is changed, scope changes, the task becomes blocked, validation completes, or follow-up work is discovered.
11. Update documentation, changelog, version, Change Log Hub, README, generated output, SEO, sitemap, footer, Newsroom, and error-page records where the change requires them.
12. Run relevant checks and inspect the diff. Include build, lint, typecheck, tests, link checks, accessibility checks, SEO checks, sitemap checks, footer checks, Newsroom checks, robots checks, and error-page checks where applicable.
13. Prepare a completion summary and issue update. State what changed, affected files or routes, validation performed, release-record updates, known limitations, and follow-up work.
14. Provide a concise proposed commit message covering all completed work before any commit is created.
15. Commit only when the user has explicitly asked for a commit or clearly approved committing. Use the proposed or user-supplied commit message.
16. Push only after the user confirms publishing the branch. Do not push automatically after committing.
17. Open or update a pull request when requested or when the agreed workflow requires one. Link the issue, summarize the change, list validation, and call out release-record, documentation, and follow-up status.
18. Support review by responding to comments, updating the branch, rerunning checks, and keeping the issue and pull request status accurate.
19. Merge only when the user has asked for merging, required checks and reviews are satisfied, release records are aligned, and any issue-closing behavior is confirmed.
20. Close the issue only when the user has asked for closure or the agreed workflow clearly allows closure after validated completion or merge. Add a brief closure note explaining what happened and any remaining follow-up.
21. Finish with a final summary covering changed files, validation, issue status, pull request or merge status, release-record status, remaining risks, and the commit message used or proposed.

When a GitHub action affects the work plan, ask concise questions before acting. Do not create issues, create or switch branches, open pull requests, commit, push, merge, or close issues unless the user has asked for that action or clearly agreed to it.

### Issue Update And Changed-File Reporting

When a task is attached to a GitHub Issue, keep that issue updated throughout the work rather than saving all context for the final reply.

Every issue update, pull request update, review response, and final reply for issue-tracked work must include a `Files changed` section. List each changed file path and add a short note explaining what was changed in that file. If no files changed since the previous update, say so explicitly.

Post an issue update when:

- work starts or resumes
- a file is changed
- scope, assumptions, or acceptance criteria change
- validation is completed or cannot be completed
- a blocker, risk, or follow-up item is discovered
- the implementation is ready for review
- work is completed, deferred, or handed back to the user

Do not close an issue until the issue contains a clear completion note with changed files, validation performed, release-record status, remaining limitations, and any follow-up work.

For pull requests, release notes, merge summaries, or GitHub issue comments, include:

- the user-facing or operational change
- affected files, routes, features, or repository areas
- a `Files changed` section listing each changed file path and a short explanation of the change made in that file
- documentation and changelog updates completed or still required
- release-record, generated-output, version, and README updates completed or still required
- validation performed, including build, test, link, accessibility, SEO, sitemap, footer, Newsroom, robots, and error-page checks where applicable
- known limitations, deferred work, or follow-up issues

Preferred GitHub coordination checkpoints:

1. Intake: confirm the request, repository, urgency, and whether the work is trivial or issue-tracked.
2. Issue: ask for an existing issue, offer to create one, or draft issue text when none is supplied.
3. Triage: confirm scope, priority, affected areas, acceptance criteria, labels, assignees, milestone, blockers, release impact, and required documentation or release-record updates.
4. Branch: confirm the branch to use or ask permission to create a task-specific branch.
5. Implementation: make the focused change and keep the issue updated as work commences.
6. Validation: run checks, inspect the diff, and update issue or pull request notes with the evidence.
7. Commit: provide a proposed commit message and commit only after approval.
8. Publish: push only after approval, then open or update a pull request when requested.
9. Review and merge: address review feedback, confirm merge readiness, and merge only with approval.
10. Closure: post the completion brief and close the issue only after approval or agreed workflow rules.

---

## 5. Repository Structure And Documentation Expectations

Keep repository instructions consistent with the actual repository structure and operating workflow.

When the repository is a website repository, treat the root-level `/public/` folder as the website source and deployment content folder unless repository-specific documentation clearly states otherwise.

Do not recommend moving core website files out of `/public/` without explicit instruction.

When a repository uses a different framework or source structure, follow the actual repository evidence and preserve the same APES CIC validation expectations.

Repository documentation should remain current with:

- setup and local development requirements
- build, deployment, and maintenance workflows
- content management and website editing conventions
- release and changelog expectations
- issue-tracking and support procedures
- repository-specific compliance, privacy, safeguarding, governance, animal welfare, finance, HR, or operational notes when relevant

---

## 6. Website Repository Standards

When the GitHub repository powers an APES CIC website, keep website checks explicit and auditable.

Apply these checks whenever website content, structure, navigation, routes, public pages, deployment behavior, generated output, release metadata, or user-visible behavior changes:

- Update page titles, meta descriptions, canonical URLs, Open Graph metadata, and structured data affected by the change.
- Update `sitemap.xml`, sitemap generation configuration, route manifests, or equivalent indexing files.
- Remove deleted, renamed, draft-only, private, duplicate, or noindex routes from the sitemap.
- Confirm robots and noindex rules remain correct for public, private, staging, portal, staff, volunteer, and student routes.
- Confirm navigation, footer links, Change Log Hub links, and canonical URLs point to the current live route.
- Confirm the APES universal footer remains present, accurate, accessible, and consistent across affected pages.
- Confirm footer links for the donation page, Privacy Policy page, Terms of Service page, and Change Log Hub remain present and correct where applicable.
- Confirm APES Newsroom routes remain correct for news, update, announcement, newsletter, footer, navigation, and article-related changes.
- Ensure branded, accessible error pages are present and validated after route, navigation, deployment, build, or hosting changes.

Required error-page expectations:

- A branded, accessible 404 page must exist where the website stack supports custom error pages.
- Framework-supported 403, 500, offline, maintenance, or fallback error pages should be added or verified where the stack supports them.
- Error pages must include plain-language copy, a route back to the home page, a route to contact or support, and relevant APES brand or footer treatment where technically possible.
- Error pages must not expose stack traces, secrets, internal system details, private URLs, or debugging output.

---

## 7. Change Log Hub And Release Record Format

The Change Log Hub is the public website release record. It must show every website change that affects users, operations, compliance, release metadata, generated output, or public maintenance history.

Use the `www.apes.org.uk` Change Log Hub setup as the APES reference pattern for structure, styling, and release-record depth.

Each Change Log Hub, root `CHANGELOG.md`, and `/public/CHANGELOG.md` entry should use this structure unless repository-specific guidance says otherwise:

```markdown
## [vX.Y.Z] - YYYY-MM-DD

<span class="pill pill-version">Version vX.Y.Z</span>
<span class="pill pill-status">Stable</span>
<span class="pill pill-type">Changed</span>
<span class="pill pill-fix">Fix</span>
<span class="pill pill-accessibility">Accessibility</span>

### Summary

Short plain-language description of the release.

### Detailed changes

- Specific implementation, content, route, styling, configuration, release-record, or documentation changes.

### Affected areas

- Website: website hostname
- Page or route: affected routes, shared components, generated output, or release records
- Files changed: relevant files or file groups
- User groups affected: relevant visitors, staff, volunteers, supporters, partners, or internal users
- Public impact: user-facing result
- Internal impact: maintenance, operational, compliance, or workflow result

### Version decision

- Previous version: vX.Y.Z
- New version: vX.Y.Z
- Version type: major, minor, or patch; beta or stable
- Reason for version bump: concise reason grounded in the change

### Validation

- Checks run: commands, source reviews, generated-output checks, or verification-only reviews
- Manual checks completed: routes, breakpoints, footer, Newsroom, sitemap, robots, error pages, or other relevant checks
- Known limitations: anything not fully verified
- Rollback notes: how to reverse the change if needed
```

Use pill classes consistently with the reference pattern:

- `pill pill-version` for the version label
- `pill pill-status` for `Stable` or `Beta`
- `pill pill-type` for added, changed, removed, or other release categories
- `pill pill-fix` for fixes
- `pill pill-accessibility` for accessibility changes
- `pill pill-compliance` for compliance, policy, safeguarding, legal, governance, privacy, or operational-risk changes

Keep the website Change Log Hub, root changelog, public changelog mirror, README current-release notes, and generated public output aligned before completing the task.

---

## 8. Versioning Rules

Use APES CIC semantic website versioning in this format:

```text
vMAJOR.MINOR.PATCH
vMAJOR.MINOR.PATCHb
```

The `v` prefix means version. The three numbers mean major updates, minor updates, and patches. The optional `b` suffix means the website is in beta.

Version bump rules:

- Major: breaking route, architecture, public journey, data, compliance, platform, or operational changes.
- Minor: new user-visible features, new public routes, broad content expansions, new shared components, or meaningful workflow additions that do not break existing journeys.
- Patch: fixes, copy edits, styling polish, metadata corrections, dependency or configuration fixes, generated-output syncs, and small maintenance changes.
- Beta suffix: keep `b` on versions while the website is in beta, for example `v2.2.0b`; remove it only when the website is intentionally promoted to stable.
- Stable versions omit the suffix, for example `v2.8.6`.

When a versioned change is required and the user has not already specified the version bump or release channel, ask the user to choose before updating version records:

1. Is this a Major, Minor, or Patch update?
2. Should the new version be Stable, formatted like `v0.0.0`, or Beta, formatted like `v0.0.0b`?

Use the user's answers as the version decision. If the user's answer is ambiguous, ask again for one explicit choice from each question before changing `VERSION`, changelog, Change Log Hub, README, footer, generated-output, or release metadata records.

Every qualifying change must update the version consistently across all canonical version locations before the work is complete. For APES website repositories, check root `VERSION`, `/public/VERSION`, Change Log Hub data or page output, root `CHANGELOG.md`, `/public/CHANGELOG.md`, README current-release notes, footer version display, and generated static snapshots where applicable.

Do not create a changelog entry without a matching version decision, and do not update a version without a matching changelog entry.

---

## 9. Changelog And Release Hygiene

Changelog and release records must explain repository changes clearly enough for maintainers, reviewers, and future agents to understand the operational impact.

A changelog entry is required when work changes public website content, intranet website content, page structure, forms, buttons, links, menus, navigation, CTAs, styling, layout, themes, branding, visual assets, accessibility, SEO, analytics, tracking, CRM, automation, embedded tools, third-party integrations, scripts, widgets, site configuration, build configuration, deployment configuration, generated website output, security, privacy, safeguarding, legal, compliance, finance, governance, HR, animal welfare content, or any user-visible bug fix.

Where the repository has both root and public changelogs, keep the root-level `CHANGELOG.md` and `/public/CHANGELOG.md` consistent unless repository-specific guidance states a different division of responsibility.

When versioning is present, version records must match the changelog, release notes, README current-release notes, footer version display, generated output, and any documentation references.

---

## 10. Working Method For GitHub Repository Tasks

When starting a task:

- Follow the GitHub task order in Section 4: intake, issue, triage, release verification, branch, implementation, validation, commit, push, pull request, review, merge, issue closure, and final summary.
- Inspect the relevant files before recommending or applying changes.
- Verify whether the work has an existing GitHub Issue. If the user has not provided one, ask whether to create a new issue, proceed without one for a trivial correction, or draft issue text for the user.
- Triage the issue or proposed issue by confirming scope, priority, affected files or routes, acceptance criteria, labels, assignees, milestone, blockers, branch or pull request linkage, and release or compliance impact.
- Verify version, Change Log Hub, changelog, README current-release notes, generated-output, and issue-tracking requirements before planning the implementation.
- Check existing project conventions, framework patterns, scripts, and documentation.
- Identify whether the work affects public pages, routes, SEO, sitemap records, changelogs, README content, versioning, footer links, Newsroom routing, generated output, error pages, or GitHub Issues.

When editing or preparing a GitHub update:

- Preserve existing structure and style where it is clear and usable.
- Keep changes focused on the user's request.
- Avoid broad refactors unless they are necessary for the task.
- Do not revert unrelated user, repository, branch, or pull request changes.
- Prefer clear, auditable wording for policy, compliance, changelog, versioning, and release notes.
- Keep GitHub Issue progress notes aligned with the agreed tracking approach, including start, progress, changed files, blocked, validation, completion, and follow-up updates where applicable.
- In every issue update, pull request update, review response, and final reply for issue-tracked work, list each changed file path and briefly explain the change made in that file.

Before completing work:

- Run relevant checks or explain why checks could not be run.
- Verify user-visible website behavior when the task affects pages, routes, navigation, styling, scripts, forms, or build output.
- Confirm whether Change Log Hub, root changelog, public changelog, README, version, generated-output, GitHub Issue, SEO, sitemap, footer, Newsroom, and error-page updates were completed or were not applicable.
- Prepare an issue completion or closure note that briefly states what changed, affected files or routes, validation performed, release-record updates, known limitations, and follow-up work.
- Ask for confirmation before closing an issue unless the user already requested issue closure or the agreed workflow clearly allows closure after validation or merge.
- Provide a concise proposed commit message covering all completed work so the user can use it when committing, even when no commit is created.
- Confirm whether the next GitHub step is commit, push, pull request creation or update, review response, merge, issue closure, or no further action.
- Summarize whether work was applied directly on GitHub, prepared for a pull request, left as guidance, merged, or still needs a user decision.

---

## 11. Final Response Requirements

When reporting completed repository work, clearly state:

- what was created, updated, reviewed, or left unchanged
- files changed, with each file path and a short explanation of the change made in that file
- what validation was performed and any remaining risks or follow-up work
- whether Change Log Hub, root changelog, public changelog, version records, README current-release notes, and generated release output were updated or why they were not applicable
- whether GitHub Issues were updated, should be updated, closed, left open, or were not applicable
- any issue completion or closure note prepared for the user, including a brief of what happened
- for website repositories, whether APES brand standards, Newsroom routing, universal footer compliance, footer links, SEO metadata, sitemap records, robots or noindex rules, and error pages were updated or verified, or why they were not applicable
- whether the work was applied directly to GitHub, prepared for pull request review, merged, or left pending user confirmation
- the next recommended GitHub step, such as commit, push, pull request, review, merge, issue closure, or no further action
- a concise proposed commit message covering all work completed in the task

Keep the final response concise, practical, and transparent about anything that still needs the user's decision.

---

## 12. Maintaining This AGENTS.md File

When updating this file, preserve APES CIC operational rules unless the user explicitly asks to replace them.

Prefer revisions that:

- keep the file suitable for GitHub repository governance rather than coding-agent execution only
- separate repository-wide rules from website-specific rules
- make required updates easy to audit in issues, pull requests, changelogs, releases, generated output, and documentation
- preserve mandatory APES CIC changelog, Change Log Hub, README, issue tracking, versioning, SEO, sitemap, universal footer, footer link, Newsroom routing, generated-output, and error-page requirements
- stay aligned with actual repository structure and release workflow

Do not invent repository facts, deployment steps, technical requirements, or third-party services that are not supported by the repository or the user's instructions.
