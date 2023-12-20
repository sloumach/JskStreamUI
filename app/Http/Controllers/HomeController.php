<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\NoBadWords;
use App\Models\LastGame;
use App\Models\Team;
use App\Models\NextGame;
use App\Models\PopularNews;
use App\Models\Message;
use App\Models\ListesJoueurs;
use App\Models\Comment;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\CreateLastGameRequest;







class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


    public function index()
    {
        $teams = Team::all();
        $joueur = ListesJoueurs::all();




        return view('home', compact('teams','joueur'));
    }

    public function emailinbox()
    {       $messages = Message::all(); // Remplacez "Message" par le nom de votre modèle de message

        return view('email-inbox', compact('messages'));
    }
    public function store(CreateLastGameRequest $request)
    {


        LastGame::create([
            'teamA' => $request->input('teamA'),
            'teamB' => $request->input('teamB'),
            'scoreA' => $request->input('scoreA'),
            'scoreB' => $request->input('scoreB'),
            'gameDate' => $request->input('gameDate'),
            'gameWeek' => $request->input('gameWeek'),
        ]);
        toastr()->success(__('Le jeu a été ajouté avec succès!'));
        return redirect('/home');
    }
    public function addTeam(Request $request)
    {
        $teams = Team::all();

        $data = $request->validate([
            'name' => 'required|string',
            'victoires' => 'required|integer',
            'defaites' => 'required|integer',
            'points' => 'required|integer',
        ]);

        $team = Team::where('name', $data['name'])->first();

        if ($team) {
            $team->update($data);
        } else {
            toastr()->success(__('Ne pas ajouter une nouvelle equipe!'));
            return redirect('/home');
        }
        toastr()->success(__('Équipe modifié avec succès!'));

        return redirect('/home');
    }

    public function insertNextGame(Request $request)
    {
        $data = $request->validate([
            'teamA' => 'required|string',
            'teamB' => 'required|string',
            'gameDate' => 'required|date',
            'gameWeek' => 'required|integer',
            'gameStadium' => 'required|string',
        ]);

        NextGame::create($data);
        toastr()->success(__('Prochain match ajouté avec succès!'));

        return redirect('/home');
    }
    public function popularnews(Request $request)
    {
        // Validation des données
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'author' => 'required|max:255',
            'content' => 'required',
            'date' => 'required|date',
            'topic' =>'required',
            'image' => [
                'required',
                'image',
                'mimes:jpeg,png,jpg,gif',
                'max:2048',
                Rule::dimensions()->ratio(361 / 280)->width(361)->height(280),
            ],


        ]);
        // Vérifier si une image a été téléchargée
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = $image->storeAs('public/extra-images', $image->getClientOriginalName()); // Stocker l'image dans le dossier "public/extra-images" avec le nom d'origine du fichier
            $validatedData['image'] = '/extra-images/' . $image->getClientOriginalName(); // Ajouter le chemin de l'image validée aux données à enregistrer
        }

        // Création d'une nouvelle entrée dans la table
        PopularNews::create($validatedData);
        toastr()->success(__('Popular news shared successufully!'));
        // Redirection ou autre logique après l'ajout

        return redirect()->back();
    }




}
