<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AjouterProjetRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            // ici Le Systeme de Validation pour le form ajout de projet
            'libelle_projet'=> 'required|min:10',
            'code_projet' => 'required|min:10',
            'meteo_id'  => 'required',
//            'code_meteo'  => 'required',
            'type_id'  => 'required',
            'etat_id'  => 'required',
            'description'=> 'required|min:20, 300',
            'avancement'  => 'required|integer|min:0',
            'date_debut' => 'required|date',
            'date_fin' => 'required|date',
        ];
    }

    public function messages(){

        return [
            "libelle_projet.required" => "Le libelle du projet est Obligatoire",
            "libelle_projet.min" => "Le libelle_projet doit avoir 10 Caracteres au minimum",

            "code_projet.required" => "Le code du projet est Obligatoire",
            "code_projet.min" => "Le code du projet doit avoir 10 Caracteres au minimum",

            "meteo_id.required" => "Ce champ est obligatoire",


            "type_id.required" => "Ce champ est obligatoire",


            "etat_id.required" => "Ce champ est obligatoire",


            "description.required" => "Vous ne pouvez pas créer un Projet sans contenu",
            "description.between" => "Il Faut entre 20 et 300 Caracteres pour la description du projet",

            "avancement.required" => "Ce champ est obligatoire",
            "avancement.integer" => "Ce champ ne prend que des nombres positifs y compris 0",

            "date_debut.required" => "Ce champ est obligatoire et ne prend que des date",
            "date_debut.date" => "La date doit nêtre au format jj/mm/aaaa",

            "date_fin.required" => "Ce champ est obligatoire et ne prend que des date",
            "date_fin.date" => "La date doit être au format jj/mm/aaaa",
        ];
    }
}
