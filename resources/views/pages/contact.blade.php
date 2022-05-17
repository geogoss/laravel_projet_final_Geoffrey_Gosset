@extends('layouts.appShop')
@section('contentShop')

    @include('partials.contact.headingbannerContact')
    @include('partials.contact.contactContact')


    {{-- ajout du script manquant pour la page contact --}}
    @include('partials.contact.scriptContact')
@endsection
