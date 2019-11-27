@extends('layouts.app')

@section('content')
  {{-- Hero Banner --}}
  @include('partials.hero-banner', ['banner' => FrontPage::hero_banner()])

  {{-- Why Vigor --}}
  @include('partials.hero-section', ['content' => FrontPage::why_vigor()])

  {{-- Featured Coaches --}}
  @include('partials.slider', ['content' => FrontPage::featured_coaches()])

  {{-- Price List --}}
  @include('partials.price-list', ['content' => FrontPage::pricing()])

  {{-- Locations --}}
  @include('partials.locations', ['content' => FrontPage::locations()])
@endsection
