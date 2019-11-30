    <section id="footer" class="footer">
    <div class="footer-widget">
        <div class="container">
            <div class="row ">
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 footer-responsive-media">
                    <h4 class="icon-head">About Us</h4>
<div class="footer-about">
    {!! Str::words($abouts->content, 40) !!}
    <ul>
        <li><i class="icofont icofont-location-pin"></i> {{$settings->address}}</li>
        <li><i class="icofont icofont-ui-message"></i> <a href="{{$settings->site_email}}" >{{$settings->site_email}}</a></li>
    </ul>
</div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 footer-responsive-media">
                    <h4 class="icon-head">Navigation</h4>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-6 col-6">
        <div class="footer-nav-list">
            <ul>
                <li><a href="#"><i class="icofont icofont-double-right"></i> Appoinment</a></li>
                <li><a href="#"><i class="icofont icofont-double-right"></i> Our Specialists</a></li>
                <li><a href="#"><i class="icofont icofont-double-right"></i> Why Choose Us</a></li>
                <li><a href="#"><i class="icofont icofont-double-right"></i> Our Services</a></li>
                <li><a href="#"><i class="icofont icofont-double-right"></i> Patient FAQ</a></li>
            </ul>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-6 col-6">
        <div class="footer-nav-list">
            <ul>
                <li><a href="#"><i class="icofont icofont-double-right"></i> Health Tips</a></li>
                <li><a href="#"><i class="icofont icofont-double-right"></i> Our Latest News</a></li>
                <li><a href="#"><i class="icofont icofont-double-right"></i> Patient Feedback</a></li>
            </ul>
        </div>
    </div>
</div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 footer-responsive-media">
                        <h4 class="icon-head">Instagram</h4>
    <div class="insta-widget">
        <figure>
    <a href="#">
        <img src="{{asset('hospital/images/instagram-1.jpg')}}" alt="" class="img-responsive pull-left" />    </a>
</figure>
<figure>
    <a href="#">
        <img src="{{asset('hospital/images/instagram-2.jpg')}}" alt="" class="img-responsive pull-left" />    </a>
</figure>
<figure>
    <a href="#">
        <img src="{{asset('hospital/images/instagram-3.jpg')}}" alt="" class="img-responsive pull-left" />    </a>
</figure>
<figure>
    <a href="#">
        <img src="{{asset('hospital/images/instagram-4.jpg')}}" alt="" class="img-responsive pull-left" />    </a>
</figure>
<figure>
    <a href="#">
        <img src="{{asset('hospital/images/instagram-5.jpg')}}" alt="" class="img-responsive pull-left" />    </a>
</figure>
<figure>
    <a href="#">
        <img src="{{asset('hospital/images/instagram-6.jpg')}}" alt="" class="img-responsive pull-left" />    </a>
</figure>
    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="copyright-container">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                    <p class="copyrights">Copyright <i class="icofont icofont-copyright"></i> CodeArtisan 2019. All  Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
</section>