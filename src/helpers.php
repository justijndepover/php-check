<?php

namespace Justijndepover\PHPCheck;

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

function styles(Finder $finder, array $rules = []) : Config
{
    $rules = array_merge(require __DIR__ . '/rules.php', $rules);

    return (new Config())
        ->setRules($rules)
        ->setFinder($finder);
}
