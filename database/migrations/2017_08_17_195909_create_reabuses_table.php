<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReabusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reabuses', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
//            $table->integer('type');
            $table->integer('outcome_id');
            $table->text('notes');
            $table->unsignedInteger('family_id');
            $table->integer('abuse_id');
            $table->timestamps();
        });

        Schema::table('reabuses', function(Blueprint $table){
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
        Schema::drop('reabuses');
    }
}
