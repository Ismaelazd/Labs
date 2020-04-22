@extends('adminlte::page')
@section('title', 'AdminLTE')
@section('content_header')
<div class="container wow fadeInUp mt-5">
    <div class="text-center mb-5 mx-5 px-5">

        <h1 class="text-dark  p-3 mt-3 ">Testimonials</h1>
        <hr class="bg-dark">
    </div>
</div>
@stop
@section('content')

<div class="row  d-flex justify-content-around">

    @foreach ($testimonials as $testimonial)
    <div class="col-4 py-3  px-5 my-3 ">
        <div class="card h-100 bg-white text-white border-white">
            <img src="{{asset('storage/'.$testimonial->img)}}" class="card-img-top w-50 mx-auto " alt="...">
            <div class="card-body bg-white text-dark">
                <h5 class="card-title"><u><b>{{$testimonial->nom}} {{$testimonial->prenom}}</b></u></h5><br>
                <h5 class=""><b>{{$testimonial->role}}</b></h5>
                <h6 class=""><b>{{$testimonial->company}}</b></h6>
                <p class="card-text">{{$testimonial->text}}</p>

            </div>

            <div class=" text-center py-2 bg-dark d-flex justify-content-center">
                <button class="bg-dark btn btn-dark mx-2"><a href="{{route('testimonial.edit',$testimonial)}}" title="Edit"><i
                            class="mx-2 text-warning fa-2x ion ion-android-create "></i></a> </button>

                <form action="{{route('testimonial.destroy',$testimonial)}}" method="post">
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
