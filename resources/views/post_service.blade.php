@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <h2 class="text-center">Post Your Service</h2>
        <div class="card row col-lg-6">
            <article class="card-body">
                <form method="POST" action="{{ route('services.store') }}">
                    {{csrf_field()}}
                    @if(count($errors) > 0)
                        @foreach($errors->all() as $error)
                            <div class="alert alert-danger"></div>
                        @endforeach
                    @endif
                    <div class="form-group">
                        <label for="service_name">Service Name</label>
                        <input type="text" class="form-control" id="service_name" placeholder="Enter your service name" name="service_name">
                    </div>
                    <div class="form-group">
                        <label for="service_description">Description</label>
                        <textarea class="form-control" id="service_description" placeholder="A little description about your service" name="service_description"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="service_rate">Starting Rate</label>
                        <input type="number" class="form-control" id="service_rate" name="service_rate" placeholder="ex: 1000 BDT">
                    </div>
                    <div class="form-group">
                        <label for="skills">Your Skills</label>
                        <textarea class="form-control" id="skills" name="skills" placeholder="Multiple skills are separated by comma"></textarea>
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