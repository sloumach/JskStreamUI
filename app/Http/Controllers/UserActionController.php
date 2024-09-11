<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Comment;
use App\Models\Message;
use App\Models\LastGame;
use App\Models\NextGame;
use App\Rules\NoBadWords;
use App\Models\PopularNews;
use Illuminate\Http\Request;
use App\Models\ListesJoueurs;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\Console\Input\Input;

class UserActionController extends Controller
{
    //
    public function addcomment(Request $request)
    {
        $validate = Validator::make($request->all(),([
            'g-recaptcha-response' => 'required|captcha'
        ]));
        if($validate->fails()){
            toastr()->error(__('Validez le captcha!'));

            return redirect()->back();
        }
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
        $validate = Validator::make($request->all(),([
            'g-recaptcha-response' => 'required|captcha'
        ]));
        if($validate->fails()){
            toastr()->error(__('Validez le captcha!'));

            return redirect()->back();
        }

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
    public function changeLanguage($lang)
    {

        Session::put('locale', $lang);

        Log::info('Lang recieved: ' . $lang);
        Log::info('Locale changed to: ' . $lang);
        Log::info('Session Locale: ' . Session::get('locale'));

        return redirect()->back();
    }


}
