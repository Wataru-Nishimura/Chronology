<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('galleries')->insert([
            'name' => 'Auth',
            'email' => 'nw.job.hunting@gmail.com',
            'password' => Hash::make('kvz9fDQ8'),
            'image_path' => null,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
