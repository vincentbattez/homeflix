<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Saison extends Model
{
    protected $table = 'hf_saisons';
    protected $fillable = [
        'n',
        'id_serie'
    ];
    public $timestamps = false;
}
