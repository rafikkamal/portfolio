@extends('layouts.welcome')

@section('content')
<div class="container-fluid banner" id="banner">
    <div class="row">
        <img src="{{ asset('img/banner.png') }}" alt="banner image" class="img-responsive">
    </div>
</div>
<div class="container" id="info">
    <div class="row">
        <div class="info-name">
            <h1>I'm Rafik Kamal</h1>
            <h3>About me</h3>
        </div>
        <div class="info-introduction">
            <div class="col-sm-6">
                <h1>Hello</h1>
                <p>
                    My name is Rafik Kamal. I'm a passionate web designer and developer with ten years 
                    experience in this domain, focused on building great and premium websites.
                    <br/>
                    For every single project that I have done my focus has been on creating the best user 
                    experience possible. I've worked with several larger as well as smaller brands and I love challenges.
                </p>
            </div>
            <div class="col-sm-6">
                <div class="experties-name">
                    HTML & CSS
                    <span class="experties-experience">
                        90%
                    </span>
                </div>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="90" style="width:90%;" aria-valuemin="0" aria-valuemax="100">
                    </div>
                </div>
                <div class="experties-name">
                    PHP
                    <span class="experties-experience">
                        85%
                    </span>
                </div>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="85" style="width:85%;" aria-valuemin="0" aria-valuemax="100">
                    </div>
                </div>
                <div class="experties-name">
                    Javascript
                    <span class="experties-experience">
                        80%
                    </span>
                </div>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="80" style="width:80%;" aria-valuemin="0" aria-valuemax="100">
                    </div>
                </div>
                <div class="experties-name">
                    Symfony
                    <span class="experties-experience">
                        60%
                    </span>
                </div>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="60" style="width:60%;" aria-valuemin="0" aria-valuemax="100">
                    </div>
                </div>
                <div class="experties-name">
                    Laravel
                    <span class="experties-experience">
                        87%
                    </span>
                </div>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="87" style="width:87%;" aria-valuemin="0" aria-valuemax="100">
                    </div>
                </div>
            </div>
        </div>
        <div class="info-icon info-disable">

        </div>
    </div>
</div>
<div id="resume">
    <div class="container">
        <div class="row">
            <!--Experience No 1-->
            <div class="resume-header">
                <h1>My past Experience</h1>
                <h3>RESUME</h3>
            </div>
            <div class="col-sm-3 resume-experience">
                <h2>2 years</h2>
                <h3>2014-2016</h3>
            </div>
            <div class="col-sm-offset-1 col-sm-8 resume-details">
                <h2>Art & Creative director</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                    incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <!--Experience No 1-->
            <div class="col-sm-3 resume-experience">
                <h2>2 years</h2>
                <h3>2014-2016</h3>
            </div>
            <div class="col-sm-offset-1 col-sm-8 resume-details">
                <h2>Art & Creative director</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                    incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <!--Experience No 1-->
            <div class="col-sm-3 resume-experience">
                <h2>2 years</h2>
                <h3>2014-2016</h3>
            </div>
            <div class="col-sm-offset-1 col-sm-8 resume-details">
                <h2>Art & Creative director</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                    incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <!--Experience No 1-->
            <div class="col-sm-3 resume-experience">
                <h2>2 years</h2>
                <h3>2014-2016</h3>
            </div>
            <div class="col-sm-offset-1 col-sm-8 resume-details">
                <h2>Art & Creative director</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                    incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>
    </div> 
</div>
<div id="work">
    <div class="container">
        <div class="row">
            <div class="work-header">
                <h1>Latest Project</h1>
            </div>
            <div class="col-sm-3">
                <img src="{!! secure_asset('img/image_1.jpg') !!}" alt="banner image" class="">
                <img src="{!! secure_asset('img/image_2.jpg') !!}" alt="banner image" class="">
            </div>
            <div class="col-sm-3">
                <img src="{!! secure_asset('img/image_4.jpg') !!}" alt="banner image" class="">
                <img src="{!! secure_asset('img/image_5.jpg') !!}" alt="banner image" class="">
            </div>
            <div class="col-sm-3">
                <img src="{!! secure_asset('img/image_1.jpg') !!}" alt="banner image" class="">
                <img src="{!! secure_asset('img/image_2.jpg') !!}" alt="banner image" class="">
            </div>
            <div class="col-sm-3">
                <img src="{!! secure_asset('img/image_4.jpg') !!}" alt="banner image" class="">
                <img src="{!! secure_asset('img/image_5.jpg') !!}" alt="banner image" class="">
            </div>
        </div>
    </div>
</div>
<div id="client">
    <div class="container-fluid">
        <div class="row">
            <div class="resume-header">
                <h1>Client Review</h1>
            </div>
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="{!! secure_asset('img/slider/slider_1.jpg') !!}" alt="banner image" class="img-responsive">
                    </div>

                    <div class="item">
                        <img src="{!! secure_asset('img/slider/slider_2.jpg') !!}" alt="banner image" class="img-responsive">
                    </div>

                    <div class="item">
                        <img src="{!! secure_asset('img/slider/slider_3.jpg') !!}" alt="banner image" class="img-responsive">
                    </div>

                    <div class="item">
                        <img src="{{ asset('img/slider/slider_1.jpg') }}" alt="banner image" class="img-responsive">
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>
<div id="contact">
    <div class="container">
        <div class="row">
            <div class="contact-header">
                <h1>Get in touch</h1>
                <h3>Contact</h3>
            </div>
            <div class="col-sm-6">
                <form class="form" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Subject">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" style="max-width:100%;" placeholder="Message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                </form>
            </div>
            <div class="col-sm-6">
                <div id="googleMap" style="width:100%;height:380px;"></div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('javascript')
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
function initialize() {
var mapProp = {
center:new google.maps.LatLng(51.508742,-0.120850),
zoom:5,
mapTypeId:google.maps.MapTypeId.ROADMAP
};
var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>
@endsection