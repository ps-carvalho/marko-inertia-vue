<?php

declare(strict_types=1);

$documentRoot = $_SERVER['DOCUMENT_ROOT'] ?? null;
$basePath = is_string($documentRoot) && $documentRoot !== ''
    ? dirname($documentRoot)
    : (getcwd() ?: '');

return [
    // Vue-specific Inertia defaults.
    // The SSR bundle path for Vue apps.
    'ssrBundle' => env('INERTIA_VUE_SSR_BUNDLE', $basePath.'/bootstrap/ssr/ssr.js'),
];
