<?php

$finder = PhpCsFixer\Finder::create()
    ->notPath('vendor')
    ->notPath('node_modules')
    ->exclude('public/img')
    ->exclude('public/css')
    ->exclude('public/js')
    ->name('*.php')
    ->notPath('.git')
    ->in(__DIR__)
;

$config = new PhpCsFixer\Config();
return $config->setRules([
        '@PSR2' => true,
        'array_syntax' => ['syntax' => 'short'],
        'ordered_imports' => ['sort_algorithm' => 'alpha'],
        'no_unused_imports' => true,
    ])
    ->setFinder($finder)
;
