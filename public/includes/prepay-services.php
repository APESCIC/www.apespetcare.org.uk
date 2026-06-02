<?php

$prepaySectionHeading = 'Pre-pay and book your Pet Care Clinic appointment';
$prepaySectionIntro = 'Choose the service your pet needs, complete secure payment through Stripe, then follow the booking instructions shown after payment to arrange your appointment.';
$prepaySupportingNote = 'Payment is taken securely through Stripe. After payment, you will be shown instructions to book your appointment.';

$prepayCategoryOrder = [
    'consultations' => 'Consultations',
    'routine-care' => 'Routine Care',
    'reptile-exotic-support' => 'Reptile and Exotic Support',
    'invertebrate-support' => 'Invertebrate Support',
    'small-animal-treatments' => 'Small Animal Treatments',
];

$prepayServices = [
    'general-remote-consultation' => [
        'key' => 'general-remote-consultation',
        'name' => 'General Remote Consultation',
        'description' => 'General consultation delivered remotely for pet care advice and triage.',
        'price' => '£7.50',
        'stripeUrl' => 'https://book.stripe.com/7sYbJ185k25u0Qw5xO3AY00',
        'category' => 'consultations',
        'routes' => ['/', '/general-services/'],
        'accessibleLabel' => 'Pre-pay and book: General Remote Consultation',
    ],
    'general-in-person-consultation' => [
        'key' => 'general-in-person-consultation',
        'name' => 'General In Person Consultation',
        'description' => 'General in-person clinic consultation for pet care advice and assessment.',
        'price' => '£15.00',
        'stripeUrl' => 'https://book.stripe.com/3cI3cv99o4dC7eU6BS3AY01',
        'category' => 'consultations',
        'routes' => ['/', '/general-services/'],
        'accessibleLabel' => 'Pre-pay and book: General In Person Consultation',
    ],
    'follow-up-consultation' => [
        'key' => 'follow-up-consultation',
        'name' => 'Follow Up Consultation',
        'description' => 'Follow-up consultation after an earlier appointment or treatment.',
        'price' => '£5.00',
        'stripeUrl' => 'https://book.stripe.com/fZu00jclA4dC1UAe4k3AY02',
        'category' => 'consultations',
        'routes' => ['/', '/general-services/'],
        'accessibleLabel' => 'Pre-pay and book: Follow Up Consultation',
    ],
    'health-check' => [
        'key' => 'health-check',
        'name' => 'Health Check',
        'description' => 'General pet health check service.',
        'price' => '£15.00',
        'stripeUrl' => 'https://buy.stripe.com/4gMdR93P4aC0bva3pG3AY03',
        'category' => 'consultations',
        'routes' => ['/', '/general-services/'],
        'accessibleLabel' => 'Pre-pay and book: Health Check',
    ],
    'flea-treatment' => [
        'key' => 'flea-treatment',
        'name' => 'Flea Treatment',
        'description' => 'Flea treatment service for applicable animals.',
        'price' => '£3.00',
        'stripeUrl' => 'https://book.stripe.com/14A4gzgBQ5hGdDibWc3AY04',
        'category' => 'routine-care',
        'routes' => ['/', '/dog-care/', '/cat-care/', '/ferret-care/'],
        'accessibleLabel' => 'Pre-pay and book: Flea Treatment',
    ],
    'worming-treatment' => [
        'key' => 'worming-treatment',
        'name' => 'Worming Treatment',
        'description' => 'Worming treatment service for applicable animals.',
        'price' => '£3.00',
        'stripeUrl' => 'https://book.stripe.com/dRmeVd0CS5hGgPu7FW3AY05',
        'category' => 'routine-care',
        'routes' => ['/', '/dog-care/', '/cat-care/', '/ferret-care/'],
        'accessibleLabel' => 'Pre-pay and book: Worming Treatment',
    ],
    'ear-cleaning' => [
        'key' => 'ear-cleaning',
        'name' => 'Ear Cleaning',
        'description' => 'Ear cleaning service.',
        'price' => '£7.50',
        'stripeUrl' => 'https://book.stripe.com/eVq00jclAh0odDi6BS3AY06',
        'category' => 'routine-care',
        'routes' => ['/', '/general-services/'],
        'accessibleLabel' => 'Pre-pay and book: Ear Cleaning',
    ],
    'nail-clipping' => [
        'key' => 'nail-clipping',
        'name' => 'Nail Clipping',
        'description' => 'Nail clipping service.',
        'price' => '£5.00',
        'stripeUrl' => 'https://book.stripe.com/9B67sL85k6lK42I9O43AY07',
        'category' => 'routine-care',
        'routes' => ['/', '/dog-care/', '/cat-care/', '/rabbit-care/', '/guinea-care/', '/ferret-care/', '/reptile-care/'],
        'accessibleLabel' => 'Pre-pay and book: Nail Clipping',
    ],
    'teeth-cleaning' => [
        'key' => 'teeth-cleaning',
        'name' => 'Teeth Cleaning',
        'description' => 'Teeth cleaning service.',
        'price' => '£7.50',
        'stripeUrl' => 'https://book.stripe.com/cNi8wPfxM39yfLq8K03AY08',
        'category' => 'routine-care',
        'routes' => ['/', '/dog-care/', '/cat-care/', '/rabbit-care/', '/guinea-care/', '/ferret-care/'],
        'accessibleLabel' => 'Pre-pay and book: Teeth Cleaning',
    ],
    'shedding-aid' => [
        'key' => 'shedding-aid',
        'name' => 'Shedding Aid',
        'description' => 'Shedding support service.',
        'price' => '£10.00',
        'stripeUrl' => 'https://book.stripe.com/9B600jfxM25ubvaaS83AY09',
        'category' => 'reptile-exotic-support',
        'routes' => ['/', '/reptile-care/'],
        'accessibleLabel' => 'Pre-pay and book: Shedding Aid',
    ],
    'fang-removal' => [
        'key' => 'fang-removal',
        'name' => 'Fang Removal',
        'description' => 'Fang removal service. Stripe lookup key indicates per fang.',
        'price' => '£10.00',
        'stripeUrl' => 'https://book.stripe.com/00wbJ10CS7pO1UAf8o3AY0a',
        'category' => 'reptile-exotic-support',
        'routes' => ['/', '/reptile-care/'],
        'accessibleLabel' => 'Pre-pay and book: Fang Removal',
    ],
    'parasite-removal-7-day-admittance' => [
        'key' => 'parasite-removal-7-day-admittance',
        'name' => 'Parasite Removal + 7 Day Admittance',
        'description' => 'Parasite removal with 7 day admittance included.',
        'price' => '£79.00 total',
        'stripeUrl' => 'https://buy.stripe.com/bJe4gz0CSh0o9n2gcs3AY0b',
        'category' => 'reptile-exotic-support',
        'routes' => ['/', '/reptile-care/'],
        'accessibleLabel' => 'Pre-pay and book: Parasite Removal + 7 Day Admittance',
    ],
    'respiratory-infection-7-day-admittance' => [
        'key' => 'respiratory-infection-7-day-admittance',
        'name' => 'Respiratory Infection + 7 Day Admittance',
        'description' => 'Respiratory infection support with 7 day admittance included.',
        'price' => '£64.00 total',
        'stripeUrl' => 'https://book.stripe.com/eVqaEXgBQ9xWeHm0du3AY0c',
        'category' => 'reptile-exotic-support',
        'routes' => ['/', '/reptile-care/'],
        'accessibleLabel' => 'Pre-pay and book: Respiratory Infection + 7 Day Admittance',
    ],
    'invert-parasite-removal-7-day-admittance' => [
        'key' => 'invert-parasite-removal-7-day-admittance',
        'name' => 'Invert Parasite Removal + 7 Day Admittance',
        'description' => 'Invert parasite removal with 7 day admittance included.',
        'price' => '£79.00 total',
        'stripeUrl' => 'https://book.stripe.com/7sYbJ199oh0odDi2lC3AY0d',
        'category' => 'invertebrate-support',
        'routes' => ['/', '/invert-care/'],
        'accessibleLabel' => 'Pre-pay and book: Invert Parasite Removal + 7 Day Admittance',
    ],
    'moult-support' => [
        'key' => 'moult-support',
        'name' => 'Moult Support',
        'description' => 'Moult support service for invertebrates.',
        'price' => '£15.00',
        'stripeUrl' => 'https://book.stripe.com/14AcN5ads25ucze0du3AY0e',
        'category' => 'invertebrate-support',
        'routes' => ['/', '/invert-care/'],
        'accessibleLabel' => 'Pre-pay and book: Moult Support',
    ],
    'small-animal-parasite-treatment-beaphar' => [
        'key' => 'small-animal-parasite-treatment-beaphar',
        'name' => 'Small Animal Parasite Treatment + Beaphar Spot On Rabbit & Guinea Pig',
        'description' => 'Small animal parasite treatment with Beaphar Spot On Rabbit & Guinea Pig.',
        'price' => '£12.49 total',
        'stripeUrl' => 'https://book.stripe.com/bJe6oH4T811qczed0g3AY0f',
        'category' => 'small-animal-treatments',
        'routes' => ['/', '/rabbit-care/', '/guinea-care/'],
        'accessibleLabel' => 'Pre-pay and book: Small Animal Parasite Treatment + Beaphar Spot On Rabbit & Guinea Pig',
    ],
];

