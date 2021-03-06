{{-- @include('components.gsap_carousel') --}}
@include('components.process')
<footer id="footerId" class="p-3 mt-3">
    <div class="container">
        <div class="row">
            <div class="col-sm-3 p-3">
                <a
                    class="navbar-brand position-relative"
                    href="{{route('welcome', App::getLocale())}}"
                >
                    <span class="brand_name_footer">
                        {{(App::isLocale('ar') ? 'هيتكوم' : config("app.name", "Laravel"))}}
                    </span>
                    <span>
                        <i
                            class=" {{App::isLocale('ar') ? 'brand_logo_footer_ar' : 'brand_logo_footer_fr'}} fas fa-shopping-cart position-absolute"
                        >
                        </i>
                    </span>
                </a>
                <ul class="list-group">
                    <li class="list-group-item bg-transparent text-dark">
                        <i
                            class="fas phone {{App::isLocale('ar') ? ' fa-phone' : ' fa-phone-alt'}} "
                        ></i>
                        :
                        <span class="ms-1" dir="ltr"> +216 55 385 474</span>
                    </li>
                    <li class="list-group-item bg-transparent">
                        <i class="fas email fa-at"></i> :
                        <a
                            href="mailto:support@hitcom888.com?subject= need information"
                            class="text-decoration-none text-dark ms-1"
                        >
                            support@hitcom888.com
                        </a>
                    </li>
                </ul>
                <div class="d-flex gap-3 justify-content-start ms-3 my-1">
                    <span
                        class="d-flex align-items-center justify-content-center"
                    >
                        <a href="" class="text-decoration-none">
                            <img
                                class="img-fluid facebook_icon"
                                src="{{
                                    asset('/img/social_media/facebook-logo.png')
                                }}"
                                alt=""
                            />
                        </a>
                    </span>
                    <span
                        class="d-flex align-items-center justify-content-center"
                    >
                        <a href="" class="text-decoration-none">
                            <img
                                class="img-fluid instagram_icon"
                                src="{{
                                    asset(
                                        '/img/social_media/instagram-logo.png'
                                    )
                                }}"
                                alt=""
                            />
                        </a>
                    </span>
                    <span
                        class="d-flex align-items-center justify-content-center"
                    >
                        <a href="" class="text-decoration-none">
                            <img
                                class="img-fluid youtube_icon"
                                src="{{
                                    asset('/img/social_media/youtube-logo.png')
                                }}"
                                alt=""
                            />
                        </a>
                    </span>
                </div>
                <div
                    class="
                        d-flex
                        justify-content-start
                        align-items-center
                        mt-md-5
                    "
                >
                    <span
                        class="mt-3  {{App::isLocale('ar') ? 'mx-3' : 'mx-3'}}"
                        >{{ __("Language") }}</span
                    >
                    <span class="mt-3">
                        @include('components.lang_switcher')
                    </span>
                </div>
            </div>

            <div class="col-sm-9 p-3">
                <div class="navbar-nav">
                    <div class="lette_information">{{ __("Newsletter") }}</div>
                    <form class="d-flex">
                        <div class="input-group">
                            <input
                                type="text"
                                class="form-control"
                                placeholder="{{
                                    __(
                                        'Enter your Email to receive all the news'
                                    )
                                }}"
                                aria-label="Recipient's username"
                            />
                            <button class="btn btn-outline-dark" type="button">
                                <i class="far fa-envelope"></i>
                                {{ __("Subscribe") }}
                            </button>
                        </div>
                    </form>
                </div>
                <div
                    class="
                        footer_list
                        my-3
                        justify-content-around
                        d-none d-sm-flex
                    "
                >
                    <ul class="list-group border border-0">
                        <li
                            class="
                                list-group-item
                                border border-0
                                bg-transparent
                                fw-bold
                            "
                        >
                            {{ __("INFORMATIONS") }}
                        </li>
                        <li
                            class="
                                list-group-item
                                border border-0
                                bg-transparent
                            "
                        >
                            <a
                                href="#"
                                class="text-decoration-none small text-muted"
                            >
                                {{ __("FAQ") }}
                            </a>
                        </li>
                        <li class="list-group-item bg-transparent">
                            <a
                                href="#"
                                class="text-decoration-none text-muted small"
                            >
                                {{ __("How to buy from Hitcom") }}
                            </a>
                        </li>
                        <li class="list-group-item bg-transparent">
                            <a
                                href="#"
                                class="text-decoration-none text-muted small"
                            >
                                {{ __("GENERAL SALES CONDITIONS") }}
                            </a>
                        </li>
                    </ul>
                    <ul class="list-group border border-0">
                        <li class="list-group-item bg-transparent fw-bold">
                            {{ __("WHAT'S NEW ?") }}
                        </li>
                        <li class="list-group-item bg-transparent">
                            <a
                                href="#"
                                class="text-decoration-none text-muted small"
                            >
                                {{ __("Bestsellers") }}
                            </a>
                        </li>
                        <li class="list-group-item bg-transparent">
                            <a
                                href="#"
                                class="text-decoration-none text-muted small"
                            >
                                {{ __("New products") }}
                            </a>
                        </li>
                        <li class="list-group-item bg-transparent">
                            <a
                                href="#"
                                class="text-decoration-none text-muted small"
                            >
                                {{ __("Promotions") }}
                            </a>
                        </li>
                    </ul>
                    <ul class="list-group border border-0">
                        <li class="list-group-item bg-transparent fw-bold">
                            {{ __("NEED HELP") }}
                        </li>
                        <li class="list-group-item bg-transparent">
                            <a
                                href="#"
                                class="text-decoration-none text-muted small"
                            >
                                {{ __("My account") }}
                            </a>
                        </li>
                        <li class="list-group-item bg-transparent">
                            <a
                                href="#"
                                class="text-decoration-none text-muted small"
                            >
                                {{ __("Contact us") }}
                            </a>
                        </li>
                        <li class="list-group-item bg-transparent">
                            <a
                                href="#"
                                class="text-decoration-none text-muted small"
                            >
                                {{ __("Sitemap") }}
                            </a>
                        </li>
                    </ul>
                </div>

                <ul class="list-unstyled mt-3 ps-0 d-block d-md-none">
                    @include('components.footer_mobile_list.informations')
                    @include('components.footer_mobile_list.whats_new')
                    @include('components.footer_mobile_list.need_help')
                </ul>
            </div>
        </div>
        <div class="text-center">
            <a
                href="https://tn-devfactory.com"
                target="_blank"
                class="text-decoration-none text-secondary"
            >
                Copyright &copy; Tndev Factory</a
            >
        </div>
    </div>
</footer>
