@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<div class="container wow fadeInUp mt-5">
    <div class="text-center mb-5 mx-5 px-5">

        <h1 class="text-dark  p-3 mt-3 ">Edit HomeElement </h1>
        <hr class="bg-dark">
    </div>
</div>
@stop

@section('content')


<div class="container mb-5">

    <form action="{{route('homeElement.update',$homeElement)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group ">
            <label class="h3" for="bigLogo">Logo :</label>
            <div class="custom-file">

                <input type="file" name="bigLogo" value="{{$homeElement->bigLogo}}"
                    class="custom-file-input @error('bigLogo') is-invalid @enderror" id="bigLogo">
                <label class="custom-file-label" for="inputGroupFile01">Choose logo</label>
                @error('bigLogo')
                <div class="alert alert-danger">{{  $message  }}</div>
                @enderror
            </div>
        </div>


        <div class="form-group ">
            <label class="h3" for="titreHeader ">Titre Header :</label>
            <input value="{{$homeElement->titreHeader}}" type="text" name="titreHeader"
                class="form-control @error('titreHeader') is-invalid @enderror" id="titreHeader">
            @error('titreHeader')
            <div class="alert alert-danger">{{  $message  }}</div>
            @enderror
        </div>
        <div class="form-group ">
            <label class="h3" for="titreAbout ">Titre About :</label>
            <input value="{{$homeElement->titreAbout}}" type="text" name="titreAbout"
                class="form-control @error('titreAbout') is-invalid @enderror" id="titreAbout">
            @error('titreAbout')
            <div class="alert alert-danger">{{  $message  }}</div>
            @enderror
        </div>
        <div class="form-group ">
            <label class="h3" for="titreService ">Titre Service :</label>
            <input value="{{$homeElement->titreService}}" type="text" name="titreService"
                class="form-control @error('titreService') is-invalid @enderror" id="titreService">
            @error('titreService')
            <div class="alert alert-danger">{{  $message  }}</div>
            @enderror
        </div>
        <div class="form-group ">
            <label class="h3" for="titreTeam ">Titre Team :</label>
            <input value="{{$homeElement->titreTeam}}" type="text" name="titreTeam"
                class="form-control @error('titreTeam') is-invalid @enderror" id="titreTeam">
            @error('titreTeam')
            <div class="alert alert-danger">{{  $message  }}</div>
            @enderror
        </div>
        <div class="form-group ">
            <label class="h3" for="promotionTitre ">Titre Promotion :</label>
            <input value="{{$homeElement->promotionTitre}}" type="text" name="promotionTitre"
                class="form-control @error('promotionTitre') is-invalid @enderror" id="promotionTitre">
            @error('promotionTitre')
            <div class="alert alert-danger">{{  $message  }}</div>
            @enderror
        </div>
        <div class="form-group ">
            <label class="h3" for="promotionDescription ">Description Promotion :</label>
            <input value="{{$homeElement->promotionDescription}}" type="text" name="promotionDescription"
                class="form-control @error('promotionDescription') is-invalid @enderror" id="promotionDescription">
            @error('promotionDescription')
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
