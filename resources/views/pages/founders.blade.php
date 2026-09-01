@extends('layouts.app')

@section('content')
<div class="phero"><div class="wrap">
<div class="crumb"><a href="{{ route('home') }}">Home</a> <span style="color:var(--rule)">/</span> Founders</div><span class="ey">Founders</span><h1>The people building Aryvon.</h1><p class="lead">Three directors. One discipline: intelligence institutions can own.</p>
</div></div>

<section><div class="wrap"><div class="grid g3 stg">
<div class="founder"><div class="ph"><img src="{{ asset('assets/shantanu-lagad.jpg') }}" alt="Portrait of Shantanu Lagad" width="480" height="480" loading="lazy"/></div>
 <h3>Shantanu Lagad</h3><div class="role">Director — Strategy, Business Development &amp; Digital Transformation</div><p>Shantanu has spent his career inside large, high-stakes programmes — the kind where hundreds of projects, public money and hard deadlines move at once, and every decision must survive scrutiny. At Aryvon he leads strategy and institutional partnerships: he is the person in the room until the workflow actually works. His conviction is simple — an officer's signature is sacred, and software should be built around it, never in place of it.</p><a class="lk" href="https://www.linkedin.com/in/shantanu-lagad/" target="_blank" rel="noopener noreferrer">LinkedIn →</a></div>
<div class="founder"><div class="ph"><img src="{{ asset('assets/ajinkya-phalke.jpg') }}" alt="Portrait of Ajinkya Phalke" width="480" height="480" loading="lazy"/></div>
 <h3>Ajinkya Phalke</h3><div class="role">Director — AI, Advanced Technology &amp; GPU Infrastructure</div><p>Ajinkya puts AI to work in places where a wrong answer is a compliance event, not an inconvenience. He leads Aryvon's AI and GPU infrastructure — from model strategy to the hardware it runs on — and he is the reason VedVault operates fully inside a client's perimeter, including entirely air-gapped. His view: intelligence you don't control isn't intelligence. It's dependency.</p><a class="lk" href="https://www.linkedin.com/in/ajinkyaphalke/" target="_blank" rel="noopener noreferrer">LinkedIn →</a></div>
<div class="founder"><div class="ph"><img src="{{ asset('assets/yogesh-chougule.jpg') }}" alt="Portrait of Yogesh Chougule" width="480" height="480" loading="lazy"/></div>
 <h3>Yogesh Chougule</h3><div class="role">Director — Technology, Software &amp; Product Engineering</div><p>Yogesh builds the machinery: capture pipelines that read what decades did to paper, retrieval that refuses to answer beyond its evidence, and the governed workspace officers actually touch. He leads VedVault's engineering end to end, and he holds the product to one test — that an officer can defend, years later, every answer it ever gave.</p><a class="lk" href="https://www.linkedin.com/in/yogesh-chougule-944126283/" target="_blank" rel="noopener noreferrer">LinkedIn →</a></div>
</div></div></section>

<section class="band-dark"><div class="wrap"><div class="sh rv"><span class="ey dk">What We Hold Ourselves To</span><h2>Understand. Reason. Act.</h2></div><div class="grid g3 stg"><div class="card"><span class="n">I</span><h3>Understand First</h3><p>The record before the answer.</p></div><div class="card"><span class="n">II</span><h3>Reason Second</h3><p>Cited, scoped, honest about confidence.</p></div><div class="card"><span class="n">III</span><h3>Act Intelligently</h3><p>A human signature on every action.</p></div></div></div></section>

@include('partials.cta', ['heading' => 'See it configured to your department.'])
@endsection
