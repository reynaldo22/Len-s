<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>LENS</title>
    <link rel="stylesheet" href="{{asset("bootstrap/css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="{{asset("fonts/font-awesome.min.css")}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
    <link rel="stylesheet" href="{{asset("css/booking.min.css")}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .modal-confirm {		
	color: #636363;
	width: 325px;
}
.modal-confirm .modal-content {
	padding: 20px;
	border-radius: 5px;
	border: none;
}
.modal-confirm .modal-header {
	border-bottom: none;   
	position: relative;
}
.modal-confirm h4 {
	text-align: center;
	font-size: 26px;
    margin-left: 70px;
    margin-top: 20px;
    margin-bottom: -20px;
}
.modal-confirm .form-control, .modal-confirm .btn {
	min-height: 40px;
	border-radius: 3px; 
}
.modal-confirm .close {
	position: absolute;
	top: -5px;
	right: -5px;
}	
.modal-confirm .modal-footer {
	border: none;
	text-align: center;
	border-radius: 5px;
	font-size: 13px;
}	
.modal-confirm .icon-box {
	color: #fff;		
	position: absolute;
	margin: 0 auto;
	left: 0;
	right: 0;
	top: -70px;
	width: 95px;
	height: 95px;
	border-radius: 50%;
	z-index: 9;
	background: #82ce34;
	padding: 15px;
	text-align: center;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
}
.modal-confirm .icon-box i {
	font-size: 58px;
	position: relative;
	top: 3px;
}
.modal-confirm.modal-dialog {
	margin-top: 80px;
}
.modal-confirm .btn {
	color: #fff;
	border-radius: 4px;
	background: #82ce34;
	text-decoration: none;
	transition: all 0.4s;
	line-height: normal;
	border: none;
}
.modal-confirm .btn:hover, .modal-confirm .btn:focus {
	background: #6fb32b;
	outline: none;
}
    </style>
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
        <div class="container border rounded-0 border-secondary shadow-sm" style="width: 676px;height: 900px;margin-top: 100px;margin-bottom: 0;background-color: rgba(205,205,205,0.38);padding-top: 15px;">
            <div class="row" style="height: 232px;">
                <div class="col">
                    <h1 style="color: #000000;">Photografer A</h1>
                    <p style="color: #000000;"><br>Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida.<br><br></p>
                </div>
                <div class="col"><img src="{{asset("images/building.jpg")}}" style="width: 301px;"></div>
            </div>
            <p></p>
            <div class="row" style="height: 230px;">
                <div class="col">
                    <p style="color: #000000;">VISION LENS</p>
                    <p style="color: #000000;">JAKARTA, INDONESIA</p>
                    <p style="color: #000000;">Rp. 500.000 - Rp. 5.000.000</p>
                    <p style="color: #000000;">Night Fotography, Silluet, Makro, Interrior</p>
                    <p style="color: #000000;">Rating</p>
                </div>
            </div>
            <div class="row text-monospace" style="height: 190px;">
                <div class="col text-left">
                    <p style="color: #000000;">Service :</p>
                    <div class="form-check border rounded">
                        <input class="form-check-input" type="radio" name="service" id="rad1">
                        <label class="form-check-label text-monospace text-truncate" data-bs-hover-animate="pulse" for="rad1">Photoshoot (Rp. 2.000.000)</label>
                    </div>
                    <div class="form-check border rounded">
                        <input class="form-check-input" type="radio" name="service" id="rad2">
                        <label class="form-check-label text-monospace text-truncate border rounded-0" data-bs-hover-animate="pulse" for="rad2">Editing (Rp. 500.000)</label>
                    </div>
                    <div class="form-check border rounded">
                        <input class="form-check-input" type="radio" name="service" id="rad3">
                        <label class="form-check-label text-monospace text-truncate" data-bs-hover-animate="pulse" for="rad3">Photoshoot + Property (Rp. 3.000.000)</label>
                    </div>
                    <div class="form-check border rounded">
                        <input class="form-check-input" type="radio" name="service" id="rad4">
                        <label class="form-check-label text-monospace text-truncate" data-bs-hover-animate="pulse" for="rad4">Photoshoot + Editing + Property (Rp. 4.000.000)</label>
                    </div>
                </div>
            </div>
            <div class="row text-monospace text-justify" style="height: 150px;">
                <div class="col">
                    <p style="color: #000000;">Payment Method :</p>
                    <div class="custom-control text-truncate border rounded custom-radio d-md-flex justify-content-md-start">
                        <input class="custom-control-input" type="radio" name="payment" id="rad5">
                        <label class="custom-control-label text-monospace" data-bs-hover-animate="pulse" for="rad5">Cash</label>
                    </div>
                    <div class="custom-control border rounded custom-radio">
                        <input class="custom-control-input" type="radio" name="payment" id="rad6">
                        <label class="custom-control-label text-monospace" data-bs-hover-animate="pulse" for="rad6">Credit</label>
                    </div>
                    <div class="custom-control border rounded custom-radio">
                        <input class="custom-control-input" type="radio" name="payment" id="rad7">
                        <label class="custom-control-label text-monospace" data-bs-hover-animate="pulse" for="rad7">Transfer M-Banking</label>
                    </div>
                </div>
            </div>
            {{-- <button class="btn btn-primary" onclick="location.href='#myModal';" data-toggle="modal" data-bs-hover-animate="pulse" type="button">Payment</button> --}}
            <a href="#myModal" class="btn btn-primary" data-toggle="modal" data-bs-hover-animate="pulse">Payment</a>
            <!-- Modal HTML -->
            <div id="myModal" class="modal fade">
                <div class="modal-dialog modal-confirm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="icon-box">
                                <i class="material-icons">&#xE876;</i>
                            </div>				
                            <h4 class="modal-title">Success!</h4>	
                        </div>
                        <div class="modal-body">
                            <p class="text-center">Your booking has been confirmed.</p>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-success btn-block" data-dismiss="modal">OK</button>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </div>
    <div class="photo-gallery">
        <div class="container">
            <div class="intro"></div>
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
    <div class="features-boxed"></div>
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
    <script src="{{asset("js/script.min.js")}}"></script>
</body>

</html>