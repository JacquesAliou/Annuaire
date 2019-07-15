<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $table = 'types';// Pour le select form ajout-projet

    protected $fillable = ['libelle_type'];


    public function projets(){

        return $this->hasMany(Projet::class);
    }
}