function apes_get_prepay_copy(): array
{
    global $prepaySectionHeading, $prepaySectionIntro, $prepaySupportingNote;

    return [
        'heading' => $prepaySectionHeading,
        'intro' => $prepaySectionIntro,
        'note' => $prepaySupportingNote,
    ];
}

function apes_get_prepay_category_order(): array
{
    global $prepayCategoryOrder;

    return $prepayCategoryOrder;
}

function apes_get_prepay_services(): array
{
    global $prepayServices;

    return $prepayServices;
}

function apes_get_prepay_service(string $key): ?array
{
    $services = apes_get_prepay_services();

    return $services[$key] ?? null;
}

function apes_get_prepay_services_by_keys(array $keys): array
{
    $services = [];

    foreach ($keys as $key) {
        $service = apes_get_prepay_service((string) $key);
        if ($service !== null) {
            $services[] = $service;
        }
    }

    return $services;
}

function apes_get_prepay_services_grouped(?array $keys = null): array
{
    $services = $keys === null ? array_values(apes_get_prepay_services()) : apes_get_prepay_services_by_keys($keys);
    $categoryOrder = apes_get_prepay_category_order();
    $grouped = [];

    foreach ($categoryOrder as $categoryKey => $label) {
        $grouped[$categoryKey] = [
            'label' => $label,
            'services' => [],
        ];
    }

    foreach ($services as $service) {
        $categoryKey = $service['category'];
        if (!isset($grouped[$categoryKey])) {
            $grouped[$categoryKey] = [
                'label' => $categoryKey,
                'services' => [],
            ];
        }

        $grouped[$categoryKey]['services'][] = $service;
    }

    return array_filter(
        $grouped,
        static fn(array $group): bool => !empty($group['services'])
    );
}

