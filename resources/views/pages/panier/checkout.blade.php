@extends('layouts.appShop')
@section('contentShop')
    {{-- 2 partials récupéré de la page shop --}}
    @include('partials.shop.headerShop')
    @include('partials.shop.mobilemenuShop')

    @include('partials.panier.headingbannerCheckout')
    @include('partials.panier.checkoutareaCheckout')

    {{-- 2 partials récupéré de la page shop --}}
    @include('partials.shop.footerShop')
    @include('partials.shop.quickviewProductShop')
@endsection
