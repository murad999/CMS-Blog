
<header class="header">
    <div class="top-container">
        <div class="top-menu">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-3 col-md-2 col-lg-3">
                        <div class="social-links">
                            <a href="#"><i class="icofont icofont-social-facebook"></i></a>
                            <a href="#"><i class="icofont icofont-social-twitter"></i></a>
                            <a href="#"><i class="icofont icofont-social-google-plus"></i></a>
                            <a href="#"><i class="icofont icofont-social-instagram"></i></a>
                            <a href="#"><i class="icofont icofont-social-pinterest"></i></a>
                        </div>
                    </div>
                    <div class="hidden-xs col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="call-now text-center">
                            <p><span>Call Now:</span><a href="tel:+8800123456789"> {{$settings->site_contact}}</a></p>
                        </div>
                    </div>
                   {{-- {{dd($blogs)}} --}}
                    <div class="hidden-xs col-xs-12 hidden-sm col-sm-3 col-md-4 col-lg-3">
                        <div class="email text-center">
                            <p><span>E-mail:</span><a href="{{$settings->site_email}}"> {{$settings->site_email}}</a></p>
                        </div>
                    </div>
                    <div class="hidden-xs col-xs-12 col-sm-3 col-md-2 col-lg-3">
                        <div class="book-appoinment text-right">
                            <a href="#" class="btn btn-default" data-toggle="modal" data-target="#myModal">Appoinment</a>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade premedi-popup" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
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
                                                        @if(!empty($doctors))
                                                         @foreach($doctors as $doc)
                                                        
                                                        <option value="{{$doc->id}}">{{$doc->name}}</option>
                                                        
                                                        @endforeach
                                                        @endif
                                                       
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
                                                        @if(!empty($departments))
                                                        @foreach($departments as $dep)
                                                        <option value="{{$dep->id}}">{{$dep->title}}</option>
                                                        @endforeach
                                                        @endif
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
                    </div>
                </div>
            </div>
        </div>
        <div id="sticky_navigation_wrapper" class="navbar-primary standard-menu">
            <div id="sticky_navigation" class="sticky_navigation">
                <div class="top-search" style="display:none;">
                    <div class="container">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="icofont icofont-search-alt-1"></i></span>
                            <form method="GET" action="/results">
                                <input type="text" class="form-control" placeholder="Search">
                            </form>
                                <span class="input-group-addon close-search"><i class="icofont icofont-ui-close"></i></span>

                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-1 col-lg-2 site-logo-part resize-div">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <div class="logo-image">
                                    <a href="{{route('index')}}" class="brand js-target-scroll">
                                        <span class="normal-span">{{strtoupper($title)}}</span>
                                    </a>
                                </div>
                                <div class="search-part">
                                    <div class="menu-search hidden-lg hidden-md">
                                        <a href="#"><i class="icofont icofont-search-alt-1"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-10 col-lg-8 menu-part resize-menuDiv">
                            <div class="collapse navbar-collapse" id="navbar-collapse">
                                <ul class="nav navbar-nav underline">
                                    <li  class=""> <a  href="{{route('index')}}" title="HOME" id="home">HOME</a></li>
                                    <li  class=""> <a  href="{{route('about')}}" title="ABOUT" id="about-page">ABOUT</a></li>
                                    <li  class=""> <a  href="{{route('department')}}" title="DEPARTMENTS" id="">DEPARTMENTS</a></li>
                                    <li  class=""> <a  href="{{route('doctor')}}" title="Doctors" id="">Doctors</a></li>
                                    <li  class=""> <a  href="{{route('service')}}" title="SERVICES" id="services">SERVICES</a></li>
                                    <li  class=""> <a  href="{{route('blog')}}" title="BLOG GIRD" id="blog-gird">BLOG</a></li>
                                    {{-- <li  class=""> <a  href="#" title="Gallery" id="">Gallery</a></li> --}}
                                    <li  class=""> <a  href="{{route('appointmentCreate')}}" title="Appointment" id="">Appointment</a></li>
                                    <li  class=""> <a  href="{{route('contact')}}" title="CONTACT" id="contact">CONTACT</a></li>
                                </ul>                            
                            </div>
                        </div>
                        <div class="col-md-1 col-lg-2 search-part hidden-sm hidden-xs">
                            <!-- Start Top Search -->
                            <div class="menu-search">
                                <a href="#"><i class="icofont icofont-search-alt-1"></i></a>
                            </div>
                            <!-- End Top Search -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</header>