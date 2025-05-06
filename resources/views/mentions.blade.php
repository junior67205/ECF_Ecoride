@extends('layouts.app')

@section('title', 'Mentions légales')

@section('content')
<div class="container max-w-3xl px-4 py-12 mx-auto pt-20">
    <h1 class="mb-8 text-4xl font-bold text-emerald-700">Mentions légales</h1>
    <p class="mb-6 text-gray-700">
        Ce site est édité par Ecoride.<br>
        Adresse : [Votre adresse ici]<br>
        Email : [Votre email ici]<br>
        Directeur de la publication : [Nom du responsable]<br>
        Hébergeur : [Nom et adresse de l'hébergeur]
    </p>
    <p class="mt-8 text-sm text-gray-500">
        Dernière mise à jour : {{ date('d/m/Y') }}
    </p>
</div>
@endsection 