<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;


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
            for ($x = 0; $x <= 100; $x++) {
                $startDate = Carbon::create(2017, 1, 1);
                $endDate   = Carbon::now();
                $childstartDate = Carbon::create(2000, 1, 1);
//                $createStartDate = Carbon::create(2000, 1, 1);
//                $childendDate   = Carbon::now();
                $childendDate   = Carbon::now();
                $caregiverstartDate = Carbon::create(1940, 1, 1);
                $caregiverendDate   = Carbon::create(2001,1,1);
                $id = DB::table('families')->insertGetId([
//                   'first_name' => str_random(10),
                    'case_id' => rand(10000,99999),
                    'name' => $faker->lastName,
                    'street' => $faker->streetAddress,
                    'city' => $faker->city,
                    'state' => $faker->state,
                    'zip' => rand(10000,99999),
                    'email' => $faker->email,
                    'phone' =>rand(2000000000,9999999999),
                    'parent_aide_id' => rand(1,10),
                    'income_range_id' => rand(1,6),
                    'full_time' => 1,
                    'income_source_other' => 1,
                    'income_source_other_text' => $faker->word,
                    'sexual' => 1,
                    'abuse_other' => 1,
                    'abuse_other_text' => $faker->word,
                    'ina_date' => Carbon::createFromTimestamp(rand($endDate->timestamp, $startDate->timestamp))->format('Y-m-d'),
                    'created_at' => Carbon::createFromTimestamp(rand($endDate->timestamp, $startDate->timestamp))->format('Y-m-d')
                ]);
//                DB::table('family_income_source')->insert([
//                    'income_source_id' => rand(1,10),
//                    'family_id' => $id
//                ]);
//                DB::table('family_income_source')->insert([
//                    'income_source_id' => rand(1,10),
//                    'family_id' => $id
//                ]);
                DB::table('children')->insert([
                    'name' => $faker->firstName . ' ' . $faker->lastName,
                    'birth_date' => Carbon::createFromTimestamp(rand($childendDate->timestamp, $childstartDate->timestamp))->format('Y-m-d'),
                    'gender_id' => rand(1,2),
                    'race_id' => rand(1,5),
                    'family_id' => $id,
                    'created_at' => Carbon::createFromTimestamp(rand($endDate->timestamp, $startDate->timestamp))->format('Y-m-d')
                ]);
                DB::table('children')->insert([
                    'name' => $faker->name,
                    'birth_date' => Carbon::createFromTimestamp(rand($childendDate->timestamp, $childstartDate->timestamp))->format('Y-m-d'),
                    'gender_id' => rand(1,2),
                    'race_id' => rand(1,5),
                    'family_id' => $id,
                    'created_at' => Carbon::createFromTimestamp(rand($endDate->timestamp, $startDate->timestamp))->format('Y-m-d')
                ]);
                DB::table('caregivers')->insert([
                    'name' => $faker->firstName . ' ' . $faker->lastName,
                    'birth_date' => Carbon::createFromTimestamp(rand($caregiverendDate->timestamp, $caregiverstartDate->timestamp))->format('Y-m-d'),
                    'gender_id' => rand(1,2),
                    'marital_status_id' => rand(1,5),
                    'race_id' => rand(1,5),
                    'education_id' => rand(1,5),
                    'family_role_id' => rand(1,5),
                    'family_id' => $id,
                    'created_at' => Carbon::createFromTimestamp(rand($endDate->timestamp, $startDate->timestamp))->format('Y-m-d')
                ]);
                DB::table('caregivers')->insert([
                    'name' => $faker->name,
                    'birth_date' => Carbon::createFromTimestamp(rand($caregiverendDate->timestamp, $caregiverstartDate->timestamp))->format('Y-m-d'),
                    'gender_id' => rand(1,2),
                    'marital_status_id' => rand(1,5),
                    'race_id' => rand(1,5),
                    'education_id' => rand(1,5),
                    'family_role_id' => rand(1,5),
                    'family_id' => $id,
                    'created_at' => Carbon::createFromTimestamp(rand($endDate->timestamp, $startDate->timestamp))->format('Y-m-d')
                ]);
                DB::table('referrals')->insert([
                    'referral_date' => Carbon::createFromTimestamp(rand($caregiverendDate->timestamp, $caregiverstartDate->timestamp))->format('Y-m-d'),
                    'referral_type_id' => rand(1,9),
                    'family_id' => $id,
                    'created_at' => Carbon::createFromTimestamp(rand($endDate->timestamp, $startDate->timestamp))->format('Y-m-d')
                ]);
//                DB::table('abuse_family')->insert([
//                    'abuse_id' => rand(1,6),
//                    'family_id' => $id
//                ]);
//
//                DB::table('abuse_family')->insert([
//                    'abuse_id' => rand(1,6),
//                    'family_id' => $id
//                ]);

            }
        }
    }
}
