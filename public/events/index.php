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
  <?php require $rootPath . '/includes/hero.php'; ?>

  <section class="content-layout">
    <article class="article">
      <div class="content-card reveal">
        <h2>Pet welfare education</h2>
        <p>Our events focus on species-aware care, preventive welfare, and practical support for owners in the community.</p>
      </div>
      <div class="content-card reveal">
        <h2>Want to collaborate?</h2>
        <p>If you run a community venue or local project and want to host a pet welfare session, contact our team.</p>
        <p><a class="btn btn-outline js-contact-ticket" href="<?= apes_escape($contactTicketUrl) ?>">Contact Clinic</a></p>
      </div>
    </article>
    <?php require $rootPath . '/includes/clinic-sidebar.php'; ?>
  </section>
<?php require_once $rootPath . '/includes/footer.php'; ?>
