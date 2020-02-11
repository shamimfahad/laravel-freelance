@extends('layouts.app')

@section('content')
        <div class="page-header text-center padding">
            <p>Need something done?</p>
            <a class="btn btn-info" href="{{ route('post_project') }}">Post a project</a>
            <br>
        </div>

    <div class="justify-content-center padding text-center">
        <h3 class="text-center" style="">Services Offerd By Freelancers</h3>
        @include('inc.album');
    </div>
    <!-- Recent Projects-->
    <div class="row justify-content-center padding">
        <div class="col-md-8 text-center">
            <h1 class="display-2">Recent Posted Projects</h1>
            <br>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Project Title</th>
                    <th><div class="dropdown">
                            <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Category
                                <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                @if($categories)
                                @foreach($categories as $category)
                                <li><a tabindex="-1" href="#">{{$category->name}}</a></li>
                                @endforeach
                                @endif
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
                    <td><a class="btn btn-info" href="{{ route('project',$project->id ) }}">View Details</a></td>
                </tr>

                @endforeach
                @endif

                </tbody>
            </table>
            <div>
                <a href="{{route('projects')}}" class="btn btn-outline-primary">View All Projects</a>
            </div>
        </div>
    </div>

@endsection