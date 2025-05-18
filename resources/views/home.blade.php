@extends('layouts.app')

@section('title', 'Ecoride - Covoiturage Écologique')

@push('styles')
    <!-- Ajout de Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
@endpush

@section('content')
    <!-- =====================
         PAGE ACCUEIL
    ====================== -->
    @include('components.home.hero')
    @include('components.home.voiture')
    @include('components.home.presentation')
@endsection

@push('scripts')
    <!-- Ajout de Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    @vite('resources/js/app.js')
@endpush 