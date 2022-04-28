<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->insert([
            'user_id' => "renaldis",
            'nama' => "Renaldi Soeryadi",
            'email' => "renaldi.soeryadi@si.ukdw.ac.id",
            'no_telp' => "085700088831",
            'gender' => "renaldis",
            'status' => "renaldis",
            'alamat' => "Klitren 88",
            'password' => bcrypt("renaldis"),

        ]);
    }
}
