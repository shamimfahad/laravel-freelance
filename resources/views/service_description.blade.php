@extends('layouts.app')
@section('content')
    <div class="container">
    <div class="justify-content-center container-fluid">
        <div class="card border-dark mb-3" >
            <div class="serv">
                @include('inc.confirmation')
                <img class="card-img-top" src="/images/{{$service->image}}" alt="Service image">
            </div>
            <div class="card-body">
                <h5 class="card-title text-capitalize text-center display-1">{{ $service->name }}</h5>
                <p class="card-text"><b>Description: </b>{{ $service->description }}</p>
                <p class="card-text"><b>Category: </b>{{ $service->category }}</p>
                <p class="card-text"><b>Finish Time: </b>{{ $service->finish_time }} <small> Days</small></p>
                <p class="card-text"><small class="text-muted">Service Posted at {{ $service->created_at->toFormattedDateString() }}</small></p>
            </div>
            @unless(Auth::id()==$service->user->id)
            <div class="card-footer text-center text-muted border-dark bg-transparent">
                @if ($alreadyLiked)
                    <p class="text-center text-success">You already liked this service!</p>
                @else
                    <form method="POST" action="{{ route('service.like',$service->id) }}">
                        {{csrf_field()}}
                        <button type="submit" class="btn btn-lg btn-light">Like</button>
                    </form>
                @endif

            </div>
            @endunless
        </div>

        <div class="container">
        <div class="row justify-content-center py-4 text-center">
            <div class="profile-box">
                <div class="card w-50">
                    <div class="card-body">
                        <div style="width: 50%; float: left;">
                            <img class="card-img-top" src="/img/team1.png" alt="Service image">
                        </div>
                        <div style="width: 50%; float: right;">
                            <h3 class="card-title">{{ $service->user->name }}</h3>
                            <p class="card-text">{{ $service->user->title }}</p>
                            <p class="card-text"><b>Member Since: </b><small>{{ $service->user->created_at->toFormattedDateString() }} </small></p>
                        </div>
                    </div>
                    <div class="card-footer text-muted">
                        <a class="btn btn-outline-primary" href="{{ route('profile.index',$service->user_id ) }}">View Profile</a>
                    </div>
                </div>
            </div>
        </div>
        </div>

        {{--<div class="card border-dark mb-3">
            <div>

            </div>
            <img src="/img/team1.png" alt="{{$service->user->name}}" style="width:100%">
            <h1>{{ $service->user->name }}</h1>
            <p class="title">CEO & Founder, Example</p>
            <p>Harvard University</p>
            <div style="margin: 24px 0;">
                <a href="#"><i class="fa fa-dribbble"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-facebook"></i></a>
            </div>
            <p><button>Contact</button></p>
        </div>--}}
                <!-- card-body end .// -->
            <!-- card.// -->
        <!-- col.//-->

    </div>

    <br>
    <br>
    <br>
    <br>

    </div>
@endsection