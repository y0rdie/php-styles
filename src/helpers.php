<?php

namespace SamBindoff;

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

function styles(array $paths = [], array $rules = []): Config {
    $finder = Finder::create()->in($paths);
    $config = new Config();
    $rules = array_merge(require __DIR__.'/rules.php', $rules);

    return $config
        ->setFinder($finder)
        ->setRiskyAllowed(true)
        ->setRules($rules);
}
