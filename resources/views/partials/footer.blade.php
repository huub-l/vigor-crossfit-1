<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="info-container col-12 col-md-3 logo">
        <img src="{{get_field('logo_image', 'option')['image']['url']}}" alt="{{get_field('logo_image', 'option')['image']['title']}}" />
      </div>

      <div class="info-container col-12 col-md-3 about">
        <h3 class="title">About</h3>

        <ul class="info-list">
          <li class="info-list-item">
            <p class="info-list-item-content">{{get_field('company_name','option')}}</p>
          </li>

          <li class="info-list-item">
            <p class="info-list-item-content">{{get_field('company_street_address','option')}}</p>
          </li>

          <li class="info-list-item">
            <p class="info-list-item-content">{{get_field('company_city','option')}}</p>
          </li>

          <li class="info-list-item">
            <p class="info-list-item-content">{{get_field('state_and_zip','option')}}</p>
          </li>

          <li class="info-list-item">
            <p class="info-list-item-content">{{get_field('country','option')}}</p>
          </li>
        </ul>
      </div>

      <div class="info-container col-12 col-md-3 sitemap">
        <h3 class="title">Sitemap</h3>

        {!! wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'info-list']) !!}
      </div>

      <div class="info-container col-12 col-md-3 social">
        <h3 class="title">Social</h3>

        <ul class="info-list">
          @foreach (get_field('social_platforms', 'option') as $social_platform)
            <li class="info-list-iem">
              <a href="{{$social_platform['url']}}" class="info-list-item-content">{{$social_platform['name']}}</a>
            </li>
          @endforeach
        </ul>
      </div>

    </div> {{-- row --}}
  </div> {{-- container --}}
</footer>
