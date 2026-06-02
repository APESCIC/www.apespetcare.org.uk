<?php
$rootPath = dirname(__DIR__);
$pageTitle = 'General Services';
$metaDescription = 'General first aid, welfare support, and referral guidance services at APES Pet Care Clinic.';
$pageKicker = 'Pet Care Service';
$heroTitle = 'General Welfare Support';
$heroLead = 'General support services for pets, focused on routine welfare, first aid, and safe next-step guidance.';
$activeNav = 'services';
require_once $rootPath . '/includes/page-init.php';
$generalServiceKeys = [
    'general-remote-consultation',
    'general-in-person-consultation',
    'follow-up-consultation',
    'health-check',
    'ear-cleaning',
];
$prepayCopy = apes_get_prepay_copy();
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
        <h2>Clinic scope</h2>
        <p>We provide first aid, routine welfare support, non-diagnostic observation, and referral triage only.</p>
        <?= apes_render_scope_notice() ?>
      </div>
      <div class="content-card reveal">
        <h2>Pre-pay for general clinic support</h2>
        <p><?= apes_escape($prepayCopy['intro']) ?></p>
        <?= apes_render_before_you_pay() ?>
        <?= apes_render_prepay_catalogue($generalServiceKeys, 'detail') ?>
        <?= apes_render_prepay_note() ?>
      </div>
      <div class="content-card reveal">
        <h2>Routine welfare checks</h2>
        <p>General checks for coat, skin, body condition, mobility, hydration, and husbandry concerns.</p>
      </div>
      <div class="content-card reveal">
        <h2>First aid advice</h2>
        <p>Practical first aid guidance for non-emergency concerns, including care-at-home steps and warning signs that need a vet.</p>
      </div>
      <div class="content-card reveal">
        <h2>Referral guidance</h2>
        <p>When veterinary treatment is needed, we explain why and help you choose suitable next steps quickly.</p>
      </div>
    </article>
    <?php require $rootPath . '/includes/clinic-sidebar.php'; ?>
  </section>
<?php require_once $rootPath . '/includes/footer.php'; ?>
