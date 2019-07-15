<?php

namespace App\Http\Controllers\Projets;


use App\Etat;
use App\Meteo;
use App\Projet;
use App\Type;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class RechercherProjetController extends Controller
{
    public function getForm(Request $request){

        if ($request->session()->has('users')) {
            $projets = '';
            return view('forms.rechercher-projet')->with('projets', $projets);
        }
        else {
            return redirect('/');
           echo 'session invalide';
        }

       return view('forms.rechercher-projet');

    }

    public function postForm(Request $request){

        $libelle_projet = $request->libelle_projet;
        $meteos = Meteo::pluck('code_meteo', 'id');
        $types = Type::pluck('libelle_type', 'id');
        $etats = Etat::pluck('libelle_etat','id');

        if($libelle_projet !=""){
            $projets = Projet::where('libelle_projet', 'like', '%' . $libelle_projet . '%')
                ->orWhere('description','like', '%' . $libelle_projet . '%')->get();

            if(count($projets)>0)

                return view('forms.rechercher-projet')->withDetails($projets)
                    ->withQuery($libelle_projet)
                    ->with('meteos', $meteos)
                    ->with('types',$types)
                    ->with('etats',$etats);


        }
        return view('forms.rechercher-projet')->withMessage('Pas de Correspondance');
        //return view('forms.test')->withMessage('Pas de Correspondance');


    }

}
