<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/all.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}" />
    <title>@yield('title')</title>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-light bg-success bg-opacity-25 border-bottom shadow-lg sticky-top">
        <div class="container">
            <a href="" class="navbar-brand fw-bolder ">{->SHOFI<-}</a>
            <ul class="navbar-nav">
                <li><a href="{{ route('home') }}" class="nav-link fw-bold ">Home</a></li>
                <li><a href="" class="nav-link fw-bold ">All Course</a></li>
                <li><a href="{{ route('user-login') }}" class="nav-link fw-bold ">Login</a></li>
                <li><a href="{{ route('user-register') }}" class="nav-link fw-bold ">Registration</a></li>
            </ul>
        </div>
    </nav>
    @yield('body')

    <footer class="pt-5 pb-4 bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="card card-body">
                        <h3>About Us</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Aspernatur at cumque est harum hic impedit in inventore.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Aspernatur at cumque est harum hic impedit in inventore.
                        </p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card card-body">
                        <h3>Popular Links</h3>
                        <hr/>
                        <ul>
                            <li><a href="">Popular Course one</a></li>
                            <li><a href="">Popular Course two</a></li>
                            <li><a href="">Popular Course three</a></li>
                            <li><a href="">Popular Course four</a></li>
                            <li><a href="">Popular Course four</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card card-body rounded-0">
                        <h3>Follow Us On</h3>
                        <hr/>
                        <ul class="nav">
                            <li><a href="" class="nav-link" ><i class="fab fa-2x fa-facebook-square"></i></a></li>
                            <li><a href="" class="nav-link"><i class="fab fa-2x fa-twitter-square"></i></a></li>
                            <li><a href="" class="nav-link"><i class="fab fa-2x fa-instagram-square"></i></a></li>
                            <li><a href="" class="nav-link"><i class="fab fa-2x fa-youtube-square"></i></a></li>
                            <li><a href="" class="nav-link"><i class="fab fa-2x fa-github-square"></i></a></li>
                            <li><a href="" class="nav-link"><i class="fab fa-2x fa-discord"></i></a></li>
                            <li><a href="" class="nav-link"><i class="fab fa-2x fa-twitch"></i></a></li>
                            <li><a href="" class="nav-link"><i class="fab fa-2x fa-telegram"></i></a></li>
                            <li><a href="" class="nav-link"><i class="fab fa-2x fa-viber"></i></a></li>
                            <li><a href="" class="nav-link"><i class="fab fa-2x fa-telegram-plane"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="bg-white mt-5"/>
            <div class="row">
                <div class="col-12">
                    <p class="text-white text-center mb-0">Copyright@2022|All rights reserved by PWLFB-3</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="{{ asset('/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.js') }}"></script>
</body>
</html>
