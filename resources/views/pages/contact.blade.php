@extends('layouts.app')

@section('content')
<div class="phero"><div class="wrap">
<div class="crumb"><a href="{{ route('home') }}">Home</a> <span style="color:var(--rule)">/</span> Contact</div><span class="ey">Contact</span><h1 id="top">Talk to Aryvon.</h1><p class="lead">One page for everything: a message, a briefing, a design partnership — read by the founders.</p>
</div></div>

<section><div class="wrap"><div class="two">
<div class="rv"><span class="ey">Write To Us</span>
<h2 style="margin-top:12px;font-size:26px">Direct, and read by the founders.</h2>
<p class="lead" style="margin-top:12px"><a href="mailto:{{ config('site.email') }}" style="color:var(--goldd);font-weight:600">{{ config('site.email') }}</a> · privacy: <a href="mailto:{{ config('site.privacy_email') }}" style="color:var(--goldd);font-weight:600">{{ config('site.privacy_email') }}</a></p>
<p class="lead" style="margin-top:14px">{{ config('site.company') }}<br/>Ruparel Iris, 301/302 (3rd Floor), S.B. Road,<br/>Matunga West, Mumbai, Maharashtra 400016, India</p>
<p class="lead" style="margin-top:14px;font-size:13.5px">Careers: no listed roles right now — but strong generalists who write to us are read with attention.</p></div>

<div class="rv">
<form class="form" method="POST" action="{{ route('contact.submit') }}" novalidate>
@csrf
@if (session('status.contact'))
<div class="form-alert" role="status">
<svg width="16" height="16" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M13 4.5 6.5 11 3 7.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
<span>{{ session('status.contact') }}</span>
</div>
@endif
<label for="c-name">Name <span class="req" aria-hidden="true">*</span></label>
<input id="c-name" name="name" value="{{ old('name') }}" required autocomplete="name"
 @error('name') aria-invalid="true" aria-describedby="c-name-err" @enderror/>
@error('name')<span class="field-error" id="c-name-err">{{ $message }}</span>@enderror

<label for="c-org">Organisation</label>
<input id="c-org" name="org" value="{{ old('org') }}" autocomplete="organization"
 @error('org') aria-invalid="true" aria-describedby="c-org-err" @enderror/>
@error('org')<span class="field-error" id="c-org-err">{{ $message }}</span>@enderror

<label for="c-email">Email <span class="req" aria-hidden="true">*</span></label>
<input id="c-email" name="email" type="email" value="{{ old('email') }}" required autocomplete="email"
 @error('email') aria-invalid="true" aria-describedby="c-email-err" @enderror/>
@error('email')<span class="field-error" id="c-email-err">{{ $message }}</span>@enderror

<label for="c-msg">Message <span class="req" aria-hidden="true">*</span></label>
<textarea id="c-msg" name="message" rows="5" required
 @error('message') aria-invalid="true" aria-describedby="c-msg-err" @enderror>{{ old('message') }}</textarea>
@error('message')<span class="field-error" id="c-msg-err">{{ $message }}</span>@enderror

<input type="text" name="company_website" tabindex="-1" autocomplete="off" style="position:absolute;left:-9999px" aria-hidden="true"/>
<div style="margin-top:18px"><button class="btn navy" type="submit">Send message</button></div>
<p class="hint">No records or documents, please — website enquiries aren't a secure channel. We'll reply by email.</p>
</form>
</div>
</div></div></section>

<section class="band-tint"><div class="wrap"><div class="two" id="brief">
<div class="rv"><div class="sh rv"><span class="ey">Request a Briefing</span><h2>One focused hour.</h2></div><div class="scenes rv"><div class="sc-bars"><div class="sc-bar"><i></i></div><div class="sc-bar"><i></i></div><div class="sc-bar"><i></i></div></div><div class="sc-slide"><div class="sc-tag">MINUTE 0–20</div><div class="sc-title">The workspace, as your role.</div><p class="sc-text">Departments, files, clocks and approvals — driven live, on fictitious data.</p></div><div class="sc-slide"><div class="sc-tag">MINUTE 20–40</div><div class="sc-title">Ved, on your tasks.</div><p class="sc-text">The drafting your officers need: orders, replies, charters — cited.</p></div><div class="sc-slide"><div class="sc-tag">MINUTE 40–60</div><div class="sc-title">The pilot, candidly.</div><p class="sc-text">Scope, environment, timeline — and whether a partnership makes sense.</p></div><div class="sc-play">▸ Auto-playing — tap the bars to jump</div></div></div>

