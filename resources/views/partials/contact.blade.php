<!-- Contact section -->
<div class="contact-section spad fix" id="contact">
    <div class="container">
        <div class="row">
            <!-- contact info -->
            <div class="col-md-5 col-md-offset-1 contact-info col-push">
                <div class="section-title left">
                    <h2>Contact us</h2>
                </div>
                <p>{{$contact->description}}</p>
                <h3 class="mt60">Main Office</h3>
                <p class="con-item">{{$contact->address}}<br> {{$contact->ville}} </p>
                <p class="con-item">{{$contact->tel}}</p>
                <p class="con-item">{{$contact->email}}</p>
            </div>
            <!-- contact form -->
            <div class="col-md-6 col-pull">
                @if(Session::has('success'))
                <div class="text-center alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif
                <form action="{{route('formulaire.store')}}" class="form-class" id="con_form" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <input type="text" name="nom" placeholder="Your name">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" name="email" placeholder="Your email">
                        </div>
                        <div class="col-sm-12">
                            <input type="text" name="sujet" placeholder="Sujet">
                            <textarea name="message" placeholder="Message"></textarea>
                            <button type="submit" class="site-btn">send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Contact section end-->