<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Citation;
use DateTime;

class CitationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('citations')->insert([
            'citation_title' => '日本史用語集',
            'citation_detail' => '有名な歴史教科書に定評のある山川出版社の用語集。各用語の詳細な解説と入試出題回数を記載。教科書には詳しい説明のない用語までしっかり網羅。',
            'start_date' => '2017年10月10日出版',
            'website_link' => 'https://www.yamakawa.co.jp/product/01304',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('citations')->insert([
            'citation_title' => '新詳日本史',
            'citation_detail' => '高校日本史学習者向けに販売されている浜島書店の日本史資料集。年表を豊富に使い、時系列にわかりやすくまとめられている。',
            'start_date' => '2016年05月28日初回放送',
            'website_link' => 'https://www.hamajima.co.jp/books/sh/detail/121410',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('citations')->insert([
            'citation_title' => '英雄たちの選択',
            'citation_detail' => '歴史を大きく変える選択をした英雄たちの心の中に分け入り、英雄たちが体験したとみられる葛藤を、様々な分野の専門家とともに考えるNHKの番組。BSプレミアム毎週水曜午後８時放送。',
            'start_date' => '2013年05月30日初回放送',
            'website_link' => 'https://www.nhk.jp/p/heroes/ts/2QVXZQV7NM/',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('citations')->insert([
            'citation_title' => '偉人たちの健康診断',
            'citation_detail' => '偉人たちの「病気」や「食生活」などを最新医学から検証し、その歴史上の影響の可能性と現代への教訓を探るNHKの番組。',
            'start_date' => '2017年10月04日初回放送',
            'website_link' => 'https://www2.nhk.or.jp/archives/tv60bin/detail/index.cgi?das_id=D0009050828_00000',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('citations')->insert([
            'citation_title' => '映像の世紀プレミアム',
            'citation_detail' => '世界各国に眠る映像アーカイブスから激動の歴史を追体験するNHKの番組。',
            'start_date' => '2016年05月28日初回放送',
            'website_link' => 'https://www2.nhk.or.jp/archives/tv60bin/detail/index.cgi?das_id=D0009050492_00000',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('citations')->insert([
            'citation_title' => '映像の世紀バタフライエフェクト',
            'citation_detail' => '歴史は「バラフライエフェクト」の連続で積み上げられていることを念頭に、世界各国に眠る映像アーカイブスから激動の歴史を追体験するNHKの番組。',
            'start_date' => '2022年04月04日初回放送',
            'website_link' => 'https://www.nhk.jp/p/ts/9N81M92LXV/',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
