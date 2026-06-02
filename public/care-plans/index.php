<?php
$rootPath = dirname(__DIR__);
$pageTitle = 'Care Plans';
$metaDescription = 'Explore APES Pet Care Clinic care plans for routine welfare support, eligibility guidance, and safe referral boundaries.';
$pageKicker = 'Pet Care Service';
$heroTitle = 'Care Plans';
$heroLead = 'Structured support plans to help you spread routine care costs and keep your pet\'s welfare on track.';
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
        <h2>Plan overview</h2>
        <p>Our care plans are designed to support preventive welfare through regular guidance, monitoring, and scheduled support sessions where APES confirms they are appropriate.</p>
        <?= apes_render_scope_notice() ?>
      </div>
      <div class="content-card reveal">
        <h2>Eligibility and exclusions</h2>
        <p>Care plans support routine welfare guidance and cost-spreading for planned support. They do not guarantee treatment, do not replace veterinary care, and are not suitable for emergencies, severe illness, surgery, sedation, or invasive procedures.</p>
      </div>
      <div class="content-card reveal">
        <h2>Flexible options</h2>
        <p>Plans can range from entry-level support to enhanced monitoring, with the exact content confirmed after APES reviews your pet's welfare needs and the safe scope of support.</p>
      </div>
      <div class="content-card reveal">
        <h2>Multiple pets</h2>
        <p>Where suitable, families with multiple pets may be eligible for adjusted plan pricing or a tailored support package.</p>
      </div>
      <div class="content-card reveal">
        <h2>Before you join a plan</h2>
        <p>Please contact the clinic before paying for a plan if your pet has urgent symptoms, suspected disease, severe pain, breathing difficulty, collapse, or another concern that may need a veterinary surgeon immediately.</p>
      </div>
    </article>
    <?php require $rootPath . '/includes/clinic-sidebar.php'; ?>
  </section>
<?php require_once $rootPath . '/includes/footer.php'; ?>
