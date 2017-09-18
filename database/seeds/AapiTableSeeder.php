<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class AapiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $id = DB::table('pre_aapis')->insertGetId([
            'expectations' => rand(1,10),
            'empathy' => rand(1,10),
            'corporal' => rand(1,10),
            'roles' => rand(1,10),
            'power' => rand(1,10),
            'family_id' => 1,
        ]);

        $id = DB::table('post_aapis')->insertGetId([
            'expectations' => rand(1,10),
            'empathy' => rand(1,10),
            'corporal' => rand(1,10),
            'roles' => rand(1,10),
            'power' => rand(1,10),
            'family_id' => 1,
        ]);
    }
}
