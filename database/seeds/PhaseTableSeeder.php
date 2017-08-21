<?php

use Illuminate\Database\Seeder;

class PhaseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('phases')->insert([
            'id' => 1,
            'name' => 'Intake'
        ]);
        DB::table('phases')->insert([
            'id' => 2,
            'name' => 'Interim'
        ]);
        DB::table('phases')->insert([
            'id' => 3,
            'name' => 'Closure'
        ]);
    }
}
