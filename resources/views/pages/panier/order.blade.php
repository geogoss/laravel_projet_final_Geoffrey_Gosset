@extends('layouts.appShop')
@section('contentShop')
    {{-- 2 partials récupérés de la page shop --}}
    @include('partials.shop.headerShop')
    @include('partials.shop.mobilemenuShop')

    @include('partials.panier.headingbannerOrder')
    @include('partials.panier.orderareaOrder')

    {{-- 2 partials récupérés de la page shop --}}
    @include('partials.shop.footerShop')
    @include('partials.shop.quickviewProductShop')
@endsection
