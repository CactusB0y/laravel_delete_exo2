<?php

namespace App\Http\Controllers;

use App\Models\Voiture;
use Illuminate\Http\Request;

class VoitureController extends Controller
{
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $store = new Voiture;
        $store->marque = $request->marque;
        $store->annee = $request->annee;
        $store->couleur = $request->couleur;
        $store->prix = $request->prix;
        $store->reduction = $request->reduction;
        $store->save();
        return redirect()->back();
    }

    public function destroy($id)
    {
        $destroy = Voiture::find($id);
        $destroy->delete();
        return redirect()->back();
    }
}
