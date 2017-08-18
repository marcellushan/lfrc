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
            'name' => 'Physical Abuse'
        ]);
        DB::table('abuses')->insert([
            'id' => 2,
            'name' => 'Emotional Abuse'
        ]);
        DB::table('abuses')->insert([
            'id' => 3,
            'name' => 'Sexual Abuse'
        ]);
        DB::table('abuses')->insert([
            'id' => 4,
            'name' => 'Neglect'
        ]);
        DB::table('abuses')->insert([
            'id' => 5,
            'name' => 'High Risk'
        ]);
        DB::table('abuses')->insert([
            'id' => 6,
            'name' => 'Other'
        ]);

    }
}
