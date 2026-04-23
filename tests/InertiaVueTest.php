<?php

declare(strict_types=1);

test('inertia-vue config loads default ssr bundle path', function () {
    $_SERVER['DOCUMENT_ROOT'] = '/var/www/public';

    $config = require dirname(__DIR__).'/config/inertia-vue.php';

    expect($config['ssrBundle'])->toBe('/var/www/bootstrap/ssr/ssr.js');
});

test('inertia-vue module depends on inertia and vite', function () {
    $module = require dirname(__DIR__).'/module.php';

    expect($module['enabled'])->toBeTrue();
    expect($module['sequence']['after'])->toContain('marko/inertia');
    expect($module['sequence']['after'])->toContain('marko/vite');
});
