@extends('adminlte::page')
@section('title', 'AdminLTE')
@section('content_header')
<div class="container wow fadeInUp mt-5">
    <div class="text-center mb-5 mx-5 px-5">

        <h1 class="text-dark  p-3 mt-3 ">Formulaire</h1>
        <hr class="bg-dark">
    </div>
</div>
@stop
@section('content')

    <div class="mb-5 container"> 
         <div class="container text-center">
        
            <div class="mb-5">
                <table class="table table-striped table-light">
                    <thead class="bg-dark">
                        <tr>
                            <th scope="col" class="text-center">Id</th>
                            <th scope="col" class="text-center ">Nom</th>
                            <th scope="col" class="text-center ">Email</th>
                            <th scope="col" class="text-center ">Sujet</th>
                            <th scope="col" class="text-center ">Message</th>
                            <th scope="col" class="text-center w-25">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($formulaires as $form)
                        <tr>
                            <th scope="row" class="text-center">{{$form->id}}</th>
                            <td class="text-center">{{$form->name}}</td>
                            <td class="text-center">{{$form->email}}</td>
                            <td class="text-center">{{$form->sujet}}</td>
                            <td class="text-center">{{$form->message}}</td>
                            <td class="d-flex justify-content-around ">
                            
                                <a href="{{route('formulaire.destroy',$form)}}" class="deleteMsg" title="Delete"><i class="mx-3 text-danger fa-2x ion ion-ios-trash-outline "></i></a>
                            </td>
                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>
    
            </div>
        
        </div>
 
    </div>

@stop
@section('css')
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('css/ionicons/css/ionicons.css')}}">
@endsection
