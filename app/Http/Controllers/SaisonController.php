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
        $nCurrentSaison = $request->input('currentSaison');
        
        $currentSaison = Saison::
              where('n', $nCurrentSaison)
            ->where('id_serie', $idSerie)
            ->first();

        $newSaison = Saison::
              where('n', $newSaison)
            ->where('id_serie', $idSerie)
            ->first();

        if($newSaison === null) {
            dd('pas de saison suivante');
        }else {
            // dd($currentSaison);
            $currentSaison->current = 0;
            $newSaison->current     = 1;

            $currentSaison->save();
            $newSaison->save();

            return redirect()->back();
        }
    }
}
