@extends('layouts/master')

@section('content')

    {{-- @include('components/preloader') --}}

    @include('components/nav')

    @include('components/header')



	<!-- page section -->
	<div class="page-section spad">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-7 blog-posts">
					<!-- Single Post -->
					<div class="single-post">
						<div class="post-thumbnail">
							<img src="{{asset('storage/'.$article->image)}}" alt="">
							<div class="post-date">
	                            <h2>{{$article->created_at->format('d')}}</h2>
	                            <h3>{{\Illuminate\Support\Str::limit(date('F',strtotime($article->created_at)), 3, $end='')}}
	                                {{$article->created_at->format('Y')}}</h3>
	                        </div>
						</div>
						<div class="post-content">
							<h2 class="post-title">{{$article->titre}}</h2>
							<div class="post-meta">
								<a href="">{{$article->categorie->categorie}}</a>
								<a href="">
									@foreach ($article->tags->shuffle()->take(3) as $index=>$tag)
										
									@if($loop->last)
									{{$tag->tag}}
									@else
									{{$tag->tag}} ●
									@endif

									@endforeach
								</a>
								<a href="">2 {{count($commentaires)}}</a>
							</div>
							<p>{{$article->texte}}</p>
							
						</div>
						<!-- Post Author -->
						<div class="author">
							<div class="avatar">
								<img src="{{asset('storage/'.$article->user->image)}}" alt="">
							</div>	
							<div class="author-info">
								<h2>{{$article->user->name}}, <span>Author</span></h2>
								<p>Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique. </p>
							</div>
						</div>
						<!-- Post Comments -->
						<div class="comments">
							<h2>Comments ({{count($commentaires)}})</h2>
							<ul class="comment-list">
								@foreach ($commentaires as $commentaire)
								<li>
									<div class="avatar">
										<img src="{{asset('storage/'.$commentaire->user->image)}}" alt="">
									</div>
									<div class="commetn-text">
										<h3>{{$commentaire->user->name}} {{$commentaire->user->firstname}} | {{$commentaire->created_at->format('d')}} {{\Illuminate\Support\Str::limit(date('F',strtotime($article->created_at)), 3, $end='')}}, {{$commentaire->created_at->format('Y')}} | {{$commentaire->created_at->format('H')}}h{{$commentaire->created_at->format('i')}}</h3>
										<p>{{$commentaire->commentaire}} </p>
									</div>
								</li>
								<form action="{{route('commentaire.destroy',$commentaire)}}" method="POST" class="text-right">
								@csrf
								@method('DELETE')
								
									<button class="btn btn-outline-dark" >Supprimer</button>
								</form>
								@endforeach
								
							</ul>
						</div>

						<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
	Launch demo modal
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
	  <div class="modal-content">
		<div class="modal-header">
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		  <h4 class="modal-title" id="myModalLabel">Modal title</h4>
		</div>
		<div class="modal-body">
		  ...
		</div>
		<div class="modal-footer">
		  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  <button type="button" class="btn btn-primary">Save changes</button>
		</div>
	  </div>
	</div>
  </div>
						<!-- Commert Form -->
						<div class="row">
							<div class="col-md-9 comment-from">
								<h2>Leave a comment</h2>
								<form class="form-class" action="{{route('addComment',$article)}}" method="POST">
									@csrf
									<div class="row">
										
										<div class="col-sm-12">
											
											<textarea name="commentaire" placeholder="Message"></textarea>
											<button class="site-btn">send</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- Sidebar area -->
				<div class="col-md-4 col-sm-5 sidebar">
					<!-- Single widget -->
					<div class="widget-item">
						<form action="#" class="search-form">
							<input type="text" placeholder="Search">
							<button class="search-btn"><i class="flaticon-026-search"></i></button>
						</form>
					</div>
					<!-- Single widget -->
					<div class="widget-item">
						<h2 class="widget-title">Categories</h2>
						<ul>
							@foreach ($categories as $cat)
								
							<li><a href="#">{{$cat->categorie}}</a></li>
							@endforeach
						</ul>
					</div>
					
					<!-- Single widget -->
					<div class="widget-item">
						<h2 class="widget-title">Tags</h2>
						<ul class="tag">
							@foreach ($tags as $tag)
								<li><a href="">{{$tag->tag}}</a></li>
							@endforeach	
						</ul>
					</div>
					<!-- Single widget -->
					<div class="widget-item">
						<h2 class="widget-title">Quote</h2>
						<div class="quote">
							<span class="quotation">‘​‌‘​‌</span>
							<p>{{$quote->texte}}</p>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	<!-- page section end-->

    @include('partials/newsletter')

    @include('components/footer')



@endsection