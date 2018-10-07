<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    protected $table = 'hf_series';
    protected $fillable = [
        'title'
    ];
    protected $appends = [
        'slug',
        'current',
    ];
    public $timestamps = false;

    /*———————————————————————————————————*\
                saisons
    \*———————————————————————————————————/*
            @type      [Data]
            @dataType  [{}]
    
            @return    Toutes les saison d'une série

            @use       Serie::find(1)->saisons
    */
    public function saisons() {
        return $this->hasMany('App\Saison', 'id_serie');
    }

    /*———————————————————————————————————*\
                slug
    \*———————————————————————————————————/*
            @type      [Attribute]
            @dataType  String
    
            @return    Formate et effectue des calculs sur les dates
    */
    public function getSlugAttribute() {
        return str_slug($this->title, '-');   
    }

    /*———————————————————————————————————*\
                remaining
    \*———————————————————————————————————/*
            @type      [Attribute]
            @dataType  Integer
    
            @return    Nombre d'épisode restant d'une série
    */
    public function getRemainingAttribute() {
        return Episode::where('id_serie', $this->id)->where('viewed', 0)->count();
    }

    /*———————————————————————————————————*\
                current
    \*———————————————————————————————————/*
            @type      [Attribute]
            @dataType  {Object}
    
            @return    Épisode et saison courrant d'une série
    */
    public function getCurrentAttribute() {
        $currentSaison  = Saison::where('id_serie', $this->id)->where('current', 1)->first()->n;
        $currentEpisode = Episode::where('id_serie', $this->id)->where('current', 1)->first()->n;

        return (object) [
            'saison' => $currentSaison,
            'episode' => $currentEpisode,
        ];
    }
}
