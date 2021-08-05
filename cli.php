<?php

declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

use Composer\InstalledVersions;

$version = InstalledVersions::getPrettyVersion('msipenko/php-scoper-issue');

var_dump($version);
