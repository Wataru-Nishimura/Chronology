<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('members')->truncate();
        
        DB::table('members')->insert([
            'name' => 'ABC',
            'email' => 'member001',
            'password' => 'pass0001',
        ]);
        DB::table('members')->insert([
            'name' => 'DEF',
            'email' => 'member002',
            'password' => 'pass0002',
        ]);
    }
}
