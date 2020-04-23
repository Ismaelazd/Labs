@extends('adminlte::page')
@section('title', 'AdminLTE')
@section('content_header')
<div class="container wow fadeInUp mt-5">
    <div class="text-center mb-5 mx-5 px-5">

        <h1 class="text-dark  p-3 mt-3 ">Commentaires</h1>
        <hr class="bg-dark">
    </div>
</div>
@stop
@section('content')

    <div class="mb-5 container"> 
         <div class="container text-center">
        
            <div class="mb-5">
                <table class="table  table-dark">
                    <thead class="bg-dark">
                        <tr class="">
                            <th scope="col" class="text-center">Id</th>
                            <th scope="col" class="text-center ">Commentaire</th>
                            <th scope="col" class="text-center ">Auteur du commentaire</th>
                            <th scope="col" class="text-center ">Titre de l'article</th>
                            <th scope="col" class="text-center ">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($commentaires as $commentaire)
                        <tr>
                            <th scope="row" class="text-center">{{$commentaire->id}}</th>
                            <td class="text-center">{{$commentaire->commentaire}}</td>
                            <td class="text-center">{{$commentaire->user->name}}</td>
                            <td class="text-center">{{$commentaire->article->titre}}</td>
                            <td class="d-flex justify-content-around ">
                        
                                <form action="{{route('commentaire.destroy',$commentaire)}}" method="post">
                                @csrf
                                @method('DELETE')
                                    <button class="bg-dark btn btn-dark mx-4"   title="Delete"><i class=" text-danger fa-2x ion ion-ios-trash-outline "></i></button>
                                </form>
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
