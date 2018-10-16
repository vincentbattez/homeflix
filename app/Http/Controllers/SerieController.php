<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Serie;
use App\Saison;
use App\Episode;

class SerieController extends Controller
{
    public function index() {
        // ON RECUREPERE LES INFORMATION DES SERIES
        $series = Serie::all();

        return view('serie/index', [
            'series' => $series,
        ]);
    }
}
