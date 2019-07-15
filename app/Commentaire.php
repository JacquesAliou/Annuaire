<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Commentaire extends Model{

    protected $table = 'commentaires'; // Pour le select form recherche-projet

    protected $guarded = [];


    public function user(){

        return $this->belongsTo(User::class,'foreign_key', 'local_key');



    }

    public function projet(){

        return $this->belongsTo(Projet::class);
    }
}
