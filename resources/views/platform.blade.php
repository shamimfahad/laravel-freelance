@extends('layouts.app')
@section('')
@section('content')
    <div class="container-fluid padding">
        <div class="page-header text-center padding">
            <p>Need something done?</p>
            <button type="submit" class="btn btn-info">Post a project</button>
            <br>
        </div>
    </div>
    <div class="container-fluid">
        <div class="page-header padding">
            <h1 class="display-4">Top Rated</h1>
        </div>
        <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="9000">
            <div class="carousel-inner row w-100 mx-auto" role="listbox">
                <div class="carousel-item col-md-3  active">
                    <div class="panel panel-default">
                        <div class="panel-thumbnail">
                            <a href="#" title="image 1" class="thumb">
                                <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=1" alt="slide 1">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item col-md-3 ">
                    <div class="panel panel-default">
                        <div class="panel-thumbnail">
                            <a href="#" title="image 3" class="thumb">
                                <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=2" alt="slide 2">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item col-md-3 ">
                    <div class="panel panel-default">
                        <div class="panel-thumbnail">
                            <a href="#" title="image 4" class="thumb">
                                <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=3" alt="slide 3">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item col-md-3 ">
                    <div class="panel panel-default">
                        <div class="panel-thumbnail">
                            <a href="#" title="image 5" class="thumb">
                                <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=4" alt="slide 4">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item col-md-3 ">
                    <div class="panel panel-default">
                        <div class="panel-thumbnail">
                            <a href="#" title="image 6" class="thumb">
                                <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=5" alt="slide 5">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item col-md-3 ">
                    <div class="panel panel-default">
                        <div class="panel-thumbnail">
                            <a href="#" title="image 7" class="thumb">
                                <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=6" alt="slide 6">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item col-md-3 ">
                    <div class="panel panel-default">
                        <div class="panel-thumbnail">
                            <a href="#" title="image 8" class="thumb">
                                <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=7" alt="slide 7">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item col-md-3  ">
                    <div class="panel panel-default">
                        <div class="panel-thumbnail">
                            <a href="#" title="image 2" class="thumb">
                                <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=8" alt="slide 8">
                            </a>
                        </div>

                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next text-faded" href="#carouselExample" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <br>

    <div class="container-fluid padding">
    </div>
    <div class="container-fluid">
        <div class="page-header padding">
            <h1 class="display-4">Most Recent</h1>
        </div>
        <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="9000">
            <div class="carousel-inner row w-100 mx-auto" role="listbox">
                <div class="carousel-item col-md-3  active">
                    <div class="panel panel-default">
                        <div class="panel-thumbnail">
                            <a href="#" title="image 1" class="thumb">
                                <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=1" alt="slide 1">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item col-md-3 ">
                    <div class="panel panel-default">
                        <div class="panel-thumbnail">
                            <a href="#" title="image 3" class="thumb">
                                <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=2" alt="slide 2">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item col-md-3 ">
                    <div class="panel panel-default">
                        <div class="panel-thumbnail">
                            <a href="#" title="image 4" class="thumb">
                                <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=3" alt="slide 3">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item col-md-3 ">
                    <div class="panel panel-default">
                        <div class="panel-thumbnail">
                            <a href="#" title="image 5" class="thumb">
                                <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=4" alt="slide 4">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item col-md-3 ">
                    <div class="panel panel-default">
                        <div class="panel-thumbnail">
                            <a href="#" title="image 6" class="thumb">
                                <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=5" alt="slide 5">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item col-md-3 ">
                    <div class="panel panel-default">
                        <div class="panel-thumbnail">
                            <a href="#" title="image 7" class="thumb">
                                <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=6" alt="slide 6">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item col-md-3 ">
                    <div class="panel panel-default">
                        <div class="panel-thumbnail">
                            <a href="#" title="image 8" class="thumb">
                                <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=7" alt="slide 7">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item col-md-3  ">
                    <div class="panel panel-default">
                        <div class="panel-thumbnail">
                            <a href="#" title="image 2" class="thumb">
                                <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=8" alt="slide 8">
                            </a>
                        </div>

                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next text-faded" href="#carouselExample" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <br>
    <!-- album -->
    @include('inc.album')

    <!-- Recent Projects-->

    <div class="row justify-content-center padding">
        <div class="col-md-8 text-center">
            <h1 class="display-4">Recent Posted Projects</h1>
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
                <tr>
                    <th scope="row">I will design a logo and create a brand identity for you</th>
                    <td>Logo Design</td>
                    <td>2000</td>
                    <td>27/01/2019</td>
                    <td><button type="submit" class="btn btn-info">View Details</button></td>
                </tr>
                <tr>
                    <th scope="row">I will design a logo and create a brand identity for you</th>
                    <td>Logo Design</td>
                    <td>2000</td>
                    <td>27/01/2019</td>
                    <td><button type="submit" class="btn btn-info">View Details</button></td>
                </tr>
                <tr>
                    <th scope="row">I will design a logo and create a brand identity for you</th>
                    <td>Logo Design</td>
                    <td>2000</td>
                    <td>27/01/2019</td>
                    <td><button type="submit" class="btn btn-info">View Details</button></td>
                </tr>
                <tr>
                    <th scope="row">I will design a logo and create a brand identity for you</th>
                    <td>Logo Design</td>
                    <td>2000</td>
                    <td>27/01/2019</td>
                    <td><button type="submit" class="btn btn-info">View Details</button></td>
                </tr>
                <tr>
                    <th scope="row">I will design a logo and create a brand identity for you</th>
                    <td>Logo Design</td>
                    <td>2000</td>
                    <td>27/01/2019</td>
                    <td><button type="submit" class="btn btn-info">View Details</button></td>
                </tr>
                <tr>
                    <th scope="row">I will design a logo and create a brand identity for you</th>
                    <td>Logo Design</td>
                    <td>2000</td>
                    <td>27/01/2019</td>
                    <td><button type="submit" class="btn btn-info">View Details</button></td>
                </tr>
                <tr>
                    <th scope="row">I will design a logo and create a brand identity for you</th>
                    <td>Logo Design</td>
                    <td>2000</td>
                    <td>27/01/2019</td>
                    <td><button type="submit" class="btn btn-info">View Details</button></td>
                </tr>
                <tr>
                    <th scope="row">I will design a logo and create a brand identity for you</th>
                    <td>Logo Design</td>
                    <td>2000</td>
                    <td>27/01/2019</td>
                    <td><button type="submit" class="btn btn-info">View Details</button></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

@endsection