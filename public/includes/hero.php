<?php
if (!isset($heroLogoPath)) {
    $heroLogoPath = '/assets/logos/APES_Pet_Care_Clinic_logo_master_transparent.png';
}

if (!isset($heroLogoAlt)) {
    $heroLogoAlt = '';
}
?>
<section class="hero">
  <article class="hero-panel reveal">
    <p class="page-kicker"><?= apes_escape($pageKicker) ?></p>
    <h1 class="hero-title"><?= apes_escape($heroTitle) ?></h1>
    <p class="hero-lead"><?= apes_escape($heroLead) ?></p>
    <?php if (!empty($heroBadges)): ?>
      <div class="hero-badges">
        <?php foreach ($heroBadges as $badge): ?>
          <span><?= apes_escape($badge) ?></span>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
  </article>
  <aside class="hero-logo reveal">
    <img src="<?= apes_escape($heroLogoPath) ?>" alt="<?= apes_escape($heroLogoAlt) ?>">
  </aside>
</section>
