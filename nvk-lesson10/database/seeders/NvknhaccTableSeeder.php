<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class NvknhaccTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        foreach(range(1,100) as $index)
        {
            DB::table('nvknhacc')->insert([
                'nvkMaNCC'=>$faker->uuid(),
                // 'nvkMaNCC'=>$faker->word(15),
                'nvkTenNCC'=>$faker->sentence(5),
                'nvkDiachi'=>$faker->address(),
                'nvkDienthoai'=>$faker->phoneNumber(10),
                'nvkEmail'=>$faker->email(),
                'nvkStatus'=>$faker->boolean()
            ]);
        }
    }
}
