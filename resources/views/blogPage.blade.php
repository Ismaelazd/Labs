@extends('layouts/master')

@section('content')

    {{-- @include('components/preloader') --}}

    @include('components/nav')

    @include('components/header')

    @include('partials/blogSection')

    @include('partials/newsletter')

    @include('components/footer')



@endsection