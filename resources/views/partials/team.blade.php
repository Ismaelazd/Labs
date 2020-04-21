<!-- Team Section -->
<div class="team-section spad">
    <div class="overlay"></div>
    <div class="container">
        <div class="section-title">
            <h2>{!! App\Helper\ChangeColor::color(($homeElement->titreTeam))!!}</h2>
        </div>
        <div class="row">
			@foreach ($randomUsers as $index=>$user)
			
            @if ($index==0)
            <!-- single member -->
            <div class="col-sm-4">
                <div class="member">
                    <img src="{{'storage/'.$user->image}}" alt="">
                    <h2>{{$user->name}}</h2>
                    <h3>{{$user->role->role}}</h3>
                </div>
			</div>
			<!-- single member -->
            <div class="col-sm-4">
                <div class="member">
                    <img src="{{'storage/'.$CEO->image}}" alt="">
                    <h2>{{$CEO->name}}</h2>
                    <h3>{{$CEO->role->role}}</h3>
                </div>
            </div>
			@else
			 <!-- single member -->
			 <div class="col-sm-4">
                <div class="member">
                    <img src="{{'storage/'.$user->image}}" alt="">
                    <h2>{{$user->name}}</h2>
                    <h3>{{$user->role->role}}</h3>
                </div>
			</div>
            
            @endif
            @endforeach

        </div>
    </div>
</div>
<!-- Team Section end-->
