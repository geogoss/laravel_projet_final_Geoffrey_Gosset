@extends('layouts.appShop')
@section('contentShop')
    @include('layouts.flash')
    {{-- 2 partials créé pour la page single-product -> show d'un product --}}
    @include('partials.showProduct.headingbannerShowProduct')
    @include('partials.showProduct.productShowProduct')
@endsection
