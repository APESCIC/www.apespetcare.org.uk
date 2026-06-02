<?php
$rootPath = dirname(__DIR__);
$pageTitle = 'Donate';
$metaDescription = 'Support APES Pet Care Clinic and help more pets access affordable first aid and general health support.';
$pageKicker = 'Support APES';
$heroTitle = 'Help Us Keep Pet Care Accessible';
$heroLead = 'Your support helps us continue practical welfare work for pets and families who need affordable help.';
$activeNav = 'donate';
$donationSupplies = [
    'Clean blankets for warmth and recovery areas',
    'Paper towels for hygiene and day-to-day cleaning',
    'Tea towels for drying, bedding changes, and handling support',
    'Pet bedding and fleece liners in good clean condition',
    'Unopened species-appropriate food and feeding supplies',
    'Cleaning supplies, bowls, and small enrichment items',
];
$donationSteps = [
    'Contact the clinic team before donating bulky or specialist items so we can confirm what is most urgently needed.',
    'Bring donations to our clinic address during agreed times, or ask us about the safest drop-off arrangement for your items.',
    'Please make sure reusable items are clean, dry, and in good condition so they can go straight into helping pets and their carers.',
];
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
    <aside class="donate-hero-scene reveal" aria-label="Illustrated donation highlights">
      <article class="donate-hero-card">
        <div class="donate-hero-icon" aria-hidden="true">
          <svg viewBox="0 0 120 120" focusable="false">
            <rect x="18" y="54" width="84" height="36" rx="16"></rect>
            <rect x="30" y="36" width="60" height="30" rx="14"></rect>
            <path d="M34 72h52"></path>
            <path d="M34 82h34"></path>
          </svg>
        </div>
        <h2>Supplies</h2>
        <p>Blankets, paper towels, tea towels, and practical items all help with daily welfare work.</p>
      </article>
      <article class="donate-hero-card">
        <div class="donate-hero-icon donate-hero-icon-box" aria-hidden="true">
          <svg viewBox="0 0 120 120" focusable="false">
            <path d="M24 42h72l-10 18H34z"></path>
            <path d="M30 58h60v34H30z"></path>
            <path d="M48 58v34"></path>
            <path d="M60 74h18"></path>
          </svg>
        </div>
        <h2>Wish List</h2>
        <p>Useful donations can support cleaning, comfort, feeding, transport, and short-term recovery spaces.</p>
      </article>
      <article class="donate-hero-card donate-hero-card-accent">
        <div class="donate-hero-icon donate-hero-icon-heart" aria-hidden="true">
          <svg viewBox="0 0 120 120" focusable="false">
            <circle cx="60" cy="60" r="44"></circle>
            <path d="M60 83 39 63c-8-8-8-20 0-28s20-8 28 0l3 3 3-3c8-8 20-8 28 0s8 20 0 28z"></path>
          </svg>
        </div>
        <h2>Funds</h2>
        <p>Financial donations help us keep support accessible and respond when the need is greatest.</p>
      </article>
    </aside>
  </section>

  <section class="content-layout">
    <article class="article">
      <div class="content-card reveal">
        <h2>Choose How You Want to Help</h2>
        <p>There are two simple ways to support our work: donate practical supplies that help us every day, or donate funds that help us respond quickly to the needs of pets and families using our services.</p>
        <div class="donation-grid">
          <article class="donation-option-card">
            <div class="donation-option-top">
              <span class="donation-option-pill">Donate Supplies</span>
              <h3>Everyday items that make a real difference</h3>
            </div>
            <p>We welcome donations from the public of clean blankets, paper towels, tea towels, and other practical items that support welfare, comfort, hygiene, and day-to-day care.</p>
            <ul class="donation-list">
              <?php foreach ($donationSupplies as $item): ?>
                <li><?= apes_escape($item) ?></li>
              <?php endforeach; ?>
            </ul>
          </article>
          <article class="donation-option-card donation-option-card-accent">
            <div class="donation-option-top">
              <span class="donation-option-pill">Donate Funds</span>
              <h3>Help fund the work we do</h3>
            </div>
            <p>Your donation helps us cover the resources, welfare support, and practical care costs that allow us to keep helping pets and their carers.</p>
            <div class="donation-button-wrap">
              <a class="apes-donate-button" href="https://donorbox.org/apes-pet-care-clinic-donations" onclick="window.open(this.href, 'apesDonatePopup', 'popup=yes,width=720,height=820,resizable=yes,scrollbars=yes'); return false;">
                <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                  <path d="M12 21 4.9 13.9c-2.6-2.6-2.6-6.8 0-9.4s6.8-2.6 9.4 0l.7.7.7-.7c2.6-2.6 6.8-2.6 9.4 0s2.6 6.8 0 9.4Z"></path>
                </svg>
                <span>Donate Now</span>
              </a>
            </div>
            <p class="donation-note">This button opens our secure donation page in a separate popup window so you can keep this page open while you give.</p>
          </article>
        </div>
      </div>
      <div class="content-card reveal">
        <h2>How to Donate Helpful Items</h2>
        <p>If you would like to donate practical supplies, please get in touch with us first so we can confirm what is currently most useful and arrange the best time for your donation.</p>
        <ol class="donation-steps">
          <?php foreach ($donationSteps as $step): ?>
            <li><?= apes_escape($step) ?></li>
          <?php endforeach; ?>
        </ol>
        <p><strong>Drop-off location:</strong> <?= apes_escape($clinicAddress) ?></p>
        <p><strong>Need to check before donating?</strong> Call <?= apes_escape($clinicPhone) ?>, email <a href="mailto:<?= apes_escape($clinicEmail) ?>"><?= apes_escape($clinicEmail) ?></a>, or use our <a href="/contact/">contact page</a> to ask what would help most right now.</p>
      </div>
      <div class="content-card reveal">
        <h2>Items That Can Support Our Work</h2>
        <p>Alongside blankets, paper towels, and tea towels, there are lots of smaller items that can support the daily running of our welfare work.</p>
        <div class="wishlist-chips" aria-label="Examples of useful donated items">
          <span>Blankets</span>
          <span>Paper towels</span>
          <span>Tea towels</span>
          <span>Pet bedding</span>
          <span>Fleece liners</span>
          <span>Unopened food</span>
          <span>Feeding bowls</span>
          <span>Cleaning supplies</span>
          <span>Pet carriers</span>
          <span>Enrichment items</span>
        </div>
      </div>
      <div class="content-card reveal">
        <h2>Thank You</h2>
        <p>Whether you donate supplies or give financially, your support helps pets receive timely care guidance and helps owners make safe decisions before concerns become emergencies.</p>
      </div>
    </article>
    <?php require $rootPath . '/includes/clinic-sidebar.php'; ?>
  </section>
<?php require_once $rootPath . '/includes/footer.php'; ?>
