<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConditionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conditions', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->unsignedInteger('condition_category_id');
            $table->foreign('condition_category_id')->references('id')->on('condition_categories')->onDelete('cascade');
            $table->string('name');
            $table->string('details');
            $table->boolean('family_history');
            $table->unsignedInteger('health_history_id');
            $table->foreign('health_history_id')->references('id')->on('health_histories')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('conditions');
    }
}
