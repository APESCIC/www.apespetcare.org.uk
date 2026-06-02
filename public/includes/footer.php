  </main>

  <footer class="page-footer">
    <div class="footer-wrap">
      <strong>APES Pet Care Clinic</strong>
      <span>Helping people in low-income or hardship situations to keep their pets healthy and safe.</span>
      <span><?= apes_escape($clinicAddress) ?> | <?= apes_escape($clinicPhone) ?> | <a href="mailto:<?= apes_escape($clinicEmail) ?>"><?= apes_escape($clinicEmail) ?></a></span>
      <span>Part of Association of Protecting Exotic Species CIC.</span>
      <div class="partner-vet">
        <span>We work with Bold Vets in St Helens.</span>
        <a href="https://boldvets.co.uk/" target="_blank" rel="noopener noreferrer">
          <img src="/assets/logos/bold-vets-logo.webp" alt="Bold Vets logo">
        </a>
      </div>
      <span class="site-version-line">Website version: <?= apes_escape($siteVersion) ?></span>
      <div class='onesignal-customlink-container'></div>
    </div>
  </footer>
</body>
</html>
