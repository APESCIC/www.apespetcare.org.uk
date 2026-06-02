<?php
$rootPath = dirname(__DIR__, 2);
$pageTitle = 'Care Plans';
$metaDescription = 'Explore APES Pet Care Clinic care plans for ongoing preventative support.';
$pageKicker = 'Pet Care Service';
$heroTitle = 'Care Plans';
$heroLead = 'Structured support plans to help you spread routine care costs and keep your pet€™s welfare on track.';
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
        <h2>Plan Overview</h2>
        <p>Our care plans are designed to support preventive welfare through regular guidance and scheduled support sessions.</p>
      </div>
      <div class="content-card reveal">
        <h2>Flexible Options</h2>
        <p>Plans typically range from entry-level to enhanced support, with increased included checks and treatment allowances at higher levels.</p>
      </div>
      <div class="content-card reveal">
        <h2>Multiple Pets</h2>
        <p>Where suitable, families with multiple pets may be eligible for adjusted plan pricing.</p>
      </div>
      <div class="content-card reveal">
        <h2>Important Scope</h2>
        <p>Care plans support first aid and general health monitoring. They do not replace veterinary services for surgery, emergencies, or invasive treatment.</p>
      </div>
    </article>
    <?php require $rootPath . '/includes/clinic-sidebar.php'; ?>
  </section>
<?php require_once $rootPath . '/includes/footer.php'; ?>

