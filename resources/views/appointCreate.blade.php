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
                                <h4 class="subpage-head">APPOINTMENT</h4>
                                <h5><a href="{{route('index')}}">HOME</a> <i class="icofont icofont-double-right"></i> <a href="{{route('appointmentCreate')}}">TAKE APPOINTMENT</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--banner ends -->
        <main class="main">
             
    <!-- our department starts -->
         <section id="our-department" class="" style="padding-top: 50px;">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                        <div class="top-text">
                            <h2>ADD APPOINTMENT</h2>
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
                         <div class="modal-dialog" role="document">
                             @if(count($errors)>0)
                                <ul class="list-group">
                                    @foreach($errors->all() as $error)
                                        <li class="list-group-item text-danger">{{$error}}</li>
                                    @endforeach
                                </ul>
                            @endif
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Appointments</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <form id="appoinment-form-fields" action="{{route('appointments.store')}}" method="post" class="appoinment-form-fields form-horizontal" data-fv-framework="bootstrap" data-fv-message="This value is not valid" data-fv-feedbackicons-valid="glyphicon glyphicon-ok" data-fv-feedbackicons-invalid="glyphicon glyphicon-remove" data-fv-feedbackicons-validating="glyphicon glyphicon-refresh">
                                                {{csrf_field()}}
                                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 no-l-padding">
                                                    <div class="form-group">
                                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                            <input class="form-control" placeholder="Your Name:" id="name" name="name" type="text" data-fv-notempty="true" data-fv-notempty-message="The name is required" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 validate-right-icon">
                                                            <select class="form-control" name="doctor_id" id="doctors" data-fv-notempty="true" data-fv-notempty-message="This Field is required">
                                                        <option value="default">Select Doctor</option>
                                                       {{--  @if(!empty($doctors)) --}}
                                                         @foreach($doctors as $doc)
                                                        
                                                        <option value="{{$doc->id}}">{{$doc->name}}</option>
                                                        
                                                        @endforeach
                                                        {{-- @endif --}}
                                                       
                                                    </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 no-r-padding">
                                                    <div class="form-group">
                                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                            <input class="form-control" placeholder="Your Phone:" id="phone" name="phone" type="text" data-fv-notempty="true" data-fv-notempty-message="Phone Number is required"  />
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 validate-right-icon">
                                                            <input type="text" name="date" class="form-control datepicker" placeholder="MM/DD/YYYY:" id="dateTo" readonly="readonly" value="" data-fv-notempty="true" data-fv-date="true" data-fv-date-format="MM/DD/YYYY" data-fv-date-message="The value is not a valid date" />
                                                            <span class="input-group-addon add-on"><i class="icofont icofont-ui-calendar"></i></span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 validate-right-icon">
                                                            <select class="form-control" name="department_id" id="department" data-fv-notempty="true" data-fv-notempty-message="This Field is required">
                                                        <option value="default">Select Department</option>
                                                       {{--  @if(!empty($departments)) --}}
                                                        @foreach($departments as $dep)
                                                        <option value="{{$dep->id}}">{{$dep->title}}</option>
                                                        @endforeach
                                                        {{-- @endif --}}
                                                        </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        <button type="submit" class="btn btn-default" >Book an Appoinment</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
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