@extends('layouts.app')

@section('content')
  {{-- Hero Banner --}}
  @include('partials.hero-banner', ['banner' => FrontPage::hero_banner()])

  {{-- Why Vigor --}}
  @include('partials.hero-section', ['content' => FrontPage::why_vigor()])

@endsection
