@extends('layouts.app')

@section('content')
<div class="container-fluid landing3">
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
                our team
    </h1>
    <br>
                <span data-feather="arrow-down" class="bar"></span>
        </div>
    </div>

</div>

<div class="container top text-center">
    <div class="row">
        <div class="col-md-8 mr-auto ml-auto">
            <h4 style="line-height:1.9;">
                We love fairytales, but more than that we believe in and build technologies that turn ideas into
                reality. We are a team of creatives with the capacity to think, design, develop, connect, and sell
                tech innovation that is convinient and safe for businesses and consumers.
            </h4>
        </div>
    </div>


    <div class="row top">
        <div class="col-md-4 mb-2">
            <img src="{{ url('images/Akan.jpg') }}" class="mx-auto d-block img-fluid img-thumbnail" style="width:100%;">
        </div>
        <div class="col-md-4 mb-2">
            <img src="{{ url('images/Neji.jpg') }}" class="mx-auto d-block img-fluid img-thumbnail" style="width:100%;">
        </div>
        <div class="col-md-4 mb-2">
            <img src="{{ url('images/Neeta.jpg') }}" class="mx-auto d-block img-fluid img-thumbnail" style="width:100%;">
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-4 mb-2">
            <img src="{{ url('images/Neeta.jpg') }}" class="mx-auto d-block img-fluid img-thumbnail" style="width:100%;">
        </div>
        <div class="col-md-4 mb-2">
            <img src="{{ url('images/Kedro.jpg') }}" class="mx-auto d-block img-fluid img-thumbnail" style="width:100%;">
        </div>
    </div>
</div>
@endsection
