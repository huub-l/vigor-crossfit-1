<section class="slider-section">
    <div class="intro">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                    <h2 class="title text-center">{{$content['title']}}</h2>
                    <p class="excerpt text-center">{{$content['excerpt']}}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="sliders">
        @foreach ($content['slider_items'] as $slider)
            <div class="slider" style="background-image: url({{$slider['pic']['url']}})">
                <div class="content">
                    <div class="col-12 col-md-10 offset-md-1 col-lg-6 offset-lg-3">
                        <h6 class="name text-center">{{$slider['name']}}</h6>
                        <p class="info text-center">{{$slider['info']}}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="cta">
        <div class="col-12 col-md-10 offset-md-1 col-lg-6 offset-lg-3">
            <a href="#" class="link">Meet All Our Coaches</a>
        </div>
    </div>
</section>