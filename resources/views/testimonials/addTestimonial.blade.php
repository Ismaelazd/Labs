@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<div class="container wow fadeInUp mt-5">
    <div class="text-center mb-5 mx-5 px-5">

        <h1 class="text-dark  p-3 mt-3 ">Add Testimonial </h1>
        <hr class="bg-dark">
    </div>
</div>
@stop

@section('content')
    

<div class="container mb-5">
    
    <form action="{{route('testimonial.store')}}" method="post" enctype="multipart/form-data">
        @csrf
           
        <div class="form-group text-darka ">
            <label class="h3" for="prenom">Prénom :</label> <br>
            <input value="" type="text" name="prenom"
                class="form-control @error('prenom') is-invalid @enderror" id="prenom">
            @error('prenom')
            <div class="alert alert-danger">{{  $message  }}</div>
            @enderror
        </div>
        <div class="form-group text-darka ">
            <label class="h3" for="nom">Nom :</label> <br>
            <input value="" type="text" name="nom"
                class="form-control @error('nom') is-invalid @enderror" id="nom">
            @error('nom')
            <div class="alert alert-danger">{{  $message  }}</div>
            @enderror
        </div>
        <div class="form-group text-darka ">
            <label class="h3" for="role">Rôle :</label> <br>
            <input value="" type="text" name="role"
                class="form-control @error('role') is-invalid @enderror" id="role">
            @error('role')
            <div class="alert alert-danger">{{  $message  }}</div>
            @enderror
        </div>
        <div class="form-group text-darka ">
            <label class="h3" for="company">Company :</label> <br>
            <input value="" type="text" name="company"
                class="form-control @error('company') is-invalid @enderror" id="company">
            @error('company')
            <div class="alert alert-danger">{{  $message  }}</div>
            @enderror
        </div>
        <div class="form-group text-darka ">
            <label class="h3" for="text">Texte :</label> <br>
            <input value="" type="text" name="text"
                class="form-control @error('text') is-invalid @enderror" id="text">
            @error('text')
            <div class="alert alert-danger">{{  $message  }}</div>
            @enderror
        </div>

        <label class="h3" for="">Photo :</label>
        <div class="input-group mb-3">
            <div class="custom-file">
              <input type="file"name="img" class="custom-file-input {{ $errors->has('img') ? 'is-invalid' : '' }}" id="inputGroupFile01">
              <label class="custom-file-label" for="inputGroupFile01">Choose an image</label>
            </div>
            @if ($errors->has('img'))
            <div class="invalid-feedback">
                <strong>{{ $errors->first('img') }}</strong>
            </div>
        @endif
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
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">

@stop

@section('js')
   
@stop