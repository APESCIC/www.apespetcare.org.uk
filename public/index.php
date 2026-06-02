<?php
$rootPath = __DIR__;
$pageTitle = 'Affordable Pet Welfare Support';
$metaDescription = 'APES Pet Care Clinic provides affordable first aid, welfare support, and clear referral advice for pets and their carers.';
$pageKicker = 'APES Pet Care Clinic';
$heroTitle = 'Supportive Pet Care For Every Species';
$heroLead = 'We help families with affordable first aid, routine welfare support, and clear referral triage for dogs, cats, rabbits, reptiles, invertebrates, and more.';
$activeNav = 'home';
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
        <h2>What we do</h2>
        <p>We offer practical first aid support, routine welfare guidance, husbandry advice, and referral triage for a wide range of species.</p>
        <p>Our service is designed to help families who may struggle with the immediate cost of a veterinary consultation while still making safe next-step decisions.</p>
      </div>
      <div class="content-card reveal">
        <h2>What we do not do</h2>
        <p>We are not a veterinary surgery and we do not diagnose disease, prescribe veterinary medicines, carry out operations, perform invasive procedures, provide sedation, or replace emergency veterinary care.</p>
        <p>When a pet needs veterinary treatment, we advise quickly and refer owners to an appropriate veterinary provider.</p>
      </div>
      <div class="content-card reveal">
        <h2>How we help you decide next steps</h2>
        <p>Many concerns can be managed with better husbandry, careful monitoring, and first aid support. Some concerns need urgent veterinary care instead of clinic support.</p>
        <p>Our role is to observe, explain, and help you make safe decisions for your pet without delay.</p>
      </div>
      <div class="content-card reveal">
        <h2>Before you pay</h2>
        <p>Start with our Services Hub before using a payment link. Each route explains scope, suitability, and when veterinary care is the safer choice.</p>
        <?= apes_render_before_you_pay() ?>
        <div class="booking-actions">
          <a class="btn btn-primary" href="<?= apes_escape($servicesHubPath) ?>">Open the Services Hub</a>
        </div>
      </div>
      <div class="content-card reveal">
        <h2>Species and support pages</h2>
        <div class="service-grid">
          <?php foreach ($servicesMenu as $service): ?>
            <a class="service-card" href="<?= apes_escape($service['path']) ?>"><?= apes_escape($service['label']) ?></a>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="content-card reveal">
        <h2>Friendly, affordable, and non-judgmental</h2>
        <p>Our team is committed to animal welfare first. We focus on clear advice, realistic support, and helping pet owners feel confident in what to do next.</p>
      </div>
    </article>
    <?php require $rootPath . '/includes/clinic-sidebar.php'; ?>
  </section>
<?php require_once $rootPath . '/includes/footer.php'; ?>
