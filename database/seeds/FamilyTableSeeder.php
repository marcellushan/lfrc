<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class FamilyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            $faker = Faker::create();
            for ($x = 0; $x <= 10; $x++) {
                $id = DB::table('families')->insertGetId([
//                   'first_name' => str_random(10),
                    'case_id' => rand(10000,99999),
                    'name' => $faker->lastName,
                    'street' => $faker->streetAddress,
                    'city' => $faker->city,
                    'state' => $faker->state,
                    'zip' => rand(10000,99999),
                    'income_range' => rand(1,7),
                    'referral' => rand(1,7),
                    'created_at' => $faker->date('Y-m-d')
                ]);
                DB::table('family_income_source')->insert([
                    'income_source_id' => rand(1,10),
                    'family_id' => $id
                ]);
                DB::table('family_income_source')->insert([
                    'income_source_id' => rand(1,10),
                    'family_id' => $id
                ]);

            }
        }
    }
}
