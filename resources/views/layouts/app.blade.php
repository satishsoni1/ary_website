<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width,initial-scale=1"/>
<meta name="color-scheme" content="light dark"/>
<meta name="theme-color" content="#0B1D33" media="(prefers-color-scheme: dark)"/>
<meta name="theme-color" content="#FFFFFF" media="(prefers-color-scheme: light)"/>
<script>try{var t=localStorage.getItem('aryvon-theme');if(t)document.documentElement.setAttribute('data-theme',t);}catch(e){}</script>
@php($pageTitle = trim(($title ?? '') !== '' ? $title.' | '.config('site.short_name') : config('site.short_name')))
@php($pageDesc = $description ?? config('site.tagline'))
@php($canonical = isset($canonicalRoute) ? route($canonicalRoute) : url()->current())
<title>{{ $pageTitle }}</title>
<meta name="description" content="{{ $pageDesc }}"/>
<link rel="canonical" href="{{ $canonical }}"/>
<link rel="icon" href="{{ asset('assets/favicon.ico') }}" sizes="any"/>
<link rel="apple-touch-icon" href="{{ asset('assets/apple-touch-icon.png') }}"/>
<meta property="og:site_name" content="{{ config('site.short_name') }}"/>
<meta property="og:title" content="{{ $pageTitle }}"/>
<meta property="og:description" content="{{ $pageDesc }}"/>
<meta property="og:type" content="website"/>
<meta property="og:url" content="{{ $canonical }}"/>
<meta name="twitter:card" content="summary_large_image"/>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500;600;700&family=Inter:wght@400;500;600;700&family=IBM+Plex+Mono:wght@400;500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/site.css') }}"/>
@stack('head')
</head>
<body class="@yield('bodyClass')">
<a class="skip-link" href="#main">Skip to content</a>
<div class="perimeter" aria-hidden="true"><b><i></i>Your perimeter · zero data egress</b></div>

@include('partials.header')

<main id="main" tabindex="-1">
@yield('content')
</main>

@include('partials.footer')

@unless (request()->routeIs('contact'))
<div class="floating-cta" id="floatingCta" aria-hidden="true">
  <a class="btn gold" href="{{ route('contact') }}#brief">Request a Briefing</a>
</div>
@endunless

<script src="{{ asset('js/site.js') }}"></script>
@stack('scripts')
</body>
</html>
