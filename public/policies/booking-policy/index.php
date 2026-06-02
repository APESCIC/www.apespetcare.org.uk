<?php
$rootPath = dirname(__DIR__, 2);
$pageTitle = 'Booking Policy';
$metaDescription = 'Read APES Pet Care Clinic booking terms, pre-payment rules, and appointment expectations.';
$pageKicker = 'Clinic Policy';
$heroTitle = 'Booking Policy';
$heroLead = 'Please review our booking and pre-payment terms before arranging an appointment.';
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
        <h2>Appointments are booking-only</h2>
        <p>All clinic appointments must be booked in advance using our online booking system or official support channels. Please do not attend without a confirmed appointment and location instructions.</p>
      </div>
      <div class="content-card reveal">
        <h2>Payment and pre-payment</h2>
        <p>Some services ask for full payment in advance through Stripe before booking instructions are shown. Payment confirms the request to proceed, but it does not guarantee that a service is clinically suitable for your pet.</p>
        <p>If APES reviews your case and decides veterinary referral is the safer option, we will explain the next step and handle any refund or credit position in line with the Refund Policy.</p>
      </div>
      <div class="content-card reveal">
        <h2>Changes and cancellations</h2>
        <p>Requests to change date or time should be made at least 48 hours in advance and are subject to availability.</p>
      </div>
      <div class="content-card reveal">
        <h2>Non-attendance</h2>
        <p>If an appointment is missed without notice, the original booking payment may be forfeited.</p>
      </div>
      <div class="content-card reveal">
        <h2>Urgent and unsuitable cases</h2>
        <p>APES Pet Care Clinic provides first aid, routine welfare support, and referral triage only. If your pet needs emergency care, diagnosis, surgery, invasive procedures, or prescription treatment, seek help from a registered veterinary surgeon immediately.</p>
      </div>
      <div class="content-card reveal">
        <h2>Related policies</h2>
        <p>For refund, credit, and unsuitable-service outcomes, please also read our <a href="<?= apes_escape($refundPolicyPath) ?>">Refund Policy</a>.</p>
      </div>
    </article>
    <?php require $rootPath . '/includes/clinic-sidebar.php'; ?>
  </section>
<?php require_once $rootPath . '/includes/footer.php'; ?>
