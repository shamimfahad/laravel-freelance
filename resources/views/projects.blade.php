@extends('layouts.app')

@section('content')
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
                            <td>{{$project->skills}}</td>
                            <td>{{$project->budget}}</td>
                            <td>27/01/2019</td>
                            <td><a class="btn btn-info" href="{{ route('project',$project->id ) }}">View Details</a></td>
                        </tr>
                    @endforeach

                @endif
                </tbody>
            </table>
            {{ $projects->links() }}
        </div>
    </div>

@endsection