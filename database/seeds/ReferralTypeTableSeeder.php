<?php

use Illuminate\Database\Seeder;

class ReferralTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('referral_types')->insert([
            'id' => 1,
            'name' => 'DFCS'
        ]);
        DB::table('referral_types')->insert([
            'id' => 2,
            'name' => 'Court'
        ]);
        DB::table('referral_types')->insert([
            'id' => 3,
            'name' => 'Self'
        ]);
        DB::table('referral_types')->insert([
            'id' => 4,
            'name' => 'Mental Health Agency'
        ]);
        DB::table('referral_types')->insert([
            'id' => 5,
            'name' => 'Mental Health Private'
        ]);
        DB::table('referral_types')->insert([
            'id' => 6,
            'name' => 'Family'
        ]);
        DB::table('referral_types')->insert([
            'id' => 7,
            'name' => 'School'
        ]);
        DB::table('referral_types')->insert([
            'id' => 8,
            'name' => 'Other Human Services Provider'
        ]);
        DB::table('referral_types')->insert([
            'id' => 9,
            'name' => 'Other'
        ]);
    }

}
