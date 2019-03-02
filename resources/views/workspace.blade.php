@extends('layouts.app')

@section('content')

    <div class="row justify-content-center container-fluid">
        <div class="col-md-10">
            <div class="card">
                <article class="card-body">
                    <div>
                        <h5>Project Name</h5>
                        <hr>
                    </div>
                    <div class="row" style="">
                        <div class="col-md-4 text-center">
                            <h6>Winning Bid</h6>
                            <hr>
                            <p>2000 BDT</p>
                        </div>
                        <div class="col-md-4 text-center">
                            <h6>Deadline</h6>
                            <hr>
                            <p>21/02/2019</p>
                        </div>
                        <div class="col-md-4 text-center">
                            <h6>Posted On</h6>
                            <hr>
                            <p><small>08/02/2019</small></p>
                        </div>
                    </div>
                    <div class="text-center">
                        <h3 class="text-center " style=""><kbd>Processing</kbd></h3>
                    </div>
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
            <br>
            <div class="card">
                <article class="card-body">
                    <div class="row text-center">
                        <div class="col-md-8" style="border-right: 1px solid #ccc;">
                            chat box
                        </div>

                        <div class="col-md-4">
                            files
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

@endsection