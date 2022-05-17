@extends('layouts.appShop')
@section('contentShop')
    {{-- 2 partials récupéré de la page shop --}}
    @include('partials.shop.headerShop')
    @include('partials.shop.mobilemenuShop')

    @include('partials.contact.headingbannerContact')
    @include('partials.contact.contactContact')

    {{-- 2 partials récupéré de la page shop --}}
    @include('partials.shop.footerShop')
    @include('partials.shop.quickviewProductShop')

    {{-- ajout du script manquant pour la page contact --}}
    @include('partials.contact.scriptContact')
@endsection
