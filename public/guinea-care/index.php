<?php
$rootPath = dirname(__DIR__);
$pageTitle = 'Guinea Pig Care';
$metaDescription = 'Guinea pig first aid, welfare support, and referral guidance with practical care advice.';
$pageKicker = 'Pet Care Service';
$heroTitle = 'Guinea Pig Care Services';
$heroLead = 'Support for common guinea pig welfare concerns, with practical guidance and referral advice when vet care is needed.';
$activeNav = 'services';
require_once $rootPath . '/includes/page-init.php';
$guineaServiceKeys = [
    'small-animal-parasite-treatment-beaphar',
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
        <p>We provide first aid, welfare guidance, and referral triage for guinea pigs. Suspected dental disease, collapse, breathing difficulty, or severe pain need veterinary care urgently.</p>
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
        <p class="price">GBP 5.00 per guinea pig.</p>
        <?= apes_render_prepay_cta_list(['nail-clipping']) ?>
      </div>
      <div class="content-card reveal">
        <h2>Dental observation guidance</h2>
        <p class="price">GBP 7.50 per support session.</p>
        <p>Includes visual checks and husbandry advice. Suspected dental disease must be managed by a veterinary surgeon.</p>
        <?= apes_render_prepay_cta_list(['teeth-cleaning']) ?>
      </div>
      <div class="content-card reveal">
        <h2>General welfare checks</h2>
        <p>Body condition, coat, appetite patterns, and enclosure review to support preventive care.</p>
      </div>
      <div class="content-card reveal">
        <h2>Pre-pay from this guinea pig care page</h2>
        <p>Use these secure Stripe links for the guinea pig welfare support services shown on this page, then follow the booking or suitability instructions displayed after payment.</p>
        <?= apes_render_before_you_pay() ?>
        <?= apes_render_prepay_catalogue($guineaServiceKeys, 'detail') ?>
        <?= apes_render_prepay_note() ?>
      </div>
    </article>
    <?php require $rootPath . '/includes/clinic-sidebar.php'; ?>
  </section>
<?php require_once $rootPath . '/includes/footer.php'; ?>
