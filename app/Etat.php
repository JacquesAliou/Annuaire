<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etat extends Model{

    protected $table = 'etats';// Pour le select form ajout-projet

    protected $guarded = [];

    public function projets(){

        return $this->hasMany(Projet::class);
    }
}
