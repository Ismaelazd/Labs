<!-- newsletter section -->
<div class="newsletter-section spad">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h2>Newsletter</h2>
            </div>
            <div class="col-md-9 mb-3">
                <!-- newsletter form -->
                <form action="{{route('newsletter.store')}}" class="nl-form " method="POST">
                    @csrf
                    <input type="email" placeholder="Your e-mail here" name="email">
                    <button class="site-btn btn-2">Newsletter</button>
                </form>
                <div class="my-2 col-md-6 mx-auto">
                    @if(Session::has('sent'))
                    <div class="text-center alert alert-success">
                        {{ Session::get('sent') }}
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<!-- newsletter section end-->