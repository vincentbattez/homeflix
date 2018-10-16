<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Serie;
use App\Saison;
use App\Episode;

class SaisonController extends Controller
{
    public function changeSaison(Request $request) {
        $newSaison      = $request->input('newSaison');
        $idSerie        = $request->input('idSerie');
        $currentSaison  = $request->input('currentSaison');
        $nCurrentEpisode = $request->input('currentEpisode');
        
        $currentSaison = Saison::
              where('n', $currentSaison)
            ->where('id_serie', $idSerie)
            ->first();

        $newSaison = Saison::
              where('n', $newSaison)
            ->where('id_serie', $idSerie)
            ->first();

        $firstEpisodeNewSaison = Episode::
              where('n', 1)
            ->where('id_saison', $newSaison->id)
            ->where('id_serie', $idSerie)
            ->first();

        $currentEpisode = Episode::
            where('n', $nCurrentEpisode)
            ->where('id_serie', $idSerie)
            ->where('id_saison', $currentSaison->id)
            ->first();

        if($newSaison === null) {
            dd('pas de saison suivante');
        }else {
            // saisons
            $currentSaison ->current = 0;
            $newSaison     ->current = 1;

            // episodes
            $currentEpisode       ->current = 0;
            $firstEpisodeNewSaison->current = 1;
            

            $currentSaison->save();
            $newSaison->save();
            $currentEpisode->save();
            $firstEpisodeNewSaison->save();

            return redirect()->back();
        }
    }
}
