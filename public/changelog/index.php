<?php
$rootPath = dirname(__DIR__);
$pageTitle = 'Change Log Hub';
$metaDescription = 'Track major releases, fixes, compliance changes, and user-facing improvements for the APES Pet Care Clinic website.';
$pageKicker = 'Website Release Record';
$heroTitle = 'Change Log Hub';
$heroLead = 'Track every major release for this website, including updates, fixes, compliance changes, and user-facing improvements.';
$activeNav = 'changelog';
require_once $rootPath . '/includes/page-init.php';

$releaseEntries = [
    [
        'version' => 'v0.0.3',
        'date' => '2026-06-02',
        'title' => 'Navigation reorder and mega menu descriptions',
        'status' => 'Stable',
        'statusKey' => 'stable',
        'current' => true,
        'impact' => 'public-facing operational',
        'types' => 'changed fixed',
        'pills' => [
            ['class' => 'pill-version', 'label' => 'Version v0.0.3'],
            ['class' => 'pill-status', 'label' => 'Stable'],
            ['class' => 'pill-type', 'label' => 'Changed'],
            ['class' => 'pill-type', 'label' => 'Fixed'],
            ['class' => 'pill-fix', 'label' => 'Navigation Fix'],
            ['class' => 'pill-fix', 'label' => 'Content Fix'],
        ],
        'summary' => 'Reordered the main website navigation to prioritise Services and Information, moved About Us into the Information mega menu, and added descriptive supporting copy to every mega-menu item.',
        'details' => [
            'Reordered the shared top-level header navigation to Home, Services, Information, Bookings, Donate, and Contact so the primary public journey matches the requested sequence.',
            'Removed About Us as a standalone top-level link and added it to the Information mega menu without changing the /about-us/ route.',
            'Added short descriptive summaries to every item inside the Services and Information mega menus so visitors can understand destination purpose before clicking.',
            'Updated shared menu rendering so each mega-menu card now presents a title and description while preserving external-link handling for the News destination.',
            'Expanded Information menu active-state handling so the group stays highlighted on About Us, Events, policy pages, and the Change Log Hub.',
            'Updated the canonical VERSION file plus both changelog records so the release remains synchronised under the new v0.0.3 stable patch entry.',
        ],
        'typePills' => [
            ['class' => 'pill-type', 'label' => 'Changed', 'description' => 'Reordered the shared header navigation and enriched mega-menu card content with supporting descriptions.'],
            ['class' => 'pill-type', 'label' => 'Fixed', 'description' => 'Corrected the information architecture so About Us now sits inside the Information menu and menu intent is clearer to visitors.'],
        ],
        'fixPills' => [
            ['class' => 'pill-fix', 'label' => 'Navigation Fix', 'description' => 'The main navigation now follows the requested six-item order and keeps related informational routes grouped together.'],
            ['class' => 'pill-fix', 'label' => 'Content Fix', 'description' => 'Mega-menu items now explain their destination purpose with concise descriptive copy.'],
        ],
        'affectedAreas' => [
            'Website' => 'APES Pet Care Clinic public website.',
            'Page or route' => 'Shared header navigation, /about-us/, /events/, /policies/*, /changelog/, /bookings/, /donate/, and /contact/.',
            'Files changed' => 'includes/page-init.php, includes/header.php, assets/css/styles.css, changelog/index.php, VERSION, CHANGELOG.md.',
            'User groups affected' => 'Public visitors, donors, service users, volunteers, and staff sharing key website routes.',
            'Public impact' => 'Visitors see the requested navigation order and clearer mega-menu destination descriptions across desktop and mobile navigation.',
            'Internal impact' => 'Shared menu data now carries reusable descriptions for future navigation maintenance and release auditing.',
        ],
        'versionDecision' => [
            'Previous version' => 'v0.0.2',
            'New version' => 'v0.0.3',
            'Version type' => 'Stable patch release',
            'Reason for version bump' => 'This is a low-risk public navigation and content clarification update that improves an existing user journey without changing routes or introducing a new workflow.',
        ],
        'validation' => [
            'Checks run' => 'Reviewed shared menu data, header rendering, and synchronized release records by diff inspection. No local PHP CLI binary was available for automated linting in this environment.',
            'Manual checks completed' => 'Verified the intended top-level menu order, About Us placement within Information, active-state grouping, external News link handling, and the presence of descriptions for every Services and Information mega-menu item.',
            'Known limitations' => 'Visual behaviour was reviewed statically in code only, so a live browser pass may still be helpful for final spacing confirmation on small screens.',
            'Rollback notes' => 'Revert the shared navigation arrays, header markup, mega-menu card styling, VERSION, and both changelog entries to restore the previous top-level About Us link and earlier menu presentation.',
        ],
    ],
    [
        'version' => 'v0.0.2',
        'date' => '2026-06-02',
        'title' => 'Change Log Hub alignment and naming standardisation',
        'status' => 'Stable',
        'statusKey' => 'stable',
        'current' => false,
        'impact' => 'public-facing operational',
        'types' => 'changed fixed compliance',
        'pills' => [
            ['class' => 'pill-version', 'label' => 'Version v0.0.2'],
            ['class' => 'pill-status', 'label' => 'Stable'],
            ['class' => 'pill-type', 'label' => 'Changed'],
            ['class' => 'pill-type', 'label' => 'Fixed'],
            ['class' => 'pill-compliance', 'label' => 'Compliance'],
            ['class' => 'pill-fix', 'label' => 'Navigation Fix'],
            ['class' => 'pill-fix', 'label' => 'Content Fix'],
        ],
        'summary' => 'Standardised every public reference to the Change Log Hub and rebuilt the /changelog/ page so it follows the APES CIC searchable release-record pattern.',
        'details' => [
            'Updated shared Information navigation and footer references so the website consistently labels the release record as Change Log Hub.',
            'Kept the existing /changelog/ route as the canonical public URL while rebuilding its page content into a dedicated Change Log Hub with current-version status pills.',
            'Added searchable, filterable timeline controls plus expand-all and collapse-all actions for release entries, while keeping all entries readable when JavaScript is unavailable.',
            'Converted release entries into accessible collapsible cards with clearer audit sections for summary, detailed changes, affected areas, version decisions, validation, and rollback notes.',
            'Revised existing release copy so the website Change Log Hub page, root CHANGELOG.md, and VERSION file all remain aligned under the same APES CIC naming and governance standard.',
        ],
        'typePills' => [
            ['class' => 'pill-type', 'label' => 'Changed', 'description' => 'Updated shared navigation labels, footer links, page metadata, and release record presentation.'],
            ['class' => 'pill-type', 'label' => 'Fixed', 'description' => 'Corrected inconsistent public naming so the website now uses Change Log Hub throughout visible release references.'],
            ['class' => 'pill-compliance', 'label' => 'Compliance', 'description' => 'Brought the website release record into line with the APES CIC Change Log Hub structure, visibility, and audit-detail requirements.'],
        ],
        'fixPills' => [
            ['class' => 'pill-fix', 'label' => 'Navigation Fix', 'description' => 'The Information menu and footer now point to the release record using the required Change Log Hub label.'],
            ['class' => 'pill-fix', 'label' => 'Content Fix', 'description' => 'Release record wording, metadata, and historical entries now use consistent Change Log Hub naming.'],
        ],
        'affectedAreas' => [
            'Website' => 'APES Pet Care Clinic public website.',
            'Page or route' => 'Shared header and footer, plus /changelog/.',
            'Files changed' => 'includes/page-init.php, includes/header.php, includes/footer.php, assets/css/styles.css, assets/js/site.js, changelog/index.php, VERSION, CHANGELOG.md.',
            'User groups affected' => 'Public visitors, donors, service users, volunteers, staff, directors, and future website maintainers.',
            'Public impact' => 'Visitors can now find and understand the Change Log Hub more easily from shared navigation and footer routes.',
            'Internal impact' => 'Website release records are now easier to audit, search, filter, and maintain against APES CIC governance requirements.',
        ],
        'versionDecision' => [
            'Previous version' => 'v0.0.1',
            'New version' => 'v0.0.2',
            'Version type' => 'Stable patch release',
            'Reason for version bump' => 'This update improves existing release-record naming, visibility, and structure without changing the route set or adding a new user workflow.',
        ],
        'validation' => [
            'Checks run' => 'Ran a reference sweep for visible Change Log Hub labels plus a Git diff review of shared templates, styles, scripts, and release-record files. PHP lint could not be run because no local PHP CLI binary is available in this environment.',
            'Manual checks completed' => 'Reviewed Information menu wording, footer Change Log Hub link, current-version display, filter controls, and details-card behaviour with and without JavaScript support.',
            'Known limitations' => 'Search, filters, and expand or collapse controls rely on JavaScript, but all release content remains visible and individually expandable without it.',
            'Rollback notes' => 'Revert the shared navigation labels, footer Change Log Hub link, Change Log Hub page structure, VERSION, and synchronized changelog entry to restore the previous release-record presentation.',
        ],
    ],
    [
        'version' => 'v0.0.1',
        'date' => '2026-06-02',
        'title' => 'Information menu and Change Log Hub governance alignment',
        'status' => 'Stable',
        'statusKey' => 'stable',
        'current' => false,
        'impact' => 'public-facing operational',
        'types' => 'changed fixed compliance',
        'pills' => [
            ['class' => 'pill-version', 'label' => 'Version v0.0.1'],
            ['class' => 'pill-status', 'label' => 'Stable'],
            ['class' => 'pill-type', 'label' => 'Changed'],
            ['class' => 'pill-type', 'label' => 'Fixed'],
            ['class' => 'pill-compliance', 'label' => 'Compliance'],
            ['class' => 'pill-fix', 'label' => 'Navigation Fix'],
            ['class' => 'pill-fix', 'label' => 'Content Fix'],
        ],
        'summary' => 'Reorganised the public website navigation by moving informational links into a new Information mega menu, while also bringing the Change Log Hub and version records into alignment with APES CIC website governance requirements.',
        'details' => [
            'Replaced separate top-level Events, News, Change Log Hub, and Policies navigation items with a shared Information mega menu in the global header. This was a public-facing navigation change affecting the main user journey across the website.',
            'Added Events, external News, all policy routes, and the Change Log Hub to the new Information mega menu so informational and governance content is grouped consistently.',
            'Kept Bookings, Donate, About Us, and Contact as top-level items so service and action-led journeys remain easy to reach.',
            'Updated shared navigation state handling so Events, policy pages, and the Change Log Hub correctly highlight the Information menu when visited. This improved navigation clarity and accessibility orientation.',
            'Created a root-level VERSION file and updated both the root-level CHANGELOG.md and website Change Log Hub page so all release records used the same version number, release date, and audit details.',
            'Normalised the historic release notes to preserve useful website rebuild history while removing unsupported legacy version suffix usage.',
        ],
        'typePills' => [
            ['class' => 'pill-type', 'label' => 'Changed', 'description' => 'Reworked the shared header navigation and grouped informational pages under the Information menu.'],
            ['class' => 'pill-type', 'label' => 'Fixed', 'description' => 'Aligned website and repository release records under one versioning and audit structure.'],
            ['class' => 'pill-compliance', 'label' => 'Compliance', 'description' => 'Established the initial APES CIC governance-aligned Change Log Hub and repository release audit pairing.'],
        ],
        'fixPills' => [
            ['class' => 'pill-fix', 'label' => 'Navigation Fix', 'description' => 'Information links were grouped under one menu for clearer discovery.'],
            ['class' => 'pill-fix', 'label' => 'Content Fix', 'description' => 'Change Log Hub records began following the required APES CIC versioning and audit format.'],
        ],
        'affectedAreas' => [
            'Website' => 'APES Pet Care Clinic public website.',
            'Page or route' => 'Global header navigation, /events/, /policies/*, /changelog/, and external News link access.',
            'Files changed' => 'includes/page-init.php, includes/header.php, assets/css/styles.css, changelog/index.php, VERSION, CHANGELOG.md.',
            'User groups affected' => 'Public visitors, donors, service users, volunteers, and staff sharing policy or update links.',
            'Public impact' => 'Informational pages were grouped into a single mega menu for easier browsing.',
            'Internal impact' => 'Release records were synchronised for future website maintenance and governance review.',
        ],
        'versionDecision' => [
            'Previous version' => 'v0.0.0b',
            'New version' => 'v0.0.1',
            'Version type' => 'Stable patch release',
            'Reason for version bump' => 'The change updated an existing navigation pattern and release record structure without changing routes or introducing a new workflow.',
        ],
        'validation' => [
            'Checks run' => 'PHP lint on updated PHP files.',
            'Manual checks completed' => 'Reviewed the Information mega menu structure for desktop and mobile behaviour, active menu highlighting, and footer version source alignment.',
            'Known limitations' => 'External News behaviour still depends on the availability of the separate APES News website.',
            'Rollback notes' => 'Revert the shared header and menu arrays to restore separate top-level Events, News, Change Log Hub, and Policies links, and reset VERSION plus changelog records to the previous release entry.',
        ],
    ],
    [
        'version' => 'v0.0.0b',
        'date' => '2026-05-31',
        'title' => 'Beta rebuild baseline',
        'status' => 'Beta',
        'statusKey' => 'beta',
        'current' => false,
        'impact' => 'public-facing operational',
        'types' => 'added changed',
        'pills' => [
            ['class' => 'pill-version', 'label' => 'Version v0.0.0b'],
            ['class' => 'pill-status', 'label' => 'Beta'],
            ['class' => 'pill-type', 'label' => 'Added'],
            ['class' => 'pill-type', 'label' => 'Changed'],
            ['class' => 'pill-fix', 'label' => 'Content Fix'],
            ['class' => 'pill-fix', 'label' => 'Integration Fix'],
        ],
        'summary' => 'Recorded the beta rebuild baseline for the restored APES Pet Care Clinic website and preserved the initial shared layout, route, and integration work as the historic starting point for subsequent stable releases.',
        'details' => [
            'Rebuilt live routes to shared PHP layouts using reusable header and footer includes. This was a public-facing structural website change.',
            'Added the initial Services mega menu and reorganised the main navigation around shared templates.',
            'Updated the bookings experience with an embedded booking form and site-wide external booking calls to action.',
            'Added the first website Change Log Hub page and global footer version display during the beta rebuild stage.',
            'Integrated Chatwoot live chat, OneSignal push messaging, and legacy News redirect handling as operational website integrations.',
            'Normalised this historic entry from earlier legacy notes that used an unsupported suffix, preserving the baseline history in the approved beta version format.',
        ],
        'typePills' => [
            ['class' => 'pill-type', 'label' => 'Added', 'description' => 'Introduced shared layouts, the first Change Log Hub route, and major route scaffolding.'],
            ['class' => 'pill-type', 'label' => 'Changed', 'description' => 'Updated navigation, copy, service wording, and booking journey content during the rebuild baseline.'],
        ],
        'fixPills' => [
            ['class' => 'pill-fix', 'label' => 'Content Fix', 'description' => 'Corrected species wording and clarified clinic scope messaging.'],
            ['class' => 'pill-fix', 'label' => 'Integration Fix', 'description' => 'Updated News links and added redirect handling for legacy News routes.'],
        ],
        'affectedAreas' => [
            'Website' => 'APES Pet Care Clinic public website.',
            'Page or route' => 'Shared layouts, core service pages, bookings, contact actions, news handling, and the Change Log Hub route.',
            'Files changed' => 'Historic rebuild baseline across shared templates, service routes, booking route, and integration scripts.',
            'User groups affected' => 'Public visitors, booking users, donors, and staff maintaining the restored website.',
            'Public impact' => 'Restored and standardised the public-facing website structure after content reconstruction.',
            'Internal impact' => 'Established the template and integration baseline used by later releases.',
        ],
        'versionDecision' => [
            'Previous version' => 'No canonical version file was recorded.',
            'New version' => 'v0.0.0b',
            'Version type' => 'Beta baseline release',
            'Reason for version bump' => 'The restored website was not final and acted as the beta foundation for later public refinements.',
        ],
        'validation' => [
            'Checks run' => 'Historic validation was not fully recorded in the legacy notes.',
            'Manual checks completed' => 'Legacy navigation, route, and service content review was performed during the rebuild stage.',
            'Known limitations' => 'Historic detail has been preserved from available release notes and may not reflect every rebuild-era file touched.',
            'Rollback notes' => 'Restore the pre-rebuild exported site snapshot if the rebuilt shared-template version needs to be withdrawn.',
        ],
    ],
];

