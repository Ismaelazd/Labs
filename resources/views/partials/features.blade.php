<div id="features" class="team-section spad">
    <div class="overlay"></div>
    <div class="container">
        <div class="section-title">
            <h2>{!! App\Helper\ChangeColor::color(($titreFeature->titreFeature))!!}</h2>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-4 features">
            @foreach ($lastSix as $index=>$feature)
                @if ($index<2)
                    <!-- feature item -->
                    <div class="icon-box light left">
                        <div class="service-text">
                            <h2>{{$feature->titre}}</h2>
                            <p>{{$feature->description}}</p>
                        </div>
                        <div class="icon">
                            <i class="{{$feature->icon->icon}}"></i>
                        </div>
                    </div>
                @else
                    @if ($index==2)
                                <!-- feature item -->
                            <div class="icon-box light left">
                                <div class="service-text">
                                    <h2>{{$feature->titre}}</h2>
                                    <p>{{$feature->description}}</p>
                                </div>
                                <div class="icon">
                                    <i class="{{$feature->icon->icon}}"></i>
                                </div>
                            </div>
                        </div>
                        <!-- Devices -->
                        <div class="col-md-4 col-sm-4 devices">
                            <div class="text-center">
                                <img src="img/device.png" alt="">
                            </div>
                        </div>
                        <!-- feature item -->
                        <div class="col-md-4 col-sm-4 features">
                    @else
                            <div class="icon-box light">
                                <div class="icon">
                                    <i class="{{$feature->icon->icon}}"></i>
                                </div>
                                <div class="service-text">
                                    <h2>{{$feature->titre}}</h2>
                                    <p>{{$feature->description}}</p>
                                </div>
                            </div>
                    @endif
                @endif
            @endforeach
            </div> 
        </div>
        <div class="text-center mt100">
            <a href="#serviceCard" class="site-btn">Browse</a>
        </div>
    </div>
</div>
<!-- features section end-->

