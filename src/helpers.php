<?php

namespace SamBindoff;

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

function styles(array $paths = [], array $rules = []): Config {
    $rules = array_merge(require __DIR__.'/rules.php', $rules);
    $finder = Finder::create()
        ->in($paths);

    return Config::create()
        ->setFinder($finder)
        ->setRiskyAllowed(true)
        ->setRules($rules);
}
