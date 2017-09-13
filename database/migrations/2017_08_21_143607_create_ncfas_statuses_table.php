<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNcfasStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ncfas_statuses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id');
            $table->integer('phase_id');
            $table->unsignedInteger('family_id');
            $table->text('comments');
            $table->timestamps();
        });

        Schema::table('ncfas_statuses', function(Blueprint $table){
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
        Schema::drop('ncfas_statuses');
    }
}
