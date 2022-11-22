<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Chronology;

class ChronologyPeriodAsukaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chronologyperiodasukas')->insert([
            'id' => '0593041001',
            'event_date' => '推古天皇元年(593年)04月10日',
            'event_subject' => '聖徳太子が推古天皇の摂政に就任',
            'event_detail' => '推古天皇は、欽明天皇の皇女（炊屋姫）で、敏達天皇の大后（皇后）。崇峻天皇の死後、群臣に擁立されて最初の女性天皇になり、聖徳太子を政に参画させた。聖徳太子の父は、用明天皇。厩戸王（厩戸皇子）と呼ばれ、上宮王ともいう。冠位十二階・憲法十七条・遣隋使派遣により王権を強化して集権的官僚国家を準備し、仏教興隆・国史編纂を行ったという。奈良県桜井市の上之宮遺跡は、太子が住んだ上宮の跡であるとする説もある。605年、一族と斑鳩宮に遷居。',
        ]);
        DB::table('chronologyperiodasukas')->insert([
            'id' => '0603120501',
            'event_date' => '推古天皇11年(603年)12月05日',
            'event_subject' => '冠位十二階の制を制定',
            'event_detail' => '徳・仁・礼・信・義・智の6種を大小に分けて12階とし、色別の冠を授ける冠位制度。氏姓制度の門閥世襲を打破し、人材登用の道を開き、豪族を官人（律令制下の官吏）に編成していく第一歩。',
        ]);
        DB::table('chronologyperiodasukas')->insert([
            'id' => '0604040301',
            'event_date' => '推古天皇12年(604年)04月03日',
            'event_subject' => '憲法十七条の制定',
            'event_detail' => '天皇への服従（承詔必謹）や衆議尊重・仏法僧（三宝）崇敬など、官人への道徳的訓戒を内容とする。聖徳太子真撰説・偽作説がある。',
        ]);
        DB::table('chronologyperiodasukas')->insert([
            'id' => '0607070301',
            'event_date' => '推古天皇15年(607年)07月03日',
            'event_subject' => '小野妹子を隋に派遣',
            'event_detail' => '小野妹子が「日出処天子・・・」の国書を持って渡海し、翌年、答礼使の裴世清と共に帰国。',
        ]);
        DB::table('chronologyperiodasukas')->insert([
            'id' => '0645061201',
            'event_date' => '大化元年(645年)06月12日',
            'event_subject' => '乙巳の変',
            'event_detail' => '中大兄皇子・中臣鎌足らにより板蓋宮で入鹿を暗殺された。最終的に蘇我本宗家の蘇我蝦夷・入鹿父子が滅ぼされた。この後に起こった一連の改革が大化改新である。大化改新では、氏姓制度の弊害を打破し、唐の律令制を基に天皇中心の中央集権国家建設を目標としたとされる。',
        ]);
        DB::table('chronologyperiodasukas')->insert([
            'id' => '0663082701',
            'event_date' => '天智天皇2年(663年)08月27日',
            'event_subject' => '白村江の戦い',
            'event_detail' => '朝鮮半島南部の白村江（錦江河口）で行われた倭・百済軍と唐・新羅連合軍との戦い。百済救援のため朝鮮半島に赴いた倭の水軍は、白村江で唐の水軍に大敗した。白村江岸上でも、文武王の新羅軍に倭・百済軍が敗れた。百済の復興はならず、倭は朝鮮半島の足場を失った。',
        ]);
        DB::table('chronologyperiodasukas')->insert([
            'id' => '0672062401',
            'event_date' => '弘文天皇元年(672年)06月24日',
            'event_subject' => '壬申の乱',
            'event_detail' => '671年に天智天皇が崩御した翌年、大友皇子の近江朝廷側と吉野の大海人皇子とが皇位をめぐって争った内乱。大海人皇子は近習の下級官人である舎人や大伴氏・地方豪族などの協力を得て、東国の兵の動員に成功し、勝利。',
        ]);
        DB::table('chronologyperiodasukas')->insert([
            'id' => '0686090901',
            'event_date' => '朱雀元年(686年)09月09日',
            'event_subject' => '天武天皇崩御',
            'event_detail' => '天武天皇は、舒明天皇の子、天智天皇の弟で大海人皇子という。壬申の乱後、飛鳥浄御原宮で即位。皇族を重用して天皇政治を強化し、八色の姓を制定。新冠位48階を定め、立札の礼法も整える。飛鳥浄御原律令や国史の編纂にも着手。',
        ]);
        DB::table('chronologyperiodasukas')->insert([
            'id' => '0694120601',
            'event_date' => '持統天皇8年(694年)12月06日',
            'event_subject' => '藤原京に遷都',
            'event_detail' => '畝傍・耳成・天香具（久）山の大和三山に囲まれた地に、天武朝から造営が始まり、持統天皇が完成させ、694年に遷都した都。最初の本格的都城で、694〜710年の都。当初は新益京、新城と呼ばれ、喜田貞吉により藤原京と命名された。唐の長安城よりも、北魏洛陽城や『周礼』に記された理想の都と共通する点が多い。',
        ]);
        DB::table('chronologyperiodasukas')->insert([
            'id' => '0701080301',
            'event_date' => '大宝元年(701年)08月03日',
            'event_subject' => '大宝律令完成',
            'event_detail' => '令は701年、律は702年に施行。文武天皇の命で、刑部親王・藤原不比等ら19人で編集。律6巻、令11巻は共に伝わらず、大宝令は『令集解』（養老令の注釈書）などに一部引用され、伝存する。唐の律令を参考にした部分が多い（例：帝の嫡男が継承すること）日本独自の制度も（太上天皇の設置：天皇と同等の権力、天皇を補佐）「律」：処罰などの刑法「令」：身分や役職などを細かく分類する行政法',
        ]);
        DB::table('chronologyperiodasukas')->insert([
            'id' => '0708031501',
            'event_date' => '和銅元年(708年)03月15日',
            'event_subject' => '藤原不比等、右大臣就任',
            'event_detail' => '藤原不比等は中臣鎌足の子。大宝律令の制定に参画し、平城遷都に尽力。養老律令編纂の中心となる。娘宮子が文武天皇夫人として聖武天皇を生み、藤原氏が外戚になる端緒を作る。女官として後宮で大きな力を持っていた県犬養橘三千代（光明子母）は不人の後妻。',
        ]);
    }
}
