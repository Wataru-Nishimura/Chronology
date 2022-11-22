<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Chronology;

class ChronologyPeriodMuromachiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chronologyperiodmuromachis')->insert([
            'id' => '1399122101',
            'event_date' => '応永6年(1399年)12月21日',
            'event_subject' => '応永の乱',
            'event_detail' => '６カ国(周防・長門・石見・豊前・和泉・紀伊)守護の大内義弘が朝鮮との外交・貿易の独占による富強を恐れた将軍足利義満に警戒され、関係不穏となり、鎌倉公方足利満兼らと呼応して和泉国堺で挙兵。堺に籠城したが討伐を受け敗死。大内氏は周防・長門２カ国に削減された。',
        ]);
        DB::table('chronologyperiodmuromachis')->insert([
            'id' => '1419062001',
            'event_date' => '応永6年(1419年)06月20日',
            'event_subject' => '応永の外寇',
            'event_detail' => '朝鮮が対馬を倭寇の根拠地とみなし、軍船200隻で襲撃した事件。1000年に対馬島主宗貞茂が死亡し、幼い貞盛が継いだことで、倭寇が活発化したためとされている。九州探題らが撃退し、朝鮮との貿易は中断した。',
        ]);
        DB::table('chronologyperiodmuromachis')->insert([
            'id' => '1441041601',
            'event_date' => '嘉吉元年(1441年)04月16日',
            'event_subject' => '結城合戦終結',
            'event_detail' => '永享の乱で自害した足利持氏の遺臣である結城氏朝が、足利持氏の遺児春王丸・安王丸を擁して結城城で挙兵。関東管領上杉憲実と対戦したが敗北し、氏朝は自害、持氏の遺児は殺害された。',
        ]);
        DB::table('chronologyperiodmuromachis')->insert([
            'id' => '1441091001',
            'event_date' => '嘉吉元年(1441年)09月10日',
            'event_subject' => '嘉吉の変',
            'event_detail' => '播磨・備前・美作の３カ国守護の赤松満祐が、所領没収・家督介入など有力守護圧迫を進める将軍足利義教（義政の父）に危機感を抱き、将軍を自邸に招いて謀殺。満祐は幕府軍(細川持之主導)に討伐され、この日に自刃。赤松氏の惣領家は壊滅した。',
        ]);
        DB::table('chronologyperiodmuromachis')->insert([
            'id' => '1454122701',
            'event_date' => '享徳3年(1454年)12月27日',
            'event_subject' => '享徳の乱',
            'event_detail' => '永享の乱で自害した足利持氏の跡を継ぎ鎌倉公方となった足利成氏(足利持氏の子)が、不和となっていた関東管領上杉憲忠(上杉憲実の子)を謀殺した。幕府軍の追討を受けた成氏は、下総古河に移り反抗を続け(古河公方)、幕府から派遣された、将軍足利義政の庶兄政知は伊豆の堀越に拠って対抗した(堀越公方)。古河公方成氏と上杉氏の対立は1477年に和睦し、幕府と成氏も82年に和睦した。これを契機として関東は戦国時代へ突入。',
        ]);
        DB::table('chronologyperiodmuromachis')->insert([
            'id' => '1467052601',
            'event_date' => '応仁元年(1467年)05月26日',
            'event_subject' => '応仁の乱',
            'event_detail' => '応仁の乱(応仁・文明の乱)は1467〜1477(応仁元年〜文明9年)にかけて、①将軍継嗣争い(足利義政vs足利義視)と②畠山氏の家督相続争い(畠山政長vs畠山義就)、③斯波氏の家督相続争い(斯波義敏vs斯波義廉)、④貿易権益(日明貿易・瀬戸内海制海権、本来日明貿易は国家間貿易しか認めておらず民間貿易を認めていなかったが、財政が窮乏した室町幕府は有力大名に日明貿易の権利を売っていた)争い(細川勝元vs大内政弘(大内義弘のひ孫))、⑤領地争い(赤松政則vs山名宗全)に、権力争い(細川勝元vs山名持豊(宗全))が介入して起こった11年にわたる大乱。それぞれが東軍vs西軍として各地で戦闘した。途中、朝倉孝景(朝倉義景の高祖父)が細川勝元の調略で西軍から東軍に寝返る。以降、将軍の権威は失墜し、荘園制の解体も進んで戦国時代となる。',
        ]);
        DB::table('chronologyperiodmuromachis')->insert([
            'id' => '1473031801',
            'event_date' => '文明5年(1473年)03月18日',
            'event_subject' => '山名持豊没',
            'event_detail' => '山名持豊は、応仁の乱の西軍の将。初め日野富子とその子足利義尚を支持、1468年以降は足利義視・畠山義就・斯波義廉を後援して細川勝元の軍と戦い、陣中で70歳で死去した。',
        ]);
        DB::table('chronologyperiodmuromachis')->insert([
            'id' => '1473121901',
            'event_date' => '文明5年(1473年)12月19日',
            'event_subject' => '足利義尚、征夷大将軍就任',
            'event_detail' => '足利義尚は、9代将軍(在職1473〜1489)。父は8代義政、母は日野富子。出生前年に叔父義視が将軍継嗣と決まっていたが、母富子は義尚の将軍就任を求め、応仁の乱の一因をつくった。乱の途中、9歳で将軍となるが、実権は義政が握っていた。1487年から始めた近江六角氏征伐の陣中で病没。',
        ]);
        DB::table('chronologyperiodmuromachis')->insert([
            'id' => '1499062601',
            'event_date' => '明応8年(1499年)06月26日',
            'event_subject' => '龍安寺石庭完成',
            'event_detail' => '龍安寺石庭は室町中期の枯山水の代表例。作庭者は不詳。長方形の平庭に白砂と大小15の石を配置してある。虎の子渡しの俗称を持つ。',
        ]);
        DB::table('chronologyperiodmuromachis')->insert([
            'id' => '1534051201',
            'event_date' => '天文3年(1534年)05月12日',
            'event_subject' => '織田信長誕生',
            'event_detail' => '尾張の守護代織田氏は岩倉織田家と清洲織田家に分裂していたが、織田信長は清洲織田家の奉行織田信秀の子。1560年、桶狭間で今川義元を討ち、「天下布武」の印判を用いつつ、全国統一の事業を進めた。1573年、室町幕府を滅ぼし、畿内平定を達成したが、82年、本能寺の変に倒れた。',
        ]);
        DB::table('chronologyperiodmuromachis')->insert([
            'id' => '1543082501',
            'event_date' => '天文12年(1543年)08月25日',
            'event_subject' => '鉄砲伝来',
            'event_detail' => '1543年、種子島の島主の種子島時尭は、漂着したポルトガル人から鉄砲を購入し、製法も学ばせた。鉄砲は、銃口から弾薬を入れる先込め式の火縄銃で、「種子島」とも呼ばれた。やがて九州・堺・紀伊根来・雑賀・近江国友などの鉄砲鍛冶により製造され、普及した。',
        ]);
        DB::table('chronologyperiodmuromachis')->insert([
            'id' => '1549072201',
            'event_date' => '天文18年(1549年)07月22日',
            'event_subject' => 'キリスト教の伝来',
            'event_detail' => 'フランシスコ＝ザビエルは、アジア布教の途次、1549年、鹿児島に来日し、領主島津貴久の許可を得てキリスト教を布教。上京したが目的を達せず山口に戻り、領主大内義隆の保護を得て布教。ついで豊後府内の領主大友義鎮を帰依させ、平戸の松浦隆信の領内でも布教した。1551年、インドに帰り、52年に中国布教を目指すが広州付近で死去した。',
        ]);
        DB::table('chronologyperiodmuromachis')->insert([
            'id' => '1560051901',
            'event_date' => '永禄3年(1560年)05月19日',
            'event_subject' => '桶狭間の戦い',
            'event_detail' => '1560年、桶狭間の北方田楽狭間で、2万5000人の今川軍の本営を、3000人の信長軍が急襲し今川義元の首を取り、勝利。以後、今川氏は衰亡した。',
        ]);
    }
}
