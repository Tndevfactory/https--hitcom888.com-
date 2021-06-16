<nav class="navbar navbar-light bg-light">
    <div class="container">
        <a href="#" class="h6 text-decoration-none text-warning ms-4">
            <span> <i class="fas fa-star"></i></span>
            <span class="devenir_vendeur">Devenir vendeur</span>
        </a>
    </div>
</nav>

{{-- header --}}
<nav class="navbar navbar-expand-md navbar-light">
    <div class="container">
        <a class="navbar-brand position-relative" href="{{ url('/') }}">
            <span class="brand_name">
                {{ config("app.name", "Laravel") }}
            </span>
            <span
                ><i
                    class="brand_logo fas fa-shopping-cart position-absolute"
                ></i
            ></span>
        </a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div style="margin-left: 242px" class="navbar-nav">
                <form class="d-flex">
                    <div class="input-group">
                        <input
                            style="min-width: 28rem"
                            type="text"
                            class="form-control"
                            placeholder="Rechercher des produits"
                            aria-label="Recipient's username"
                            aria-describedby="button-addon2"
                        />
                        <button
                            class="btn btn-outline-primary"
                            type="button"
                            id="button-addon2"
                        >
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Right Side Of Navbar -->
        <ul
            class="
                navbar-nav
                ml-auto
                gap-3
                flex-row
                justify-content-end
                ms-5
                ps-4
            "
        >
            <!-- Authentication Links -->
            @guest

            <li class="nav-item">
                <a
                    class="btn btn-outline-primary btn-sm"
                    href="{{ route('login', App::getLocale() ) }}"
                >
                    <span class="d-none d-md-inline-flex small"
                        >{{ __("Connexion") }}
                    </span>
                    <span
                        ><i
                            class="fas fa-sign-in-alt d-md-inline-flex small"
                        ></i
                    ></span>
                </a>
            </li>

            @else
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

            {{--Panier--}}
            <li class="panier nav-item">
                <a
                    class="btn btn-primary btn-sm"
                    href="{{ route('register', App::getLocale()) }}"
                >
                    <span
                        ><i class="fas fa-cart-plus d-md-inline-flex small"></i
                    ></span>
                    <span class="d-none d-md-inline-flex small"
                        >1300.678 TND</span
                    >
                </a>
                <span class="panier_counter badge rounded-pill">33</span>
            </li>
        </ul>
        @include('components.lang_switcher')
    </div>
</nav>

{{-- menu desktop  --}}
<div class="container-fluid">
    <nav
        class="
            navbar navbar-expand-md navbar-dark
            bg-primary bg-gradient
            text-light
            shadow-sm
            sticky-top
        "
    >
        <div class="container">
            <a class="drawer_toggle" href="#">
                <span class="navbar-toggler-icon"></span>
            </a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto gap-3">
                    <li class="homme_menu_item nav-item position-relative">
                        <a
                            class="nav-link menu_principal text-capitalize"
                            href="#"
                        >
                            homme
                        </a>
                        @include('components.mega_menu.homme')
                    </li>
                    <li class="femme_menu_item nav-item position-relative">
                        <a
                            class="menu_principal nav-link text-capitalize"
                            href="#"
                            >femme</a
                        >
                        @include('components.mega_menu.femme')
                    </li>
                    <li class="nav-item">
                        <a
                            class="menu_principal nav-link text-capitalize"
                            href="#"
                            >maison</a
                        >
                    </li>
                    <li class="nav-item">
                        <a
                            class="menu_principal nav-link text-capitalize"
                            href="#"
                            >enfant</a
                        >
                    </li>
                    <li class="nav-item">
                        <a
                            class="menu_principal nav-link text-capitalize"
                            href="#"
                            >sport</a
                        >
                    </li>
                    <li class="nav-item">
                        <a
                            class="menu_principal nav-link text-capitalize"
                            href="#"
                            >electromenager</a
                        >
                    </li>
                </ul>
            </div>

            {{-- search form mobile --}}
            <div class="navbar-nav ms-auto">
                <form class="d-flex d-md-none">
                    <div class="input-group">
                        <input
                            type="text"
                            class="form-control"
                            placeholder="Rechercher des produits"
                            aria-label="Recipient's username"
                            aria-describedby="button-addon2"
                        />
                        <button
                            class="btn btn-outline-info"
                            type="button"
                            id="button-addon2"
                        >
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </nav>
</div>
@include('components.drawer')