function apes_render_prepay_button(array $service, string $class = 'btn btn-primary btn-prepay'): string
{
    ob_start();
    ?>
    <a
      class="<?= apes_escape($class) ?>"
      href="<?= apes_escape($service['stripeUrl']) ?>"
      target="_blank"
      rel="noopener noreferrer"
      aria-label="<?= apes_escape($service['accessibleLabel']) ?>"
    >Pre-pay and book</a>
    <?php

    return trim((string) ob_get_clean());
}

function apes_render_prepay_catalogue(?array $keys = null, string $variant = 'landing', bool $showCategoryHeadings = true): string
{
    $groupedServices = apes_get_prepay_services_grouped($keys);
    if ($groupedServices === []) {
        return '';
    }

    $gridClass = $variant === 'detail' ? 'prepay-grid prepay-grid-detail' : 'prepay-grid';

    ob_start();
    ?>
    <div class="prepay-groups<?= $variant === 'detail' ? ' prepay-groups-detail' : '' ?>">
      <?php foreach ($groupedServices as $group): ?>
        <section class="prepay-group">
          <?php if ($showCategoryHeadings): ?>
            <h3 class="prepay-group-title"><?= apes_escape($group['label']) ?></h3>
          <?php endif; ?>
          <div class="<?= apes_escape($gridClass) ?>">
            <?php foreach ($group['services'] as $service): ?>
              <article class="prepay-card<?= $variant === 'detail' ? ' prepay-card-detail' : '' ?>">
                <div class="prepay-card-header">
                  <h4 class="prepay-card-title"><?= apes_escape($service['name']) ?></h4>
                  <span class="prepay-card-price"><?= apes_escape($service['price']) ?></span>
                </div>
                <p class="prepay-card-copy"><?= apes_escape($service['description']) ?></p>
                <div class="prepay-card-actions">
                  <?= apes_render_prepay_button($service) ?>
                </div>
              </article>
            <?php endforeach; ?>
          </div>
        </section>
      <?php endforeach; ?>
    </div>
    <?php

    return trim((string) ob_get_clean());
}

function apes_render_prepay_cta_list(array $keys): string
{
    $services = apes_get_prepay_services_by_keys($keys);
    if ($services === []) {
        return '';
    }

    ob_start();
    ?>
    <div class="prepay-cta-list">
      <?php foreach ($services as $service): ?>
        <div class="prepay-cta-item">
          <div class="prepay-cta-copy">
            <span class="prepay-cta-title"><?= apes_escape($service['name']) ?></span>
            <span class="prepay-cta-price"><?= apes_escape($service['price']) ?></span>
          </div>
          <?= apes_render_prepay_button($service, 'btn btn-primary btn-prepay btn-prepay-inline') ?>
        </div>
      <?php endforeach; ?>
    </div>
    <?php

    return trim((string) ob_get_clean());
}

function apes_render_prepay_note(string $class = 'prepay-note'): string
{
    $copy = apes_get_prepay_copy();

    return '<p class="' . apes_escape($class) . '">' . apes_escape($copy['note']) . '</p>';
}
