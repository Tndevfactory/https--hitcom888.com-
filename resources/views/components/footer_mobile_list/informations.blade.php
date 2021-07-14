<li class="mb-1">
    <a
        href="#"
        class="
            btn_level_one btn btn-toggle
            align-items-center
            btn-sm
            rounded
            collapsed
        "
        data-bs-toggle="collapse"
        data-bs-target="#jewellery"
        aria-expanded="false"
    >
        <i class="fab fa-chrome text-info fa-1x mx-2"></i>

        <span> {{ __("INFORMATIONS") }}</span>
        <i
            class=" fas  mx-2 {{App::isLocale('ar') ? ' fa-chevron-left' : ' fa-chevron-right'}} "
        ></i>
    </a>

    <div
        class="collapse {{App::isLocale('ar') ? 'me-4' : 'ms-5'}} "
        id="jewellery"
    >
        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li class="my-2">
                <a
                    href="#"
                    class="
                        btn_level_two btn btn-toggle btn-sm
                        align-items-center
                        rounded
                        collapsed
                    "
                    data-bs-toggle="collapse"
                    data-bs-target="#jewellery-level-two-0"
                    aria-expanded="false"
                >
                    <span class="fw-light text-sm"> {{ __("FAQ") }}</span>
                </a>
            </li>

            <li class="my-2">
                <a
                    href="#"
                    class="
                        btn btn-toggle btn-sm
                        align-items-center
                        rounded
                        collapsed
                    "
                    data-bs-toggle="collapse"
                    data-bs-target="#jewellery-level-two-1"
                    aria-expanded="false"
                >
                    <span class="fw-light text-sm">{{
                        __("How to buy from Hitcom")
                    }}</span>
                </a>
            </li>

            <li class="mt-2">
                <a
                    href="#"
                    class="
                        btn btn-toggle btn-sm
                        align-items-center
                        rounded
                        collapsed
                    "
                    data-bs-toggle="collapse"
                    data-bs-target="#jewellery-level-two-2"
                    aria-expanded="false"
                >
                    <span class="fw-light text-sm">{{
                        __("GENERAL SALES CONDITIONS")
                    }}</span>
                </a>
            </li>
        </ul>
    </div>
</li>
