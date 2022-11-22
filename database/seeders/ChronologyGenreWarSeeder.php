<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Chronology;

class ChronologyGenreWarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chronologygenrewars')->insert([
            'id' => '0527060301',
            'event_date' => '継体天皇21年(527年)06月03日',
            'event_subject' => '筑紫国造磐井の乱',
            'event_detail' => '筑紫国造磐井が新羅と結び、527年に起こした反乱。近江毛野を将とする朝廷の「任那」救援・新羅征討軍6万人を阻止。1年半後に物部麁鹿火（あらかひ）に鎮圧された。この乱の平定により、ヤマト政権の西日本支配と外交の一元化が完成。福岡県八女市の岩戸山古墳は磐井の墓と考えられる。',
        ]);
        DB::table('chronologygenrewars')->insert([
            'id' => '0585033001',
            'event_date' => '敏達天皇14年(585年)03月30日',
            'event_subject' => '物部守屋、仏像・寺院等を焼き打ち',
            'event_detail' => '物部守屋は敏達・用明天皇の大連。仏教排斥を唱え、仏像・寺院等を焼き打ち。中臣氏と共に仏教受容に反対、皇位継承の争いも絡み、蘇我馬子と戦い敗死。',
        ]);
        DB::table('chronologygenrewars')->insert([
            'id' => '0645061201',
            'event_date' => '大化元年(645年)06月12日',
            'event_subject' => '乙巳の変',
            'event_detail' => '中大兄皇子・中臣鎌足らにより板蓋宮で入鹿を暗殺された。最終的に蘇我本宗家の蘇我蝦夷・入鹿父子が滅ぼされた。この後に起こった一連の改革が大化改新である。大化改新では、氏姓制度の弊害を打破し、唐の律令制を基に天皇中心の中央集権国家建設を目標としたとされる。',
        ]);
        DB::table('chronologygenrewars')->insert([
            'id' => '0663082701',
            'event_date' => '天智天皇2年(663年)08月27日',
            'event_subject' => '白村江の戦い',
            'event_detail' => '朝鮮半島南部の白村江（錦江河口）で行われた倭・百済軍と唐・新羅連合軍との戦い。百済救援のため朝鮮半島に赴いた倭の水軍は、白村江で唐の水軍に大敗した。白村江岸上でも、文武王の新羅軍に倭・百済軍が敗れた。百済の復興はならず、倭は朝鮮半島の足場を失った。',
        ]);
        DB::table('chronologygenrewars')->insert([
            'id' => '0672062401',
            'event_date' => '弘文天皇元年(672年)06月24日',
            'event_subject' => '壬申の乱',
            'event_detail' => '671年に天智天皇が崩御した翌年、大友皇子の近江朝廷側と吉野の大海人皇子とが皇位をめぐって争った内乱。大海人皇子は近習の下級官人である舎人や大伴氏・地方豪族などの協力を得て、東国の兵の動員に成功し、勝利。',
        ]);
        DB::table('chronologygenrewars')->insert([
            'id' => '0740090301',
            'event_date' => '天平12年(740年)09月03日',
            'event_subject' => '藤原広嗣の乱',
            'event_detail' => '740年、大宰少弐の藤原広嗣（式家の宇合の息子）が玄昉らの排除を求め九州で挙兵、敗死した事件。橘諸兄政権の下で牽制を強めた吉備真備・玄昉を除こうとした。',
        ]);
        DB::table('chronologygenrewars')->insert([
            'id' => '0757070401',
            'event_date' => '天平勝宝9年(757年)07月04日',
            'event_subject' => '橘奈良麻呂の変',
            'event_detail' => '橘奈良麻呂は橘諸兄の息子。藤原仲麻呂の台頭で勢力が後退し、大伴・佐伯・多治比氏らの旧豪族と結んで、757年に藤原仲麻呂を排除しようと図ったが失敗し、捕われて獄死した。',
        ]);
        DB::table('chronologygenrewars')->insert([
            'id' => '0802041501',
            'event_date' => '延暦21年(802年)04月15日',
            'event_subject' => '阿弖流爲が坂上田村麻呂に降伏',
            'event_detail' => '阿弖流爲(大墓公阿弖利為)は、8世紀後半〜9世紀初頭の胆沢地方の蝦夷の族長。789年、征東大将軍紀古佐美の軍を破ったが、802年、盤具公母礼らと共に征夷大将軍坂上田村麻呂に降伏した。田村麻呂の助命嘆願にもかかわらず、母礼と共に同年処刑された。',
        ]);
        DB::table('chronologygenrewars')->insert([
            'id' => '0842072301',
            'event_date' => '承和9年(842年)07月23日',
            'event_subject' => '承和の変',
            'event_detail' => '842年、皇太子恒貞親王派の伴健岑・橘逸勢らが謀叛を企てたとして隠岐・伊豆に配流された事件。密告者は阿保親王(在原業平の父)。皇太子は廃され、道康親王(藤原良房の妹順子の子、のち文徳天皇)が皇太子となる。北家の優位が確立する。権力の確立を図った良房の陰謀と推定される。',
        ]);
        DB::table('chronologygenrewars')->insert([
            'id' => '0940021401',
            'event_date' => '天慶3年(940年)02月14日',
            'event_subject' => '平貞盛・藤原秀郷ら将門を討つ',
            'event_detail' => '平将門は高望王の孫、平良将の子。935年、父の遺領問題で伯父国香を殺す。939年、乱を起こして常陸・下野・上野の国府を攻略。新皇と称し、下総の猿島を内裏としたが、940年、平貞盛・藤原秀郷に討たれる。',
        ]);
        DB::table('chronologygenrewars')->insert([
            'id' => '1156071101',
            'event_date' => '保元元年(1156年)07月11日',
            'event_subject' => '保元の乱',
            'event_detail' => '鳥羽上皇の死後、皇室は崇徳上皇(兄、讃岐に配流)と後白河天皇(弟)、藤原氏は左大臣藤原頼長(弟、傷死)と関白藤原忠通(兄)、平氏は平忠正(叔父、斬首)と平清盛(甥)、源氏は源為義(父、斬首)・源為朝(弟、伊豆大島に配流)と源義朝(子、兄)が対立して勃発した戦い。院政の混乱と武士の進出を象徴しており、『愚管抄』は、この乱以後、「武者の世」になったと記す。',
        ]);
        DB::table('chronologygenrewars')->insert([
            'id' => '1159120901',
            'event_date' => '平治元年(1159年)12月09日',
            'event_subject' => '平治の乱',
            'event_detail' => '保元の乱後、実権を掌握した藤原通憲（信西）が平清盛と、藤原信頼が源義朝と結んで勢力を争った事件。清盛が熊野詣に出かけたのを機に、藤原信頼・源義朝(源義平・源頼朝)が挙兵。三条殿を襲って後白河上皇を幽閉し藤原通憲は自害した。しかし、清盛(平重盛・平頼盛)の反撃を受けて敗北。信頼は斬刑、義朝は関東へ落ちる中、家臣に謀殺された。',
        ]);
        DB::table('chronologygenrewars')->insert([
            'id' => '1180081701',
            'event_date' => '治承4年(1180年)08月17日',
            'event_subject' => '山木館襲撃',
            'event_detail' => '源頼朝、山木兼隆を討つ。',
        ]);
        DB::table('chronologygenrewars')->insert([
            'id' => '1180122801',
            'event_date' => '治承4年(1180年)12月28日',
            'event_subject' => '南都焼討',
            'event_detail' => '平清盛が平重衡に命じ、反平氏の動きを見せた南都(東大寺・興福寺)の僧兵を攻撃。興福寺・東大寺の堂塔伽藍を焼亡させた。',
        ]);
        DB::table('chronologygenrewars')->insert([
            'id' => '1183111901',
            'event_date' => '寿永2年(1183年)11月19日',
            'event_subject' => '法住寺合戦',
            'event_detail' => '木曾義仲が院御所法住寺殿を襲撃して北面武士および僧兵勢力と戦い、後白河法皇と後鳥羽天皇を幽閉して政権掌握した。しかし入京後の義仲軍による乱暴は、朝廷・貴族の反発を招いた。1184年、頼朝の派遣した源範頼・義経軍との宇治川の戦いに敗れ、近江の粟津で討死した。',
        ]);
        DB::table('chronologygenrewars')->insert([
            'id' => '1185032401',
            'event_date' => '元暦2年(1185年)03月24日',
            'event_subject' => '壇ノ浦の戦い',
            'event_detail' => '長門国壇ノ浦における源平最後の合戦。平宗盛を将とし、幼帝安徳天皇を擁した平氏一門はここで滅んだ。安徳天皇は入水、平宗盛は捕虜となり鎌倉で斬殺、平氏は滅亡した。',
        ]);
        DB::table('chronologygenrewars')->insert([
            'id' => '1189043001',
            'event_date' => '文治5年(1189年)04月30日',
            'event_subject' => '衣川の戦い',
            'event_detail' => '藤原秀衡の死後、1189年、その子の藤原泰衡は頼朝の要求に屈して衣川に源義経を襲撃し自殺させた。しかし頼朝は義経を匿ったことを理由に奥州征討を行い、奥州藤原氏を滅ぼして陸奥・出羽2国を掌握した。',
        ]);
        DB::table('chronologygenrewars')->insert([
            'id' => '1213050201',
            'event_date' => '建暦3年(1213年)05月02日',
            'event_subject' => '和田合戦',
            'event_detail' => '北条義時の謀略により和田義盛が鎌倉で挙兵した戦い。義盛の死によって、政所別当であった義時が侍所別当をも兼ね、執権として幕府政務の中心となった。',
        ]);
        DB::table('chronologygenrewars')->insert([
            'id' => '1219012701',
            'event_date' => '建保7年(1219年)01月27日',
            'event_subject' => '公暁、実朝を殺害',
            'event_detail' => '公暁は2代将軍源頼家の遺児。実朝を父の仇と信じ、別当をつとめる鶴岡八幡宮での右大臣拝賀の儀式の際に実朝を殺害したが、捕えられて殺された。これにより源氏の正統は断絶した。',
        ]);
        DB::table('chronologygenrewars')->insert([
            'id' => '1221051401',
            'event_date' => '承久3年(1221年)05月14日',
            'event_subject' => '承久の乱',
            'event_detail' => '後鳥羽上皇が北条義時追討の院宣を発し、討幕を図った兵乱。義時は、泰時・時房に命じて京都を攻撃、上皇方を破った。乱後、後鳥羽上皇ら3上皇の配流、仲恭天皇の退位と後堀河天皇の擁立、上皇方の所領の没収など、幕府の朝廷に対する優位が確立した。また没収された西国の公領・荘園への地頭補任により、幕府の西国支配が強化された。承久の乱後、従来の京都守護に代わり、京都六波羅に幕府の出先機関を設置した(六波羅探題)。朝廷の監視と尾張国(のち三河国)以西の御家人の統轄が任務。評定衆・引付など幕府に準じた機構を持った。承久の乱の際、幕府軍を率いた北条泰時・時房が初代の六波羅探題北方・南方をつとめた。',
        ]);
        DB::table('chronologygenrewars')->insert([
            'id' => '1274100501',
            'event_date' => '文永11年(1274年)10月05日',
            'event_subject' => '文永の役勃発',
            'event_detail' => '元のフビライは服属を拒否した日本に侵寇。元軍・高麗軍約3万人が対馬・壱岐を侵して筑前博多に上陸。集団戦法や「てつはう」などの火器の威力に日本の武士は悩まされたが、元軍の内部対立と大風雨で撃退。',
        ]);
        DB::table('chronologygenrewars')->insert([
            'id' => '1281073001',
            'event_date' => '弘安4年(1281年)07月30日',
            'event_subject' => '弘安の役終結',
            'event_detail' => '2度目の蒙古襲来。モンゴル軍は東路軍(モンゴル軍と高麗軍の混成)・江南軍(主力は南宋の降兵)に分かれて来襲した。先着した東路軍は石塁のため博多に上陸できず、日本水軍の夜襲を受けて苦戦。遅れた江南軍と肥前国鷹島付近で合流したが、激しい暴風雨により壊滅し撤退。蒙古襲来の際、筑前筥崎宮に亀山上皇宸筆の「敵国降伏」の扁額を掲げて祈願するなど、神仏加護の思想が高まり、「神風」が吹いて元船を覆滅したと信じられた。',
        ]);
        DB::table('chronologygenrewars')->insert([
            'id' => '1324091901',
            'event_date' => '元亨4年(1324年)09月19日',
            'event_subject' => '正中の変',
            'event_detail' => '後醍醐天皇が側近の日野資朝・俊基と図った討幕計画。密告により露見し、資朝は佐渡に配流となった。',
        ]);
        DB::table('chronologygenrewars')->insert([
            'id' => '1331042901',
            'event_date' => '元徳3年(1331年)04月29日',
            'event_subject' => '元弘の変',
            'event_detail' => '後醍醐天皇の再度の討幕計画。近臣吉田定房の密告で露見。天皇は笠置山で捕らえられ隠岐に流された。しかし、これを機に悪党・有力御家人の挙兵が相次ぎ、1333年に討幕が実現した。',
        ]);
        DB::table('chronologygenrewars')->insert([
            'id' => '1333022701',
            'event_date' => '元弘3年(1333年)02月27日',
            'event_subject' => '千早城の戦い',
            'event_detail' => '楠木正成の勝利。楠木正成は、河内国の豪族。元弘の変に呼応して挙兵。河内の赤坂城・千早城で幕府軍を引きつけ、御家人の離反を促すなど、建武の新政の実現に貢献し、摂津・河内・和泉の守護となった。建武政府に反した足利尊氏を九州に敗走させたが、再挙して東上した尊氏軍を摂津湊川で迎え撃って戦死した。',
        ]);
        DB::table('chronologygenrewars')->insert([
            'id' => '1333042701',
            'event_date' => '元弘3年(1333年)04月27日',
            'event_subject' => '足利尊氏挙兵',
            'event_detail' => '討幕挙兵討伐のために丹波に入っていた足利尊氏が、後醍醐天皇に応じて倒幕を決意し挙兵。足利尊氏は有力御家人として北条高時の親任厚く、高氏と名乗る。元弘の変では幕府軍として出兵したが、天皇側に通じて六波羅探題を攻略。',
        ]);
        DB::table('chronologygenrewars')->insert([
            'id' => '1333050701',
            'event_date' => '元弘3年(1333年)05月07日',
            'event_subject' => '足利尊氏、六波羅探題を攻略',
            'event_detail' => '足利尊氏は有力御家人として北条高時の親任厚く、高氏と名乗っていたが、元弘の変では天皇側に通じて、赤松則村(赤松政則の先祖)・千種忠顕と共に六波羅探題を攻略。関東へ逃れようとした探題北条仲時は、近江国番場蓮華寺で一族と自害した。',
        ]);
        DB::table('chronologygenrewars')->insert([
            'id' => '1333052201',
            'event_date' => '元弘3年(1333年)05月22日',
            'event_subject' => '鎌倉幕府滅亡',
            'event_detail' => '上野国で挙兵した新田義貞は後醍醐天皇の呼びかけで南下して鎌倉を包囲した。切通など外郭線を防衛する幕府軍に対し、義貞は干潮の稲村ケ崎から鎌倉に突入した。北条高時以下一族は、東勝寺で自害し、鎌倉幕府は滅亡した。',
        ]);
        DB::table('chronologygenrewars')->insert([
            'id' => '1335081901',
            'event_date' => '建武2年(1335年)08月19日',
            'event_subject' => '中先代の乱鎮圧',
            'event_detail' => '北条時行(北条高時の子)が、鎌倉幕府再興を謀り挙兵した兵乱。時行は鎌倉の足利直義(足利尊氏の弟)を破り鎌倉将軍府を攻略したが、支援に赴いた尊氏により鎮圧された。中先代とは足利氏から見て北条氏を先代、足利氏を当代と呼ぶのに対していう。',
        ]);
        DB::table('chronologygenrewars')->insert([
            'id' => '1336052501',
            'event_date' => '建武3年(1336年)05月25日',
            'event_subject' => '湊川の戦い',
            'event_detail' => '九州より東上した足利尊氏の軍を、新田義貞・楠木正成軍が迎え撃ったが、正成は摂津湊川での足利直義(足利尊氏の弟)軍との戦いで敗死、ついで兵庫に布陣していた新田義貞軍も敗走した。',
        ]);
        DB::table('chronologygenrewars')->insert([
            'id' => '1338070201',
            'event_date' => '建武5年(1338年)07月02日',
            'event_subject' => '藤島の戦い',
            'event_detail' => '新田義貞は、建武政府で武者所頭人となった。足利尊氏の離反後、恒良親王を奉じて北陸に下り、室町幕府に抗したが、越前国藤島で戦死した。',
        ]);
        DB::table('chronologygenrewars')->insert([
            'id' => '1350102601',
            'event_date' => '観応元年(1350年)10月26日',
            'event_subject' => '観応の擾乱',
            'event_detail' => '観応年間（1350〜1352年）の足利尊氏・足利直義(足利尊氏の弟)両派の内紛、及びそれに連動した全国的争乱をいう。1350年に直義と尊氏派の高師直とが衝突し、51年に師直が敗死した。ついで直義は鎌倉に逃れたが、1352年、尊氏によって毒殺され、擾乱は収束した。この間、直義・尊氏がそれぞれ一時的に南朝と和睦するなど、南朝の勢力回復、南北朝動乱の長期化につながった。',
        ]);
        DB::table('chronologygenrewars')->insert([
            'id' => '1399122101',
            'event_date' => '応永6年(1399年)12月21日',
            'event_subject' => '応永の乱',
            'event_detail' => '６カ国(周防・長門・石見・豊前・和泉・紀伊)守護の大内義弘が朝鮮との外交・貿易の独占による富強を恐れた将軍足利義満に警戒され、関係不穏となり、鎌倉公方足利満兼らと呼応して和泉国堺で挙兵。堺に籠城したが討伐を受け敗死。大内氏は周防・長門２カ国に削減された。',
        ]);
        DB::table('chronologygenrewars')->insert([
            'id' => '1419062001',
            'event_date' => '応永6年(1419年)06月20日',
            'event_subject' => '応永の外寇',
            'event_detail' => '朝鮮が対馬を倭寇の根拠地とみなし、軍船200隻で襲撃した事件。1000年に対馬島主宗貞茂が死亡し、幼い貞盛が継いだことで、倭寇が活発化したためとされている。九州探題らが撃退し、朝鮮との貿易は中断した。',
        ]);
        DB::table('chronologygenrewars')->insert([
            'id' => '1441041601',
            'event_date' => '嘉吉元年(1441年)04月16日',
            'event_subject' => '結城合戦終結',
            'event_detail' => '永享の乱で自害した足利持氏の遺臣である結城氏朝が、足利持氏の遺児春王丸・安王丸を擁して結城城で挙兵。関東管領上杉憲実と対戦したが敗北し、氏朝は自害、持氏の遺児は殺害された。',
        ]);
        DB::table('chronologygenrewars')->insert([
            'id' => '1441091001',
            'event_date' => '嘉吉元年(1441年)09月10日',
            'event_subject' => '嘉吉の変',
            'event_detail' => '播磨・備前・美作の３カ国守護の赤松満祐が、所領没収・家督介入など有力守護圧迫を進める将軍足利義教（義政の父）に危機感を抱き、将軍を自邸に招いて謀殺。満祐は幕府軍(細川持之主導)に討伐され、この日に自刃。赤松氏の惣領家は壊滅した。',
        ]);
        DB::table('chronologygenrewars')->insert([
            'id' => '1454122701',
            'event_date' => '享徳3年(1454年)12月27日',
            'event_subject' => '享徳の乱',
            'event_detail' => '永享の乱で自害した足利持氏の跡を継ぎ鎌倉公方となった足利成氏(足利持氏の子)が、不和となっていた関東管領上杉憲忠(上杉憲実の子)を謀殺した。幕府軍の追討を受けた成氏は、下総古河に移り反抗を続け(古河公方)、幕府から派遣された、将軍足利義政の庶兄政知は伊豆の堀越に拠って対抗した(堀越公方)。古河公方成氏と上杉氏の対立は1477年に和睦し、幕府と成氏も82年に和睦した。これを契機として関東は戦国時代へ突入。',
        ]);
        DB::table('chronologygenrewars')->insert([
            'id' => '1467052601',
            'event_date' => '応仁元年(1467年)05月26日',
            'event_subject' => '応仁の乱',
            'event_detail' => '応仁の乱(応仁・文明の乱)は1467〜1477(応仁元年〜文明9年)にかけて、①将軍継嗣争い(足利義政vs足利義視)と②畠山氏の家督相続争い(畠山政長vs畠山義就)、③斯波氏の家督相続争い(斯波義敏vs斯波義廉)、④貿易権益(日明貿易・瀬戸内海制海権、本来日明貿易は国家間貿易しか認めておらず民間貿易を認めていなかったが、財政が窮乏した室町幕府は有力大名に日明貿易の権利を売っていた)争い(細川勝元vs大内政弘(大内義弘のひ孫))、⑤領地争い(赤松政則vs山名宗全)に、権力争い(細川勝元vs山名持豊(宗全))が介入して起こった11年にわたる大乱。それぞれが東軍vs西軍として各地で戦闘した。途中、朝倉孝景(朝倉義景の高祖父)が細川勝元の調略で西軍から東軍に寝返る。以降、将軍の権威は失墜し、荘園制の解体も進んで戦国時代となる。',
        ]);
        DB::table('chronologygenrewars')->insert([
            'id' => '1560051901',
            'event_date' => '永禄3年(1560年)05月19日',
            'event_subject' => '桶狭間の戦い',
            'event_detail' => '1560年、桶狭間の北方田楽狭間で、2万5000人の今川軍の本営を、3000人の信長軍が急襲し今川義元の首を取り、勝利。以後、今川氏は衰亡した。',
        ]);
        DB::table('chronologygenrewars')->insert([
            'id' => '1575052101',
            'event_date' => '天正3年(1575年)05月21日',
            'event_subject' => '長篠の戦い',
            'event_detail' => '三河長篠で信長・家康の連合軍が武田勝頼軍を敗った戦い。馬防柵を組んだ足軽鉄砲隊の一斉射撃で、武田の騎馬隊を大敗させた。双方の軍は鉄砲を使用したが、武田軍は銅銭から弾丸を製造、織田軍の鉄砲玉は鉛で製造。織田軍は、ポルトガルの交易船によりタイの鉱山でとれた鉛を日本に輸入。宣教師によるキリスト教布教のための軍事支援を受けていた。',
        ]);
        DB::table('chronologygenrewars')->insert([
            'id' => '1577092301',
            'event_date' => '天正5年(1577年)09月23日',
            'event_subject' => '手取川の戦い',
            'event_detail' => '加賀国の手取川において上杉謙信軍が織田信長軍を撃破したとされる合戦。上杉謙信は、父は越後守護代長尾為景。主家の上杉憲政から家督と関東管領職を受け、上杉氏を名乗る。のち出家して謙信と号す。武田氏と川中島で戦い、関東に兵を進めて北条氏と争い、越中・能登にも兵を進めたが病死。',
        ]);
        DB::table('chronologygenrewars')->insert([
            'id' => '1578120401',
            'event_date' => '天正6年(1578年)12月04日',
            'event_subject' => '第二次木津川口の戦い',
            'event_detail' => '織田水軍の勝利。九鬼嘉隆に毛利水軍の焙烙火矢が効かない鉄甲船の造船を命令。',
        ]);
        DB::table('chronologygenrewars')->insert([
            'id' => '1582060201',
            'event_date' => '天正10年(1582年)6月2日',
            'event_subject' => '本能寺の変',
            'event_detail' => '早朝5時ごろ、明智光秀が主君織田信長を京都の本能寺に襲って殺した事件。信長の長子信忠も、二条御所で防戦の末に自殺した。',
        ]);
        DB::table('chronologygenrewars')->insert([
            'id' => '1583042101',
            'event_date' => '天正11年(1583年)04月21日',
            'event_subject' => '賤ヶ岳の戦い',
            'event_detail' => '近江の賤ヶ岳付近で羽柴秀吉が柴田勝家を破った戦い。秀吉は、実質的に織田信長の後継者の地位を固めた。（賤ヶ岳の七本槍：脇坂安治・片桐且元・平野長泰・福島正則・加藤清正・糟屋武則・加藤嘉明）',
        ]);
        DB::table('chronologygenrewars')->insert([
            'id' => '1583042401',
            'event_date' => '天正11年(1583年)04月24日',
            'event_subject' => '北ノ庄城の戦い',
            'event_detail' => '柴田勝家は、賤ヶ岳の戦いで敗れ、北庄でお市の方ともに自害した。',
        ]);
        DB::table('chronologygenrewars')->insert([
            'id' => '1598121601',
            'event_date' => '慶長3年(1598年)12月16日',
            'event_subject' => '露梁海戦',
            'event_detail' => '慶長の役。小西行長軍の巨済島への撤収成功。朝鮮ー明聯合水軍の勝利も、李舜臣は戦死。慶長の役は、文禄の役の日明和平交渉は、明使である沈惟敬の策などで秀吉の意図と大きく異なったため再出兵したもの。日本軍苦戦のうちに秀吉の死を迎え、その遺命により撤退した。李舜臣は、朝鮮の水軍を率い、亀甲船を考案して、日本軍の補給路を攪乱した。',
        ]);
        DB::table('chronologygenrewars')->insert([
            'id' => '1600091501',
            'event_date' => '慶長5年(1600年)09月15日',
            'event_subject' => '関ヶ原の戦い',
            'event_detail' => '1600年、豊臣政権の前途を憂えた石田三成ら西軍が、徳川家康の東軍と戦って敗北した戦い。徳川の覇権が確立。天下分け目の戦いと称される。小早川秀秋の西軍からの離反が、勝敗に大きく影響した。西軍は、大坂城守備隊(毛利輝元)、本隊(石田三成・毛利秀元・宇喜多秀家・大谷吉継・小西行長・島津義弘)、上田城守備隊(真田昌幸・真田信繁)、奥羽本隊(上杉景勝・直江兼続)。東軍は本隊(徳川家康・黒田長政・藤堂高虎・浅野幸長・井伊直政・福島正則・細川忠興・織田長益)、中山道軍(徳川秀忠・榊原康政・仙石秀久・真田信幸)、対上杉守備隊(最上義光・伊達政宗・結城秀康)。東軍に寝返り(小早川秀秋・脇坂安治・赤座直保・朽木元綱・小川祐忠)。東軍に内応(吉川広家)。',
        ]);
        DB::table('chronologygenrewars')->insert([
            'id' => '1609040501',
            'event_date' => '慶長14年(1609年)04月05日',
            'event_subject' => '琉球侵攻',
            'event_detail' => '1609年に薩摩藩の島津家久が兵を派遣し、首里城を落として国王尚寧を捕え服属させた。これにより、琉球王国は日明(のち清)両属の形となる。中国王朝には朝貢使を乗せた進貢船を送り、中国からは王位を認める冊封使が来た。これ以降、与論島以北は薩摩藩領となる。',
        ]);
        DB::table('chronologygenrewars')->insert([
            'id' => '1615050801',
            'event_date' => '慶長20年(1615年)05月08日',
            'event_subject' => '大坂の陣',
            'event_detail' => 'この日、豊臣秀頼・淀殿自害し、大坂城落城。豊臣氏が滅んだ戦役。方広寺鐘銘問題で、1614年、冬の陣が起こり、和議を結んだがすぐに破れ、翌15年、夏の陣で淀君と秀頼の母子が自殺して終わる。',
        ]);
        DB::table('chronologygenrewars')->insert([
            'id' => '1638022801',
            'event_date' => '寛永15年(1638年)02月28日',
            'event_subject' => '島原の乱',
            'event_detail' => '「島原・天草一揆」。1637〜38年のキリシタン農民らの一揆。天草領主寺沢氏、島原領主松倉氏らの圧政に反抗。天草四郎時貞を大将に約3万8000人の農民が原城跡に籠る。幕府は約12万人を動員して半年の攻囲で落城させた。',
        ]);
        DB::table('chronologygenrewars')->insert([
            'id' => '1669061401',
            'event_date' => '寛文9年(1669年)06月14日',
            'event_subject' => 'シャクシャインの戦い',
            'event_detail' => '1669年、染退(静内町)の総首長シャクシャインが全道のアイヌを糾合して松前氏(松前矩広)に反抗したが、鎮圧された。近世最大の蜂起であったが、以後、松前藩のアイヌ支配は強化された。',
        ]);
        DB::table('chronologygenrewars')->insert([
            'id' => '1837021901',
            'event_date' => '天保8年(1837年)02月19日',
            'event_subject' => '大塩の乱',
            'event_detail' => '1837年、大塩平八郎らは、天保の飢饉による貧民の窮乏を大坂町奉行に訴えたが容れられず、近隣農村に決起を促して蜂起したが、鎮圧される。各地に一揆を誘発。『出潮引汐奸賊聞集記』や『跋扈巨潮伝』にその様子が描かれている。',
        ]);
        DB::table('chronologygenrewars')->insert([
            'id' => '1868010301',
            'event_date' => '慶応4年(1868年)01月03日',
            'event_subject' => '鳥羽・伏見の戦い（戊辰戦争）',
            'event_detail' => '徳川慶喜への辞官納地の処置に憤激した大坂の幕府の兵が、1868年正月に大挙入京、京都近郊の鳥羽・伏見で薩長の兵と交戦し、敗退した戦い。これを機に慶喜追討令が発せられ、東征軍が形成された。戊辰戦争の発端。旧幕府側の陸軍奉行竹中重固（竹中半兵衛の末裔）・土方歳三は伏見街道を北上。大目付滝川具挙・佐々木只三郎は鳥羽街道を北上。',
        ]);
        DB::table('chronologygenrewars')->insert([
            'id' => '1869051801',
            'event_date' => '明治2年(1869年)05月18日',
            'event_subject' => '箱館戦争',
            'event_detail' => '「五稜郭の戦い」。1868年、箱館の五稜郭における旧幕府の軍艦を率いた榎本武揚軍と官軍との抗戦。翌年旧幕府軍は陥落し、戊辰戦争が終わった。榎本武揚らは箱館五稜郭で降伏。榎本武揚は、のち明治政府に参画し、1875年に駐露大使として樺太・千島交換条約を締結。藩閥政治の中で、逓相・文相・外相・農商務相などを歴任。',
        ]);
        DB::table('chronologygenrewars')->insert([
            'id' => '1874020101',
            'event_date' => '明治7年(1874年)02月01日',
            'event_subject' => '佐賀の乱',
            'event_detail' => '征韓を主張する征韓党などが、江藤新平らを擁して起こした乱。佐賀県庁を襲撃するなど、約1万2000人が蜂起。大久保利通らの政府軍が鎮圧した。',
        ]);
        DB::table('chronologygenrewars')->insert([
            'id' => '1875092001',
            'event_date' => '明治8年(1875年)09月20日',
            'event_subject' => '江華島事件',
            'event_detail' => '1875年、日本の軍艦雲揚号が艦長井上良馨らを中心に朝鮮の江華島で挑発行為を行い、砲撃を受けたため、日本側が報復攻撃し、仁川港対岸の永宗城島を占領した事件。翌年に日朝修好条規を締結。江華府のある江華島は、首都漢城近くの漢江河口にある。',
        ]);
        DB::table('chronologygenrewars')->insert([
            'id' => '1877021501',
            'event_date' => '明治10年(1877年)02月15日',
            'event_subject' => '西南戦争',
            'event_detail' => '1877年2〜9月、最大の士族反乱。鹿児島の私学校生を中心とした士族が、西郷隆盛を擁して挙兵。谷干城の守る熊本城を攻めるが落城せず、田原坂の戦い以後は敗退が続き、政府軍に鎮圧された。徴兵軍の実力が認められ、武力反抗に終止符が打たれた。新政府は6万の兵力を動員、大量の武器弾薬が買い集められた。大隈重信大蔵卿は戦費を捻出するため、明治通宝札（不換紙幣、国立銀行券）の大量発行に踏み切った。戦費総額は約4200万円（明治10年の歳入の約8割）。貨幣価値が下落し深刻なインフレに直面。当時の政府収入は地租であり、地券に書かれた地価をもとに決められていて額面としての収入は基本的に一定なため、インフレにより財政が苦しくなる。米１石は5円33銭から10円59銭に、味噌１貫は11銭から21銭に、塩１俵は23銭から52銭に。',
        ]);
        DB::table('chronologygenrewars')->insert([
            'id' => '1895052901',
            'event_date' => '明治28年(1895年)05月29日',
            'event_subject' => '乙未戦争',
            'event_detail' => '下関条約で割譲した台湾への上陸に伴う台湾民主国との戦闘、日本勝利。台湾総督府設置。',
        ]);
        DB::table('chronologygenrewars')->insert([
            'id' => '1905052701',
            'event_date' => '明治38年(1905年)05月27日',
            'event_subject' => '日本海海戦',
            'event_detail' => '1905年5月27日〜28日、ヨーロッパから回航してきたロシアのバルチック艦隊(ロシア最大の艦隊、38隻)を迎え撃った日本連合艦隊(司令長官東郷平八郎、作戦参謀秋山真之、旗艦三笠以下41隻)が、対馬海峡で壊滅的な打撃を与え、戦局を決定した。また初めて無線電信が活用され、気象学者岡田武松による天気予報がなされた。',
        ]);
        DB::table('chronologygenrewars')->insert([
            'id' => '1914082301',
            'event_date' => '大正3年(1914年)08月23日',
            'event_subject' => '第一次世界大戦参戦',
            'event_detail' => 'ドイツに宣戦布告し、第一次世界大戦参戦。加藤高明外相の主導により日英同盟を理由に参戦。イギリス外務省は日本の参戦に消極的だったが、日本の軍事行動の範囲についてのイギリスとの合意なしに宣戦布告。',
        ]);
        DB::table('chronologygenrewars')->insert([
            'id' => '1918080201',
            'event_date' => '大正7年(1918年)08月02日',
            'event_subject' => 'シベリア出兵宣言',
            'event_detail' => '1918年8月、日・米・英・仏が、ロシア革命に干渉する目的で、ヨーロッパからシベリアのウラジヴォストークに移動・集結したチェコスロヴァキア兵救出を名目として、20年まで出兵。日本のみ1922年まで出兵し、最大7万2000人の兵員を駐留。戦費は10億円に達し、戦死者は3000人を出した。',
        ]);
        DB::table('chronologygenrewars')->insert([
            'id' => '1928060401',
            'event_date' => '昭和3年(1928年)06月04日',
            'event_subject' => '張作霖爆殺事件（満州某重大事件）',
            'event_detail' => '満州某重大事件ともいう。実行者は陸軍軍人の東宮鉄男。北伐軍が北上したため、北京から汽車で奉天（現・瀋陽）に引き揚げてきた張作霖が奉天郊外で爆殺された事件。首謀者の関東軍参謀河本大作大佐への処分は甘かった。当時、真相は隠された。',
        ]);
        DB::table('chronologygenrewars')->insert([
            'id' => '1931091801',
            'event_date' => '昭和6年(1931年)09月18日',
            'event_subject' => '柳条湖事件',
            'event_detail' => '満州事変勃発。関東軍参謀である石原莞爾と板垣征四郎が計画。奉天（現瀋陽）駅郊外の柳条湖付近の線路で起きた爆発をきっかけとする日本の侵略戦争。爆弾を仕掛けたのは関東軍の中堅参謀らだったが、中国側の仕業と主張し、攻撃を開始。45年の敗戦に至るまでの足かけ15年にも及ぶ戦争の発端となった。',
        ]);
        DB::table('chronologygenrewars')->insert([
            'id' => '1937121301',
            'event_date' => '昭和12年(1937年)12月13日',
            'event_subject' => '南京戦',
            'event_detail' => '1937年12月13日終戦、日本軍勝利、和平工作中に南京占領。新聞やラジオは敵国の首都占領を大々的に報道し国民の間で戦勝気分が広がる。1937年12月、日本軍が南京占領直後に略奪暴行事件を起こしたとされる(南京大虐殺)。死者は数万人とも約30万人とも言われる。',
        ]);
        DB::table('chronologygenrewars')->insert([
            'id' => '1941072801',
            'event_date' => '昭和16年(1941年)07月28日',
            'event_subject' => '南部仏印進駐開始',
            'event_detail' => 'オランダ領東インドの油田地帯が目的、ドイツが勝つだろうという希望的観測、アメリカはこれを米領フィリピンを脅かすものでヨーロッパの動きと連動しているものとして解釈。蒋介石は対日石油禁輸だけでは不十分としてアメリカとの同盟を要求。石油・ゴム・リン酸・アルミ資源など、戦略物資の開発・調達が目的。態度を硬化したアメリカは在米日本人の資産を凍結、石油の対日輸出禁止などの措置をとり、イギリスは日英通商航海条約の廃棄を通告した。',
        ]);
        DB::table('chronologygenrewars')->insert([
            'id' => '1941112201',
            'event_date' => '昭和16年(1941年)11月22日',
            'event_subject' => '連合艦隊集結',
            'event_detail' => '連合艦隊が択捉島に集結。ワシントンの日本大使館には伝えられず。',
        ]);
        DB::table('chronologygenrewars')->insert([
            'id' => '1941120801',
            'event_date' => '昭和16年(1941年)12月08日',
            'event_subject' => '真珠湾攻撃',
            'event_detail' => '日本時間午前3時19分、連合艦隊司令長官山本五十六の作戦構想の下に、日本海軍の機動部隊が航空機を主力にアメリカ・ハワイ真珠湾へ奇襲攻撃を敢行。ここを根拠地とするアメリカ太平洋艦隊の主力を壊滅させ、大打撃を与えた。以後、緒戦を有利に導く。',
        ]);
        DB::table('chronologygenrewars')->insert([
            'id' => '1942030701',
            'event_date' => '昭和17年(1942年)03月07日',
            'event_subject' => 'ポートモレスビー作戦',
            'event_detail' => 'ニューギニアでの戦い。1943年1月23日終戦しオーストラリア・アメリカの勝利。日本軍は、連合軍の拠点・東部ニューギニア南岸のポートモレスビーを4000mの山脈を越えて攻略する作戦を実施。しかし、補給が続かなかったことなどから失敗に終わり、多数の戦病死者を出す。',
        ]);
        DB::table('chronologygenrewars')->insert([
            'id' => '1942060501',
            'event_date' => '昭和17年(1942年)06月05日',
            'event_subject' => 'ミッドウェー海戦',
            'event_detail' => '1942年6月7日終戦、日本海軍機動部隊の壊滅、航空母艦「赤城」「加賀」「蒼龍」「飛龍」沈没。開戦から半年、日本海軍は虎の子の正規空母四隻を投入、ミッドウェー島を攻略し米太平洋艦隊の機動力を壊滅させる作戦を実行に移した。しかし、米軍側は、日本軍の暗号を解読することで攻撃を事前に察知（日本はミッドウェー島にAFという暗号を用いていたが、米軍が平文でハワイに対し「ミッドウェー島は水不足」と虚偽の電報を送ると、これを傍受した日本軍が「AFは水不足」と本土に打電してしまい、日本軍の作戦がミッドウェー島にあることを突き止めた）。正規空母三隻を配置して日本軍を待ち受けていた。日本側は、米側の空母戦力を過小に予想していたなどの油断から隙をつかれ、急降下爆撃機に次々と空母を狙われた。艦載機にミッドウェー島爆撃のための爆弾を搭載していたため、米空母が発見されるとこれを撃沈するべく魚雷に切り替えようとした際に、時間がなかったため爆弾を格納庫に放置したことが、誘爆を招いた。最終的に日本海軍は、正規空母４隻と真珠湾攻撃で活躍した多くの搭乗員と艦載機を失う敗北を喫した。アメリカ側も空母１隻を失ったが、太平洋における日米海軍の勢力地図が大きく塗り替えられるきっかけとなった。',
        ]);
        DB::table('chronologygenrewars')->insert([
            'id' => '1943020201',
            'event_date' => '昭和18年(1943年)02月02日',
            'event_subject' => 'スターリングラード攻防戦終結',
            'event_detail' => 'ドイツは市の大半を占領したが、ソ連軍が反攻に出てドイツ軍を包囲した。ヒトラーは軍の撤退を許さず、結局9万人のドイツ軍がソ連に降伏した。この戦いは独ソ戦の転換点となり、ソ連が反攻に転じ、ドイツは守勢にまわった。',
        ]);
        DB::table('chronologygenrewars')->insert([
            'id' => '1943020701',
            'event_date' => '昭和18年(1943年)02月07日',
            'event_subject' => 'ガダルカナル島撤退',
            'event_detail' => 'ガダルカナル島の戦いはソロモン諸島での戦い。1943年2月7日終戦、連合軍勝利、太平洋戦争の大転換点。反攻を開始した米軍が、日本軍飛行場を奪うため島を強襲。その奪還のため派遣された日本軍部隊は相次ぎ壊滅した。補給が途絶し餓死者が続出、日本兵は島を「餓島」と呼んだ。日本軍は、連合軍反攻の拠点である豪州と米国との連絡線を遮断する作戦を計画、その前進基地としてソロモン諸島ガダルカナル島に飛行場を建設した。これに対して米軍は、１万を超える兵力を上陸させ、飛行場を奪った。一方、日本軍は小規模な兵力の逐次投入を行い、いずれも撃退された。日米開戦から半年あまり、戦時体制を急速に整えた米軍は、この島をめぐる戦いに勝利して以来、物量で日本軍を圧倒するようになった。制海権を奪われた日本軍は補給が寸断され、食料も医薬品も枯渇した。日本軍将兵３万人のうち２万人が命を落とし、その半分以上が餓死か病死だった。18年2月に行われた撤退作戦を、大本営は「転進」と発表した。',
        ]);
        DB::table('chronologygenrewars')->insert([
            'id' => '1944030801',
            'event_date' => '昭和19年(1944年)03月08日',
            'event_subject' => 'インパール作戦',
            'event_detail' => '1944年7月3日終戦で、連合軍勝利。昭和19年、日本軍は、連合軍の拠点、インドのインパールをビルマ側から攻略する作戦を行った。しかし、補給を軽視したことなどから失敗に終わり、多くの戦病死者を出した。補給の困難さなどから反対の声が強かったが、第15軍牟田口司令官が強行。３月、10万の将兵を、わずかな武器弾薬、食料を持たせただけで、高い山脈を超える作戦に送り出した。しかし、連合軍の激しい反撃とほとんど補給がなかったことから、４ヶ月で中止に追い込まれた。作戦の最中に、独断で後退する部隊も現れ、師団長が次々に更迭される異常な事態が起きた。さらに、病と飢えで倒れる将兵が続出、撤退路は「白骨街道」と表現されたほど悲惨なものになった。なお、この作戦には、インド独立を目指す一部のインド人勢力が、日本と通じて組織した「インド国民軍」も加わっていた。',
        ]);
        DB::table('chronologygenrewars')->insert([
            'id' => '1944033101',
            'event_date' => '昭和19年(1944年)03月31日',
            'event_subject' => '海軍乙事件',
            'event_detail' => '連合艦隊司令長官 古賀峯一海軍大将が搭乗機の遭難により行方不明となりその後殉職扱いとなった事件および、古賀大将に随伴した参謀長福留繁中将が搭乗機（古賀大将搭乗機とは別機体）の不時着によりフィリピンゲリラの捕虜となった事件。この事件の際に福留中将が保持していた日本軍の最重要軍事機密文書がアメリカ軍に渡った。行方不明となった古賀大将搭乗機の残骸など手がかりは未だに発見されていない。',
        ]);
        DB::table('chronologygenrewars')->insert([
            'id' => '1944102101',
            'event_date' => '昭和19年(1944年)10月21日',
            'event_subject' => '神風特別攻撃隊出撃',
            'event_detail' => '日本軍は、行き詰まった戦局打開の手段として、搭乗員もろとも体当たりする特攻作戦を始めた。レイテ制圧のため集結した米艦船に、神風特別攻撃隊が突入攻撃を繰り返した。初出撃から4日後の10月25日、「敷島隊」ら4隊の特別攻撃隊が米軍艦隊に突入し、空母1隻を撃沈し4隻に損害を与える戦果をあげた。昭和19年初頭より、戦局挽回には体当たり攻撃しかないと特攻兵器の開発を進めていた陸海軍は、これを機に特攻へと舵を切り、以後作戦は拡大の一途をたどった。潜水艦から発射される人間魚雷「回天」、爆撃機に吊されて敵の上空で切り離される人間爆弾「桜花」、爆薬を搭載したボートで敵艦に体当たりする「震洋」など、さまざまな兵器が終戦までの10カ月の間に戦場へと投入され、4500人を超える若者が戦死した。',
        ]);
        DB::table('chronologygenrewars')->insert([
            'id' => '1944112401',
            'event_date' => '昭和19年(1944年)11月24日',
            'event_subject' => '本土空襲開始',
            'event_detail' => '11月24日、東京の中島飛行機工場が空襲に見舞われた。マリアナ諸島を出撃したB29による初の日本本土空襲だった。ただこの時の命中率は7%。東京上空には秒速100mものジェット気流が流れていたのが原因だった。アメリカ軍は軍事施設をピンポイントで狙うのを諦めた。以後、終戦までに地方都市を含む全国の都市が被害を受けた。昭和19年夏にサイパン、グアム、テニアンなどマリアナ諸島を占領した米軍は、ここにB29が集結する航空基地の建設を進めた。B29は高射砲が届かない10,000m以上の高度を飛び、航続距離も5,000km以上。マリアナから出撃すれば、北海道を除く日本全土が爆撃可能範囲に入った。B29による空襲は、当初は軍需工場などに絞って行われたが、後に都市全体を焦土にする無差別爆撃となった。空襲警報で防空壕に逃げ込む日々が繰り返されるようになり、日本国民の戦意に少なからぬ影響を及ぼした。',
        ]);
        DB::table('chronologygenrewars')->insert([
            'id' => '1945010601',
            'event_date' => '昭和20年(1945年)01月06日',
            'event_subject' => 'ルソン島の戦い開戦',
            'event_detail' => 'フィリピンでの戦いで、1945年8月15日終戦、アメリカの勝利。20万の大兵力でルソン島に上陸した米軍。戦力に劣る日本軍は、兵士たちに「永久抗戦」を命じた。多くの餓死者を出しながら、死を覚悟の攻撃が終戦まで続けられた。レイテ決戦に兵力を引き抜かれたため、ルソン島の日本軍は計画以下の戦力で米軍に対抗せざるを得なかった。山下奉文司令官は、米軍を島の奥深くに誘い込んで持久戦に持ち込み、徐々に消耗させる作戦をとった。すでに日本軍は制海空権を失い、ルソン島への補給は途絶していた。そのため兵士たちには、食料・物資を自ら調達して戦い続ける「自活自戦・永久抗戦」が命じられた。首都マニラは住民を巻き込んだ市街戦の末、3月に陥落。日本軍へのフィリピン人ゲリラの攻撃も活発化していった。そうした中、ゲリラの拠点と見られた村で、日本軍による住民虐殺も発生した。終戦まで続いた戦いで日本軍将兵27万が命を落とした。',
        ]);
        DB::table('chronologygenrewars')->insert([
            'id' => '1945031001',
            'event_date' => '昭和20年(1945年)03月10日',
            'event_subject' => '東京大空襲（下町大空襲）',
            'event_detail' => 'B29が334機襲来。深夜に日本の木造家屋用に開発した焼夷弾38万発を投下した。東京・下町は一面火の海と化し41平方キロが消失、一夜で約10万人が命を落とした。本土空襲を本格化させた米軍は、当初、軍需工場などの標的だけを狙う“精密爆撃”を行っていた。しかし、風などの影響で効果が上がらず、低高度で夜間に行う“無差別絨毯爆撃”に転換した。その皮切りとなった東京大空襲は、延焼効果をねらい強風の日を選んで行われた。火炎の旋風が町に吹き荒れ、水を求めて多くの人が隅田川などに殺到した。しかし焼夷弾の油剤で水面にも火が回り、多数が川の中で亡くなった。この空襲で両親を失い“戦災孤児”となった子供も多数に上る。',
        ]);
        DB::table('chronologygenrewars')->insert([
            'id' => '1945040701',
            'event_date' => '昭和20年(1945年)04月07日',
            'event_subject' => '坊ノ岬沖海戦',
            'event_detail' => '連合軍勝利し、戦艦「大和」は沈没した。',
        ]);
        DB::table('chronologygenrewars')->insert([
            'id' => '1945062301',
            'event_date' => '昭和20年(1945年)06月23日',
            'event_subject' => '沖縄戦',
            'event_detail' => '1945年4月1日本島上陸、1945年6月23日終戦、連合軍勝利。圧倒的な物量で本島中西部に上陸した米軍。日本軍は次第に本島南部に追い詰められ敗北した。三か月に及ぶ地上戦で、日本軍戦死者に並ぶ94,000人の住民が犠牲になった。日本本土攻略の橋頭保を築くため、米軍は慶良間列島に続き沖縄本島の制圧を目指した。これに対し日本の沖縄守備隊は、米軍を島に引き込んで消耗させ、本土決戦までの時間稼ぎを図る方針だった。日本軍は首里を拠点に５月末までもちこたえたが、圧倒的な米軍の戦力に押され島の南部に後退。6月23日に司令官が自決し組織的抵抗は終結した。沖縄戦では、成年男子による防衛隊、男子生徒による鉄血勤皇隊、女子学徒による看護要員“ひめゆり隊”など、少年少女を含む一般住民も日本軍によって動員され、多くの犠牲を出した。米軍が迫る中で、集団自決に追い込まれた住民もあった。',
        ]);
        DB::table('chronologygenrewars')->insert([
            'id' => '1945080601',
            'event_date' => '昭和20年(1945年)08月06日',
            'event_subject' => '広島に原爆投下',
            'event_detail' => '広島に原子爆弾「リトルボーイ」投下（ウラン235）。TNT火薬16ktの爆発力に相当。爆撃機はB29 エノラ・ゲイ。午前8時15分、死者9万人(当日)、約140,000人(1945年12月まで)、319,186人(2019年8月)。罹災家屋76,327戸、全焼47,969戸、全半壊21,925戸、全焼失面積13.2平方km。爆心地の北西部で１時間以上の「黒い雨」（セシウム137検出）。7月末、連合国は日本に降伏を勧告するポツダム宣言を発表。これに対し日本が「黙殺」の態度を取る中で原爆は投下された。トルーマン大統領は、原爆投下は戦争を早期に終結させて犠牲を減らすためだったと主張したが、一方でソ連の影響力を抑え米国主導で戦争を終結させるためだったとも言われる。人類初の原爆被害を受けた広島・長崎では、強烈な衝撃波と熱線で一瞬にして無数の命が奪われた。爆発後に救助のため市内に入り、放射能の雨や灰を浴びて被害を受けた人も多い。',
        ]);
        DB::table('chronologygenrewars')->insert([
            'id' => '1945080801',
            'event_date' => '昭和20年(1945年)08月08日',
            'event_subject' => 'ソ連、対日宣戦布告',
            'event_detail' => 'ソ連は日ソ中立条約に違反して、150万を超す大兵力で満州侵攻を開始した。現地の日本軍は南へ後退。取り残された日本人開拓移民の多くが、混乱の中で命を落とした。北方領土は占領された。ドイツ降伏後の対日参戦を英米と密約していたソ連は、満州、南樺太、千島などに相次いで侵攻した。日本の傀儡(かいらい)国家・満州国には、農村から送られた開拓団や満蒙開拓青少年義勇軍など多くの国策移民が入植していた。満州を防衛する関東軍は弱体化していてソ連軍に対抗できず、規定の作戦計画に従って司令部を南へ後退させた。取り残された開拓団員の多くは、現地住民の襲撃、混乱の中での集団自決、収容所での飢餓や病によって命を落とした。また57万の関東軍将兵が労働力としてソ連に連行されシベリア抑留を強いられた。',
        ]);
        DB::table('chronologygenrewars')->insert([
            'id' => '1945080901',
            'event_date' => '昭和20年(1945年)08月09日',
            'event_subject' => '長崎に原爆投下',
            'event_detail' => '長崎に原子爆弾「ファットマン」投下（プルトニウム239）。TNT火薬21ktの爆発力に相当。爆撃機はB29 ボックスカー。午前11時02分、死者5万人(当日)、73,884人(12月まで)、182,601人(2019年8月)。罹災家屋18,409戸、全焼11,574戸、全半壊6,835戸、全焼失面積6.7平方km。',
        ]);
        DB::table('chronologygenrewars')->insert([
            'id' => '1950062501',
            'event_date' => '昭和25年(1950年)06月25日',
            'event_subject' => '朝鮮戦争勃発',
            'event_detail' => '1950年6月〜53年7月。朝鮮半島の北緯38度線の侵犯をきっかけに、朝鮮民主主義人民共和国と大韓民国の対立が戦争に突入、冷戦が軍事衝突へと変化した。米軍を主とする国連軍が大韓民国側に立って参戦すると、中国人民義勇軍が朝鮮民主主義人民共和国を応援し、一進一退の戦闘を続けた。',
        ]);
        DB::table('chronologygenrewars')->insert([
            'id' => '2003032001',
            'event_date' => '平成15年(2003年)03月20日',
            'event_subject' => 'イラク戦争',
            'event_detail' => 'アメリカは「イラクの大量破壊兵器を隠し持っている。これ以上放置してはならない」と、武力行使を認める国連決議がないままイギリスと共にイラク侵攻作戦を開始。小泉首相は「アメリカの武力行使を理解・支持する」と述べた。米英軍は3週間後には首都バグダッドを制圧、フセイン政権は崩壊した。ブッシュ大統領は5月1日、空母リンカーン上で「戦闘終結宣言」を行った。しかし、戦争の理由だった大量破壊兵器は見つからず戦争の大義は大きく揺らいだ。',
        ]);
    }
}
