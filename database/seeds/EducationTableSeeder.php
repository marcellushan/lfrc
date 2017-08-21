<?php

use Illuminate\Database\Seeder;

class EducationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('education')->insert([
            'id' => 1,
            'name' => 'Less than High School'
        ]);
        DB::table('education')->insert([
            'id' => 2,
            'name' => 'High School Graduate'
        ]);
        DB::table('education')->insert([
            'id' => 3,
            'name' => 'GED'
        ]);
        DB::table('education')->insert([
            'id' => 4,
            'name' => 'Vocational'
        ]);
        DB::table('education')->insert([
            'id' => 5,
            'name' => 'Some College'
        ]);
        DB::table('education')->insert([
            'id' => 6,
            'name' => 'College Graduate'
        ]);
        DB::table('education')->insert([
            'id' => 7,
            'name' => 'Other'
        ]);
    }
}
