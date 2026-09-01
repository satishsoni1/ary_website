<header>
  <div class="wrap nav">
    <a class="logo" href="{{ route('home') }}" aria-label="{{ config('site.short_name') }} — home">
      <img class="logo-light" src="{{ asset('assets/logo.svg') }}" alt="{{ config('site.short_name') }}" width="150" height="42" decoding="async"/>
      <img class="logo-dark" src="{{ asset('assets/logo-cream.svg') }}" alt="{{ config('site.short_name') }}" width="150" height="42" decoding="async"/>
    </a>

    <ul>
      @foreach (config('site.nav') as $item)
        @php($active = request()->routeIs($item['route']))
        <li>
          <a href="{{ route($item['route']) }}"
             class="{{ $active ? 'on' : '' }}"
             @if($active) aria-current="page" @endif>{{ $item['label'] }}</a>
        </li>
      @endforeach
    </ul>

    <div class="nav-actions" style="display:flex;gap:10px;align-items:center">
      <button class="tbtn" id="themeToggle" type="button" aria-label="Toggle dark mode">☾</button>
      <a class="btn gold cta" href="{{ route('contact') }}#brief">Request a Briefing</a>
    </div>

    <button class="burger" id="burger" type="button" aria-label="Open menu">MENU</button>
  </div>

  <nav class="drawer" id="drawer" aria-label="Mobile">
    @foreach (config('site.nav') as $item)
      <a href="{{ route($item['route']) }}"
         class="{{ request()->routeIs($item['route']) ? 'on' : '' }}"
         @if(request()->routeIs($item['route'])) aria-current="page" @endif>{{ $item['label'] }}</a>
    @endforeach
    <a href="{{ route('contact') }}#brief">Request a Briefing</a>
  </nav>
</header>
