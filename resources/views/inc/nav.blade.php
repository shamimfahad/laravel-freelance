<nav class="navbar navbar-expand-md navbar-light bg-light primary-color">
    <a class="navbar-brand" href="/"><img src="img/logoo-small.png"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">

        <form action="{{route('search')}}" method="get" class="form-inline mt-2 mt-md-0  py-0" >
            {{csrf_field()}}
            <input class="form-control mr-sm-2" name="q" type="text" placeholder="Search" aria-label="Search">
            <select name="type" id="" class="form-control">
                <option value="1">Project</option>
                <option value="2">Services</option>
            </select>
            <button class="btn btn-outline-primary btn-sm my-0" type="submit">Search</button>
        </form>
        <ul class="navbar-nav ml-auto">

            <li class="nav-item py-0">
                <a class="nav-link" style="text-decoration-color: #298fe2 !important;" href="/platform">Marketplace</a>
            </li>

            @if(Auth::check())

            <li class="dropdown nav-item py-0">
                <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#">Create Post
                    {{--<span class="caret"></span>--}}</a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" style="font-max-size: 1.1em !important;" href="{{ route('post_project') }}">Post project</a></li>
                    <li><a class="nav-link" href="{{ route('post_service') }}">Post Service</a></li>
                </ul>
            </li>
            <li class="nav-item py-0">
                <a class="nav-link active" href="/profile">{{Auth::user()->name}}</a>

            </li>
            <li class="nav-item py-0">
                <a class="nav-link active" href="{{ route('logout') }}">Logout</a>
            </li>
                @else

                <li class="nav-item py-0">
                    <a class="nav-link active" href="{{ route('login') }}">Login</a>
                </li>
                @endif

        </ul>

    </div>
</nav>
@push('css')

@endpush