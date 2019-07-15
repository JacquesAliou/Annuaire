<?php

namespace App\Http\Controllers\Projets;

use App\Commentaire;
use App\Projet;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class CommentairesController extends Controller
{
    /**
     * @param Request $request
     * @param Projet $projet
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * Ajouter un commentaire
     */
    public function store(Request $request, Projet $projet){



        /**
         * Teste si utilisateur connecté
         */
        if ($request->session()->has('users')) {

            $commentaire = new Commentaire();
            $commentaire->user_login = $request->session()->get('users');
            $commentaire->projet_id = $projet->id;

            /**
             * Teste s'il ya un contenu de commentaire
             */
            if ($request->contenu != '') {

                $commentaire->contenu = $request->contenu;
                $commentaire->save();

                return redirect("projets/$projet->id");

            }
            else
                return redirect("projets/$projet->id")->withMessage('Il vous manque le contenu');
        }
        else
            return redirect('/');
    }

//
}
