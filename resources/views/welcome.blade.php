@extends('layouts.app') @section('content')
<div class="row justify-content-center">
    <div class="col-md-12">@include('inc.carousel')</div>
</div>
{{-- test de paiement --}}
<h2>
    <a href="{{ route('paiement.notification', App::getLocale()) }}">
        {{ __("Paiement") }} notification
    </a>
</h2>
<h2>
    <a href="{{ route('paiement.erreur', App::getLocale()) }}">
        {{ __("Paiement") }} erreur
    </a>
</h2>
<h2>
    <a href="{{ route('paiement.reussi', App::getLocale()) }}">
        {{ __("Paiement") }} reussi
    </a>
</h2>
<h2>
    <a href="{{ route('paiement.details', App::getLocale()) }}">
        {{ __("Paiement") }} details
    </a>
</h2>
<h2>
    <a href="{{ route('commande.details', App::getLocale()) }}">
        commande details via only one controller
    </a>
</h2>
<h1 id="logo">logo animation</h1>
@php $collection=[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15] @endphp
<div class="album py-5 bg-light">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-5 g-3">
            @foreach ($collection as $item)
            <div class="col">
                <div class="card shadow-sm">
                    {{-- ratio image change 1300/900
                    ratio image change 1800/900 --}}
                    <img
                        src="https://picsum.photos/1300/902"
                        class="d-block w-100"
                        alt="..."
                    />
                    <div class="card-body">
                        <small class="card-text">1235.345 TND.</small>
                        <small class="card-text">34%</small>
                        <small class="card-text"
                            >This content is a littlis a little bit
                            longer</small
                        >
                        <div
                            class="
                                d-flex
                                justify-content-between
                                align-items-center
                            "
                        >
                            <div class="btn-group">
                                <button
                                    type="button"
                                    class="btn btn-sm btn-outline-secondary"
                                >
                                    View
                                </button>
                                <button
                                    type="button"
                                    class="btn btn-sm btn-outline-secondary"
                                >
                                    Edit
                                </button>
                            </div>
                            <small class="text-muted">9 mins</small>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

{{-- choose gsap
https://codepen.io/mikeK/pen/rNLBKYX
--}}
@endsection
