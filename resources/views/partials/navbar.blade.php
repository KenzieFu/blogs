<header class="">
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand ml-5" href="/index">
                <h2>AllT Blog<em>.</em></h2>
            </a>
            @if(Auth::check())
            @if(auth()->user()->level == "admin")
        <ul class="navbar-nav ml-3">
            <li class="nav-item">
                <a class="nav-link" href="/admin-panel">Admin</a>
            </li></ul>
            @endif
        @endif
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse mr-5" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <form class="form-inline my-2 my-lg-0" method="POST" action="{{ route('search') }}">
                        @csrf
                        <input class="form-control mr-sm-2" name="keywords" type="search" placeholder="Search"
                            aria-label="Search">
                    </form>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('createpost') }}">Create Post
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    {{-- Categories --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-expanded="false">
                            Categories
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @foreach($categories as $category)
                            <a class="dropdown-item" href="/searchcate/{{ $category->id }}">{{ $category->name }}</a>
                            @endforeach
                        </div>
                    </li>
                    {{-- End Categories --}}
                    @guest
                    @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @endif
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="/about/{{ auth()->user()->id }}">My Blogs</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                            <a class="dropdown-item text-center" href="/profile">Profile</a>
                            <div class="dropdown-divider"></div>
                            <form class="dropdown-item text-center" id="logout-form" action="{{ route('logout') }}"
                                method="POST" class="d-none">
                                @csrf
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                            </form>
                        </div>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
</header>
