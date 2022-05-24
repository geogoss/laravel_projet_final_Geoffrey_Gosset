@extends('layouts.appUser')
@section('content')
    @include('partials.home.mobileHeader')
    @include('partials.home.headerHome')
    @include('partials.home.mobileMenuHome')
    @include('partials.home.sliderBanner')
    @include('partials.home.sidebarHome')
    @include('partials.home.productHome')
    @include('partials.home.blogareaHome')
    @include('partials.home.subscriveHome')
    @include('partials.home.footerHome')
    {{-- @include('partials.home.quickviewProductHome') --}}
@endsection