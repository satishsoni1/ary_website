@php($heading = $heading ?? 'See it configured to your department.')
@php($lead = $lead ?? 'One focused hour: the workspace, your workflow, a candid pilot discussion.')
<section class="band-dark">
  <div class="wrap">
    <div class="ctab rv">
      <span class="ey dk" style="justify-content:center">Request a Briefing</span>
      <h2 style="margin-top:12px">{{ $heading }}</h2>
      <p class="lead" style="margin:14px auto 0">{{ $lead }}</p>
      <div class="ctarow">
        <a class="btn gold" href="{{ route('contact') }}#brief">Request a Briefing</a>
        <a class="btn ondk" href="{{ route('contact') }}">Contact Us</a>
      </div>
    </div>
  </div>
</section>
