<?php

declare(strict_types = 1);

if (version_compare(PHP_VERSION, '8.0', '>=')) {
    return array(
        'parameters' => array(
            'ignoreErrors' => array(
                array(
                    'message' => '#If condition is always true\.#',
                    'count'   => 1,
                    'path'    => __DIR__ . '/lib/Doctrine/Core.php',
                ),
                array(
                    'message' => '#Negated boolean expression is always false\.#',
                    'count'   => 1,
                    'path'    => __DIR__ . '/lib/Doctrine/Validator.php',
                ),
                array(
                    'message' => '#Comparison operation ">" between int<1, max> and 0 is always true\.#',
                    'count'   => 1,
                    'path'    => __DIR__ . '/lib/Doctrine/Validator.php',
                ),
            )
        )
    );
} else {
    return array();
}
