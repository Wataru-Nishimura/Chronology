<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Chronology;
use App\Models\ChronologyGenreEconomy;

class ChronologyGenreEconomySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chronology_genre_economies')->insert([
            'id' => '1985092201',
            'event_date' => '昭和60年(1985年)09月22日',
            'event_subject' => 'プラザ合意',
            'event_detail' => '日米英仏独五カ国財務相中央銀行総裁会議にて合意。ドル高是正のために協調介入、１ドル＝140～150円台に。過度のドル高是正のため、ニューヨークのプラザホテルで開かれたG5で、日本・アメリカ・ドイツ3国の通貨当局による協調介入が合意された。このとき1ドル＝240円台の円相場は1年半後には150円台にまで上昇した。その後、日本では急激な円高が進んで不況に陥る一方、国内産業の空洞化が起こった。これに対して日本銀行が金融緩和政策をとったため、バブル経済の発生とその後の破綻をもたらした。',
        ]);
        DB::table('chronology_genre_economies')->insert([
            'id' => '1989122901',
            'event_date' => '平成元年(1989年)12月29日',
            'event_subject' => '日経平均株価史上最高値',
            'event_detail' => '日経平均株価が3万8915円87銭で史上最高値（終値）。平成はバブル景気の絶頂期でスタート。平成元年最後の立ち会いで過去最高値をつけた。しかしここがピーク。この後、株価は下がり1992年には半値の２万円を割り、さらに下落していく。',
        ]);
        DB::table('chronology_genre_economies')->insert([
            'id' => '1990032701',
            'event_date' => '平成2年(1990年)03月27日',
            'event_subject' => '大蔵省「不動産融資の総量規制」通達',
            'event_detail' => '旧大蔵省は地価高騰への対策として、銀行、生命保険、損害保険会社に対し、不動産業向けの融資を貸し出し全体の伸び以下に抑えるよう求める通達を出した。投機熱に急ブレーキがかかり、後にバブル崩壊の「犯人」とされた。',
        ]);
        DB::table('chronology_genre_economies')->insert([
            'id' => '1992111101',
            'event_date' => '平成5年(1993年)11月11日',
            'event_subject' => '外国産米の緊急輸入',
            'event_detail' => 'この夏は記録的な冷夏・長雨で戦後最悪、「平成の大凶作」となった。翌年、緊急輸入米と国産米を混ぜ合わせるブレンド米の販売を中心とする方針が打ち出されたが、本格的販売を前に「国産米を買い占めたい」という消費者が小売店に行列を作った。ヤミ米も社会問題化し「平成の米騒動」が全国に広がった。',
        ]);
        DB::table('chronology_genre_economies')->insert([
            'id' => '2001031901',
            'event_date' => '平成13年(2001年)03月19日',
            'event_subject' => '日銀が初の「量的金融緩和政策」開始',
            'event_detail' => 'デフレ対策で金利に代わって巨額の資金を金融市場に供給する「量的金融緩和」に踏み出した。事実上のゼロ金利政策の復活。',
        ]);
        DB::table('chronology_genre_economies')->insert([
            'id' => '2013040401',
            'event_date' => '平成25年(2013年)04月04日',
            'event_subject' => '日銀が量的・質的金融緩和導入決定',
            'event_detail' => '日銀が量的・質的金融緩和（異次元緩和）の導入を決定。',
        ]);
        DB::table('chronology_genre_economies')->insert([
            'id' => '2018123001',
            'event_date' => '平成30年(2018年)12月30日',
            'event_subject' => 'TPP11発効',
            'event_detail' => '正式名称は「包括的及び先進的な環太平洋パートナーシップ協定（Comprehensive and Progressive Agreement for Trans-Pacific Partnership：CPTPP）」。TPPは「例外なき貿易自由化」をスローガンとしている。しかし、各国の利害関係の調整は難しく、交渉の末に合意に達したが、2017年にアメリカが離脱を表明した。そのため、アメリカを除く11か国は新たに協定を締結することで合意。',
        ]);
    }
}
