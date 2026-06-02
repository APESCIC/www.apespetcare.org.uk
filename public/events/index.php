<?php
$rootPath = dirname(__DIR__);
$pageTitle = 'Events';
$metaDescription = 'See APES Pet Care Clinic events, awareness sessions, and community engagement activities.';
$pageKicker = 'Community Events';
$heroTitle = 'Events And Outreach';
$heroLead = 'We run and support events that promote animal welfare, responsible ownership, and practical pet health education.';
$activeNav = 'events';
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
      <div class="content-card reveal">
        <h2>Pet Welfare Education</h2>
        <p>Our events focus on species-aware care, preventive welfare, and practical support for owners in the community.</p>
      </div>
      <div class="content-card reveal">
        <h2>Want To Collaborate?</h2>
        <p>If you run a community venue or local project and want to host a pet welfare session, contact our team.</p>
        <p><a class="btn btn-outline js-contact-ticket" href="<?= apes_escape($contactTicketUrl) ?>">Contact Clinic</a></p>
      </div>
    </article>
    <?php require $rootPath . '/includes/clinic-sidebar.php'; ?>
  </section>
<?php require_once $rootPath . '/includes/footer.php'; ?>
