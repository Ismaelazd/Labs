@extends('layouts/master')

@section('content')

    {{-- @include('components/preloader') --}}

    @include('components/nav')

    @include('components/header')
    
    @include('partials/service')

    @include('partials/features')

    @include('partials/serviceCard')

    @include('partials/newsletter')

    @include('partials/contact')

    @include('components/footer')

  


@endsection