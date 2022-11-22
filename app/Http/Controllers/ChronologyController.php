<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chronology;
use App\Models\ChronologyGenreAccident;
use App\Models\ChronologyGenreCulture;
use App\Models\ChronologyGenreDisaster;
use App\Models\ChronologyGenreEconomy;
use App\Models\ChronologyGenrePolitics;
use App\Models\ChronologyGenreWar;
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

class ChronologyController extends Controller
{
    /*
    ※bladeファイルごとに一つ記述する
    public function bladeファイル名(モデル名 $bladeで使う変数名 ×n回)
    {
        return view('bladeファイルのディレクトリ指定')->with(['テーブル名' => $bladeで使う変数名->get()]);
    }
    */
    
    public function home(Chronology $chronology)
    {
        return view('homes/home')->with(['chronologies' => $chronology->get()]);
    }
    
    public function chronology(Chronology $chronology)
    {
        return view('chronologies/chronology')->with(['chronologies' => $chronology->get()]);
    }
    
    public function genre(ChronologyGenreAccident $chronologygenreaccident, ChronologyGenreCulture $chronologygenreculture, ChronologyGenreDisaster $chronologygenredisaster, ChronologyGenreEconomy $chronologygenreeconomy, ChronologyGenrePolitics $chronologygenrepolitics, ChronologyGenreWar $chronologygenrewar)
    {
        return view('chronologies/genre')->with(['chronologygenrewars' => $chronologygenrewar->get(), 'chronologygenrepoliticss' => $chronologygenrepolitics->get(), 'chronologygenreeconomys' => $chronologygenreeconomy->get(), 'chronologygenredisasters' => $chronologygenredisaster->get(), 'chronologygenrecultures' => $chronologygenreculture->get(), 'chronologygenreaccidents' => $chronologygenreaccident->get()]);
    }
    
    public function period(ChronologyPeriodAduchimomoyama $chronologyperiodaduchimomoyama, ChronologyPeriodAsuka $chronologyperiodasuka, ChronologyPeriodEdo $chronologyperiodedo, ChronologyPeriodHeian $chronologyperiodheian, ChronologyPeriodHeisei $chronologyperiodheisei, ChronologyPeriodKamakura $chronologyperiodkamakura, ChronologyPeriodKohun $chronologyperiodkohun, ChronologyPeriodMeiji $chronologyperiodmeiji, ChronologyPeriodMuromachi $chronologyperiodmuromachi, ChronologyPeriodNanbokucho $chronologyperiodnanbokucho, ChronologyPeriodNara $chronologyperiodnara, ChronologyPeriodReiwa $chronologyperiodreiwa, ChronologyPeriodSyowa $chronologyperiodsyowa, ChronologyPeriodTaisyo $chronologyperiodtaisyo)
    {
        return view('chronologies/period')->with(['chronologyperiodaduchimomoyamas' => $chronologyperiodaduchimomoyama->get(), 'chronologyperiodasukas' => $chronologyperiodasuka->get(), 'chronologyperiodedos' => $chronologyperiodedo->get(), 'chronologyperiodheians' => $chronologyperiodheian->get(), 'chronologyperiodheiseis' => $chronologyperiodheisei->get(), 'chronologyperiodkamakuras' => $chronologyperiodkamakura->get(), 'chronologyperiodkohuns' => $chronologyperiodkohun->get(), 'chronologyperiodmeijis' => $chronologyperiodmeiji->get(), 'chronologyperiodmuromachis' => $chronologyperiodmuromachi->get(), 'chronologyperiodnanbokuchos' => $chronologyperiodnanbokucho->get(), 'chronologyperiodnaras' => $chronologyperiodnara->get(), 'chronologyperiodreiwas' => $chronologyperiodreiwa->get(), 'chronologyperiodsyowas' => $chronologyperiodsyowa->get(), 'chronologyperiodtaisyos' => $chronologyperiodtaisyo->get()]);
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