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
    {{-- WALLPAPER --}}
    <section id="wallpapers">
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
    </section>

    {{-- SERIES TITLE --}}
    <section id="series">
        @foreach ($series as $index => $serie)
            <div class="pull-right {{ ($index === 0) ? 'active' : '' }}" data-title="{{ $serie->slug }}">
                <div class="serie">
                    <h1 class="serie__name">{{ $serie->title }}</h1>
                    <span class="serie__episode">Épisode {{ $serie->current->episode->n }}</span>
                    <span class="serie__saison">Saison {{ $serie->current->saison->n }}</span>
                </div>
                <div class="text-center">
                    <button class="btn btn-primary" onclick="launchEpisode('{{ $serie->slug }}','{{ $serie->current->saison->n }}','{{ $serie->current->episode->n }}')">
                        <img src="{{ asset('images/icon-play.svg') }}" alt="play">
                        Regarder
                    </button>
                    <button class="btn btn-secondary" onclick="showEpisode('{{ $serie->slug }}')">
                        <img src="{{ asset('images/icon-change.svg') }}" alt="change">
                        Épisodes
                    </button>
                </div>
            </div>
        @endforeach
    </section>
    
    {{-- LIST OF SERIES --}}
    <nav class="sidebar">
        <ul class="list">
            @foreach ($series as $index => $serie)
                <div class="list__container">
                    <li class="item {{ ($index === 0) ? 'active' : '' }}" data-serie="{{ $serie->slug }}">
                        <img class="affiche" src="{{ asset('series/'. $serie->slug .'/affiche-'. $serie->slug .'.png') }}" alt="{{ $serie->slug }}">
                        <p class="restant">
                            @if ($serie->remaining >= 1)
                                {{ $serie->remaining }} épisodes restant
                            @endif
                        </p>
                    </li>
                    {{-- LIST OF EPISODES --}}
                    <article class="episode" data-episode="{{ $serie->slug }}">
                        <ol class="episode__list">
                            @foreach ($serie->current->saison->episodes as $episode)
                                @php($viewed = ($episode->viewed === 1) ? 'viewed' : '') 
                                @php($current = ($episode->current === 1) ? 'active' : '') 
                                <li class="episode__item{{ ' '.$viewed.$current}}"
                                    data-nSerie="{{ $serie->slug }}" 
                                    data-nSaison="{{ $serie->current->saison->n }}" 
                                    data-nEpisode="{{ $serie->current->episode->n }}" 
                                >
                                    Episode {{ $episode->n }}
                                </li>
                            @endforeach
                        </ol>
                    </article>
                </div>
            @endforeach
        </ul>
    </nav>

</section>

<script>
    function launchEpisode(serie, saison, episode) {
        var saison         = ("0" + saison).slice(-2);
        var episode        = ("0" + episode).slice(-2);
        var video          = document.querySelector('video')
        var videoContainer = document.getElementById('video')
        var pathToVideo    = 'series/'+ serie +'/saison-'+ saison +'/'+ serie +'_S'+ saison +'E' + episode +'.mp4'

        video.addEventListener('loadedmetadata', function() {
            var duration = Math.round(video.duration / 60, 0);
            console.log(duration);
        });
        
        // put src path to video
        if (video.src != document.URL + pathToVideo) {
            video.src = pathToVideo;
        }

        playVideo(videoContainer, video) 

        document.onkeydown = function(e) {
            // echap
            if(e.keyCode == 27) {
                pauseVideo(videoContainer, video);
            }
            if(e.keyCode == 32) {
                playVideo(videoContainer, video);
            }
        }
    }

    function playVideo(videoContainer, video) {
        // add Active
        videoContainer.classList.add('active');

        // Play
        video.play();

        // Fullscreen
        if (video.requestFullscreen) {
            video.requestFullscreen();
        } else if (video.mozRequestFullScreen) { /* Firefox */
            video.mozRequestFullScreen();
        } else if (video.webkitRequestFullscreen) { /* Chrome, Safari & Opera */
            video.webkitRequestFullscreen();
        } else if (video.msRequestFullscreen) { /* IE/Edge */
            video.msRequestFullscreen();
        }
    }

    function pauseVideo(videoContainer, video) {
        // remove Active
        videoContainer.classList.remove('active');

        // pause
        video.pause();
    }

    function showEpisode(dataSerie) {
        const episodeContainer = document.querySelector('[data-episode='+ dataSerie +']');
        
        if (!episodeContainer.classList.contains('active')) {
            episodeContainer.classList.add('active');
        } else {
            episodeContainer.classList.remove('active');
        }
    }
</script>
@endsection