<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="155 characters of message matching text with a call to action goes here">
    <meta name="author" content="">
    <title>  {{$title}} </title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,400i,500,500i,600,600i,700|Source+Sans+Pro:300,400,400i,600,600i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('hospital/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('hospital/css/formValidation.min.css')}}">
    <link rel="stylesheet" href="{{asset('hospital/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('hospital/css/datepicker.min.css')}}">
    <link rel="stylesheet" href="{{asset('hospital/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('hospital/css/icofont.css')}}">
    <link rel="stylesheet" href="{{asset('hospital/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('hospital/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('hospital/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('hospital/css/main_style.css')}}">

    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('hospital/favicons/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('hospital/favicons/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('hospital/favicons/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('hospital/favicons/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('hospital/favicons/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('hospital/favicons/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('hospital/favicons/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('hospital/favicons/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('hospital/favicons/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('hospital/favicons/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('hospital/favicons/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('hospital/favicons/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('hospital/favicons/favicon-16x16.png')}}">
    <link rel="manifest" href="favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{asset('hospital/favicons/ms-icon-144x144.png')}}">
    <meta name="theme-color" content="#ffffff">
</head>
{{-- {{asset('hospital/')}} --}}
<body class="home-v2">
    <div class="loader">
    <div class="preview" style="background: rgba(255, 255,255,0.7) url('{{asset('hospital/images/oval.svg')}}') center center no-repeat; background-size:125px;"></div>
</div>
    
@include('includes.header2')

    

@yield('content')



<!-- Subscribe Form -->

<div class="container-fluid bg-green-color">
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="subscribe scrollme">
                    <div class="col-lg-6 col-lg-offset-5 col-md-6 col-md-offset-5 col-sm-12 col-xs-12">
                        <h4 class="subscribe-title">Email Newsletters!</h4>
                        <form class="subscribe-form" method="post" action="">
                            <input class="email input-standard-grey input-white" name="email" required="required" placeholder="Your Email Address" type="email">
                            <button class="subscr-btn">subscribe
                                <span class="semicircle--right"></span>
                            </button>
                        </form>
                        <div class="sub-title">Sign up for new Seosignt content, updates, surveys & offers.</div>

                    </div>

                    <div class="images-block">
                        <img src="{{asset('app/img/subscr-gear.png')}}" alt="gear" class="gear">
                        <img src="{{asset('app/img/subscr1.png')}}" alt="mail" class="mail">
                        <img src="{{asset('app/img/subscr-mailopen.png')}}" alt="mail" class="mail-2">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- End Subscribe Form -->
</div>



<!-- Footer -->

@include('includes.footer2')

<!-- End Footer -->

<!-- End Overlay Search -->

    <script src="{{asset('hospital/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('hospital/js/imagesloaded.pkgd.min.js')}}"></script>
<script type="text/javascript" src="{{asset('hospital/js/formValidation.min.js')}}"></script>
<script type="text/javascript" src="{{asset('hospital/js/wow.min.js')}}"></script>
<script type="text/javascript" src="{{asset('hospital/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('hospital/js/jquery.sticky.js')}}"></script>
<script type="text/javascript" src="{{asset('hospital/js/bootstrap-datepicker.min.js')}}"></script>
<script type="text/javascript" src="{{asset('hospital/js/premedi_custom.js')}}"></script>
<script type="text/javascript" src="{{asset('hospital/js/owl.carousel.min.js')}}"></script>
</body>
</html>