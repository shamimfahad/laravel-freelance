@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <h2 class="text-center">Post Your Project</h2>
        <div class="card row col-lg-6">
            <article class="card-body">
                <form method="POST" action="{{ route('projects.store') }}">
                    {{csrf_field()}}
                    @if(count($errors) > 0)
                        @foreach($errors->all() as $error)
                            <div class="alert alert-danger">
                                {{$error}}
                            </div>
                        @endforeach
                    @endif
                    <div class="form-group">
                        <label for="project_name">Project Name</label>
                        <input type="text" class="form-control" id="project_name" placeholder="Enter your project name" name="project_name">
                    </div>
                    <div class="form-group">
                        <label for="project_description">Description</label>
                        <textarea class="form-control" id="project_description" placeholder="A little description about your project" name="project_description"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="project_budget">Budget</label>
                        <input type="number" class="form-control" id="project_budget" name="project_budget" placeholder="ex: 1000 BDT">
                    </div>
                    <div class="form-group">
                        <label for="skills">Required Skills</label>
                        <textarea class="form-control" id="skills" name="skills" placeholder="Multiple skills are separated by comma"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="datepicker">Project Deadline</label>
                        <input type="text" id="datepicker">
                        <script>
                            $( function() {
                                $( "#datepicker" ).datepicker();
                            } );
                        </script>
                    </div>


                    <div class="text-center">
                    <button type="submit" class="btn btn-outline-success text-center">Submit</button>
                    </div>
                </form>
            </article>
            <!-- card-body end .// -->

        </div>
    </div>

@endsection