@extends('layouts.app')

@section('title', 'Mentions légales')

@section('content')
<!-- =====================
     PAGE MENTIONS LÉGALES
====================== -->
<div class="container max-w-3xl px-4 py-16 mx-auto">
    <h1 class="mb-16 text-4xl font-bold text-center text-emerald-700">Mentions légales</h1>

    <div class="space-y-16">
        {{-- Éditeur --}}
        <div class="p-10 bg-white shadow-sm rounded-3xl">
            <h2 class="mb-8 text-2xl font-semibold text-emerald-600">Éditeur du site</h2>
            <div class="space-y-3 text-lg text-gray-700">
                <p class="mb-2"><span class="font-medium">Raison sociale :</span> Ecoride</p>
                <p class="mb-2"><span class="font-medium">Adresse :</span> [Votre adresse ici]</p>
                <p class="mb-2"><span class="font-medium">Email :</span> [Votre email ici]</p>
                <p class="mb-2"><span class="font-medium">Directeur de la publication :</span> [Nom du responsable]</p>
            </div>
        </div>

        {{-- Hébergement --}}
        <div class="p-10 bg-white shadow-sm rounded-3xl">
            <h2 class="mb-8 text-2xl font-semibold text-emerald-600">Hébergement</h2>
            <div class="space-y-3 text-lg text-gray-700">
                <p class="mb-2"><span class="font-medium">Hébergeur :</span> [Nom de l'hébergeur]</p>
                <p class="mb-2"><span class="font-medium">Adresse :</span> [Adresse de l'hébergeur]</p>
            </div>
        </div>

        {{-- Propriété intellectuelle --}}
        <div class="p-10 bg-white shadow-sm rounded-3xl">
            <h2 class="mb-8 text-2xl font-semibold text-emerald-600">Propriété intellectuelle</h2>
            <p class="mb-2 text-lg leading-relaxed text-gray-700">
                L'ensemble de ce site relève de la législation française et internationale sur le droit d'auteur et la propriété intellectuelle. Tous les droits de reproduction sont réservés, y compris pour les documents téléchargeables et les représentations iconographiques et photographiques.
            </p>
        </div>

        {{-- Protection des données personnelles --}}
        <div class="p-10 bg-white shadow-sm rounded-3xl">
            <h2 class="mb-8 text-2xl font-semibold text-emerald-600">Protection des données personnelles</h2>
            <p class="mb-2 text-lg leading-relaxed text-gray-700">
                Conformément à la loi "Informatique et Libertés" du 6 janvier 1978 modifiée, et au Règlement Général sur la Protection des Données (RGPD), vous disposez d'un droit d'accès, de rectification et de suppression des données vous concernant.
            </p>
        </div>
    </div>

    <div class="mt-16 text-center">
        <p class="text-sm text-gray-500">
            Dernière mise à jour : {{ date('d/m/Y') }}
        </p>
    </div>
</div>
@endsection 