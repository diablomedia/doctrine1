<?php

$finder = PhpCsFixer\Finder::create()
    ->exclude('vendor')
    ->exclude('tests/tmp/generated')
    ->files()
    ->in(__DIR__)
;

return PhpCsFixer\Config::create()
    ->setRiskyAllowed(true)
    ->setRules([
        '@PSR2' => true,
        '@PHP70Migration:risky' => true,
        'binary_operator_spaces' => [
            'default' => 'align_single_space_minimal',
            'operators' => ['||' => null, '&&' => null]
        ],
        'declare_strict_types' => false,
        'single_quote' => true,
        'array_syntax' => ['syntax' => 'long'],
        'concat_space' => ['spacing' => 'one'],
        'psr0' => true,
        'no_whitespace_in_blank_line' => true,
    ])
    ->setUsingCache(true)
    ->setFinder($finder);
;
