@extends('layouts.app')

@section('content')
<div class="container-fluid landing">
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
        enterprise solutions & social products
    </h1>
    <br>
                <span data-feather="arrow-down" class="bar"></span>
        </div>
    </div>

</div>

<div class="container top text-center">
    <div class="row">
        <div class="col-md-8 mr-auto ml-auto">
            <h2 class="font-weight-bold">WELCOME</h2>
            <h4 class="font-weight-bold">THE LIT DEVELOPMENT PLATFORM TO ACHIEVE YOUR PROJECT GOALS:
                <span style="color:#00bcd4;">It’s In Our DNA</span></h4><br>

                 <p style="line-height:1.9;">
                LITBERRY TECHNOLOGIES is a tech-business innovation company focused on building basic solutions
                 and products for businesses and individuals seeking a better approach to how results are achieved.
                  We are purposeful in creating digital strategies that proffers solutions across all industry sectors,
                   and also deliver a development blend that plug the social gaps in our culture.
            </p>

             <p style="line-height:1.9;">
                With our core strength built on strategy, we pride ourselves in being the tech lab that delivers realistic
                 solution and products, helping our clients or users navigate the dynamics of their operations with ease and
                  efficiency.
            </p>

            <p style="line-height:1.9;">
                Research, creative brilliance, and clarity are the hallmarks of our approach to creating solutions- from transforming real-world processes
                for business operations, product development, brand building, consumer experience, and social impact; our corporate interests are culturally
                 relevant supported by technology. Whether you are automating a business procedure or seeking to evolve a shared value system, LITBERRY has all the ducks in line to make your project goals achievable.
            </p>
        </div>
    </div>
</div>

<div class="container-fluid top">
    <div class="row">
        <div class="col-md-6">
            <img src="{{ url('images/creative.jpg') }}" class="mx-auto d-block img-fluid" style="width:100%;">
        </div>
        <div class="col-md-6">
            <img src="{{ url('images/business.jpg') }}" class="mx-auto d-block img-fluid" style="width:100%;">
        </div>
    </div>
</div>

<div class="container-fluid work">
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
