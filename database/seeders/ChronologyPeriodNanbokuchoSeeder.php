<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Chronology;
use App\Models\ChronologyPeriodNanbokucho;

class ChronologyPeriodNanbokuchoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chronology_period_nanbokuchos')->insert([
            'id' => '1336110701',
            'event_date' => '建武3年(1336年)11月07日',
            'event_subject' => '建武式目発表',
            'event_detail' => '中原章賢(是円)らが足利尊氏の諮問に対して出した答申。幕府を鎌倉におくか京都とするか、今後どのような法を採用すべきかという諮問に対し、鎌倉からの移転は世論に従うべきことなどを17条にまとめた。幕府を開く目的で基本政策17カ条を発表。室町幕府成立。',
        ]);
        DB::table('chronology_period_nanbokuchos')->insert([
            'id' => '1338070201',
            'event_date' => '建武5年(1338年)07月02日',
            'event_subject' => '藤島の戦い',
            'event_detail' => '新田義貞は、建武政府で武者所頭人となった。足利尊氏の離反後、恒良親王を奉じて北陸に下り、室町幕府に抗したが、越前国藤島で戦死した。',
        ]);
        DB::table('chronology_period_nanbokuchos')->insert([
            'id' => '1338081101',
            'event_date' => '建武5年(1338年)08月11日',
            'event_subject' => '足利尊氏、征夷大将軍就任',
            'event_detail' => '足利氏は源義家の孫義康が下野国足利荘に土着した豪族。有力御家人として北条高時の親任厚く、高氏と名乗る。元弘の変では幕府軍として出兵したが、天皇側に通じて六波羅探題を攻略。天皇の名尊治の一字を許され尊氏と改名。建武政府に対する武士の不満を糾合して、中先代の乱を機に離反。1338年、持明院統の光明天皇を擁して室町幕府を開き、初代将軍(在職1338〜1358)となる。',
        ]);
        DB::table('chronology_period_nanbokuchos')->insert([
            'id' => '1350102601',
            'event_date' => '観応元年(1350年)10月26日',
            'event_subject' => '観応の擾乱',
            'event_detail' => '観応年間（1350〜1352年）の足利尊氏・足利直義(足利尊氏の弟)両派の内紛、及びそれに連動した全国的争乱をいう。1350年に直義と尊氏派の高師直とが衝突し、51年に師直が敗死した。ついで直義は鎌倉に逃れたが、1352年、尊氏によって毒殺され、擾乱は収束した。この間、直義・尊氏がそれぞれ一時的に南朝と和睦するなど、南朝の勢力回復、南北朝動乱の長期化につながった。',
        ]);
        DB::table('chronology_period_nanbokuchos')->insert([
            'id' => '1392102701',
            'event_date' => '明徳3年(1392年)10月27日',
            'event_subject' => '明徳の和約（南北朝の合体）',
            'event_detail' => '足利義満の仲介で、南朝方の後亀山天皇の京都帰還が実現。北朝方の後小松天皇への神器譲渡により、半世紀に及ぶ南北朝の対立が終わった。合体の条件は、両朝が交替で皇位につき、公領は南朝の皇統が相続することであったが、守られなかった。以後、持明院統が皇位を継承、後亀山天皇は1410年に吉野に戻って皇位回復運動を続けた。1336年、足利尊氏が建武政権を倒し、持明院統の光明天皇を擁立。一方、大覚寺統の後醍醐天皇は吉野に移り、両統の朝廷が並立した。両朝は諸国の守護・豪族の支持を受けて抗争し、国人らの対立も加わり、内乱は全国化した。南朝が劣勢であったが、観応の擾乱により幕府側が分裂し、動乱は長期化した。足利義満が幕政を安定させると、1392年に南北朝は合体した。',
        ]);
    }
}
