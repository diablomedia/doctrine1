<?php

$finder = PhpCsFixer\Finder::create()
    ->exclude('vendor')
    ->exclude('tests')
    ->exclude('tests/tmp/generated')
    ->files()
    ->in(__DIR__)
;

return PhpCsFixer\Config::create()
    ->setRiskyAllowed(true)
    ->setRules(array(
        '@PSR2'                  => true,
        '@PHP70Migration:risky'  => true,
        'binary_operator_spaces' => array(
            'default'   => 'align_single_space_minimal',
            'operators' => array('||' => null, '&&' => null)
        ),
        'declare_strict_types'        => false,
        'single_quote'                => true,
        'array_syntax'                => array('syntax' => 'long'),
        'concat_space'                => array('spacing' => 'one'),
        'psr0'                        => true,
        'no_whitespace_in_blank_line' => true,
    ))
    ->setUsingCache(true)
    ->setFinder($finder);
;
