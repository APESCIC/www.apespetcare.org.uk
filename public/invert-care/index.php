<?php
$rootPath = dirname(__DIR__);
$pageTitle = 'Invert Care';
$metaDescription = 'Invertebrate first aid, welfare support, husbandry guidance, and referral triage.';
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
  <?php require $rootPath . '/includes/hero.php'; ?>

  <section class="content-layout">
    <article class="article">
      <div class="content-card reveal">
        <h2>Important scope</h2>
        <p>We provide first aid, welfare guidance, husbandry support, and referral triage for invertebrates. Severe injury, collapse, or systemic illness may still require specialist veterinary advice.</p>
        <?= apes_render_scope_notice() ?>
      </div>
      <div class="content-card reveal">
        <h2>Parasite support</h2>
        <p class="price">GBP 79.00 total including short-term admittance planning.</p>
        <p>This route is for suitability-first welfare support and does not guarantee that APES can provide hands-on intervention for every case.</p>
        <?= apes_render_prepay_cta_list(['invert-parasite-removal-7-day-admittance']) ?>
      </div>
      <div class="content-card reveal">
        <h2>Moulting support</h2>
        <p class="price">GBP 15.00 per invertebrate.</p>
        <p>Guidance for humidity, enclosure setup, and safe support during difficult moults.</p>
        <?= apes_render_prepay_cta_list(['moult-support']) ?>
      </div>
      <div class="content-card reveal">
        <h2>Husbandry review</h2>
        <p>We review enclosure setup, hydration, feeding routine, and environment factors to help prevent recurring welfare issues.</p>
      </div>
      <div class="content-card reveal">
        <h2>Pre-pay from this invertebrate care page</h2>
        <p>Complete secure Stripe payment for the relevant invertebrate support service below, then follow the booking or suitability instructions shown after payment.</p>
        <?= apes_render_before_you_pay() ?>
        <?= apes_render_prepay_catalogue($invertServiceKeys, 'detail') ?>
        <?= apes_render_prepay_note() ?>
      </div>
    </article>
    <?php require $rootPath . '/includes/clinic-sidebar.php'; ?>
  </section>
<?php require_once $rootPath . '/includes/footer.php'; ?>
