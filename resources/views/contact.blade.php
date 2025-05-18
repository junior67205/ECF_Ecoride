{{-- 
    Page : Contact
    À placer dans resources/views/contact.blade.php
--}}

@extends('layouts.app')

@section('title', 'Contact')

@section('content')
<!-- =====================
     PAGE CONTACT
====================== -->
<div class="container max-w-3xl px-4 py-12 pt-20 mx-auto">
    <h1 class="mb-8 text-4xl font-bold text-emerald-700">Contact</h1>
    <p class="mb-6 text-gray-700">
        Pour toute question, suggestion ou demande d'information, vous pouvez nous contacter à l'adresse suivante :
    </p>
    <p class="mb-6 font-semibold text-gray-700">
        contact@ecoride.fr
    </p>
    <p class="mb-6 text-gray-700">
        Ou via le formulaire de contact disponible prochainement sur cette page.
    </p>
    <p class="mt-8 text-sm text-gray-500">
        Dernière mise à jour : {{ date('d/m/Y') }}
    </p>
</div>
@endsection 