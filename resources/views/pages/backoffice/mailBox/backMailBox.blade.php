@extends('layouts.appBack')
@section('contentBack')
    <h1 class="text-center bg-success text-white">Vous êtes bien de le back <span class="text-warning">Mail Box</span></h1>
    @include('partials.backoffice.backNavbar')
    @include('partials.backoffice.backAfficheMailBox')
@endsection
