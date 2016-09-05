<?php

use Milax\Mconsole\Currency\Installer;

/**
 * Currency module bootstrap file
 */
return [
    'name' => 'Currency',
    'identifier' => 'mconsole-currency',
    'description' => '',
    'depends' => [],
    'register' => [
        'middleware' => [],
        'providers' => [
            \Milax\Mconsole\Currency\Provider::class,
        ],
        'aliases' => [],
        'bindings' => [],
        'dependencies' => [],
    ],
    'install' => function () {
        Installer::install();
    },
    'uninstall' => function () {
        Installer::uninstall();
    },
    'init' => function () {
        // ..
    },
];
