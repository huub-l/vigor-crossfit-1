@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  <div class="container">
    <div class="row">
      <div class="col-12">
        @while(have_posts()) @php the_post() @endphp
          @include('partials.content-page')
        @endwhile
      </div>
    </div>
  </div>
@endsection
