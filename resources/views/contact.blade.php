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
                contact us
    </h1>
    <br>
                <span data-feather="arrow-down" class="bar"></span>
        </div>
    </div>

</div>

<div class="container top">
    <div class="row">
        <div class="col-md-6">
        </div>
        <div class="col-md-6">
            <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-row">

                            <div class="col-md-6 form-group">
                                <input placeholder="NAME" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-6 form-group">
                                <input placeholder="EMAIL" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div><br><br>

                        <div class="form-row">

                             <div class="col-md-6 form-group">
                                <input placeholder="COMPANY" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-6 form-group">
                                <input placeholder="PHONE" id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div><br><br>

                         <div class="form-group row">

                             <div class="col-md-12">
                                <textarea placeholder="MESSAGE" rows="5" id="info" type="text" class="form-control @error('info') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name"></textarea>

                                @error('info')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                         </div>



                        <div class="form-group row mb-0">
                            <div class="col-md-12">
                                <button type="submit" class="btn contact btn-block">
                                    {{ __('SUBMIT') }}
                                </button>
                            </div>
                        </div>
                    </form>
        </div>
    </div>
</div>

@endsection
