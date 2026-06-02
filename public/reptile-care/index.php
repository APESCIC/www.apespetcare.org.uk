<?php
$rootPath = dirname(__DIR__);
$pageTitle = 'Reptile Care';
$metaDescription = 'Reptile first aid, welfare support, husbandry guidance, and referral triage services.';
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
      <img src="/assets/logos/APES_Pet_Care_Clinic_logo_master_transparent.png" alt="">
    </aside>
  </section>

  <section class="content-layout">
    <article class="article">
      <div class="content-card reveal">
        <h2>Important scope</h2>
        <p>We provide first aid, welfare support, husbandry guidance, and referral triage for reptiles. Reptiles showing severe breathing issues, collapse, uncontrolled bleeding, or suspected serious disease need urgent veterinary care.</p>
        <?= apes_render_scope_notice() ?>
      </div>
      <div class="content-card reveal">
        <h2>Shedding support</h2>
        <p class="price">GBP 10.00 per reptile.</p>
        <p>Support with retained shed and eye-cap concerns where a routine welfare review is safe and appropriate.</p>
        <?= apes_render_prepay_cta_list(['shedding-aid']) ?>
      </div>
      <div class="content-card reveal">
        <h2>Parasite support (mites)</h2>
        <p class="price">GBP 79.00 total including short-term admittance planning.</p>
        <p>This route is suitability-first. Payment does not guarantee that APES can safely provide support without veterinary treatment.</p>
        <?= apes_render_prepay_cta_list(['parasite-removal-7-day-admittance']) ?>
      </div>
      <div class="content-card reveal">
        <h2>Fang and oral injury checks (snakes)</h2>
        <p class="price">GBP 10.00 per displaced fang support review.</p>
        <p>We provide first-line welfare observation and refer to a veterinary surgeon if deeper injury, infection, or invasive treatment is suspected.</p>
        <?= apes_render_prepay_cta_list(['fang-removal']) ?>
      </div>
      <div class="content-card reveal">
        <h2>Respiratory concern assessment</h2>
        <p class="price">GBP 64.00 total including short-term admittance planning.</p>
        <p>This route is for suitability review, welfare support, and referral triage only. APES does not diagnose respiratory disease or replace urgent veterinary care.</p>
        <?= apes_render_prepay_cta_list(['respiratory-infection-7-day-admittance']) ?>
      </div>
      <div class="content-card reveal">
        <h2>Claw trimming</h2>
        <p class="price">GBP 5.00 per reptile.</p>
        <?= apes_render_prepay_cta_list(['nail-clipping']) ?>
      </div>
      <div class="content-card reveal">
        <h2>Pre-pay from this reptile care page</h2>
        <p>Use the Stripe payment links below for the reptile services shown on this page, then follow the booking or suitability instructions displayed after payment.</p>
        <?= apes_render_before_you_pay() ?>
        <?= apes_render_prepay_catalogue($reptileServiceKeys, 'detail') ?>
        <?= apes_render_prepay_note() ?>
      </div>
    </article>
    <?php require $rootPath . '/includes/clinic-sidebar.php'; ?>
  </section>
<?php require_once $rootPath . '/includes/footer.php'; ?>
