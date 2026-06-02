<?php
$rootPath = dirname(__DIR__);
$pageTitle = 'Change Log Hub';
$metaDescription = 'Audit-friendly release notes for APES Pet Care Clinic website updates, fixes, and navigation changes.';
$pageKicker = 'Website Release Record';
$heroTitle = 'Change Log Hub';
$heroLead = 'Track website releases, navigation updates, and validation notes for the APES Pet Care Clinic website.';
$activeNav = 'changelog';
require_once $rootPath . '/includes/page-init.php';
require_once $rootPath . '/includes/header.php';
?>
  <section class="hero">
    <article class="hero-panel reveal">
      <p class="page-kicker"><?= apes_escape($pageKicker) ?></p>
      <h1 class="hero-title"><?= apes_escape($heroTitle) ?></h1>
      <p class="hero-lead"><?= apes_escape($heroLead) ?></p>
      <div class="hero-badges">
        <?php foreach ($heroBadges as $badge): ?>
          <span><?= apes_escape($badge) ?></span>
        <?php endforeach; ?>
      </div>
    </article>
    <aside class="hero-logo reveal">
      <img src="/assets/logos/APES_Pet_Care_Clinic_logo_master_transparent.png" alt="APES Pet Care Clinic illustrated logo">
    </aside>
  </section>

  <section class="content-layout">
    <article class="article">
      <div class="content-card reveal changelog-version">
        <h2>[v0.0.1] - 2026-06-02</h2>
        <div class="pill-row">
          <span class="pill pill-version">Version v0.0.1</span>
          <span class="pill pill-status">Stable</span>
          <span class="pill pill-type">Changed</span>
          <span class="pill pill-fix">Navigation Fix</span>
        </div>

        <section class="changelog-section">
          <h3>Summary</h3>
          <p>Reorganised the public website navigation by moving informational links into a new Information mega menu, while also bringing the changelog and version records into alignment with APES CIC website governance requirements.</p>
        </section>

        <section class="changelog-section">
          <h3>Detailed changes</h3>
          <ul class="changelog-list">
            <li>Replaced separate top-level Events, News, Changelog, and Policies navigation items with a shared Information mega menu in the global header. This is a public-facing navigation change affecting the main user journey across the website.</li>
            <li>Added Events, external News, all policy routes, and the Change Log Hub to the new Information mega menu so informational and governance content is grouped consistently.</li>
            <li>Kept Bookings, Donate, About Us, and Contact as top-level items so service and action-led journeys remain easy to reach.</li>
            <li>Updated shared navigation state handling so Events, policy pages, and the Change Log Hub correctly highlight the Information menu when visited. This improves navigation clarity and accessibility orientation.</li>
            <li>Created a root-level VERSION file and root-level CHANGELOG.md, and updated this Change Log Hub page so all release records now use the same version number, release date, and audit details.</li>
            <li>Normalised the historic release notes to preserve useful website rebuild history while removing unsupported legacy version suffix usage.</li>
          </ul>
        </section>

        <section class="changelog-section">
          <h3>Type pills</h3>
          <ul class="changelog-list">
            <li><span class="pill pill-type">Changed</span> Global header navigation and informational content grouping.</li>
            <li><span class="pill pill-type">Fixed</span> Release record consistency between website and repository audit files.</li>
          </ul>
        </section>

        <section class="changelog-section">
          <h3>Fix pills</h3>
          <ul class="changelog-list">
            <li><span class="pill pill-fix">Navigation Fix</span> Information links are now grouped under one menu for clearer discovery.</li>
            <li><span class="pill pill-fix">Content Fix</span> Changelog records now follow the required APES CIC versioning and audit format.</li>
          </ul>
        </section>

        <section class="changelog-section">
          <h3>Affected areas</h3>
          <ul class="changelog-list">
            <li>Website: APES Pet Care Clinic public website.</li>
            <li>Page or route: Global header navigation, /events/, /policies/*, /changelog/, and external News link access.</li>
            <li>Files changed: includes/page-init.php, includes/header.php, assets/css/styles.css, changelog/index.php, VERSION, CHANGELOG.md.</li>
            <li>User groups affected: Public visitors, donors, service users, volunteers, and staff sharing policy or update links.</li>
            <li>Public impact: Informational pages are grouped into a single mega menu for easier browsing.</li>
            <li>Internal impact: Release records are now synchronised for future website maintenance and governance review.</li>
          </ul>
        </section>

        <section class="changelog-section">
          <h3>Version decision</h3>
          <ul class="changelog-list">
            <li>Previous version: v0.0.0b.</li>
            <li>New version: v0.0.1.</li>
            <li>Version type: Stable patch release.</li>
            <li>Reason for version bump: The change updates an existing navigation pattern and release record structure without changing routes or introducing a new workflow.</li>
          </ul>
        </section>

        <section class="changelog-section">
          <h3>Validation</h3>
          <ul class="changelog-list">
            <li>Checks run: PHP lint on updated PHP files.</li>
            <li>Manual checks completed: Reviewed the Information mega menu structure for desktop and mobile behaviour, active menu highlighting, and footer version source alignment.</li>
            <li>Known limitations: External News behaviour still depends on the availability of the separate APES News website.</li>
            <li>Rollback notes: Revert the shared header and menu arrays to restore separate top-level Events, News, Changelog, and Policies links, and reset VERSION plus changelog records to the previous release entry.</li>
          </ul>
        </section>
      </div>

      <div class="content-card reveal changelog-version">
        <h2>[v0.0.0b] - 2026-05-31</h2>
        <div class="pill-row">
          <span class="pill pill-version">Version v0.0.0b</span>
          <span class="pill pill-status">Beta</span>
          <span class="pill pill-type">Added</span>
          <span class="pill pill-type">Changed</span>
        </div>

        <section class="changelog-section">
          <h3>Summary</h3>
          <p>Recorded the beta rebuild baseline for the restored APES Pet Care Clinic website and preserved the initial shared layout, route, and integration work as the historic starting point for subsequent stable releases.</p>
        </section>

        <section class="changelog-section">
          <h3>Detailed changes</h3>
          <ul class="changelog-list">
            <li>Rebuilt live routes to shared PHP layouts using reusable header and footer includes. This was a public-facing structural website change.</li>
            <li>Added the initial Services mega menu and reorganised the main navigation around shared templates.</li>
            <li>Updated the bookings experience with an embedded booking form and site-wide external booking calls to action.</li>
            <li>Added the first website changelog page and global footer version display during the beta rebuild stage.</li>
            <li>Integrated Chatwoot live chat, OneSignal push messaging, and legacy News redirect handling as operational website integrations.</li>
            <li>Normalised this historic entry from earlier legacy notes that used an unsupported suffix, preserving the baseline history in the approved beta version format.</li>
          </ul>
        </section>

        <section class="changelog-section">
          <h3>Type pills</h3>
          <ul class="changelog-list">
            <li><span class="pill pill-type">Added</span> Shared layouts, changelog page, and major route scaffolding.</li>
            <li><span class="pill pill-type">Changed</span> Navigation, copy, service wording, and booking journey content.</li>
          </ul>
        </section>

        <section class="changelog-section">
          <h3>Fix pills</h3>
          <ul class="changelog-list">
            <li><span class="pill pill-fix">Content Fix</span> Corrected species wording and clarified clinic scope messaging.</li>
            <li><span class="pill pill-fix">Integration Fix</span> Updated News links and added redirect handling for legacy News routes.</li>
          </ul>
        </section>

        <section class="changelog-section">
          <h3>Affected areas</h3>
          <ul class="changelog-list">
            <li>Website: APES Pet Care Clinic public website.</li>
            <li>Page or route: Shared layouts, core service pages, bookings, contact actions, news handling, and changelog route.</li>
            <li>Files changed: Historic rebuild baseline across shared templates, service routes, booking route, and integration scripts.</li>
            <li>User groups affected: Public visitors, booking users, donors, and staff maintaining the restored website.</li>
            <li>Public impact: Restored and standardised the public-facing website structure after content reconstruction.</li>
            <li>Internal impact: Established the template and integration baseline used by later releases.</li>
          </ul>
        </section>

        <section class="changelog-section">
          <h3>Version decision</h3>
          <ul class="changelog-list">
            <li>Previous version: No canonical version file was recorded.</li>
            <li>New version: v0.0.0b.</li>
            <li>Version type: Beta baseline release.</li>
            <li>Reason for version bump: The restored website was not final and acted as the beta foundation for later public refinements.</li>
          </ul>
        </section>

        <section class="changelog-section">
          <h3>Validation</h3>
          <ul class="changelog-list">
            <li>Checks run: Historic validation not fully recorded in the legacy notes.</li>
            <li>Manual checks completed: Legacy navigation, route, and service content review performed during the rebuild stage.</li>
            <li>Known limitations: Historic detail has been preserved from available release notes and may not reflect every rebuild-era file touched.</li>
            <li>Rollback notes: Restore the pre-rebuild exported site snapshot if the rebuilt shared-template version needs to be withdrawn.</li>
          </ul>
        </section>
      </div>
    </article>
    <?php require $rootPath . '/includes/clinic-sidebar.php'; ?>
  </section>
<?php require_once $rootPath . '/includes/footer.php'; ?>
