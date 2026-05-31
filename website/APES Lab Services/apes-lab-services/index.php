<?php
$rootPath = dirname(__DIR__, 2);
$pageTitle = 'Lab Services';
$metaDescription = 'Laboratory testing support arranged through APES Pet Care Clinic partnership services.';
$pageKicker = 'Pet Care Service';
$heroTitle = 'APES Lab Services';
$heroLead = 'We coordinate selected laboratory testing options to support health investigations and informed next-step care.';
$activeNav = 'services';
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
        <h2>How Lab Services Work</h2>
        <p>Our lab services help owners access diagnostic support without unnecessary delays. We can also share results with your veterinary practice on request.</p>
      </div>
      <div class="content-card reveal">
        <h2>Example Test Prices</h2>
        <p class="price">Sunshine Virus PCR (Snakes): &pound;115.80</p>
        <p class="price">Reptile Skin Package: &pound;121.80</p>
        <p class="price">Respiratory Profile Turtle/Tortoise PCR: &pound;196.20</p>
        <p class="price">Reptile Lungworm: &pound;73.80</p>
        <p class="price">Reptile Campylobacter: &pound;76.50</p>
        <p class="price">Reptile Salmonella: &pound;93.00</p>
        <p class="price">Reptile Nidovirus PCR: &pound;105.80</p>
        <p class="price">Reptile Cryptosporidia: &pound;69.00</p>
        <p class="price">Reptile Faeces 2: &pound;130.80</p>
        <p class="price">Reptile Full Parasitology: &pound;89.40</p>
        <p class="price">Reptile Faecal Screen: &pound;71.00</p>
      </div>
      <div class="content-card reveal">
        <h2>Important Scope</h2>
        <p>Lab coordination supports decision-making but does not replace veterinary diagnosis or surgery where required.</p>
      </div>
    </article>
    <?php require $rootPath . '/includes/clinic-sidebar.php'; ?>
  </section>
<?php require_once $rootPath . '/includes/footer.php'; ?>


