    <header>
        <nav class="navbar navbar-expand-lg  bg-success">
            <div class="container rounded bg-success">
                <a class="navbar-brand fw-bold text-danger p-2 border border-3" href="{{ route('home') }}">Bool-Italia</a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item " aria-current="page">
                            <a class="nav-link {{ Route::currentRouteName() === 'home' ? 'active text-danger' : '' }}"  href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Route::currentRouteName() === 'trains' ? 'active text-danger'  : '' }}"  href="{{ route('trains') }}">AllTrains</a>
                        </li>

                    </ul>
                    <form class="d-flex p-2" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-light" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>