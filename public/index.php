<?php
$rootPath = __DIR__;
$pageTitle = 'Affordable Pet Health Support';
$metaDescription = 'APES Pet Care Clinic provides affordable first aid and general health support for pets, with clear referral advice when veterinary treatment is needed.';
$pageKicker = 'APES Pet Care Clinic';
$heroTitle = 'Supportive Pet Care For Every Species';
$heroLead = 'We help families with affordable first aid and general health support for dogs, cats, rabbits, reptiles, invertebrates, and more. If your pet needs a vet, we will tell you quickly and clearly.';
$activeNav = 'home';
require_once $rootPath . '/includes/page-init.php';
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
      <img src="/assets/logos/APES_Pet_Care_Clinic_logo_master_transparent.png" alt="APES Pet Care Clinic illustrated logo">
    </aside>
  </section>

  <div class="service-grid">
    <?php foreach ($servicesMenu as $service): ?>
      <a class="service-card reveal" href="<?= apes_escape($service['path']) ?>"><?= apes_escape($service['label']) ?></a>
    <?php endforeach; ?>
  </div>

  <section class="content-card prepay-section reveal">
    <h2><?= apes_escape($prepayCopy['heading']) ?></h2>
    <p class="prepay-section-intro"><?= apes_escape($prepayCopy['intro']) ?></p>
    <?= apes_render_prepay_note() ?>
    <?= apes_render_prepay_catalogue() ?>
  </section>

  <section class="content-layout">
    <article class="article">
      <div class="content-card reveal">
        <h2>What We Do</h2>
        <p>We offer practical first aid support, routine welfare checks, and general health guidance for a wide range of species.</p>
        <p>Our service is designed to help families who may struggle with the immediate cost of a veterinary consultation.</p>
      </div>
      <div class="content-card reveal">
        <h2>What We Do Not Do</h2>
        <p>We are not a veterinary surgery and we do not carry out operations, invasive procedures, sedation, or emergency surgery.</p>
        <p>When a pet needs veterinary treatment, we advise quickly and refer owners to an appropriate veterinary provider.</p>
      </div>
      <div class="content-card reveal">
        <h2>How We Help You Decide Next Steps</h2>
        <p>Many concerns can be managed with better husbandry, careful monitoring, and first aid support. Some concerns need urgent veterinary care.</p>
        <p>Our role is to assess, explain, and help you make safe decisions for your pet without delay.</p>
      </div>
      <div class="content-card reveal">
        <h2>Friendly, Affordable, and Non-Judgmental</h2>
        <p>Our team is committed to animal welfare first. We focus on clear advice, realistic support, and helping pet owners feel confident in what to do next.</p>
      </div>
    </article>
    <?php require $rootPath . '/includes/clinic-sidebar.php'; ?>
  </section>
<?php require_once $rootPath . '/includes/footer.php'; ?>
