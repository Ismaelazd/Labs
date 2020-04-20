<!-- Page header -->
<div class="page-top-section">
    <div class="overlay"></div>
    <div class="container text-right">
        <div class="page-info">
            <h2>
                {{Request::route()->getName()=='blogPage.index'?'Blog':''}}
                {{Request::route()->getName()=='servicePage.index'?'Services':''}}
                {{Request::route()->getName()=='contactPage.index'?'Contact':''}}
                {{-- {{ucfirst(Request::route()->getName())}} --}}
            </h2>
            <div class="page-links">
                <a href="#">Home</a>
                <span>
                    {{Request::route()->getName()=='servicePage.index'?'Services':''}}
                    {{Request::route()->getName()=='blogPage.index'?'Blog':''}}
                    {{Request::route()->getName()=='contactPage.index'?'Contact':''}}
                </span>
            </div>
        </div>
    </div>
</div>
<!-- Page header end-->
