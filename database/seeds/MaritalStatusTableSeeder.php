<?php

use Illuminate\Database\Seeder;

class MaritalStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('marital_statuses')->insert([
            'id' => 1,
            'name' => 'Single'
        ]);
        DB::table('marital_statuses')->insert([
            'id' => 2,
            'name' => 'Married'
        ]);
        DB::table('marital_statuses')->insert([
            'id' => 3,
            'name' => 'Divorced'
        ]);
        DB::table('marital_statuses')->insert([
            'id' => 4,
            'name' => 'Separated'
        ]);
        DB::table('marital_statuses')->insert([
            'id' => 5,
            'name' => 'Widow'
        ]);
    }
}
