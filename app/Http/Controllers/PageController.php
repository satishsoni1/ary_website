<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class PageController extends Controller
{
    /**
     * Static marketing pages: route name => [view, title, description].
     */
    private const PAGES = [
        'home' => [
            'pages.home',
            'Sovereign Document Intelligence',
            'VedVault by Aryvon Intelligence — a role-aware intelligence layer deployed inside your environment. Every answer cited; every action logged.',
        ],
        'platform' => [
            'pages.platform',
            'Platform',
            'VedVault: pipeline, journey, task library, deployment and integrations — one page.',
        ],
        'solutions' => [
            'pages.solutions',
            'Solutions',
            'VedVault for any record-rich institution — nine sectors and yours, one interactive page.',
        ],
        'trust' => [
            'pages.trust',
            'Trust',
            'Security, sovereignty, AI governance, reliability, and responsible disclosure — one page.',
        ],
        'founders' => [
            'pages.founders',
            'Founders',
            'Shantanu Lagad, Ajinkya Phalke and Yogesh Chougule — the directors of Aryvon Intelligence.',
        ],
        'contact' => [
            'pages.contact',
            'Contact & Briefing',
            'Contact Aryvon, request a briefing, or apply as a design partner — one page.',
        ],
        'legal.privacy' => [
            'pages.legal.privacy', 'Privacy Policy', 'Privacy Policy — Aryvon Intelligence.',
        ],
        'legal.terms' => [
            'pages.legal.terms', 'Terms of Use', 'Terms of Use — Aryvon Intelligence.',
        ],
        'legal.cookies' => [
            'pages.legal.cookies', 'Cookie Policy', 'Cookie Policy — Aryvon Intelligence.',
        ],
        'legal.disclaimer' => [
            'pages.legal.disclaimer', 'Disclosure & Disclaimer', 'Disclosure & Disclaimer — Aryvon Intelligence.',
        ],
        'legal.accessibility' => [
            'pages.legal.accessibility', 'Accessibility Statement', 'Accessibility Statement — Aryvon Intelligence.',
        ],
    ];

    public function show(string $page): View
    {
        abort_unless(isset(self::PAGES[$page]), 404);

        [$view, $title, $description] = self::PAGES[$page];

        return view($view, [
            'title'          => $title,
            'description'    => $description,
            'canonicalRoute' => $page,
        ]);
    }
}
