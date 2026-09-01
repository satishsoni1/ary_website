@php($frag = fn($i) => route($i['route']) . (isset($i['fragment']) ? '#'.$i['fragment'] : ''))
<footer>
  <div class="wrap">
    <div class="f-top" style="grid-template-columns:1.4fr 1fr 1fr 1fr">
      <div class="f-brand">
        <img src="{{ asset('assets/logo-cream.svg') }}" alt="{{ config('site.short_name') }}" width="160" height="45" loading="lazy" decoding="async"/>
        <p>{{ config('site.tagline') }}</p>
      </div>

      <div class="f-col">
        <b>Explore</b>
        @foreach (config('site.footer.explore') as $i)
          <a href="{{ $frag($i) }}">{{ $i['label'] }}</a>
        @endforeach
      </div>

      <div class="f-col">
        <b>Company</b>
        @foreach (config('site.footer.company') as $i)
          <a href="{{ $frag($i) }}">{{ $i['label'] }}</a>
        @endforeach
      </div>

      <div class="f-col">
        <b>Reach</b>
        <a href="mailto:{{ config('site.email') }}">{{ config('site.email') }}</a>
        <a href="mailto:{{ config('site.privacy_email') }}">{{ config('site.privacy_email') }}</a>
        <a href="{{ route('trust') }}#disclosure">Report a vulnerability</a>
      </div>
    </div>

    <div class="f-bot">
      <div>{{ config('site.copyright') }}</div>
      <div class="legal">
        @foreach (config('site.legal') as $i)
          <a href="{{ route($i['route']) }}">{{ $i['label'] }}</a>
        @endforeach
      </div>
    </div>

    <div class="f-bot footer-legal-mono" style="border-top:none;padding-top:0">
      <div>{{ config('site.address_oneline') }}</div>
    </div>
  </div>
</footer>
