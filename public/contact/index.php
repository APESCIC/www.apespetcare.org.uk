<?php
$rootPath = dirname(__DIR__);
$pageTitle = 'Contact The Clinic';
$metaDescription = 'Contact APES Pet Care Clinic for first aid and welfare support enquiries.';
$pageKicker = 'Contact';
$heroTitle = 'Need Help Or Advice?';
$heroLead = 'Our team can guide you on next steps, routine support, and when to seek urgent veterinary care.';
$activeNav = 'contact';
require_once $rootPath . '/includes/page-init.php';
require_once $rootPath . '/includes/header.php';
?>
  <?php require $rootPath . '/includes/hero.php'; ?>

  <section class="content-layout">
    <article class="article">
      <div class="content-card reveal">
        <h2>Open a support ticket</h2>
        <p>The fastest way to contact us is through our support ticket form.</p>
        <p><a class="btn btn-primary js-popup-window" href="<?= apes_escape($contactTicketUrl) ?>" data-popup-name="apes_contact_ticket" data-popup-width="560" data-popup-height="760">Contact Clinic</a></p>
      </div>
      <div class="content-card reveal">
        <h2>Live chat</h2>
        <p>You can also use the live chat launcher on this website to speak with an advisor.</p>
      </div>
      <div class="content-card reveal">
        <h2>Clinic details</h2>
        <p><strong>Phone:</strong> <?= apes_escape($clinicPhone) ?></p>
        <p><strong>Email:</strong> <a href="mailto:<?= apes_escape($clinicEmail) ?>"><?= apes_escape($clinicEmail) ?></a></p>
        <p><strong>Address:</strong> <?= apes_escape($clinicAddress) ?></p>
        <p>Please wait for confirmed appointment and location instructions before attending.</p>
      </div>
    </article>
    <?php require $rootPath . '/includes/clinic-sidebar.php'; ?>
  </section>
<?php require_once $rootPath . '/includes/footer.php'; ?>
