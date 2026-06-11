<?php

declare(strict_types=1);

$publicRoot = realpath(__DIR__ . '/../public');

if ($publicRoot === false) {
    http_response_code(500);
    echo 'Public web root is unavailable.';
    return true;
}

$requestPath = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
$requestPath = is_string($requestPath) ? rawurldecode($requestPath) : '/';
$requestPath = str_replace('\\', '/', $requestPath);

if (str_contains($requestPath, "\0")) {
    http_response_code(400);
    echo 'Bad request.';
    return true;
}

$blockedPrefixes = [
    '/crawl',
    '/includes',
];

foreach ($blockedPrefixes as $blockedPrefix) {
    if ($requestPath === $blockedPrefix || str_starts_with($requestPath, $blockedPrefix . '/')) {
        http_response_code(403);
        readfile($publicRoot . '/403.html');
        return true;
    }
}

if ($requestPath === '/index.html') {
    header('Location: /', true, 301);
    return true;
}

if (str_ends_with($requestPath, '/index.html')) {
    $folderPath = substr($requestPath, 0, -strlen('index.html'));
    header('Location: ' . ($folderPath === '' ? '/' : $folderPath), true, 301);
    return true;
}

$candidatePath = realpath($publicRoot . $requestPath);

if ($candidatePath !== false && str_starts_with($candidatePath, $publicRoot)) {
    if (is_file($candidatePath)) {
        return false;
    }

    if (is_dir($candidatePath)) {
        if ($requestPath !== '/' && !str_ends_with($requestPath, '/')) {
            header('Location: ' . $requestPath . '/', true, 301);
            return true;
        }

        $indexPath = $candidatePath . DIRECTORY_SEPARATOR . 'index.html';

        if (is_file($indexPath)) {
            readfile($indexPath);
            return true;
        }
    }
}

http_response_code(404);
readfile($publicRoot . '/404.html');
return true;
