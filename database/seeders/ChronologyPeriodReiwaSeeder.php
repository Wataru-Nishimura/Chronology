<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Chronology;
use App\Models\ChronologyPeriodReiwa;

class ChronologyPeriodReiwaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chronology_period_reiwas')->insert([
            'id' => '2020011501',
            'event_date' => '令和2年(2020年)01月15日',
            'event_subject' => 'COVID-19の国内初感染者を確認',
            'event_detail' => '新型コロナウイルス感染症の国内初の感染者を確認。2019年に発生した新型コロナウイルス感染症は、WHOによる国際正式名称をCOVID-19といい、SARSコロナウイルス2(SARS-CoV-2)がヒトに感染することによって発症する気道感染症である。2020年に入ってから世界中で感染が拡大し、2022年8月までに感染者数は累計6億人を超え、世界的流行(パンデミック)をもたらしている。',
        ]);
    }
}
