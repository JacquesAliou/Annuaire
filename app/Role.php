<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $guarded= [];


    public function users(){

        return $this->belongsToMany(User::class,'foreign_key', 'local_key');
    }
}
