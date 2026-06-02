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
$siteVersionNumber = 'v0.0.1';
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
    ['label' => 'General Services', 'path' => '/general-services/'],
    ['label' => 'Dog Care', 'path' => '/dog-care/'],
    ['label' => 'Cat Care', 'path' => '/cat-care/'],
    ['label' => 'Reptile Care', 'path' => '/reptile-care/'],
    ['label' => 'Invert Care', 'path' => '/invert-care/'],
    ['label' => 'Rabbit Care', 'path' => '/rabbit-care/'],
    ['label' => 'Guinea Pig Care', 'path' => '/guinea-care/'],
    ['label' => 'Ferret Care', 'path' => '/ferret-care/'],
    ['label' => 'Care Plans', 'path' => '/Care%20Plans/care-plans/'],
    ['label' => 'Lab Services', 'path' => '/APES%20Lab%20Services/apes-lab-services/'],
];

$policiesMenu = [
    ['label' => 'Booking Policy', 'path' => '/policies/booking-policy/'],
    ['label' => 'Privacy Policy', 'path' => '/policies/privacy-policy/'],
    ['label' => 'Refund Policy', 'path' => '/policies/refund-policy/'],
    ['label' => 'Terms and Conditions', 'path' => '/policies/terms-and-conditions/'],
];

$informationMenu = [
    ['label' => 'Events', 'path' => '/events/'],
    ['label' => 'News', 'path' => $newsUrl, 'external' => true],
    ...array_map(
        static fn(array $policy): array => [
            'label' => $policy['label'],
            'path' => $policy['path'],
        ],
        $policiesMenu
    ),
    ['label' => 'Changelog', 'path' => $changelogPath],
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
