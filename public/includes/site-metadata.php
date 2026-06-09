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

$siteVersionNumber = apes_read_site_version($siteVersionFile);
$siteVersion = $siteName . ' ' . $siteVersionNumber;
$absolutePageUrl = apes_absolute_url($canonicalPath);
$absoluteOgImageUrl = apes_absolute_url($ogImagePath);

if (!isset($breadcrumbs)) {
    $breadcrumbs = apes_build_default_breadcrumbs($canonicalPath, $pageTitle);
}

$structuredData = [
    [
        '@context' => 'https://schema.org',
        '@type' => 'Organization',
        'name' => $siteName,
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
        'name' => $siteName,
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
