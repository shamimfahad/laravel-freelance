@extends('layouts.app')

@section('content')
    <div class="row justify-content-center padding">
        <div class="col-md-8 text-center">
            <h1 class="display-4">My Projects</h1>
            <br>
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
        </div>
    </div>


@endsection