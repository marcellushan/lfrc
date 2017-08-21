<?php

use Illuminate\Database\Seeder;

class IncomeRangeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('income_ranges')->insert([
            'id' => 1,
            'name' => 'Less than $10,000'
        ]);
        DB::table('income_ranges')->insert([
            'id' => 2,
            'name' => '$10,000-$19,999'
        ]);
            DB::table('income_ranges')->insert([
            'id' => 3,
            'name' => '$20,000-$29,999'
        ]);
        DB::table('income_ranges')->insert([
            'id' => 4,
            'name' => '$30,000-$39,999'
        ]);
        DB::table('income_ranges')->insert([
            'id' => 5,
            'name' => '$40,000-$49,999'
        ]);
        DB::table('income_ranges')->insert([
            'id' => 6,
            'name' => '$50,000+'
        ]);
    }
}
