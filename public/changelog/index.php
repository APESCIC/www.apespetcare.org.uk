<?php
$rootPath = dirname(__DIR__);
$pageTitle = 'Website Changelog';
$metaDescription = 'Track APES Pet Care Clinic website versions, changes, fixes, and patches.';
$pageKicker = 'Release Notes';
$heroTitle = 'Website Changelog';
$heroLead = 'Track the latest website updates, including feature changes, fixes, and patches.';
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
        <h2>APES Pet Care Clinic v0.0.0b</h2>
        <p class="changelog-meta">Released: 31 May 2026</p>

        <section class="changelog-section">
          <h3>Changes</h3>
          <ul class="changelog-list">
            <li>Refactored live routes to shared PHP layouts using reusable header/footer includes.</li>
            <li>Added a Services mega menu and reorganized main navigation with Contact as the final menu item.</li>
            <li>Updated booking experience with embedded booking form on the bookings page and external booking CTAs site-wide.</li>
            <li>Added a dedicated website changelog page and global version display.</li>
          </ul>
        </section>

        <section class="changelog-section">
          <h3>Fixes</h3>
          <ul class="changelog-list">
            <li>Corrected service wording so species pages match the correct animal type.</li>
            <li>Rewrote major copy sections for clearer grammar and a more professional tone.</li>
            <li>Standardized first-aid scope messaging across pages to clearly state no operations or invasive procedures.</li>
            <li>Updated News links and routes to the external APES News website.</li>
          </ul>
        </section>

        <section class="changelog-section">
          <h3>Patches</h3>
          <ul class="changelog-list">
            <li>Integrated Chatwoot live chat script across shared header.</li>
            <li>Integrated OneSignal web push script and footer subscription container.</li>
            <li>Patched Contact Clinic buttons to open the support ticket in a popup with fallback behavior.</li>
            <li>Added redirect handling for legacy <code>/news/*</code> routes.</li>
          </ul>
        </section>
      </div>

      <div class="content-card reveal changelog-version">
        <h2>APES Pet Care Clinic v0.0.0a</h2>
        <p class="changelog-meta">Released: 31 May 2026 (baseline snapshot)</p>

        <section class="changelog-section">
          <h3>Changes</h3>
          <ul class="changelog-list">
            <li>Initial rebuilt site structure prepared from crawl-based content restoration.</li>
            <li>Core service, policy, and clinic route layout established.</li>
          </ul>
        </section>

        <section class="changelog-section">
          <h3>Fixes</h3>
          <ul class="changelog-list">
            <li>Basic route consistency and navigation scaffolding applied.</li>
          </ul>
        </section>

        <section class="changelog-section">
          <h3>Patches</h3>
          <ul class="changelog-list">
            <li>Visual theme, animation hooks, and baseline responsive behavior added.</li>
          </ul>
        </section>
      </div>
    </article>
    <?php require $rootPath . '/includes/clinic-sidebar.php'; ?>
  </section>
<?php require_once $rootPath . '/includes/footer.php'; ?>