$currentRelease = $releaseEntries[0];
require_once $rootPath . '/includes/header.php';
?>
  <section class="change-log-page" data-change-log-root>
    <section class="change-log-hero reveal">
      <p class="page-kicker"><?= apes_escape($pageKicker) ?></p>
      <h1><?= apes_escape($heroTitle) ?></h1>
      <p class="change-log-subtitle"><?= apes_escape($heroLead) ?></p>
      <p class="current-version">Current version: <strong><?= apes_escape($currentRelease['version']) ?></strong></p>
      <div class="pill-row change-log-current-pills">
        <span class="pill pill-version">Version <?= apes_escape($currentRelease['version']) ?></span>
        <span class="pill pill-status"><?= apes_escape($currentRelease['status']) ?></span>
      </div>
    </section>

    <section class="change-log-panel reveal">
      <h2>Version Timeline</h2>
      <div class="change-log-controls">
        <label class="sr-only" for="changeLogSearch">Search version history</label>
        <input id="changeLogSearch" type="search" placeholder="Search versions, files, release notes">
        <button type="button" class="change-log-filter" data-filter="all" aria-pressed="true">All releases</button>
        <button type="button" class="change-log-filter" data-filter="current" aria-pressed="false">Current release</button>
        <button type="button" class="change-log-filter" data-filter="stable" aria-pressed="false">Stable</button>
        <button type="button" class="change-log-filter" data-filter="beta" aria-pressed="false">Beta</button>
        <button type="button" class="change-log-filter" data-filter="added" aria-pressed="false">Added</button>
        <button type="button" class="change-log-filter" data-filter="changed" aria-pressed="false">Changed</button>
        <button type="button" class="change-log-filter" data-filter="fixed" aria-pressed="false">Fixed</button>
        <button type="button" class="change-log-filter" data-filter="compliance" aria-pressed="false">Compliance</button>
        <button type="button" class="change-log-action" data-action="expand-all">Expand all</button>
        <button type="button" class="change-log-action" data-action="collapse-all">Collapse all</button>
      </div>

      <p class="change-log-empty" data-change-log-empty hidden>No matching release entries found.</p>

      <div class="change-log-timeline">
        <?php foreach ($releaseEntries as $entry): ?>
          <details
            class="release-card"
            data-version="<?= apes_escape($entry['version']) ?>"
            data-current="<?= $entry['current'] ? 'true' : 'false' ?>"
            data-status="<?= apes_escape($entry['statusKey']) ?>"
            data-types="<?= apes_escape($entry['types']) ?>"
            data-impact="<?= apes_escape($entry['impact']) ?>"
            <?= $entry['current'] ? ' open' : '' ?>
          >
            <summary>
              <span class="release-summary-main">
                <span class="release-version"><?= apes_escape($entry['version']) ?></span>
                <span class="release-title"><?= apes_escape($entry['title']) ?></span>
              </span>
              <span class="release-summary-meta">
                <?php if ($entry['current']): ?>
                  <span class="pill pill-current">Current release</span>
                <?php endif; ?>
                <span class="release-date"><?= apes_escape($entry['date']) ?></span>
              </span>
            </summary>

            <div class="release-body">
              <div class="release-pills">
                <?php foreach ($entry['pills'] as $pill): ?>
                  <span class="pill <?= apes_escape($pill['class']) ?>"><?= apes_escape($pill['label']) ?></span>
                <?php endforeach; ?>
              </div>

              <section class="release-section">
                <h3>Summary</h3>
                <p><?= apes_escape($entry['summary']) ?></p>
              </section>

              <section class="release-section">
                <h3>Detailed changes</h3>
                <ul class="release-section-list">
                  <?php foreach ($entry['details'] as $detail): ?>
                    <li><?= apes_escape($detail) ?></li>
                  <?php endforeach; ?>
                </ul>
              </section>

              <section class="release-section">
                <h3>Type pills</h3>
                <ul class="release-section-list">
                  <?php foreach ($entry['typePills'] as $pill): ?>
                    <li><span class="pill <?= apes_escape($pill['class']) ?>"><?= apes_escape($pill['label']) ?></span> <?= apes_escape($pill['description']) ?></li>
                  <?php endforeach; ?>
                </ul>
              </section>

              <section class="release-section">
                <h3>Fix pills</h3>
                <ul class="release-section-list">
                  <?php foreach ($entry['fixPills'] as $pill): ?>
                    <li><span class="pill <?= apes_escape($pill['class']) ?>"><?= apes_escape($pill['label']) ?></span> <?= apes_escape($pill['description']) ?></li>
                  <?php endforeach; ?>
                </ul>
              </section>

              <section class="release-section">
                <h3>Affected areas</h3>
                <ul class="release-section-list">
                  <?php foreach ($entry['affectedAreas'] as $label => $value): ?>
                    <li><strong><?= apes_escape($label) ?>:</strong> <?= apes_escape($value) ?></li>
                  <?php endforeach; ?>
                </ul>
              </section>

              <section class="release-section">
                <h3>Version decision</h3>
                <ul class="release-section-list">
                  <?php foreach ($entry['versionDecision'] as $label => $value): ?>
                    <li><strong><?= apes_escape($label) ?>:</strong> <?= apes_escape($value) ?></li>
                  <?php endforeach; ?>
                </ul>
              </section>

              <section class="release-section">
                <h3>Validation</h3>
                <ul class="release-section-list">
                  <?php foreach ($entry['validation'] as $label => $value): ?>
                    <li><strong><?= apes_escape($label) ?>:</strong> <?= apes_escape($value) ?></li>
                  <?php endforeach; ?>
                </ul>
              </section>
            </div>
          </details>
        <?php endforeach; ?>
      </div>
    </section>
  </section>
<?php require_once $rootPath . '/includes/footer.php'; ?>
