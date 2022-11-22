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
        $this->call(ChronologySeeder::class);
        $this->call(ChronologyGenreAccidentSeeder::class);
        $this->call(ChronologyGenreCultureSeeder::class);
        $this->call(ChronologyGenreDisasterSeeder::class);
        $this->call(ChronologyGenreEconomySeeder::class);
        $this->call(ChronologyGenrePoliticsSeeder::class);
        $this->call(ChronologyGenreWarSeeder::class);
        $this->call(ChronologyPeriodAduchimomoyamaSeeder::class);
        $this->call(ChronologyPeriodAsukaSeeder::class);
        $this->call(ChronologyPeriodEdoSeeder::class);
        $this->call(ChronologyPeriodHeianSeeder::class);
        $this->call(ChronologyPeriodHeiseiSeeder::class);
        $this->call(ChronologyPeriodKamakuraSeeder::class);
        $this->call(ChronologyPeriodKohunSeeder::class);
        $this->call(ChronologyPeriodMeijiSeeder::class);
        $this->call(ChronologyPeriodMuromachiSeeder::class);
        $this->call(ChronologyPeriodNanbokuchoSeeder::class);
        $this->call(ChronologyPeriodNaraSeeder::class);
        $this->call(ChronologyPeriodReiwaSeeder::class);
        $this->call(ChronologyPeriodSyowaSeeder::class);
        $this->call(ChronologyPeriodTaisyoSeeder::class);
    }
}
