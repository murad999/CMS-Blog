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
    <section id="home-page-banner" class="home-page-banner">
    <img src="{{asset($slider->featured_slider)}}" alt="{{$slider->title_slider}}" class="img-responsive home-banner" />    <div class="image-caption">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <h1 class="text-center fadeInDown wow" data-wow-duration="1s">WE CARE ABOUT YOU</h1>
                    <p class="text-center fadeInDown wow" data-wow-duration="1s">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
                    <div class="row hidden-xs fadeInUp wow" data-wow-duration="1s">
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
                            <a href="{{route('about')}}" class="btn btn-primary">About Us</a>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-left">
                            <a href="{{route('contact')}}" class="btn btn-default">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                    <div class="appoinment-form">
                        <h2>MAKE AN APPOINMENT</h2>
                        @if(count($errors)>0)
                            <ul class="list-group">
                                @foreach($errors->all() as $error)
                                    <li class="list-group-item text-danger">{{$error}}</li>
                                @endforeach
                            </ul>
                        @endif
                        <div class="row">
                            <form id="appoinment-form-fields" action="{{route('appointments.store')}}" method="post" class="appoinment-form-fields form-horizontal" data-fv-framework="bootstrap" data-fv-message="This value is not valid" data-fv-feedbackicons-valid="glyphicon glyphicon-ok" data-fv-feedbackicons-invalid="glyphicon glyphicon-remove" data-fv-feedbackicons-validating="glyphicon glyphicon-refresh">
                                {{csrf_field()}}
                                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 no-l-padding">
                                    <div class="form-group">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <input required="" class="form-control" placeholder="Your Name:" id="name" name="name" type="text" data-fv-notempty="true" data-fv-notempty-message="The name is required" />
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
                                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 no-l-padding">
                                    <div class="form-group">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <input class="form-control" placeholder="Your Phone:" id="phone" name="phone" type="text" data-fv-notempty="true" data-fv-notempty-message="Phone Number is required"  />
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
                                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 no-l-padding">
                                    <div class="form-group">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 validate-right-icon">
                                            <input type="text" name="date" class="form-control datepicker" placeholder="MM/DD/YYYY" id="dateTo" readonly="readonly" value="" data-fv-notempty="true" data-fv-date="true" data-fv-date-format="MM/DD/YYYY" data-fv-date-message="The value is not a valid date" />
                                            <span class="input-group-addon add-on"><i class="icofont icofont-ui-calendar"></i></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <button type="submit" class="btn btn-default appoinment-form-submit">Book an Appoinment</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
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
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center" style="margin-top: 80px">
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
                                            <div style="margin: 50px 0"></div>
                                            <a href="{{route('contact')}}" class="btn btn-default">Contact Us</a>
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
                                            <div style="margin: 50px 0"></div>
                                            <a href="{{route('contact')}}" class="btn btn-default">Contact Us</a>
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
                                            <div style="margin: 50px 0"></div>
                                            <a href="{{route('contact')}}" class="btn btn-default">Contact Us</a>
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
                                            <div style="margin: 50px 0"></div>
                                            <a href="{{route('contact')}}" class="btn btn-default">Contact Us</a>
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
                                            <div style="margin: 50px 0"></div>
                                            <a href="{{route('contact')}}" class="btn btn-default">Contact Us</a>
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
                                            <div style="margin: 50px 0"></div>
                                            <a href="{{route('contact')}}" class="btn btn-default">Contact Us</a>
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
    <!-- our Services starts -->
    

    <section id="our-services" class="our-services">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                    <div class="top-text">
                        <h2>
                            OUR SERVICES                        </h2>
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