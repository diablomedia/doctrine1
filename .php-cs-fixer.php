<?php

$finder = PhpCsFixer\Finder::create()
    ->exclude('vendor')
    ->exclude('tests')
    ->exclude('tests/tmp/generated')
    ->files()
    ->in(__DIR__)
;

$config = new PhpCsFixer\Config();
return $config
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
        'no_whitespace_in_blank_line' => true,
        'psr_autoloading'             => false,
    ))
    ->setUsingCache(true)
    ->setFinder($finder);
;
