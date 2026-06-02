<?php
$rootPath = dirname(__DIR__, 2);
$pageTitle = 'Refund Policy';
$metaDescription = 'Read the APES Pet Care Clinic refund policy for booked services.';
$pageKicker = 'Clinic Policy';
$heroTitle = 'Refund Policy';
$heroLead = 'Please read this policy carefully before booking.';
$activeNav = 'policies';
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
        <h2>General Refund Position</h2>
        <p>Booking payments are generally non-refundable once a slot has been reserved, because staff time and resources are allocated in advance.</p>
      </div>
      <div class="content-card reveal">
        <h2>Date/Time Change Requests</h2>
        <p>Where possible, appointments may be rearranged when requested in advance, subject to availability and policy terms.</p>
      </div>
      <div class="content-card reveal">
        <h2>No-Show Appointments</h2>
        <p>Missed appointments without notice are not eligible for refund.</p>
      </div>
      <div class="content-card reveal">
        <h2>Need Help?</h2>
        <p>If you have an issue with a booking, contact our support team and we will review your case in line with our policy framework.</p>
      </div>
    </article>
    <?php require $rootPath . '/includes/clinic-sidebar.php'; ?>
  </section>
<?php require_once $rootPath . '/includes/footer.php'; ?>
