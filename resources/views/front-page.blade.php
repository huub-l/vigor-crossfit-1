@extends('layouts.app')

@section('content')

  @include('partials.hero-banner', ['banner' => FrontPage::hero_banner()])
  
@endsection
