@extends('layouts.app')

@section('content')

<div class="container py-5">
    <h2 class="text-center">Post A Service</h2>
    <div class="row justify-content-center py-4">
        <div class="col-md-6">
            <div class="card">
                <article class="card-body">
                <form method="POST" enctype="multipart/form-data" action="{{ route('services.store') }}">
                    {{csrf_field()}}
                    @if(count($errors) > 0)
                        @foreach($errors->all() as $error)
                            <div class="alert alert-danger">
                                {{$error}}
                            </div>
                        @endforeach
                    @endif
                    <div class="form-group">
                        <label for="service_name">Service Name</label>
                        <input type="text" class="form-control" id="service_name" placeholder="Enter your service name" name="service_name">
                    </div>
                    <div class="form-group">
                        <label for="service_description">Description</label>
                        <textarea class="form-control" id="service_description" placeholder="A short description about your service" name="service_description"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="service_rate">Starting Rate</label>
                        <input type="number" class="form-control" id="service_rate" name="service_rate" placeholder="ex: 1000 BDT">
                    </div>
                    <div class="form-group">
                        <label for="category">Your Skills</label>
                        <select name="category" class="form-control">

                            @if($categories)
                                @foreach($categories as $category)
                                    <option value="{{ $category->name }}">{{ $category->name }}</option>
                                @endforeach
                            @endif
                        </select>
                        {{--<textarea class="form-control" id="category" name="category" placeholder="Multiple skills are separated by comma"></textarea>--}}
                    </div>
                    <div class="form-group">
                        <label for="category">Finish Within</label>
                        <input type="number" class="form-control" id="service_finish_time" name="service_finish_time" placeholder="in days">
                    </div>
                    <div class="form-group">
                        <input type="file" id="imageUpload" class="form-control" name="imageUpload">
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