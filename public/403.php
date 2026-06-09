<?php
$rootPath = __DIR__;
$pageTitle = 'Access Denied';
$metaDescription = 'This page is not available to the public. Return to the APES Pet Care Clinic homepage or contact the clinic team for help.';
$pageKicker = 'Access restricted';
$heroTitle = 'This page is not available';
$heroLead = 'If you expected to see a page here, return to the homepage or contact the clinic team and we will help you find the right route.';
$canonicalPath = '/403.php';
$metaRobots = 'noindex,nofollow';
$showNotice = false;
require_once $rootPath . '/includes/page-init.php';
require_once $rootPath . '/includes/header.php';
?>
  <section class="hero">
    <article class="hero-panel reveal">
      <p class="page-kicker"><?= apes_escape($pageKicker) ?></p>
      <h1 class="hero-title"><?= apes_escape($heroTitle) ?></h1>
      <p class="hero-lead"><?= apes_escape($heroLead) ?></p>
    </article>
    <aside class="hero-logo reveal">
      <img src="/assets/logos/APES_Pet_Care_Clinic_logo_master_transparent.png" alt="">
    </aside>
  </section>

  <section class="content-layout">
    <article class="article">
      <div class="content-card reveal">
        <h2>What you can do next</h2>
        <p>This route may be restricted, unavailable, or not intended for public visitors.</p>
        <p><a class="btn btn-primary" href="/">Return to the homepage</a></p>
        <p><a class="btn btn-outline" href="/contact/">Contact the clinic</a></p>
      </div>
    </article>
    <?php require $rootPath . '/includes/clinic-sidebar.php'; ?>
  </section>
<?php require_once $rootPath . '/includes/footer.php'; ?>
