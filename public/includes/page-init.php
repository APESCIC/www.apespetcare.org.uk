<?php
declare(strict_types=1);

if (!isset($pageTitle)) {
    $pageTitle = 'APES Pet Care Clinic';
}

if (!isset($metaDescription)) {
    $metaDescription = 'Affordable, compassionate first aid and general health support for pets.';
}

if (!isset($pageKicker)) {
    $pageKicker = 'APES Pet Care Clinic';
}

if (!isset($heroTitle)) {
    $heroTitle = $pageTitle;
}

if (!isset($heroLead)) {
    $heroLead = 'Friendly first aid and general health support for pet families.';
}

if (!isset($bodyClass)) {
    $bodyClass = '';
}

if (!isset($activeNav)) {
    $activeNav = '';
}

if (!isset($showNotice)) {
    $showNotice = true;
}

$siteName = 'APES Pet Care Clinic';
$siteBaseUrl = 'https://www.apespetcare.org.uk';
$versionFile = dirname(__DIR__) . '/VERSION';
$siteVersionNumber = 'v0.1.0';
if (is_file($versionFile)) {
    $versionValue = trim((string) file_get_contents($versionFile));
    if ($versionValue !== '') {
        $siteVersionNumber = $versionValue;
    }
}
$siteVersion = $siteName . ' ' . $siteVersionNumber;
$noticeText = 'Please note: We are currently operating from temporary premises. Please do not attend without a confirmed appointment and location instructions. Our future Warrington premises are being prepared, and booking instructions will confirm whether your appointment takes place in St Helens or at a future site.';
$scopeText = 'Important: APES Pet Care Clinic provides first aid, routine welfare support, husbandry guidance, and referral triage only. We are not a veterinary surgery and do not diagnose disease, prescribe veterinary medicines, perform surgery, carry out invasive procedures, provide sedation, or replace emergency veterinary care.';

$bookingPublicUrl = 'https://workspace.apes.org.uk/apps/appointments/pub/CybCqq5VG5EA3vBV/form';
$bookingEmbedUrl = 'https://workspace.apes.org.uk/apps/appointments/embed/CybCqq5VG5EA3vBV/form';
$contactTicketUrl = 'https://contact.apes.org.uk/help/3107184668';
$newsUrl = 'https://www.apesnews.org.uk';
$changelogPath = '/changelog/';
$servicesHubPath = '/services/';
$refundPolicyPath = '/policies/refund-policy/';
$bookingPolicyPath = '/policies/booking-policy/';

$clinicPhone = '0300 302 0228';
$clinicEmail = 'info@apespetcare.org.uk';
$clinicAddress = '40 Morris Street, St Helens, WA9 3EN';

$heroBadges = [
    'Low-income friendly care',
    'Exotic and domestic support',
    'First aid and welfare guidance',
];

$servicesMenu = [
    ['label' => 'General Services', 'path' => '/general-services/', 'description' => 'Routine first aid, welfare checks, and safe next-step guidance for pets.'],
    ['label' => 'Dog Care', 'path' => '/dog-care/', 'description' => 'Practical support for common canine care concerns and referral advice.'],
    ['label' => 'Cat Care', 'path' => '/cat-care/', 'description' => 'Routine feline checks, first aid support, and next-step guidance.'],
    ['label' => 'Reptile Care', 'path' => '/reptile-care/', 'description' => 'Species-aware help for reptile welfare, husbandry, and urgent-care triage.'],
    ['label' => 'Invert Care', 'path' => '/invert-care/', 'description' => 'Support for invertebrate welfare, husbandry, and moulting concerns.'],
    ['label' => 'Rabbit Care', 'path' => '/rabbit-care/', 'description' => 'Welfare support for rabbits with practical referral advice when needed.'],
    ['label' => 'Guinea Pig Care', 'path' => '/guinea-care/', 'description' => 'Practical guinea pig support for common welfare concerns.'],
    ['label' => 'Ferret Care', 'path' => '/ferret-care/', 'description' => 'First aid and general health support tailored to ferrets.'],
    ['label' => 'Care Plans', 'path' => '/care-plans/', 'description' => 'Preventive support plans to spread routine welfare costs.'],
    ['label' => 'Lab Services', 'path' => '/lab-services/', 'description' => 'Sample coordination and testing support with safe referral boundaries.'],
];

