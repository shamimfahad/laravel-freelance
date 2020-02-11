@extends('layouts.app')

@section('content')

    <div class="row justify-content-center container-fluid">
        <div class="col-md-10">
            <div class="card">
                @include('inc.confirmation')
                <article class="card-body">
                    <div>
                        <h5 class="text-success">{{$workspace->bid->project->name}}</h5>
                        <hr>
                    </div>
                    <div class="row" style="">
                        <div class="col-md-3 text-center">
                            <h6>Winning Bid</h6>
                            <hr>
                            <p>{{$workspace->bid->amount}}<small>BDT</small></p>
                        </div>
                        <div class="col-md-3 text-center">
                            <h6>Deadline</h6>
                            <hr>
                            <small>{{ $deadline }}</small>
                        </div>
                        <div class="col-md-3 text-center">
                            <h6>Posted On</h6>
                            <hr>
                            <p><small>{{ $workspace->bid->project->created_at }}</small></p>
                        </div>
                        <div class="col-md-3 text-center">
                                <h6>Freelancer Assigned at</h6>
                                <hr>
                                <p><small>{{ $workspace->created_at }}</small></p>
                            </div>
                        </div>
                    <div>

                    </div>
                    <div class="row-fluid">

                        <span class="pull-right">
                            <button onclick="showDateForm()">Increase Deadline</button>
                            <form method="POST" action="{{ route('workspace.increaseDeadline',$workspace->id) }}">
                            {{csrf_field()}}
                                <div class="form-group" id="hiddenDateInput" style="display: none;">
                                    <input type="datepicker" class="datepicker" data-date-format="mm/dd/yyyy" name="updated_deadline"/>
                                    {{--<input type="" />--}}
                                    <button type="submit" class="btn-xs btn-info">Update</button>
                                </div>
                            </form>
                        </span>
                        <h3 class="text-center pull-left " style=""><kbd>Processing</kbd></h3>
                    </div>
                    <br>
                    @if(Auth::id() == $workspace->user_id)
                    <div class="text-center">
                        <a href="{{ route('project.done', $workspace->bid->project->id) }}" class="btn btn-success">Mark As Finished</a>
                    </div>
                    @else()

                    @endif
                </article>
                <!-- card-body end .// -->
            </div>
            <!-- card.// -->
        </div>
        <!-- col.//-->

    </div>
    <br>
    <!-- Communication -->
    <div class="row justify-content-center container-fluid">
        <div class="col-md-10">
            <div class="container" id="app">
                <private-chat :user="{{auth()->user()}}"></private-chat>
            </div>
            <!-- card.// -->
        </div>
        <!-- col.//-->

    </div>
    <br>

@endsection
