@extends('layouts.appShop')
@section('contentShop')

    @include('partials.myaccount.headingbannerMyaccount')
    @include('partials.myaccount.myaccountMyaccount')

    {{-- Pas de quickview dans contact, je le laisse en commentaire en attendant --}}
    {{-- @include('partials.shop.quickviewProductShop') --}}

@endsection
