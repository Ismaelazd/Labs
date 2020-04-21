<!-- About section -->
<div class="about-section">
    <div class="overlay"></div>
    <!-- card section -->
    <div class="card-section">
        <div class="container">
            <div class="row">
                @foreach ($servicesTrois as $service)
                    <!-- single card -->
                <div class="col-md-4 col-sm-6">
                    <div class="lab-card">
                        <div class="icon">
                            <i class={{$service->icon->icon}}></i>
                        </div>
                        <h2>{{$service->titre}}</h2>
                        <p>{{$service->description}}</p>
                    </div>
                </div>
                @endforeach
                
                
            </div>
        </div>
    </div>
    <!-- card section end-->


    <!-- About contant -->
    <div class="about-contant">
        <div class="container">
            <div class="section-title">
                <h2>{!! App\Helper\ChangeColor::color(($homeElement->titreAbout))!!}</h2>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <p>{{$about->description1}}</p>
                </div>
                <div class="col-md-6">
                    <p>{{$about->description2}}</p>
                </div>
            </div>
            <div class="text-center mt60">
                @if ($about->btnAbout)
                    <a href="{{route('contactPage.index')}}" class="site-btn">Browse</a>
                @endif
            </div>
            <!-- popup video -->
            <div class="intro-video">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <img src="{{asset('storage/'.$about->videoImg)}}" alt="">
                        <a href="{{$about->videoUrl}}" class="video-popup">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About section end -->