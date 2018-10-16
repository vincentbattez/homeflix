<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*———————————————————————————————————*\
    $ LANDING PAGE
\*———————————————————————————————————*/
Route::get('/','SerieController@index')
    ->name('serie.index')
;

/*———————————————————————————————————*\
    $ Changes
\*———————————————————————————————————*/
Route::post('/saison/change','SaisonController@changeSaison')
    ->name('saison.changeSaison')
;
Route::post('/episode/change','EpisodeController@changeEpisode')
    ->name('episode.changeEpisode')
;
