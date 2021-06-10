<nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
        <form class="d-flex">
            <input
                class="form-control me-2"
                type="search"
                placeholder="Search"
                aria-label="Search"
            />
            <button class="btn btn-outline-success" type="submit">
                Search
            </button>
        </form>
    </div>
</nav>

@include('components.drawer')

<nav
    class="navbar navbar-expand-md navbar-dark bg-primary shadow-sm sticky-top"
>
    <div class="container">
        <i class="fas fa-bars"></i>

        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config("app.name", "Laravel") }}
        </a>

        <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="{{ __('Toggle navigation') }}"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto"></ul>

            <!-- Right Side Of Navbar -->

            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest @if (Route::has('login'))
                <li class="nav-item">
                    <a
                        class="nav-link"
                        href="{{ route('login', App::getLocale() ) }}"
                    >
                        {{ __("Login") }}
                    </a>
                </li>
                @endif @if (Route::has('register'))
                <li class="nav-item">
                    <a
                        class="nav-link"
                        href="{{ route('register', App::getLocale()) }}"
                    >
                        {{ __("Register") }}
                    </a>
                </li>

                @endif @else

                <li class="nav-item dropdown">
                    <a
                        id="navbarDropdown"
                        class="nav-link dropdown-toggle"
                        href="#"
                        role="button"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                        v-pre
                    >
                        {{ Auth::user()->name }}
                    </a>
                    <a
                        class="dropdown-item"
                        href="{{ route('logout', App::getLocale()) }}"
                        onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();"
                    >
                        {{ __("Logout") }}
                    </a>

                    <div
                        class="dropdown-menu dropdown-menu-right"
                        aria-labelledby="navbarDropdown"
                    >
                        <form
                            id="logout-form"
                            action="{{ route('logout', App::getLocale()) }}"
                            method="POST"
                            class="d-none"
                        >
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest
            </ul>

            @include('components.lang_switcher')
        </div>
    </div>
</nav>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar w/ text</a>
        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarText"
            aria-controls="navbarText"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#"
                        >Home</a
                    >
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
            </ul>
            <span class="navbar-text">
                Navbar text with an inline element
            </span>
        </div>
    </div>
</nav>
