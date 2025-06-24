<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Iconpack: Brand vector flag icons',
    'description' => 'This Extension registers an Iconpack-Provider for EXT:iconpack. Vector (*.svg) country flag icons in 3:2 aspect ratio.',
    'category' => 'fe',
    'state' => 'stable',
    'clearcacheonload' => true,
    'author' => 'E.Haake',
    'author_email' => 'info@cms-internetsolutions.de',
    'author_company' => 'CMS-Internetsolutions',
    'version' => '1.0.3',
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.00-13.9.99',
            'iconpack' => '1.0.0-2.99'
        ],
        'conflicts' => [],
        'suggests' => []
    ]
];
