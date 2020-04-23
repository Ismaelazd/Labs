@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<div class="container wow fadeInUp mt-5">
    <div class="text-center mb-5 mx-5 px-5">

        <h1 class="text-dark  p-3 mt-3 ">Edit quote </h1>
        <hr class="bg-dark">
    </div>
</div>
@stop

@section('content')
    

<div class="container">
    
    <form action="{{route('quote.update',$quote)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <div class="form-group blue-border">
            <label for="exampleFormControlTextarea4">Texte :</label>
            
            <textarea class="form-control" id="exampleFormControlTextarea4" rows="3" name='texte'>{{$quote->texte}}</textarea>
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