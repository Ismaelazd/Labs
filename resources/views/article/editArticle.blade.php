@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<div class="container wow fadeInUp mt-5">
    <div class="text-center mb-5 mx-5 px-5">

        <h1 class="text-dark  p-3 mt-3 ">Edit Article </h1>
        <hr class="bg-dark">
    </div>
</div>
@stop

@section('content')


<div class="container mb-5">

    <form action="{{route('article.update',$article)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group ">
            <label class="h3" for="titre ">Titre :</label>
            <input value="{{$article->titre}}" type="titre" name="titre"
                class="form-control @error('titre') is-invalid @enderror" id="titre">
            @error('titre')
            <div class="alert alert-danger">{{  $message  }}</div>
            @enderror
        </div>

        <div class="input-group mb-3">
           
            <div class="custom-file">
              <input type="file"name="image" class="custom-file-input {{ $errors->has('image') ? 'is-invalid' : '' }}" id="inputGroupFile01">
              <label class="custom-file-label" for="inputGroupFile01">Choose an image</label>
            </div>
            @if ($errors->has('image'))
            <div class="invalid-feedback">
                <strong>{{ $errors->first('image') }}</strong>
            </div>
        @endif
          </div>


        <div class="form-group ">
            <label class="h3" for="categorie_id">Catégorie :</label>
            <select class="form-control" name="categorie_id" id="categorie_id">
                @foreach ($categories as $categorie)
                  
                    <option value="{{$categorie->id}}">{{$categorie->categorie}}</option>
                    
                @endforeach
            </select>
            @error('role_id')
            <div class="alert alert-danger">{{  $message  }}</div>
            @enderror
        </div>

        <div class="form-group ">
            <label class="h3" for="accepted ">Afficher Article :</label>
        
            <input value='1' id="accepted" type="checkbox" id="accepted" class="form-control @error('accepted') is-invalid @enderror" name="accepted" 
            @if (old('accepted',$article->accepted))
                
                    checked
            @endif  >

            @error('accepted')
            <div class="alert alert-danger">{{  $message  }}</div>
            @enderror
            
        </div>
        
        <div class="form-group ">
            <label class="h3" for="texte ">Texte :</label>
            <input value="{{$article->texte}}" type="text" name="texte"
                class="form-control @error('texte') is-invalid @enderror" id="texte">
            @error('texte')
            <div class="alert alert-danger">{{  $message  }}</div>
            @enderror
        </div>

        <div class="form-group ">
            <label class="h3" for="tag ">Tags:</label>
           
            <div class="row my-3">
            @foreach ($tags as $tag)
                @if ($articletag->where('tag_id',$tag->id)->first())
                    <div class="col-3">
                       
                        <label for="tag">{{$tag->tag}}</label>
                        <input checked type="checkbox" name="tag[]" value="{{$tag->id}}" class=" @error('tag.*') is-invalid @enderror" id="">
                    </div>
                @else
                    
                    <div class="col-3">
                        <label for="tag">{{$tag->tag}}</label>
                        <input  type="checkbox" name="tag[]" value="{{$tag->id}}" class=" @error('tag.*') is-invalid @enderror" id="">
                    </div>
                   
                    
                @endif
            @endforeach
            @error('tag.*')
            <div class="alert alert-danger">{{  $message  }}</div>
            @enderror
            </div>
        

            
        </div>

        <div class="text-center">

            <button type="submit" class="btn btn-outline-dark">Submit</button>
        </div>

    </form>
</div>



@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
<link rel="stylesheet" href="/css/users.css">
@stop

@section('js')

@stop
