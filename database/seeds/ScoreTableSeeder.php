<?php

use Illuminate\Database\Seeder;

class ScoreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('scores')->insert([
            'id' => 1,
            'name' => 'Not Applicable',
            'score_value' => 0
        ]);
        DB::table('scores')->insert([
            'id' => 2,
            'name' => 'Clear Strength',
            'score_value' => 2
        ]);
        DB::table('scores')->insert([
            'id' => 3,
            'name' => 'Mild Strength',
            'score_value' => 1
        ]);
        DB::table('scores')->insert([
            'id' => 4,
            'name' => 'Baseline/Adequate',
            'score_value' => 0
        ]);
        DB::table('scores')->insert([
            'id' => 5,
            'name' => 'Mild Problem',
            'score_value' => -1
        ]);
        DB::table('scores')->insert([
            'id' => 6,
            'name' => 'Moderate Problem',
            'score_value' => -2
        ]);
        DB::table('scores')->insert([
            'id' => 7,
            'name' => 'Serious Problem',
            'score_value' => -3
        ]);
        DB::table('scores')->insert([
            'id' => 8,
            'name' => 'Unknown',
            'score_value' => 0
        ]);

    }
}
