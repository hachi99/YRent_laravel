<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('offic_id');
            $table->date('collectiondate');
            $table->date('returndate');
            $table->foreignId('flot_id');
            $table->foreignId('promotion_id');
            $table->foreignId('custom_id');
            $table->foreignId('insurcar_id');
            $table->timestamps();

            $table->foreign('flot_id')->references('id')->on('flots');
            $table->foreign('promotion_id')->references('id')->on('promotions');
            $table->foreign('custom_id')->references('id')->on('customs');
            $table->foreign('insurcar_id')->references('id')->on('insurcars');
            $table->foreign('offic_id')->references('id')->on('offics');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservs');
    }
};
