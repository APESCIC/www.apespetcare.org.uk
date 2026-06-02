<?php
$rootPath = dirname(__DIR__);
$pageTitle = 'Cat Care';
$metaDescription = 'Affordable first aid and general health support services for cats.';
$pageKicker = 'Pet Care Service';
$heroTitle = 'Cat Care Services';
$heroLead = 'Support for common feline care concerns, routine checks, and practical advice to help you decide safe next steps.';
$activeNav = 'services';
require_once $rootPath . '/includes/page-init.php';
$catServiceKeys = [
    'flea-treatment',
    'worming-treatment',
    'nail-clipping',
    'teeth-cleaning',
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
        <p>We provide first aid and general health support for cats. We do not perform operations or invasive veterinary procedures.</p>
      </div>
      <div class="content-card reveal">
        <h2>Flea Support</h2>
        <p class="price">Routine parasite treatments from &pound;3.00 each.</p>
        <p>Choose the relevant pre-pay option below for standard flea or worming treatment support.</p>
        <?= apes_render_prepay_cta_list(['flea-treatment', 'worming-treatment']) ?>
      </div>
      <div class="content-card reveal">
        <h2>Nail Clipping</h2>
        <p class="price">&pound;5.00 per cat.</p>
        <p>If a cat is highly stressed, we may recommend veterinary support for safe handling.</p>
        <?= apes_render_prepay_cta_list(['nail-clipping']) ?>
      </div>
      <div class="content-card reveal">
        <h2>Oral And Teeth Check Guidance</h2>
        <p class="price">&pound;7.50 per cat.</p>
        <p>Includes visual assessment and home-care advice. Complex dental issues are referred to a veterinary surgeon.</p>
        <?= apes_render_prepay_cta_list(['teeth-cleaning']) ?>
      </div>
      <div class="content-card reveal">
        <h2>Lab Testing Support</h2>
        <p>We can arrange suitable sample-based tests and explain what the findings may mean for your cat.</p>
      </div>
      <div class="content-card reveal">
        <h2>Pre-pay and book from this cat care page</h2>
        <p>Use these secure Stripe links for the routine cat care services shown on this page, then follow the booking instructions displayed after payment.</p>
        <?= apes_render_prepay_catalogue($catServiceKeys, 'detail') ?>
        <?= apes_render_prepay_note() ?>
      </div>
    </article>
    <?php require $rootPath . '/includes/clinic-sidebar.php'; ?>
  </section>
<?php require_once $rootPath . '/includes/footer.php'; ?>


