<div id="lang-switcher" class="dropdown">
    <button
        class="btn dropdown-toggle"
        type="button"
        id="dropdownMenuButton1"
        data-bs-toggle="dropdown"
        aria-expanded="false"
    >
        @if (App::getLocale() === 'fr')
        <a href="{{ route(Route::currentRouteName() , 'fr') }}">
            <div class="lang_box lang_box_fr"></div>
        </a>
        @elseif (App::getLocale() === 'en')
        <a href="{{ route(Route::currentRouteName() , 'en') }}">
            <div class="lang_box lang_box_uk"></div>
        </a>
        @else

        <a href="{{ route(Route::currentRouteName() , 'ar') }}">
            <div class="lang_box lang_box_ar"></div>
        </a>
        @endif
    </button>

    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
        <li>
            <a
                class="dropdown-item"
                href="{{ route(Route::currentRouteName() , 'ar') }}"
            >
                <div class="lang_box lang_box_ar"></div>
                <span class="arabic">العربية</span>
            </a>
        </li>
        <li>
            <a
                class="dropdown-item"
                href="{{ route(Route::currentRouteName() , 'en') }}"
            >
                <div class="lang_box lang_box_uk"></div>
                <span>English</span>
            </a>
        </li>
        <li>
            <a
                class="dropdown-item"
                href="{{ route(Route::currentRouteName() , 'fr') }}"
            >
                <div class="lang_box lang_box_fr"></div>
                <span>Français</span>
            </a>
        </li>
    </ul>
</div>