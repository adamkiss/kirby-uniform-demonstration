<?php

use Kirby\Cms\App as Kirby;

load([
    'Uniform\\Actions\\FirstCustomAction' => 'FirstCustomAction.php'
], __DIR__);

Kirby::plugin('yourname/uniform-custom-actions', []);