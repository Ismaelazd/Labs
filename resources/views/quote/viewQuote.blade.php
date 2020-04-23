@extends('adminlte::page')
@section('title', 'AdminLTE')
@section('content_header')
<div class="container wow fadeInUp mt-5">
    <div class="text-center mb-5 mx-5 px-5">

        <h1 class="text-dark  p-3 mt-3 ">Quote </h1>
        <hr class="bg-dark">
    </div>
</div>
@stop
@section('content')
    <div class="container">
        
        <table class="table table-striped">
            <thead>
              <tr  class="row bg-dark text-white">
                <th class="text-center col">Id</th>
                <th class="text-center col">Texte</th>
                <th class="text-center col">Action</th>
              </tr>    
            </thead>
            <tbody>
  
                    <tr class="row">
                        <td class="text-center col">{{$quote->id}}</td>
                        <td class="text-center col">{{$quote->texte}}</td>
                        <td class="text-center col d-flex justify-content-center align-items-center">
                            <a href="{{route('quote.edit',$quote)}}" class="btn btn-outline-warning mx-2">editer</a>
                            
                        </td>
                    </tr> 

            </tbody>
          </table>  
@stop
@section('css')
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
@endsection
