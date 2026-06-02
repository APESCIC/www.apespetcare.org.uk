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
        <h2>Open a support ticket</h2>
        <p>The fastest way to contact us is through our support ticket form.</p>
        <p><a class="btn btn-primary js-contact-ticket" href="<?= apes_escape($contactTicketUrl) ?>">Contact Clinic</a></p>
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
