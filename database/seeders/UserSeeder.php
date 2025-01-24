<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('users')->insert([
        //     'name' => str::random(10),
        //     'email' => str::random(10).'@test.com',
        //     'address' => str::random(10),
        //     'password' => Hash::make('admin12345')
        // ]);

        //batch
        // for($i=1; $i <=10; $i++){
        //     DB::table('users')->insert([
        //         'name' => str::random(10),
        //         'email' => str::random(10).'@test.com',
        //         'address' => str::random(10),
        //         'password' => Hash::make('admin12345')
        //     ]);


        // }

        //batch faker

        //set locale
        $faker = Faker::create('id_ID');
        for($i=1; $i <=5; $i++){
            DB::table('users')->insert([
                'name' => $faker->name,
                'email' => $faker->email,
                'address' => $faker->address,
                'password' => Hash::make('admin12345')
            ]);
        }
    }
}