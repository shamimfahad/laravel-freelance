@extends('layouts.app')

@section('content')
    @include('inc.confirmation')

    <div class="single-item" >
        <div class="sld">
            <img src="img/leavingforwork.jpg">
            <a class="btn btn-lg btn-outline-light" href="/platform">Explore Marketplace</a>
            <h1 class="display-2 csption">Uparjon</h1>
            <h3 class="display-1 caption-text">A freelancing marketplace</h3>
        </div>
        <div class="sld">
            <img src="img/emptyfield.jpg">
            <a class="btn btn-lg btn-outline-light" href="{{route('projects')}}">Projects</a>
            <h1 class="display-2 csption">Browse Projects Posted by Clients</h1>

        </div>
        <div class="sld">
            <img src="img/flowers.jpg">
            <a class="btn btn-lg btn-outline-light" href="{{route('services')}}">Services</a>
            <h1 class="display-2 csption">Browse Services Posted by Freelancers</h1>

        </div>

    </div>
    <!-- Popular Services-->
    <div class="container-fluid padding">
        <div class="row welcome text-center">
            <div class="col-12">
                <h1 class="display-2">Browse Categories</h1>
            </div>
        </div>
    </div>
    <!-- Services Cards -->

    <div class="container-fluid padding" style="width: 90%;">
        <div class="row text-center padding">
            @if($categories)
                @foreach($categories as $category)
            <div class="col-xs-12 col-sm-4 col-md-3">
                <img src="img/background.png" class="img-fluid">
                <div class="carousel-caption">
                    <h4 class="overflow-y-hidden">{{$category->name}}</h4>
                    <a href="" class="btn btn-primary">Explore</a>
                </div>
            </div>
                @endforeach
            @endif
    </div>
    {{--<!-- Fixed Background -->
    <!-- <figure>
        <div class="fixed-wrap">
            <div id="fixed">
            </div>
        </div>
    </figure> -->
    <!-- How Does it work -->
    <!-- Freelancer Profiles -->
    --}}{{--<div class="container-fluid padding">
        <div class="row welcome text-center">
            <div class="col-12">
                <h1 class="display-2">Top Freelancers</h1>
            </div>
            <hr>
        </div>
    </div>--}}{{--
    <!-- Profile Cards-->
   --}}{{-- <div class="container-fluid padding">
        <div class="card-deck">

            <div class="card">
                <img class="card-imd-top img-fluid" src="img/team1.png">
                <div class="card-body">
                    <h4 class="card-title">John Doe</h4>
                    <p class="card-text">John isi an Internet entrepreneur with almost 20 years of experience.</p>
                    <a href="#" class="btn btn-outline-secondary">See Profile</a>
                </div>
            </div>
            <div class="card">
                <img class="card-imd-top img-fluid" src="img/team2.png">
                <div class="card-body">
                    <h4 class="card-title">John Doe</h4>
                    <p class="card-text">John isi an Internet entrepreneur with almost 20 years of experience.</p>
                    <a href="#" class="btn btn-outline-secondary">See Profile</a>
                </div>
            </div>
            <div class="card">
                <img class="card-imd-top img-fluid" src="img/team3.png">
                <div class="card-body">
                    <h4 class="card-title">John Doe</h4>
                    <p class="card-text">John isi an Internet entrepreneur with almost 20 years of experience.</p>
                    <a href="#" class="btn btn-outline-secondary">See Profile</a>
                </div>
            </div>

        </div>

    </div>--}}{{--

    <!-- Two Column Section -->
    <!-- <div class="container-fluid padding">
        <div class="row padding">
            <div class="col-lg-6">

                <h2>if aokojko</h2>
                <p>eifheiiiei diiiiiiii  djii  adivndifjdi dfiaaaaaaa</p>

            </div>
            <div class="col-lg-6">

                <img src="img/mac.png">

            </div>
        </div>
    </div> -->--}}
    <div class="container-fluid padding">
        <div class="row text-center padding">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" id="textbox" style="margin-top: 6%;">
                <h1>Get work done on Uparjon</h1>
                <hr>
                <div>
                    <h4>Payment Protection, Guaranteed</h4>
                    <p>Payment is released to the freelancer once you’re pleased and approve the work you get.</p>
                </div>
                <div>
                    <h4>Know The Price Upfront</h4>
                    <p>Find any service within minutes and know exactly what you’ll pay. No hourly rates, just a fixed price.</p>
                </div>
                <div>
                    <h4>Browse Profiles</h4>
                    <p>Browse among thousands of freelancers to find the best one for your project.</p>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <img src="img/pickbest.jpg" class="img-fluid">
            </div>
        </div>
    </div>
@endsection
