<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostAapisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_aapis', function (Blueprint $table) {
            $table->increments('id');
//            $table->integer('cycle_id');
            $table->integer('expectations');
            $table->integer('empathy');
            $table->integer('corporal');
            $table->integer('roles');
            $table->integer('power');
            $table->integer('family_id');
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
        Schema::drop('post_aapis');
    }
}
