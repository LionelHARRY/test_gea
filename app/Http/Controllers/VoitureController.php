<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Voiture;
use App\Mecanicien;

class VoitureController extends Controller
{
    public function index() {
        $voitures = Voiture::all();
        return view('voitures.index', compact('voitures'));
    }

    public function show($id) {
        $voiture = Voiture::find($id);
        $mecaniciens = Mecanicien::all();
        return view('voitures.show', compact(['voiture', 'mecaniciens']));
    }

}
