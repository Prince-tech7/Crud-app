<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    //Creation de la fonction etudiant
    public function liste_etudiant(){
        return view('etudiant.liste');
    }
}
