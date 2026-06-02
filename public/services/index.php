<?php
$rootPath = dirname(__DIR__);
$pageTitle = 'Services Hub';
$metaDescription = 'Explore APES Pet Care Clinic services, safer pre-payment guidance, and the support routes available for each species.';
$pageKicker = 'Pet Care Services';
$heroTitle = 'Services Hub';
$heroLead = 'Start here for routine welfare support, referral triage, payment guidance, and species-specific next steps before you book.';
$activeNav = 'services';
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
      <img src="/assets/logos/APES_Pet_Care_Clinic_logo_master_transparent.png" alt="">
    </aside>
  </section>

  <section class="content-layout">
    <article class="article">
      <div class="content-card reveal">
        <h2>Choose the right route first</h2>
        <p>Use the species and service links below to check scope, suitability, and warning signs before paying for any support. APES provides first aid, welfare guidance, husbandry support, and referral triage only.</p>
        <?= apes_render_scope_notice() ?>
      </div>
      <div class="content-card reveal">
        <h2>Species and support pages</h2>
        <div class="service-grid">
          <?php foreach ($servicesMenu as $service): ?>
            <a class="service-card" href="<?= apes_escape($service['path']) ?>"><?= apes_escape($service['label']) ?></a>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="content-card prepay-section reveal">
        <h2><?= apes_escape($prepayCopy['heading']) ?></h2>
        <p class="prepay-section-intro"><?= apes_escape($prepayCopy['intro']) ?></p>
        <?= apes_render_before_you_pay() ?>
        <?= apes_render_prepay_catalogue() ?>
        <?= apes_render_prepay_note() ?>
      </div>
      <div class="content-card reveal">
        <h2>Need help before paying?</h2>
        <p>If you are unsure which route fits your pet, contact the clinic team before using a payment link. We can help you decide whether APES support, a booking, or urgent veterinary care is the safest next step.</p>
        <p><a class="btn btn-outline js-contact-ticket" href="<?= apes_escape($contactTicketUrl) ?>">Contact Clinic</a></p>
      </div>
    </article>
    <?php require $rootPath . '/includes/clinic-sidebar.php'; ?>
  </section>
<?php require_once $rootPath . '/includes/footer.php'; ?>
