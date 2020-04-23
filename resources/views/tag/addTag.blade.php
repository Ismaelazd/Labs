@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<div class="container wow fadeInUp mt-5">
    <div class="text-center mb-5 mx-5 px-5">

        <h1 class="text-dark  p-3 mt-3 ">Ajouter tag </h1>
        <hr class="bg-dark">
    </div>
</div>
@stop

@section('content')


<div class="container mb-5">

    <form action="{{route('tag.store')}}" method="post" enctype="multipart/form-data">
        @csrf


        <div class="form-group ">
            <label class="h3" for="tag ">Tag :</label>
            <input value="" type="tag" name="tag"
                class="form-control @error('tag') is-invalid @enderror" id="tag">
            @error('tag')
            <div class="alert alert-danger">{{  $message  }}</div>
            @enderror
        </div>


            
        </div>

        <div class="text-center">

            <button type="submit" class="btn btn-outline-dark">Submit</button>
        </div>

    </form>
</div>



@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
<link rel="stylesheet" href="/css/users.css">
@stop

@section('js')

@stop
