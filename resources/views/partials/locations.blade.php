<section class="locations">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="title text-center">{{$content['title']}}</h2>
      </div>
    </div>
  </div>

  <div id="map"></div>

  <ul class="location-list"
    data-active-marker={{get_field('active_marker', 'option')}}
    data-in-active-marker={{get_field('in_active_marker', 'option')}}>

    @foreach ($content['locations'] as $location)
      <li class="location" 
        id="{{$location['slug']}}"
        data-lat={{$location['lat']}}
        data-long={{$location['long']}}
        data-name={{$location['name']}}
        data-identifier={{$location['slug']}}>
        <div class="info">
          <h3 class="name">{{$location['name']}}</h3>
          <p class="address">{{$location['address']}}</p>
  
          <div class="hours">
            @foreach ($location['hours'] as $hour)
              <div class="hour d-flex justify-content-start">
                <p class="day">{{$hour['day']}}</p>
                <p class="time">{{$hour['time']}}</p>
              </div>
            @endforeach
          </div>

          <div class="gallery">
            @foreach ($location['gallery_images'] as $gallery_image)
              <a href="{{$gallery_image['url']}}" class="gallery-link {{($loop->index > 3) ? '-hidden' : ''}}" data-lightbox="{{$location['slug']}}-gallery">
                <img src="{{$gallery_image['sizes']['thumbnail']}}"
                  alt="{{$gallery_image['title']}}"
                  class="gallery-thumb" 
                />

                @if ($loop->index == 3)
                  <p class="count">{{$loop->count - 4}} More</p>
                @endif
              </a>
            @endforeach
          </div>
        </div>
      </li>
    @endforeach
  </ul>
</section>