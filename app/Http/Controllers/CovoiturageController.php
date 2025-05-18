<?php

namespace App\Http\Controllers;

use App\Models\Covoiturage;
use Illuminate\Http\Request;
use Carbon\Carbon;

class CovoiturageController extends Controller
{
    public function search(Request $request)
    {
        $request->validate([
            'lieu_depart' => 'required|string',
            'lieu_arrivee' => 'required|string',
            'date_depart' => 'required|date|after_or_equal:today',
        ]);

        // Recherche principale : dispo à la date demandée
        $covoiturages = Covoiturage::with(['voiture.marque', 'voiture.user'])
            ->where('lieu_depart', 'like', '%' . $request->lieu_depart . '%')
            ->where('lieu_arrivee', 'like', '%' . $request->lieu_arrivee . '%')
            ->where('statut', 'disponible')
            ->whereDate('date_depart', $request->date_depart)
            ->orderBy('heure_depart')
            ->get();

        // Si aucun résultat, chercher le même trajet à d'autres dates
        $autresCovoiturages = collect();
        if ($covoiturages->isEmpty()) {
            $autresCovoiturages = Covoiturage::with(['voiture.marque', 'voiture.user'])
                ->where('lieu_depart', 'like', '%' . $request->lieu_depart . '%')
                ->where('lieu_arrivee', 'like', '%' . $request->lieu_arrivee . '%')
                ->where('statut', 'disponible')
                ->whereDate('date_depart', '!=', $request->date_depart)
                ->orderBy('date_depart')
                ->orderBy('heure_depart')
                ->get();
        }

        return view('covoiturage', [
            'covoiturages' => $covoiturages,
            'autresCovoiturages' => $autresCovoiturages,
        ]);
    }
}
