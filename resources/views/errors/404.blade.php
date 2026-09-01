@extends('layouts.app', ['title' => 'Page Not Found', 'description' => 'This page does not exist.'])

@section('content')
<div class="phero"><div class="wrap">
<div class="crumb"><a href="{{ route('home') }}">Home</a> <span style="color:var(--rule)">/</span> 404</div><span class="ey">404</span><h1>This file isn't in the record room.</h1><p class="lead">Everything we publish is one click from here.</p>
</div></div>
<section><div class="wrap"><div class="rv">
<a class="btn gold" href="{{ route('home') }}">Back to home</a>
<a class="btn ghost" href="{{ route('solutions') }}" style="margin-left:10px">Browse solutions</a>
</div></div></section>
@endsection
