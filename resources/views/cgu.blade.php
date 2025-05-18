@extends('layouts.app')

@section('title', 'Conditions Générales d’Utilisation')

@section('content')
<!-- =====================
     PAGE CONDITIONS GÉNÉRALES D'UTILISATION
====================== -->
<div class="container max-w-3xl px-4 py-12 pt-20 mx-auto">
    <h1 class="mb-8 text-4xl font-bold text-emerald-700">Conditions Générales d’Utilisation</h1>

    <p class="mb-6 text-gray-700">
        Les présentes Conditions Générales d’Utilisation (CGU) ont pour objet de définir les modalités et conditions d’utilisation du site Ecoride.
    </p>

    <h2 class="mt-8 mb-2 text-2xl font-semibold text-emerald-600">1. Objet du site</h2>
    <p class="mb-4 text-gray-700">
        Ecoride est une plateforme de mise en relation entre conducteurs et passagers souhaitant partager un trajet en covoiturage dans une démarche écologique.
    </p>

    <h2 class="mt-8 mb-2 text-2xl font-semibold text-emerald-600">2. Accès au service</h2>
    <p class="mb-4 text-gray-700">
        L’accès au site est gratuit. Certains services nécessitent la création d’un compte utilisateur.
    </p>

    <h2 class="mt-8 mb-2 text-2xl font-semibold text-emerald-600">3. Inscription et compte utilisateur</h2>
    <p class="mb-4 text-gray-700">
        L’utilisateur s’engage à fournir des informations exactes lors de son inscription et à les mettre à jour. Le compte est personnel et ne peut être partagé.
    </p>

    <h2 class="mt-8 mb-2 text-2xl font-semibold text-emerald-600">4. Utilisation du service</h2>
    <p class="mb-4 text-gray-700">
        L’utilisateur s’engage à utiliser le site dans le respect des lois en vigueur et des présentes CGU. Tout comportement frauduleux ou abusif pourra entraîner la suspension du compte.
    </p>

    <h2 class="mt-8 mb-2 text-2xl font-semibold text-emerald-600">5. Responsabilité</h2>
    <p class="mb-4 text-gray-700">
        Ecoride agit en tant qu’intermédiaire et ne saurait être tenu responsable des litiges entre utilisateurs. Chaque utilisateur est responsable de ses annonces, trajets et comportements.
    </p>

    <h2 class="mt-8 mb-2 text-2xl font-semibold text-emerald-600">6. Données personnelles</h2>
    <p class="mb-4 text-gray-700">
        Les données collectées sont traitées conformément à la politique de confidentialité du site. L’utilisateur dispose d’un droit d’accès, de rectification et de suppression de ses données.
    </p>

    <h2 class="mt-8 mb-2 text-2xl font-semibold text-emerald-600">7. Propriété intellectuelle</h2>
    <p class="mb-4 text-gray-700">
        Le contenu du site (textes, images, logo, etc.) est protégé par le droit d’auteur. Toute reproduction sans autorisation est interdite.
    </p>

    <h2 class="mt-8 mb-2 text-2xl font-semibold text-emerald-600">8. Modification des CGU</h2>
    <p class="mb-4 text-gray-700">
        Ecoride se réserve le droit de modifier les présentes CGU à tout moment. Les utilisateurs seront informés des modifications par tout moyen approprié.
    </p>

    <h2 class="mt-8 mb-2 text-2xl font-semibold text-emerald-600">9. Contact</h2>
    <p class="mb-4 text-gray-700">
        Pour toute question concernant les CGU, vous pouvez nous contacter via le formulaire de contact du site.
    </p>

    <p class="mt-8 text-sm text-gray-500">
        Dernière mise à jour : {{ date('d/m/Y') }}
    </p>
</div>
@endsection 