<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    protected $table = 'hf_episodes';
    protected $fillable = [
        'id_saison',
        'id_serie',
        'n',
        'current',
        'viewed',
    ];
    public $timestamps = false;

    /*———————————————————————————————————*\
                    Saison
    \*———————————————————————————————————/*
            @type      [Data]
            @dataType  {Object}
    
            @return    La saison de l'épisode

            @use       Episode::find(1)->saison
    */
    public function saison() {
        return $this->belongsTo('App\Saison', 'id_saison');
    }

    /*———————————————————————————————————*\
                    currentEpisode
    \*———————————————————————————————————/*
            @type      [Query]
    
            @return    L'épisode actuel
    */
    public function scopeCurrentEpisode($query) {
        return $query->where('current', 1);
    }

}
