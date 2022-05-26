<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use resource\view;

use App\Models\Projet;
class ProjetController extends Controller

{
public function template(){
    return view ('redaction.template');

}
public function inscription_redacteur(){
    return view('redaction.inscription_redacteur');


}
public function depot_projet(){
    return view('redaction.depot_projet');
}

public function login(){
    return view('redaction.login');
}

    public function show_projets (){
        return view ('redaction.show_projets');
    
    }
    public function show(){
        $projets[0]=new   Projet(1,'Web',1000,'site web','01-22-2022');
        $projets[1]=new   Projet(2,'Web',2000,'site web','01-22-2022');
        $projets[2]=new   Projet(3,'Mobile',700,'Note','01-22-2022');
        $projets[3]=new   Projet(4,'Web',1000,'Paltform','01-22-2022');
        $projets[4]=new   Projet(5,'Web',1000,'Paltform','01-22-2022');
   
        return view('show_projes', compact('projets'));
    }


       
 }
