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
  <?php require $rootPath . '/includes/hero.php'; ?>

  <section class="content-layout">
    <article class="article">
      <div class="content-card reveal">
        <h2>Open the booking form in a separate window</h2>
        <p>Our booking form now opens in a separate secure window instead of loading inside this page. This gives you the full appointment form without the embedded loading issue shown on some devices.</p>
        <ul class="booking-guidance-list">
          <li>Use the button below to open the secure APES booking form in a popup window.</li>
          <li>If your browser blocks popups, the form will open in a new tab instead.</li>
          <li>Booking instructions will confirm the correct appointment location and any next steps for your pet.</li>
        </ul>
        <div class="booking-actions">
          <a
            class="btn btn-primary js-popup-window"
            href="<?= apes_escape($bookingPublicUrl) ?>"
            target="_blank"
            rel="noopener noreferrer"
            data-popup-name="apes_booking_form"
            data-popup-width="860"
            data-popup-height="900"
          >Open booking form</a>
        </div>
      </div>
      <div class="content-card reveal">
        <h2>Before you open the form</h2>
        <p>Please have your contact details, pet information, and the main reason for your booking request ready before opening the form. This helps you complete the request in one go.</p>
        <p>Popup blockers, privacy extensions, or strict mobile browsers may stop the separate booking window from appearing. If that happens, use the same button again and your browser should fall back to a new tab.</p>
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
