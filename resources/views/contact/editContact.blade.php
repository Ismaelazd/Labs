@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<div class="container wow fadeInUp mt-5">
    <div class="text-center mb-5 mx-5 px-5">

        <h1 class="text-dark  p-3 mt-3 ">Edit Contact </h1>
        <hr class="bg-dark">
    </div>
</div>
@stop

@section('content')


<div class="container mb-5">

    <form action="{{route('contact.update',$contact)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group ">
            <label class="h3" for="address ">Adresse :</label>
            <input value="{{$contact->address}}" type="text" name="address"
                class="form-control @error('address') is-invalid @enderror" id="address">
            @error('address')
            <div class="alert alert-danger">{{  $message  }}</div>
            @enderror
        </div>

        <div class="form-group ">
            <label class="h3" for="ville ">Ville :</label>
            <input value="{{$contact->ville}}" type="text" name="ville"
                class="form-control @error('ville') is-invalid @enderror" id="ville">
            @error('ville')
            <div class="alert alert-danger">{{  $message  }}</div>
            @enderror
        </div>
        
        <div class="form-group ">
            <label class="h3" for="tel ">Tel:</label>
            <input value="{{$contact->tel}}" type="tel" name="tel"
                class="form-control @error('tel') is-invalid @enderror" id="tel">
            @error('tel')
            <div class="alert alert-danger">{{  $message  }}</div>
            @enderror
        </div>
        <div class="form-group ">
            <label class="h3" for="email ">Email :</label>
            <input value="{{$contact->email}}" type="email" name="email"
                class="form-control @error('email') is-invalid @enderror" id="email">
            @error('email')
            <div class="alert alert-danger">{{  $message  }}</div>
            @enderror
        </div>
        <div class="form-group ">
            <label class="h3" for="description ">Description :</label>
            <input value="{{$contact->description}}" type="text" name="description"
                class="form-control @error('description') is-invalid @enderror" id="description">
            @error('description')
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
