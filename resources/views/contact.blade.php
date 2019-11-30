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
    <link href="{{ asset('css/toastr.min.css') }}" rel="stylesheet">
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
                                <h4 class="subpage-head">CONTACT US</h4>
                                <h5><a href="{{route('index')}}">HOME</a> <i class="icofont icofont-double-right"></i> <a href="{{route('contact')}}">CONTACT</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--banner ends -->
        <main class="main"><!-- About starts -->
            <!-- Map starts -->
            <section id="map" class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3886.585191685115!2d80.22527935045362!3d13.062054916375878!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a52668c766129fd%3A0xef40c00923c2fc59!2sVaa+Host!5e0!3m2!1sen!2sin!4v1506332411070" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
        </section>    <!-- Map ends -->
                <!-- Contact Form starts -->
       
        <section id="contact-page-form" class="contact-page-form">
        <div class="container">
            <div class="row">
                <div class="appoinment-form pulse wow"  data-wow-duration="1s">
                     @if(count($errors)>0)
                        <ul class="list-group">
                            @foreach($errors->all() as $error)
                                <li class="list-group-item text-danger">{{$error}}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-8">
                        <form id="contact-form-fields" action="{{route('contacts.store')}}" method="post" class="contact-form-fields form-horizontal" data-fv-framework="bootstrap" data-fv-message="This value is not valid" data-fv-feedbackicons-valid="glyphicon glyphicon-ok" data-fv-feedbackicons-invalid="glyphicon glyphicon-remove" data-fv-feedbackicons-validating="glyphicon glyphicon-refresh">
                             {{csrf_field()}}
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 no-l-padding">
                                <div class="form-group">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <input class="form-control" placeholder="Name:" id="name" name="user_name" type="text" data-fv-notempty="true" data-fv-notempty-message="The name is required" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 responsive-padding">
                                        <input class="form-control" placeholder="E-mail:" id="email" name="user_email" type="email" data-fv-notempty="true" data-fv-notempty-message="The email address is required" data-fv-emailaddress="true" data-fv-emailaddress-message="The input is not a valid email address" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-l-padding">
                                <div class="form-group textarea-formgroup">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <textarea class="form-control message-area" placeholder="Your message..." cols="50" rows="4" id="message" name="text_message" data-fv-notempty="true" data-fv-stringlength="true" data-fv-stringlength-max="200" data-fv-stringlength-message="The message must be less than 200 characters" data-fv-notempty-message="The message is required"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                                    <button type="submit" class="btn btn-default">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                        <div class="address-details">
                            <ul>
                                <li><i class="icofont icofont-ui-dial-phone"></i> <span>{{$settings->site_contact}}</span></li>
                                <li><i class="icofont icofont-ui-message"></i> <span><a href="{{$settings->site_email}}" > {{$settings->site_email}}</a></span></li>
                                <li><i class="icofont icofont-location-pin"></i> <span>{{$settings->address}}</span></li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Form ends -->
        </main>
    </div>    
<!-- Footer start-->

@include('includes.footer')

<!--Footer End  -->
<script src="{{asset('hospital/js/jquery.min.js')}}"></script>
<script src="{{ asset('js/toastr.min.js') }}"></script>
<script type="text/javascript" src="{{asset('hospital/js/imagesloaded.pkgd.min.js')}}"></script>
<script type="text/javascript" src="{{asset('hospital/js/formValidation.min.js')}}"></script>
<script type="text/javascript" src="{{asset('hospital/js/wow.min.js')}}"></script>
<script type="text/javascript" src="{{asset('hospital/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('hospital/js/jquery.sticky.js')}}"></script>
<script type="text/javascript" src="{{asset('hospital/js/bootstrap-datepicker.min.js')}}"></script>
<script type="text/javascript" src="{{asset('hospital/js/premedi_custom.js')}}"></script>
<script type="text/javascript" src="{{asset('hospital/js/owl.carousel.min.js')}}"></script>
<script>
    @if(Session::has('success'))
        toastr.success("{{Session::get('success')}}")
    @endif

     @if(Session::has('info'))
        toastr.info("{{Session::get('info')}}")
    @endif
</script>
</body>
</html>