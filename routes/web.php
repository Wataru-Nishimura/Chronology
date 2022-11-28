<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChronologyController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ReferenceController;
use App\Models\Chronology;
use App\Models\ChronologyPeriodAduchimomoyama;
use App\Models\ChronologyPeriodAsuka;
use App\Models\ChronologyPeriodEdo;
use App\Models\ChronologyPeriodHeian;
use App\Models\ChronologyPeriodHeisei;
use App\Models\ChronologyPeriodKamakura;
use App\Models\ChronologyPeriodKohun;
use App\Models\ChronologyPeriodMeiji;
use App\Models\ChronologyPeriodMuromachi;
use App\Models\ChronologyPeriodNanbokucho;
use App\Models\ChronologyPeriodNara;
use App\Models\ChronologyPeriodReiwa;
use App\Models\ChronologyPeriodSyowa;
use App\Models\ChronologyPeriodTaisyo;
use App\Models\ChronologyGenreAccident;
use App\Models\ChronologyGenreCulture;
use App\Models\ChronologyGenreDisaster;
use App\Models\ChronologyGenreEconomy;
use App\Models\ChronologyGenrePolitics;
use App\Models\ChronologyGenreWars;
use App\Models\Gallery;
use App\Models\Citation;
use App\Models\Question;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function() {
    return view('homes/home');
});
Route::get('/', [ChronologyController::class, 'home']);

Route::get('/chronology', function() {
    $chronologies = Chronology::all();
    return view('chronologies/chronology', compact('chronologies'));
});
Route::get('/chronologies/chronology', [ChronologyController::class, 'chronology']);

Route::get('/period', function() {
    $chronology_period_kohuns = ChronologyPeriodKohun::all();
    $chronology_period_asukas = ChronologyPeriodAsuka::all();
    $chronology_period_naras = ChronologyPeriodNara::all();
    $chronology_period_heians = ChronologyPeriodHeian::all();
    $chronology_period_kamakuras = ChronologyPeriodKamakura::all();
    $chronology_period_nanbokuchos = ChronologyPeriodNanbokucho::all();
    $chronology_period_muromachis = ChronologyPeriodMuromachi::all();
    $chronology_period_aduchimomoyamas = ChronologyPeriodAduchimomoyama::all();
    $chronology_period_edos = ChronologyPeriodEdo::all();
    $chronology_period_meijis = ChronologyPeriodMeiji::all();
    $chronology_period_taisyos = ChronologyPeriodTaisyo::all();
    $chronology_period_syowas = ChronologyPeriodSyowa::all();
    $chronology_period_heiseis = ChronologyPeriodHeisei::all();
    $chronology_period_reiwas = ChronologyPeriodReiwa::all();
    return view('chronologies/period',compact(
        'chronology_period_kohuns',
        'chronology_period_asukas',
        'chronology_period_naras',
        'chronology_period_heians',
        'chronology_period_kamakuras',
        'chronology_period_nanbokuchos',
        'chronology_period_muromachis',
        'chronology_period_aduchimomoyamas',
        'chronology_period_edos',
        'chronology_period_meijis',
        'chronology_period_taisyos',
        'chronology_period_syowas',
        'chronology_period_heiseis',
        'chronology_period_reiwas',
        ));
});
Route::get('/chronologies/period', [ChronologyController::class, 'period']);

Route::get('/genre', function() {
    $chronology_genre_accidents = ChronologyGenreAccident::all();
    $chronology_genre_cultures = ChronologyGenreCulture::all();
    $chronology_genre_disasters = ChronologyGenreDisaster::all();
    $chronology_genre_economies = ChronologyGenreEconomy::all();
    $chronology_genre_politics = ChronologyGenrePolitics::all();
    $chronology_genre_wars = ChronologyGenreWars::all();
    return view('chronologies/genre', compact(
        'chronology_genre_accidents',
        'chronology_genre_cultures',
        'chronology_genre_disasters',
        'chronology_genre_economies',
        'chronology_genre_politics',
        'chronology_genre_wars',
        ));
});
Route::get('/chronologies/genre', [ChronologyController::class, 'genre']);

Route::get('/gallery', function() {
    $galleries = Gallery::all();
    return view('galleries/gallery', compact('galleries'));
});
Route::get('/galleries/gallery', [GalleryController::class, 'gallery']);

Route::get('/citation', function() {
    $citations = Citation::all();
    return view('citations/citation', compact('citations'));
});
Route::get('/citations/citation', [ReferenceController::class, 'citation']);

Route::get('/question', function() {
    $questions = Question::all();
    return view('questions/question', compact('questions'));
});
Route::get('/questions/question', [QuestionController::class, 'question']);

Route::get('/create', [ChronologyController::class, 'add']);

Route::post('/create', [ChronologyController::class, 'create']);

Route::get('/post-choice', function () {
    return view('/posts/post-choice');
})->middleware(['auth', 'verified'])->name('post-choice');

Route::get('/picture-create', [GalleryController::class, 'create']);
Route::post('/galleries', [GalleryController::class, 'store']);

Route::get('/question-create', [QuestionController::class, 'create']);
Route::post('/questions', [QuestionController::class, 'store']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
