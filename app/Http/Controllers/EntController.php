<?php

namespace App\Http\Controllers;

use App\Models\Ent;

class EntController extends Controller
{

    public function index()
    {
        $infos = Ent::all();

        return view('ent.home', [
            'infos' => $infos
        ]);
    }

    /*public function update(Request $request): RedirectResponse
    {
        //$ent = Ent::all();
        DB::table('ent')->update(['title' => $request->input('title'), 'link' => $request->input('link')]);
        //$ent->save();

        return redirect()->route('ent.home')->with('success', 'Votre espace a été modifié.');
    }*/
}
