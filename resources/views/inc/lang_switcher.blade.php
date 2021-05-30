<div class="dropdown">
    <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
        @if (App::getLocale() === 'fr')
        <a href="{{ route(Route::currentRouteName() , 'fr') }}"> 
          FR  <img
            src="https://picsum.photos/20/20"
            class="d-block "
            alt="photo"
        />
        </a> 
        @elseif (App::getLocale() === 'en')
        <a href="{{ route(Route::currentRouteName() , 'en') }}">EN <img
            src="https://picsum.photos/20/21"
            class="d-block "
            alt="photo"
        />
        </a>
        @else
        <a href="{{ route(Route::currentRouteName() , 'ar') }}">AR <img
            src="https://picsum.photos/20/22"
            class="d-block "
            alt="photo"
        />
        </a>
        @endif
    </button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
      <li><a class="dropdown-item"  href="{{ route(Route::currentRouteName() , 'ar') }}">  AR <img
        src="https://picsum.photos/20/20"
        class="d-block "
        alt="photo"
    />
    </a> </li>
      <li><a class="dropdown-item"  href="{{ route(Route::currentRouteName() , 'en') }}">EN<img
        src="https://picsum.photos/20/21"
        class="d-block "
        alt="photo"
    />
        </a></li>
      <li><a class="dropdown-item"  href="{{ route(Route::currentRouteName() , 'fr') }}">FR<img
        src="https://picsum.photos/20/22"
        class="d-block "
        alt="photo"
    />
    </a></li>
    </ul>
  </div>
  
