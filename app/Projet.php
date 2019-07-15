<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Projet extends Model
{
   protected $table = 'projets';// Pour le select form

    protected $guarded = [];

    public function users(){

        return $this->belongsToMany(User::class,'foreign_key', 'local_key');
    }

    public function meteo(){

        return $this->belongsTo(Meteo::class);
    }

    public function type(){

        return $this->belongsTo(Type::class);
    }

    public function etat(){

        return $this->belongsTo(Etat::class);
    }

    public function commentaires(){

        return $this->hasMany(Commentaire::class);
    }

    /**
     * recupere tous les projets pour le csv
     *  no need
     */
//    public function getProjets(){
//
//        $records = DB::table('projets')->select('libelle_projet','code_projet','meteo_id','type_id','etat_id','description','avancement','date_debut','date_fin')
//                    ->orderBy('id','asc')->get()->toArray();
//
//        return $records;
//    }

    /**
     * @return bool|string
     * @throws \Exception
     * Accesseur pour la readMore de la description
     */
    public function getShortContentAttribute(){

        return substr($this->description,0,random_int(30,60)). '...';
    }
}
