@extends('layouts.app')

@section('content')
<div class="container-fluid landing2">
    <div class="topbar">
       <a href="{{ url('/') }}"><img src="{{ url('images/brand.png') }}" style="height:60px;"></a>
        <span data-feather="menu" class="bar open-btn float-right"></span>

    </div>
    <div class="sidebar animated slideInRight faster text-right">
        <i data-feather="x" class="close-btn float-right"></i>

        <div class="row">
            <div class="col-md-6 intro">
                <div class="col-md-10 intro-box p-3 mr-auto ml-auto">
                    <h5 class="font-weight-bold text-center text-white">
                        ENTERPRISE SOLUTIONS & SOCIAL PRODUCTS
                    </h5>
                </div><br>
                <p class="text-white text-center pl-3">
                    We enable your idea of a better way of doing things by building Native
                    Technologies that defy the complexity of the moment, and comply with the desire to
                     experience lasting efficiency.
                </p>
            </div>
            <div class="col-md-6">
                <nav class="sidemenu">
                    <a href="{{ url('/') }}">Home</a>
                    <a href="{{ url('what-we-do') }}">What We Do</a>
                    <a href="{{ url('our-team') }}">Our Team</a>
                    <a href="{{ url('contact-us') }}">Contact Us</a>
                </nav>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 mr-auto ml-auto text-center">
            <h1 class="headtext font-weight-bold text-uppercase">
                 what we do
            </h1><br>
                <span data-feather="arrow-down" class="bar"></span>
        </div>
    </div>

</div>

<div class="container top text-center">
    <div class="row">
        <div class="col-md-8 mr-auto ml-auto">
            <h4 style="line-height:1.9;">
                The grind to get your project ideas up and running is not a walk in the park, but absolutely possible.
                 At LITBERRY we bring the fusion of business and technology depth to redefine those vital processes that
                 help your venture activities advance seamlessly, and deliver tangible value to consumers seeking an amazing
                 digital experience that eases how they achieve personal goals.
            </h4>
        </div>
    </div>
</div>

<div class="container-fluid work2 top">
    <div class="row">
        <div class="col-md-10 mr-auto ml-auto">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <h4 class="font-weight-bold">ENTERPRISE SOLUTIONS</h4><br>
                    <h4>-	Process Design & Automation</h4><br>
                    <h4>-	Tech Products Development</h4><br>
                    <h4>-	Content Development & Strategy</h4><br>
                    <h4>-	Digital Transformation</h4><br>
                </div>

                <div class="col-md-6 mb-3">
                    <h4 class="font-weight-bold">SOCIAL PRODUCTS</h4><br>
                    <h4>-	Peer-to-Peer Review System</h4><br>
                    <h4>-	Crowdsourcing and Crowd-funding Products</h4><br>
                    <h4>-	Innovative Information Product</h4><br>
                    <h4>-	Social Outreach Products  </h4><br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