<div class="rv">
<form class="form" method="POST" action="{{ route('briefing.submit') }}" style="margin-top:8px" novalidate>
@csrf
@if (session('status.briefing'))
<div class="form-alert" role="status">
<svg width="16" height="16" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M13 4.5 6.5 11 3 7.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
<span>{{ session('status.briefing') }}</span>
</div>
@endif
<label for="b-name">Name <span class="req" aria-hidden="true">*</span></label>
<input id="b-name" name="name" value="{{ old('name') }}" required autocomplete="name"
 @error('name') aria-invalid="true" aria-describedby="b-name-err" @enderror/>
@error('name')<span class="field-error" id="b-name-err">{{ $message }}</span>@enderror

<label for="b-role">Designation</label>
<input id="b-role" name="role" value="{{ old('role') }}"
 @error('role') aria-invalid="true" aria-describedby="b-role-err" @enderror/>
@error('role')<span class="field-error" id="b-role-err">{{ $message }}</span>@enderror

<label for="b-org">Institution / Department <span class="req" aria-hidden="true">*</span></label>
<input id="b-org" name="org" value="{{ old('org') }}" required autocomplete="organization"
 @error('org') aria-invalid="true" aria-describedby="b-org-err" @enderror/>
@error('org')<span class="field-error" id="b-org-err">{{ $message }}</span>@enderror

<label for="b-email">Official email <span class="req" aria-hidden="true">*</span></label>
<input id="b-email" name="email" type="email" value="{{ old('email') }}" required autocomplete="email"
 @error('email') aria-invalid="true" aria-describedby="b-email-err" @enderror/>
@error('email')<span class="field-error" id="b-email-err">{{ $message }}</span>@enderror

<label for="b-int">What should the briefing focus on?</label>
<textarea id="b-int" name="interest" rows="4"
 @error('interest') aria-invalid="true" aria-describedby="b-int-err" @enderror>{{ old('interest') }}</textarea>
@error('interest')<span class="field-error" id="b-int-err">{{ $message }}</span>@enderror

<input type="text" name="company_website" tabindex="-1" autocomplete="off" style="position:absolute;left:-9999px" aria-hidden="true"/>
<div style="margin-top:18px"><button class="btn gold" type="submit">Request briefing</button></div>
</form>
</div>
</div></div></section>

<section id="partner"><div class="wrap"><div class="sh rv"><span class="ey">Design Partners</span><h2>Shape the platform against your reality.</h2></div><div class="flow rv"><div class="fline"><span class="fpulse"></span></div><div class="fsteps"><div class="fstep" data-cap="Corpus, roles, outputs and workflow are defined together."><div class="fdot">01</div><b>Define</b><span>Five questions</span></div><div class="fstep" data-cap="VedVault stands up inside your perimeter."><div class="fdot">02</div><b>Configure</b><span>In your environment</span></div><div class="fstep" data-cap="One department, one dataset, one required output — measured."><div class="fdot">03</div><b>Pilot</b><span>Real users</span></div><div class="fstep" data-cap="A pilot performance report, and a roadmap you own."><div class="fdot">04</div><b>Prove</b><span>Report</span></div><div class="fstep" data-cap="Scale, adjust, or stop. The records were always yours."><div class="fdot">05</div><b>Decide</b><span>Your call</span></div></div><div class="fcap"></div></div></div></section>

@include('partials.cta', ['heading' => 'Prefer to start smaller?', 'lead' => 'A two-line email about your department and its records is enough to begin.'])
@endsection
