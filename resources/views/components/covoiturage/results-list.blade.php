{{-- Composant : Liste des résultats de covoiturage --}}
@props(['covoiturages', 'title' => 'Résultats de recherche'])

<section class="container max-w-4xl px-4 py-8 mx-auto">
    <h2 class="mb-6 text-2xl font-bold text-gray-800">{{ $title }}</h2>
    <div class="grid gap-6">
        @foreach($covoiturages as $covoiturage)
            <x-covoiturage.result-card :covoiturage="$covoiturage" />
        @endforeach
    </div>
</section> 