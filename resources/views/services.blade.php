@extends('layouts.app')

@section('content')
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row">
                @if($services)
                    @foreach($services as $service)

                        <div class="col-md-3">
                            <div class="card mb-3 shadow-sm">
                                <img width="100%" height="175" focusable="false" aria-label="Service Banner" src="/images/{{$service->image}}">
                                {{--<svg class="bd-placeholder-img card-img-top" width="100%" height="175" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Service Banner"><title>Service</title>--}}{{--<rect width="100%" height="100%" fill="#55595c"/>--}}{{--<text x="50%" y="50%" fill="#eceeef" dy=".3em"> </text></svg>--}}
                                <div class="card-body">
                                    <h3 class="card-text">{{ $service->name }}</h3>
                                    <p class="card-text float-right overflow-auto">{{ $service->budget }} <small>BDT</small></p>
                                    <p class="card-text overflow-none">{{ $service->description }}</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a class="btn btn-sm btn-outline-info" href="{{ route('service',$service->id ) }}">View Details</a>
                                            {{--<button type="button" class="btn btn-sm btn-outline-secondary">View Details</button>--}}
                                            {{--<button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>--}}
                                        </div>
                                        {{--<small class="text-muted">9 mins</small>--}}
                                        <small>{{ $service->finish_time }} days</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
            {{ $services->links() }}
        </div>
    </div>

@endsection