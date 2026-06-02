<?php
$rootPath = dirname(__DIR__);
$pageTitle = 'Lab Services';
$metaDescription = 'APES Pet Care Clinic coordinates sample-based lab support with clear veterinary referral boundaries and example pricing guidance.';
$pageKicker = 'Pet Care Service';
$heroTitle = 'Lab Services';
$heroLead = 'We coordinate selected sample-based testing options to support welfare decisions and safe next-step planning.';
$activeNav = 'services';
require_once $rootPath . '/includes/page-init.php';
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
        <h2>How lab services work</h2>
        <p>APES offers sample coordination support only. We can help explain the process, arrange suitable sample handling, and support referral conversations, but veterinary interpretation and diagnosis may still require a registered veterinary surgeon.</p>
        <?= apes_render_scope_notice() ?>
      </div>
      <div class="content-card reveal">
        <h2>Example test prices</h2>
        <p>These prices are examples and remain subject to confirmation, sample requirements, and laboratory availability.</p>
        <p class="price">Sunshine virus PCR (snakes): GBP 115.80</p>
        <p class="price">Reptile skin package: GBP 121.80</p>
        <p class="price">Respiratory profile turtle or tortoise PCR: GBP 196.20</p>
        <p class="price">Reptile lungworm: GBP 73.80</p>
        <p class="price">Reptile Campylobacter: GBP 76.50</p>
        <p class="price">Reptile Salmonella: GBP 93.00</p>
        <p class="price">Reptile nidovirus PCR: GBP 105.80</p>
        <p class="price">Reptile Cryptosporidia: GBP 69.00</p>
        <p class="price">Reptile faeces 2: GBP 130.80</p>
        <p class="price">Reptile full parasitology: GBP 89.40</p>
        <p class="price">Reptile faecal screen: GBP 71.00</p>
      </div>
      <div class="content-card reveal">
        <h2>Important limitations</h2>
        <p>Lab coordination does not replace a veterinary diagnosis. If your pet is acutely unwell, in pain, collapsed, bleeding, or struggling to breathe, seek veterinary care immediately instead of waiting for testing support.</p>
      </div>
      <div class="content-card reveal">
        <h2>Before arranging testing</h2>
        <p>Contact the clinic first so we can confirm sample suitability, likely turnaround times, handling requirements, and whether direct veterinary referral would be safer.</p>
      </div>
    </article>
    <?php require $rootPath . '/includes/clinic-sidebar.php'; ?>
  </section>
<?php require_once $rootPath . '/includes/footer.php'; ?>
