<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\NoBadWords;
use App\Models\LastGame;
use App\Models\Team;
use App\Models\NextGame;
use App\Models\PopularNews;
use App\Models\ListesJoueurs;
use App\Models\Comment;
use Illuminate\Support\Facades\Validator;
use App\Models\Message;

class UserActionController extends Controller
{
    //
    public function addcomment(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'post_id' => 'required',
            'comment' => [
                'required',
                'string',
                'max:500',
                'min:50',
                new NoBadWords,
            ],
        ]);

        if ($validator->fails()) {
            toastr()->error(__('Le commentaire contient des mots inappropriés.'));
            return redirect()->back();
        }

        Comment::create($request->all());
        toastr()->success(__('Commentaire ajouté avec succès!'));
        // Exemple de redirection vers une page
        return redirect()->back();
    }

    public function envoyerMessage(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => [
                'required',
                'string',
                'max:600',
                'min:50',
                new NoBadWords,
            ],
        ]);

        if ($validator->fails()) {
            toastr()->error(__('Le message contient des mots inappropriés.'));
            return redirect()->back();
        }
        $message = Message::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'message' => $request->input('message')
        ]);

        // Faites d'autres traitements si nécessaire
        toastr()->success(__('Message envoyé avec succès!'));
        // Exemple de redirection vers une page
        return redirect()->back();
    }
}
