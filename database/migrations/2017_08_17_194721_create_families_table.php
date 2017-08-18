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
            $table->integer('income_range');
            $table->integer('referral');
            $table->date('ina_date');
            $table->date('close_date')->nullable();
            $table->timestamps();
        });

        Schema::create('family_income_source', function (Blueprint $table) {
        $table->integer('family_id')->unsigned()->index();
//            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        $table->integer('income_source_id')->unsigned()->index();
//            $table->foreign('team_id')->references('id')->on('teams')->onDelete('cascade');
        $table->timestamps();
    });

        Schema::create('abuse_family', function (Blueprint $table) {
            $table->integer('abuse_id')->unsigned()->index();
//            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('family_id')->unsigned()->index();
//            $table->foreign('team_id')->references('id')->on('teams')->onDelete('cascade');
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
        Schema::drop('families');
        Schema::drop('family_income_source');
        Schema::drop('abuse_family');
    }
}
