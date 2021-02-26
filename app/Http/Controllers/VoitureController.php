<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Voiture;

class VoitureController extends Controller
{
    public function index() {
        $voitures = Voiture::all();
        return view('voitures.index', compact('voitures'));
    }

    public function show($id) {
        $voiture = Voiture::find($id);
        return view('voitures.show', compact('voiture'));
    }

}
