@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<div class="container wow fadeInUp mt-5">
    <div class="text-center mb-5 mx-5 px-5">

        <h1 class="text-dark  p-3 mt-3 ">Edit Footer </h1>
        <hr class="bg-dark">
    </div>
</div>
@stop

@section('content')


<div class="container mb-5">

    <form action="{{route('footer.update',$footer)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group ">
            <label class="h3" for="text ">Text :</label>
            <input value="{{$footer->text}}" type="text" name="text"
                class="form-control @error('text') is-invalid @enderror" id="text">
            @error('text')
            <div class="alert alert-danger">{{  $message  }}</div>
            @enderror
        </div>

        <div class="form-group ">
            <label class="h3" for="linkText ">Url Text :</label>
            <input value="{{$footer->linkText}}" type="text" name="linkText"
                class="form-control @error('linkText') is-invalid @enderror" id="linkText">
            @error('linkText')
            <div class="alert alert-danger">{{  $message  }}</div>
            @enderror
        </div>
        
        <div class="form-group ">
            <label class="h3" for="linkUrl ">Url Link :</label>
            <input value="{{$footer->linkUrl}}" type="text" name="linkUrl"
                class="form-control @error('linkUrl') is-invalid @enderror" id="linkUrl">
            @error('linkUrl')
            <div class="alert alert-danger">{{  $message  }}</div>
            @enderror
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
