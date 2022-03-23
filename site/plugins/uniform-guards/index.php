<?php

use Kirby\Cms\App as Kirby;

load([
    'Uniform\\Guards\\FirstCustomGuard' => 'FirstCustomGuard.php'
], __DIR__);

Kirby::plugin('yourname/uniform-custom-guards', []);