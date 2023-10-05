<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Crea</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Ciao {{Auth::user()->name ?? 'Ospite'}}
                    </a>
                    <ul class="dropdown-menu">
                        @guest
                            
                        <li><a class="dropdown-item" href="{{route('login')}}">Accedi</a></li>
                        <li><a class="dropdown-item" href="{{route('register')}}">Registrati</a></li>
                        @endguest
                        <li><a class="dropdown-item" href="{{route('hub.login')}}">Admin</a></li>
                        @auth
                            <li>
                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Logout</button>
                                </form>
                            </li>
                        @endauth
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{route('formUpdateInfo')}}" class="nav-link">Aggiorna info</a>
                </li>
            </ul>
            <form method="GET" action="{{route('searchProducts')}}" class="d-flex" role="search">
                @csrf
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
