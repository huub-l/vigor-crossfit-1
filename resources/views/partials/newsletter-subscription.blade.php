<section class="newsletter-subscription">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-10 col-lg-8 offset-lg-2">
        <h2 class="title">{{$content['title']}}</h2>
        <p class="excerpt">{{$content['excerpt']}}</h2>

        <form class="form" action="#" id="subscribe-form">
          <div class="form-group mb-2 email">
            <label for="inputPassword2" class="sr-only">Password</label>
            <input type="email" class="form-control" id="email" placeholder="name@email.com" required>
          </div>
          <button type="submit" class="btn btn-secondary mb-2 -light">
            <span class="text">Subscribe</span>
          </button>
        </form>

        <div class="loading-container">
          <p class="loading text-center">Loading...</p>
        </div>

        <div class="success">
          <p class="messge">Thank you for subscribing. Here is a coupon, <strong>{{$content['coupon']}}</strong>, that you can use to get a discount on our online store.</p>
        </div>

        <p class="after-form">{{$content['after_form']}}</h2>
      </div>
    </div>
  </div>
</section>