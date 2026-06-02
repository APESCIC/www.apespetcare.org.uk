<?php
$rootPath = dirname(__DIR__);
$pageTitle = 'Book An Appointment';
$metaDescription = 'Book your APES Pet Care Clinic appointment online using our secure booking portal.';
$pageKicker = 'Appointments';
$heroTitle = 'Book Your Clinic Visit';
$heroLead = 'Use our online booking system to request your appointment quickly. Appointments are required and help us give each pet the time they need.';
$activeNav = 'bookings';
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
        <h2>Online booking form</h2>
        <p>Complete your booking request in the embedded form below. Booking instructions will confirm the correct appointment location and any next steps for your pet.</p>
        <iframe
          class="booking-embed"
          src="<?= apes_escape($bookingEmbedUrl) ?>"
          title="APES Pet Care Clinic Booking Form"
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      </div>
      <div class="content-card reveal">
        <h2>Having trouble with the embed?</h2>
        <p>If the form does not load on your device, open the full booking page directly.</p>
        <p><a class="btn btn-primary" href="<?= apes_escape($bookingPublicUrl) ?>" target="_blank" rel="noopener noreferrer">Open Full Booking Page</a></p>
      </div>
      <div class="content-card reveal">
        <h2>Before you book</h2>
        <?= apes_render_scope_notice() ?>
        <p>Please do not attend without a confirmed appointment and location instructions. If your pet needs urgent veterinary care, seek help from a registered veterinary surgeon immediately instead of waiting for a clinic slot.</p>
      </div>
    </article>
    <?php require $rootPath . '/includes/clinic-sidebar.php'; ?>
  </section>
<?php require_once $rootPath . '/includes/footer.php'; ?>
