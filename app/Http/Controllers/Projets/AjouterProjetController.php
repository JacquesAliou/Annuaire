<?php

namespace App\Http\Controllers\Projets;

use App\Http\Requests\AjouterProjetRequest;
use App\Projet;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AjouterProjetController extends Controller{


    public function create(Request $request)
    {
        if ($request->session()->has('users')) {

            return view('forms.ajouter-projet');
        }else
            return redirect('/');
    }

    public function store(AjouterProjetRequest $request)
    {
        if ($request->session()->has('users')) {
            $projet = Projet::create($request->all());
            // return 'Enregistré en Bdd';
            return redirect("projets/$projet->id");
        }
    }

    //Edition projet
    public function edit(Request $request,Projet $projet)
    {
        if ($request->session()->has('users')) {

            return view('forms.editprojet', compact('projet'));
        }else
            return redirect('/');
    }

    //mis a jour projet
    public function update(Request $request, Projet $projet)
    {
        $projet->update($request->all());

        //return view('ecrans.showprojet', compact('projet'));
        return view('forms.editprojet', compact('projet'))
            ->withMessage('It\'s Ok');

    }

}
