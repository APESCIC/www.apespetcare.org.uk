<?php
$rootPath = dirname(__DIR__);
$pageTitle = 'Ferret Care';
$metaDescription = 'Ferret first aid and general health support services at APES Pet Care Clinic.';
$pageKicker = 'Pet Care Service';
$heroTitle = 'Ferret Care Services';
$heroLead = 'First aid and general health support for ferrets, including routine checks and practical owner guidance.';
$activeNav = 'services';
require_once $rootPath . '/includes/page-init.php';
$ferretServiceKeys = [
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
        <p>We provide first aid and general health support for ferrets. We do not carry out operations or invasive veterinary procedures.</p>
      </div>
      <div class="content-card reveal">
        <h2>Parasite Support</h2>
        <p class="price">Routine parasite treatments from &pound;3.00 each.</p>
        <p>Choose the relevant pre-pay option below for standard flea or worming treatment support.</p>
        <?= apes_render_prepay_cta_list(['flea-treatment', 'worming-treatment']) ?>
      </div>
      <div class="content-card reveal">
        <h2>Nail Clipping</h2>
        <p class="price">&pound;5.00 per ferret.</p>
        <?= apes_render_prepay_cta_list(['nail-clipping']) ?>
      </div>
      <div class="content-card reveal">
        <h2>Oral And Husbandry Guidance</h2>
        <p class="price">&pound;7.50 per support session.</p>
        <p>Includes visual oral and welfare checks with practical husbandry advice. Complex conditions are referred to a vet.</p>
        <?= apes_render_prepay_cta_list(['teeth-cleaning']) ?>
      </div>
      <div class="content-card reveal">
        <h2>General Welfare Checks</h2>
        <p>Coat, skin, body condition, and behavior review to help identify concerns early.</p>
      </div>
      <div class="content-card reveal">
        <h2>Pre-pay and book from this ferret care page</h2>
        <p>Use these secure Stripe links for the routine ferret care services shown on this page, then follow the booking instructions displayed after payment.</p>
        <?= apes_render_prepay_catalogue($ferretServiceKeys, 'detail') ?>
        <?= apes_render_prepay_note() ?>
      </div>
    </article>
    <?php require $rootPath . '/includes/clinic-sidebar.php'; ?>
  </section>
<?php require_once $rootPath . '/includes/footer.php'; ?>


