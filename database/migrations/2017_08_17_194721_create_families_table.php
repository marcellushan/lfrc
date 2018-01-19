<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFamiliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('families', function (Blueprint $table) {
            $table->increments('id');
            $table->string('case_id');
            $table->string('name');
            $table->string('street');
            $table->string('city');
            $table->string('state');
            $table->string('zip');
            $table->string('email');
            $table->string('phone');
            $table->integer('parent_aide_id');
            $table->integer('income_range_id');
            $table->boolean('full_time')->nullable();
            $table->boolean('part_time')->nullable();
            $table->boolean('ss')->nullable();
            $table->boolean('ssi')->nullable();
            $table->boolean('child_support')->nullable();
            $table->boolean('food_stamps')->nullable();
            $table->boolean('tanf')->nullable();
            $table->boolean('family_members')->nullable();
            $table->boolean('retirement')->nullable();
            $table->boolean('income_source_other')->nullable();
            $table->string('income_source_other_text')->nullable();
            $table->boolean('physical')->nullable();
            $table->boolean('emotional')->nullable();
            $table->boolean('sexual')->nullable();
            $table->boolean('neglect')->nullable();
            $table->boolean('high_risk')->nullable();
            $table->boolean('abuse_other')->nullable();
//            $table->integer('referral_id');
            $table->string('abuse_other_text')->nullable();
            $table->date('ina_date');
            $table->boolean('aapi_pre')->nullable();
            $table->boolean('aapi_post')->nullable();
            $table->integer('visits')->nullable();
            $table->boolean('closed')->nullable();
            $table->boolean('close_successful')->nullable();
            $table->boolean('close_refused')->nullable();
            $table->boolean('close_relocated')->nullable();
            $table->boolean('close_no_contact')->nullable();
            $table->boolean('close_inappropriate')->nullable();
            $table->boolean('close_lack_of_participation')->nullable();
            $table->boolean('close_other')->nullable();
            $table->text('close_notes')->nullable();
            $table->date('close_date')->nullable();
            $table->timestamps();
        });


        Schema::create('family_referral', function (Blueprint $table) {
            $table->integer('family_id')->unsigned()->index();
            $table->integer('referral_id')->unsigned()->index();
            $table->date('referral_date');
            $table->foreign('family_id')->references('id')->on('families')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('close_reason_family', function (Blueprint $table) {
            $table->integer('family_id')->unsigned()->index();
            $table->integer('close_reason_id')->unsigned()->index();
            $table->foreign('family_id')->references('id')->on('families')->onDelete('cascade');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

//        Schema::drop('family_income_source');
//        Schema::drop('abuse_family');
        Schema::drop('family_referral');
        Schema::drop('close_reason_family');
        Schema::drop('families');

    }
}
