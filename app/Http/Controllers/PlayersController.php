<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\LastGame;
use App\Models\Team;
use App\Models\NextGame;
use App\Models\PopularNews;
use App\Models\ListesJoueurs;

class PlayersController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'numero' => 'required|integer',
            'poste' => 'required|string',
            'datedenaissance' => 'required|date',
        ]);

        ListesJoueurs::create($request->all());
        toastr()->success(__('Le joueur a été ajouté avec succès!'));
        return redirect('/home');
    }
    public function update(Request $request)
    {
        $request->validate([
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'numero' => 'required|integer',
            'poste' => 'required|string',
            'datedenaissance' => 'required|date',
        ]);

        $joueur = ListesJoueurs::findOrFail($request->input('id'));
        $joueur->update(($request->except('id')));

        toastr()->success(__('Le joueur a été modifié avec succès!'));
        return redirect('/home');
    }
    // app/Http/Controllers/ListesJoueursController.php

    public function edit(ListesJoueurs $joueur)
    {
        return view('listes_joueurs.edit', compact('joueur'));
    }
    // app/Http/Controllers/ListesJoueursController.php

    public function destroy(ListesJoueurs $joueur)
    {
        $joueur->delete();

        return redirect()->route('listes_joueurs.index')->with('success', 'Joueur supprimé avec succès.');
    }
}
