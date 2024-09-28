<?php

namespace App\Http\Controllers;

use App\Models\Team;

use App\Models\Player;
use App\Models\LastGame;
use App\Models\NextGame;
use App\Models\PopularNews;
use Illuminate\Http\Request;
use App\Models\ListesJoueurs;

use Illuminate\Validation\Rule;

class PlayersController extends Controller
{
    public function store(Request $request) //active store player
    {
        // Valider les données du formulaire
        $validatedData = $request->validate([
            'fullname' => 'required',
            'position' => 'required',
            'dateofbirth' => 'required|date',
            'goalsnumber' => 'required|integer',
            'title' => 'required',
            'number' => 'required',
            'content' => 'required',
            'image' => 'required|image', // Assurez-vous que le champ "image" est un fichier d'image
            Rule::dimensions()->ratio(287 / 396)->width(287)->height(396),
        ]);
        $image = $request->file('image');
        $imageName = $image->getClientOriginalName(); // Nom original de l'image
        $destinationPath = public_path('extra-images'); // Chemin vers le dossier public/extra-images
        $image->move($destinationPath, $imageName); // Déplacement du fichier vers public/extra-images
        $validatedData['image'] = '/extra-images/' . $image->getClientOriginalName(); // Ajouter le chemin de l'image validée aux données à enregistrer
        // Créer un nouveau joueur avec les données validées
        Player::create($validatedData);/*
        ListesJoueurs::create($validatedData); */
        toastr()->success(__('Player added successufully!'));
        // Rediriger ou renvoyer une réponse appropriée
        return redirect()->back();
    }
    public function update(Request $request)
    {

        $validatedData = $request->validate([
            'fullname' => 'required',
            'position' => 'required',
            'dateofbirth' => 'required|date',
            'goalsnumber' => 'required|integer',
            'title' => 'required',
            'number' => 'required',
            'content' => 'required',
            'image' => 'required|image|dimensions:ratio=287/396,width=287,height=396',
            Rule::dimensions()->ratio(287 / 396)->width(287)->height(396),
        ]);
        $image = $request->file('image');
        $imagePath = $image->storeAs('extra-images', $image->getClientOriginalName(),'public'); // Stocker l'image dans le dossier "public/extra-images" avec le nom d'origine du fichier
        $validatedData['image'] = '/extra-images/' . $image->getClientOriginalName(); // Ajouter le chemin de l'image validée aux données à enregistrer


        $joueur = Player::findOrFail($request->id);
        $joueur->update($validatedData);

        toastr()->success(__('Le joueur a été modifié avec succès!'));
        return redirect('/home');
    }
    // app/Http/Controllers/ListesJoueursController.php

    public function edit(ListesJoueurs $joueur)
    {
        return view('listes_joueurs.edit', compact('joueur'));
    }
    // app/Http/Controllers/ListesJoueursController.php

    public function destroy(Player $id) //active delete player
    {
        $id->delete();
        toastr()->success(__('Player deleted successufully!'));
        return redirect('/home');
    }
}
