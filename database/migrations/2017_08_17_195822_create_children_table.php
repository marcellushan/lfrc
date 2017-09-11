<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChildrenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('children', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->date('birth_date');
            $table->integer('gender_id');
            $table->integer('race_id');
            $table->unsignedInteger('family_id');
            $table->timestamps();
        });

        Schema::table('children', function(Blueprint $table){
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
        Schema::drop('children');
    }
}
