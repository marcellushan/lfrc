<?php

use Illuminate\Database\Seeder;

class SubCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sub_categories')->insert([
            'id' => 1,
            'name' => 'Housing Security',
            'category_id' => 1,
        ]);
        DB::table('sub_categories')->insert([
            'id' => 2,
            'name' => 'Safety in the Community',
            'category_id' => 1,
        ]);
        DB::table('sub_categories')->insert([
            'id' => 3,
            'name' => 'Environmental Risks',
            'category_id' => 1,
        ]);
        DB::table('sub_categories')->insert([
            'id' => 4,
            'name' => 'Habitability of Housing',
            'category_id' => 1,
        ]);
        DB::table('sub_categories')->insert([
            'id' => 5,
            'name' => 'Personal Hygiene',
            'category_id' => 1,
        ]);
        DB::table('sub_categories')->insert([
            'id' => 6,
            'name' => 'Learning Environment',
            'category_id' => 1,
        ]);
        DB::table('sub_categories')->insert([
            'id' => 7,
            'name' => 'Overall',
            'category_id' => 1,
        ]);
        DB::table('sub_categories')->insert([
            'id' => 8,
            'name' => 'Supervision of Children',
            'category_id' => 2,
        ]);
        DB::table('sub_categories')->insert([
            'id' => 9,
            'name' => 'Disciplinary Practices',
            'category_id' => 2,
        ]);
        DB::table('sub_categories')->insert([
            'id' => 10,
            'name' => 'Provision of Development/Enrichment Opportunities',
            'category_id' => 2,
        ]);
        DB::table('sub_categories')->insert([
            'id' => 11,
            'name' => 'Use of Drugs/Alcohol Interferes with Parenting',
            'category_id' => 2,
        ]);
        DB::table('sub_categories')->insert([
            'id' => 12,
            'name' => "Promotes Child(ren)'s Education",
            'category_id' => 2,
        ]);
        DB::table('sub_categories')->insert([
            'id' => 13,
            'name' => 'Controls Access to Media/Reading Material',
            'category_id' => 2,
        ]);
        DB::table('sub_categories')->insert([
            'id' => 14,
            'name' => "Parent(s)/Caregiver(s)'s Literacy",
            'category_id' => 2,
        ]);
        DB::table('sub_categories')->insert([
            'id' => 15,
            'name' => 'Overall',
            'category_id' => 2,
        ]);
    }
}
