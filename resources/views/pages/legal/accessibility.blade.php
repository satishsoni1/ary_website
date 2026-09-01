@extends('layouts.app')

@section('content')
<div class="phero"><div class="wrap">
<div class="crumb"><a href="{{ route('home') }}">Home</a> <span style="color:var(--rule)">/</span> Accessibility Statement</div><span class="ey">Legal</span><h1>Accessibility Statement</h1><p class="lead">Maintained by {{ config('site.company') }}, Mumbai.</p>
</div></div>
<section><div class="wrap"><div class="prose rv">
<p>Last updated: 31 August 2026</p>
<p>This statement applies to the website at <a href="https://www.aryvonai.com">https://www.aryvonai.com</a>.</p>
<h2><span class="stroke"></span>OUR COMMITMENT</h2>
<p>{{ config('site.company') }} is committed to making its services accessible to people with disabilities. Accessibility is part of how we build, not an afterthought. We aim to conform to the Web Content Accessibility Guidelines (WCAG) 2.1 Level AA.</p>
<h2><span class="stroke"></span>CONFORMANCE STATUS</h2>
<p>WCAG 2.1 Level AA sets requirements for making web content more accessible to people with a wide range of disabilities.</p>
<p>Current status: Partially compliant. The Website conforms with much of WCAG 2.1 Level AA, but some content may not yet meet every success criterion. We treat any gaps as defects and are working to resolve them.</p>
<h2><span class="stroke"></span>ACCESSIBILITY FEATURES</h2>
<p>We have built the Website to support common accessibility needs. In particular:</p>
<p>It is designed to work with your browser and operating-system settings, so you can resize text, adjust contrast, and change colours or fonts using the tools you already use.</p>
<p>It respects the &quot;reduced motion&quot; system setting.</p>
<p>It can be navigated using a keyboard, with visible focus indicators.</p>
<p>It includes a skip-to-content link, a semantic heading structure, and text alternatives for meaningful images.</p>
<h2><span class="stroke"></span>KNOWN LIMITATIONS</h2>
<p>As the Website evolves, some areas may not yet fully meet our target. We treat accessibility issues as defects and prioritise fixing them. If you encounter a barrier that is not listed here, please tell us using the details below.</p>
<h2><span class="stroke"></span>ASSESSMENT AND PREPARATION OF THIS STATEMENT</h2>
<p>This statement was prepared on 31 August 2026, based on an internal self-assessment of the Website against WCAG 2.1 Level AA. A formal, independent accessibility audit is planned. We review this statement at least annually and whenever we make significant changes to the Website, and we keep records of accessibility feedback and our responses.</p>
<h2><span class="stroke"></span>FEEDBACK AND CONTACT</h2>
<p>Please tell us if you experience an accessibility barrier using our services, or if you need information in an alternative format. Email <a href="mailto:{{ config('site.email') }}">{{ config('site.email') }}</a> with &quot;Accessibility&quot; in the subject line. We aim to respond within 15 business days.</p>
<p>You can also contact us by post:</p>
<p>{{ config('site.company') }}</p><p>Ruparel Iris, 301/302 — 3rd Floor</p><p>S.B. Road, Matunga West</p><p>Mumbai, Maharashtra 400016</p><p>India</p>
<h2><span class="stroke"></span>ENFORCEMENT AND ESCALATION</h2>
<p>If you are not satisfied with our response, you may escalate to the relevant authority in your jurisdiction:</p>
<p>India: under the Rights of Persons with Disabilities Act, 2016, you may approach the Office of the Chief Commissioner for Persons with Disabilities.</p>
<p>European Union: if you are located in the EU, you may contact your national accessibility-enforcement or consumer-protection authority (for example, in Germany, France, Ireland, Spain, or Italy).</p>
</div></div></section>
@endsection
