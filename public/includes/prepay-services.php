<?php

$prepaySectionHeading = 'Pre-pay for welfare support and booking review';
$prepaySectionIntro = 'Choose the service your pet may need, complete secure payment through Stripe, then follow the booking or suitability instructions shown after payment. Payment does not guarantee that a service is clinically suitable.';
$prepaySupportingNote = 'Payment is taken securely through Stripe. After payment, you will receive booking or suitability instructions based on the service you selected.';

$prepayCategoryOrder = [
    'consultations' => 'Consultations',
    'routine-care' => 'Routine welfare support',
    'reptile-exotic-support' => 'Reptile and exotic support',
    'invertebrate-support' => 'Invertebrate support',
    'small-animal-treatments' => 'Small animal welfare support',
];

$prepayServices = [
    'general-remote-consultation' => [
        'key' => 'general-remote-consultation',
        'name' => 'General remote welfare consultation',
        'heading' => 'General remote welfare consultation',
        'description' => 'Remote first-aid, welfare, and next-step guidance for pet owners who need advice before arranging further support.',
        'scopeWarning' => 'This consultation provides welfare guidance and referral triage only. It does not diagnose disease or replace a veterinary surgeon.',
        'paymentSuitabilityWarning' => 'Pre-payment reserves a remote welfare consultation slot and does not confirm that hands-on treatment is appropriate.',
        'stripeProviderNote' => 'Payment is processed securely through Stripe.',
        'externalLinkNote' => 'The payment link opens an external Stripe page.',
        'riskFlag' => 'low',
        'ctaText' => 'Pre-pay and book',
        'price' => 'GBP 7.50',
        'stripeUrl' => 'https://book.stripe.com/7sYbJ185k25u0Qw5xO3AY00',
        'category' => 'consultations',
        'routes' => ['/', '/services/', '/general-services/'],
        'accessibleLabel' => 'Pre-pay and book: General remote welfare consultation',
        'paymentReference' => 'Stripe link key 7sYbJ185k25u0Qw5xO3AY00',
    ],
    'general-in-person-consultation' => [
        'key' => 'general-in-person-consultation',
        'name' => 'General in-person welfare consultation',
        'heading' => 'General in-person welfare consultation',
        'description' => 'In-person welfare guidance and referral triage for pets needing hands-on observation before next steps are decided.',
        'scopeWarning' => 'This consultation provides first aid and welfare support only. It does not include diagnosis, surgery, sedation, or invasive treatment.',
        'paymentSuitabilityWarning' => 'Pre-payment reserves an appointment request and does not confirm that the requested service is clinically suitable.',
        'stripeProviderNote' => 'Payment is processed securely through Stripe.',
        'externalLinkNote' => 'The payment link opens an external Stripe page.',
        'riskFlag' => 'low',
        'ctaText' => 'Pre-pay and book',
        'price' => 'GBP 15.00',
        'stripeUrl' => 'https://book.stripe.com/3cI3cv99o4dC7eU6BS3AY01',
        'category' => 'consultations',
        'routes' => ['/', '/services/', '/general-services/'],
        'accessibleLabel' => 'Pre-pay and book: General in-person welfare consultation',
        'paymentReference' => 'Stripe link key 3cI3cv99o4dC7eU6BS3AY01',
    ],
    'follow-up-consultation' => [
        'key' => 'follow-up-consultation',
        'name' => 'Follow-up welfare consultation',
        'heading' => 'Follow-up welfare consultation',
        'description' => 'Follow-up welfare guidance after a previous APES appointment, including monitoring advice and referral review.',
        'scopeWarning' => 'Follow-up consultations review welfare progress and do not replace veterinary diagnosis or emergency care.',
        'paymentSuitabilityWarning' => 'Pre-payment books a follow-up review only where APES confirms it is appropriate.',
        'stripeProviderNote' => 'Payment is processed securely through Stripe.',
        'externalLinkNote' => 'The payment link opens an external Stripe page.',
        'riskFlag' => 'low',
        'ctaText' => 'Pre-pay and book',
        'price' => 'GBP 5.00',
        'stripeUrl' => 'https://book.stripe.com/fZu00jclA4dC1UAe4k3AY02',
        'category' => 'consultations',
        'routes' => ['/', '/services/', '/general-services/'],
        'accessibleLabel' => 'Pre-pay and book: Follow-up welfare consultation',
        'paymentReference' => 'Stripe link key fZu00jclA4dC1UAe4k3AY02',
    ],
    'health-check' => [
        'key' => 'health-check',
        'name' => 'Routine welfare review',
        'heading' => 'Routine welfare review',
        'description' => 'A routine welfare observation appointment covering condition, husbandry, and signs that may need veterinary referral.',
        'scopeWarning' => 'This review is observational and does not provide diagnosis, prescription, or veterinary treatment.',
        'paymentSuitabilityWarning' => 'Pre-payment requests a routine welfare review and does not confirm that a clinical problem can be resolved by APES.',
        'stripeProviderNote' => 'Payment is processed securely through Stripe.',
        'externalLinkNote' => 'The payment link opens an external Stripe page.',
        'riskFlag' => 'medium',
        'ctaText' => 'Pre-pay and book',
        'price' => 'GBP 15.00',
        'stripeUrl' => 'https://buy.stripe.com/4gMdR93P4aC0bva3pG3AY03',
        'category' => 'consultations',
        'routes' => ['/', '/services/', '/general-services/'],
        'accessibleLabel' => 'Pre-pay and book: Routine welfare review',
        'paymentReference' => 'Stripe link key 4gMdR93P4aC0bva3pG3AY03',
    ],
    'flea-treatment' => [
        'key' => 'flea-treatment',
        'name' => 'Flea control support',
        'heading' => 'Flea control support',
        'description' => 'Welfare-first guidance for flea concerns, including suitability checks, owner advice, and referral when veterinary care may be needed.',
        'scopeWarning' => 'APES offers suitability review, owner guidance, and referral triage only. Suspected skin disease or severe illness must be assessed by a veterinary surgeon.',
        'paymentSuitabilityWarning' => 'Pre-payment is subject to a suitability check and does not guarantee that flea support is the right option.',
        'stripeProviderNote' => 'Payment is processed securely through Stripe.',
        'externalLinkNote' => 'The payment link opens an external Stripe page.',
        'riskFlag' => 'medium',
        'ctaText' => 'Pre-pay and book',
        'price' => 'GBP 3.00',
        'stripeUrl' => 'https://book.stripe.com/14A4gzgBQ5hGdDibWc3AY04',
        'category' => 'routine-care',
        'routes' => ['/', '/services/', '/dog-care/', '/cat-care/', '/ferret-care/'],
        'accessibleLabel' => 'Pre-pay and book: Flea control support',
        'paymentReference' => 'Stripe link key 14A4gzgBQ5hGdDibWc3AY04',
    ],
    'worming-treatment' => [
        'key' => 'worming-treatment',
        'name' => 'Parasite control guidance',
        'heading' => 'Parasite control guidance',
        'description' => 'Guidance on routine parasite-control support, suitability checks, and when veterinary assessment is the safer next step.',
        'scopeWarning' => 'APES does not diagnose internal disease or prescribe veterinary medicines. Suspected systemic illness must be referred to a veterinary surgeon.',
        'paymentSuitabilityWarning' => 'Pre-payment is subject to suitability review and does not confirm that parasite-control support is appropriate.',
        'stripeProviderNote' => 'Payment is processed securely through Stripe.',
        'externalLinkNote' => 'The payment link opens an external Stripe page.',
        'riskFlag' => 'medium',
        'ctaText' => 'Pre-pay and book',
        'price' => 'GBP 3.00',
        'stripeUrl' => 'https://book.stripe.com/dRmeVd0CS5hGgPu7FW3AY05',
        'category' => 'routine-care',
        'routes' => ['/', '/services/', '/dog-care/', '/cat-care/', '/ferret-care/'],
        'accessibleLabel' => 'Pre-pay and book: Parasite control guidance',
        'paymentReference' => 'Stripe link key dRmeVd0CS5hGgPu7FW3AY05',
    ],
    'ear-cleaning' => [
        'key' => 'ear-cleaning',
        'name' => 'Ear hygiene guidance',
        'heading' => 'Ear hygiene guidance',
        'description' => 'Routine ear-care support and owner guidance where a simple welfare review is appropriate.',
        'scopeWarning' => 'This service does not diagnose infection or replace veterinary treatment for painful, bleeding, or deeply affected ears.',
        'paymentSuitabilityWarning' => 'Pre-payment requests a routine ear-care review only where APES confirms suitability.',
        'stripeProviderNote' => 'Payment is processed securely through Stripe.',
        'externalLinkNote' => 'The payment link opens an external Stripe page.',
        'riskFlag' => 'medium',
        'ctaText' => 'Pre-pay and book',
        'price' => 'GBP 7.50',
        'stripeUrl' => 'https://book.stripe.com/eVq00jclAh0odDi6BS3AY06',
        'category' => 'routine-care',
        'routes' => ['/', '/services/', '/general-services/'],
        'accessibleLabel' => 'Pre-pay and book: Ear hygiene guidance',
        'paymentReference' => 'Stripe link key eVq00jclAh0odDi6BS3AY06',
    ],
    'nail-clipping' => [
        'key' => 'nail-clipping',
        'name' => 'Nail clipping support',
        'heading' => 'Nail clipping support',
        'description' => 'Routine nail-care support for pets that can be handled safely without veterinary sedation.',
        'scopeWarning' => 'APES does not sedate animals for nail care. Distressed, injured, or medically unstable pets may need veterinary handling support.',
        'paymentSuitabilityWarning' => 'Pre-payment is for routine nail clipping support and remains subject to safe-handling suitability.',
        'stripeProviderNote' => 'Payment is processed securely through Stripe.',
        'externalLinkNote' => 'The payment link opens an external Stripe page.',
        'riskFlag' => 'low',
        'ctaText' => 'Pre-pay and book',
        'price' => 'GBP 5.00',
        'stripeUrl' => 'https://book.stripe.com/9B67sL85k6lK42I9O43AY07',
        'category' => 'routine-care',
        'routes' => ['/', '/services/', '/dog-care/', '/cat-care/', '/rabbit-care/', '/guinea-care/', '/ferret-care/', '/reptile-care/'],
        'accessibleLabel' => 'Pre-pay and book: Nail clipping support',
        'paymentReference' => 'Stripe link key 9B67sL85k6lK42I9O43AY07',
    ],
    'teeth-cleaning' => [
        'key' => 'teeth-cleaning',
        'name' => 'Oral hygiene guidance',
        'heading' => 'Oral hygiene guidance',
        'description' => 'Visual oral-welfare observations and home-care guidance with referral advice where suspected disease needs a veterinary surgeon.',
        'scopeWarning' => 'APES does not diagnose dental disease, scale teeth under anaesthesia, or provide invasive dental treatment.',
        'paymentSuitabilityWarning' => 'Pre-payment requests an oral-welfare guidance session only and does not guarantee that a clinical dental problem can be managed by APES.',
        'stripeProviderNote' => 'Payment is processed securely through Stripe.',
        'externalLinkNote' => 'The payment link opens an external Stripe page.',
        'riskFlag' => 'medium',
        'ctaText' => 'Pre-pay and book',
        'price' => 'GBP 7.50',
        'stripeUrl' => 'https://book.stripe.com/cNi8wPfxM39yfLq8K03AY08',
        'category' => 'routine-care',
        'routes' => ['/', '/services/', '/dog-care/', '/cat-care/', '/rabbit-care/', '/guinea-care/', '/ferret-care/'],
        'accessibleLabel' => 'Pre-pay and book: Oral hygiene guidance',
        'paymentReference' => 'Stripe link key cNi8wPfxM39yfLq8K03AY08',
    ],
    'shedding-aid' => [
        'key' => 'shedding-aid',
        'name' => 'Shedding aid guidance',
        'heading' => 'Shedding aid guidance',
        'description' => 'Support with retained shed, enclosure checks, and husbandry advice where a routine welfare review is appropriate.',
        'scopeWarning' => 'APES provides welfare support and referral triage only. Painful eye, skin, or respiratory issues may require a veterinary surgeon.',
        'paymentSuitabilityWarning' => 'Pre-payment requests a routine shedding-support review and remains subject to suitability.',
        'stripeProviderNote' => 'Payment is processed securely through Stripe.',
        'externalLinkNote' => 'The payment link opens an external Stripe page.',
        'riskFlag' => 'medium',
        'ctaText' => 'Pre-pay and book',
        'price' => 'GBP 10.00',
        'stripeUrl' => 'https://book.stripe.com/9B600jfxM25ubvaaS83AY09',
        'category' => 'reptile-exotic-support',
        'routes' => ['/', '/services/', '/reptile-care/'],
        'accessibleLabel' => 'Pre-pay and book: Shedding aid guidance',
        'paymentReference' => 'Stripe link key 9B600jfxM25ubvaaS83AY09',
    ],
    'fang-removal' => [
        'key' => 'fang-removal',
        'name' => 'Displaced fang welfare support',
        'heading' => 'Displaced fang welfare support',
        'description' => 'Suitability-first welfare support for displaced fang concerns, oral observation, and referral advice for snakes.',
        'scopeWarning' => 'APES does not provide invasive oral procedures, surgery, sedation, or veterinary dental treatment.',
        'paymentSuitabilityWarning' => 'Pre-payment requests a suitability review only. Payment does not confirm that any hands-on support is appropriate or clinically safe.',
        'stripeProviderNote' => 'Payment is processed securely through Stripe.',
        'externalLinkNote' => 'The payment link opens an external Stripe page.',
        'riskFlag' => 'high',
        'ctaText' => 'Pre-pay for suitability review',
        'price' => 'GBP 10.00',
        'stripeUrl' => 'https://book.stripe.com/00wbJ10CS7pO1UAf8o3AY0a',
        'category' => 'reptile-exotic-support',
        'routes' => ['/', '/services/', '/reptile-care/'],
        'accessibleLabel' => 'Pre-pay for suitability review: Displaced fang welfare support',
        'paymentReference' => 'Stripe link key 00wbJ10CS7pO1UAf8o3AY0a',
    ],
    'parasite-removal-7-day-admittance' => [
        'key' => 'parasite-removal-7-day-admittance',
        'name' => 'External parasite welfare support and short-term admittance',
        'heading' => 'External parasite welfare support and short-term admittance',
        'description' => 'Suitability-first welfare support for reptile external parasite concerns, including short-term admittance planning where APES confirms it is appropriate.',
        'scopeWarning' => 'APES does not diagnose disease, prescribe medicines, or guarantee that a parasite-related concern can be managed without veterinary treatment.',
        'paymentSuitabilityWarning' => 'Pre-payment requests a welfare-support suitability review and short-term admittance assessment only.',
        'stripeProviderNote' => 'Payment is processed securely through Stripe.',
        'externalLinkNote' => 'The payment link opens an external Stripe page.',
        'riskFlag' => 'high',
        'ctaText' => 'Pre-pay for suitability review',
        'price' => 'GBP 79.00 total',
        'stripeUrl' => 'https://buy.stripe.com/bJe4gz0CSh0o9n2gcs3AY0b',
        'category' => 'reptile-exotic-support',
        'routes' => ['/', '/services/', '/reptile-care/'],
        'accessibleLabel' => 'Pre-pay for suitability review: External parasite welfare support and short-term admittance',
        'paymentReference' => 'Stripe link key bJe4gz0CSh0o9n2gcs3AY0b',
    ],
    'respiratory-infection-7-day-admittance' => [
        'key' => 'respiratory-infection-7-day-admittance',
        'name' => 'Respiratory concern welfare support and short-term admittance',
        'heading' => 'Respiratory concern welfare support and short-term admittance',
        'description' => 'Suitability-first welfare support for reptiles with respiratory concerns, including triage and short-term admittance planning where appropriate.',
        'scopeWarning' => 'APES does not diagnose respiratory disease, prescribe medicines, or replace urgent veterinary care.',
        'paymentSuitabilityWarning' => 'Pre-payment requests a suitability review only. Payment does not confirm that APES can safely support the concern without veterinary treatment.',
        'stripeProviderNote' => 'Payment is processed securely through Stripe.',
        'externalLinkNote' => 'The payment link opens an external Stripe page.',
        'riskFlag' => 'high',
        'ctaText' => 'Pre-pay for suitability review',
        'price' => 'GBP 64.00 total',
        'stripeUrl' => 'https://book.stripe.com/eVqaEXgBQ9xWeHm0du3AY0c',
        'category' => 'reptile-exotic-support',
        'routes' => ['/', '/services/', '/reptile-care/'],
        'accessibleLabel' => 'Pre-pay for suitability review: Respiratory concern welfare support and short-term admittance',
        'paymentReference' => 'Stripe link key eVqaEXgBQ9xWeHm0du3AY0c',
    ],
    'invert-parasite-removal-7-day-admittance' => [
        'key' => 'invert-parasite-removal-7-day-admittance',
        'name' => 'Invertebrate parasite welfare support and short-term admittance',
        'heading' => 'Invertebrate parasite welfare support and short-term admittance',
        'description' => 'Suitability-first welfare support for invertebrate parasite concerns, with short-term admittance planning where APES confirms it is appropriate.',
        'scopeWarning' => 'APES provides husbandry and welfare support only and does not guarantee that a parasite concern can be resolved without specialist veterinary input.',
        'paymentSuitabilityWarning' => 'Pre-payment requests a suitability review only and does not confirm that hands-on support or admittance is appropriate.',
        'stripeProviderNote' => 'Payment is processed securely through Stripe.',
        'externalLinkNote' => 'The payment link opens an external Stripe page.',
        'riskFlag' => 'high',
        'ctaText' => 'Pre-pay for suitability review',
        'price' => 'GBP 79.00 total',
        'stripeUrl' => 'https://book.stripe.com/7sYbJ199oh0odDi2lC3AY0d',
        'category' => 'invertebrate-support',
        'routes' => ['/', '/services/', '/invert-care/'],
        'accessibleLabel' => 'Pre-pay for suitability review: Invertebrate parasite welfare support and short-term admittance',
        'paymentReference' => 'Stripe link key 7sYbJ199oh0odDi2lC3AY0d',
    ],
    'moult-support' => [
        'key' => 'moult-support',
        'name' => 'Moult support guidance',
        'heading' => 'Moult support guidance',
        'description' => 'Guidance for humidity, enclosure setup, and observation during difficult moults where a welfare review is appropriate.',
        'scopeWarning' => 'APES offers husbandry guidance and referral triage only. Severe injury or systemic illness may require veterinary assessment.',
        'paymentSuitabilityWarning' => 'Pre-payment requests a moult-support review and does not guarantee that intervention is clinically suitable.',
        'stripeProviderNote' => 'Payment is processed securely through Stripe.',
        'externalLinkNote' => 'The payment link opens an external Stripe page.',
        'riskFlag' => 'medium',
        'ctaText' => 'Pre-pay and book',
        'price' => 'GBP 15.00',
        'stripeUrl' => 'https://book.stripe.com/14AcN5ads25ucze0du3AY0e',
        'category' => 'invertebrate-support',
        'routes' => ['/', '/services/', '/invert-care/'],
        'accessibleLabel' => 'Pre-pay and book: Moult support guidance',
        'paymentReference' => 'Stripe link key 14AcN5ads25ucze0du3AY0e',
    ],
    'small-animal-parasite-treatment-beaphar' => [
        'key' => 'small-animal-parasite-treatment-beaphar',
        'name' => 'Small animal parasite support with Beaphar Spot On',
        'heading' => 'Small animal parasite support with Beaphar Spot On',
        'description' => 'Suitability-checked parasite support for rabbits and guinea pigs, with welfare guidance and referral where veterinary assessment is needed.',
        'scopeWarning' => 'APES does not diagnose systemic illness or replace veterinary care for unwell small animals.',
        'paymentSuitabilityWarning' => 'Pre-payment is subject to suitability review and does not guarantee that this support is appropriate for every rabbit or guinea pig.',
        'stripeProviderNote' => 'Payment is processed securely through Stripe.',
        'externalLinkNote' => 'The payment link opens an external Stripe page.',
        'riskFlag' => 'medium',
        'ctaText' => 'Pre-pay and book',
        'price' => 'GBP 12.49 total',
        'stripeUrl' => 'https://book.stripe.com/bJe6oH4T811qczed0g3AY0f',
        'category' => 'small-animal-treatments',
        'routes' => ['/', '/services/', '/rabbit-care/', '/guinea-care/'],
        'accessibleLabel' => 'Pre-pay and book: Small animal parasite support with Beaphar Spot On',
        'paymentReference' => 'Stripe link key bJe6oH4T811qczed0g3AY0f',
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

function apes_render_scope_notice(string $class = 'scope-notice'): string
{
    return '<div class="' . apes_escape($class) . '"><strong>Clinical scope:</strong> APES Pet Care Clinic provides first aid, routine welfare support, husbandry guidance, non-diagnostic observation, and referral triage only. We are not a veterinary surgery and do not diagnose disease, prescribe veterinary medicines, perform surgery, carry out invasive procedures, provide sedation, or replace emergency veterinary care.</div>';
}

function apes_render_before_you_pay(string $class = 'prepay-warning'): string
{
    global $refundPolicyPath, $bookingPolicyPath;

    ob_start();
    ?>
    <div class="<?= apes_escape($class) ?>">
      <h3>Before you pay</h3>
      <ul class="prepay-warning-list">
        <li>Payment is processed securely through Stripe and opens an external payment page.</li>
        <li>Payment does not confirm that a service is clinically suitable for your pet.</li>
        <li>Booking or suitability instructions are provided after payment and may still require review by APES.</li>
        <li>If your animal needs urgent or emergency veterinary care, contact a registered veterinary surgeon immediately.</li>
        <li>Refund, credit, and cancellation handling follows our <a href="<?= apes_escape($refundPolicyPath) ?>">Refund Policy</a> and <a href="<?= apes_escape($bookingPolicyPath) ?>">Booking Policy</a>.</li>
      </ul>
    </div>
    <?php

    return trim((string) ob_get_clean());
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
    ><?= apes_escape($service['ctaText']) ?></a>
    <?php

    return trim((string) ob_get_clean());
}

function apes_render_service_pills(array $service): string
{
    $riskLabel = ucfirst((string) $service['riskFlag']) . ' risk';

    return
        '<div class="prepay-service-pills">' .
        '<span class="pill pill-status">Stripe</span>' .
        '<span class="pill pill-type">' . apes_escape($service['externalLinkNote']) . '</span>' .
        '<span class="pill pill-compliance">' . apes_escape($riskLabel) . '</span>' .
        '</div>';
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
              <article class="prepay-card<?= $variant === 'detail' ? ' prepay-card-detail' : '' ?> prepay-card-risk-<?= apes_escape($service['riskFlag']) ?>">
                <div class="prepay-card-header">
                  <h4 class="prepay-card-title"><?= apes_escape($service['heading']) ?></h4>
                  <span class="prepay-card-price"><?= apes_escape($service['price']) ?></span>
                </div>
                <?= apes_render_service_pills($service) ?>
                <p class="prepay-card-copy"><?= apes_escape($service['description']) ?></p>
                <p class="prepay-card-warning"><strong>Scope:</strong> <?= apes_escape($service['scopeWarning']) ?></p>
                <p class="prepay-card-warning"><strong>Suitability:</strong> <?= apes_escape($service['paymentSuitabilityWarning']) ?></p>
                <p class="prepay-card-note"><?= apes_escape($service['stripeProviderNote']) ?> <?= apes_escape($service['externalLinkNote']) ?></p>
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
        <div class="prepay-cta-item prepay-card-risk-<?= apes_escape($service['riskFlag']) ?>">
          <div class="prepay-cta-copy">
            <span class="prepay-cta-title"><?= apes_escape($service['heading']) ?></span>
            <span class="prepay-cta-price"><?= apes_escape($service['price']) ?></span>
            <span class="prepay-cta-note"><?= apes_escape($service['paymentSuitabilityWarning']) ?></span>
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
