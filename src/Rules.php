<?php

namespace Justijndepover\PHPCheck;

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

class Rules
{
    public static function all(Finder $finder, array $rules = []) : Config
    {
        $rules = array_merge(require __DIR__ . '/../config/rules.php', $rules);

        return (new Config())
            ->setRules($rules)
            ->setFinder($finder);
    }
}
