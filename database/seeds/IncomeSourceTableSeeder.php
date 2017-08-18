<?php

use Illuminate\Database\Seeder;

class IncomeSourceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            DB::table('income_sources')->insert([
                'id' => 1,
                'name' => 'Full-time Employment'
            ]);
            DB::table('income_sources')->insert([
                'id' => 2,
                'name' => 'Part-time Employment'
            ]);
            DB::table('income_sources')->insert([
                'id' => 3,
                'name' => 'SS'
            ]);
            DB::table('income_sources')->insert([
                'id' => 4,
                'name' => 'SSI'
            ]);
            DB::table('income_sources')->insert([
                'id' => 5,
                'name' => 'Child Support'
            ]);
            DB::table('income_sources')->insert([
                'id' => 6,
                'name' => 'Food Stamps'
            ]);
            DB::table('income_sources')->insert([
                'id' => 7,
                'name' => 'TANF'
            ]);
            DB::table('income_sources')->insert([
                'id' => 8,
                'name' => 'Family Members'
            ]);
            DB::table('income_sources')->insert([
                'id' => 9,
                'name' => 'Retirement/Pension'
            ]);
            DB::table('income_sources')->insert([
                'id' => 10,
                'name' => 'Other'
            ]);

        }
    }
}
