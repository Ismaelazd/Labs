	<!-- page section -->
	<div class="page-section spad">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-7 blog-posts">
					@foreach ($articles as $article)
						<!-- Post item -->
					<div class="post-item">
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
										
										{{$tag->tag}}

									@endforeach
								</a>
								<a href="">2 Comments</a>
							</div>
							<p>{{Illuminate\Support\Str::limit($article->texte, 450, ' (...)')}}</p>
							<a href="blog-post.html" class="read-more">Read More</a>
						</div>
					</div>
					@endforeach
					
					
					<!-- Pagination -->
					<div class="page-pagination text-center">
						{{$articles->links()}}
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
							<p>Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique. Sed lacinia turpis at ultricies vestibulum.</p>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	<!-- page section end-->