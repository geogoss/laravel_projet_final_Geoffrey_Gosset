@extends('layouts.appUser')
@section('content')
    @include('layouts.flash')
    @include('partials.home.mobileHeader')
    @include('partials.shop.headerShop')
    @include('partials.home.mobileMenuHome')
    @include('partials.home.sliderBanner')
    @include('partials.home.sidebarHome')
    @include('partials.home.productHome')
    @include('partials.home.blogareaHome')
    @include('partials.home.subscriveHome')
    @include('partials.home.footerHome')
    {{-- @include('partials.home.quickviewProductHome') --}}
@endsection
