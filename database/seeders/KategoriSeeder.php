<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kategoribarang')->insert([
            'nama_kategori' => "Laptop",
        ]);

        DB::table('kategoribarang')->insert([
            'nama_kategori' => "Tripod",
        ]);

        DB::table('kategoribarang')->insert([
            'nama_kategori' => "Webcam",
        ]);

        DB::table('kategoribarang')->insert([
            'nama_kategori' => "Modem",
        ]);

        DB::table('kategoribarang')->insert([
            'nama_kategori' => "Headset",
        ]);

        DB::table('kategoribarang')->insert([
            'nama_kategori' => "Speaker",
        ]);

    }
}
