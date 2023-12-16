<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PlayersController;
use App\Http\Controllers\UserActionController;
use App\Http\Controllers\MessageController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* Route::get('/', function () {
    return view('welcome');
}); */

Auth::routes();

Route::get('/', [GameController::class, 'create'])->name('indexUser');
Route::get('/blogs', [GameController::class, 'blogs'])->name('blogs');
Route::get('/blogdetail{id}', [GameController::class, 'blogdetail'])->name('blogdetail');
Route::get('/contactus', [GameController::class, 'contactus'])->name('contactus');
Route::get('/email-inbox', [HomeController::class, 'emailinbox'])->name('emailinbox');


Route::get('/home', [HomeController::class, 'index'])->name('home');
/* Route::get('/games/create', [GameController::class, 'create'])->name('games.create'); */
Route::post('/games', [HomeController::class, 'store'])->name('games.store');
Route::post('/addTeam', [HomeController::class, 'addTeam'])->name('addTeam');
Route::post('/addcomment', [UserActionController::class, 'addcomment'])->name('addComment');
Route::post('/insertNextGame', [HomeController::class, 'insertNextGame'])->name('insertNextGame');
Route::post('/popular-news', [HomeController::class, 'popularnews'])->name('popular-news.store');
Route::post('/update-player', [PlayersController::class, 'update'])->name('updateplayer');
Route::post('/popular-news/{id}/like', [GameController::class, 'like'])->name('like');
Route::post('/envoyer-message', [UserActionController::class, 'envoyerMessage'])->name('envoyerMessage');


// routes/web.php

Route::resource('listes_joueurs', PlayersController::class);

