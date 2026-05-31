<?php
$rootPath = dirname(__DIR__);
$pageTitle = 'General Services';
$metaDescription = 'General first aid and health support services at APES Pet Care Clinic.';
$pageKicker = 'Pet Care Service';
$heroTitle = 'General Health Support';
$heroLead = 'General support services for pets, focused on routine welfare, first aid, and safe next-step guidance.';
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
      <img src="/assets/logos/APES_Pet_Care_Clinic_logo_master_transparent.png" alt="APES Pet Care Clinic illustrated logo">
    </aside>
  </section>

  <section class="content-layout">
    <article class="article">
      <div class="content-card reveal">
        <h2>Clinic Scope</h2>
        <p>We provide first aid and general health support only. We do not perform operations or invasive veterinary procedures.</p>
      </div>
      <div class="content-card reveal">
        <h2>Routine Welfare Checks</h2>
        <p>General checks for coat, skin, body condition, mobility, hydration, and husbandry concerns.</p>
      </div>
      <div class="content-card reveal">
        <h2>First Aid Advice</h2>
        <p>Practical first aid guidance for non-emergency concerns, including care-at-home steps and warning signs that need a vet.</p>
      </div>
      <div class="content-card reveal">
        <h2>Referral Guidance</h2>
        <p>When veterinary treatment is needed, we explain why and help you choose suitable next steps quickly.</p>
      </div>
    </article>
    <?php require $rootPath . '/includes/clinic-sidebar.php'; ?>
  </section>
<?php require_once $rootPath . '/includes/footer.php'; ?>
