<header class="main-header">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="content">
          <a class="brand" href="{{ home_url('/') }}">
            <img src="{{get_field('logo_light', 'option')['image']['url']}}" alt="{{get_field('logo_light', 'option')['image']['title']}}">
          </a>
      
          <div class="burger-btn-container">
            <div id="nav-icon1">
              <span></span>
              <span></span>
              <span></span>
            </div>
          </div>
      
          <nav class="nav-primary -is-hidden">
            @if (has_nav_menu('primary_navigation'))
              {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
            @endif
          </nav>
        </div> {{-- content --}}
      </div> {{-- col --}}
    </div> {{-- row --}}
  </div> {{-- container --}}
</header>
