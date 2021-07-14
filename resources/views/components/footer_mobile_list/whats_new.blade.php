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
        data-bs-target="#decorations"
        aria-expanded="false"
    >
        <i class="fab fa-centercode text-info fa-1x mx-2"></i>
        <span> {{ __("WHAT'S NEW ?") }}</span>
        <i
            class=" fas  mx-2 {{App::isLocale('ar') ? ' fa-chevron-left' : ' fa-chevron-right'}} "
        ></i>
    </a>

    <div
        class="collapse {{App::isLocale('ar') ? 'me-4' : 'ms-5'}} "
        id="decorations"
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
                    data-bs-target="#decorations-level-two-0"
                    aria-expanded="false"
                >
                    <span class="fw-light text-sm">
                        {{ __("Bestsellers") }}</span
                    >
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
                    data-bs-target="#decorations-level-two-1"
                    aria-expanded="false"
                >
                    <span class="fw-light text-sm">{{
                        __("New products")
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
                    data-bs-target="#decorations-level-two-2"
                    aria-expanded="false"
                >
                    <span class="fw-light text-sm">{{ __("Promotions") }}</span>
                </a>
            </li>
        </ul>
    </div>
</li>
