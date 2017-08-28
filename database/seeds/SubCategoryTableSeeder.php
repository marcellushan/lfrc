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
        DB::table('sub_categories')->insert([
            'id' => 16,
            'name' => 'Bonding with Child(ren)',
            'category_id' => 3,
        ]);
        DB::table('sub_categories')->insert([
            'id' => 17,
            'name' => 'Communication with Child(ren)',
            'category_id' => 3,
        ]);
        DB::table('sub_categories')->insert([
            'id' => 18,
            'name' => 'Expectations of Child(ren)',
            'category_id' => 3,
        ]);
        DB::table('sub_categories')->insert([
            'id' => 19,
            'name' => 'Mutual Support Within the Family',
            'category_id' => 3,
        ]);
        DB::table('sub_categories')->insert([
            'id' => 20,
            'name' => "Relationship Between Parents/Caregivers",
            'category_id' => 3,
        ]);
        DB::table('sub_categories')->insert([
            'id' => 21,
            'name' => 'Family Routines/Rituals',
            'category_id' => 3,
        ]);
        DB::table('sub_categories')->insert([
            'id' => 22,
            'name' => "Family Recreation and Play Activities",
            'category_id' => 3,
        ]);
        DB::table('sub_categories')->insert([
            'id' => 23,
            'name' => 'Overall',
            'category_id' => 3,
        ]);
        DB::table('sub_categories')->insert([
            'id' => 24,
            'name' => 'Absence/Presence of Domestic Violence Between Parents/Caregivers',
            'category_id' => 4,
        ]);
        DB::table('sub_categories')->insert([
            'id' => 25,
            'name' => 'Absence/Presence of Other Family Conflicts',
            'category_id' => 4,
        ]);
        DB::table('sub_categories')->insert([
            'id' => 26,
            'name' => 'Absence/Presence of Physical Abuse of Chilc(ren)',
            'category_id' => 4,
        ]);
        DB::table('sub_categories')->insert([
            'id' => 27,
            'name' => 'Absence/Presence of Emotional Abuse of Child(ren)',
            'category_id' => 4,
        ]);
        DB::table('sub_categories')->insert([
            'id' => 28,
            'name' => "Absence/Presence of Sexual Abuse of Child(ren)",
            'category_id' => 4,
        ]);
        DB::table('sub_categories')->insert([
            'id' => 29,
            'name' => 'Absence/Presence of Neglect of Child(ren)',
            'category_id' => 4,
        ]);
        DB::table('sub_categories')->insert([
            'id' => 30,
            'name' => "Absence/Presence of Access to Weapons",
            'category_id' => 4,
        ]);
        DB::table('sub_categories')->insert([
            'id' => 31,
            'name' => 'Overall',
            'category_id' => 4,
        ]);
        DB::table('sub_categories')->insert([
            'id' => 32,
            'name' => "Child(ren)'s Behavior",
            'category_id' => 5,
        ]);
        DB::table('sub_categories')->insert([
            'id' => 33,
            'name' => 'School Performance',
            'category_id' => 5,
        ]);
        DB::table('sub_categories')->insert([
            'id' => 34,
            'name' => "Child(ren)'s Relationship with Parent(s)/Caregiver(s)",
            'category_id' => 5,
        ]);
        DB::table('sub_categories')->insert([
            'id' => 35,
            'name' => "Child(ren)'s Relationship with Sibling(s)",
            'category_id' => 5,
        ]);
        DB::table('sub_categories')->insert([
            'id' => 36,
            'name' => "Child(ren)'s Relationship with Peers",
            'category_id' => 5,
        ]);
        DB::table('sub_categories')->insert([
            'id' => 37,
            'name' => "Cooperation/Motivation to Maintain the Family",
            'category_id' => 5,
        ]);
        DB::table('sub_categories')->insert([
            'id' => 38,
            'name' => 'Overall',
            'category_id' => 5,
        ]);
        DB::table('sub_categories')->insert([
            'id' => 39,
            'name' => 'Social Relationships',
            'category_id' => 6,
        ]);
        DB::table('sub_categories')->insert([
            'id' => 40,
            'name' => "Relationships with Child Care, Schools, and Extracurricular Services",
            'category_id' => 6,
        ]);
        DB::table('sub_categories')->insert([
            'id' => 41,
            'name' => "Connection to Neighborhoods, Cultural/Ethnic Community",
            'category_id' => 6,
        ]);
        DB::table('sub_categories')->insert([
            'id' => 42,
            'name' => "Connection to Spiritual/Religious Community",
            'category_id' => 6,
        ]);
        DB::table('sub_categories')->insert([
            'id' => 43,
            'name' => "Parent(s)/Caregiver(s) Initiative and Acceptance of Available Help/Support",
            'category_id' => 6,
        ]);
        DB::table('sub_categories')->insert([
            'id' => 44,
            'name' => 'Overall',
            'category_id' => 6,
        ]);
        DB::table('sub_categories')->insert([
            'id' => 45,
            'name' => 'Caregiver Employment',
            'category_id' => 7,
        ]);
        DB::table('sub_categories')->insert([
            'id' => 46,
            'name' => "Family Income",
            'category_id' => 7,
        ]);
        DB::table('sub_categories')->insert([
            'id' => 47,
            'name' => "Financial Management",
            'category_id' => 7,
        ]);
        DB::table('sub_categories')->insert([
            'id' => 48,
            'name' => "Food and Nutrition",
            'category_id' => 7,
        ]);
        DB::table('sub_categories')->insert([
            'id' => 49,
            'name' => "Transportation",
            'category_id' => 7,
        ]);
        DB::table('sub_categories')->insert([
            'id' => 50,
            'name' => 'Overall',
            'category_id' => 7,
        ]);
        DB::table('sub_categories')->insert([
            'id' => 51,
            'name' => 'Parent(s)/Caregiver(s) Physical Health',
            'category_id' => 8,
        ]);
        DB::table('sub_categories')->insert([
            'id' => 52,
            'name' => "Parent(s)/Caregiver(s) Disability",
            'category_id' => 8,
        ]);
        DB::table('sub_categories')->insert([
            'id' => 53,
            'name' => 'Parent(s)/Caregiver(s) Mental Health',
            'category_id' => 8,
        ]);
        DB::table('sub_categories')->insert([
            'id' => 54,
            'name' => "Child(ren)'s Physical Health",
            'category_id' => 8,
        ]);
        DB::table('sub_categories')->insert([
            'id' => 55,
            'name' => "Child(ren)'s Disability",
            'category_id' => 8,
        ]);
        DB::table('sub_categories')->insert([
            'id' => 56,
            'name' => "Child(ren)'s Mental Health",
            'category_id' => 8,
        ]);
        DB::table('sub_categories')->insert([
            'id' => 57,
            'name' => "Family Access to Health/Mental Health Care",
            'category_id' => 8,
        ]);
        DB::table('sub_categories')->insert([
            'id' => 58,
            'name' => 'Overall',
            'category_id' => 8,
        ]);
    }
}
