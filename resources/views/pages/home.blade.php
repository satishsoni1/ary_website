@extends('layouts.app')

@section('content')
<div class="hero"><canvas id="net" class="heronet"></canvas><div class="wrap">
<span class="ey">Sovereign Document Intelligence</span>
<h1>Institutional intelligence that <span class="g">never leaves your control.</span></h1>
<p class="lead" style="margin-top:18px">One workspace for every department, workflow and role — with Ved producing the orders, charters and replies your work runs on. Grounded in your records. Cited to the page. Inside your perimeter.</p>
<div class="cta"><a class="btn gold" href="{{ route('contact') }}#brief">Request a Briefing</a><a class="btn ghost" href="#configuration">How It's Configured</a></div>
<div class="ws rv" id="ws">
<div class="ws-bar"><div class="ws-logo"><span class="stroke"></span> VedVault</div>
<div class="ws-org">Govt. deployment · fictitious data</div><div class="ws-sp"></div>
<span class="rlbl">View as</span>
<button class="rbtn on" data-r="0">Secretary</button><button class="rbtn" data-r="1">Section Officer</button>
<button class="rbtn" data-r="2">RTI SPIO</button><button class="rbtn" data-r="3">Auditor</button></div>
<div class="ws-body">
<aside class="ws-side"><div class="sgrp">Departments</div><div id="depts"></div><div class="sgrp">Workspace</div><div id="mods"></div></aside>
<main class="ws-main"><div class="ws-crumb" id="wscrumb"></div><div class="rolebanner" id="rbanner"></div>
<div class="wsgrid" id="kpis"></div><div id="stage"></div></main>
<aside class="ws-ved"><div class="vh"><div class="vav">V</div><div><div class="nm">Ved</div><div class="sb" id="vedrole"></div></div></div>
<div class="vtasks"><div class="t">Configured tasks</div><div class="tchips" id="tchips"></div></div>
<div class="vstream" id="vstream"></div>
<div class="vfoot"><div class="gate" id="gate">Awaiting your approval — Ved never dispatches</div></div></aside>
</div></div>
<p class="wscap">A live, driveable VedVault workspace — switch roles or give Ved a task. Mockup with fictitious data.</p>
</div></div>

<div class="credo"><div class="wrap">
<div class="cr rv"><div class="rn">I</div><h3>Understand First</h3><p>Paper, scans and legacy systems become structured institutional memory.</p></div>
<div class="cr rv"><div class="rn">II</div><h3>Reason Second</h3><p>Answers come only from records that role may see — cited to file and page.</p></div>
<div class="cr rv"><div class="rn">III</div><h3>Act Intelligently</h3><p>Ved drafts. A human approves and signs. The trail is immutable.</p></div>
</div></div>

<section><div class="wrap two rv">
<div><span class="ey">The Problem</span><h2 style="margin-top:12px">A search box doesn't run an institution.</h2></div>
<div><p class="lead">Institutions are departments, hierarchies and accountability. VedVault mirrors that structure — and produces the documents your work actually runs on.</p></div>
</div></section>

<section class="band-tint" id="configuration"><div class="wrap">
<div class="sh rv"><span class="ey">Configuration</span><h2>Configured to your organisation.</h2><p class="lead">Five questions define your departments, roles, workflows and outputs. Watch each answer shape the platform.</p></div>
<div class="cfg rv"><div id="qlist"></div><div class="cfgout" id="cfgout"></div></div>
</div></section>

<section class="band-dark"><div class="wrap">
<div class="sh rv"><span class="ey dk">Why It's Different</span><h2>Trust is architected in — not marketed on.</h2></div>
<div class="diff stg">
<div class="cell"><h3><span class="stroke"></span> Org-Shaped, Role-Aware</h3><p>Every user sees only their slice — Ved is scoped to the same boundary.</p></div>
<div class="cell"><h3><span class="stroke"></span> Ved Does The Work</h3><p>Orders, charters, SOPs, tender and RTI replies — and whatever else the workflow demands.</p></div>
<div class="cell"><h3><span class="stroke"></span> Sovereign Deployment</h3><p>On-premise, sovereign cloud, or air-gapped. Zero egress.</p></div>
<div class="cell"><h3><span class="stroke"></span> Human Authority</h3><p>Ved proposes; a person signs. Every step logged.</p></div>
</div></div></section>

