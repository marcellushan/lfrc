<?php

use Illuminate\Database\Seeder;

class RaceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('races')->insert([
            'id' => 1,
            'name' => 'White'
        ]);
        DB::table('races')->insert([
            'id' => 2,
            'name' => 'Black'
        ]);
        DB::table('races')->insert([
            'id' => 3,
            'name' => 'Hispanic'
        ]);
        DB::table('races')->insert([
            'id' => 4,
            'name' => 'Native American'
        ]);
        DB::table('races')->insert([
            'id' => 5,
            'name' => 'Other'
        ]);
    }
}
