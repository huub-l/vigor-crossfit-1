<section class="pricing-section">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="title text-center">{{$content['title']}}</h2>
      </div>

      @foreach ($content['options'] as $option)
        <div class="col-10 offset-1 col-md-4 offset-md-0 tier {{strtolower($option['tier_name'])}}">
          <h3 class="tier-name">{{$option['tier_name']}}</h3>

          <ul class="tier-benefits">
            @foreach ($option['tier_benefits'] as $tier_benefit)
              <li class="benefit">
                <p class="name">{{$tier_benefit['benefit']}}</p>

                <img 
                    src="{{$tier_benefit['icon']['url']}}"
                    alt="{{$tier_benefit['icon']['title']}}"
                    class="icon"
                />
              </li>
            @endforeach
          </ul>

          <a href="{{$option['tier_url']}}" class="btn btn-primary">
            <span class="text">{{$option['tier_price']}}</span>
          </a>
        </div>
      @endforeach
    </div>
  </div>
</section>