{{--<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="img/outsource-small.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                </form>

                <li class="nav-item">
                    <a class="nav-link" href="/post_project">Post a project</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/platform">Platform</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/freelancers">Freelancers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/profile">Username</a>
                </li>
            </ul>
        </div>
    </div>
</nav>--}}

<nav class="navbar navbar-expand-md navbar-light bg-light">
    <a class="navbar-brand" href="#"><img src="img/outsource-small.png"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">

        <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/post_project">Post a project</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/platform">Platform</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/freelancers">Freelancers</a>
            </li>
            @if(Auth::check())
            <li class="nav-item">
                <a class="nav-link active">{{Auth::user()->name}}</a>

            </li>
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('logout') }}">Logout</a>
            </li>
                @else

                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('login') }}">Login</a>
                </li>
                @endif

        </ul>

    </div>
</nav>
@push('css')

@endpush