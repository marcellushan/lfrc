<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(IncomeSourceTableSeeder::class);
         $this->call(FamilyTableSeeder::class);
         $this->call(ReferralTypeTableSeeder::class);
        $this->call(AbuseTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(SubCategoryTableSeeder::class);
        $this->call(ScoreTableSeeder::class);
        $this->call(IncomeRangeTableSeeder::class);
        $this->call(RaceTableSeeder::class);
        $this->call(GenderTableSeeder::class);
        $this->call(EducationTableSeeder::class);
        $this->call(MaritalStatusTableSeeder::class);
        $this->call(FamilyRoleTableSeeder::class);
        $this->call(PhaseTableSeeder::class);
        $this->call(CloseReasonTableSeeder::class);
        $this->call(ParentAideTableSeeder::class);














    }
}
