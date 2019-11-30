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
                                <h4 class="subpage-head">OUR DEPARTMENT</h4>
                                <h5><a href="{{route('index')}}">HOME</a> <i class="icofont icofont-double-right"></i> <a href="{{route('department')}}">DEPARTMENT</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--banner ends -->
        <main class="main">
             
    <!-- our department starts -->
         <section id="our-department" class="our-department">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                        <div class="top-text">
                            <h2>OUR DEPARTMENT</h2>
                            <p>
                                lorem ipsum dolor sit amet consectetur adipiscing elit                    </p>
                            <div class="divider">
                                <span><i class="icofont icofont-bed-patient"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="">
                        <ul id="tabnav" class="nav nav-pills nav-stacked col-md-12 horizantal-tab" >
                            @foreach($depServices as $deps)
                            <li  class="">
                                <a  href="#{{strtoupper($deps->title)}}"  data-toggle="tab" ><i class='icofont icofont-pulse' ></i> {{$deps->title}}</a>
                            </li>
                            @endforeach
                            {{-- <li  class="">
                                <a  href="#NEUROLOGY"  data-toggle="tab" ><i class='icofont icofont-dna-alt-1' ></i> Neurology</a>
                            </li>
                            <li  class="">
                                <a  href="#DIAGNOSTICS"  data-toggle="tab" ><i class='icofont icofont-test-bottle' ></i> Diagnostics</a>
                            </li>
                            <li  class="">
                                <a  href="#DENTAL"  data-toggle="tab" ><i class='icofont icofont-tooth' ></i> Detal</a>
                            </li>
                            <li  class="">
                                <a  href="#EYECARE"  data-toggle="tab" ><i class='icofont icofont-eye-alt' ></i> Eye Care</a>
                            </li>
                            <li  class="">
                                <a  href="#EMERGENCY"  data-toggle="tab" ><i class='icofont icofont-ambulance' ></i> Emergency</a>
                            </li> --}}
                        </ul>

                        <div class="tab-content tab-content col-md-12">
                            <div class="tab-pane active" id="{{strtoupper($first_depService->title)}}">    
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="tab-text-part">
                                            <p class="department-para">
                                                {!! $first_depService->content !!} 
                                            </p>
                                            <a href="contact.html" class="btn btn-default">Contact Us</a>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="tab-image">
                                            <img src="{{$first_depService->featured}}" alt="{{$first_depService->title}}" class="img-responsive" />            </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane " id="{{strtoupper($second_depService->title)}}">    
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="tab-text-part">
                                            <p class="department-para">
                                                {!! $second_depService->content !!} </p>
                                            <a href="contact.html" class="btn btn-default">Contact Us</a>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="tab-image">
                                            <img src="{{$second_depService->featured}}" alt="{{$second_depService->title}}" class="img-responsive" />            </div>
                                    </div>
                                 </div>
                            </div>
                            <div class="tab-pane " id="{{strtoupper($third_depService->title)}}">    
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="tab-text-part">
                                            <p class="department-para">
                                                {!! $third_depService->content !!} </p>
                                            <a href="contact.html" class="btn btn-default">Contact Us</a>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="tab-image">
                                            <img src="{{$third_depService->featured}}" alt="{{$third_depService->title}}" class="img-responsive" />            </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane " id="{{strtoupper($forth_depService->title)}}">   
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="tab-text-part">
                                            <p class="department-para">
                                                {!! $forth_depService->content !!}  </p>
                                            <a href="contact.html" class="btn btn-default">Contact Us</a>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="tab-image">
                                            <img src="{{$forth_depService->featured}}" alt="{{$forth_depService->title}}" class="img-responsive" />            </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane " id="{{strtoupper($fifth_depService->title)}}">    
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="tab-text-part">
                                            <p class="department-para">
                                                {!! $fifth_depService->content !!} </p>
                                            <a href="contact.html" class="btn btn-default">Contact Us</a>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="tab-image">
                                            <img src="{{$fifth_depService->featured}}" alt="{{$fifth_depService->title}}" class="img-responsive" />            </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane " id="{{strtoupper($six_depService->title)}}">    
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="tab-text-part">
                                            <p class="department-para">
                                                {!! $six_depService->content !!} </p>
                                            <a href="contact.html" class="btn btn-default">Contact Us</a>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="tab-image">
                                            <img src="{{$six_depService->featured}}" alt="{{$six_depService->title}}" class="img-responsive" />            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>    <!-- tab content -->
                </div>
            </div>
        </section>
    <!-- our department ends -->
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