<nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
    <ol class="breadcrumb my-3">
        <li
            class="breadcrumb-item {{App::isLocale('ar') ? 'breadcrumb-item_ar' : 'breadcrumb-item_fr'}} b-danger"
        >
            <a
                class="text-decoration-none text-secondary mx-1"
                href="{{route('welcome', App::getLocale())}}"
                ><i class="fas fa-home"></i
            ></a>
        </li>
        <li
            class="breadcrumb-item b-primary {{App::isLocale('ar') ? 'breadcrumb-item_ar' : 'breadcrumb-item_fr'}} "
        >
            <a class="text-decoration-none text-secondary" href="#">{{
                __($data["level1"])
            }}</a>
        </li>
        <li
            class=" {{
                $data['level2'] ?? 'd-none'
            }} breadcrumb-item active b-success {{App::isLocale('ar') ? 'breadcrumb-item_ar' : 'breadcrumb-item_fr'}} "
            aria-current="page"
        >
            {{ __($data["level2"]) }}
        </li>
    </ol>
</nav>
