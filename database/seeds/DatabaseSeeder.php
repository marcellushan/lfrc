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
         $this->call(ReferralTableSeeder::class);
        $this->call(AbuseTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(SubCategoryTableSeeder::class);
        $this->call(ScoreTableSeeder::class);




    }
}
