<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        @yield('meta')

        <script src="{{ asset('js/gsap.min.js') }}" defer></script>
        <script src="{{ asset('js/popper.min.js') }}" defer></script>

        <script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
        <script src="{{ asset('js/app.js') }}" defer></script>

        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="{{ asset('css/roboto.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/oswald.css') }}" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.gstatic.com" />

        <link rel="dns-prefetch" href="//fonts.gstatic.com" />
        <link
            href="{{ asset('fontawesome5112/css/all.min.css') }}"
            rel="stylesheet"
        />
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />

        <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    </head>

    <body>
        @include('components.navbar')
        <main>@yield('content')</main>
        <!-- @include('components.footer') @stack('scripts')  -->
    </body>
</html>
