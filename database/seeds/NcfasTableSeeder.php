<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class NcfasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $k = 0;
        for ($x = 1; $x <= 8; $x++) {
            $id = DB::table('ncfas_statuses')->insertGetId([
                'category_id' => $x ,
                'phase_id' => 1,
                'family_id' => 1,
                'comments' => $faker->paragraph(),
//                'state' => $faker->state,
//                'zip' => rand(10000, 99999),
//                'income_range_id' => rand(1, 6),
//                    'referral_id' => rand(1,9),
//                    'ina_date' => $faker->date('Y-m-d')->between(2017-01-01, 2017-12-31),
//                'ina_date' => Carbon::createFromTimestamp(rand($endDate->timestamp, $startDate->timestamp))->format('Y-m-d'),
//
                'created_at' => $faker->date('Y-m-d')

            ]);

            for ($y = 1; $y < 8; $y++) {
                $ncfas_id = DB::table('ncfas')->insertGetId([
                    'sub_category_id' => $y + $k,
                    'category_id' => $x,
                    'score_id' => $y,
                    'phase_id' => 1,
                    'family_id' => 1,
                ]);

            }
            $k = $k + 7;

        }

        $k = 0;
        for ($x = 1; $x <= 8; $x++) {
            $id = DB::table('ncfas_statuses')->insertGetId([
                'category_id' => $x ,
                'phase_id' => 2,
                'family_id' => 1,
                'comments' => $faker->paragraph(),
//                'state' => $faker->state,
//                'zip' => rand(10000, 99999),
//                'income_range_id' => rand(1, 6),
//                    'referral_id' => rand(1,9),
//                    'ina_date' => $faker->date('Y-m-d')->between(2017-01-01, 2017-12-31),
//                'ina_date' => Carbon::createFromTimestamp(rand($endDate->timestamp, $startDate->timestamp))->format('Y-m-d'),
//
                'created_at' => $faker->date('Y-m-d')

            ]);

            for ($y = 1; $y < 8; $y++) {
                $ncfas_id = DB::table('ncfas')->insertGetId([
                    'sub_category_id' => $y + $k,
                    'category_id' => $x,
                    'score_id' => $y,
                    'phase_id' => 2,
                    'family_id' => 1,
                ]);

            }
            $k = $k + 7;

        }

        $k = 0;
        for ($x = 1; $x <= 8; $x++) {
            $id = DB::table('ncfas_statuses')->insertGetId([
                'category_id' => $x ,
                'phase_id' => 3,
                'family_id' => 1,
                'comments' => $faker->paragraph(),
//                'state' => $faker->state,
//                'zip' => rand(10000, 99999),
//                'income_range_id' => rand(1, 6),
//                    'referral_id' => rand(1,9),
//                    'ina_date' => $faker->date('Y-m-d')->between(2017-01-01, 2017-12-31),
//                'ina_date' => Carbon::createFromTimestamp(rand($endDate->timestamp, $startDate->timestamp))->format('Y-m-d'),
//
                'created_at' => $faker->date('Y-m-d')

            ]);

            for ($y = 1; $y < 8; $y++) {
                $ncfas_id = DB::table('ncfas')->insertGetId([
                    'sub_category_id' => $y + $k,
                    'category_id' => $x,
                    'score_id' => $y,
                    'phase_id' => 3,
                    'family_id' => 1,
                ]);

            }
            $k = $k + 7;

        }
    }
}
