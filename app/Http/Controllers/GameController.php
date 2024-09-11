<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateLastGameRequest;
use App\Models\LastGame;
use App\Models\Team;
use App\Models\NextGame;
use App\Models\PopularNews;
use App\Models\ListesJoueurs;
use Illuminate\Support\Facades\Validator;
use App\Models\Message;
use App\Models\Player;



class GameController extends Controller
{
/*     public function __construct()
    {
        $this->middleware('auth');
    } */

    public function create()
    {
        $teams = Team::orderByDesc('points')
        ->orderByDesc('victoires')
        ->orderBy('defaites')
        ->get();
        $nextGame = NextGame::latest()->first();
        $lastGames = LastGame::orderBy('gameDate', 'asc')->get();
        $lastGame = LastGame::latest()->first();
        $players=Player::all();

        $PopularNews2 = PopularNews::orderBy('likes', 'desc')->paginate(6);
        return view('index',compact('players','lastGames','teams', 'lastGame', 'nextGame',  'PopularNews2'));
    }
    public function blogs()
    {
        $teams = Team::orderByDesc('points')
        ->orderByDesc('victoires')
        ->orderBy('defaites')
        ->get();
        $nextGame = NextGame::latest()->first();
        $lastGames = LastGame::all();
        $lastGame = LastGame::latest()->first();
        $PopularNews = PopularNews::all();
        return view('blogs',compact('lastGames','teams', 'lastGame', 'nextGame','PopularNews'));
    }
    public function blogdetail (Request $request, $id)
    {
        $validator = Validator::make(['id' => $id], [
            'id' => 'required|integer',
        ]);
        if ($validator->fails()) {
            // Retourner une réponse d'erreur, rediriger, ou faire ce que vous jugez approprié
            // par exemple, rediriger avec des erreurs de validation
            return redirect()->back();

        }


        $popularNews = PopularNews::where('id',$id)->first();

        // Vérifier si l'article existe
        if (!$popularNews) {
            // Gérer le cas où l'article n'est pas trouvé, par exemple, rediriger vers une page d'erreur
            abort(404, 'Article not found');
        }
        $viewData = [
            'post_id' => $id
        ];

        return view ('blog-detail', compact('popularNews','viewData'));
    }
    public function like($id)
    {
        $popularNews = PopularNews::findOrFail($id);
        $popularNews->increment('likes');

        return response()->json(['success' => true]);
    }
    public function contactus()
    {
        return view('contact-us');
    }
    public function showplayers()
    {
        $players = Player::all(); // Remplacez "Message" par le nom de votre modèle de message
        return view('player-modren', compact('players'));
    }





}
