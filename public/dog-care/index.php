<?php
$rootPath = dirname(__DIR__);
$pageTitle = 'Dog Care';
$metaDescription = 'Affordable first aid and general health support services for dogs.';
$pageKicker = 'Pet Care Service';
$heroTitle = 'Dog Care Services';
$heroLead = 'Practical support for common canine care concerns, routine checks, and clear referral advice when veterinary care is needed.';
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
        <p>We provide first aid and general health support for dogs. We do not perform operations or invasive veterinary procedures.</p>
        <p>Where sedation or surgical treatment may be needed, we refer directly to veterinary services.</p>
      </div>
      <div class="content-card reveal">
        <h2>Flea Support</h2>
        <p class="price">From &pound;3.00 per pet, plus treatment product cost (brand dependent).</p>
      </div>
      <div class="content-card reveal">
        <h2>Nail Clipping</h2>
        <p class="price">&pound;5.00 per pet.</p>
        <p>For highly distressed or reactive dogs, we may recommend veterinary handling support.</p>
      </div>
      <div class="content-card reveal">
        <h2>Teeth And Oral Hygiene Guidance</h2>
        <p class="price">&pound;7.50 per pet.</p>
        <p>Includes visual oral check and home-care guidance. We refer to a vet for complex dental disease.</p>
      </div>
      <div class="content-card reveal">
        <h2>Faecal And Lab Testing Support</h2>
        <p>Where suitable, we can arrange appropriate sample-based tests and explain results and next steps.</p>
      </div>
    </article>
    <?php require $rootPath . '/includes/clinic-sidebar.php'; ?>
  </section>
<?php require_once $rootPath . '/includes/footer.php'; ?>


