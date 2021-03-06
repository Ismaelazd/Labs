<!-- services card section-->
<div class="services-card-section spad" id="serviceCard">
    <div class="container">
        <div class="row">
            @foreach ($articles as $article)
                 <!-- Single Card -->
            <div class="col-md-4 col-sm-6">
                <div class="sv-card">
                    <div class="card-img">
                        <img src="{{asset('storage/'.$article->image)}}" alt="">
                    </div>
                    <div class="card-text">
                        <h2>{{$article->titre}}</h2>
                        <p>{{Illuminate\Support\Str::limit($article->texte, 210, ' (...)')}}</p>
                    </div>
                </div>
            </div>
            @endforeach
           
           
        </div>
    </div>
</div>
<!-- services card section end-->