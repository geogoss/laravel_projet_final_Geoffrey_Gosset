@extends('layouts.appShop')
@section('contentShop')
    {{-- 2 partials récupéré de la page shop --}}
    @include('partials.shop.headerShop')
    @include('partials.shop.mobilemenuShop')

    @include('partials.myaccount.headingbannerMyaccount')
    @include('partials.myaccount.myaccountMyaccount')

    {{-- 2 partials récupéré de la page shop --}}
    @include('partials.shop.footerShop')
    {{-- Pas de quickview dans contact, je le laisse en commentaire en attendant --}}
    {{-- @include('partials.shop.quickviewProductShop') --}}

@endsection
