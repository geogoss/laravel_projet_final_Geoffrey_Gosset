@extends('layouts.appBack')
@section('contentBack')
    @include('layouts.flash')
    <h1 class="text-center bg-success text-white">Vous êtes bien dans le back <span class="text-warning">About Us</span> et <span class="text-warning">Contact</span></h1>
    @include('partials.backoffice.backNavbar')
    @include('partials.backoffice.backAfficheAbout')
    @include('partials.backoffice.backAfficheTeam')

@endsection
