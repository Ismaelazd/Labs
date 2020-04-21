@extends('adminlte::page')
@section('title', 'AdminLTE')
@section('content_header')
<div class="container wow fadeInUp mt-5">
    <div class="text-center mb-5 mx-5 px-5">

        <h1 class="text-dark  p-3 mt-3 ">Home Elements </h1>
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
                    <th scope="col" class="text-center border border-dark">logo</th>
                    <td class="text-center border border-dark"><img class="w-25" src="{{asset("storage/".$homeElement->bigLogo)}}" alt=""></td>
                </tr>
                <tr> 
                    <th scope="col" class="text-center border border-dark">bigLogo</th>
                    <td class="text-center border border-dark"><img class="w-25" src="{{asset("storage/".$homeElement->bigLogo)}}" alt=""></td>
                </tr>
               <tr> 
                    <th scope="col" class="text-center border border-dark">titreHeader</th>
                    <td class="text-center border border-dark">{{$homeElement->titreHeader}}</td>
                </tr>
                <tr> 
                    <th scope="col" class="text-center border border-dark">titreAbout</th>
                    <td class="text-center border border-dark">{{$homeElement->titreAbout}}</td>
                </tr>
                <tr> 
                    <th scope="col" class="text-center border border-dark">titreService</th>
                    <td class="text-center border border-dark">{{$homeElement->titreService}}</td>
                </tr>
                <tr> 
                    <th scope="col" class="text-center border border-dark">titreTeam</th>
                    <td class="text-center border border-dark">{{$homeElement->titreTeam}}</td>
                </tr>
                <tr> 
                    <th scope="col" class="text-center border border-dark">promotionTitre</th>
                    <td class="text-center border border-dark">{{$homeElement->promotionTitre}}</td>
                </tr>
                <tr> 
                    <th scope="col" class="text-center border border-dark">promotionDescription</th>
                    <td class="text-center border border-dark">{{$homeElement->promotionDescription}}</td>
                </tr>
                <tr> 
                    <td colspan="2" class="text-center border border-dark bg-dark">  
                        <a class="btn btn-outline-warning " href="{{route('homeElement.edit',$homeElement)}}">Edit</a>   
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

@stop
@section('css')
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
@endsection
