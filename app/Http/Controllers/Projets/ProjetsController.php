<?php

namespace App\Http\Controllers\Projets;

use App\Projet;
use App\Commentaire;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Exports\ProjetsExport;
use Maatwebsite\Excel\Facades\Excel;


class ProjetsController extends Controller{

    /**
     * affiche l'ensemble des des projets ou selon nbsouhaite
     */


    /**
     * un projet et son detail
     */
    public function show(Request $request,$id){

        if ($request->session()->has('users')) {

        $projet = Projet::findOrFail($id);


        //les commentaires d'un projet et son utilisateur associé
            $commentaires = Commentaire::where("projet_id", "=", $id)->get();
            $users_comment = [];
        for ($i=0; $i < count($commentaires); $i ++) {
            $users_comment[$i] = User::find($commentaires[$i]->user_login);
        }
        return view('ecrans.showprojet', compact('projet', 'users_comment'));

        }
        else
            return redirect('/');
    }

    /**
    * Export data
    */
    public function export(Request $request)
    {
        if ($request->input('exportcsv') != null ) {

            return Excel::download(new ProjetsExport, 'projet.csv');
        }
        return redirect()->action('ProjetsController@index');
    }

}
