<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>LENS</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="{{ asset('fonts/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/gradient-navbar-1.css') }}">
    <link rel="stylesheet" href="{{ asset('css/gradient-navbar.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
    <link rel="stylesheet" href="{{ asset('css/Projects-Horizontal.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Simple-Slider.css') }}">
    <link rel="stylesheet" href="{{ asset('css/smoothproducts.css') }}">
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
    <main class="page landing-page">
        <section class="clean-block clean-hero" style="background-image:url({{ asset('images/tech/image4.jpg')}});color:rgba(9, 162, 255, 0.85);">
            <div class="text">
                <h2>LENS</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
                <a href="#featured" class="btn btn-outline-light active btn-lg">Cari Fotografer / Videografer</a></div>
        </section>
    </main>
    <h1 id="featured" class="text-center" style="margin-bottom: 20px;margin-top: 20px;">FEATURED</h1>
    <div class="simple-slider">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="float-none swiper-slide" style="background-image: url({{ asset('images/scenery/image1.jpg')}});">
                    <div class="container border rounded" style="width: 676px;height: 303px;margin-top: 100px;margin-bottom: 0;background-color: rgba(205,205,205,0.38);padding-top: 15px;">
                        <div class="row" style="height: 232px;">
                            <div class="col"><img src="{{ asset('images/building.jpg')}}" style="width: 301px;"></div>
                            <div class="col">
                                <h1>Photografer A</h1>
                                <p><br>Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida.<br><br></p>
                                <p>Rating</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col"><button class="btn btn-dark" type="button" style="width: 282px;">See More</button></div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide" style="background-image: url({{ asset('images/scenery/image5.jpg')}});">
                    <div class="container border rounded" style="width: 676px;height: 303px;margin-top: 100px;margin-bottom: 0;background-color: rgba(205,205,205,0.38);padding-top: 15px;">
                        <div class="row" style="height: 232px;">
                            <div class="col"><img src="{{ asset('images/desk.jpg')}}" style="width: 300px;"></div>
                            <div class="col">
                                <h1>Photografer B</h1>
                                <p><br>Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida.<br><br></p>
                                <p>Rating</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col"><button class="btn btn-dark" type="button" style="width: 282px;">See More</button></div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide" style="background-image: url({{ asset('images/scenery/image4.jpg')}});">
                    <div class="container border rounded" style="width: 676px;height: 303px;margin-top: 100px;margin-bottom: 0;background-color: rgba(205,205,205,0.38);padding-top: 15px;">
                        <div class="row" style="height: 232px;">
                            <div class="col"><img src="{{ asset('images/loft.jpg')}}" style="width: 300px;"></div>
                            <div class="col">
                                <h1>Videografer C</h1>
                                <p><br>Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida.<br><br></p>
                                <p>Rating</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col"><button class="btn btn-dark" type="button" style="width: 282px;">See More</button></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
    <div class="projects-horizontal">
        <div class="container">
            <div class="intro">
                <div class="btn-group btn-group-toggle" data-toggle="buttons" style="width: 400px;height: 40px;margin-left: 40px;margin-top: 40px;margin-bottom: 40px;">
                    <label id="btnPhotografer" class="btn btn-secondary active">Fotografer</label>
                    <label id="btnVideografer" class="btn btn-secondary">Videografer</label>
                </div>
                <p class="text-center">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae. </p>
            </div>
            {{-- Photographer --}}
            <div id="photographer" class="row projects">
                <div class="col-sm-6 item">
                    <div class="row">
                        <div class="col-md-12 col-lg-5"><a href="#"><img class="img-fluid" src="{{asset('images/desk.jpg')}}"></a></div>
                        <div class="col" style="width: 100px;">
                            <h3 class="name">Fotografer A</h3>
                            <p class="description" style="margin-bottom: 10px;">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida.</p>
                            <div>
                                <p class="float-left" style="width: 100px;">Rating</p><button onclick="location.href = '{{ url('/service/detail') }}';" class="btn btn-dark float-right" type="button">See More</button></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 item">
                    <div class="row">
                        <div class="col-md-12 col-lg-5"><a href="#"><img class="img-fluid" src="{{asset('images/desk.jpg')}}"></a></div>
                        <div class="col" style="width: 100px;">
                            <h3 class="name">Fotografer A</h3>
                            <p class="description" style="margin-bottom: 10px;">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida.</p>
                            <div>
                                <p class="float-left" style="width: 100px;">Rating</p><button class="btn btn-dark float-right" type="button">See More</button></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 item">
                    <div class="row">
                        <div class="col-md-12 col-lg-5"><a href="#"><img class="img-fluid" src="{{asset('images/desk.jpg')}}"></a></div>
                        <div class="col" style="width: 100px;">
                            <h3 class="name">Fotografer A</h3>
                            <p class="description" style="margin-bottom: 10px;">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida.</p>
                            <div>
                                <p class="float-left" style="width: 100px;">Rating</p><button class="btn btn-dark float-right" type="button">See More</button></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 item">
                    <div class="row">
                        <div class="col-md-12 col-lg-5"><a href="#"><img class="img-fluid" src="{{asset('images/desk.jpg')}}"></a></div>
                        <div class="col" style="width: 100px;">
                            <h3 class="name">Fotografer A</h3>
                            <p class="description" style="margin-bottom: 10px;">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida.</p>
                            <div>
                                <p class="float-left" style="width: 100px;">Rating</p><button class="btn btn-dark float-right" type="button">See More</button></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 item">
                    <div class="row">
                        <div class="col-md-12 col-lg-5"><a href="#"><img class="img-fluid" src="{{asset('images/desk.jpg')}}"></a></div>
                        <div class="col" style="width: 100px;">
                            <h3 class="name">Fotografer A</h3>
                            <p class="description" style="margin-bottom: 10px;">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida.</p>
                            <div>
                                <p class="float-left" style="width: 100px;">Rating</p><button class="btn btn-dark float-right" type="button">See More</button></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 item">
                    <div class="row">
                        <div class="col-md-12 col-lg-5"><a href="#"><img class="img-fluid" src="{{asset('images/desk.jpg')}}"></a></div>
                        <div class="col" style="width: 100px;">
                            <h3 class="name">Fotografer A</h3>
                            <p class="description" style="margin-bottom: 10px;">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida.</p>
                            <div>
                                <p class="float-left" style="width: 100px;">Rating</p><button class="btn btn-dark float-right" type="button">See More</button></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 item">
                    <div class="row">
                        <div class="col-md-12 col-lg-5"><a href="#"><img class="img-fluid" src="{{asset('images/desk.jpg')}}"></a></div>
                        <div class="col" style="width: 100px;">
                            <h3 class="name">Fotografer A</h3>
                            <p class="description" style="margin-bottom: 10px;">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida.</p>
                            <div>
                                <p class="float-left" style="width: 100px;">Rating</p><button class="btn btn-dark float-right" type="button">See More</button></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 item">
                    <div class="row">
                        <div class="col-md-12 col-lg-5"><a href="#"><img class="img-fluid" src="{{asset('images/desk.jpg')}}"></a></div>
                        <div class="col" style="width: 100px;">
                            <h3 class="name">Fotografer A</h3>
                            <p class="description" style="margin-bottom: 10px;">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida.</p>
                            <div>
                                <p class="float-left" style="width: 100px;">Rating</p><button class="btn btn-dark float-right" type="button">See More</button></div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Videographer --}}
            <div id="videographer" class="row projects" style="display:none;">
                <div class="col-sm-6 item">
                    <div class="row">
                        <div class="col-md-12 col-lg-5"><a href="#"><img class="img-fluid" src="{{asset('images/desk.jpg')}}"></a></div>
                        <div class="col" style="width: 100px;">
                            <h3 class="name">Videographer A</h3>
                            <p class="description" style="margin-bottom: 10px;">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida.</p>
                            <div>
                                <p class="float-left" style="width: 100px;">Rating</p><button onclick="location.href = '{{ url('/service/detail') }}';" class="btn btn-dark float-right" type="button">See More</button></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 item">
                    <div class="row">
                        <div class="col-md-12 col-lg-5"><a href="#"><img class="img-fluid" src="{{asset('images/desk.jpg')}}"></a></div>
                        <div class="col" style="width: 100px;">
                            <h3 class="name">Videographer A</h3>
                            <p class="description" style="margin-bottom: 10px;">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida.</p>
                            <div>
                                <p class="float-left" style="width: 100px;">Rating</p><button class="btn btn-dark float-right" type="button">See More</button></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 item">
                    <div class="row">
                        <div class="col-md-12 col-lg-5"><a href="#"><img class="img-fluid" src="{{asset('images/desk.jpg')}}"></a></div>
                        <div class="col" style="width: 100px;">
                            <h3 class="name">Videographer A</h3>
                            <p class="description" style="margin-bottom: 10px;">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida.</p>
                            <div>
                                <p class="float-left" style="width: 100px;">Rating</p><button class="btn btn-dark float-right" type="button">See More</button></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 item">
                    <div class="row">
                        <div class="col-md-12 col-lg-5"><a href="#"><img class="img-fluid" src="{{asset('images/desk.jpg')}}"></a></div>
                        <div class="col" style="width: 100px;">
                            <h3 class="name">Videographer A</h3>
                            <p class="description" style="margin-bottom: 10px;">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida.</p>
                            <div>
                                <p class="float-left" style="width: 100px;">Rating</p><button class="btn btn-dark float-right" type="button">See More</button></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 item">
                    <div class="row">
                        <div class="col-md-12 col-lg-5"><a href="#"><img class="img-fluid" src="{{asset('images/desk.jpg')}}"></a></div>
                        <div class="col" style="width: 100px;">
                            <h3 class="name">Videographer A</h3>
                            <p class="description" style="margin-bottom: 10px;">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida.</p>
                            <div>
                                <p class="float-left" style="width: 100px;">Rating</p><button class="btn btn-dark float-right" type="button">See More</button></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 item">
                    <div class="row">
                        <div class="col-md-12 col-lg-5"><a href="#"><img class="img-fluid" src="{{asset('images/desk.jpg')}}"></a></div>
                        <div class="col" style="width: 100px;">
                            <h3 class="name">Videographer A</h3>
                            <p class="description" style="margin-bottom: 10px;">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida.</p>
                            <div>
                                <p class="float-left" style="width: 100px;">Rating</p><button class="btn btn-dark float-right" type="button">See More</button></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 item">
                    <div class="row">
                        <div class="col-md-12 col-lg-5"><a href="#"><img class="img-fluid" src="{{asset('images/desk.jpg')}}"></a></div>
                        <div class="col" style="width: 100px;">
                            <h3 class="name">Videographer A</h3>
                            <p class="description" style="margin-bottom: 10px;">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida.</p>
                            <div>
                                <p class="float-left" style="width: 100px;">Rating</p><button class="btn btn-dark float-right" type="button">See More</button></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 item">
                    <div class="row">
                        <div class="col-md-12 col-lg-5"><a href="#"><img class="img-fluid" src="{{asset('images/desk.jpg')}}"></a></div>
                        <div class="col" style="width: 100px;">
                            <h3 class="name">Videographer A</h3>
                            <p class="description" style="margin-bottom: 10px;">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida.</p>
                            <div>
                                <p class="float-left" style="width: 100px;">Rating</p><button class="btn btn-dark float-right" type="button">See More</button></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="page-footer dark">
        <div class="footer-copyright" style="margin-top: 0;">
            <p>© 2020 Copyright LENS</p>
        </div>
    </footer>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="{{ asset('js/smoothproducts.min.js') }}"></script>
    <script src="{{ asset('js/theme.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
    <script src="{{ asset('js/Simple-Slider.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#btnPhotografer").click(function(){
                $("#videographer").hide(1000);
                $("#photographer").show(1000);
            });
            $("#btnVideografer").click(function(){
                $("#photographer").hide(1000);
                $("#videographer").show();
            });

            // Select all links with hashes
            $('a[href*="#"]')
            // Remove links that don't actually link to anything
            .not('[href="#"]')
            .not('[href="#0"]')
            .click(function(event) {
                // On-page links
                if (
                location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
                && 
                location.hostname == this.hostname
                ) {
                // Figure out element to scroll to
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                // Does a scroll target exist?
                if (target.length) {
                    // Only prevent default if animation is actually gonna happen
                    event.preventDefault();
                    $('html, body').animate({
                    scrollTop: target.offset().top
                    }, 1000, function() {
                    // Callback after animation
                    // Must change focus!
                    var $target = $(target);
                    $target.focus();
                    if ($target.is(":focus")) { // Checking if the target was focused
                        return false;
                    } else {
                        $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                        $target.focus(); // Set focus again
                    };
                    });
                }
                }
            });
        });
    </script>
</body>

</html>