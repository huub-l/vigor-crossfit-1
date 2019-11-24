<section class="hero-content {{ isset($content['section_class']) ? $content['section_class'] : ''}}">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6">
          <h2 class="title">{{ $content['title'] }}</h2>
      </div>

      <div class="col-12 col-md-5">
          <p class="excerpt">{!! $content['excerpt'] !!}</p>
      </div>
    </div>
  </div>
</section>
