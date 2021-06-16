<aside id="drawer" class="drawer">
    <button type="button" class="close_drawer btn-sm btn-close"></button>
    <h4 class="b-example-divider"><span class="text-primary">Menu</span></h4>
    <div class="border-top my-3 border-primary"></div>
    <div class="flex-shrink-0 ms-3">
        <ul class="list-unstyled ps-0">
            @for ($i = 0; $i < 12; $i++)

            <li class="mb-1">
                <a
                    href="#"
                    class="
                        btn btn-toggle
                        align-items-center
                        btn-sm
                        rounded
                        collapsed
                    "
                    data-bs-toggle="collapse"
                    data-bs-target="#home-collapse{{ $i }}"
                    aria-expanded="false"
                >
                    <i class="fas text-primary fa-folder"></i>
                    <span> Maison</span
                    ><i class="ms-1 fas fa-chevron-right"></i>
                </a>

                <div class="collapse ms-3" id="home-collapse{{ $i }}">
                    <ul
                        class="
                            btn-toggle-nav
                            list-unstyled
                            fw-normal
                            pb-1
                            small
                        "
                    >
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
                                data-bs-target="#nestedhome-collapse{{ $i }}"
                                aria-expanded="false"
                            >
                                <i class="fas text-info fa-folder"></i>
                                <span> Accessoires salle de bain</span
                                ><i class="ms-1 fas fa-chevron-right"></i>
                            </a>
                            <div
                                class="collapse ms-4"
                                id="nestedhome-collapse{{ $i }}"
                            >
                                <ul
                                    class="
                                        btn-toggle-nav
                                        list-unstyled
                                        fw-normal
                                        pb-1
                                        small
                                    "
                                >
                                    <li class="my-2">
                                        <a href="#" class="link-dark rounded">
                                            Vases1</a
                                        >
                                    </li>
                                    <li class="my-2">
                                        <a href="#" class="link-dark rounded"
                                            >Peinture</a
                                        >
                                    </li>
                                    <li class="mt-2">
                                        <a href="#" class="link-dark rounded"
                                            >Joints Accessoires salle de bain</a
                                        >
                                    </li>
                                </ul>
                            </div>
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
                                data-bs-target="#nestedhome-collapse{{ $i }}{{
                                    $i
                                }}"
                                aria-expanded="false"
                            >
                                <span> Decoration2</span
                                ><i class="ms-1 fas fa-chevron-right"></i>
                            </a>
                            <div
                                class="collapse ms-4"
                                id="nestedhome-collapse{{ $i }}{{ $i }}"
                            >
                                <ul
                                    class="
                                        btn-toggle-nav
                                        list-unstyled
                                        fw-normal
                                        pb-1
                                        small
                                    "
                                >
                                    <li class="my-2">
                                        <a href="#" class="link-dark rounded">
                                            Vases1</a
                                        >
                                    </li>
                                    <li class="my-2">
                                        <a href="#" class="link-dark rounded"
                                            >Peinture</a
                                        >
                                    </li>
                                    <li class="mt-2">
                                        <a href="#" class="link-dark rounded"
                                            >Joints Accessoires salle de bain</a
                                        >
                                    </li>
                                </ul>
                            </div>
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
                                data-bs-target="#nestedhome-collapse{{ $i }}{{
                                    $i
                                }}{{ $i }}"
                                aria-expanded="false"
                            >
                                <span> Decoration3</span
                                ><i class="ms-1 fas fa-chevron-right"></i>
                            </a>
                            <div
                                class="collapse ms-4"
                                id="nestedhome-collapse{{ $i }}{{ $i }}{{ $i }}"
                            >
                                <ul
                                    class="
                                        btn-toggle-nav
                                        list-unstyled
                                        fw-normal
                                        pb-1
                                        small
                                    "
                                >
                                    <li class="my-2">
                                        <a href="#" class="link-dark rounded">
                                            Vases1</a
                                        >
                                    </li>
                                    <li class="my-2">
                                        <a href="#" class="link-dark rounded"
                                            >Peinture</a
                                        >
                                    </li>
                                    <li class="mt-2">
                                        <a href="#" class="link-dark rounded"
                                            >Joints Accessoires salle de bain</a
                                        >
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>

            @endfor
        </ul>
    </div>
</aside>
