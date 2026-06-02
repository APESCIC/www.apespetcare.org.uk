<?php
$rootPath = dirname(__DIR__, 2);
$pageTitle = 'Refund Policy';
$metaDescription = 'Read the APES Pet Care Clinic refund policy for bookings, pre-payments, and unsuitable-service outcomes.';
$pageKicker = 'Clinic Policy';
$heroTitle = 'Refund Policy';
$heroLead = 'Please read this policy carefully before booking or using a pre-payment link.';
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
      <img src="/assets/logos/APES_Pet_Care_Clinic_logo_master_transparent.png" alt="">
    </aside>
  </section>

  <section class="content-layout">
    <article class="article">
      <div class="content-card reveal">
        <h2>General refund position</h2>
        <p>Booking and pre-payment amounts are generally non-refundable once staff time, admin work, or appointment space has been reserved, because resources are allocated in advance.</p>
      </div>
      <div class="content-card reveal">
        <h2>Unsuitable or referral-only cases</h2>
        <p>If APES decides after review that a pre-paid service is not suitable and your pet should be referred to a veterinary surgeon instead, we will explain whether the payment is refunded, credited, or partly retained for work already completed.</p>
      </div>
      <div class="content-card reveal">
        <h2>Date and time change requests</h2>
        <p>Where possible, appointments may be rearranged when requested in advance, subject to availability and policy terms.</p>
      </div>
      <div class="content-card reveal">
        <h2>No-show appointments</h2>
        <p>Missed appointments without notice are not eligible for refund.</p>
      </div>
      <div class="content-card reveal">
        <h2>Need help?</h2>
        <p>If you have an issue with a booking or a pre-paid support route, contact our support team and we will review your case in line with this policy and the <a href="<?= apes_escape($bookingPolicyPath) ?>">Booking Policy</a>.</p>
      </div>
    </article>
    <?php require $rootPath . '/includes/clinic-sidebar.php'; ?>
  </section>
<?php require_once $rootPath . '/includes/footer.php'; ?>
