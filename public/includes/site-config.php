<?php
declare(strict_types=1);

$siteName = 'APES Pet Care Clinic';
$siteBaseUrl = 'https://www.apespetcare.org.uk';
$siteVersionFile = dirname(__DIR__) . '/VERSION';

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
$privacyPolicyPath = '/policies/privacy-policy/';
$termsPolicyPath = '/policies/terms-and-conditions/';
$donatePath = '/donate/';

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
