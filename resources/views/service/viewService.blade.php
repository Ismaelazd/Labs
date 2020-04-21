@extends('adminlte::page')
@section('title', 'AdminLTE')
@section('content_header')
<div class="container wow fadeInUp mt-5">
    <div class="text-center mb-5 mx-5 px-5">

        <h1 class="text-dark  p-3 mt-3 ">Services </h1>
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
                <th class="text-center col">icon</th>
                <th class="text-center col">titre</th>
                <th class="text-center col">icon</th>
                <th class="text-center col">Action</th>
              </tr>    
            </thead>
            <tbody>
                @foreach ($services as $service)
                    <tr class="row">
                        <td class="text-center col">{{$service->id}}</td>
                        <td class="text-center col">
                       
                            <i style="font-size: 40px" class="{{$service->icon->icon}}"></i>
      
                        </td>
                        <td class="text-center col">{{$service->titre}}</td>
                        <td class="text-center col">{{$service->description}}</td>
                        <td class="text-center col d-flex justify-content-center align-items-center">
                            <a href="{{route('service.edit',$service)}}" class="btn btn-outline-warning mx-2">editer</a>
                            <form action="{{route('service.destroy',$service)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type='submit' class="btn btn-outline-danger mx-2">Supprimer</button>
                            </form>
                        </td>
                    </tr> 
                @endforeach
            </tbody>
          </table>  
@stop
@section('css')
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
@endsection