$policiesMenu = [
    ['label' => 'Booking Policy', 'path' => '/policies/booking-policy/'],
    ['label' => 'Privacy Policy', 'path' => '/policies/privacy-policy/'],
    ['label' => 'Refund Policy', 'path' => '/policies/refund-policy/'],
    ['label' => 'Terms and Conditions', 'path' => '/policies/terms-and-conditions/'],
];

$policyDescriptions = [
    'Booking Policy' => 'Appointment expectations and booking terms before you book.',
    'Privacy Policy' => 'How personal information is used and protected.',
    'Refund Policy' => 'Refund rules for booked services and cancellations.',
    'Terms and Conditions' => 'Website and service terms for using the clinic.',
];

$informationMenu = [
    ['label' => 'About Us', 'path' => '/about-us/', 'description' => 'Learn about APES, our clinic scope, and our welfare-first approach.'],
    ['label' => 'Events', 'path' => '/events/', 'description' => 'Community events, awareness sessions, and practical pet welfare education.'],
    ['label' => 'News', 'path' => $newsUrl, 'external' => true, 'description' => 'Latest APES news and public updates on the external news site.'],
    ...array_map(
        static fn(array $policy): array => [
            'label' => $policy['label'],
            'path' => $policy['path'],
            'description' => $policyDescriptions[$policy['label']] ?? '',
        ],
        $policiesMenu
    ),
    ['label' => 'Change Log Hub', 'path' => $changelogPath, 'description' => 'Track website releases, fixes, and compliance updates.'],
];

