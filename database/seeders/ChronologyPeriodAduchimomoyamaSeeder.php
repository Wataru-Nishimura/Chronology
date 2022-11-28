<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Chronology;
use App\Models\ChronologyPeriodAduchimomoyama;

class ChronologyPeriodAduchimomoyamaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chronology_period_aduchimomoyamas')->insert([
            'id' => '1568101801',
            'event_date' => '永禄11年(1568年)10月18日',
            'event_subject' => '足利義昭、征夷大将軍就任',
            'event_detail' => '足利義昭は、室町幕府15代将軍(在職1568〜1573)。信長に擁立されて将軍となる。やがて反信長勢力の結集を策動、1573年、信長に追放され、室町幕府は滅亡。',
        ]);
        DB::table('chronology_period_aduchimomoyamas')->insert([
            'id' => '1569011101',
            'event_date' => '永禄12年(1569年)01月11日',
            'event_subject' => '上杉謙信、武田信玄に塩を贈る',
            'event_detail' => '上杉謙信が、塩不足に悩む交戦中の武田信玄に塩を贈る。武田信玄と上杉謙信は1553〜1564年、5回にわたって信濃国川中島で戦う。1561年の4回目の衝突は激戦となったが、勝敗は決しなかった。',
        ]);
        DB::table('chronology_period_aduchimomoyamas')->insert([
            'id' => '1573071901',
            'event_date' => '天正元年(1573年)07月19日',
            'event_subject' => '室町幕府滅亡',
            'event_detail' => '織田信長と不和になった室町幕府15代将軍義昭は、毛利・朝倉・武田氏や石山本願寺などの反信長勢力と結んで、信長打倒を図った。1573年、信長は京都二条城に義昭を囲み、降伏した義昭は宇治槙島に移り、再度抗戦して敗れ、河内若江の三好義継に身を寄せ、幕府は滅亡した。',
        ]);
        DB::table('chronology_period_aduchimomoyamas')->insert([
            'id' => '1575052101',
            'event_date' => '天正3年(1575年)05月21日',
            'event_subject' => '長篠の戦い',
            'event_detail' => '三河長篠で信長・家康の連合軍が武田勝頼軍を敗った戦い。馬防柵を組んだ足軽鉄砲隊の一斉射撃で、武田の騎馬隊を大敗させた。双方の軍は鉄砲を使用したが、武田軍は銅銭から弾丸を製造、織田軍の鉄砲玉は鉛で製造。織田軍は、ポルトガルの交易船によりタイの鉱山でとれた鉛を日本に輸入。宣教師によるキリスト教布教のための軍事支援を受けていた。',
        ]);
        DB::table('chronology_period_aduchimomoyamas')->insert([
            'id' => '1577092301',
            'event_date' => '天正5年(1577年)09月23日',
            'event_subject' => '手取川の戦い',
            'event_detail' => '加賀国の手取川において上杉謙信軍が織田信長軍を撃破したとされる合戦。上杉謙信は、父は越後守護代長尾為景。主家の上杉憲政から家督と関東管領職を受け、上杉氏を名乗る。のち出家して謙信と号す。武田氏と川中島で戦い、関東に兵を進めて北条氏と争い、越中・能登にも兵を進めたが病死。',
        ]);
        DB::table('chronology_period_aduchimomoyamas')->insert([
            'id' => '1578120401',
            'event_date' => '天正6年(1578年)12月04日',
            'event_subject' => '第二次木津川口の戦い',
            'event_detail' => '織田水軍の勝利。九鬼嘉隆に毛利水軍の焙烙火矢が効かない鉄甲船の造船を命令。',
        ]);
        DB::table('chronology_period_aduchimomoyamas')->insert([
            'id' => '1579051101',
            'event_date' => '天正7年(1579年)05月11日',
            'event_subject' => '安土城天主完成',
            'event_detail' => '安土城は、信長が近江に築いた最初の近世的城郭。信長が滅ぼした六角氏の観音寺城など、付近の城跡から資材を運び築城。五層七重の天主は、1579年に落成。1582年、本能寺の変後に焼失した。',
        ]);
        DB::table('chronology_period_aduchimomoyamas')->insert([
            'id' => '1582060201',
            'event_date' => '天正10年(1582年)6月2日',
            'event_subject' => '本能寺の変',
            'event_detail' => '早朝5時ごろ、明智光秀が主君織田信長を京都の本能寺に襲って殺した事件。信長の長子信忠も、二条御所で防戦の末に自殺した。',
        ]);
        DB::table('chronology_period_aduchimomoyamas')->insert([
            'id' => '1582062701',
            'event_date' => '天正10年(1582年)6月27日',
            'event_subject' => '清洲会議',
            'event_detail' => '織田家後継者および遺領の配分を決定することを目的に、尾張国清洲城（愛知県清須市）で開催された。集まった織田家家臣は柴田勝家、丹羽長秀、羽柴秀吉、池田恒興の4人。結果として信忠の嫡男三法師が織田家家督を継ぎ、叔父の織田信雄と信孝が後見人となり、傅役として堀秀政が付き、これを執権として羽柴秀吉、柴田勝家、丹羽長秀、池田恒興の4重臣が補佐する体制ができた。羽柴秀吉には河内国と山城国が増領され、丹波国も含めると28万石の加増になり、柴田勝家と逆転した。',
        ]);
        DB::table('chronology_period_aduchimomoyamas')->insert([
            'id' => '1583042101',
            'event_date' => '天正11年(1583年)04月21日',
            'event_subject' => '賤ヶ岳の戦い',
            'event_detail' => '近江の賤ヶ岳付近で羽柴秀吉が柴田勝家を破った戦い。秀吉は、実質的に織田信長の後継者の地位を固めた。（賤ヶ岳の七本槍：脇坂安治・片桐且元・平野長泰・福島正則・加藤清正・糟屋武則・加藤嘉明）',
        ]);
        DB::table('chronology_period_aduchimomoyamas')->insert([
            'id' => '1583042401',
            'event_date' => '天正11年(1583年)04月24日',
            'event_subject' => '北ノ庄城の戦い',
            'event_detail' => '柴田勝家は、賤ヶ岳の戦いで敗れ、北庄でお市の方ともに自害した。',
        ]);
        DB::table('chronology_period_aduchimomoyamas')->insert([
            'id' => '1587100101',
            'event_date' => '天正15年(1587年)10月01日',
            'event_subject' => '北野大茶湯開催',
            'event_detail' => '秀吉が京都北野神社で行った茶会。身分や貧富の別なく、自由に参集を求めた。秀吉・千利休・津田宗及・今井宗久の茶席が設けられた。',
        ]);
        DB::table('chronology_period_aduchimomoyamas')->insert([
            'id' => '1591012201',
            'event_date' => '天正18年(1591年)01月22日',
            'event_subject' => '豊臣秀長死去',
            'event_detail' => '豊臣秀長は、豊臣秀吉の異父弟。豊臣政権において内外の政務及び軍事面で活躍を見せ、天下統一に貢献した。秀吉は秀長を隣に配して重用し、また秀長も秀吉に異を唱え制御できる人物であった。短期間で成長を遂げ、徳川家康や伊達政宗など外様大名を抱える豊臣政権における調整役であり、政権の安定には欠かせぬ貴重な人物だった。',
        ]);
        DB::table('chronology_period_aduchimomoyamas')->insert([
            'id' => '1591082101',
            'event_date' => '天正18年(1591年)08月21日',
            'event_subject' => '人掃令（身分統制令）',
            'event_detail' => '武家奉公人が百姓・町人になることや百姓の転業を禁じた法令。武家奉公人が無断で主人をかえることも禁止。法令三カ条とも呼ばれ、朝鮮出兵のための武家奉公人と年貢の確保が目的であったが、士農商身分の制度的確立が進んだ。秀吉の発令に続き、1592年、秀次は全国の戸口調査を命じ、村ごとに家数・人数・老若男女などの人別を書き上げさせ、他国他郷の者の在住を禁じた。',
        ]);
        DB::table('chronology_period_aduchimomoyamas')->insert([
            'id' => '1597050401',
            'event_date' => '慶長2年(1597年)05月04日',
            'event_subject' => '伏見城天守完成',
            'event_detail' => '伏見城天守が完成し豊臣秀吉・秀頼らが移る。伏見城は秀吉晩年の邸宅を兼ねた城郭。秀吉の死後、家康が居館としたが、のち破壊。都久夫須麻神社(琵琶湖竹生島)の本殿・唐門や西本願寺の書院(鴻の間とも呼ばれる)・唐門はその遺構とされる。',
        ]);
        DB::table('chronology_period_aduchimomoyamas')->insert([
            'id' => '1598121601',
            'event_date' => '慶長3年(1598年)12月16日',
            'event_subject' => '露梁海戦',
            'event_detail' => '慶長の役。小西行長軍の巨済島への撤収成功。朝鮮ー明聯合水軍の勝利も、李舜臣は戦死。慶長の役は、文禄の役の日明和平交渉は、明使である沈惟敬の策などで秀吉の意図と大きく異なったため再出兵したもの。日本軍苦戦のうちに秀吉の死を迎え、その遺命により撤退した。李舜臣は、朝鮮の水軍を率い、亀甲船を考案して、日本軍の補給路を攪乱した。',
        ]);
        DB::table('chronology_period_aduchimomoyamas')->insert([
            'id' => '1600091501',
            'event_date' => '慶長5年(1600年)09月15日',
            'event_subject' => '関ヶ原の戦い',
            'event_detail' => '1600年、豊臣政権の前途を憂えた石田三成ら西軍が、徳川家康の東軍と戦って敗北した戦い。徳川の覇権が確立。天下分け目の戦いと称される。小早川秀秋の西軍からの離反が、勝敗に大きく影響した。西軍は、大坂城守備隊(毛利輝元)、本隊(石田三成・毛利秀元・宇喜多秀家・大谷吉継・小西行長・島津義弘)、上田城守備隊(真田昌幸・真田信繁)、奥羽本隊(上杉景勝・直江兼続)。東軍は本隊(徳川家康・黒田長政・藤堂高虎・浅野幸長・井伊直政・福島正則・細川忠興・織田長益)、中山道軍(徳川秀忠・榊原康政・仙石秀久・真田信幸)、対上杉守備隊(最上義光・伊達政宗・結城秀康)。東軍に寝返り(小早川秀秋・脇坂安治・赤座直保・朽木元綱・小川祐忠)。東軍に内応(吉川広家)。',
        ]);
        DB::table('chronology_period_aduchimomoyamas')->insert([
            'id' => '1602050101',
            'event_date' => '慶長7年(1602年)05月01日',
            'event_subject' => '二条城造営',
            'event_detail' => '徳川家康が諸大名に二条城造営を命じる。二条城は、家康が上洛時の居館として造営。濠をめぐらす平城で、桃山風の二の丸御殿とその前庭は芸術的価値も高い。',
        ]);
    }
}
