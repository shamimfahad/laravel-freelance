@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h2 class="text-center">Post Your Project</h2>
        <div class="row justify-content-center py-4">
            <div class="col-md-6">
                <div class="card">
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
                                <label for="project_deadline">Project Deadline</label>
                                <input type="datepicker" class="datepicker border-dark" data-date-format="mm/dd/yyyy" style="padding-left: 10px;" placeholder="Click Here" name="project_deadline"/>
                            </div>
                            <div class="text-center">
                            <button type="submit" class="btn btn-outline-success text-center">Submit</button>
                            </div>
                        </form>
                    </article>
                    <br>
            <!-- card-body end .// -->
        </div>
    </div>

@endsection