<section><div class="wrap">
<div class="sh rv"><span class="ey">Built For</span><h2>If it runs on records, it can run on VedVault.</h2><p class="lead">The base is data. Any institution rich in records — in any sector — qualifies. These are where we begin.</p></div>
</div><div class="mq rv" aria-hidden="true"><div class="mq-track"><span>Government <b>◆</b></span><span>Regulators &amp; Tribunals <b>◆</b></span><span>Public Sector Units <b>◆</b></span><span>RTI Cells <b>◆</b></span><span>Courts &amp; Legal <b>◆</b></span><span>Defence <b>◆</b></span><span>Banking &amp; Insurance <b>◆</b></span><span>Healthcare &amp; Pharma <b>◆</b></span><span>Real Estate &amp; Construction <b>◆</b></span><span>Municipal Bodies <b>◆</b></span><span>Universities &amp; Research <b>◆</b></span><span>Energy &amp; Utilities <b>◆</b></span><span>Government <b>◆</b></span><span>Regulators &amp; Tribunals <b>◆</b></span><span>Public Sector Units <b>◆</b></span><span>RTI Cells <b>◆</b></span><span>Courts &amp; Legal <b>◆</b></span><span>Defence <b>◆</b></span><span>Banking &amp; Insurance <b>◆</b></span><span>Healthcare &amp; Pharma <b>◆</b></span><span>Real Estate &amp; Construction <b>◆</b></span><span>Municipal Bodies <b>◆</b></span><span>Universities &amp; Research <b>◆</b></span><span>Energy &amp; Utilities <b>◆</b></span></div></div><div class="wrap" style="margin-top:26px">
<div class="grid g3 stg"><div class="card"><span class="n">PUBLIC</span><h3>Government &amp; Public Sector</h3><p>Departments, PSUs, regulators, RTI cells — decades of files made answerable.</p><a class="go" href="{{ route('solutions') }}" style="display:block">Explore sectors →</a></div><div class="card"><span class="n">JUSTICE &amp; SECURITY</span><h3>Courts, Legal &amp; Defence</h3><p>On the record, access-proven, even air-gapped.</p><a class="go" href="{{ route('solutions') }}" style="display:block">Explore sectors →</a></div><div class="card"><span class="n">REGULATED INDUSTRY</span><h3>BFSI, Pharma &amp; Infrastructure</h3><p>Claims, batch records, contracts — governed and cited.</p><a class="go" href="{{ route('solutions') }}" style="display:block">Explore sectors →</a></div></div>
</div></section>

<section class="band-tint"><div class="wrap">
<div class="sh rv"><span class="ey">Deployment</span><h2>Your data never crosses this line.</h2></div>
<div class="perim2 rv"><span class="tag">● Your perimeter · zero data egress</span>
<div id="flowp" style="position:absolute;inset:0;pointer-events:none"></div>
<div class="grid g3" style="position:relative;z-index:2">
<div class="card" style="text-align:center"><div class="n">◈ ON-PREMISES</div><h3 style="margin-top:8px">Full Control</h3><p>Your hardware, your data centre.</p></div>
<div class="card" style="text-align:center"><div class="n">◈ SOVEREIGN CLOUD</div><h3 style="margin-top:8px">Your Environment</h3><p>Approved government or private cloud.</p></div>
<div class="card" style="text-align:center"><div class="n">◈ AIR-GAPPED</div><h3 style="margin-top:8px">Isolated</h3><p>No external connectivity at all.</p></div>
</div></div>
</div></section>

<section><div class="wrap" style="text-align:center">
<div class="sh rv"><span class="ey">The People</span><h2>Built by three directors who've shipped before.</h2></div>
<div class="peoplerow rv">
<a href="{{ route('founders') }}"><img src="{{ asset('assets/shantanu-lagad.jpg') }}" alt="Shantanu Lagad" width="74" height="74" loading="lazy"/></a>
<a href="{{ route('founders') }}"><img src="{{ asset('assets/ajinkya-phalke.jpg') }}" alt="Ajinkya Phalke" width="74" height="74" loading="lazy"/></a>
<a href="{{ route('founders') }}"><img src="{{ asset('assets/yogesh-chougule.jpg') }}" alt="Yogesh Chougule" width="74" height="74" loading="lazy"/></a>
</div>
<div class="rv" style="margin-top:22px"><a class="btn navy" href="{{ route('founders') }}">Meet the founders</a></div>
</div></section>

<section class="band-tint"><div class="wrap">
<div class="sh rv" style="text-align:center"><span class="ey" style="justify-content:center">FAQ</span><h2>Questions institutions ask first.</h2></div>
<div style="max-width:850px;margin:0 auto" class="rv">
<details class="faqd" open><summary>Is this just a chatbot over our documents?</summary><p>No. VedVault models your organisation — departments, workflows, roles, permissions — and Ved works inside that structure, producing the documents your work runs on.</p></details>
<details class="faqd"><summary>Where does it run, and who sees our data?</summary><p>Inside your environment — on-premise, sovereign cloud, or air-gapped. Zero egress by default, and your records never train external models.</p></details>
<details class="faqd"><summary>How is access controlled?</summary><p>Role-scoped, record-level entitlements — and Ved inherits exactly the same boundary as the signed-in user.</p></details>
<details class="faqd"><summary>Are you certified, and do you have customers yet?</summary><p>We're early-stage: ISO 27001 and SOC 2 are on the roadmap, and our first institutions are onboarding as design partners. We show verified proof, not borrowed logos.</p></details>
</div></div></section>

@include('partials.cta')
@endsection
