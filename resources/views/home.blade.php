@extends('layouts.app')

@section('content')
    <div id="slides" class="carousel slide" data-ride="carousel">
        <!-- <ul class="carousel-indicators">
            <li data-target="#slides" data-slide-to="0" class="active"></li>
        </ul> -->
        <div class="carousel-inner">
            <img src="img/bg-1.jpg">
            <div class="carousel-caption">
                <h1 class="display-2">Outsource</h1>
                <h3>A freelancing marketplace</h3>
                <button type="button" class="btn btn-outline-light btn-lg"><a href="/platform">Explore Marketplace</a></button>
            </div>
        </div>
    </div>
    <!-- Popular Services-->
    <div class="container-fluid padding">
        <div class="row welcome text-center">
            <div class="col-12">
                <h1 class="display-4">Popular Services</h1>
            </div>
        </div>
    </div>
    <!-- Services Cards -->
    <div class="container-fluid padding">
        <div class="row text-center padding">
            <div class="col-xs-12 col-sm-6 col-md-4">
                <img src="img/background.png" class="img-fluid">
                <div class="carousel-caption">
                    <h1>Web Design</h1>
                    <a href="" class="btn btn-primary">Explore</a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <img src="img/background.png" class="img-fluid">
                <div class="carousel-caption">
                    <h1>Logo Design</h1>
                    <a href="" class="btn btn-primary">Explore</a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <img src="img/background.png" class="img-fluid">
                <div class="carousel-caption">
                    <h1>Wordpress</h1>
                    <a href="" class="btn btn-primary">Explore</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Fixed Background -->
    <!-- <figure>
        <div class="fixed-wrap">
            <div id="fixed">
            </div>
        </div>
    </figure> -->
    <!-- How Does it work -->
    <!-- Freelancer Profiles -->
    <div class="container-fluid padding">
        <div class="row welcome text-center">
            <div class="col-12">
                <h1 class="display-4">Top Freelancers</h1>
            </div>
            <hr>
        </div>
    </div>
    <!-- Profile Cards-->
    <div class="container-fluid padding">
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

    </div>

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
    </div> -->
    <div class="container-fluid padding">
        <div class="row text-center padding">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" id="textbox">
                <h2>Get work done on Outsource</h2>
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
                    <p>Browse among thousands of freelancers to find the best one for your </p>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <img src="img/bg1.jpg" class="img-fluid">
            </div>
        </div>
    </div>
@endsection
