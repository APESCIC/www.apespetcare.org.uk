<?php
$rootPath = dirname(__DIR__, 2);
$pageTitle = 'Booking Policy';
$metaDescription = 'Read APES Pet Care Clinic booking terms and appointment expectations.';
$pageKicker = 'Clinic Policy';
$heroTitle = 'Booking Policy';
$heroLead = 'Please review our booking terms before arranging an appointment.';
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
        <h2>Appointments Are Booking-Only</h2>
        <p>All clinic appointments must be booked in advance using our online booking system or official support channels.</p>
      </div>
      <div class="content-card reveal">
        <h2>Payment At Booking</h2>
        <p>Full payment is required to confirm and hold your appointment slot.</p>
      </div>
      <div class="content-card reveal">
        <h2>Changes And Cancellations</h2>
        <p>Requests to change date or time should be made at least 48 hours in advance and are subject to availability.</p>
      </div>
      <div class="content-card reveal">
        <h2>Non-Attendance</h2>
        <p>If an appointment is missed without notice, the original booking payment may be forfeited.</p>
      </div>
      <div class="content-card reveal">
        <h2>Clinic Scope Reminder</h2>
        <p>APES Pet Care Clinic provides first aid and general health support and does not perform operations or invasive veterinary procedures.</p>
      </div>
    </article>
    <?php require $rootPath . '/includes/clinic-sidebar.php'; ?>
  </section>
<?php require_once $rootPath . '/includes/footer.php'; ?>