function apes_escape(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

function apes_absolute_url(string $path): string
{
    global $siteBaseUrl;

    if ($path === '') {
        return $siteBaseUrl;
    }

    return rtrim($siteBaseUrl, '/') . $path;
}

function apes_detect_canonical_path(): string
{
    $scriptName = $_SERVER['SCRIPT_NAME'] ?? '/';
    $normalized = str_replace('\\', '/', (string) $scriptName);

    if ($normalized === '' || $normalized === '/') {
        return '/';
    }

    if (str_ends_with($normalized, '/index.php')) {
        $normalized = substr($normalized, 0, -10);
    }

    if ($normalized === '' || $normalized === false) {
        return '/';
    }

    if ($normalized[0] !== '/') {
        $normalized = '/' . $normalized;
    }

    return rtrim($normalized, '/') . '/';
}

function apes_page_label_map(): array
{
    return [
        '/' => 'Home',
        '/services/' => 'Services hub',
        '/general-services/' => 'General services',
        '/dog-care/' => 'Dog care',
        '/cat-care/' => 'Cat care',
        '/reptile-care/' => 'Reptile care',
        '/invert-care/' => 'Invertebrate care',
        '/rabbit-care/' => 'Rabbit care',
        '/guinea-care/' => 'Guinea pig care',
        '/ferret-care/' => 'Ferret care',
        '/care-plans/' => 'Care plans',
        '/lab-services/' => 'Lab services',
        '/bookings/' => 'Bookings',
        '/donate/' => 'Donate',
        '/contact/' => 'Contact',
        '/about-us/' => 'About us',
        '/events/' => 'Events',
        '/changelog/' => 'Change Log Hub',
        '/policies/booking-policy/' => 'Booking policy',
        '/policies/privacy-policy/' => 'Privacy policy',
        '/policies/refund-policy/' => 'Refund policy',
        '/policies/terms-and-conditions/' => 'Terms and conditions',
    ];
}

function apes_build_default_breadcrumbs(string $canonicalPath, string $pageTitle): array
{
    $labelMap = apes_page_label_map();
    if ($canonicalPath === '/') {
        return [
            ['label' => 'Home', 'path' => '/'],
        ];
    }

    return [
        ['label' => 'Home', 'path' => '/'],
        ['label' => $labelMap[$canonicalPath] ?? $pageTitle, 'path' => $canonicalPath],
    ];
}

function apes_build_breadcrumb_schema(array $breadcrumbs): ?array
{
    if (count($breadcrumbs) < 2) {
        return null;
    }

    $items = [];
    foreach ($breadcrumbs as $index => $breadcrumb) {
        $items[] = [
            '@type' => 'ListItem',
            'position' => $index + 1,
            'name' => $breadcrumb['label'],
            'item' => apes_absolute_url($breadcrumb['path']),
        ];
    }

    return [
        '@context' => 'https://schema.org',
        '@type' => 'BreadcrumbList',
        'itemListElement' => $items,
    ];
}

function apes_build_service_schema(string $pageTitle, string $metaDescription, string $absolutePageUrl): array
{
    return [
        '@context' => 'https://schema.org',
        '@type' => 'Service',
        'name' => $pageTitle,
        'description' => $metaDescription,
        'url' => $absolutePageUrl,
        'serviceType' => 'Pet welfare support and referral triage',
        'provider' => [
            '@type' => 'Organization',
            'name' => 'APES Pet Care Clinic',
            'url' => apes_absolute_url('/'),
        ],
        'areaServed' => [
            '@type' => 'AdministrativeArea',
            'name' => 'North West England',
        ],
    ];
}

function apes_is_active(string $activeNav, string $expected): string
{
    return $activeNav === $expected ? ' is-active' : '';
}

function apes_nav_in_group(string $activeNav, array $expected): string
{
    return in_array($activeNav, $expected, true) ? ' is-active' : '';
}

if (!isset($canonicalPath)) {
    $canonicalPath = apes_detect_canonical_path();
}

if (!isset($metaRobots)) {
    $metaRobots = 'index,follow,max-image-preview:large';
}

if (!isset($ogTitle)) {
    $ogTitle = $pageTitle . ' | ' . $siteName;
}

if (!isset($ogDescription)) {
    $ogDescription = $metaDescription;
}

if (!isset($ogImagePath)) {
    $ogImagePath = '/assets/logos/APES_Pet_Care_Clinic_logo_master_transparent.png';
}

if (!isset($twitterCard)) {
    $twitterCard = 'summary_large_image';
}

$absolutePageUrl = apes_absolute_url($canonicalPath);
$absoluteOgImageUrl = apes_absolute_url($ogImagePath);

if (!isset($breadcrumbs)) {
    $breadcrumbs = apes_build_default_breadcrumbs($canonicalPath, $pageTitle);
}

$structuredData = [
    [
        '@context' => 'https://schema.org',
        '@type' => 'Organization',
        'name' => 'APES Pet Care Clinic',
        'url' => apes_absolute_url('/'),
        'email' => 'mailto:' . $clinicEmail,
        'telephone' => $clinicPhone,
        'logo' => apes_absolute_url('/assets/logos/APES_Pet_Care_Clinic_logo_web_128px.png'),
        'sameAs' => [
            'https://www.apes.org.uk',
        ],
    ],
    [
        '@context' => 'https://schema.org',
        '@type' => 'WebSite',
        'name' => 'APES Pet Care Clinic',
        'url' => apes_absolute_url('/'),
    ],
];

$breadcrumbSchema = apes_build_breadcrumb_schema($breadcrumbs);
if ($breadcrumbSchema !== null) {
    $structuredData[] = $breadcrumbSchema;
}

if ($activeNav === 'services') {
    $structuredData[] = apes_build_service_schema($pageTitle, $metaDescription, $absolutePageUrl);
}

require_once __DIR__ . '/prepay-services.php';
