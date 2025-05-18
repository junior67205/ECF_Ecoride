@extends('layouts.app')

@section('title', 'Covoiturage')

@section('content')
    <!-- Formulaire de recherche -->
    <x-covoiturage.search-form />

    <!-- Résultats de recherche (uniquement si une recherche a été effectuée) -->
    @if(request()->isMethod('post'))
        @if(isset($covoiturages) && $covoiturages->count() > 0)
            <x-covoiturage.results-list :covoiturages="$covoiturages" />
        @elseif(isset($autresCovoiturages) && $autresCovoiturages->count() > 0)
            <x-covoiturage.no-results :showAlternative="true" />
            <x-covoiturage.results-list :covoiturages="$autresCovoiturages" title="Autres covoiturages disponibles" />
        @else
            <x-covoiturage.no-results />
        @endif
    @endif
@endsection 