<?php

namespace App\Http\Controllers\Ecrans;

use App\Http\Controllers\Controller;
use App\Projet;
use Illuminate\Http\Request;

class AccueilController extends Controller{
   public function index(Request $request){
       if ($request->session()->has('users')) {

           $projets = Projet::orderBy('id','desc')->paginate(4);

           return view('ecrans.listprojets',compact('projets'));
       } else
           return redirect('/');
   }
}
