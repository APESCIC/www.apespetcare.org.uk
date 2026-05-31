<?php
$rootPath = dirname(__DIR__);
$pageTitle = 'Invert Care';
$metaDescription = 'Invertebrate first aid and general health support including husbandry and moulting guidance.';
$pageKicker = 'Pet Care Service';
$heroTitle = 'Invertebrate Care Services';
$heroLead = 'Support for common invertebrate care concerns with clear, species-appropriate husbandry and welfare advice.';
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
        <h2>Important Scope</h2>
        <p>We provide first aid and general health support for invertebrates. We do not carry out operations or invasive veterinary procedures.</p>
      </div>
      <div class="content-card reveal">
        <h2>Parasite Support</h2>
        <p class="price">&pound;30.00 per invertebrate assessment.</p>
        <p class="price">From &pound;49.00 per 7 nights where supportive treatment boarding is needed.</p>
      </div>
      <div class="content-card reveal">
        <h2>Moulting Support</h2>
        <p class="price">&pound;15.00 per invertebrate.</p>
        <p>Guidance for humidity, enclosure setup, and safe support during difficult moults.</p>
      </div>
      <div class="content-card reveal">
        <h2>Husbandry Review</h2>
        <p>We review enclosure setup, hydration, feeding routine, and environment factors to help prevent recurring welfare issues.</p>
      </div>
    </article>
    <?php require $rootPath . '/includes/clinic-sidebar.php'; ?>
  </section>
<?php require_once $rootPath . '/includes/footer.php'; ?>


