<?php
$rootPath = dirname(__DIR__);
$pageTitle = 'Rabbit Care';
$metaDescription = 'Rabbit first aid, welfare support, and referral guidance, including routine checks and practical care advice.';
$pageKicker = 'Pet Care Service';
$heroTitle = 'Rabbit Care Services';
$heroLead = 'Practical support for rabbit welfare concerns, with quick referral guidance when veterinary intervention is needed.';
$activeNav = 'services';
require_once $rootPath . '/includes/page-init.php';
$rabbitServiceKeys = [
    'small-animal-parasite-treatment-beaphar',
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
        <p>We provide first aid, welfare guidance, and referral triage for rabbits. Suspected dental disease, gut stasis, breathing difficulty, collapse, or severe pain need veterinary care urgently.</p>
        <?= apes_render_scope_notice() ?>
      </div>
      <div class="content-card reveal">
        <h2>Parasite support</h2>
        <p class="price">GBP 12.49 total for the listed rabbit and guinea pig spot-on support route.</p>
        <p>Use the rabbit and guinea pig parasite-support option below when APES confirms it is a suitable welfare route.</p>
        <?= apes_render_prepay_cta_list(['small-animal-parasite-treatment-beaphar']) ?>
      </div>
      <div class="content-card reveal">
        <h2>Nail clipping</h2>
        <p class="price">GBP 5.00 per rabbit.</p>
        <?= apes_render_prepay_cta_list(['nail-clipping']) ?>
      </div>
      <div class="content-card reveal">
        <h2>Dental observation and feeding guidance</h2>
        <p class="price">GBP 7.50 per rabbit support session.</p>
        <p>Includes visual welfare checks and advice on diet and monitoring. Suspected dental disease must be assessed by a veterinary surgeon.</p>
        <?= apes_render_prepay_cta_list(['teeth-cleaning']) ?>
      </div>
      <div class="content-card reveal">
        <h2>General welfare checks</h2>
        <p>Body condition, coat, mobility, hydration, and husbandry review to support long-term rabbit health.</p>
      </div>
      <div class="content-card reveal">
        <h2>Pre-pay from this rabbit care page</h2>
        <p>Use these secure Stripe links for the rabbit welfare support services shown on this page, then follow the booking or suitability instructions displayed after payment.</p>
        <?= apes_render_before_you_pay() ?>
        <?= apes_render_prepay_catalogue($rabbitServiceKeys, 'detail') ?>
        <?= apes_render_prepay_note() ?>
      </div>
    </article>
    <?php require $rootPath . '/includes/clinic-sidebar.php'; ?>
  </section>
<?php require_once $rootPath . '/includes/footer.php'; ?>
