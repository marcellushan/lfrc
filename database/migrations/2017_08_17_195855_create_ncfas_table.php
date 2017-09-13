<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNcfasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ncfas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sub_category_id');
            $table->integer('category_id');
            $table->integer('phase_id');
            $table->integer('score_id');
            $table->unsignedInteger('family_id');
            $table->timestamps();
        });

        Schema::table('ncfas', function(Blueprint $table){
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
        Schema::drop('ncfas');
    }
}
