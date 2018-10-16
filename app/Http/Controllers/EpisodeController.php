<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Serie;
use App\Saison;
use App\Episode;

class EpisodeController extends Controller
{
    public function changeEpisode(Request $request) {
        $idSerie         = $request->input('idSerie');
        $idSaison        = $request->input('idSaison');
        $newEpisode      = $request->input('newEpisode');
        $nCurrentEpisode = $request->input('currentEpisode');
        
        $currentEpisode = Episode::
              where('n', $nCurrentEpisode)
            ->where('id_serie', $idSerie)
            ->where('id_saison', $idSaison)
            ->first();

        $newEpisode = Episode::
              where('n', $newEpisode)
            ->where('id_serie', $idSerie)
            ->where('id_saison', $idSaison)
            ->first();

        if($newEpisode === null) {
            dd('pas de Episode suivante');
        }else {
            // dd($currentEpisode);
            $currentEpisode->current = 0;
            $newEpisode->current     = 1;

            $currentEpisode->save();
            $newEpisode->save();

            return redirect()->back();
        }
    }
}
