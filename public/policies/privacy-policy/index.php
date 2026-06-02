<?php
$rootPath = dirname(__DIR__, 2);
$pageTitle = 'Privacy Policy';
$metaDescription = 'Read how APES Pet Care Clinic handles and protects your personal information.';
$pageKicker = 'Clinic Policy';
$heroTitle = 'Privacy Policy';
$heroLead = 'We are committed to handling your personal information responsibly and in line with UK data protection requirements.';
$activeNav = 'policies';
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
        <h2>Information We Collect</h2>
        <p>We may collect contact details, pet details, booking information, and service communication records needed to deliver our support.</p>
      </div>
      <div class="content-card reveal">
        <h2>How We Use Your Data</h2>
        <p>Your data is used for appointment management, support communication, welfare guidance, legal obligations, and service improvement.</p>
      </div>
      <div class="content-card reveal">
        <h2>Data Protection</h2>
        <p>We operate in line with applicable UK data protection law and GDPR principles, including secure handling and limited access to personal data.</p>
      </div>
      <div class="content-card reveal">
        <h2>Your Rights</h2>
        <p>You may request access, correction, or deletion of eligible personal data by contacting our team through official channels.</p>
      </div>
    </article>
    <?php require $rootPath . '/includes/clinic-sidebar.php'; ?>
  </section>
<?php require_once $rootPath . '/includes/footer.php'; ?>
