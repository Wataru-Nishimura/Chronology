<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Administrator;
use factory;

class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('administrators')->truncate();
        
        DB::table('administrators')->insert([
            'name' => 'ABC',
            'userid' => 'admin001',
            'password' => 'pass0001',
        ]);
        DB::table('administrators')->insert([
            'name' => 'DEF',
            'userid' => 'admin002',
            'password' => 'pass0002',
        ]);
    }
}
