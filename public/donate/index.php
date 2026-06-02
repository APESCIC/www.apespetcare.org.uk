<?php
$rootPath = dirname(__DIR__);
$pageTitle = 'Donate';
$metaDescription = 'Support APES Pet Care Clinic and help more pets access affordable first aid and general health support.';
$pageKicker = 'Support APES';
$heroTitle = 'Help Us Keep Pet Care Accessible';
$heroLead = 'Your support helps us continue practical welfare work for pets and families who need affordable help.';
$activeNav = 'donate';
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
        <h2>Where Donations Help Most</h2>
        <p>Donations support clinic resources, education, species-specific welfare support, and access for families on low incomes.</p>
      </div>
      <div class="content-card reveal">
        <h2>Community Impact</h2>
        <p>Every contribution helps us continue first aid and general health support while keeping fees as affordable as possible.</p>
      </div>
      <div class="content-card reveal">
        <h2>Thank You</h2>
        <p>Your support helps pets receive timely care guidance and helps owners make safe decisions before concerns become emergencies.</p>
      </div>
    </article>
    <?php require $rootPath . '/includes/clinic-sidebar.php'; ?>
  </section>
<?php require_once $rootPath . '/includes/footer.php'; ?>
