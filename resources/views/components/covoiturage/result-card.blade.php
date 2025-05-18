{{-- Composant : Carte de résultat de covoiturage --}}
@props(['covoiturage'])

<div class="flex flex-col gap-6 p-6 mb-8 border border-gray-200 shadow-md bg-gray-50 rounded-2xl md:flex-row md:items-center md:justify-between">
    <!-- Colonne gauche : conducteur & trajet -->
    <div class="flex items-start flex-1 gap-4">
        <!-- Photo conducteur -->
        <div class="flex-shrink-0">
            <img src="{{ $covoiturage->voiture?->user?->photo ?? asset('images/default-avatar.png') }}"
                 alt="Photo de {{ $covoiturage->voiture?->user?->pseudo ?? 'conducteur inconnu' }}"
                 class="object-cover w-20 h-20 border-2 rounded-full shadow border-emerald-200">
        </div>
        <!-- Infos principales -->
        <div class="flex flex-col w-full gap-1">
            <div class="flex items-center gap-2 mb-1">
                <span class="text-xl font-bold text-gray-800">{{ $covoiturage->voiture?->user?->pseudo ?? 'Conducteur inconnu' }}</span>
                @php
                    $energie = strtolower(str_replace(['é', 'è', 'ê'], 'e', $covoiturage->voiture->energie ?? ''));
                    $estEco = str_contains($energie, 'hybride') || str_contains($energie, 'electrique');
                @endphp
                @if($covoiturage->voiture)
                    @if($estEco)
                        <span class="px-2 py-0.5 text-sm font-medium text-white bg-emerald-600 rounded-full">Écologique</span>
                    @else
                        <span class="px-2 py-0.5 text-sm font-medium text-white bg-red-600 rounded-full">Non écologique</span>
                    @endif
                @endif
            </div>
            <div class="flex items-center gap-2 mb-2 text-emerald-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 12.414a4 4 0 10-5.657 5.657l4.243 4.243a8 8 0 1011.314-11.314l-4.243 4.243a4 4 0 00-5.657 5.657z" />
                </svg>
                <span class="font-medium">{{ $covoiturage->lieu_depart }} → {{ $covoiturage->lieu_arrivee }}</span>
            </div>
            <div class="grid grid-cols-1 gap-2 text-sm text-gray-700 md:grid-cols-2">
                <div class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 4h10a2 2 0 012 2v10a2 2 0 01-2 2H7a2 2 0 01-2-2V9a2 2 0 012-2z" />
                    </svg>
                    <span><span class="font-medium">Départ :</span> {{ \Carbon\Carbon::parse($covoiturage->date_depart)->format('d/m/Y') }} à {{ \Carbon\Carbon::parse($covoiturage->heure_depart)->format('H:i') }}</span>
                </div>
                <div class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 4h10a2 2 0 012 2v10a2 2 0 01-2 2H7a2 2 0 01-2-2V9a2 2 0 012-2z" />
                    </svg>
                    <span><span class="font-medium">Arrivée :</span> {{ \Carbon\Carbon::parse($covoiturage->date_arrivee)->format('d/m/Y') }} à {{ \Carbon\Carbon::parse($covoiturage->heure_arrivee)->format('H:i') }}</span>
                </div>
                <div class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6 6 0 10-12 0v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                    </svg>
                    <span><span class="font-medium">Places :</span> <span class="inline-block px-2 py-0.5 ml-1 text-xs font-bold text-white bg-emerald-600 rounded-full">{{ $covoiturage->nombre_places }}</span></span>
                </div>
                @if($covoiturage->voiture)
                <div class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 13a4 4 0 018 0v1a4 4 0 01-8 0v-1zm13 0a4 4 0 018 0v1a4 4 0 01-8 0v-1z" />
                    </svg>
                    <span><span class="font-medium">Véhicule :</span> {{ $covoiturage->voiture->marque?->libelle ?? 'Marque inconnue' }} {{ $covoiturage->voiture->modele }} ({{ ucfirst($covoiturage->voiture->energie) }})</span>
                </div>
                @endif
            </div>
        </div>
    </div>
    <!-- Colonne droite : statut & actions -->
    <div class="flex flex-col items-end gap-3 min-w-[160px] mt-6 md:mt-0">
        <span class="px-4 py-1 text-sm font-medium text-white rounded-full mb-2
            @if($covoiturage->statut === 'disponible') bg-emerald-600 
            @elseif($covoiturage->statut === 'complet') bg-red-600 
            @else bg-gray-600 @endif">
            {{ ucfirst($covoiturage->statut) }}
        </span>
        @if($covoiturage->statut === 'disponible')
        <div class="flex flex-col w-full gap-2">
            <div class="mb-2 text-right">
                <p class="text-2xl font-bold text-emerald-600">{{ number_format($covoiturage->prix_personne, 2) }} €</p>
                <p class="text-sm text-gray-500">par personne</p>
            </div>
            <a href="#" class="w-full px-4 py-2 text-sm font-medium text-center text-white transition shadow-sm rounded-xl bg-emerald-600 hover:bg-emerald-700">Réserver</a>
            <a href="#" class="w-full px-4 py-2 text-sm font-medium text-center transition border shadow-sm text-emerald-600 border-emerald-600 rounded-xl hover:bg-emerald-50">Détails</a>
        </div>
        @endif
    </div>
</div> 