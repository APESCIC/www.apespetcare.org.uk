<?php
$rootPath = dirname(__DIR__);
$pageTitle = 'Invert Care';
$metaDescription = 'Invertebrate first aid and general health support including husbandry and moulting guidance.';
$pageKicker = 'Pet Care Service';
$heroTitle = 'Invertebrate Care Services';
$heroLead = 'Support for common invertebrate care concerns with clear, species-appropriate husbandry and welfare advice.';
$activeNav = 'services';
require_once $rootPath . '/includes/page-init.php';
$invertServiceKeys = [
    'invert-parasite-removal-7-day-admittance',
    'moult-support',
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
        <p>We provide first aid and general health support for invertebrates. We do not carry out operations or invasive veterinary procedures.</p>
      </div>
      <div class="content-card reveal">
        <h2>Parasite Support</h2>
        <p class="price">&pound;79.00 total including 7 day admittance.</p>
        <p>Use this option when parasite removal support and the related short admittance period are needed together.</p>
        <?= apes_render_prepay_cta_list(['invert-parasite-removal-7-day-admittance']) ?>
      </div>
      <div class="content-card reveal">
        <h2>Moulting Support</h2>
        <p class="price">&pound;15.00 per invertebrate.</p>
        <p>Guidance for humidity, enclosure setup, and safe support during difficult moults.</p>
        <?= apes_render_prepay_cta_list(['moult-support']) ?>
      </div>
      <div class="content-card reveal">
        <h2>Husbandry Review</h2>
        <p>We review enclosure setup, hydration, feeding routine, and environment factors to help prevent recurring welfare issues.</p>
      </div>
      <div class="content-card reveal">
        <h2>Pre-pay and book from this invertebrate care page</h2>
        <p>Complete secure Stripe payment for the relevant invertebrate support service below, then follow the booking instructions shown after payment.</p>
        <?= apes_render_prepay_catalogue($invertServiceKeys, 'detail') ?>
        <?= apes_render_prepay_note() ?>
      </div>
    </article>
    <?php require $rootPath . '/includes/clinic-sidebar.php'; ?>
  </section>
<?php require_once $rootPath . '/includes/footer.php'; ?>


