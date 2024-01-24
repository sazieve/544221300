<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class user extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('user')->insert([
            'Username' => 'mangosmoothies',
            'UserId' => '072901',
            'Email' => 'sazierai@gmail.com',
            'Password' => '2917',
        ]);
    }
}
