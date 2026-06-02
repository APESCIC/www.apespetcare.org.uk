<aside class="side">
  <div class="side-card reveal">
    <h3>Need Help Fast?</h3>
    <p>Our clinic team can guide you on routine care, first-aid support, and whether your pet should be referred to a vet.</p>
    <p><strong>Phone:</strong> <?= apes_escape($clinicPhone) ?><br><strong>Email:</strong> <?= apes_escape($clinicEmail) ?></p>
    <p><strong>Address:</strong> <?= apes_escape($clinicAddress) ?></p>
    <p><strong>Attendance notice:</strong> Please wait for confirmed appointment and location instructions before attending.</p>
    <div class="cta-group">
      <a class="btn btn-primary js-popup-window" href="<?= apes_escape($bookingPublicUrl) ?>" target="_blank" rel="noopener noreferrer" data-popup-name="apes_booking_form" data-popup-width="860" data-popup-height="900">Open booking form</a>
      <a class="btn btn-outline js-popup-window" href="<?= apes_escape($contactTicketUrl) ?>" data-popup-name="apes_contact_ticket" data-popup-width="560" data-popup-height="760">Contact Clinic</a>
      <a class="btn btn-outline" href="/donate/">Donate to Support Care</a>
    </div>
  </div>
</aside>
