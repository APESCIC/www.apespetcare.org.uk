<?php
$rootPath = dirname(__DIR__);
$pageTitle = 'Reptile Care';
$metaDescription = 'Reptile first aid and general health support, including shedding and husbandry-related guidance.';
$pageKicker = 'Pet Care Service';
$heroTitle = 'Reptile Care Services';
$heroLead = 'Species-aware support for common reptile concerns, with clear advice on when urgent veterinary care is required.';
$activeNav = 'services';
require_once $rootPath . '/includes/page-init.php';
$reptileServiceKeys = [
    'shedding-aid',
    'parasite-removal-7-day-admittance',
    'fang-removal',
    'respiratory-infection-7-day-admittance',
    'nail-clipping',
];
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
        <p>We provide first aid and general health support for reptiles. We do not perform operations or invasive veterinary procedures.</p>
      </div>
      <div class="content-card reveal">
        <h2>Shedding Support</h2>
        <p class="price">&pound;10.00 per reptile.</p>
        <p>Support with retained shed and eye-cap concerns where safe and appropriate.</p>
        <?= apes_render_prepay_cta_list(['shedding-aid']) ?>
      </div>
      <div class="content-card reveal">
        <h2>Parasite Support (Mites)</h2>
        <p class="price">&pound;79.00 total including 7 day admittance.</p>
        <p>Includes parasite removal support with the related seven day admittance package where the treatment plan needs it.</p>
        <?= apes_render_prepay_cta_list(['parasite-removal-7-day-admittance']) ?>
      </div>
      <div class="content-card reveal">
        <h2>Fang And Oral Injury Checks (Snakes)</h2>
        <p class="price">&pound;10.00 per displaced fang support session.</p>
        <p>We provide first-line support and refer to a vet if deeper injury is suspected.</p>
        <?= apes_render_prepay_cta_list(['fang-removal']) ?>
      </div>
      <div class="content-card reveal">
        <h2>Respiratory Concern Assessment</h2>
        <p class="price">&pound;64.00 total including 7 day admittance.</p>
        <p>Use this option when your reptile needs respiratory support with the related short-term admittance package already included.</p>
        <?= apes_render_prepay_cta_list(['respiratory-infection-7-day-admittance']) ?>
      </div>
      <div class="content-card reveal">
        <h2>Claw Trimming</h2>
        <p class="price">&pound;5.00 per reptile.</p>
        <?= apes_render_prepay_cta_list(['nail-clipping']) ?>
      </div>
      <div class="content-card reveal">
        <h2>Pre-pay and book from this reptile care page</h2>
        <p>Use the Stripe payment links below for the reptile services shown on this page, then follow the booking instructions displayed after payment.</p>
        <?= apes_render_prepay_catalogue($reptileServiceKeys, 'detail') ?>
        <?= apes_render_prepay_note() ?>
      </div>
    </article>
    <?php require $rootPath . '/includes/clinic-sidebar.php'; ?>
  </section>
<?php require_once $rootPath . '/includes/footer.php'; ?>


