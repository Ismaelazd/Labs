@extends('layouts/master')

@section('content')

    {{-- @include('components/preloader') --}}

    @include('components/nav')

    @include('partials/intro')

    @include('partials/about')
    
    @include('partials/testimonial')
    
    @include('partials/service')

    @include('partials/team')

    @include('partials/promotion')

    @include('partials/contact')

    @include('components/footer')

  


@endsection