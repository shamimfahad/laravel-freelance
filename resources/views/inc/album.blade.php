<main role="main" {{--xmlns="http://www.w3.org/1999/html"--}}>

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
            <a href="{{route('services')}}" class="text-center btn btn-outline-primary">View All Services</a>
        </div>
    </div>
</main>

{{--
<div class="container-fluid">
    <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="9000">
        <div class="carousel-inner row w-100 mx-auto" role="listbox">
            <div class="carousel-item col-md-4 active">
                <img class="img-fluid mx-auto d-block" src="//placehold.it/600x400/000/fff?text=1" alt="slide 1">
            </div>
            <div class="carousel-item col-md-4">
                <img class="img-fluid mx-auto d-block" src="//placehold.it/600x400?text=2" alt="slide 2">
            </div>
            <div class="carousel-item col-md-4">
                <img class="img-fluid mx-auto d-block" src="//placehold.it/600x400?text=3" alt="slide 3">
            </div>
            <div class="carousel-item col-md-4">
                <img class="img-fluid mx-auto d-block" src="//placehold.it/600x400?text=4" alt="slide 4">
            </div>
            <div class="carousel-item col-md-4">
                <img class="img-fluid mx-auto d-block" src="//placehold.it/600x400?text=5" alt="slide 5">
            </div>
            <div class="carousel-item col-md-4">
                <img class="img-fluid mx-auto d-block" src="//placehold.it/600x400?text=6" alt="slide 6">
            </div>
            <div class="carousel-item col-md-4">
                <img class="img-fluid mx-auto d-block" src="//placehold.it/600x400?text=7" alt="slide 7">
            </div>
            <div class="carousel-item col-md-4">
                <img class="img-fluid mx-auto d-block" src="//placehold.it/600x400?text=8" alt="slide 7">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
            <i class="fa fa-chevron-left fa-lg text-muted"></i>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next text-faded" href="#carouselExample" role="button" data-slide="next">
            <i class="fa fa-chevron-right fa-lg text-muted"></i>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>--}}
