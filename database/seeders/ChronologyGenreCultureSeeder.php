<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Chronology;

class ChronologyGenreCultureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chronologygenrecultures')->insert([
            'id' => '0538101201',
            'event_date' => '宣化天皇3年(538年)10月12日',
            'event_subject' => '仏教伝来',
            'event_detail' => '『日本書紀』には欽明天皇13壬申年(552)に、百済の聖明王が仏像・経論などを献じたとあり、仏教公伝の初めとされる。しかし、『上宮聖徳法王帝説』や『元興寺縁起』には、欽明天皇戊午年(538)伝来と記され、現在はこの説が有力とされる。伝来した仏教は、アジア北方に広がった北方仏教（大乗仏教）の系列。',
        ]);
        DB::table('chronologygenrecultures')->insert([
            'id' => '0712012801',
            'event_date' => '和銅5年(712年)01月28日',
            'event_subject' => '太安万侶『古事記』を撰上',
            'event_detail' => '『古事記』は3巻で稗田阿礼の誦習した神代から推古天皇までの天皇系譜や天皇家の伝承を太安万侶(安麻呂)が筆録して、712年に元明天皇へ献上したもの。漢字の音訓を用いて日本語を文章に表現する。',
        ]);
        DB::table('chronologygenrecultures')->insert([
            'id' => '0905041801',
            'event_date' => '延喜5年(905年)04月18日',
            'event_subject' => '『古今和歌集』撰進',
            'event_detail' => '醍醐天皇の命で紀貫之・紀友則・凡河内躬恒・壬生忠岑らにより編纂された最初の勅撰和歌集。20巻。『万葉集』以後の約1100首を収める。優美・繊細・技巧的な歌風で「古今調」と呼ばれ、「万葉調」と対比される。また、序文には漢字で書かれた真名序(紀淑望作)と平仮名で書かれた仮名序(紀貫之作)の二つある。',
        ]);
        DB::table('chronologygenrecultures')->insert([
            'id' => '1053030401',
            'event_date' => '天喜元年(1053年)03月04日',
            'event_subject' => '平等院鳳凰堂建立・阿弥陀如来像（定朝）',
            'event_detail' => '1053年に落成。1052年に藤原頼通が宇治の別荘を寺とした平等院の阿弥陀堂。定朝の阿弥陀如来像、欄間の52体の雲中供養仏、壁画、金銅鳳凰などが有名。極楽浄土を現出し、「極楽いぶかしくば、宇治の御寺をうやまうべし」（『後拾遺往生伝』）と言われた。',
        ]);
        DB::table('chronologygenrecultures')->insert([
            'id' => '1124082001',
            'event_date' => '天治元年(1124年)08月20日',
            'event_subject' => '平泉中尊寺金色堂落成',
            'event_detail' => '平泉中尊寺金色堂は、1124年、藤原清衡が陸奥平泉に創建した阿弥陀堂。光堂ともいう。単層、宝形造。須弥壇の下に清衡・基衡・秀衡3代の遺体が納める。',
        ]);
        DB::table('chronologygenrecultures')->insert([
            'id' => '1164121701',
            'event_date' => '長寛2年(1164年)12月17日',
            'event_subject' => '三十三間堂（蓮華王院）建立',
            'event_detail' => '後白河上皇の命で、平清盛が院御所の法住寺殿の隣に造営した寺。鎌倉時代に再建された本堂(三十三間堂)に、千一体の千手観音像を安置する。',
        ]);
        DB::table('chronologygenrecultures')->insert([
            'id' => '1499062601',
            'event_date' => '明応8年(1499年)06月26日',
            'event_subject' => '龍安寺石庭完成',
            'event_detail' => '龍安寺石庭は室町中期の枯山水の代表例。作庭者は不詳。長方形の平庭に白砂と大小15の石を配置してある。虎の子渡しの俗称を持つ。',
        ]);
        DB::table('chronologygenrecultures')->insert([
            'id' => '1720080701',
            'event_date' => '享保5年(1720年)08月07日',
            'event_subject' => '「いろは」47組結成',
            'event_detail' => '町奉行大岡忠相により、江戸の町方に消防組織として町火消が設置された。町奉行が監督。これまでの幕府の定火消、大名の大名火消に加え、「いろは」47組(のち48組)の火消組合を結成。当初は町方で雇った火消人足が担当したが、破壊消火のため次第に鳶人足に代わった。',
        ]);
        DB::table('chronologygenrecultures')->insert([
            'id' => '1821071001',
            'event_date' => '文政4年(1821年)07月10日',
            'event_subject' => '『大日本沿海輿地全図』を幕府に献上',
            'event_detail' => '伊能忠敬が幕命で、1800〜16年に全国の沿岸を測量し、その門弟らが完成させた『大日本沿海輿地全図』を幕府に献上。大図・中図・小図の3種。計225図。別名伊能図。実測による驚異的な正確さを誇る。忠敬の死後3年の1821年に完成した。',
        ]);
        DB::table('chronologygenrecultures')->insert([
            'id' => '1867010501',
            'event_date' => '慶応3年(1867年)01月05日',
            'event_subject' => '夏目漱石誕生',
            'event_detail' => '夏目漱石は、松山中学・熊本の五高教授、文部省留学生としてロンドンに留学。1903年、一高教授・東京帝大講師。1905年、『吾輩は猫である』で文壇に登場。長編小説『三四郎』も著す。反自然主義的傾向を強める。知識人の内面、近代日本の病弊などを追究する文明批評も行う。',
        ]);
        DB::table('chronologygenrecultures')->insert([
            'id' => '1867091701',
            'event_date' => '慶応3年(1867年)09月17日',
            'event_subject' => '正岡子規誕生',
            'event_detail' => '正岡子規は、俳人・歌人。伊予松山に生まれる。1883年に上京して大学予備門に入学、夏目漱石を知る。写生に基づく俳句・短歌革新運動を提唱。俳句雑誌『ホトトギス』で活躍、和歌の根岸短歌会を設立する。',
        ]);
        DB::table('chronologygenrecultures')->insert([
            'id' => '1914122001',
            'event_date' => '大正3年(1914年)12月20日',
            'event_subject' => '東京駅開業',
            'event_detail' => '辰野金吾設計の東京駅開業。辰野金吾は、1879年工部大学校第1期卒業生、翌年、英国に留学。1883年に帰国、のち東京帝大工科大学長。1903年以後は民間の建築家として活動、日本銀行本店や東京駅など多くの本格的な洋風建築を設計・施工する。',
        ]);
        DB::table('chronologygenrecultures')->insert([
            'id' => '1920110101',
            'event_date' => '大正9年(1920年)11月01日',
            'event_subject' => '明治神宮創建',
            'event_detail' => '明治神宮は、祭神は明治天皇と昭憲皇太后で、明治天皇崩御後の1920年に創建された。',
        ]);
        DB::table('chronologygenrecultures')->insert([
            'id' => '1935013101',
            'event_date' => '昭和10年(1935年)01月31日',
            'event_subject' => '大江健三郎誕生',
            'event_detail' => '大江健三郎は、愛媛県生まれの作家。東大在学中の1958年、戦後の閉塞感を象徴する『飼育』で芥川賞を受賞した。主な作品に『個人的な体験』などがある。1994年にノーベル文学賞を受賞した。',
        ]);
        DB::table('chronologygenrecultures')->insert([
            'id' => '1964101001',
            'event_date' => '昭和39年(1964年)10月10日',
            'event_subject' => '第18回オリンピック東京大会開会式',
            'event_detail' => '1940年に東京で開催される予定だった第12回大会が、第二次世界大戦で中止されたため、アジアで最初のオリンピック大会となった。93か国が参加。整然たる大会運営と日本選手団の好成績は、国力の伸長を国内外に印象づけた。この年、東海道新幹線が開通。開会式のあった10月10日は、国民の祝日「体育の日」となった（現在は10月の第2月曜日）。',
        ]);
        DB::table('chronologygenrecultures')->insert([
            'id' => '1972020301',
            'event_date' => '昭和47年(1972年)02月03日',
            'event_subject' => '札幌冬季オリンピック開催',
            'event_detail' => 'アジアおよび有色人種圏における史上初の冬季オリンピックであり、島における史上初の冬季オリンピック。スキージャンプ70m級（現在のノーマルヒル）では笠谷幸生が1位、金野昭次が2位、青地清二が3位と、日本人が冬季オリンピックでは初めて表彰台を独占。',
        ]);
        DB::table('chronologygenrecultures')->insert([
            'id' => '1989022201',
            'event_date' => '平成元年(1989年)02月22日',
            'event_subject' => '佐賀・吉野ヶ里遺跡で環濠集落を発見',
            'event_detail' => '佐賀・吉野ヶ里遺跡で弥生時代後期の国内最大規模の環濠集落を発見。吉野ヶ里遺跡は佐賀県神埼郡吉野ヶ里町にある日本屈指の大環濠集落。弥生時代前期に集落を形成、中期に墳丘墓築造、後期に物見櫓を設置。物見櫓は「魏志」倭人伝にいう「楼観」にあたるとされる。',
        ]);
        DB::table('chronologygenrecultures')->insert([
            'id' => '1989070601',
            'event_date' => '平成元年(1989年)07月06日',
            'event_subject' => '美空ひばりさんに国民栄誉賞',
            'event_detail' => 'この年の6月24日に亡くなった美空ひばりさんは、「真摯な精進歌謡曲を通じて国民に夢と希望を与えた」ことが功績とされ国民栄誉賞が贈られた。',
        ]);
        DB::table('chronologygenrecultures')->insert([
            'id' => '1990120201',
            'event_date' => '平成2年(1990年)12月02日',
            'event_subject' => '日本人初の宇宙飛行',
            'event_detail' => 'ＴＢＳの記者 秋山豊寛さんを乗せたソビエトの宇宙船ソユーズがバイコヌール宇宙基地から打ち上げられた。この宇宙飛行はＴＢＳがソビエト宇宙総局とタイアップして企画したもので、秋山さんは宇宙から見た地球の様子をリポートした。',
        ]);
        DB::table('chronologygenrecultures')->insert([
            'id' => '2001082901',
            'event_date' => '平成13年(2001年)08月29日',
            'event_subject' => 'H-II Aロケット 1号機打ち上げ成功',
            'event_detail' => 'H-IIA ロケットは、宇宙開発事業団(NASDA)と後継法人の宇宙航空研究開発機構(JAXA)と三菱重工が開発し三菱重工が製造および打ち上げを行う、人工衛星打ち上げ用液体燃料ロケットで使い捨て型のローンチ・ヴィークル。日本の衛星打ち上げの自律性をになうロケットとして基幹ロケットに位置づけられる。',
        ]);
        DB::table('chronologygenrecultures')->insert([
            'id' => '2016113001',
            'event_date' => '平成28年(2016年)11月30日',
            'event_subject' => 'ニホニウム決定',
            'event_detail' => 'それまで暫定的に系統名でウンウントリウム(113番元素)と呼ばれていた新元素の正式名称がニホニウムに決定。',
        ]);
    }
}
