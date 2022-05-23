{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}

@extends('layouts.appBack')
@section('contentBack')
    <p class="text-center my-5 display-5 mt-5">Bienvenue dans le Dashboard</p>
    <p class="text-center my-5 fs-2">Choisissez la partie du site pour laquelle vous souhaitez apporter des modifications</p>
    @include('partials.backoffice.backNavbar')
    
    <div class="w-100 bg-success mx-auto">

        @include('partials.backoffice.cardDashboard')
    </div>
@endsection
