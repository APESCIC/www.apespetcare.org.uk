<?php
$rootPath = dirname(__DIR__);
$pageTitle = 'Rabbit Care';
$metaDescription = 'Rabbit first aid and general health support, including routine welfare checks and practical guidance.';
$pageKicker = 'Pet Care Service';
$heroTitle = 'Rabbit Care Services';
$heroLead = 'Practical support for rabbit welfare concerns, with quick referral guidance when veterinary intervention is needed.';
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
        <p>We provide first aid and general health support for rabbits. We do not perform operations or invasive veterinary procedures.</p>
      </div>
      <div class="content-card reveal">
        <h2>Parasite Support</h2>
        <p class="price">From &pound;3.00 per rabbit, plus treatment product cost (from &pound;8.99 depending on product).</p>
      </div>
      <div class="content-card reveal">
        <h2>Nail Clipping</h2>
        <p class="price">&pound;5.00 per rabbit.</p>
      </div>
      <div class="content-card reveal">
        <h2>Dental And Feeding Concern Guidance</h2>
        <p class="price">&pound;7.50 per rabbit support session.</p>
        <p>Includes visual welfare checks and advice on diet and monitoring. We refer to a vet for suspected dental disease.</p>
      </div>
      <div class="content-card reveal">
        <h2>General Welfare Checks</h2>
        <p>Body condition, coat, mobility, hydration, and husbandry review to support long-term rabbit health.</p>
      </div>
    </article>
    <?php require $rootPath . '/includes/clinic-sidebar.php'; ?>
  </section>
<?php require_once $rootPath . '/includes/footer.php'; ?>


