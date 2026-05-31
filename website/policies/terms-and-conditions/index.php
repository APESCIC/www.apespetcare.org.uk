<?php
$rootPath = dirname(__DIR__, 2);
$pageTitle = 'Terms and Conditions';
$metaDescription = 'Read the APES Pet Care Clinic website and service terms.';
$pageKicker = 'Clinic Policy';
$heroTitle = 'Terms and Conditions';
$heroLead = 'By booking or using our services, you agree to these terms.';
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
        <h2>Service Scope</h2>
        <p>APES Pet Care Clinic provides first aid and general health support only and is not a veterinary surgery. We do not carry out operations or invasive veterinary procedures.</p>
      </div>
      <div class="content-card reveal">
        <h2>Website Use</h2>
        <p>Content is provided for general information and may be updated at any time. Users must not misuse the website or attempt unlawful activity.</p>
      </div>
      <div class="content-card reveal">
        <h2>Bookings And Payments</h2>
        <p>Bookings require accurate details and payment as set out in our booking and refund policies.</p>
      </div>
      <div class="content-card reveal">
        <h2>Liability</h2>
        <p>We aim to provide accurate guidance and compassionate support, but veterinary diagnosis and surgical treatment must be provided by licensed veterinary professionals.</p>
      </div>
      <div class="content-card reveal">
        <h2>Governing Law</h2>
        <p>These terms are governed by the laws of England and Wales.</p>
      </div>
    </article>
    <?php require $rootPath . '/includes/clinic-sidebar.php'; ?>
  </section>
<?php require_once $rootPath . '/includes/footer.php'; ?>
