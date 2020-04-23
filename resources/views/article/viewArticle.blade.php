@extends('adminlte::page')
@section('title', 'AdminLTE')
@section('content_header')
<div class="container wow fadeInUp mt-5">
    <div class="text-center mb-5 mx-5 px-5">

        <h1 class="text-dark  p-3 mt-3 ">Article</h1>
        <hr class="bg-dark">
    </div>
</div>
@stop
@section('content')

<div class="row  d-flex justify-content-around">

    @foreach ($articles as $article)
    <div class="col-4 py-3  px-5 my-3 ">
        <div class="card h-100 bg-white text-white border-white">
            <img src="{{asset('storage/'.$article->image)}}" class="card-img-top  mx-auto " alt="...">
            <div class="card-body bg-white text-dark">
                <h5 class="card-title"><u><b>{{$article->user->name}}</b></u></h5><br>
                <h5 class=""><b>{{$article->categorie->categorie}}</b></h5>
                <h6 class=""><b>@foreach ($article->tags as $tag)

                        
                        @if($loop->last)
                        {{$tag->tag}}
                        @else
                        {{$tag->tag}} /
                        @endif

                        @endforeach</b></h6>
                <p class="card-text">{{Illuminate\Support\Str::limit($article->texte, 210, ' (...)')}}</p>

            </div>

            <div class=" text-center py-2 bg-dark d-flex justify-content-center">
                <button class="bg-dark btn btn-dark mx-2"><a href="{{route('article.edit',$article)}}" title="Edit"><i
                            class="mx-2 text-warning fa-2x ion ion-android-create "></i></a> </button>

                <form action="{{route('article.destroy',$article)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="bg-dark btn btn-dark mx-2" href="" type="submit" title="Delete"><i
                            class="mx-2 text-danger fa-2x ion ion-ios-trash-outline "></i></button
                        class="bg-dark border-none">
                </form>
            </div>
        </div>
    </div>
    @endforeach

</div>

@stop
@section('css')
<link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
<link rel="stylesheet" href="{{asset('css/ionicons/css/ionicons.css')}}">
@endsection
