<?php

use Illuminate\Database\Seeder;

class ReferralTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('referrals')->insert([
            'id' => 1,
            'name' => 'DFCS'
        ]);
        DB::table('referrals')->insert([
            'id' => 2,
            'name' => 'Court'
        ]);
        DB::table('referrals')->insert([
            'id' => 3,
            'name' => 'Self'
        ]);
        DB::table('referrals')->insert([
            'id' => 4,
            'name' => 'Mental Health Agency'
        ]);
        DB::table('referrals')->insert([
            'id' => 5,
            'name' => 'Mental Health Private'
        ]);
        DB::table('referrals')->insert([
            'id' => 6,
            'name' => 'Family'
        ]);
        DB::table('referrals')->insert([
            'id' => 7,
            'name' => 'School'
        ]);
        DB::table('referrals')->insert([
            'id' => 8,
            'name' => 'Other Human Services Provider'
        ]);
        DB::table('referrals')->insert([
            'id' => 9,
            'name' => 'Other'
        ]);
    }
}
