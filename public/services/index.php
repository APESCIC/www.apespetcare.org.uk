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
  <?php require $rootPath . '/includes/hero.php'; ?>

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
        <p><a class="btn btn-outline js-popup-window" href="<?= apes_escape($contactTicketUrl) ?>" data-popup-name="apes_contact_ticket" data-popup-width="560" data-popup-height="760">Contact Clinic</a></p>
      </div>
    </article>
    <?php require $rootPath . '/includes/clinic-sidebar.php'; ?>
  </section>
<?php require_once $rootPath . '/includes/footer.php'; ?>
