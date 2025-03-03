<?php

declare(strict_types=1);

return (new PhpCsFixer\Config())
    ->setRiskyAllowed(true)
    ->setRules([
        '@PSR2' => true,
        '@Symfony' => true,
        '@Symfony:risky' => true,
        'array_syntax' => ['syntax' => 'short'],
        'concat_space' => ['spacing' => 'one'],
        'ordered_imports' => [
            'imports_order' => ['class', 'function', 'const'],
        ],
        'declare_strict_types' => true,
        'random_api_migration' => true,
        'yoda_style' => true,
        'self_accessor' => false,
        'phpdoc_no_useless_inheritdoc' => false,
        'phpdoc_to_comment' => false,
        'phpdoc_align' => [
            'tags' => ['param', 'return', 'throws', 'type', 'var'],
        ],
        'phpdoc_line_span' => [
            'const' => 'multi',
            'method' => 'multi',
            'property' => 'multi',
        ],
    ])
    ->setFinder(
        PhpCsFixer\Finder::create()
            ->in(__DIR__)
            ->exclude(['var'])
    )
;
