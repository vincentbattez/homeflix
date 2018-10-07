<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    protected $table = 'hf_episodes';
    protected $fillable = [
        'n',
        'id_saison',
    ];
    public $timestamps = false;
}
