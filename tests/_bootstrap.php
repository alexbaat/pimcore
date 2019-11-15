<?php

use Pimcore\Tests\Util\Autoloader;

\Pimcore\Bootstrap::setProjectRoot();
\Pimcore\Bootstrap::bootstrap();

$x = [1, 2, 3];
codecept_debug(var_export($x, true));
$y = [...$x];
codecept_debug(var_export($y, true));

die("TEST");


Autoloader::addNamespace('Pimcore\Model\DataObject', __DIR__ . '/_output/var/classes/DataObject');
Autoloader::addNamespace('Pimcore\Tests\Cache', __DIR__ . '/cache');
Autoloader::addNamespace('Pimcore\Tests\Ecommerce', __DIR__ . '/ecommerce');
Autoloader::addNamespace('Pimcore\Tests\Model', __DIR__ . '/model');
Autoloader::addNamespace('Pimcore\Tests\Unit', __DIR__ . '/unit');
Autoloader::addNamespace('Pimcore\Tests\Rest', __DIR__ . '/rest');
Autoloader::addNamespace('Pimcore\Tests\Service', __DIR__ . '/service');

if (!defined('TESTS_PATH')) {
    define('TESTS_PATH', __DIR__);
}

define('PIMCORE_TEST', true);
