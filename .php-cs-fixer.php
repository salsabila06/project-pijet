<?php

declare(strict_types=1);

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__)
    ->exclude([
        'bootstrap',
        'public',
        'storage',
        'test',
        'vendor',
    ])
    ->name('*.php')
    ->notName('*.blade.php')
    ->ignoreDotFiles(true)
    ->ignoreVCS(true);

$config = new PhpCsFixer\Config();
$config->setRiskyAllowed(true);

return $config->setRules([
    '@PSR12'               => true,
    'array_syntax'         => ['syntax' => 'short'],
    'line_ending'          => true,
    'no_extra_blank_lines' => ['tokens' => ['extra']],
    'no_unused_imports'    => true,
    'ordered_imports'      => ['sort_algorithm' => 'alpha'],
])
    ->setUsingCache(false)
    ->setLineEnding(PHP_EOL)
    ->setFinder($finder);
