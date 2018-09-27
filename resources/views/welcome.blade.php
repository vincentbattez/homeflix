<?php
    use Illuminate\Support\Facades\Storage;
?>
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <title>Homeflix</title>
    </head>
    <body style="background-image: url(series/vikings/wallpaper-vikings.jpg)">
        {{-- Vikings title --}}
        <div class="pull-right active" data-currentSerie="vikings">
            <div class="serie">
                <h1 class="serie__name">Vikings</h1>
                <span class="serie__episode">Épisode 1</span>
                <span class="serie__saison">Saison 3</span>
            </div>
            <div class="text-center">
                <button class="btn btn-primary">
                    <img src="{{ asset('images/icon-play.svg') }}" alt="play">
                    Regarder
                </button>
                <button class="btn btn-secondary">
                    <img src="{{ asset('images/icon-change.svg') }}" alt="change">
                    Épisodes
                </button>
            </div>
        </div>

        {{-- greys-anatomy title --}}
        <div class="pull-right" data-currentSerie="greys-anatomy">
            <div class="serie">
                <h1 class="serie__name">Grey's Anatomy</h1>
                <span class="serie__episode">Épisode 12</span>
                <span class="serie__saison">Saison 4</span>
            </div>
            <div class="text-center">
                <button class="btn btn-primary">
                    <img src="{{ asset('images/icon-play.svg') }}" alt="play">
                    Regarder
                </button>
                <button class="btn btn-secondary">
                    <img src="{{ asset('images/icon-change.svg') }}" alt="change">
                    Épisodes
                </button>
            </div>
        </div>
        
        <nav class="sidebar">
            <ul class="list">
                <li class="item active" data-serie="vikings">
                    <img class="affiche" src="{{ asset('series/vikings/affiche-vikings.png') }}" alt="Vikings">
                    <p class="restant">26 épisodes restant</p>
                </li>
                <li class="item" data-serie="greys-anatomy">
                    <img class="affiche" src="{{ asset('series/greys-anatomy/affiche-greys-anatomy.png') }}" alt="greys-anatomy">
                    <p class="restant">110 épisodes restant</p>
                </li>
            </ul>
        </nav>
    </body>
    
    <script src="{{ asset('js/app.js') }}"></script>
</html>
