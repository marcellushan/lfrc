<?php

use Illuminate\Database\Seeder;

class CloseReasonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('close_reasons')->insert([
            'id' => 1,
            'name' => 'Successful'
        ]);
        DB::table('close_reasons')->insert([
            'id' => 2,
            'name' => 'Refused Services'
        ]);
        DB::table('close_reasons')->insert([
            'id' => 3,
            'name' => 'Family relocated'
        ]);
        DB::table('close_reasons')->insert([
            'id' => 4,
            'name' => 'Unable to contact'
        ]);
        DB::table('close_reasons')->insert([
            'id' => 5,
            'name' => 'Inappropriate case'
        ]);
    }
}
