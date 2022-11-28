<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Chronology;
use App\Models\ChronologyGenreDisaster;

class ChronologyGenreDisasterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chronology_genre_disasters')->insert([
            'id' => '1707112301',
            'event_date' => '宝永4年(1707年)11月23日',
            'event_subject' => '富士山大噴火(宝永大噴火)',
            'event_detail' => '1707年、富士山が大噴火し、駿河・相模などの国々で、降灰により大きな被害が発生した。',
        ]);
        DB::table('chronology_genre_disasters')->insert([
            'id' => '1783070801',
            'event_date' => '天明3年(1783年)07月08日',
            'event_subject' => '天明大噴火(浅間山の大噴火)',
            'event_detail' => '1783年、熱泥流による埋没家屋は約1800戸、死者1443人の被害を出した浅間山の大噴火。噴火は3ヶ月以上に及び、2億トンもの多量の火山灰で大凶作、餓死者約100万人。大量の火山噴出物で天候不順、天明の飢饉の一因となった。江戸でも火山灰が3cmほど積ったという。',
        ]);
        DB::table('chronology_genre_disasters')->insert([
            'id' => '1854110401',
            'event_date' => '安政元年(1854年)11月04日',
            'event_subject' => '安政東海地震',
            'event_detail' => '午前9時〜10時頃に発生。M8.4、死者2000〜3000人と推定。南海トラフ巨大地震の一つとされる。',
        ]);
        DB::table('chronology_genre_disasters')->insert([
            'id' => '1855100201',
            'event_date' => '安政2年(1855年)10月02日',
            'event_subject' => '安政江戸地震',
            'event_detail' => '安政の大地震。午後10時ごろ発生。M7.0〜7.1、死者4700〜11000人と推定。南関東直下地震の一つとされる。',
        ]);
        DB::table('chronology_genre_disasters')->insert([
            'id' => '1891102801',
            'event_date' => '明治24年(1891年)10月28日',
            'event_subject' => '濃尾地震',
            'event_detail' => 'M8.0、死者7273人。日本史上最大の内陸地殻内地震(＝直下型地震)。',
        ]);
        DB::table('chronology_genre_disasters')->insert([
            'id' => '1914011201',
            'event_date' => '大正3年(1914年)01月12日',
            'event_subject' => '桜島の大正大噴火',
            'event_detail' => '1915年（大正4年）9月頃まで続いたと推定されている桜島の噴火。20世紀以降、日本で起きた火山噴火の中で噴出物量では最大であり、噴火中に起きた桜島地震による死者等を含めて58名の死者、行方不明者を出したとされ、噴火前は島であった桜島は、大正大噴火による溶岩流出によって大隅半島と地続きになった。',
        ]);
        DB::table('chronology_genre_disasters')->insert([
            'id' => '1923090101',
            'event_date' => '大正12年(1923年)09月01日',
            'event_subject' => '関東大震災',
            'event_detail' => '相模トラフ巨大地震、M7.9、死者・行方不明者105,385人(9割が火災による犠牲者)。「関東大震災」。発生時間午前11時58分31.6秒。全壊した住家は10万9713戸。無政府状態に。帝国ホテルでは新館の落成披露宴が行われる予定だった。午後1時。至る所で火の手があがり、火災発生箇所は134にのぼった。帝国劇場と警視庁も炎上。警視庁の火災により、電信電話などの通信手段が使用不能になり、事態の把握が不可能になった。帝国ホテルは火災による深刻な被害を免れ、その後各国の大使館や大企業の仮事務所が置かれ救援活動の中心になっていく。午後2時。凌雲閣から火の手があがる。被害を免れた東京駅や上野公園などで多数の避難者。午後4時。両国にあった公園予定地として更地になっていたため4万人が避難してきていた陸軍被服廠跡で、火災旋風と呼ばれる、大きな火災によって生まれた強い上昇気流に横風が吹き込むことで生じる渦が巨大化して発生したものにより、3万8,000人が命を落とした。',
        ]);
        DB::table('chronology_genre_disasters')->insert([
            'id' => '1959092601',
            'event_date' => '昭和34年(1959年)09月26日',
            'event_subject' => '伊勢湾台風',
            'event_detail' => '伊勢湾台風がこの日、和歌山県潮岬付近に上陸。最低海面気圧895hPa。死者・行方不明者5098人、負傷者38921人、住家被害833,965棟、浸水被害363,611棟。紀伊半島沿岸一帯と伊勢湾沿岸の高潮被害など。',
        ]);
        DB::table('chronology_genre_disasters')->insert([
            'id' => '1960052301',
            'event_date' => '昭和35年(1960年)05月23日',
            'event_subject' => 'チリ地震津波',
            'event_detail' => '地震の規模は観測史上最大。東北地方を中心に太平洋側で津波により大きな被害。',
        ]);
        DB::table('chronology_genre_disasters')->insert([
            'id' => '1995011701',
            'event_date' => '平成7年(1995年)01月17日',
            'event_subject' => '平成7年(1995年)兵庫県南部地震',
            'event_detail' => 'M7.3、死者6434人、行方不明者3人、住宅被害63万9,689棟。「阪神・淡路大震災」。午前5時46分発生。兵庫県内に震度７の地域。家屋の倒壊や火災により大きな被害。高速道路や新幹線の高架にも被害。',
        ]);
        DB::table('chronology_genre_disasters')->insert([
            'id' => '2011031101',
            'event_date' => '平成23年(2011年)03月11日',
            'event_subject' => '東日本大震災',
            'event_detail' => '正式名称は「平成23(2011年)年東北地方太平洋沖地震」。三陸沖地震、M8.4〜9.0、死者19,747人、行方不明者2,556人、40.1mの大津波。住家全壊121,781棟、住家半壊280,962棟、住家一部破損745,162棟など。発生時刻14時46分18.1秒。栗原市(宮城県)で震度７。東北地方を中心に津波により大きな被害。長周期地震動や液状化現象により被害も発生。',
        ]);
        DB::table('chronology_genre_disasters')->insert([
            'id' => '2013112001',
            'event_date' => '平成25年(2013年)11月20日',
            'event_subject' => '西之島噴火',
            'event_detail' => '小笠原諸島の無人島、西之島近海で39年ぶりに噴火が発生。',
        ]);
        DB::table('chronology_genre_disasters')->insert([
            'id' => '2016041401',
            'event_date' => '平成28年(2016年)04月14日',
            'event_subject' => '熊本地震',
            'event_detail' => '平成28年(2016年)熊本地震の前震。M6.5。住家全壊8,668棟、住家半壊34,718棟、住家一部破損162,557棟など。益城町(熊本県)で震度７。家屋等の被害のほか、大規模な山崩れが発生。',
        ]);
    }
}
