<?php
declare(strict_types=1);

function apes_escape(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

function apes_read_site_version(string $versionFile): string
{
    if (!is_file($versionFile)) {
        return 'v0.1.0';
    }

    $versionValue = trim((string) file_get_contents($versionFile));

    return $versionValue !== '' ? $versionValue : 'v0.1.0';
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
        '/403.php/' => 'Access denied',
        '/404.php/' => 'Page not found',
        '/500.php/' => 'Temporary problem',
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
