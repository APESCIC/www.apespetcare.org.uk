<?php
$rootPath = dirname(__DIR__);
$pageTitle = 'Dog Care';
$metaDescription = 'Affordable first aid, welfare support, and referral guidance services for dogs.';
$pageKicker = 'Pet Care Service';
$heroTitle = 'Dog Care Services';
$heroLead = 'Practical support for common canine care concerns, routine checks, and clear referral advice when veterinary care is needed.';
$activeNav = 'services';
require_once $rootPath . '/includes/page-init.php';
$dogServiceKeys = [
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
      <img src="/assets/logos/APES_Pet_Care_Clinic_logo_master_transparent.png" alt="">
    </aside>
  </section>

  <section class="content-layout">
    <article class="article">
      <div class="content-card reveal">
        <h2>Important scope</h2>
        <p>We provide first aid, welfare guidance, and referral triage for dogs. Where sedation, prescription-only treatment, or surgery may be needed, we refer directly to veterinary services.</p>
        <?= apes_render_scope_notice() ?>
      </div>
      <div class="content-card reveal">
        <h2>Flea support</h2>
        <p class="price">GBP 3.00 each.</p>
        <p>Choose the relevant pre-pay option below for routine flea or parasite-control guidance where APES confirms suitability.</p>
        <?= apes_render_prepay_cta_list(['flea-treatment', 'worming-treatment']) ?>
      </div>
      <div class="content-card reveal">
        <h2>Nail clipping</h2>
        <p class="price">GBP 5.00 per pet.</p>
        <p>For highly distressed or reactive dogs, we may recommend veterinary handling support.</p>
        <?= apes_render_prepay_cta_list(['nail-clipping']) ?>
      </div>
      <div class="content-card reveal">
        <h2>Teeth and oral hygiene guidance</h2>
        <p class="price">GBP 7.50 per pet.</p>
        <p>Includes visual oral-welfare observation and home-care guidance. Suspected dental disease, severe pain, swelling, or bleeding must be referred to a veterinary surgeon.</p>
        <?= apes_render_prepay_cta_list(['teeth-cleaning']) ?>
      </div>
      <div class="content-card reveal">
        <h2>Faecal and lab testing support</h2>
        <p>Where suitable, we can coordinate sample-based testing support and explain safe next steps. Veterinary interpretation may still be required.</p>
      </div>
      <div class="content-card reveal">
        <h2>Pre-pay from this dog care page</h2>
        <p>Use these secure Stripe links for the routine dog welfare support services shown on this page, then follow the booking or suitability instructions displayed after payment.</p>
        <?= apes_render_before_you_pay() ?>
        <?= apes_render_prepay_catalogue($dogServiceKeys, 'detail') ?>
        <?= apes_render_prepay_note() ?>
      </div>
    </article>
    <?php require $rootPath . '/includes/clinic-sidebar.php'; ?>
  </section>
<?php require_once $rootPath . '/includes/footer.php'; ?>
