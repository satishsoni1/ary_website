<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Company facts — single source of truth for the marketing site
    |--------------------------------------------------------------------------
    */

    'company'   => 'Aryvon Intelligence Private Limited',
    'short_name' => 'Aryvon Intelligence',
    'tagline'   => 'Sovereign Document Intelligence. Built in India for institutions that cannot compromise on control.',
    'product'   => 'VedVault',

    'email'         => 'contact@aryvonai.com',
    'privacy_email' => 'privacy@aryvonai.com',

    'address_lines' => [
        'Ruparel Iris, 301/302 (3rd Floor), S.B. Road,',
        'Matunga West, Mumbai, Maharashtra 400016, India',
    ],
    'address_oneline' => 'RUPAREL IRIS, 301/302 (3RD FLOOR), S.B. ROAD, MATUNGA WEST, MUMBAI 400016',

    'copyright' => '© 2026 ARYVON INTELLIGENCE PRIVATE LIMITED · MUMBAI, INDIA',

    /*
    |--------------------------------------------------------------------------
    | Primary navigation — label => route name
    |--------------------------------------------------------------------------
    */

    'nav' => [
        ['label' => 'Platform',  'route' => 'platform'],
        ['label' => 'Solutions', 'route' => 'solutions'],
        ['label' => 'Trust',     'route' => 'trust'],
        ['label' => 'Founders',  'route' => 'founders'],
        ['label' => 'Contact',   'route' => 'contact'],
    ],

    /*
    |--------------------------------------------------------------------------
    | Footer columns
    |--------------------------------------------------------------------------
    */

    'footer' => [
        'explore' => [
            ['label' => 'Platform',  'route' => 'platform'],
            ['label' => 'Solutions', 'route' => 'solutions'],
            ['label' => 'Trust',     'route' => 'trust'],
        ],
        'company' => [
            ['label' => 'Founders',       'route' => 'founders'],
            ['label' => 'Contact',        'route' => 'contact'],
            ['label' => 'Design partners', 'route' => 'contact', 'fragment' => 'partner'],
        ],
    ],

    'legal' => [
        ['label' => 'Privacy',       'route' => 'legal.privacy'],
        ['label' => 'Terms',         'route' => 'legal.terms'],
        ['label' => 'Cookies',       'route' => 'legal.cookies'],
        ['label' => 'Accessibility', 'route' => 'legal.accessibility'],
        ['label' => 'Disclaimer',    'route' => 'legal.disclaimer'],
    ],
];
