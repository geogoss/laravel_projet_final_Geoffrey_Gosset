@extends('layouts.appShop')
@section('contentShop')
    {{-- 2 partials récupéré de la page shop --}}
    @include('partials.shop.headerShop')
    @include('partials.shop.mobilemenuShop')

    @include('partials.showBlog.headingbannerShowBlog')
    @include('partials.showBlog.blogareaShowBlog')

    {{-- 2 partials récupéré de la page shop --}}
    @include('partials.shop.footerShop')
    @include('partials.shop.quickviewProductShop')
@endsection
