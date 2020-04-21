@extends('adminlte::page')
@section('title', 'AdminLTE')
@section('content_header')
<div class="container wow fadeInUp mt-5">
    <div class="text-center mb-5 mx-5 px-5">

        <h1 class="text-dark  p-3 mt-3 ">Contact</h1>
        <hr class="bg-dark">
    </div>
</div>
@stop
@section('content')

    <div class="mb-5 container">
       
        <table class="table table-hover table-light">
            <thead class="bg-dark ">
                <tr>
                    <th scope="col" class="text-center">Nom de l'élément</th>
                    <th scope="col" class="text-center">Contenu de l'élément</th>
                 
                </tr>
            </thead>
            <tbody>
                <tr> 
                    <th scope="col" class="text-center border border-dark">Adresse</th>
                    <td class="text-center border border-dark">{{$contact->address}}</td>
                </tr>
                <tr> 
                    <th scope="col" class="text-center border border-dark">Ville</th>
                    <td class="text-center border border-dark">{{$contact->ville}}</td>
                </tr>
               <tr> 
                    <th scope="col" class="text-center border border-dark">Téléphone</th>
                    <td class="text-center border border-dark">{{$contact->tel}}</td>
                </tr>
                <tr> 
                    <th scope="col" class="text-center border border-dark">Email</th>
                    <td class="text-center border border-dark">{{$contact->email}}</td>
                </tr>
                <tr> 
                    <th scope="col" class="text-center border border-dark">Description</th>
                    <td class="text-center border border-dark">{{$contact->description}}</td>
                </tr>
                    
                <tr> 
                    <td colspan="2" class="text-center border border-dark bg-dark">  
                        <a class="btn btn-outline-warning " href="{{route('contact.edit',$contact)}}">Edit</a>   
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

@stop
@section('css')
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
@endsection
