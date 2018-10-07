<?php
    /**
    * Variables
    *
    * @var $series     @type [{}]     @mean All series
    */

    $currentPage = [
        'title' => 'serie',
        'bodyClass' => 'seriePage'
    ];
?>
@extends('layouts.app')
{{----------------
    CONTENT
----------------}}
@section('content')
<section class="container">
    <div id="wallpapers">
        @foreach ($series as $index => $serie)
            <div class="wallpaper">
                <img
                    class="{{ ($index === 0) ? 'active' : '' }}"
                    src="{{ asset('series/'.$serie->slug.'/wallpaper-'.$serie->slug.'.jpg') }}"
                    alt="wallpaper {{ $serie->slug }}"
                    data-wallpaper="{{ $serie->slug }}"
                />
            </div>
        @endforeach
    </div>
    {{-- SERIES TITLE --}}
    <div id="series">
        @foreach ($series as $index => $serie)
            <div class="pull-right {{ ($index === 0) ? 'active' : '' }}" data-title="{{ $serie->slug }}">
                <div class="serie">
                    <h1 class="serie__name">{{ $serie->title }}</h1>
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
        @endforeach
    </div>
    
    <nav class="sidebar">
        <ul class="list">
            @foreach ($series as $index => $serie)
                <li class="item {{ ($index === 0) ? 'active' : '' }}" data-serie="{{ $serie->slug }}">
                    <img class="affiche" src="{{ asset('series/'. $serie->slug .'/affiche-'. $serie->slug .'.png') }}" alt="{{ $serie->slug }}">
                    <p class="restant">26 épisodes restant</p>
                </li>
            @endforeach
        </ul>
    </nav>
</section>
@endsection