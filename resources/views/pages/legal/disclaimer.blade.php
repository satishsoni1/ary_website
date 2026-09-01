@extends('layouts.app')

@section('content')
<div class="phero"><div class="wrap">
<div class="crumb"><a href="{{ route('home') }}">Home</a> <span style="color:var(--rule)">/</span> Disclosure &amp; Disclaimer</div><span class="ey">Legal</span><h1>Disclosure &amp; Disclaimer</h1><p class="lead">Maintained by {{ config('site.company') }}, Mumbai.</p>
</div></div>
<section><div class="wrap"><div class="prose rv">
<p>Last updated: 31 August 2026</p>
<h2><span class="stroke"></span>WEBSITE DISCLAIMER</h2>
<p>The information provided by {{ config('site.company') }} (&quot;Aryvon,&quot; &quot;we,&quot; &quot;us,&quot; or &quot;our&quot;) on <a href="https://www.aryvonai.com">https://www.aryvonai.com</a> (the &quot;Site&quot;) is for general informational purposes only. All information on the Site is provided in good faith; however, we make no representation or warranty of any kind, express or implied, regarding its accuracy, adequacy, validity, reliability, availability, or completeness.</p>
<p>To the fullest extent permitted by law, under no circumstances will we be liable to you for any loss or damage of any kind incurred as a result of using the Site or relying on any information provided on it. Your use of the Site, and your reliance on any information on it, is solely at your own risk.</p>
<h2><span class="stroke"></span>PRODUCT AND FORWARD-LOOKING INFORMATION</h2>
<p>Descriptions of our products — including VedVault — and of their capabilities, intended use, and roadmap are provided on the Site for general information only. They do not constitute a warranty, offer, or contractual commitment, and do not form part of any contract unless expressly incorporated into a signed agreement. Statements about future features or plans are subject to change without notice. The use of VedVault by a customer is governed by the separate written agreement entered into with that customer.</p>
<h2><span class="stroke"></span>EXTERNAL LINKS DISCLAIMER</h2>
<p>The Site may contain links to other websites or content belonging to or originating from third parties. We do not investigate, monitor, or check such external links for accuracy, adequacy, validity, reliability, availability, or completeness, and we are not responsible for the content of any third-party website accessed through the Site. A link does not imply our endorsement.</p>
<h2><span class="stroke"></span>QUESTIONS</h2>
<p>If you have any questions about this Disclaimer, contact us at <a href="mailto:{{ config('site.email') }}">{{ config('site.email') }}</a>.</p>
<h2><span class="stroke"></span>OUR COMMITMENT</h2>
<p>We take security seriously and welcome reports from researchers, working with you in good faith to resolve issues.</p>
<h2><span class="stroke"></span>HOW TO REPORT</h2>
<p>Email <a href="mailto:{{ config('site.email') }}">{{ config('site.email') }}</a> with details and steps to reproduce. Please do not publicly disclose until we have had a reasonable opportunity to address it.</p>
<h2><span class="stroke"></span>SCOPE</h2>
<p>This policy covers our public website and products operated by ARYVON INTELLIGENCE. Customer deployments may be subject to separate agreements.</p>
<h2><span class="stroke"></span>WHAT WE ASK</h2>
<p>Act in good faith, avoid privacy violations and service disruption, and only interact with data you own or have permission to test.</p>
<h2><span class="stroke"></span>CONTACT</h2>
<p>Report security issues to <a href="mailto:{{ config('site.email') }}">{{ config('site.email') }}</a>.</p>
</div></div></section>
@endsection
