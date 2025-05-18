{{-- Composant : Message aucun résultat --}}
@props(['message' => 'Aucun covoiturage trouvé pour votre recherche.', 'showAlternative' => false])

<section class="container max-w-4xl px-4 py-8 mx-auto">
    @if($showAlternative)
        <div class="p-6 mb-6 text-center bg-white shadow-md rounded-xl">
            <p class="text-lg text-gray-600">Aucun covoiturage disponible à la date choisie, mais d'autres sont disponibles à une autre date :</p>
        </div>
    @else
        <div class="p-6 text-center bg-white shadow-md rounded-xl">
            <p class="text-lg text-gray-600">{{ $message }}</p>
        </div>
    @endif
</section> 