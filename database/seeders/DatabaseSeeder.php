<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
                UserSeeder::class,
                ChronologySeeder::class,
                ChronologyGenreAccidentSeeder::class,
                ChronologyGenreCultureSeeder::class,
                ChronologyGenreDisasterSeeder::class,
                ChronologyGenreEconomySeeder::class,
                ChronologyGenrePoliticsSeeder::class,
                ChronologyGenreWarSeeder::class,
                ChronologyPeriodAduchimomoyamaSeeder::class,
                ChronologyPeriodAsukaSeeder::class,
                ChronologyPeriodEdoSeeder::class,
                ChronologyPeriodHeianSeeder::class,
                ChronologyPeriodHeiseiSeeder::class,
                ChronologyPeriodKamakuraSeeder::class,
                ChronologyPeriodKohunSeeder::class,
                ChronologyPeriodMeijiSeeder::class,
                ChronologyPeriodMuromachiSeeder::class,
                ChronologyPeriodNanbokuchoSeeder::class,
                ChronologyPeriodNaraSeeder::class,
                ChronologyPeriodReiwaSeeder::class,
                ChronologyPeriodSyowaSeeder::class,
                ChronologyPeriodTaisyoSeeder::class,
                GallerySeeder::class,
                CitationSeeder::class,
        ]);
    }
}
