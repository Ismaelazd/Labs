@extends('adminlte::page')
@section('title', 'AdminLTE')
@section('content_header')
<div class="container wow fadeInUp mt-5">
    <div class="text-center mb-5 mx-5 px-5">

        <h1 class="text-dark  p-3 mt-3 ">Footer</h1>
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
                        <tr>
                            <th scope="col" class="text-center">Id</th>
                            <th scope="col" class="text-center ">Text</th>
                            <th scope="col" class="text-center ">Url Link</th>
                            <th scope="col" class="text-center ">Text Link</th>
                            <th scope="col" class="text-center ">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($footers as $footer)
                        <tr>
                            <th scope="row" class="text-center">{{$footer->id}}</th>
                            <td class="text-center">{{$footer->text}}</td>
                            <td class="text-center">{{$footer->linkUrl}}</td>
                            <td class="text-center">{{$footer->linkText}}</td>
                            <td class="d-flex justify-content-around ">
                            
                                <button class=" btn btn-dark mx-2">

                                    <a href="{{route('footer.edit',$footer)}}"  title="Edit"><i class="mx-2 text-warning fa-2x ion ion-android-create "></i></a>
                                </button>

                                <form action="{{route('footer.destroy',$footer)}}" method="post">
                                @csrf
                                @method('DELETE')
                                    <button class="bg-dark btn btn-dark mx-2"   title="Delete"><i class="mx-2 text-danger fa-2x ion ion-ios-trash-outline "></i></button>
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
