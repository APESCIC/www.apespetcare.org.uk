<!doctype html>
<html lang="en-GB">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= apes_escape($pageTitle) ?> | <?= apes_escape($siteName) ?></title>
  <meta name="description" content="<?= apes_escape($metaDescription) ?>">
  <link rel="icon" type="image/png" sizes="64x64" href="/assets/logos/APES_Pet_Care_Clinic_logo_web_64px.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,500;9..144,700&family=Nunito:wght@400;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/assets/css/styles.css">
  <script defer src="/assets/js/site.js"></script>
  <script>
    window.chatwootSettings = {"position":"right","type":"standard","launcherTitle":"Speak to a advisor."};
    (function(d,t) {
      var BASE_URL="https://chatwoot.workspace.apes.org.uk";
      var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
      g.src=BASE_URL+"/packs/js/sdk.js";
      g.async = true;
      s.parentNode.insertBefore(g,s);
      g.onload=function(){
        window.chatwootSDK.run({
          websiteToken: 'xnfcZVWwvLQj3X6wDnbfMcxY',
          baseUrl: BASE_URL
        })
      }
    })(document,"script");
  </script>
  <script src="https://cdn.onesignal.com/sdks/web/v16/OneSignalSDK.page.js" defer></script>
  <script>
    window.OneSignalDeferred = window.OneSignalDeferred || [];
    OneSignalDeferred.push(async function(OneSignal) {
      await OneSignal.init({
        appId: "1526fa8e-132a-46ff-90b2-94386a285bde",
      });
    });
  </script>
</head>
<body class="<?= apes_escape($bodyClass) ?>">
  <header class="site-header">
    <div class="header-wrap">
      <a class="brand" href="/">
        <img src="/assets/logos/APES_Pet_Care_Clinic_logo_web_128px.png" alt="APES Pet Care Clinic logo">
        <div class="brand-copy">
          <span class="brand-title">APES Pet Care Clinic</span>
          <span class="brand-subtitle">Compassion first, for every species.</span>
          <span class="brand-version"><?= apes_escape($siteVersionTag) ?></span>
        </div>
      </a>
      <button class="menu-toggle" aria-expanded="false" data-menu-toggle>Menu</button>
      <nav class="main-nav" data-main-nav>
        <a class="<?= trim(apes_is_active($activeNav, 'home')) ?>" href="/">Home</a>
        <div class="drop mega<?= apes_is_active($activeNav, 'services') ?>">
          <a class="drop-trigger" href="#" aria-haspopup="true">Services</a>
          <div class="drop-panel mega-panel">
            <p class="mega-heading">Pet Care Services</p>
            <div class="mega-links">
              <?php foreach ($servicesMenu as $service): ?>
                <a class="mega-link" href="<?= apes_escape($service['path']) ?>"><?= apes_escape($service['label']) ?></a>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
        <a class="<?= trim(apes_is_active($activeNav, 'about')) ?>" href="/about-us/">About Us</a>
        <a class="<?= trim(apes_is_active($activeNav, 'bookings')) ?>" href="/bookings/">Bookings</a>
        <a class="<?= trim(apes_is_active($activeNav, 'donate')) ?>" href="/donate/">Donate</a>
        <a class="<?= trim(apes_is_active($activeNav, 'events')) ?>" href="/events/">Events</a>
        <a class="<?= trim(apes_is_active($activeNav, 'news')) ?>" href="<?= apes_escape($newsUrl) ?>" target="_blank" rel="noopener noreferrer">News</a>
        <a class="<?= trim(apes_is_active($activeNav, 'changelog')) ?>" href="<?= apes_escape($changelogPath) ?>">Changelog</a>
        <div class="drop<?= apes_is_active($activeNav, 'policies') ?>">
          <a class="drop-trigger" href="#" aria-haspopup="true">Policies</a>
          <div class="drop-panel">
            <?php foreach ($policiesMenu as $policy): ?>
              <a href="<?= apes_escape($policy['path']) ?>"><?= apes_escape($policy['label']) ?></a>
            <?php endforeach; ?>
          </div>
        </div>
        <a class="<?= trim(apes_is_active($activeNav, 'contact')) ?>" href="/contact/">Contact</a>
      </nav>
    </div>
  </header>

  <?php if ($showNotice): ?>
    <div class="notice reveal"><?= apes_escape($noticeText) ?></div>
  <?php endif; ?>
  <div class="scope-alert reveal"><?= apes_escape($scopeText) ?></div>

  <main class="page">
