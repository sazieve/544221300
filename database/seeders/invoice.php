<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class invoice extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('invoice')->insert([
            'Invoice' => '001',
            'Tanggal' => '2024-01-24',
            'jumlah' => '1',
        ]);
    }
}
