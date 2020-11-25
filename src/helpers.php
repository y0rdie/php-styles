<?php

namespace SamBindoff;

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

function styles(array $rules = []): Config {
    $rules = array_merge(require __DIR__.'/rules.php', $rules);
    $finder = Finder::create()
        ->in([
            __DIR__.'/app',
            __DIR__.'/config',
            __DIR__.'/database',
            __DIR__.'/resources',
            __DIR__.'/routes',
            __DIR__.'/tests',
        ]);

    return Config::create()
        ->setFinder($finder)
        ->setRiskyAllowed(true)
        ->setRules($rules);
}
