<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConditionHealthHistory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        //
        Schema::create('condition_health_history', function (Blueprint $table) {
            $table->integer('condition')->unsigned()->index();
            $table->foreign('condition')->references('id')->on('condition_categories');
            $table->integer('health_history_id')->unsigned()->index();
            $table->foreign('health_history_id')->references('id')->on('health_histories');
            $table->primary(['condition', 'health_history_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('condition_health_history');

    }
}
