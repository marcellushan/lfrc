<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;

class ParentAideTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            {
                $faker = Faker::create();
                for ($x = 0; $x <= 10; $x++) {
                    $startDate = Carbon::create(2017, 1, 1);
                    $endDate = Carbon::now();
                    $id = DB::table('parent_aides')->insertGetId([
                        'last_name' => $faker->lastName,
                        'first_name' => $faker->firstName,
                        'created_at' => Carbon::createFromTimestamp(rand($endDate->timestamp, $startDate->timestamp))->format('Y-m-d')
                    ]);
                }
            }
        }
    }
}
