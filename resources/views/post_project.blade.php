@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <h2>Post Your Project</h2>
        {!! Form::open(array('url' => 'post_project/submit')) !!}
            <div class="form-group">
                Form::label('name', 'Name');
                Form::text('name', 'Enter Name');
            </div>
            <div class="form-group">
                Form::label('budget', 'Budget');
                Form::number('budget', 'Enter Amount');
            </div>
            <div class="form-group">
                Form::label('deadline', 'Deadline');
                Form::date('deadline', 'Enter Finish Time');
            </div>
        {!! Form::close() !!}
    </div>

@endsection