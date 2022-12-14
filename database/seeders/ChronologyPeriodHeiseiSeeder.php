<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Chronology;
use App\Models\ChronologyPeriodHeisei;

class ChronologyPeriodHeiseiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chronology_period_heiseis')->insert([
            'id' => '1989022201',
            'event_date' => '平成元年(1989年)02月22日',
            'event_subject' => '佐賀・吉野ヶ里遺跡で環濠集落を発見',
            'event_detail' => '佐賀・吉野ヶ里遺跡で弥生時代後期の国内最大規模の環濠集落を発見。吉野ヶ里遺跡は佐賀県神埼郡吉野ヶ里町にある日本屈指の大環濠集落。弥生時代前期に集落を形成、中期に墳丘墓築造、後期に物見櫓を設置。物見櫓は「魏志」倭人伝にいう「楼観」にあたるとされる。',
        ]);
        DB::table('chronology_period_heiseis')->insert([
            'id' => '1989070601',
            'event_date' => '平成元年(1989年)07月06日',
            'event_subject' => '美空ひばりさんに国民栄誉賞',
            'event_detail' => 'この年の6月24日に亡くなった美空ひばりさんは、「真摯な精進歌謡曲を通じて国民に夢と希望を与えた」ことが功績とされ国民栄誉賞が贈られた。',
        ]);
        DB::table('chronology_period_heiseis')->insert([
            'id' => '1989110901',
            'event_date' => '平成元年(1989年)11月09日',
            'event_subject' => 'ベルリンの壁崩壊',
            'event_detail' => 'ベルリンの壁は1961年８月31日、東ドイツが住民が西側に出て行くのを抑えようと西ベルリンを取り囲むように鉄条網を張ったのが発端で、その後、総延長155キロのコンクリートの壁が造られベルリンを東西に分断した。この日、東ドイツ政府が国外旅行の自由化を決定。多くのベルリン市民が壁によじ登って喜んだ。ソ連のペレストロイカ（再構築・改革）推進に刺激を受けてポーランド、ハンガリー、チェコスロバキアなどで東欧社会主義国は急テンポに民主化が進んでいた。そして、ついに東西連戦の象徴だったベルリンの壁が崩壊した。',
        ]);
        DB::table('chronology_period_heiseis')->insert([
            'id' => '1989122901',
            'event_date' => '平成元年(1989年)12月29日',
            'event_subject' => '日経平均株価史上最高値',
            'event_detail' => '日経平均株価が3万8915円87銭で史上最高値（終値）。平成はバブル景気の絶頂期でスタート。平成元年最後の立ち会いで過去最高値をつけた。しかしここがピーク。この後、株価は下がり1992年には半値の２万円を割り、さらに下落していく。',
        ]);
        DB::table('chronology_period_heiseis')->insert([
            'id' => '1990032601',
            'event_date' => '平成2年(1990年)03月26日',
            'event_subject' => '北海道の夕張炭鉱閉山',
            'event_detail' => '三菱南大夕張鉱業所閉山。かつて24もの炭鉱があった「炭都の町 夕張」からすべての炭鉱が姿を消すことになった。背景には価格の安い輸入石炭に切り替えるという国の方針があった。この日、坑内員たちは無念さとあきらめの入り混じった表情で最後の入坑をし、地の底の現場から記念の石炭を大事そうに持ち帰る人もいれば、長年使ってきたヘルメットや工具を投げ捨てる人もいた。翌日、労使双方が閉山協定書に調印し、840人余の従業員が解雇された。',
        ]);
        DB::table('chronology_period_heiseis')->insert([
            'id' => '1990032701',
            'event_date' => '平成2年(1990年)03月27日',
            'event_subject' => '大蔵省「不動産融資の総量規制」通達',
            'event_detail' => '旧大蔵省は地価高騰への対策として、銀行、生命保険、損害保険会社に対し、不動産業向けの融資を貸し出し全体の伸び以下に抑えるよう求める通達を出した。投機熱に急ブレーキがかかり、後にバブル崩壊の「犯人」とされた。',
        ]);
        DB::table('chronology_period_heiseis')->insert([
            'id' => '1990120201',
            'event_date' => '平成2年(1990年)12月02日',
            'event_subject' => '日本人初の宇宙飛行',
            'event_detail' => 'ＴＢＳの記者 秋山豊寛さんを乗せたソビエトの宇宙船ソユーズがバイコヌール宇宙基地から打ち上げられた。この宇宙飛行はＴＢＳがソビエト宇宙総局とタイアップして企画したもので、秋山さんは宇宙から見た地球の様子をリポートした。',
        ]);
        DB::table('chronology_period_heiseis')->insert([
            'id' => '1991122601',
            'event_date' => '平成3年(1991年)12月26日',
            'event_subject' => 'ソビエト連邦消滅',
            'event_detail' => 'ゴルバチョフ大統領が正式に辞任。連邦を構成する12共和国のうち11共和国がすでに「独立国家共同体」に移行、約70年間にわたって続いた大国 ソビエト連邦が消滅した。これに伴い、ソ連との外交を担当してきた外務省の「ソビエト連邦課」の名称も年明けから「ロシア課」に改められた。',
        ]);
        DB::table('chronology_period_heiseis')->insert([
            'id' => '1992061501',
            'event_date' => '平成4年(1992年)06月15日',
            'event_subject' => '国際平和協力法成立',
            'event_detail' => '正式名称は「国際連合平和維持活動等に対する協力に関する法律」。野党は牛歩戦術で抵抗。社会党と社民連が欠席する中、法案は成立。宮沢首相は記者団に「今回の法律の成立で日本も人的な面で国連に貢献ができるようになり良かったと思う。国民の皆さんにも長い審議を通じて十分に理解していただけたと思う」と述べた。一方、社会党の田辺委員長は「自衛隊の海外派兵を目的としたこの法案の成立を許したことに対して野党第１党としての責任を痛感しており国民におわびしなくてはならない。法案は通ったが、実際に自衛隊の海外派遣をさせないために力を尽くしたい」と述べた。自衛隊部隊の派遣は急ピッチで準備が進められ９月17日には先遣隊がカンボジアへ向けて出発したが、同じ日には自衛隊のPKO派遣は憲法に違反するとして裁判も起こされ、国民の間で大きな議論を呼んだ。',
        ]);
        DB::table('chronology_period_heiseis')->insert([
            'id' => '1992111101',
            'event_date' => '平成5年(1993年)11月11日',
            'event_subject' => '外国産米の緊急輸入',
            'event_detail' => 'この夏は記録的な冷夏・長雨で戦後最悪、「平成の大凶作」となった。翌年、緊急輸入米と国産米を混ぜ合わせるブレンド米の販売を中心とする方針が打ち出されたが、本格的販売を前に「国産米を買い占めたい」という消費者が小売店に行列を作った。ヤミ米も社会問題化し「平成の米騒動」が全国に広がった。',
        ]);
        DB::table('chronology_period_heiseis')->insert([
            'id' => '1994111601',
            'event_date' => '平成6年(1994年)11月16日',
            'event_subject' => '国連海洋法条約発効',
            'event_detail' => '1973年から10年間に及ぶ議論の末、第3次国連海洋法会議で1982年に採択された(1994年発効)。「海の憲法」ともいうべき条約。1958年の海洋法4条約を全面的に再構成し、一つの条約にまとめたもの。正式名称は「海洋法に関する国際連合条約」。320ヶ条の本文と九つの付属書からなる。領海を12海里、排他的経済水域を200海里と規定し、国際海峡の通過通航制度や深海底資源の共同開発などについて定めている。日本は1996年に批准。',
        ]);
        DB::table('chronology_period_heiseis')->insert([
            'id' => '1995011701',
            'event_date' => '平成7年(1995年)01月17日',
            'event_subject' => '平成7年(1995年)兵庫県南部地震',
            'event_detail' => 'M7.3、死者6434人、行方不明者3人、住宅被害63万9,689棟。「阪神・淡路大震災」。午前5時46分発生。兵庫県内に震度７の地域。家屋の倒壊や火災により大きな被害。高速道路や新幹線の高架にも被害。',
        ]);
        DB::table('chronology_period_heiseis')->insert([
            'id' => '1995061601',
            'event_date' => '平成7年(1995年)06月16日',
            'event_subject' => '容器包装リサイクル法公布',
            'event_detail' => '正式名称は「容器包装に係る分別収集及び再商品化の促進等に関する法律」。家庭ごみに占める割合の高い缶・ビン・ペットボトル・ダンボールなど容器・包装材料のリサイクルを義務づけた法律。リサイクル費用は事業者負担。1995年に制定、1997年から施行された。',
        ]);
        DB::table('chronology_period_heiseis')->insert([
            'id' => '1997010201',
            'event_date' => '平成9年(1997年)01月02日',
            'event_subject' => 'ナホトカ号重油流出事故',
            'event_detail' => '上海から重油を積んでカムチャツカ半島に向かっていたロシアのタンカー「ナホトカ」号が隠岐島沖で沈没。6200キロリットルの重油が流出し、福井・石川を中心に日本海側各県に漂着した。全国各地からボランティアが集まり真冬の日本海で、ひしゃくやバケツを使った人海戦術で重油の除去作業に当たった。',
        ]);
        DB::table('chronology_period_heiseis')->insert([
            'id' => '1999052401',
            'event_date' => '平成11年(1999年)05月24日',
            'event_subject' => '新ガイドライン関連法公布',
            'event_detail' => 'ガイドラインは、1978年に日米防衛協力小委員会が作成し、閣議で了承されたもの。アメリカは、日本有事・極東有事に際して、「日米共同対処」方法をまとめた作戦シナリオを作成し、1997年には、40項目の日米協力策を盛り込んだ新ガイドラインを決定した。これを受けて周辺事態法などが1999年に成立、日本の周辺で武力紛争などが発生した際に、自衛隊が米軍を支援できることなどが定められた。2015年には、軍事力を増強する中国を念頭におき、自衛隊の対米支援拡大など、地球規模で切れ目なく対応することを盛り込んだガイドラインの再改定が行われた。',
        ]);
        DB::table('chronology_period_heiseis')->insert([
            'id' => '1999081301',
            'event_date' => '平成11年(1999年)08月13日',
            'event_subject' => '国旗・国歌法公布',
            'event_detail' => '日の丸を国旗とし、君が代を国歌として法制化したもの。1999年に制定。正式には「国旗及び国歌に関する法律」。法律自体に義務規定や罰則規定は盛り込まれていないが、現実には学校教育の現場において教師などへの強制や懲戒処分などがなされ、裁判にも発展している。',
        ]);
        DB::table('chronology_period_heiseis')->insert([
            'id' => '1999123101',
            'event_date' => '平成11年(1999年)12月31日',
            'event_subject' => 'コンピューター2000年問題',
            'event_detail' => '「2000年問題」は、コンピュータのプログラムの中で1999年を下二桁の99と省略しているものが2000年を100年前の1900年と間違え、誤作動が起きる現象。社会のあらゆる分野でコンピュータが使われているため、どんな影響があるか分からず官民挙げて対策が取られた。',
        ]);
        DB::table('chronology_period_heiseis')->insert([
            'id' => '2001031901',
            'event_date' => '平成13年(2001年)03月19日',
            'event_subject' => '日銀が初の「量的金融緩和政策」開始',
            'event_detail' => 'デフレ対策で金利に代わって巨額の資金を金融市場に供給する「量的金融緩和」に踏み出した。事実上のゼロ金利政策の復活。',
        ]);
        DB::table('chronology_period_heiseis')->insert([
            'id' => '2001042601',
            'event_date' => '平成13年(2001年)04月26日',
            'event_subject' => '第一次小泉内閣成立',
            'event_detail' => '第一次小泉内閣成立。無派閥。「聖域なき構造改革」を掲げて官邸主導型の政治を追求。官房副長官は安倍晋三。小泉純一郎は、国民の圧倒的支持を得て、自民・公明・保守3党連立で第1次(2001.4〜03.9)・第2次(2003.9〜05.9)を組閣。「聖域なき構造改革」を掲げ、派閥解消、郵政・道路公団の民営化に努めるが、反発が強く、衆議院を解散。総選挙に圧勝して第3次内閣(2005.9〜06.9)で郵政民営化を実現した。',
        ]);
        DB::table('chronology_period_heiseis')->insert([
            'id' => '2001082901',
            'event_date' => '平成13年(2001年)08月29日',
            'event_subject' => 'H-II Aロケット 1号機打ち上げ成功',
            'event_detail' => 'H-IIA ロケットは、宇宙開発事業団(NASDA)と後継法人の宇宙航空研究開発機構(JAXA)と三菱重工が開発し三菱重工が製造および打ち上げを行う、人工衛星打ち上げ用液体燃料ロケットで使い捨て型のローンチ・ヴィークル。日本の衛星打ち上げの自律性をになうロケットとして基幹ロケットに位置づけられる。',
        ]);
        DB::table('chronology_period_heiseis')->insert([
            'id' => '2001091101',
            'event_date' => '平成13年(2001年)09月11日',
            'event_subject' => 'アメリカ同時多発テロ',
            'event_detail' => 'アメリカの4カ所で、大型旅客機をハイジャックしたテロリストたちが行った自爆テロ事件。9月11日、ニューヨークの貿易センタービル北棟・南棟、国防総省ビル(通称ペンタゴン)、ピッツバーグ(墜落)で旅客機を建物へ激突させた。実行者は、アフガニスタンのターリバーン政権保護下にあるイスラーム急進派組織アル＝カイーダのビン＝ラーディンとされた。10月にはブッシュ大統領(子)がターリバーン政権を攻撃し崩壊させたが、アフガニスタンでは不安定な情勢が続いた。また、ブッシュはテロと戦うことを大義名分として単独行動主義に基づく軍事行動を拡大した。午前8時46分40秒、ワールドトレードセンター・ツインタワー北棟（110階建）の94階から98階あたりに突入。ボストン発ロサンゼルス行きアメリカン航空11便（ボーイング767-200ER型機）で推定速度は時速466マイル。乗客81名、乗員11名。午前9時03分、ワールドトレードセンター・ツインタワー南棟（110階建）に突入。ボストン発ロサンゼルス行きユナイテッド航空175便（ボーイング767-200ER型機）。午前9時37分45秒、アメリカン航空77便　アメリカ国防総省本庁舎（ペンタゴン）に激突。午前9時59分、WTCツインタワー南棟が崩壊。午前10時03分11秒、ユナイテッド航空93便がペンシルベニア州ピッツバーグ郊外シャンクスヴィルに墜落。午前10時28分、WTCツインタワー北棟が崩壊。午後5時21分、WTC7が倒壊。',
        ]);
        DB::table('chronology_period_heiseis')->insert([
            'id' => '2001110201',
            'event_date' => '平成13年(2001年)11月02日',
            'event_subject' => 'テロ対策特別措置法公布',
            'event_detail' => '対テロ戦争で米軍の後方支援、自衛隊をインド洋へ派遣、洋上で給油活動。正式名称は、「平成十三年九月十一日のアメリカ合衆国において発生したテロリストによる攻撃等に対応して行われる国際連合憲章の目的達成のための諸外国の活動に対して我が国が実施する措置及び関連する国際連合決議等に基づく人道的措置に関する特別措置法」。',
        ]);
        DB::table('chronology_period_heiseis')->insert([
            'id' => '2003032001',
            'event_date' => '平成15年(2003年)03月20日',
            'event_subject' => 'イラク戦争',
            'event_detail' => 'アメリカは「イラクの大量破壊兵器を隠し持っている。これ以上放置してはならない」と、武力行使を認める国連決議がないままイギリスと共にイラク侵攻作戦を開始。小泉首相は「アメリカの武力行使を理解・支持する」と述べた。米英軍は3週間後には首都バグダッドを制圧、フセイン政権は崩壊した。ブッシュ大統領は5月1日、空母リンカーン上で「戦闘終結宣言」を行った。しかし、戦争の理由だった大量破壊兵器は見つからず戦争の大義は大きく揺らいだ。',
        ]);
        DB::table('chronology_period_heiseis')->insert([
            'id' => '2003080101',
            'event_date' => '平成15年(2003年)08月01日',
            'event_subject' => 'イラク復興支援特別措置法公布',
            'event_detail' => '2003年成立。イラク戦争の終結後、その復興や治安維持活動を後方支援(軍事支援を含む)するための時限立法。2004年、戦闘が継続する他国の領土内に、武装した陸上自衛隊が初めて派遣されたが戦後日本の安全保障政策を根本的に転換するものとの強い批判があった。結局、2006年に陸上自衛隊が撤収したのにつづき、2008年には航空自衛隊も完全撤収した。',
        ]);
        DB::table('chronology_period_heiseis')->insert([
            'id' => '2004061801',
            'event_date' => '平成16年(2004年)06月18日',
            'event_subject' => '有事関連七法施行',
            'event_detail' => '米軍の軍事行動を日本の国民、企業、自治体が後方支援するためのもの。①国民保護法(武力攻撃事態において、国民の生命や財産を守るため、国や地方公共団体などの責務、国民の避難・救援の手順、国民の協力、物資・建物の使用と補償を規定)②米軍行動関連措置法(存立危機事態における米軍や他国軍への役務提供を可能とする)③改正自衛隊法(在外法人の救出や米艦防護を可能とする)④海上輸送規制法(存立危機事態における外国軍用品の海上輸送規制を可能とする)⑤特定公共施設利用法(武力攻撃事態における米軍以外の他国軍も港湾や飛行場等を利用可能とする)⑥捕虜取扱い法(人道的な捕虜の取り扱いを存立危機事態にも追加する)⑦国際人道法違反行為処罰法(国際人道法に規定する違反行為への罰則を規定)',
        ]);
        DB::table('chronology_period_heiseis')->insert([
            'id' => '2005021601',
            'event_date' => '平成17年(2005年)02月16日',
            'event_subject' => '京都議定書発効',
            'event_detail' => '気候変動枠組条約第3回締約国会議(COP3)にて京都議定書採択、京都メカニズム導入。①排出量取引(ET)：先進国間で排出量売買。②共同実施(JI)：先進国間。他国の削減事業への協力で自国の実績としてカウント。③クリーン開発メカニズム(CDM)：先進国・途上国間。他国の削減事業への協力で自国の実績としてカウント。',
        ]);
        DB::table('chronology_period_heiseis')->insert([
            'id' => '2005032501',
            'event_date' => '平成17年(2005年)03月25日',
            'event_subject' => '愛知万博開幕',
            'event_detail' => '21世紀最初の国際博覧会。テーマは「自然の叡智」。',
        ]);
        DB::table('chronology_period_heiseis')->insert([
            'id' => '2009091601',
            'event_date' => '平成21年(2009年)09月16日',
            'event_subject' => '鳩山由紀夫内閣成立',
            'event_detail' => '民社国連立政権。副総理は菅直人、外相は岡田克也、国交相は前原誠司。「脱官僚依存」をとなえたが、普天間基地移設問題を混乱させ、国民の信頼を失って退陣。',
        ]);
        DB::table('chronology_period_heiseis')->insert([
            'id' => '2010060801',
            'event_date' => '平成22年(2010年)06月08日',
            'event_subject' => '菅直人内閣成立',
            'event_detail' => '民主・国民新党の連立政権。外相は岡田克也、財務相は野田佳彦。東日本大震災に伴う東京電力福島第一原子力発電所事故への対応で、国民の信頼を失い退陣。',
        ]);
        DB::table('chronology_period_heiseis')->insert([
            'id' => '2011031101',
            'event_date' => '平成23年(2011年)03月11日',
            'event_subject' => '東日本大震災',
            'event_detail' => '正式名称は「平成23(2011年)年東北地方太平洋沖地震」。三陸沖地震、M8.4〜9.0、死者19,747人、行方不明者2,556人、40.1mの大津波。住家全壊121,781棟、住家半壊280,962棟、住家一部破損745,162棟など。発生時刻14時46分18.1秒。栗原市(宮城県)で震度７。東北地方を中心に津波により大きな被害。長周期地震動や液状化現象により被害も発生。',
        ]);
        DB::table('chronology_period_heiseis')->insert([
            'id' => '2013040401',
            'event_date' => '平成25年(2013年)04月04日',
            'event_subject' => '日銀が量的・質的金融緩和導入決定',
            'event_detail' => '日銀が量的・質的金融緩和（異次元緩和）の導入を決定。',
        ]);
        DB::table('chronology_period_heiseis')->insert([
            'id' => '2013112001',
            'event_date' => '平成25年(2013年)11月20日',
            'event_subject' => '西之島噴火',
            'event_detail' => '小笠原諸島の無人島、西之島近海で39年ぶりに噴火が発生。',
        ]);
        DB::table('chronology_period_heiseis')->insert([
            'id' => '2015051701',
            'event_date' => '平成27年(2015年)05月17日',
            'event_subject' => '「大阪都構想」否決',
            'event_detail' => '大阪市における特別区の設置についての投票。「大阪都構想」を住民投票で否決。',
        ]);
        DB::table('chronology_period_heiseis')->insert([
            'id' => '2015090401',
            'event_date' => '平成27年(2015年)09月04日',
            'event_subject' => '女性活躍推進法公布',
            'event_detail' => '正式名称は「女性の職業生活における活躍の推進に関する法律」。働く場面で活躍したいという女性が、その個性と能力を十分に発揮できる社会を実現させるため、女性の登用をうながすことを目的として、国や地方公共団体、大企業に数値目標の設定や公表を義務づけた法律。日本社会の活力を維持する狙いがあり、仕事と子育ての両立に向けた環境整備もおこなう。中小企業は努力義務にとどまる。10年間の時限立法。',
        ]);
        DB::table('chronology_period_heiseis')->insert([
            'id' => '2016010401',
            'event_date' => '平成28年(2016年)01月04日',
            'event_subject' => 'マイナンバー運用開始',
            'event_detail' => '国民一人ひとりに識別番号を割りふり、納税や社会保障などにかかわる情報を国が一元的に管理する仕組み。番号は住民基本台帳の住民票番号をもとにして作成され、市区町村が個人番号を記した「通知カード」を世帯ごとに送付した。民間での利用も想定され、情報漏洩など課題も多い。究極の「国民総背番号制」との批判もある。2013年に関連法が成立し、16年から運用。',
        ]);
        DB::table('chronology_period_heiseis')->insert([
            'id' => '2016032901',
            'event_date' => '平成28年(2016年)03月29日',
            'event_subject' => '平和安全法制施行',
            'event_detail' => '正式名称は「我が国及び国際社会の平和及び安全の確保に資するための自衛隊法等の一部を改正する法律」。安倍晋三内閣が2015年の国会に提出して成立した、国の安全保障にかかわる法制度の総称。同年に再改定された日米防衛協力のための指針(ガイドライン)や、前年に閣議決定した集団的自衛権の行使を具体化する意味合いがある。10の現行法改正(一括法=平和安全法制整備法)と国際平和支援法(新法)の合計11の法律で構成される。一括法は①自衛隊法改正、②武力攻撃事態法改正、③重要影響事態法(周辺事態法を改正)、④PKO協力法改正、⑤米軍行動円滑化法改正、⑥船舶検査活動法改正、⑦特定公共施設利用法改正。⑧海上輸送規制法改正、⑨捕虜取り扱い法改正、⑩NSC設置法改正からなる。これらの法案の審議過程で、「戦争法」と危惧する野党をはじめ、学生(SEALDs＝シールズ、自由と民主主義のための学生緊急行動)や学者・研究者(安全保障関連法に反対する学者の会)、若い母親(安全保障関連法に反対するママの会)など世代や立場をこえた空前の反対運動が全国に広がり、国会周辺でも数万人規模の抗議行動が連日つづけられた。また、憲法学者の大半や元内閣法制局長官・元最高裁判官などの専門家が政府案を違憲と指摘するなど、法律自体の合憲性が厳しく問われた。法律は2016年に施行。',
        ]);
        DB::table('chronology_period_heiseis')->insert([
            'id' => '2016041401',
            'event_date' => '平成28年(2016年)04月14日',
            'event_subject' => '熊本地震',
            'event_detail' => '平成28年(2016年)熊本地震の前震。M6.5。住家全壊8,668棟、住家半壊34,718棟、住家一部破損162,557棟など。益城町(熊本県)で震度７。家屋等の被害のほか、大規模な山崩れが発生。',
        ]);
        DB::table('chronology_period_heiseis')->insert([
            'id' => '2016113001',
            'event_date' => '平成28年(2016年)11月30日',
            'event_subject' => 'ニホニウム決定',
            'event_detail' => 'それまで暫定的に系統名でウンウントリウム(113番元素)と呼ばれていた新元素の正式名称がニホニウムに決定。',
        ]);
        DB::table('chronology_period_heiseis')->insert([
            'id' => '2017081601',
            'event_date' => '平成29年(2017年)08月16日',
            'event_subject' => '水俣条約発効',
            'event_detail' => '正式名称は「水銀に関する水俣条約」。人体や環境に悪影響を与える水銀の製造や輸出入を原則として禁止する条約。熊本県水俣市で2013年、国連環境計画(UNEP)が中心となって採択された。2017年発効。',
        ]);
        DB::table('chronology_period_heiseis')->insert([
            'id' => '2018123001',
            'event_date' => '平成30年(2018年)12月30日',
            'event_subject' => 'TPP11発効',
            'event_detail' => '正式名称は「包括的及び先進的な環太平洋パートナーシップ協定（Comprehensive and Progressive Agreement for Trans-Pacific Partnership：CPTPP）」。TPPは「例外なき貿易自由化」をスローガンとしている。しかし、各国の利害関係の調整は難しく、交渉の末に合意に達したが、2017年にアメリカが離脱を表明した。そのため、アメリカを除く11か国は新たに協定を締結することで合意。',
        ]);
    }
}
