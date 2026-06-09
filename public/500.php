<?php
$rootPath = __DIR__;
$pageTitle = 'Temporary Problem';
$metaDescription = 'The APES Pet Care Clinic website hit a temporary problem. Please try again in a moment or contact the clinic if you need help now.';
$pageKicker = 'Temporary problem';
$heroTitle = 'Something went wrong on our side';
$heroLead = 'Please try the page again in a moment. If you need urgent help with a booking or support enquiry, use our contact route instead.';
$canonicalPath = '/500.php';
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
        <h2>What to do next</h2>
        <p>Reload the page, return to the homepage, or contact the clinic if you need help reaching the right route.</p>
        <p><a class="btn btn-primary" href="/">Return to the homepage</a></p>
        <p><a class="btn btn-outline" href="/contact/">Contact the clinic</a></p>
      </div>
    </article>
    <?php require $rootPath . '/includes/clinic-sidebar.php'; ?>
  </section>
<?php require_once $rootPath . '/includes/footer.php'; ?>
