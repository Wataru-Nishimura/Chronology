<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Gallery;
use DateTime;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('galleries')->insert([
            'user_id' => 1,
            'gallery_title' => '久遠寺',
            'gallery_detail' => '法華宗の総本山。佐渡配流から帰った日蓮が、甲斐国の豪族波木井実長に請われて身延山に建てた寺院。',
            'image_path' => 'https://res.cloudinary.com/dgmlrddyd/image/upload/v1669711383/03gallery_%E4%B9%85%E9%81%A0%E5%AF%BA_fk8det.jpg',
            'gallery_genre' => '寺',
            'gallery_period' => '鎌倉',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('galleries')->insert([
            'user_id' => 1,
            'gallery_title' => '厳島神社',
            'gallery_detail' => '安芸国の一ノ宮。航海安全をつかさどる市杵島姫命が主神。安芸守だった平清盛の崇敬を受けて隆盛した。',
            'image_path' => 'https://res.cloudinary.com/dgmlrddyd/image/upload/v1669711383/03gallery_%E5%8E%B3%E5%B3%B6%E7%A5%9E%E7%A4%BE_ugcyeh.jpg',
            'gallery_genre' => '神社',
            'gallery_period' => '平安',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('galleries')->insert([
            'user_id' => 1,
            'gallery_title' => '五稜郭',
            'gallery_detail' => '幕臣武田斐三郎の設計。1857年着工、64年に完成したヨーロッパ風の星形城塞。長野県佐久の竜岡城も同型。',
            'image_path' => 'https://res.cloudinary.com/dgmlrddyd/image/upload/v1669711383/03gallery_%E4%BA%94%E7%A8%9C%E9%83%AD_jlejul.jpg',
            'gallery_genre' => '城',
            'gallery_period' => '江戸',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('galleries')->insert([
            'user_id' => 1,
            'gallery_title' => '高野山金剛峰寺',
            'gallery_detail' => '和歌山県伊都郡高野町にある真言宗総本山。816年、空海の開基。院政期の白河・鳥羽両法皇をはじめ、貴族の尊信を得て、多数の荘園・僧兵を擁した。',
            'image_path' => 'https://res.cloudinary.com/dgmlrddyd/image/upload/v1669711384/03gallery_%E9%AB%98%E9%87%8E%E5%B1%B1_waye9j.jpg',
            'gallery_genre' => '寺',
            'gallery_period' => '平安',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('galleries')->insert([
            'user_id' => 1,
            'gallery_title' => '清水寺',
            'gallery_detail' => '本堂は前面を崖に張り出した懸造とし、広い舞台をつくった。独特の観音堂の形式で、創建以来の姿を伝える。',
            'image_path' => 'https://res.cloudinary.com/dgmlrddyd/image/upload/v1669711385/03gallery_%E6%B8%85%E6%B0%B4%E5%AF%BA01_hbtvbz.jpg',
            'gallery_genre' => '寺',
            'gallery_period' => '奈良',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('galleries')->insert([
            'user_id' => 1,
            'gallery_title' => '清水寺',
            'gallery_detail' => '本堂は前面を崖に張り出した懸造とし、広い舞台をつくった。独特の観音堂の形式で、創建以来の姿を伝える。',
            'image_path' => 'https://res.cloudinary.com/dgmlrddyd/image/upload/v1669711383/03gallery_%E6%B8%85%E6%B0%B4%E5%AF%BA02_olngvs.jpg',
            'gallery_genre' => '寺',
            'gallery_period' => '奈良',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('galleries')->insert([
            'user_id' => 1,
            'gallery_title' => '清水寺',
            'gallery_detail' => '本堂は前面を崖に張り出した懸造とし、広い舞台をつくった。独特の観音堂の形式で、創建以来の姿を伝える。',
            'image_path' => 'https://res.cloudinary.com/dgmlrddyd/image/upload/v1669711383/03gallery_%E6%B8%85%E6%B0%B4%E5%AF%BA03_hchvwg.jpg',
            'gallery_genre' => '寺',
            'gallery_period' => '奈良',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('galleries')->insert([
            'user_id' => 1,
            'gallery_title' => '大阪城',
            'gallery_detail' => '1583年に石山本願寺の旧地に秀吉が築城。難攻不落の名城といわれたが、1615年に大坂の陣で落城。徳川氏が再築したが、幕末に焼亡した。現在の天守は1931年に復興したもの。',
            'image_path' => 'https://res.cloudinary.com/dgmlrddyd/image/upload/v1669711382/03gallery_%E5%A4%A7%E9%98%AA%E5%9F%8E_ojfdi2.jpg',
            'gallery_genre' => '城',
            'gallery_period' => '安土桃山',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('galleries')->insert([
            'user_id' => 1,
            'gallery_title' => '長谷寺',
            'gallery_detail' => '奈良県桜井市初瀬にある寺。686年に弘福寺の道明が創建し、733年徳道が堂舎を建てて、十一面観音像を安置したという。平安時代以降、観音信仰の隆盛に伴い、貴族をはじめ多くの参詣者を集めた。',
            'image_path' => 'https://res.cloudinary.com/dgmlrddyd/image/upload/v1669711383/03gallery_%E9%95%B7%E8%B0%B7%E5%AF%BA_n7iuvi.jpg',
            'gallery_genre' => '寺',
            'gallery_period' => '平安',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('galleries')->insert([
            'user_id' => 1,
            'gallery_title' => '鶴ヶ城',
            'gallery_detail' => '城下町の南端に位置し、会津藩の政庁として会津の政治の中心であった。藩主の会津松平家は徳川将軍家と密接な関係にあり幕末には戊辰戦争の激戦地となった。現在、城跡は「鶴ヶ城公園」となっており、そのほとんどが国の史跡に指定されている。',
            'image_path' => 'https://res.cloudinary.com/dgmlrddyd/image/upload/v1669711382/03gallery_%E9%B6%B4%E3%83%B6%E5%9F%8E_owl3wk.jpg',
            'gallery_genre' => '城',
            'gallery_period' => '安土桃山',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('galleries')->insert([
            'user_id' => 1,
            'gallery_title' => '那智の滝',
            'gallery_detail' => '石英斑岩からなるほとんど垂直の断崖に沿って落下し、落ち口の幅13メートル、滝壺までの落差は133メートルに達し、その姿は熊野灘からも望見することができる。総合落差では日本12位だが、一段の滝としては落差日本1位。華厳滝、袋田の滝と共に日本三名瀑に数えられている。',
            'image_path' => 'https://res.cloudinary.com/dgmlrddyd/image/upload/v1669711382/03gallery_%E9%82%A3%E6%99%BA%E3%81%AE%E6%BB%9D_trlqgo.jpg',
            'gallery_genre' => 'その他',
            'gallery_period' => '古墳',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('galleries')->insert([
            'user_id' => 1,
            'gallery_title' => '白川郷',
            'gallery_detail' => '世界遺産に登録されている「合掌造り集落」は大小100棟余りの合掌造りが数多く残り、また今でもそこで人々の生活が営まれている集落として知られている。その他にも霊峰白山の麓が源泉地となる「平瀬温泉」等、伝統の知恵と技、雄大な自然が体感できる観光スポットが満載。',
            'image_path' => 'https://res.cloudinary.com/dgmlrddyd/image/upload/v1669711382/03gallery_%E7%99%BD%E5%B7%9D%E9%83%B7_jq37ky.jpg',
            'gallery_genre' => 'その他',
            'gallery_period' => '江戸',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('galleries')->insert([
            'user_id' => 1,
            'gallery_title' => '彦根城',
            'gallery_detail' => '関ケ原で勝利した徳川家康が石田三成の近江18万石を取り上げ、徳川四天王の一人、井伊直正に与えた。直正は三成の居城・佐和山城を取り壊し、すぐ近くに城を築こうとしたことに始まるが、正直は、新城築城計画を立てた矢先、関ヶ原で受けた鉄砲傷のために死去。家督を継いだ直継により金亀（彦根）山に1603年(慶長8)から大坂の豊臣家への備えとして徳川による支援を受けた天下普請として築城を開始し、1606年(慶長11)に三重三階の天守を含む一期工事が完成。',
            'image_path' => 'https://res.cloudinary.com/dgmlrddyd/image/upload/v1669711382/03gallery_%E5%BD%A6%E6%A0%B9%E5%9F%8E_sb4vtf.jpg',
            'gallery_genre' => '城',
            'gallery_period' => '安土桃山',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('galleries')->insert([
            'user_id' => 1,
            'gallery_title' => '姫路城',
            'gallery_detail' => '池田輝政の居城として慶長年間に築城。播磨平野の小丘陵にある代表的な平山城。五層七重の大天守を中心に、3小天守が渡櫓で結ばれた連立式天守閣の遺構。',
            'image_path' => 'https://res.cloudinary.com/dgmlrddyd/image/upload/v1669711384/03gallery_%E5%A7%AB%E8%B7%AF%E5%9F%8E_oba7zy.jpg',
            'gallery_genre' => 'その他',
            'gallery_period' => '古墳',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('galleries')->insert([
            'user_id' => 1,
            'gallery_title' => '伏見稲荷大社',
            'gallery_detail' => '“お稲荷さん”と親しまれる伏見稲荷大社は、全国に約3万社ある稲荷神社の総本宮。その歴史は平安遷都よりも古く、和銅4年の創建。商売繁昌・家内安全のご利益があるとされ、一年を通してたくさんの参拝者で賑わう。',
            'image_path' => 'https://res.cloudinary.com/dgmlrddyd/image/upload/v1669711383/03gallery_%E4%BC%8F%E8%A6%8B%E7%A8%B2%E8%8D%B7%E5%A4%A7%E7%A4%BE_vmtj4o.jpg',
            'gallery_genre' => '神社',
            'gallery_period' => '奈良',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('galleries')->insert([
            'user_id' => 1,
            'gallery_title' => '平城宮跡',
            'gallery_detail' => '平城京の宮城。唐の長安にならう都城が建設された。1959年以来、本格的な発掘調査が行われ、史跡公園として整備された。',
            'image_path' => 'https://res.cloudinary.com/dgmlrddyd/image/upload/v1669711384/03gallery_%E5%B9%B3%E5%9F%8E%E5%AE%AE%E8%B7%A1_zq77gl.jpg',
            'gallery_genre' => 'その他',
            'gallery_period' => '奈良',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('galleries')->insert([
            'user_id' => 1,
            'gallery_title' => '平等院鳳凰堂',
            'gallery_detail' => '1053年に落成。1052年に藤原頼通が宇治の別荘を寺とした平等院の阿弥陀堂。定朝の阿弥陀如来像、欄間の52体の雲中供養仏、壁画、金銅鳳凰などが有名。極楽浄土を現出し、「極楽いぶかしくば、宇治の御寺をうやまうべし」と言われた。',
            'image_path' => 'https://res.cloudinary.com/dgmlrddyd/image/upload/v1669711384/03gallery_%E5%B9%B3%E7%AD%89%E9%99%A2%E9%B3%B3%E5%87%B0%E5%A0%82_ktohkz.jpg',
            'gallery_genre' => '寺',
            'gallery_period' => '平安',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
