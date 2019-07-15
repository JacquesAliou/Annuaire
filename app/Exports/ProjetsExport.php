<?php

namespace App\Exports;

use App\Projet;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;


class ProjetsExport implements FromCollection, WithHeadings
{
    /**
     * Test
     * heading en lien avec getProjets(
     */
    public function headings():array {

        return [
            '#',
            'Le libelle du projet', 'Le code du projet',
            'Id meteo','Id type','Id etat',
            'La description du projet','L\'avancement du projet',
            'La date debut','La date de fin',
            'created At','updated At'
        ];
    }


    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Projet::all();
    }

}
