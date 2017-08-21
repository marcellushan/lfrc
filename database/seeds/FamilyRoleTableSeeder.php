<?php

use Illuminate\Database\Seeder;

class FamilyRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('family_roles')->insert([
            'id' => 1,
            'name' => 'Biological Parent'
        ]);
        DB::table('family_roles')->insert([
            'id' => 2,
            'name' => 'Grantparent'
        ]);
        DB::table('family_roles')->insert([
            'id' => 3,
            'name' => 'Step-Parent'
        ]);
        DB::table('family_roles')->insert([
            'id' => 4,
            'name' => 'Live-in'
        ]);
        DB::table('family_roles')->insert([
            'id' => 5,
            'name' => 'Foster Parent'
        ]);
        DB::table('family_roles')->insert([
            'id' => 6,
            'name' => 'Adoptive Parent'
        ]);
        DB::table('family_roles')->insert([
            'id' => 7,
            'name' => 'Other'
        ]);
    }
}
