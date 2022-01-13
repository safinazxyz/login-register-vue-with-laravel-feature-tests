<!-- Topbar -->
<nav class="topbar topbar-inverse topbar-expand-md topbar-sticky">
    <div class="container">

        <div class="topbar-left">
            <button class="topbar-toggler">&#9776;</button>
            <a class="topbar-brand" href="/">
                <img class="logo-default" src="{{ asset('theme/assets/img/logo.png') }}" alt="logo">
                <img class="logo-inverse" src="{{ asset('theme/assets/img/logo-light.png') }}" alt="logo">
            </a>
        </div>


        <div class="topbar-right">
            <ul class="topbar-nav nav">
                <li class="nav-item"><a class="nav-link" href="">Home</a></li>
                @if(auth()->check())
                    <li class="nav-item"><a class="nav-link" href="">{{ auth()->user()->name }}</a></li>
                @else
                <li class="nav-item"><a class="nav-link" href="javascript:;" data-toggle="modal"
                    data-target="#LoginModal">Login</a></li>
                    @endif
            </ul>
        </div>

    </div>
</nav>
<!-- END Topbar -->

<!-- Header -->
<header class="header fadeout header-inverse pb-0 h-fullscreen" style="background-image: linear-gradient(to bottom, #372b49 0%, #517fa4 100%);">
    <canvas class="constellation"></canvas>
    <div class="meteors">
        <div class="meteor"></div>
        <div class="meteor"></div>
        <div class="meteor"></div>
        <div class="meteor"></div>
        <div class="meteor"></div>
        <div class="meteor"></div>
        <div class="meteor"></div>
        <div class="meteor"></div>
        <div class="meteor"></div>
        <div class="meteor"></div>
        <div class="meteor"></div>
    </div>
{{--    <div class="stars">--}}
{{--        <div class="star"></div>--}}
{{--        <div class="star"></div>--}}
{{--        <div class="star"></div>--}}
{{--        <div class="star"></div>--}}
{{--        <div class="star"></div>--}}
{{--        <div class="star"></div>--}}
{{--        <div class="star"></div>--}}
{{--        <div class="star"></div>--}}
{{--        <div class="star"></div>--}}
{{--        <div class="star"></div>--}}
{{--        <div class="star"></div>--}}
{{--        <div class="star"></div>--}}
{{--        <div class="star"></div>--}}
{{--        <div class="star"></div>--}}
{{--        <div class="star"></div>--}}
{{--        <div class="star"></div>--}}
{{--        <div class="star"></div>--}}
{{--        <div class="star"></div>--}}
{{--        <div class="star"></div>--}}
{{--        <div class="star"></div>--}}
{{--    </div>--}}

    <div class="container">
        <div class="row h-full">
            <div class="col-12 text-center align-self-center">
                <h1 class="fs-50 fw-600 lh-15 hidden-sm-down">Built for <span class="text-primary" data-type="Authors, Startups, Entrepreneurs, SaaS, WebApps"></span></h1>
                <h1 class="fs-35 fw-600 lh-15 hidden-md-up">Built for<br><span class="text-primary" data-type="Authors, Startups, Entrepreneurs, SaaS, WebApps"></span></h1>
                <br>
                <p class="fs-20 hidden-sm-down"><strong>TheSaaS</strong> is an elegant, modern and fully customizable SaaS and WebApp template</p>
                <p class="fs-16 hidden-md-up"><strong>TheSaaS</strong> is an elegant, modern and fully customizable SaaS and WebApp template</p>
                <br>
                <hr class="w-60 hidden-sm-down">
                <br>
                <a class="btn btn-xl btn-round btn-primary fs-20 fw-500 w-350 shadow-3 hidden-sm-down" href="#">Purchase Now - $19</a>
                <a class="btn btn-lg btn-round btn-primary w-250 shadow-3 hidden-md-up" href="#">Purchase Now - $19</a>
                <br>
                <p class="mt-2 mt-md-4"><a href="#"><small>or purchase an Extended License</small></a></p>
            </div>

            <div class="col-12 align-self-end text-center pb-70">
                <a class="scroll-down-2 scroll-down-inverse" href="#" data-scrollto="section-demo"><span></span></a>
            </div>
        </div>
    </div>
</header>
<!-- END Header -->
