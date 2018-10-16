<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Saison extends Model
{
    protected $table = 'hf_saisons';
    protected $fillable = [
        'id_serie',
        'n',
        'current',
        'viewed'
    ];
    public $timestamps = false;

    /*———————————————————————————————————*\
                    Serie
    \*———————————————————————————————————/*
            @type      [Data]
            @dataType  {Object}
    
            @return    La série de la saison

            @use       Saison::find(1)->serie
    */
    public function serie() {
        return $this->belongsTo('App\Serie', 'id_serie');
    }

    /*———————————————————————————————————*\
                Episodes
    \*———————————————————————————————————/*
            @type      [Data]
            @dataType  [{}]
    
            @return    Tous les épisodes d'une saison

            @use       Saison::find(1)->episodes
    */
    public function episodes() {
        return $this->hasMany('App\Episode', 'id_saison');
    }

    /*———————————————————————————————————*\
                    currentSaison
    \*———————————————————————————————————/*
            @type      [Query]
    
            @return    La saison actuel
    */
    public function scopeCurrentSaison($query) {
        return $query->where('current', 1);
    }
}
