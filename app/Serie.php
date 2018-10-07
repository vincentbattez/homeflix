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
                slug
    \*———————————————————————————————————/*
            @type      [Attribute]
            @dataType  {Object}
    
            @return    Formate et effectue des calculs sur les dates
    */
    public function getSlugAttribute() {
        return str_slug($this->title, '-');   
    }
}
