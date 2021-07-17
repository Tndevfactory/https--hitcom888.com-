<div class="row row-cols-2 row-cols-sm-2 row-cols-md-4 g-3">
    @for ($i = 0; $i < 10; $i++)
    <div class="col">
        <div class="card box_welcome position-relative rounded-3">
            <div class="promo_rate_welcome d-flex justify-content-between">
                <div
                    class="
                        d-md-flex
                        flex-column
                        gap-2
                        justify-content-start
                        align-items-start
                    "
                >
                    <div
                        class="
                            d-flex
                            justify-content-start
                            align-items-start
                            mb-2 mb-md-0
                        "
                    >
                        <span class="promo_text p-1 badge small rounded">{{
                            __("Promotion")
                        }}</span>
                    </div>
                    <div
                        class="d-flex justify-content-start align-items-center"
                    >
                        <span class="nouveau_text p-1 badge rounded">
                            {{ __("New") }}
                        </span>
                    </div>
                </div>

                <div
                    class="
                        promo_percent
                        d-flex
                        justify-content-center
                        align-items-center
                    "
                >
                    <span class="promo_percent_text">25%</span>
                </div>
            </div>

            <div class="overlay_welcome">
                <a
                    href="{{route('produit', App::getLocale())}}"
                    type="button"
                    class="details_welcome btn btn-sm"
                >
                    <span class="d-none d-md-inline-flex"
                        >{{ __("Details") }}
                    </span>
                    <i class="ms-1 far fa-eye"></i>
                </a>

                <button
                    type="button"
                    data-bs-toggle="modal"
                    data-bs-target="#exampleModal{{ $i }}"
                    class="commander_welcome btn btn-sm text-light"
                >
                    <span class="d-none d-md-inline-flex">{{ __("Buy") }}</span>
                    <i class="ms-1 fas fa-cart-plus"></i>
                </button>
            </div>

            <img
                src="{{ asset('/images/p9.jpg') }}"
                class="card-img-top"
                alt="..."
            />

            <div class="card-body position-relative">
                <div
                    class="
                                    name_rate_avis_welcome
                                    d-md-flex
                                    align-items-start
                                      {{App::isLocale('ar') ? ' ' : ' '}}
                                "
                >
                    <div class="product_title_welcome card-title">
                        {{ __("Nike sport shoes") }}
                    </div>

                    <div
                        class="
                            star_avis_welcome
                            d-md-flex
                            justify-content-between
                            align-items-center
                        "
                    >
                        <a
                            href="{{route('rating', App::getLocale())}}"
                            style="font-size: 12px"
                            class="
                                stars
                                ms-2
                                mt-n1
                                d-inline-block
                                text-decoration-none
                            "
                        >
                            <span
                                class="  {{App::isLocale('ar') ? ' me-1 ' : ' '}}   "
                                >(2)</span
                            >

                            @for( $c=0 ; $c < 4; $c++ )

                            <i style="color: #ffba08" class="fas fa-star"></i>

                            @endfor
                        </a>
                    </div>
                </div>

                <span
                    class="
                        product_description_welcome
                        card-text
                        small
                        d-none d-md-block
                    "
                >
                    {{
                        __(
                            "Sport shoes Nike pump best choice for footballers..."
                        )
                    }}
                </span>

                <div class="price_new_old mt-1 d-flex justify-content-between">
                    <a
                        href="#"
                        class="
                                        price_new
                                        btn btn-default btn-sm
                                        small
                                        {{App::isLocale('en') ? ' price_new_en ' : (App::isLocale('fr') ? ' price_new_fr ':  ' price_new_ar ')}} 
                                    "
                        >1370.65</a
                    >

                    <a
                        href="#"
                        class="
                            price_old
                            btn btn-default btn-sm
                            small
                            text-decoration-line-through text-muted
                        "
                        >1470.55</a
                    >
                </div>
            </div>
        </div>
        {{-- end card --}}
    </div>
    {{-- end div on card --}}

    {{-- modal --}}
    <div
        class="modal fade"
        id="exampleModal{{ $i }}"
        tabindex="-1"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true"
    >
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div
                    style="height: 4vh; background-color: #e68f2b"
                    class="modal-header text-light"
                >
                    <h6 class="modal-title" id="exampleModalLabel">
                        <i class="fas fa-cart-arrow-down"></i>
                        Article ajouté à votre panier
                    </h6>
                    <button
                        type="button"
                        class="btn-sm btn-close text-light"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                    ></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-2">
                                <img
                                    src="{{ asset('/images/p9.jpg') }}"
                                    class="img-thumbnail"
                                    alt="..."
                                />
                            </div>
                            <div class="col-md-10">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">Designation</th>
                                            <th scope="col">Quantite</th>
                                            <th scope="col">Prix</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Bracelet</td>
                                            <td>1</td>
                                            <td>120.30</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button
                        type="button"
                        class="continuer_achat btn btn-sm small btn-success"
                        data-bs-dismiss="modal"
                    >
                        Continuer mes achats
                    </button>
                    {{-- to command detail --}}
                    <a
                        href="{{route('panier', App::getLocale())}}"
                        type="button"
                        class="consulter_panier btn btn-sm small btn-primary"
                        >Consulter mon panier</a
                    >
                </div>
            </div>
        </div>
    </div>
    @endfor
</div>
