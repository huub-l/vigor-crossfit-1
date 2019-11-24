<section class="hero-banner" style="background-image: url({{$banner['bg_img']['url']}})">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-8 col-lg-6">
        <h1 class="title">{{$banner['title']}}</h1>
        <h3 class="excerpt">{{$banner['excerpt']}}</h3>
        
        <div class="cta">
          <a href="{{$banner['primary_cta']['url']}}"
          {{ ($banner['primary_cta']['url_type'] == 'external' && $banner['primary_cta']['new_tab']) ? 'target="_blank"' : ''}}
          class="btn btn-primary cta">
            <span class="text">
              {{$banner['primary_cta']['label']}}
            </span>
          </a>
          
          <a href="{{$banner['secondary_cta']['url']}}"
          {{ ($banner['secondary_cta']['url_type'] == 'external' && $banner['secondary_cta']['new_tab']) ? 'target="_blank"' : ''}}
          class="btn btn-secondary">
            <span class="text">
              {{$banner['secondary_cta']['label']}}
            </span>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
