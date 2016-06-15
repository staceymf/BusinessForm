<?php

namespace TestApplication\Bootstrap;

use QL\Panthor\Bootstrap\Di;
use TestApplication\CachedContainer;

$root = __DIR__ . '/..';
require_once $root . '/vendor/autoload.php';

return Di::getDi($root, CachedContainer::class);