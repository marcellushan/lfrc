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
                    'state' => $faker->stateAbbr,
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
                DB::table('children')->insert([
                    'name' => $faker->name,
                    'birth_date' => $faker->date,
                    'gender' => rand(1,2),
                    'race' => rand(1,5),
                    'family_id' => $id,
                    'created_at' => $faker->date('Y-m-d')
                ]);
                DB::table('children')->insert([
                    'name' => $faker->name,
                    'birth_date' => $faker->date,
                    'gender' => rand(1,2),
                    'race' => rand(1,5),
                    'family_id' => $id,
                    'created_at' => $faker->date('Y-m-d')
                ]);
                DB::table('caregivers')->insert([
                    'name' => $faker->name,
                    'birth_date' => $faker->date,
                    'gender' => rand(1,2),
                    'marital_status' => rand(1,5),
                    'race' => rand(1,5),
                    'education' => rand(1,5),
                    'family_role' => rand(1,5),
                    'family_id' => $id,
                    'created_at' => $faker->date('Y-m-d')
                ]);
                DB::table('caregivers')->insert([
                    'name' => $faker->name,
                    'birth_date' => $faker->date,
                    'gender' => rand(1,2),
                    'marital_status' => rand(1,5),
                    'race' => rand(1,5),
                    'education' => rand(1,5),
                    'family_role' => rand(1,5),
                    'family_id' => $id,
                    'created_at' => $faker->date('Y-m-d')
                ]);
                DB::table('abuse_family')->insert([
                    'abuse_id' => rand(1,6),
                    'family_id' => $id
                ]);

                DB::table('abuse_family')->insert([
                    'abuse_id' => rand(1,6),
                    'family_id' => $id
                ]);

            }
        }
    }
}
