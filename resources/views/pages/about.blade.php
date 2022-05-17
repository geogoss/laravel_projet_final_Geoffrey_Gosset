@extends('layouts.appShop')
@section('contentShop')
    {{-- 2 partials récupéré de la page shop --}}
    @include('partials.shop.headerShop')
    @include('partials.shop.mobilemenuShop')

    @include('partials.about.headingbannerAbout')
    @include('partials.about.aboutAbout')
    @include('partials.about.teamAbout')

    {{-- 2 partials récupéré de la page shop --}}
    @include('partials.shop.footerShop')
    @include('partials.shop.quickviewProductShop')
@endsection
