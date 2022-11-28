<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Chronology;
use App\Models\ChronologyPeriodKohun;

class ChronologyPeriodKohunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chronology_period_kohuns')->insert([
            'id' => '0457111301',
            'event_date' => '雄略天皇元年(457年)11月13日',
            'event_subject' => '雄略天皇即位',
            'event_detail' => '考古学的に実在がほぼ確定している最初の天皇。5世紀末頃に在位したとされる大王。『日本書紀』にみえる名は大泊瀬幼武で、478年に宋の順帝に遣使・上表した倭王武と推定される。稲荷山古墳噴出土鉄剣銘にみえる「獲加多支鹵（ワカタケル）大王」はこの人物に当たる。',
        ]);
        DB::table('chronology_period_kohuns')->insert([
            'id' => '0507020401',
            'event_date' => '継体天皇元年(507年)02月04日',
            'event_subject' => '継体天皇即位',
            'event_detail' => '6世紀初めに在位。武烈天皇の死による仁徳系の子孫断絶後、大伴金村らによって男大迹王が北陸地方の越前から迎えられ即位して継体天皇となる。治世中に五経博士の来日、「任那四県」の割譲、磐井の乱があった。死後、欽明天皇と安閑・宣化天皇とが対立し、二つの朝廷が並存したとする説がある。現在の皇室まで繋がる天皇系統の始まり。',
        ]);
        DB::table('chronology_period_kohuns')->insert([
            'id' => '0527060301',
            'event_date' => '継体天皇21年(527年)06月03日',
            'event_subject' => '筑紫国造磐井の乱',
            'event_detail' => '筑紫国造磐井が新羅と結び、527年に起こした反乱。近江毛野を将とする朝廷の「任那」救援・新羅征討軍6万人を阻止。1年半後に物部麁鹿火（あらかひ）に鎮圧された。この乱の平定により、ヤマト政権の西日本支配と外交の一元化が完成。福岡県八女市の岩戸山古墳は磐井の墓と考えられる。',
        ]);
        DB::table('chronology_period_kohuns')->insert([
            'id' => '0538101201',
            'event_date' => '宣化天皇3年(538年)10月12日',
            'event_subject' => '仏教伝来',
            'event_detail' => '『日本書紀』には欽明天皇13壬申年(552)に、百済の聖明王が仏像・経論などを献じたとあり、仏教公伝の初めとされる。しかし、『上宮聖徳法王帝説』や『元興寺縁起』には、欽明天皇戊午年(538)伝来と記され、現在はこの説が有力とされる。伝来した仏教は、アジア北方に広がった北方仏教（大乗仏教）の系列。',
        ]);
        DB::table('chronology_period_kohuns')->insert([
            'id' => '0585033001',
            'event_date' => '敏達天皇14年(585年)03月30日',
            'event_subject' => '物部守屋、仏像・寺院等を焼き打ち',
            'event_detail' => '物部守屋は敏達・用明天皇の大連。仏教排斥を唱え、仏像・寺院等を焼き打ち。中臣氏と共に仏教受容に反対、皇位継承の争いも絡み、蘇我馬子と戦い敗死。',
        ]);
    }
}
