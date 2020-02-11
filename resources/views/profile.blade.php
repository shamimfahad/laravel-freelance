@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons">
    <link rel="stylesgeet" href="https://rawgit.com/creativetimofficial/material-kit/master/assets/css/material-kit.css">
    <link href="{{ asset('css/profile.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="row d-flex justify-content-center">
        @if(Auth::id()== $user->id)
            <div class="profile-page">
                @include('inc.confirmation')
                <div class="page-header header-filter" data-parallax="true" style="background-image:url('/images/{{ $user->profileCover }}');"></div>
                <div class="main main-raised">
                    <div class="profile-content">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 ml-auto mr-auto">
                                    <div class="profile">
                                        <div class="avatar">
                                            <img src="/images/{{ $user->profilePic }}" alt="Circle Image" class="img-raised rounded-circle img-fluid">
                                        </div>
                                        <div class="name">
                                            <h3 class="title">{{ $user->name }}</h3>
                                            <h6>{{ $user->title }}</h6>
                                            <a href="#pablo" class="btn btn-just-icon btn-link btn-dribbble"><i class="fa fa-facebook"></i></a>
                                            <a href="#pablo" class="btn btn-just-icon btn-link btn-twitter"><i class="fa fa-twitter"></i></a>
                                            <a href="#pablo" class="btn btn-just-icon btn-link btn-pinterest"><i class="fa fa-pinterest"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="description text-center">
                                <p>{{ $user->description }}</p>
                            </div>
                            <div class="row">
                                <div class="col-md-6 ml-auto mr-auto">
                                    <div class="profile-tabs">
                                        <ul class="nav nav-pills nav-pills-icons justify-content-center" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" href="#projects" role="tab" data-toggle="tab">
                                                    <i class="material-icons">camera</i>
                                                    Projects
                                                </a>
                                            </li>
                                            @if($user->user_type == 1)
                                            <li class="nav-item">
                                                <a class="nav-link" href="#services" role="tab" data-toggle="tab">
                                                    <i class="material-icons">palette</i>
                                                    Services
                                                </a>
                                            </li>
                                            @endif
                                            <li class="nav-item">
                                                <a class="nav-link" href="#edit" role="tab" data-toggle="tab">
                                                    <i class="material-icons">camera</i>
                                                    Edit Profile
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#balance" role="tab" data-toggle="tab">
                                                    <i class="material-icons">camera</i>
                                                    Balance
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-content tab-space">
                                <div class="tab-pane active text-center gallery" id="projects">
                                    <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th>Project Title</th>
                                            <th><div class="dropdown">
                                                    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Category
                                                        <span class="caret"></span></button>
                                                    <ul class="dropdown-menu">
                                                        <li><a tabindex="-1" href="#">HTML</a></li>
                                                        <li><a tabindex="-1" href="#">CSS</a></li>
                                                        <li class="dropdown-submenu">
                                                            <a class="test" tabindex="-1" href="#">New dropdown <span class="caret"></span></a>
                                                            <ul class="dropdown-menu">
                                                                <li><a tabindex="-1" href="#">2nd level dropdown</a></li>
                                                                <li><a tabindex="-1" href="#">2nd level dropdown</a></li>
                                                                <li class="dropdown-submenu">
                                                                    <a class="test" href="#">Another dropdown <span class="caret"></span></a>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a href="#">3rd level dropdown</a></li>
                                                                        <li><a href="#">3rd level dropdown</a></li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </th>
                                            <th>Budget</th>
                                            <th>Posted On</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if($projects)

                                            @foreach($projects as $project)
                                                <tr>
                                                    <th scope="row">{{$project->name}}</th>
                                                    <td>Logo Design</td>
                                                    <td>{{$project->budget}}</td>
                                                    <td>27/01/2019</td>
                                                    <td><input type="hidden" name="post_id" value={{$project->id}}></td>
                                                    <td><a class="btn btn-info" href="{{ route('project',$project->id ) }}">View Details</a></td>
                                                </tr>

                                            @endforeach
                                        @endif

                                        </tbody>
                                    </table>
                                    {{ $projects->links() }}
                                </div>
                                <div class="tab-pane text-center gallery" id="services">
                                    <div class="row">
                                        @if($services)
                                            @foreach($services as $service)
                                                <div class="col-md-3">
                                                    <div class="card mb-3 shadow-sm">
                                                        <img width="100%" height="175" focusable="false" aria-label="Service Banner" src="/images/{{$service->image}}">
                                                        <div class="card-body">
                                                            <h3 class="card-text">{{ $service->name }}</h3>
                                                            <p class="card-text float-right overflow-auto">{{ $service->budget }} <small>BDT</small></p>
                                                            <p class="card-text overflow-none">{{ $service->description }}</p>
                                                            <div class="d-flex justify-content-between align-items-center">
                                                                <div class="btn-group">
                                                                    <a class="btn btn-sm btn-outline-info" href="{{ route('service',$service->id ) }}">View Details</a>
                                                                </div>
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
                                <div class="tab-pane text-center gallery" id="edit">
                                    <form method="POST" enctype="multipart/form-data" action="{{ route('profile.update',$user->id) }}">
                                            {{csrf_field()}}
                                        @if(count($errors) > 0)
                                            @foreach($errors->all() as $error)
                                                <div class="alert alert-danger">
                                                    {{$error}}
                                                </div>
                                            @endforeach
                                        @endif
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control" id="name" value="{{ $user->name }}" name="name">
                                        </div>
                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <input type="text" class="form-control" id="description" value="{{ $user->description }}" name="description">
                                        </div>
                                        <div class="form-group">
                                            <label for="title">Title</label>
                                            <input type="text" class="form-control" id="title" name="title" value="{{ $user->title }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="profilePic">Upload Profile Picture</label>
                                            <input type="file" id="profilePic" class="form-control" value="{{ $user->profilePic }}" name="profilePic">
                                        </div>
                                        <div class="form-group">
                                            <label for="profilePic">Upload Cover Image</label>
                                            <input type="file" id="profileCover" class="form-control" value="{{ $user->profileCover }}" name="profileCover">
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-outline-success text-center">Submit</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane text-center gallery" id="balance">
                                    <div class="text-center">
                                        <p><b>Your Total Balance: </b> {{ $user->balance }} </p>
                                        @if($user->balance > 0)
                                            <a class="btn btn-outline-secondary" href="#">Cashout</a>
                                        @endif
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>

            </div>
    </div>

    @else

        <div class="profile-page">
        <div class="page-header header-filter" data-parallax="true" style="background-image:url('/img/pc-unsplash.jpg');"></div>
        <div class="main main-raised">
            <div class="profile-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 ml-auto mr-auto">
                            <div class="profile">
                                <div class="avatar">
                                    <img src="/img/team1.png" alt="Circle Image" class="img-raised rounded-circle img-fluid">
                                </div>
                                <div class="name">
                                    <h3 class="title">{{ $user->name }}</h3>
                                    <h6>{{ $user->title }}</h6>
                                    <a href="#pablo" class="btn btn-just-icon btn-link btn-dribbble"><i class="fa fa-facebook"></i></a>
                                    <a href="#pablo" class="btn btn-just-icon btn-link btn-twitter"><i class="fa fa-twitter"></i></a>
                                    <a href="#pablo" class="btn btn-just-icon btn-link btn-pinterest"><i class="fa fa-pinterest"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="description text-center">
                        <p>{{ $user->description }}</p>
                    </div>
                    <div class="row">
                        <div class="col-md-6 ml-auto mr-auto">
                            <div class="profile-tabs">
                                <ul class="nav nav-pills nav-pills-icons justify-content-center" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#projects" role="tab" data-toggle="tab">
                                            <i class="material-icons">camera</i>
                                            Projects
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#services" role="tab" data-toggle="tab">
                                            <i class="material-icons">palette</i>
                                            Services
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="tab-content tab-space">
                        <div class="tab-pane active text-center gallery" id="projects">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>Project Title</th>
                                    <th><div class="dropdown">
                                            <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Category
                                                <span class="caret"></span></button>
                                            <ul class="dropdown-menu">
                                                <li><a tabindex="-1" href="#">HTML</a></li>
                                                <li><a tabindex="-1" href="#">CSS</a></li>
                                                <li class="dropdown-submenu">
                                                    <a class="test" tabindex="-1" href="#">New dropdown <span class="caret"></span></a>
                                                    <ul class="dropdown-menu">
                                                        <li><a tabindex="-1" href="#">2nd level dropdown</a></li>
                                                        <li><a tabindex="-1" href="#">2nd level dropdown</a></li>
                                                        <li class="dropdown-submenu">
                                                            <a class="test" href="#">Another dropdown <span class="caret"></span></a>
                                                            <ul class="dropdown-menu">
                                                                <li><a href="#">3rd level dropdown</a></li>
                                                                <li><a href="#">3rd level dropdown</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </th>
                                    <th>Budget</th>
                                    <th>Posted On</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($projects)

                                    @foreach($projects as $project)
                                        <tr>
                                            <th scope="row">{{$project->name}}</th>
                                            <td>Logo Design</td>
                                            <td>{{$project->budget}}</td>
                                            <td>27/01/2019</td>
                                            <td><input type="hidden" name="post_id" value={{$project->id}}></td>
                                            <td><a class="btn btn-info" href="{{ route('project',$project->id ) }}">View Details</a></td>
                                        </tr>

                                    @endforeach
                                @endif

                                </tbody>
                            </table>
                            {{ $projects->links() }}
                        </div>
                        <div class="tab-pane text-center gallery" id="services">
                            <div class="row">
                                @if($services)
                                    @foreach($services as $service)
                                        <div class="col-md-3">
                                            <div class="card mb-3 shadow-sm">
                                                <img width="100%" height="175" focusable="false" aria-label="Service Banner" src="/images/{{$service->image}}">
                                                <div class="card-body">
                                                    <h3 class="card-text">{{ $service->name }}</h3>
                                                    <p class="card-text float-right overflow-auto">{{ $service->budget }} <small>BDT</small></p>
                                                    <p class="card-text overflow-none">{{ $service->description }}</p>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="btn-group">
                                                            <a class="btn btn-sm btn-outline-info" href="{{ route('service',$service->id ) }}">View Details</a>
                                                        </div>
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


                </div>
            </div>
        </div>

        </div>

    @endif


@endsection
@section('js')
    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
@endsection