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
            $table->integer('income_range_id');
            $table->string('income_source_other')->nullable();
//            $table->integer('referral_id');
            $table->string('abuses_other')->nullable();
            $table->date('ina_date');
            $table->boolean('aapi_pre')->nullable();
            $table->boolean('aapi_post')->nullable();
            $table->integer('visits')->nullable();
            $table->boolean('closed')->nullable();
            $table->text('closed_notes')->nullable();
            $table->date('close_date')->nullable();
            $table->timestamps();
        });

        Schema::create('family_income_source', function (Blueprint $table) {
        $table->integer('family_id')->unsigned()->index();
        $table->integer('income_source_id')->unsigned()->index();
        $table->foreign('family_id')->references('id')->on('families')->onDelete('cascade');
        $table->timestamps();
    });

        Schema::create('abuse_family', function (Blueprint $table) {
            $table->integer('abuse_id')->unsigned()->index();
            $table->integer('family_id')->unsigned()->index();
            $table->foreign('family_id')->references('id')->on('families')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('family_referral', function (Blueprint $table) {
            $table->integer('family_id')->unsigned()->index();
            $table->integer('referral_id')->unsigned()->index();
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

        Schema::drop('family_income_source');
        Schema::drop('abuse_family');
        Schema::drop('family_referral');
        Schema::drop('close_reason_family');
        Schema::drop('families');

    }
}
