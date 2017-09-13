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
            for ($x = 0; $x <= 500; $x++) {
                $id = DB::table('families')->insertGetId([
//                   'first_name' => str_random(10),
                    'case_id' => rand(10000,99999),
                    'name' => $faker->lastName,
                    'street' => $faker->streetAddress,
                    'city' => $faker->city,
                    'state' => $faker->state,
                    'zip' => rand(10000,99999),
                    'income_range_id' => rand(1,6),
//                    'referral_id' => rand(1,9),
                    'ina_date' => $faker->date('Y-m-d'),
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
                    'name' => $faker->firstName . ' ' . $faker->lastName,
                    'birth_date' => $faker->date,
                    'gender_id' => rand(1,2),
                    'race_id' => rand(1,5),
                    'family_id' => $id,
                    'created_at' => $faker->date('Y-m-d')
                ]);
                DB::table('children')->insert([
                    'name' => $faker->name,
                    'birth_date' => $faker->date,
                    'gender_id' => rand(1,2),
                    'race_id' => rand(1,5),
                    'family_id' => $id,
                    'created_at' => $faker->date('Y-m-d')
                ]);
                DB::table('caregivers')->insert([
                    'name' => $faker->firstName . ' ' . $faker->lastName,
                    'birth_date' => $faker->date,
                    'gender_id' => rand(1,2),
                    'marital_status_id' => rand(1,5),
                    'race_id' => rand(1,5),
                    'education_id' => rand(1,5),
                    'family_role_id' => rand(1,5),
                    'family_id' => $id,
                    'created_at' => $faker->date('Y-m-d')
                ]);
                DB::table('caregivers')->insert([
                    'name' => $faker->name,
                    'birth_date' => $faker->date,
                    'gender_id' => rand(1,2),
                    'marital_status_id' => rand(1,5),
                    'race_id' => rand(1,5),
                    'education_id' => rand(1,5),
                    'family_role_id' => rand(1,5),
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
