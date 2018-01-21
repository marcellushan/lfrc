<?php

use Illuminate\Database\Seeder;

class AbuseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abuses')->insert([
            'id' => 1,
            'name' => 'Physical Abuse',
            'short_name' => 'physical'
        ]);
        DB::table('abuses')->insert([
            'id' => 2,
            'name' => 'Emotional Abuse',
            'short_name' => 'emotional'

        ]);
        DB::table('abuses')->insert([
            'id' => 3,
            'name' => 'Sexual Abuse',
            'short_name' => 'sexual'

        ]);
        DB::table('abuses')->insert([
            'id' => 4,
            'name' => 'Neglect',
            'short_name' => 'neglect'

        ]);
        DB::table('abuses')->insert([
            'id' => 5,
            'name' => 'High Risk',
            'short_name' => 'high_risk'

        ]);
        DB::table('abuses')->insert([
            'id' => 6,
            'name' => 'Other',
            'short_name' => 'other'

        ]);

    }
}
