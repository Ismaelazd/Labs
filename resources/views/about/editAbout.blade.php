@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<div class="container wow fadeInUp mt-5">
    <div class="text-center mb-5 mx-5 px-5">

        <h1 class="text-dark  p-3 mt-3 ">Edit About </h1>
        <hr class="bg-dark">
    </div>
</div>
@stop

@section('content')


<div class="mb-5">
<div class="container mb-5">

    <form action="{{route('about.update',$about)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group ">
            <label class="h3" for="videoImg">Image video :</label>
            <div class="custom-file">

                <input type="file" name="videoImg" value="{{$about->videoImg}}"
                    class="custom-file-input @error('videoImg') is-invalid @enderror" id="videoImg">
                <label class="custom-file-label" for="inputGroupFile01">Choose logo</label>
                @error('videoImg')
                <div class="alert alert-danger">{{  $message  }}</div>
                @enderror
            </div>
        </div>


        <div class="form-group ">
            <label class="h3" for="videoUrl ">Url video :</label>
            <input value="{{$about->videoUrl}}" type="text" name="videoUrl"
                class="form-control @error('videoUrl') is-invalid @enderror" id="videoUrl">
            @error('videoUrl')
            <div class="alert alert-danger">{{  $message  }}</div>
            @enderror
        </div>
        <div class="form-group ">
            <label class="h3" for="description1 ">Description1 :</label>
            <input value="{{$about->description1}}" type="text" name="description1"
                class="form-control @error('description1') is-invalid @enderror" id="description1">
            @error('description1')
            <div class="alert alert-danger">{{  $message  }}</div>
            @enderror
        </div>
        <div class="form-group ">
            <label class="h3" for="description2 ">Description2 :</label>
            <input value="{{$about->description2}}" type="text" name="description2"
                class="form-control @error('description2') is-invalid @enderror" id="description2">
            @error('description2')
            <div class="alert alert-danger">{{  $message  }}</div>
            @enderror
        </div>
        
        <div class="form-group ">
            <label class="h3" for="btnAbout ">Bouton :</label>
        
            <input value='1' id="btnAbout" type="checkbox" id="btnAbout" class="form-control @error('btnAbout') is-invalid @enderror" name="btnAbout" 
            @if (old('btnAbout',$about->btnAbout))
                
                    checked
            @endif  >

            @error('btnAbout')
            <div class="alert alert-danger">{{  $message  }}</div>
            @enderror
            
        </div>
    </div>


        <div class="text-center">

            <button type="submit" class="btn btn-outline-dark">Submit</button>
        </div>

    </form>
</div>

</div>

@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
<link rel="stylesheet" href="/css/users.css">
@stop

@section('js')

@stop
