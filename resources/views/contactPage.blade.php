@extends('layouts/master')

@section('content')

    {{-- @include('components/preloader') --}}

    @include('components/nav')

    @include('components/header')

    @include('partials/map')

    @include('partials/contact')

    @include('components/footer')



@endsection