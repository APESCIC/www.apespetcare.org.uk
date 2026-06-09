<?php
$rootPath = dirname(__DIR__);
$pageTitle = 'Care Plans';
$metaDescription = 'Compare APES Pet Care Clinic care plan pricing, eligibility guidance, and safe referral boundaries before you join.';
$pageKicker = 'Pet Care Service';
$heroTitle = 'Care Plans';
$heroLead = 'Review care plan pricing, compare routine support options, and check the safest next step for your pet before you join.';
$activeNav = 'services';
require_once $rootPath . '/includes/page-init.php';
require_once $rootPath . '/includes/header.php';
?>
  <?php require $rootPath . '/includes/hero.php'; ?>

  <section class="content-layout">
    <article class="article">
      <div class="content-card reveal">
        <h2>Plan overview</h2>
        <p>Our care plans are designed to support preventive welfare through regular guidance, monitoring, and scheduled support sessions where APES confirms they are appropriate.</p>
        <p>Use the pricing table below to compare plan options, then contact the clinic if you need help choosing the safest fit for your pet's needs.</p>
        <?= apes_render_scope_notice() ?>
      </div>

      <div class="content-card care-plan-pricing-card reveal">
        <h2>Choose your care plan</h2>
        <p class="care-plan-pricing-intro">Review the available APES care plan options below. The pricing table is hosted securely by Stripe and keeps plan selection in one place before you contact us or continue with the next step.</p>
        <div class="care-plan-pricing-shell">
          <script async src="https://js.stripe.com/v3/pricing-table.js"></script>
          <stripe-pricing-table pricing-table-id="prctbl_1RLjZPGgIPZ504QuMIPf5Sq2"
          publishable-key="pk_live_51REcufGgIPZ504QucDz6iEJmUKQLRAfDcbDLBnqGBnoyM8hyAtRraJPh0897lKqRHQLVtsidvDKLev243ND8ll8A009jwou6Vd">
          </stripe-pricing-table>
        </div>
        <p class="care-plan-support-note">If the pricing table does not load, or if you are unsure whether a plan is suitable, please contact the clinic before paying so we can guide you safely.</p>
        <noscript>
          <p class="care-plan-support-note">JavaScript is required to display the live pricing table. Please contact the clinic if you would like help choosing a care plan.</p>
        </noscript>
      </div>

      <div class="care-plan-info-grid">
        <div class="content-card reveal">
          <h2>Eligibility and exclusions</h2>
          <p>Care plans support routine welfare guidance and cost-spreading for planned support. They do not guarantee treatment, do not replace veterinary care, and are not suitable for emergencies, severe illness, surgery, sedation, or invasive procedures.</p>
        </div>
        <div class="content-card reveal">
          <h2>Flexible options</h2>
          <p>Plans can range from entry-level support to enhanced monitoring, with the exact content confirmed after APES reviews your pet's welfare needs and the safe scope of support.</p>
        </div>
        <div class="content-card reveal">
          <h2>Multiple pets</h2>
          <p>Where suitable, families with multiple pets may be eligible for adjusted plan pricing or a tailored support package.</p>
        </div>
      </div>

      <div class="content-card care-plan-action-card reveal">
        <h2>Before you join a plan</h2>
        <p>Please contact the clinic before paying for a plan if your pet has urgent symptoms, suspected disease, severe pain, breathing difficulty, collapse, or another concern that may need a veterinary surgeon immediately.</p>
        <p>If you need help checking suitability, our team can talk through whether a care plan, a standard booking, or direct veterinary care is the safest route.</p>
        <div class="care-plan-action-row">
          <a class="btn btn-outline js-contact-ticket" href="<?= apes_escape($contactTicketUrl) ?>">Contact Clinic</a>
        </div>
      </div>
    </article>
    <?php require $rootPath . '/includes/clinic-sidebar.php'; ?>
  </section>
<?php require_once $rootPath . '/includes/footer.php'; ?>
