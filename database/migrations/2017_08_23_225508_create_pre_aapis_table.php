<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreAapisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pre_aapis', function (Blueprint $table) {
            $table->increments('id');
//            $table->integer('cycle_id');
            $table->integer('expectations');
            $table->integer('empathy');
            $table->integer('corporal');
            $table->integer('roles');
            $table->integer('power');
            $table->unsignedInteger('family_id');
            $table->timestamps();
        });

        Schema::table('pre_aapis', function(Blueprint $table){
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
        Schema::drop('pre_aapis');
    }
}
