<?php
$rootPath = dirname(__DIR__);
$pageTitle = 'Ferret Care';
$metaDescription = 'Ferret first aid and general health support services at APES Pet Care Clinic.';
$pageKicker = 'Pet Care Service';
$heroTitle = 'Ferret Care Services';
$heroLead = 'First aid and general health support for ferrets, including routine checks and practical owner guidance.';
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
        <h2>Important Scope</h2>
        <p>We provide first aid and general health support for ferrets. We do not carry out operations or invasive veterinary procedures.</p>
      </div>
      <div class="content-card reveal">
        <h2>Parasite Support</h2>
        <p class="price">From &pound;3.00 per ferret, plus treatment product cost (from &pound;8.99 depending on product).</p>
      </div>
      <div class="content-card reveal">
        <h2>Nail Clipping</h2>
        <p class="price">&pound;5.00 per ferret.</p>
      </div>
      <div class="content-card reveal">
        <h2>Oral And Husbandry Guidance</h2>
        <p class="price">&pound;7.50 per support session.</p>
        <p>Includes visual oral and welfare checks with practical husbandry advice. Complex conditions are referred to a vet.</p>
      </div>
      <div class="content-card reveal">
        <h2>General Welfare Checks</h2>
        <p>Coat, skin, body condition, and behavior review to help identify concerns early.</p>
      </div>
    </article>
    <?php require $rootPath . '/includes/clinic-sidebar.php'; ?>
  </section>
<?php require_once $rootPath . '/includes/footer.php'; ?>


