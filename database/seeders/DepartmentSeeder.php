<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_department')->insert([
            'nama_department' => "Fakultas Teknologi Informatika",
        ]);

        DB::table('user_department')->insert([
            'nama_department' => "Fakultas Bioteknologi",
        ]);

        DB::table('user_department')->insert([
            'nama_department' => "Fakultas Bisnis",
        ]);

        DB::table('user_department')->insert([
            'nama_department' => "Fakultas Teologi",
        ]);

        DB::table('user_department')->insert([
            'nama_department' => "Administrasi Peminjaman"
        ]);




    }
}
