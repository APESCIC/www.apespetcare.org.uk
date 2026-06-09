<?php
$rootPath = __DIR__;
$pageTitle = 'Page Not Found';
$metaDescription = 'The page you were looking for could not be found. Return to the APES Pet Care Clinic homepage or use the site navigation to continue.';
$pageKicker = 'Page not found';
$heroTitle = 'We could not find that page';
$heroLead = 'The link may be out of date, the page may have moved, or the address may have been typed incorrectly.';
$canonicalPath = '/404.php';
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
      <div class="hero-badges">
        <span>Check the address</span>
        <span>Use the homepage</span>
        <span>Contact the clinic if needed</span>
      </div>
    </article>
    <aside class="hero-logo reveal">
      <img src="/assets/logos/APES_Pet_Care_Clinic_logo_master_transparent.png" alt="">
    </aside>
  </section>

  <section class="content-layout">
    <article class="article">
      <div class="content-card reveal">
        <h2>Try one of these routes instead</h2>
        <div class="service-grid">
          <a class="service-card" href="/">Home</a>
          <a class="service-card" href="/services/">Services Hub</a>
          <a class="service-card" href="/bookings/">Bookings</a>
          <a class="service-card" href="/contact/">Contact</a>
        </div>
      </div>
    </article>
    <?php require $rootPath . '/includes/clinic-sidebar.php'; ?>
  </section>
<?php require_once $rootPath . '/includes/footer.php'; ?>
