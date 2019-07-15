<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends  Authenticatable
{

   use Notifiable;


    protected $primaryKey = 'login'; // Pour rappeler à laravel que ce n'est plus id mais login comme pk.
    protected $table = 'users'; // Pour le select form recherche-projet
    public $incrementing = false; // Pour indiquer que le login n'est pas en auto-increment
    protected $fillable = [
        'login', 'name', 'email', 'password','is_admin',
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];


    public function commentaires(){

        return $this->hasMany(Commentaire::class);
    }

    public function projets(){

        return $this->belongsToMany(Projet::class);
    }

    public function roles(){

        return $this->belongsToMany(Role::class);
    }

}
