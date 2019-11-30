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
<!--Header start-->
@include('includes.header')
<!--Header end-->
 {{-- {{dd($first_depService)}} --}}
    <div class="content">
        <section id="sub-page-banner" class="sub-page-banner" {{-- style="background-image: url({{asset($slider->featured_banner)}}); background-size: 100% auto; background-repeat: no-repeat;" --}}>
            <div class="layer">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="subpage-banner-text">
                                 <h4 class="subpage-head">OUR SERVICES</h4>
                                <h5><a href="{{route('index')}}">HOME</a> <i class="icofont icofont-double-right"></i> <a href="{{route('service')}}">SERVICES</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--banner ends -->
        <main class="main">
             
        <!-- our Services starts -->
    

    <section id="our-services" class="our-services">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                    <div class="top-text">
                        <h2>
                            WHAT WE DO                        </h2>
                        <p>lorem ipsum dolor sit amet consectetur adipiscing elit</p>
                        <div class="divider">
                            <span><i class="icofont icofont-bed-patient"></i></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($services as $service)
                <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                    <div class="services-box text-center">
                        {!! $service->icon !!}
                        {{-- <i class="icofont icofont-heartbeat"></i> --}}
                        <h4>
                            {{$service->title}}                           
                        </h4>
                        <p>
                            {!! $service->description !!}                            
                        </p>
                    </div>
                </div>
                @endforeach
                {{-- <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                    <div class="services-box text-center">
                        <i class="icofont icofont-tooth"></i>
                        <h4>
                            Dental Care                          
                        </h4>
                        <p>
                            HealthCheck also provides FREE dental services to children up to age21                            
                        </p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                    <div class="services-box text-center">
                        <i class="icofont icofont-icu"></i>
                        <h4>
                            Emergency Services                            
                        </h4>
                        <p>
                            Emergency medical services, also known as ambulance services or paramedic services                            
                        </p>
                    </div>
                </div>             
                <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                    <div class="services-box text-center">
                        <i class="icofont icofont-dna-alt-1"></i>
                        <h4>
                            DNA Testing                            
                        </h4>
                        <p>
                            DNA paternity testing is the use of DNA to determine two individuals are biologically                            
                        </p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                    <div class="services-box text-center">
                        <i class="icofont icofont-blood"></i>
                        <h4>
                            Blood Testing                           
                             </h4>
                        <p>
                            A blood test is a laboratory analysis is usually extracted from a vein                            
                        </p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                    <div class="services-box text-center">
                        <i class="icofont icofont-ambulance"></i>
                        <h4>
                            24/7 Support                            
                        </h4>
                        <p>
                            Free 24/7 support for patients in emergency time addition to free checkups every six months                            
                        </p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                    <div class="services-box text-center">
                        <i class="icofont icofont-bed-patient"></i>
                        <h4>
                            General Treatment                            
                        </h4>
                        <p>
                            General Treatment Guidelines are systematically developed  statemets that assist prescriber                            
                        </p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                    <div class="services-box text-center">
                        <i class="icofont icofont-prescription"></i>
                        <h4>
                            Free Checkup                            
                        </h4>
                        <p>
                            Protect your child by having them get a complete physical at the ages                           
                         </p>
                    </div>
                </div>    --}}
            </div>
        </div>
    </section>
    <!-- our Services ends -->
        </main>
    </div>    
<!-- Footer start-->

@include('includes.footer')

<!--Footer End  -->
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