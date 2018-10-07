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
}
