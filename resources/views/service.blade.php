<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Service Profile</title>
    <link rel="stylesheet" href="{{asset("bootstrap/css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="{{asset("fonts/font-awesome.min.css")}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
    <link rel="stylesheet" href="{{asset("css/styles.min.css")}}">
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
                        <a class="nav-link active text-light" href="{{url('/service')}}">Home</a>
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
                    <a class="nav-link active text-light" href="{{url('/service')}}">Home</a>
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

    <form class ="form-horizontal" role="form">

        <div class="container profile link">
         <h1 class="text-primary"><span class="glyphicon glyphicon-user"></span>Edit Profile</h1>
         <hr>

         <div class="form-group">
          <label class="col-lg-3 control-label">Company:</label>
          <div class="col-lg-8">
           <input class="form-control" type="text" value="Input your company">
          </div>
         </div>

         <div class="form-group">
           <label class="col-lg-3 control-label">Booking price:</label>
           <div class="col-lg-8">
             <input class="form-control" type="text" value="Price">
           </div>
         </div>

         <div class="form-group">
           <label class="col-lg-3 control-label">Location:</label>
           <div class="col-lg-8">
             <input class="form-control" type="text" value="Input your location">
           </div>
         </div>

         <div class="form-group">
           <label class="col-lg-3 control-label">Contact:</label>
           <div class="col-lg-8">
             <input class="form-control" type="text" value="Input your phone number">
           </div>
         </div>
       
         <div class="container">
           <label class="control-label">Services: </label>
          <form>
             <label class="col-lg-2 radio-inline">
               <div class="col-lg-24">
               <input type="radio" name="optradio"> Fotografer
           </div>
             </label>
             <label class="radio-inline">
               <input type="radio" name="optradio"> Videografer
             </label>
           </form>
         </div>


        <div class="form-group">
         <label class="col-lg-3 control-label">Email:</label>
         <div class="col-lg-8">
           <input class="form-control" type="text" value="Example@gmail.com">
         </div>
        </div>
      
       
        <div class="form-group">
           <label class="col-lg-3 control-label"> Description:</label>
           <div class="col-lg-8">
               <textarea rows = "5" cols = "50" name = "description"></textarea>
           </div>
        </div>
         
           <label class="col-lg-3 control-label">Upload Your ArtWork:</label><br>
           <div class="col-lg-8">
           <input type="file" name="name" multiple><br><br>
           <br>
           <a href="#myModal" class="btn btn-primary" data-toggle="modal" data-bs-hover-animate="pulse">Submit</a>
           <br>
           <br>
           </div>
   </form>

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
                <p class="text-center">Your profile has been updated.</p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success btn-block" data-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div> 
    
    <script src="{{asset("js/jquery.min.js")}}"></script>
    <script src="{{asset("bootstrap/js/bootstrap.min.js")}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
    <script src="{{asseT("js/script.min.js")}}"></script>
</body>

</html>