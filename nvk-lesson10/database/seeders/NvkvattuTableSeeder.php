<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NvkvattuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('nvkvattu')->insert([
            'nvkMavt'=>'DD01',
            'nvkTenvt'=>'Đầu DVD Hitachi 1 cửa',
            'nvkDonvt'=>'Bộ',
            'nvkPhantram'=>40,
        ]);
        DB::table('nvkvattu')->insert([
            'nvkMavt'=>'DD02',
            'nvkTenvt'=>'Đầu DVD Hitachi 2 cửa',
            'nvkDonvt'=>'Bộ',
            'nvkPhantram'=>50,
        ]);
    }
}
