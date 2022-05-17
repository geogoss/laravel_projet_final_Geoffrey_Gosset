@extends('layouts.appShop')
@section('contentShop')

    {{-- 2 partials créé pour la page single-product -> show d'un product --}}
    @include('partials.showProduct.headingbannerShowProduct')
    @include('partials.showProduct.productShowProduct')

@endsection
