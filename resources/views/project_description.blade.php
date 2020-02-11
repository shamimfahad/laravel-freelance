@extends('layouts.app')
@section('content')
    <div class="row justify-content-center container-fluid">
        <div class="col-md-10">
            <div class="page-header text-center">
                <h1>{{ $project->name }}</h1>
            </div>
            <br>

            <div class="card">
                <article class="card-body">
                    <div class="row text-center">
                        <div class="col-md-3">
                            <h4>Budget</h4>
                            <p>{{ $project->budget }}</p>
                        </div>
                        <div class="col-md-3">
                            <h4>Category</h4>
                            <p>Web Design</p>
                        </div>
                        <div class="col-md-3">
                            <h4>Bids</h4>
                            <p>{{$count}}</p>
                        </div>
                        <div class="col-md-3">
                            <small>Posted on 27/01/19</small><br>
                            {{--<a class="btn btn-info" href="{{ route('bidOnProject' ) }}">Bid</a>--}}
                            {{--<button type="submit" class="btn btn-info align-bottom">Bid</button>--}}
                        </div>
                    </div>
                </article>
                <!-- card-body end .// -->
            </div>
            <!-- card.// -->
        </div>
        <!-- col.//-->

    </div>
    <br>

    @unless(Auth::id()==$project->user_id)
    <div>
        <div class="col-md-6 mr-auto">
            <div class="card">
                <article class="card-body">
                    <form method="POST" action="{{ route('bids.store') }}">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="bidamount">Amount</label>
                            <input type="number" class="form-control" id="bidamount" placeholder="Enter amount" name="bidamount">
                        </div>
                        <div class="form-group">
                            <label for="finishtime">Finish Within</label>
                            <input type="number" class="form-control" id="finishtime" placeholder="Enter days" name="finishtime">
                        </div>

                        <input type="hidden" name="project_id" value="{!! $project->id !!}">

                            <?php
                             if (empty($bids)){
                                 ?>
                                    <button type="submit" class="btn btn-info">Bid</button>
                        <?php
                             }
                             else
                                 echo "You have already bidded on this project";
                            ?>
                    </form>
                </article>
                <!-- card-body end .// -->
            </div>
            <!-- card.// -->
        </div>
    </div>
    @endunless

    <div class="row justify-content-center container-fluid">
        <div class="col-md-10">
            <div class="card">
                <article class="card-body">
                    <div>
                        <h5>Project Description</h5>
                        <hr>
                        <p>{{ $project->description }}</p>
                    </div>
                    <br>
                    <div class="">
                        <h5>Skills Required</h5>
                        <hr>
                        <p style="word-spacing: 10px;">
                            <a href="#">Web Design</a>
                            <a href="#">Html</a>
                            <a href="#">CSS</a>
                            <a href="#">Wordpress</a>
                        </p>
                    </div>
                    <br>
                    <div class="">
                        <h5>Employer Information</h5>
                        <hr>
                        <div class="row">
                            <div class="col-xs-8 col-sm-4 col-md-2">
                                <img src="img/team1.png" class="img-fluid">
                            </div>
                            <div class="col-xs-8 col-sm-8 col-md-4">
                                <h5 class="text-center">Employers Name</h5>
                                <footer class="blockquote-footer padding">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                                </footer>
                            </div>
                            <div class="col-xs-8 col-sm-8 col-md-4">
                                <h5 class="text-center">Employers Information</h5>
                                <p class="text-center">2 Project(s) Posted</p>
                                <p class="text-center">Hired 2 Freelancers</p>
                            </div>
                            <div class="col-xs-8 col-sm-4 col-md-2">
                                <div class="text-center">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                                <br>
                                <div>
                                    <p class="text-center"><small>Member since 01/03/2018</small></p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <br>
                </article>
                <!-- card-body end .// -->
            </div>
            <!-- card.// -->
        </div>
        <!-- col.//-->

    </div>

    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="page-header text-center">
                <h1>Bids On This Project </h1>
            </div>
            <br>

            @if($project->user_id == Auth::id())

            <div class="card">
                <article class="card-body">
                    <table class="table text-center">
                        <thead>
                        <tr>
                            <th> </th>
                            <th>Name</th>
                            <th>Info</th>
                            <th>Bid</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($bidder as $bid)
                        <tr>
                            <th scope="row"><img src="img/team1.png" class="img-fluid" style="vertical-align: bottom; height: 90px; width: 140px;"></th>
                            <td style="">{{$bid->user->name}}</td>
                            <td><div class="">
                                    <div class="text-center">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                    <br>
                                    <div>
                                        <p class="text-center"><small>Member since {{$bid->user->created_at->toFormattedDateString()}}</small></p>
                                    </div>
                                </div></td>
                            <td>{{$bid->amount}}<br><small>in {{$bid->finish_time}} days</small></td>
                            @if($bid->accepted == 0)


                            <td><a href="{{route('bid.accept',['id'=>$bid->id])}}" class="btn btn-primary">Accept</a> </td>



                                @else
                                <td><a href="{{route('workspace',['id'=>$bid->id])}}" class="btn btn-primary">Workspace</a> </td>
                                <input type="hidden" value="">


                                @endif
                        </tr>

                            @endforeach


                        </tbody>
                    </table>
                </article>
                <!-- card-body end .// -->
            </div>
            @else
                <div class="card">
                    <article class="card-body">
                        <table class="table text-center">
                            <thead>
                            <tr>
                                <th> </th>
                                <th>Name</th>
                                <th>Info</th>
                                <th>Bid</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($bidder as $bid)
                                <tr>
                                    <th scope="row"><img src="img/team1.png" class="img-fluid" style="vertical-align: bottom; height: 90px; width: 140px;"></th>
                                    <td style="">{{$bid->user->name}}</td>
                                    <td><div class="">
                                            <div class="text-center">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                            </div>
                                            <br>
                                            <div>
                                                <p class="text-center"><small>Member since {{$bid->user->created_at->toFormattedDateString()}}</small></p>
                                            </div>
                                        </div></td>
                                    <td>{{$bid->amount}}<br><small>in {{$bid->finish_time}} days</small></td>
                                    @if($bid->accepted == 0)


                                        <td><a href="#{{--{{route('bid.accept',['id'=>$bid->id])}}--}}" class="btn btn-primary">view details</a> </td>



                                    @else
                                        <td><a href="{{route('workspace',['id'=>$bid->id])}}" class="btn btn-primary">Workspace</a> </td>


                                    @endif
                                </tr>

                            @endforeach


                            </tbody>
                        </table>
                    </article>
                    <!-- card-body end .// -->
                </div>
            @endif
            <!-- card.// -->
        </div>
        <!-- col.//-->

    </div>
    <br>


    <div class="row justify-content-center container-fluid">
        <div class="col-md-10">
            <div class="card">
                <article class="card-body">
                    <div class="row" style="">
                        <div class="col text-center">
                            <h5>Find Out Thousands of More Projects</h5>
                        </div>
                        <div class="col text-center">
                            <button class="btn btn-primary">View More</button>
                        </div>
                    </div>
                </article>
                <!-- card-body end .// -->
            </div>
            <!-- card.// -->
        </div>
        <!-- col.//-->

    </div>
    <br>

    <br>

@endsection