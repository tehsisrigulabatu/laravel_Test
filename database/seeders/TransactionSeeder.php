<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        for($i=1; $i <=5; $i++){
            DB::table('transactions')->insert([
                'user_id' => $faker->numberBetween(1,5),
                'court_id' => $faker->numberBetween(1,5),
                'name' => $faker->name,
                'address' => $faker->address,
                'phone' => $faker->phoneNumber(),
                'date' => $faker->date,
                'starttime' => $faker->time,
                'endtime' => $faker->time,
                'costume' => $faker->boolean(),
                'shoes' => $faker->boolean(),
                'total' => $faker->randomNumber(6, true),
                'grandtotal' => $faker->randomNumber(6, true),
                'paytotal' => $faker->randomNumber(6, true) 
                
            ]);
        }
    }
}
