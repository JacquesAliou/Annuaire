<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meteo extends Model
{
    protected $table = 'meteos';// Pour le select form ajout-projet

    protected $guarded = [];

    public function projets(){

        return $this->hasMany(Projet::class);
    }
}
