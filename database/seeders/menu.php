<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class menu extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('menu')->insert([
            'Nama_Menu' => 'Watermelon_Sugar',
            'Menu_Id' => '1999',
            'Gambar_Menu' => 'sushi',
            'Harga' => '25000',
            'Deskripsi' => 'Nasi yang dibalut rumput laut dengan isi crab stick dan saos',
        ]);
    }
}
