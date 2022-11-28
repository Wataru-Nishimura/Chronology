<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\Chronology;
use App\Models\ChronologyGenreAccident;
use App\Models\ChronologyGenreCulture;
use App\Models\ChronologyGenreDisaster;
use App\Models\ChronologyGenreEconomy;
use App\Models\ChronologyGenrePolitics;
use App\Models\ChronologyGenreWars;
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
use Storage;
use Carbon\Carbon;

class ChronologyController extends Controller
{
    public function home(Chronology $chronology)
    {
        return view('homes/home')->with(['chronologies' => $chronology->where('date', '=', Carbon::now()->format("m/d"))->get()]);
    }
    
    public function chronology(Chronology $chronology)
    {
        return view('chronologies/chronology')->with(['chronologies' => $chronology->get()]);
    }
    
    public function genre(
        ChronologyGenreAccident $chronology_genre_accident,
        ChronologyGenreCulture $chronology_genre_culture,
        ChronologyGenreDisaster $chronology_genre_disaster,
        ChronologyGenreEconomy $chronology_genre_economy,
        ChronologyGenrePolitics $chronology_genre_politics,
        ChronologyGenreWars $chronology_genre_war
        )
    {
        return view('chronologies/genre')->with([
            'chronology_genre_wars' => $chronology_genre_war->get(),
            'chronology_genre_politicss' => $chronology_genre_politics->get(),
            'chronology_genre_economies' => $chronology_genre_economy->get(),
            'chronology_genre_disasters' => $chronology_genre_disaster->get(),
            'chronology_genre_cultures' => $chronology_genre_culture->get(),
            'chronology_genre_accidents' => $chronology_genre_accident->get()
            ]);
    }
    
    public function period(
        ChronologyPeriodAduchimomoyama $chronology_period_aduchimomoyama, 
        ChronologyPeriodAsuka $chronology_period_asuka, 
        ChronologyPeriodEdo $chronology_period_edo,
        ChronologyPeriodHeian $chronology_period_heian,
        ChronologyPeriodHeisei $chronology_period_heisei,
        ChronologyPeriodKamakura $chronology_period_kamakura,
        ChronologyPeriodKohun $chronology_period_kohun,
        ChronologyPeriodMeiji $chronology_period_meiji,
        ChronologyPeriodMuromachi $chronology_period_muromachi,
        ChronologyPeriodNanbokucho $chronology_period_nanbokucho,
        ChronologyPeriodNara $chronology_period_nara,
        ChronologyPeriodReiwa $chronology_period_reiwa,
        ChronologyPeriodSyowa $chronology_period_syowa,
        ChronologyPeriodTaisyo $chronology_period_taisyo
        )
    {
        return view('chronologies/period')->with([
            'chronology_period_aduchimomoyamas' => $chronology_period_aduchimomoyama->get(), 
            'chronology_period_asukas' => $chronology_period_asuka->get(), 
            'chronology_period_edos' => $chronology_period_edo->get(), 
            'chronology_period_heians' => $chronology_period_heian->get(),
            'chronology_period_heiseis' => $chronology_period_heisei->get(),
            'chronology_period_kamakuras' => $chronology_period_kamakura->get(),
            'chronology_period_kohuns' => $chronology_period_kohun->get(),
            'chronology_period_meijis' => $chronology_period_meiji->get(),
            'chronology_period_muromachis' => $chronology_period_muromachi->get(),
            'chronology_period_nanbokuchos' => $chronology_period_nanbokucho->get(),
            'chronology_period_naras' => $chronology_period_nara->get(),
            'chronology_period_reiwas' => $chronology_period_reiwa->get(),
            'chronology_period_syowas' => $chronology_period_syowa->get(),
            'chronology_period_taisyos' => $chronology_period_taisyo->get()
            ]);
    }
    
    public function add()
    {
        return view('gallerys/create');
    }
    
    public function create(Request $request)
    {
        $gallery = new Gallery;
        $form = $request->all();

        //s3アップロード開始
        $image = $request->file('image');
        // バケットの`myprefix`フォルダへアップロード
        $path = Storage::disk('s3')->putFile('myprefix', $image, 'public');
        // アップロードした画像のフルパスを取得
        $post->image_path = Storage::disk('s3')->url($path);

        $post->save();

        return view('gallerys/create');
    }
}
?>