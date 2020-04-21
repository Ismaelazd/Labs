@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<div class="container wow fadeInUp mt-5">
    <div class="text-center mb-5 mx-5 px-5">

        <h1 class="text-dark  p-3 mt-3 ">Edit service </h1>
        <hr class="bg-dark">
    </div>
</div>
@stop

@section('content')
    

<div class="container">
    
    <form action="{{route('service.update',$service)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <fieldset class="form-group mt-3">
            
            <label class="h3" for="name ">Icon :</label>
                {{-- @error('id_avatar')
                <p class="text-danger">{{$message}}</p>
                @enderror --}}
                
                <div class="d-flex row modImg">
                    @foreach ($icons as $item)
                    <div class="form-check col-3 my-2 d-flex align-items-center justify-content-between  flex-column-reverse">
                        @if ($item->id==$service->icon_id)
                            <input class=""  type="radio" name="icon_id" id="gridRadios1"
                            value="{{$item->id}}" checked>
                            <i  style="font-size: 40px" class="{{$item->icon}} my-2"></i>
                        @else
                            <input class="" type="radio" name="icon_id" id="gridRadios1"
                            value="{{$item->id}}">
                            <i  style="font-size: 40px" class="{{$item->icon}} my-2"></i>
                        @endif
                    </div>
                    @endforeach
                </div>
            
        </fieldset>
        <div class="form-group text-darka ">
            <label class="h3" for="titre">Titre :</label> <br>
            <input value="{{$service->titre}}" type="text" name="titre"
                class="form-control @error('titre') is-invalid @enderror" id="titre">
            @error('titre')
            <div class="alert alert-danger">{{  $message  }}</div>
            @enderror
        </div>
        <div class="form-group text-darka ">
            <label class="h3" for="titre">Description :</label> <br>
            <input value="{{$service->description}}" type="text" name="description"
                class="form-control @error('description') is-invalid @enderror" id="description">
            @error('description')
            <div class="alert alert-danger">{{  $message  }}</div>
            @enderror
        </div>
       

        <div class="text-center mb-5">

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