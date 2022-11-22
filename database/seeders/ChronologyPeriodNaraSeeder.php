<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Chronology;

class ChronologyPeriodNaraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chronologyperiodnaras')->insert([
            'id' => '0712012801',
            'event_date' => '和銅5年(712年)01月28日',
            'event_subject' => '太安万侶『古事記』を撰上',
            'event_detail' => '『古事記』は3巻で稗田阿礼の誦習した神代から推古天皇までの天皇系譜や天皇家の伝承を太安万侶(安麻呂)が筆録して、712年に元明天皇へ献上したもの。漢字の音訓を用いて日本語を文章に表現する。',
        ]);
        DB::table('chronologyperiodnaras')->insert([
            'id' => '0722042501',
            'event_date' => '養老6年(722年)04月25日',
            'event_subject' => '百万町歩の開墾計画',
            'event_detail' => '人口増加による口分田不足を補うため、722年に出された良田100万町歩を開墾する計画。対象が全国なのか奥羽地方のみなのか、意見が分かれている。',
        ]);
        DB::table('chronologyperiodnaras')->insert([
            'id' => '0737071301',
            'event_date' => '天平9年(737年)07月13日',
            'event_subject' => '藤原四子が天然痘で死去',
            'event_detail' => '藤原四子は藤原不比等の4人の兄弟をいう。武智麻呂(南家)・房前(北家)・宇合(式家)・麻呂(京家)。平安時代以降は、北家が隆盛した。長屋王の変後に実権を掌握したが、疫病（天然痘）で4人とも死去した。7月13日は麻呂が死去。房前は4月に死去しており、感染経路が異なると推測される。',
        ]);
        DB::table('chronologyperiodnaras')->insert([
            'id' => '0740090301',
            'event_date' => '天平12年(740年)09月03日',
            'event_subject' => '藤原広嗣の乱',
            'event_detail' => '740年、大宰少弐の藤原広嗣（式家の宇合の息子）が玄昉らの排除を求め九州で挙兵、敗死した事件。橘諸兄政権の下で牽制を強めた吉備真備・玄昉を除こうとした。',
        ]);
        DB::table('chronologyperiodnaras')->insert([
            'id' => '0743101501',
            'event_date' => '天平15年(743年)10月15日',
            'event_subject' => '大仏造立の詔',
            'event_detail' => '743年、聖武天皇が近江紫香楽宮で盧舎那仏（東大寺大仏）の大仏造立を宣言した詔。詔中の「天下の富を有つは朕なり。天下の勢を有つも朕なり」の言葉は有名。',
        ]);
        DB::table('chronologyperiodnaras')->insert([
            'id' => '0753120701',
            'event_date' => '天平勝宝5年(753年)12月07日',
            'event_subject' => '鑑真、屋久島に到着し来日',
            'event_detail' => '鑑真は、唐僧で日本への渡来を決意し、失敗を重ね盲目になりながら6度目の753年に屋久島に到着し来日。754年に入京して戒律を伝える。東大寺に初めて戒壇を設け、聖武太上天皇・光明皇太后・孝謙天皇らに授戒。のちに唐招提寺を開く。淡海三船著の『唐大和上（鑑真和上』は鑑真の日本渡航を記述している。',
        ]);
        DB::table('chronologyperiodnaras')->insert([
            'id' => '0757070401',
            'event_date' => '天平勝宝9年(757年)07月04日',
            'event_subject' => '橘奈良麻呂の変',
            'event_detail' => '橘奈良麻呂は橘諸兄の息子。藤原仲麻呂の台頭で勢力が後退し、大伴・佐伯・多治比氏らの旧豪族と結んで、757年に藤原仲麻呂を排除しようと図ったが失敗し、捕われて獄死した。',
        ]);
        DB::table('chronologyperiodnaras')->insert([
            'id' => '0764100901',
            'event_date' => '天平宝字8年(764年)10月09日',
            'event_subject' => '称徳天皇即位',
            'event_detail' => '孝謙太上天皇が重祚して称徳天皇となった。聖武天皇と光明皇后の皇女（阿倍内親王）。仏教を深く信仰し、752年に大仏開眼供養を挙行。藤原仲麻呂を用いたが、のちに道鏡を重用した。',
        ]);
        DB::table('chronologyperiodnaras')->insert([
            'id' => '0770082801',
            'event_date' => '神護景雲4年(770年)08月28日',
            'event_subject' => '道鏡、下野薬師寺別当に左遷',
            'event_detail' => '道鏡は法相宗の僧。孝謙太上天皇の病を癒し、信任を得て台頭した。仲麻呂の敗死後、765年に太政大臣禅師となり、仏教政治を行う。宇佐八幡神の神託と称し皇位を望んだが失敗し、770年称徳天皇崩御すると、下野薬師寺別当に左遷された。',
        ]);
    }
}
