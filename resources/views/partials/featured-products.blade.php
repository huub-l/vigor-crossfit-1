<section class="shop-featured">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-8 offset-md-2 col-lg-4 offset-lg-0 intro">
        <h2 class="title">{{$shop['title']}}</h2>
        <p class="excerpt">{{$shop['excerpt']}}</p>

        <a href="{{$shop['cta']['url']}}"
          {{ ($shop['cta']['url_type'] == 'external' && $shop['cta']['new_tab']) ? 'target="_blank"' : ''}}
          class="cta">
            {{$shop['cta']['label']}}
          </a>
      </div>

      <div class="col-12 col-lg-8">
        {!!$shop['products']!!}
      </div>
      {{-- <div class="col-12 col-md-4"></div>
      <div class="col-12 col-md-4"></div> --}}
    </div>
  </div>
</section>