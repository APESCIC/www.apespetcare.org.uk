<?php
$rootPath = dirname(__DIR__);
$pageTitle = 'About Us';
$metaDescription = 'Learn about APES Pet Care Clinic, our mission, and our first-aid-first approach to pet welfare support.';
$pageKicker = 'Who We Are';
$heroTitle = 'Compassionate Support For Pets And Their People';
$heroLead = 'APES Pet Care Clinic is part of a non-profit mission focused on practical animal welfare, especially for owners who need affordable support.';
$activeNav = 'about';
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
        <h2>Our Mission</h2>
        <p>We help pet owners access affordable, practical support so more animals can stay healthy, safe, and properly cared for.</p>
      </div>
      <div class="content-card reveal">
        <h2>Our Clinic Scope</h2>
        <p>We are a first aid and general health support clinic. We assess concerns, offer routine care guidance, and advise when veterinary care is needed.</p>
        <p>We do not provide operations or invasive veterinary procedures.</p>
      </div>
      <div class="content-card reveal">
        <h2>Our Values</h2>
        <p>Animal welfare comes first. We are non-judgmental, clear in our advice, and committed to helping families make safe decisions for their pets.</p>
      </div>
      <div class="content-card reveal">
        <h2>Species We Support</h2>
        <p>Our team supports domestic and exotic species, including dogs, cats, rabbits, guinea pigs, ferrets, reptiles, and invertebrates.</p>
      </div>
    </article>
    <?php require $rootPath . '/includes/clinic-sidebar.php'; ?>
  </section>
<?php require_once $rootPath . '/includes/footer.php'; ?>
