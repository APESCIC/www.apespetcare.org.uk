<?php
$rootPath = dirname(__DIR__);
$pageTitle = 'About Us';
$metaDescription = 'Learn about APES Pet Care Clinic, our mission, and our welfare-first approach to pet support.';
$pageKicker = 'Who We Are';
$heroTitle = 'Compassionate Support For Pets And Their People';
$heroLead = 'APES Pet Care Clinic is part of a non-profit mission focused on practical animal welfare, especially for owners who need affordable support.';
$activeNav = 'about';
require_once $rootPath . '/includes/page-init.php';
require_once $rootPath . '/includes/header.php';
?>
  <?php require $rootPath . '/includes/hero.php'; ?>

  <section class="content-layout">
    <article class="article">
      <div class="content-card reveal">
        <h2>Our mission</h2>
        <p>We help pet owners access affordable, practical support so more animals can stay healthy, safe, and properly cared for.</p>
      </div>
      <div class="content-card reveal">
        <h2>Our clinic scope</h2>
        <p>We are a first aid and general welfare support clinic. We assess concerns, offer routine care guidance, and advise when veterinary care is needed.</p>
        <p>We do not diagnose disease, prescribe veterinary medicines, provide surgery, sedation, or invasive veterinary procedures.</p>
      </div>
      <div class="content-card reveal">
        <h2>Our values</h2>
        <p>Animal welfare comes first. We are non-judgmental, clear in our advice, and committed to helping families make safe decisions for their pets.</p>
      </div>
      <div class="content-card reveal">
        <h2>Species we support</h2>
        <p>Our team supports domestic and exotic species, including dogs, cats, rabbits, guinea pigs, ferrets, reptiles, and invertebrates.</p>
      </div>
    </article>
    <?php require $rootPath . '/includes/clinic-sidebar.php'; ?>
  </section>
<?php require_once $rootPath . '/includes/footer.php'; ?>
