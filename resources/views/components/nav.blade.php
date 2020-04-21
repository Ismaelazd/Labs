<!-- Header section -->
<header class="header-section">
    <div class="logo">
        <img src="{{asset('storage/'.$homeElement->logo)}}" alt=""><!-- Logo -->
    </div>
    <!-- Navigation -->
    <div class="responsive"><i class="fa fa-bars"></i></div>
    <nav>
        <ul class="menu-list">
            <li class="{{Request::route()->getName()=='welcome.index'?'active':''}}"><a href="{{route('welcome.index')}}">Home</a></li>
            <li class="{{Request::route()->getName()=='servicePage.index'?'active':''}}"><a href="{{route('servicePage.index')}}">Services</a></li>
            <li class="{{Request::route()->getName()=='blogPage.index'?'active':''}}"><a href="{{route('blogPage.index')}}">Blog</a></li>
            <li class="{{Request::route()->getName()=='contactPage.index'?'active':''}}"><a href="{{route('contactPage.index')}}">Contact</a></li>
            @can('admin', App\User::class)
            <li><a href="{{url('/home')}}">Admin</a></li>
            @endcan
            @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
            @endif
            @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
            @endguest
        </ul>
    </nav>
</header>
<!-- Header section end -->
