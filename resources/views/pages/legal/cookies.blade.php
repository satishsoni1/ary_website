@extends('layouts.app')

@section('content')
<div class="phero"><div class="wrap">
<div class="crumb"><a href="{{ route('home') }}">Home</a> <span style="color:var(--rule)">/</span> Cookie Policy</div><span class="ey">Legal</span><h1>Cookie Policy</h1><p class="lead">Maintained by {{ config('site.company') }}, Mumbai.</p>
</div></div>
<section><div class="wrap"><div class="prose rv">
<p>Last updated: August 29, 2026</p>
<p>This Cookie Policy explains how {{ config('site.company') }} (&quot;Aryvon,&quot; &quot;we,&quot; &quot;us,&quot; and &quot;our&quot;) uses cookies and similar technologies when you visit our website at <a href="https://www.aryvonai.com">https://www.aryvonai.com</a> (the &quot;Website&quot;). It explains what these technologies are, why we use them, and how you can control them.</p>
<p>In some cases, cookies may collect information that is, or that becomes, personal information when combined with other information. Where that happens, our Privacy Policy also applies.</p>
<h2><span class="stroke"></span>WHAT ARE COOKIES?</h2>
<p>Cookies are small data files placed on your computer or mobile device when you visit a website. They are widely used to make websites work, or work more efficiently, and to provide reporting information.</p>
<p>Cookies set by the website owner — in this case, {{ config('site.company') }} — are called &quot;first-party cookies.&quot; Cookies set by anyone other than the website owner are &quot;third-party cookies,&quot; which enable third-party features or functionality, such as analytics, to be provided through the Website.</p>
<h2><span class="stroke"></span>WHY WE USE COOKIES</h2>
<p>We use cookies for two main reasons:</p>
<p>Essential (strictly necessary) cookies. These are required for the Website to function and to keep it secure. Because the Website cannot work properly without them, they cannot be switched off.</p>
<p>Analytics cookies (optional). Where used, these help us understand, in aggregate, how the Website is used so that we can improve it.</p>
<p>We do not use cookies to serve targeted or personalised advertising, and we do not permit third parties to use our Website to build advertising profiles of you.</p>
<h2><span class="stroke"></span>THE COOKIES WE USE</h2>
<p>The specific cookies served may vary depending on the parts of the Website you visit. The table below lists the cookies currently identified on the Website:</p>
<p>Name</p><p>Purpose</p><p>Type</p><p>Duration</p>
<p>crumb</p>
<p>Recognises your browser during a visit and helps protect the site against cross-site request forgery (a security measure).</p>
<p>First-party, essential</p><p>Session</p>
<h2><span class="stroke"></span>OTHER TRACKING TECHNOLOGIES</h2>
<p>Cookies are not the only way to recognise visitors. We may from time to time use similar technologies such as web beacons (also called &quot;tracking pixels&quot; or &quot;clear GIFs&quot;) — tiny graphics files containing a unique identifier — for example to understand how visitors move through the Website, to measure the performance of the site, and to measure whether our marketing emails have been opened. These technologies often rely on cookies to function, so declining cookies may limit them.</p>
<h2><span class="stroke"></span>HOW TO CONTROL COOKIES</h2>
<p>Browser controls. Most browsers let you accept, refuse, or delete cookies through their settings. The method varies by browser, so please check your browser’s help pages — for example Chrome, Firefox, Safari, Edge, and Opera. If you refuse cookies you can still use the Website, though some features or areas may not work as intended.</p>
<p>Preference tool. Where a cookie preference tool is made available on the Website, you can use it to accept or reject categories of non-essential cookies; essential cookies cannot be rejected because they are necessary to provide the Website.</p>
<h2><span class="stroke"></span>UPDATES TO THIS POLICY</h2>
<p>We may update this Cookie Policy from time to time to reflect, for example, changes to the cookies we use or for other operational, legal, or regulatory reasons. Please revisit it periodically to stay informed. The date at the top of this policy indicates when it was last updated.</p>
<h2><span class="stroke"></span>CONTACT US</h2>
<p>If you have any questions about our use of cookies or other technologies, contact us at <a href="mailto:{{ config('site.privacy_email') }}">{{ config('site.privacy_email') }}</a> or by post at:</p>
<p>{{ config('site.company') }}</p><p>Ruparel Iris, 301/302 — 3rd Floor</p><p>S.B. Road, Matunga West</p><p>Mumbai, Maharashtra 400016</p><p>India</p>
</div></div></section>
@endsection
