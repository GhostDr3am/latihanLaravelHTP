<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class Staffseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        for ($i = 0; $i <10; $i++) {
            DB::table('staff')->insert([
                'id' => rand(),
                // 'nip' => uniqid('s'.rand(10,99)),
                'nip' => ('n'),
                'nama' => ('name_'),
                'gender' => ('L'),
                'alamat' => ('alamat_'),
                'email' => uniqid().'@gmail.com',
                'foto' => ('foto_'),
                'created_at' => new \Datetime,
                'updated_at' => null,
            ]);
        }
    }
}
