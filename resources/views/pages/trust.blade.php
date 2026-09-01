@extends('layouts.app')

@section('content')
<div class="phero"><div class="wrap">
<div class="crumb"><a href="{{ route('home') }}">Home</a> <span style="color:var(--rule)">/</span> Trust</div><span class="ey">Trust</span><h1>Everything a security and risk team asks for.</h1><p class="lead">Four commitments, one live trail, and a disclosure channel — on a single page.</p>
</div></div>

<section><div class="wrap"><div class="grid g4 stg"><div class="card"><h3>Security</h3><p>Encryption in transit and at rest; record-level RBAC enforced at retrieval; institutional hardening.</p></div><div class="card"><h3>Data Sovereignty</h3><p>Zero egress by default. No external training. Residency in your jurisdiction.</p></div><div class="card"><h3>AI Governance</h3><p>Grounded, cited answers; configured guardrails; evaluation on your corpus; a human gate on every output.</p></div><div class="card"><h3>Reliability &amp; Audit</h3><p>Immutable, exportable trails behind every query, draft and approval.</p></div></div></div></section>

<section class="band-tint"><div class="wrap"><div class="sh rv"><span class="ey">Live</span><h2>The trail writes itself.</h2></div><div class="tick rv"><div class="ln">14:22:07&nbsp;&nbsp;QUERY&nbsp;&nbsp;&nbsp;&nbsp;user=D.Baruah · role=SPIO</div>
 <div class="ln">14:22:08&nbsp;&nbsp;RETRIEVE&nbsp;&nbsp;4 records · <span class="g">0 outside scope</span></div>
 <div class="ln">14:22:11&nbsp;&nbsp;GROUND&nbsp;&nbsp;&nbsp;6 claims · 6 citations</div>
 <div class="ln">16:05:02&nbsp;&nbsp;APPROVE&nbsp;&nbsp;officer signature · dispatched</div>
 <div class="ln">——&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;EGRESS&nbsp;&nbsp;&nbsp;<span class="g">0 events</span></div></div><div class="statrow"><div class="stat rv"><div class="v" data-to="0">0</div><div class="k">External egress in default config</div></div><div class="stat rv"><div class="v" data-to="0">0</div><div class="k">Records training outside models</div></div><div class="stat rv"><div class="v" data-to="100">0<small>%</small></div><div class="k">Answers traceable end-to-end</div></div><div class="stat rv"><div class="v" data-to="1">0</div><div class="k">Boundary that matters: yours</div></div></div></div></section>

<section><div class="wrap"><div class="notice rv">Certifications on our roadmap: ISO 27001 and SOC 2. Shown here once earned — not before.</div></div></section>

<section class="band-tint" id="disclosure"><div class="wrap"><div class="sh rv"><span class="ey">Responsible Disclosure</span><h2>Found something? Tell us safely.</h2></div><div class="prose rv"><p>Email <a href="mailto:{{ config('site.email') }}">{{ config('site.email') }}</a> with the subject "Security disclosure", including steps to reproduce. Do not access or exfiltrate data that is not yours, and allow a reasonable remediation window. We acknowledge promptly and credit researchers who wish to be named once a fix ships.</p></div></div></section>

@include('partials.cta')
@endsection
