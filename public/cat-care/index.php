<?php
$rootPath = dirname(__DIR__);
$pageTitle = 'Cat Care';
$metaDescription = 'Affordable first aid, welfare support, and referral guidance services for cats.';
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
  <?php require $rootPath . '/includes/hero.php'; ?>

  <section class="content-layout">
    <article class="article">
      <div class="content-card reveal">
        <h2>Important scope</h2>
        <p>We provide first aid, welfare guidance, and referral triage for cats. Painful, distressed, or medically unstable cats may need direct veterinary handling.</p>
        <?= apes_render_scope_notice() ?>
      </div>
      <div class="content-card reveal">
        <h2>Flea support</h2>
        <p class="price">Routine parasite-control support from GBP 3.00 each.</p>
        <p>Choose the relevant pre-pay option below for routine flea or parasite-control guidance where APES confirms suitability.</p>
        <?= apes_render_prepay_cta_list(['flea-treatment', 'worming-treatment']) ?>
      </div>
      <div class="content-card reveal">
        <h2>Nail clipping</h2>
        <p class="price">GBP 5.00 per cat.</p>
        <p>If a cat is highly stressed, we may recommend veterinary support for safe handling.</p>
        <?= apes_render_prepay_cta_list(['nail-clipping']) ?>
      </div>
      <div class="content-card reveal">
        <h2>Oral and teeth check guidance</h2>
        <p class="price">GBP 7.50 per cat.</p>
        <p>Includes visual oral-welfare observation and home-care advice. Complex dental issues, severe pain, or suspected disease are referred to a veterinary surgeon.</p>
        <?= apes_render_prepay_cta_list(['teeth-cleaning']) ?>
      </div>
      <div class="content-card reveal">
        <h2>Lab testing support</h2>
        <p>We can coordinate suitable sample-based testing support and explain what the findings may mean for your cat, while making it clear that veterinary interpretation may still be required.</p>
      </div>
      <div class="content-card reveal">
        <h2>Pre-pay from this cat care page</h2>
        <p>Use these secure Stripe links for the routine cat welfare support services shown on this page, then follow the booking or suitability instructions displayed after payment.</p>
        <?= apes_render_before_you_pay() ?>
        <?= apes_render_prepay_catalogue($catServiceKeys, 'detail') ?>
        <?= apes_render_prepay_note() ?>
      </div>
    </article>
    <?php require $rootPath . '/includes/clinic-sidebar.php'; ?>
  </section>
<?php require_once $rootPath . '/includes/footer.php'; ?>
