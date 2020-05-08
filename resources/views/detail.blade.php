<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>LENS</title>
    <link rel="stylesheet" href="{{asset("bootstrap/css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="{{asset("fonts/font-awesome.min.css")}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
    <link rel="stylesheet" href="{{asset("css/styles.min.css")}}">
</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-md" id="app-navbar">
        <div class="container-fluid"><a class="navbar-brand" href="#"><i class="fa fa-camera-retro" id="brand-logo"></i></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <h1 class="text-light mr-auto">LENS</h1>
                <ul class="nav navbar-nav ml-auto">
                @guest
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active text-light" href="{{url('/')}}">Home</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link text-light" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item" role="presentation">
                            <a class="nav-link text-light" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                <li class="nav-item" role="presentation">
                    <a class="nav-link active text-light" href="{{url('/')}}">Home</a>
                </li>
                <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
    
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
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
        </div>
        </div>
    </nav>
    <div>
        <div class="row projects">
            <div class="col-sm-6 item">
                <div class="row">
                    <div class="col-md-12 col-lg-5"><a href="#"></a></div>
                    <div class="col" style="width: 100px;">
                        <div></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 item">
                <div class="row">
                    <div class="col-md-12 col-lg-5"><a href="#"></a></div>
                    <div class="col" style="width: 100px;">
                        <div></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 item">
                <div class="row">
                    <div class="col-md-12 col-lg-5"><a href="#"></a></div>
                </div>
            </div>
            <div class="col-sm-6 item">
                <div class="row">
                    <div class="col-md-12 col-lg-5"><a href="#"></a></div>
                    <div class="col" style="width: 100px;">
                        <div></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 item">
                <div class="row">
                    <div class="col-md-12 col-lg-5"><a href="#"></a></div>
                </div>
            </div>
            <div class="col-sm-6 item">
                <div class="row">
                    <div class="col-md-12 col-lg-5"><a href="#"></a></div>
                </div>
            </div>
            <div class="col-sm-6 item">
                <div class="row">
                    <div class="col-md-12 col-lg-5"><a href="#"></a></div>
                </div>
            </div>
            <div class="col-sm-6 item">
                <div class="row">
                    <div class="col-md-12 col-lg-5"><a href="#"></a></div>
                </div>
            </div>
        </div>
        <div class="container border rounded" style="width: 676px;height: 550px;margin-top: 100px;margin-bottom: 0;background-color: rgba(205,205,205,0.38);padding-top: 15px;">
            <div class="row" style="height: 232px;">
                <div class="col">
                    <h1 style="color: #000000;">Photografer A</h1>
                    <p style="color: #000000;"><br>Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida.<br><br></p>
                </div>
                <div class="col"><img src="{{asset("images/building.jpg")}}" style="width: 301px;"></div>
            </div>
            <p></p>
            <p style="color: #000000;">VISION LENS</p>
            <p style="color: #000000;">JAKARTA, INDONESIA</p>
            <p style="color: #000000;">Rp. 500.000 - Rp. 5.000.000</p>
            <p style="color: #000000;">Night Fotography, Silluet, Makro, Interrior</p>
            <p style="color: #000000;">Rating</p>
            <nav class="navbar navbar-light navbar-expand-md">
                <div class="container-fluid">
                    <button class="btn btn-primary" type="button" onclick="location.href = '{{ url('/service/detail/booking') }}';">Booking</button>
                </div>
            </nav>
        </div>
    </div>
    <div class="photo-gallery">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Portfolio</h2>
            </div>
            <div class="row photos">
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a data-lightbox="photos" href="{{asset("images/desk.jpg")}}"><img class="img-fluid" src="{{asset("images/desk.jpg")}}"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a data-lightbox="photos" href="{{asset("images/building.jpg")}}"><img class="img-fluid" src="{{asset("images/building.jpg")}}"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a data-lightbox="photos" href="{{asset("images/loft.jpg")}}"><img class="img-fluid" src="{{asset("images/loft.jpg")}}"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a data-lightbox="photos" href="{{asset("images/desk.jpg")}}"><img class="img-fluid" src="{{asset("images/desk.jpg")}}"></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a data-lightbox="photos" href="{{asset("images/building.jpg")}}"><img class="img-fluid" src="{{asset("images/building.jpg")}}"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a data-lightbox="photos" href="{{asset("images/loft.jpg")}}"><img class="img-fluid" src="{{asset("images/loft.jpg")}}"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a data-lightbox="photos" href="{{asset("images/desk.jpg")}}"><img class="img-fluid" src="{{asset("images/desk.jpg")}}"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a data-lightbox="photos" href="{{asset("images/building.jpg")}}"><img class="img-fluid" src="{{asset("images/building.jpg")}}"></div>
            </div>
            <div class="row photos">
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a data-lightbox="photos" href="{{asset("images/desk.jpg")}}"></a><img class="img-fluid" src="{{asset("images/loft.jpg")}}"></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a data-lightbox="photos" href="{{asset("images/building.jpg")}}"><img class="img-fluid" src="{{asset("images/building.jpg")}}"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a data-lightbox="photos" href="{{asset("images/loft.jpg")}}"><img class="img-fluid" src="{{asset("images/loft.jpg")}}"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a data-lightbox="photos" href="{{asset("images/building.jpg")}}"></a><img class="img-fluid" src="{{asset("images/desk.jpg")}}"></div>
            </div>
        </div>
    </div>
    <main class="page landing-page"></main>
    <div class="simple-slider">
        <div class="swiper-container">
            <div class="swiper-wrapper"></div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
    <div class="projects-horizontal"></div>
    <footer class="page-footer dark">
        <div class="footer-copyright" style="margin-top: 0;">
            <p>© 2020 Copyright LENS</p>
        </div>
    </footer>
    <script src="{{asset("js/jquery.min.js")}}"></script>
    <script src="{{asset("bootstrap/js/bootstrap.min.js")}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
    <script src="{{asseT("js/script.min.js")}}"></script>
</body>

</html>