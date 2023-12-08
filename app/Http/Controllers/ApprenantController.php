<?php

namespace App\Http\Controllers;
use App\Models\Apprenant;
use Illuminate\Http\Request;
use App\Http\Controllers\ApprenantController;


class ApprenantController extends Controller
{
    public function liste_apprenant(){
        return view('Apprenant.apprenant');
    }
    public function liste_formation(){
        return view('Apprenant.formation');
    }
    public function ajouter_apprenant(){
        return view('Apprenant.ajouter');
    }
    public function traitement_liste_ajouter(request $request){
        $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'class'=>'required',
        ]);
        $apprenant = new Apprenant();
        $apprenant->nom=$request->nom;
        $apprenant->prenom=$request->prenom;
        $apprenant->class=$request->class;
        $apprenant->save();
         return redirect('/ajouter')->with('status', 'l etudiant a ete bien ajouter');
    }
}
