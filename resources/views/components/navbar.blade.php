<nav class="navbar navbar-light bg-light">
    <div class="container">
        <a href="{{route('devenir.vendeur', App::getLocale())}}" class="h6 text-decoration-none text-warning ms-4">
            <span> <i class="fas fa-star"></i> Devenir vendeur</span>
        </a>
    </div>
</nav>

{{-- header --}}
<nav class="navbar navbar-expand-md navbar-light">
    <div class="container">
        <a class="navbar-brand position-relative" href="{{ route('welcome', App::getLocale()) }}">
            <span class="brand_name">

                {{(App::isLocale('ar') ? 'هيتكوم' : config("app.name", "Laravel"))}}
               
            </span>
            <span
                ><i
                    class="brand_logo fas fa-shopping-cart position-absolute"
                ></i
            ></span>
        </a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div style="margin-left: 242px" class="navbar-nav">
                {{-- form desktop --}}
                <form class="d-flex" action="{{ route('search', App::getLocale() ) }}" method="post">
                    @csrf
                    <div class="input-group">
                        <input
                      
                            type="text"
                            name="search"
                            class="form-control search_input"
                            placeholder="Rechercher des produits"
                            aria-label="Recipient's username"
                            
                        />
                        <button
                            class="btn btn-outline-primary"
                            type="submit"
                           
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
                    href="{{ route('panier', App::getLocale()) }}"
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

<nav class=" navbar navbar-expand-md bg-light sticky-top ">

    <div class="container ">

        <a class="drawer_toggle" href="#">
            <i class="menu_btn fas fa-bars mt-md-2 "></i>
        </a>

        <div  style='min-width: 100%;' class="collapse navbar-collapse  " id="navbarSupportedContent">

            <ul class="navbar-nav mx-auto  gap-3  " >

                {{-- <li class="homme_menu_item nav-item position-relative">
                    <a class="nav-link menu_principal text-capitalize  " href="{{route('welcome', App::getLocale())}}">
                        <i class="fas fa-home"></i>
                    </a>
                </li> --}}

                <li class="homme_menu_item nav-item position-relative ">
                    <a class="nav-link menu_principal text-capitalize " href="#">
                        homme
                    </a>
                    @include('components.mega_menu.homme')
                </li>

                <li class="femme_menu_item nav-item position-relative">
                    <a class="menu_principal nav-link text-capitalize" href="#"
                        >femme</a
                    >
                    @include('components.mega_menu.femme')
                </li>
                <li class="nav-item">
                    <a class="menu_principal nav-link text-capitalize" href="#"
                        >maison</a
                    >
                </li>
                <li class="nav-item">
                    <a class="menu_principal nav-link text-capitalize" href="#"
                        >enfant</a
                    >
                </li>
                <li class="nav-item">
                    <a class="menu_principal nav-link text-capitalize" href="#"
                        >sport</a
                    >
                </li>
                <li class="nav-item">
                    <a class="menu_principal nav-link text-capitalize" href="#"
                        >electromenager</a
                    >
                </li>
            </ul>
        </div>

        {{-- search form mobile --}}
        <div class="navbar-nav w-75 me-3 mx-auto">
            <form class="d-flex d-md-none"  action="{{ route('search', App::getLocale() ) }}" method="post">
               @csrf
                <div class="input-group">
                    <input type="text" class="search_input_mobile form-control"
                            placeholder="Rechercher des produits"
                            aria-label="Recipient's username" />
                    <button  class="btn btn-outline-info" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
</nav>

@include('components.drawer')
