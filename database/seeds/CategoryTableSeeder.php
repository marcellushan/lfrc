<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'id' => 1,
            'name' => 'Environment'
        ]);
        DB::table('categories')->insert([
            'id' => 2,
            'name' => 'Parental Capabilities'
        ]);
        DB::table('categories')->insert([
            'id' => 3,
            'name' => 'Family Interactions'
        ]);
        DB::table('categories')->insert([
            'id' => 4,
            'name' => 'Family Safety'
        ]);
        DB::table('categories')->insert([
            'id' => 5,
            'name' => 'Child Well-Being'
        ]);
        DB::table('categories')->insert([
            'id' => 6,
            'name' => 'Social/Community Life'
        ]);
        DB::table('categories')->insert([
            'id' => 7,
            'name' => 'Self-Suffiency'
        ]);
        DB::table('categories')->insert([
            'id' => 8,
            'name' => 'Family Health'
        ]);
    }
}
