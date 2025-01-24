<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class CourtSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        for($i=1; $i <=5; $i++){
            DB::table('courts')->insert([
                'court__type_id' => $faker->numberBetween(1,5),
                'name' => $faker->name,
                'price' => $faker->numberBetween(50000, 100000)
                
            ]);
        }
    }
}
