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
$versionFile = dirname(__DIR__) . '/VERSION';
$siteVersionNumber = 'v0.0.3';
if (is_file($versionFile)) {
    $versionValue = trim((string) file_get_contents($versionFile));
    if ($versionValue !== '') {
        $siteVersionNumber = $versionValue;
    }
}
$siteVersion = $siteName . ' ' . $siteVersionNumber;
$noticeText = 'Please note: We are currently operating from temporary premises while our new premises in Warrington are being prepared. Thank you for bearing with us during this time.';
$scopeText = 'Important: APES Pet Care Clinic provides first aid and general health support. We do not carry out operations or invasive veterinary procedures.';

$bookingPublicUrl = 'https://workspace.apes.org.uk/apps/appointments/pub/CybCqq5VG5EA3vBV/form';
$bookingEmbedUrl = 'https://workspace.apes.org.uk/apps/appointments/embed/CybCqq5VG5EA3vBV/form';
$contactTicketUrl = 'https://contact.apes.org.uk/help/3107184668';
$newsUrl = 'https://www.apesnews.org.uk';
$changelogPath = '/changelog/';

$clinicPhone = '0300 302 0228';
$clinicEmail = 'info@apespetcare.org.uk';
$clinicAddress = '40 Morris Street, St Helens, WA9 3EN';

$heroBadges = [
    'Low-income friendly care',
    'Exotic and domestic support',
    'First aid and general health guidance',
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
    ['label' => 'Care Plans', 'path' => '/Care%20Plans/care-plans/', 'description' => 'Preventive support plans to spread routine care costs.'],
    ['label' => 'Lab Services', 'path' => '/APES%20Lab%20Services/apes-lab-services/', 'description' => 'Coordinated testing options to support health investigations.'],
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

function apes_is_active(string $activeNav, string $expected): string
{
    return $activeNav === $expected ? ' is-active' : '';
}

function apes_nav_in_group(string $activeNav, array $expected): string
{
    return in_array($activeNav, $expected, true) ? ' is-active' : '';
}
