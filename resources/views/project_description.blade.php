@extends('layouts.app')
@section('content')
    <div class="row justify-content-center container-fluid">
        <div class="col-md-10">
            <div class="page-header text-center">
                <h1>Project Name</h1>
            </div>
            <br>
            <div class="card">
                <article class="card-body">
                    <div class="row text-center">
                        <div class="col-md-3">
                            <h4>Budget</h4>
                            <p>{!! $projects->budget !!}</p>
                        </div>
                        <div class="col-md-3">
                            <h4>Category</h4>
                            <p>Web Design</p>
                        </div>
                        <div class="col-md-3">
                            <h4>Bids</h4>
                            <p>3</p>
                        </div>
                        <div class="col-md-3">
                            <small>Posted on 27/01/19</small><br>
                            <button type="submit" class="btn btn-info align-bottom">Bid</button>
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

    <div class="row justify-content-center container-fluid">
        <div class="col-md-10">
            <div class="card">
                <article class="card-body">
                    <div>
                        <h5>Project Description</h5>
                        <hr>
                        <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</p>
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
                        <tr>
                            <th scope="row"><img src="img/team1.png" class="img-fluid" style="vertical-align: bottom; height: 90px; width: 140px;"></th>
                            <td style="">Employer Name</td>
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
                                        <p class="text-center"><small>Member since 01/03/2018</small></p>
                                    </div>
                                </div></td>
                            <td>2000<br><small>in 5 days</small></td>
                            <td><button type="submit" class="btn btn-info">Visit</button>
                        </tr>

                        <tr>
                            <th scope="row"><img src="img/team1.png" class="img-fluid" style="vertical-align: bottom; height: 100px; width: 150px;"></th>
                            <td style=";">Employer Name</td>
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
                                        <p class="text-center"><small>Member since 01/03/2018</small></p>
                                    </div>
                                </div></td>
                            <td>2000<br><small>in 5 days</small></td>
                            <td><button type="submit" class="btn btn-info">Visit</button>
                        </tr>

                        <tr>
                            <th scope="row"><img src="img/team1.png" class="img-fluid" style="vertical-align: bottom; height: 100px; width: 150px;"></th>
                            <td style="">Employer Name</td>
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
                                        <p class="text-center"><small>Member since 01/03/2018</small></p>
                                    </div>
                                </div></td>
                            <td>2000<br><small>in 5 days</small></td>
                            <td><button type="submit" class="btn btn-info">Visit</button>
                        </tr>
                        </tbody>
                    </table>
                </article>
                <!-- card-body end .// -->
            </div>
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