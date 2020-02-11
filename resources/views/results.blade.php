@extends('layouts.app')

@section('content')
    @if($projects != NULL && $services == NULL)
    <div class="row justify-content-center padding">
        <div class="col-md-10 text-center">
            <h1 class="display-2">Projects Posted</h1>
            <br>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Project Title</th>
                    <th><div class="dropdown">
                            <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Category
                                <span class="caret"></span></button>
{{--                            <ul class="dropdown-menu">--}}


{{--                                        <li><a tabindex="-1" href="#"></a></li>--}}


{{--                            </ul>--}}
                        </div>
                    </th>
                    <th>Budget</th>
                    <th>Posted On</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>


                @foreach ($projects as $project)


                        <tr>
                            <th scope="row">{{$project->name}}</th>
                            <td>{{$project->skills}}</td>
                            <td>{{$project->budget}}</td>
                            <td>27/01/2019</td>
                            <td><a class="btn btn-info" href="{{ route('project',$project->id ) }}">View Details</a></td>

                        </tr>

                @endforeach

                </tbody>
            </table>
{{--            {{$projects->links()}}--}}

        </div>
    </div>







    @elseif($services !=NULL && $projects== NULL)
        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row">

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

                </div>
                {{--{{ $services->links() }}--}}
            </div>
        </div>


    @endif

@endsection
