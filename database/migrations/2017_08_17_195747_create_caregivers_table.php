<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCaregiversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caregivers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->date('birth_date');
            $table->integer('gender_id');
            $table->integer('marital_status_id');
            $table->integer('race_id');
            $table->integer('education_id');
            $table->string('education_other');
            $table->integer('family_role_id');
            $table->string('family_role_other');
            $table->unsignedinteger('family_id');
            $table->timestamps();
        });

        Schema::table('caregivers', function(Blueprint $table){
            $table->foreign('family_id')
                ->references('id')->on('families')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('caregivers');
    }
}
